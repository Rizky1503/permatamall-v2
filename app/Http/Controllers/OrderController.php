<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Routing\Controller;
use Illuminate\Http\Response;
use Image;


class OrderController extends Controller
{
    public function download(Request $request){
        $page      = $request->page;
        $nama      = strtoupper(decrypt($request->nama)); 
        $kelas     = strtoupper($request->kelas);
        $status    = strtoupper(decrypt($request->status)); 
        $durasi    = $request->durasi;
        $id_kelas  = $request->id_kelas;

        if($page == 'paket' || $page == '2 hari'){
            $client = new \GuzzleHttp\Client();
            $paketApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/list/paket', [
                'form_params' => [
                    'id_kelas' => $id_kelas,
                    'durasi'   => $durasi,
                    'page'     => $page,
                ],
                'headers' => [
                    'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
             ]
            ]);
            $paket =  json_decode($paketApi->getBody());
        }else{
            $paket = [];
        }
       
        return view('Pages.download')->with([
            'nama'   => $nama,
            'kelas'  => $kelas,
            'status' => $status,
            'page'   => $page,
            'paket'  => $paket,
        ]);
    }

    public function order(Request $request){

        $id_pelanggan   = decrypt(Session::get('id_token_xmtrusr'));
        $id_paket       = decrypt($request->id_paket);
        $id_price       = decrypt($request->id_price);
        $expired_paket  = decrypt($request->expired_paket);
        $kelas          = decrypt($request->kelas);

        $client = new \GuzzleHttp\Client();
        $statusApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/order/status', [
            'form_params' => [
                'id_pelanggan' => $id_pelanggan,
                'id_paket'     => $id_paket,
                'id_price'     => $id_price
            ],

            'headers' => [
                'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
            ]
        ]);

        $status =  json_decode($statusApi->getBody());

        if ($status->data) {
            if ($status->data->tab_order == 'Selesai') {
            return redirect()->route('Order.download',['nama'=>Session::get('id_token_xmtrusr_name'),'kelas'=>$kelas,'status'=>encrypt('Berlangganan Sampai'.$expired_paket),'page'=>'aktif','durasi'=>'1','id_kelas'=>'1']);
            }else{
                $orderApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/order/requested', [
                    'form_params' => [
                        'id_pelanggan' => $id_pelanggan,
                        'id_paket'     => $id_paket,
                        'id_price'     => $id_price
                    ],

                    'headers' => [
                        'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
                    ]
                ]);

                $order =  json_decode($orderApi->getBody());

           
                $payApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/order/paymentList', [
                    'form_params' => [
                        'invoice' => $order->data->invoice,
                    ],

                    'headers' => [
                        'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
                    ]
                ]);

                $pay =  json_decode($payApi->getBody());

                return view('Pages.payment')->with([
                    'order'         => $order->data,
                    'expired_paket' => $expired_paket,
                    'pay'           => $pay->data,
                ]);
            }
        }else{
            $orderApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/order/requested', [
                'form_params' => [
                    'id_pelanggan' => $id_pelanggan,
                    'id_paket'     => $id_paket,
                    'id_price'     => $id_price
                ],

                'headers' => [
                    'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
                ]
            ]);

            $order =  json_decode($orderApi->getBody());

        
            $payApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/order/paymentList', [
                'form_params' => [
                    'invoice' => $order->data->invoice,
                ],

                'headers' => [
                    'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
                ]
            ]);

            $pay =  json_decode($payApi->getBody());

            return view('Pages.payment')->with([
                'order'         => $order->data,
                'expired_paket' => $expired_paket,
                'pay'           => $pay->data,
            ]);
        }
    }

    public function selectpayment(Request $request){
        $client = new \GuzzleHttp\Client();
        $orderApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/order/paymentSubmit', [
            'form_params' => [
                'invoice'    => decrypt($request->invoice),
                'id_payment' => decrypt($request->id_payment),
            ],

            'headers' => [
                'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
            ]
        ]);
    }

    public function changepayment(Request $request){
        $client = new \GuzzleHttp\Client();
        $orderApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/order/changeMethod', [
            'form_params' => [
                'invoice'    => decrypt($request->invoice),
            ],

            'headers' => [
                'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
            ]
        ]);
    }

    public function BuktiPembayaran(Request $request){
        
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $endpoint = "/file-submissions";
        $response = array();
        $file = $request->file('file');
        $name = 'bukti_pembayaran'.'-'.date('Ymd') . '-' . substr(str_shuffle($permitted_chars), 0, 10) . '-' . $file->getClientOriginalExtension();
        $path = base_path() .'/public/images/v2/UploadPembayaran/';
        $resource = fopen($file,"r") or die("File upload Problems");
        $file->move($path, $name);

        $client = new \GuzzleHttp\Client();
        $buktiApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/order/buktiPembayaran', [
            'form_params' => [
                'invoice' => decrypt($request->invoice),
                'file'    => $name,
            ],

            'headers' => [
                'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
            ]
        ]);

        return redirect($_SERVER['HTTP_REFERER']);
        
    }
}
