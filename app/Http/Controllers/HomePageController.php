<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File; 
use Illuminate\Routing\Controller;
use Illuminate\Http\Response;
use Image;


class HomePageController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
      $client = new \GuzzleHttp\Client();

      $data   = json_decode(file_get_contents(ENV('APP_URL_API').'bo/list/paket'));
      // $ringkasan = json_decode(file_get_contents('http://api.permatamall.com/api/v2/web/ringkasan'));
      // $soal = json_decode(file_get_contents('http://api.permatamall.com/api/v2/web/soal'));

      $qkelas = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/filter', [
      'form_params' => [
          'page'  => 'kelas',
      ],
      'headers' => [
               'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
      ]
      ]);
      $kelas =  json_decode($qkelas->getBody());

      $qdurasi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/filter', [
        'form_params' => [
           'page'  => 'durasi',
        ],
        'headers' => [
                'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
        ]
       ]);
      $durasi =  json_decode($qdurasi->getBody());

      return view('Pages.homePage')->with([
         'data'       => $data,
         // 'ringkasan'  => $ringkasan,
         // 'soal'       => $soal, 
         'kelas'      => $kelas->data,
         'durasi'     => $durasi->data,
      ]);          
   }

    public function career(){        
        return view('Pages.carrer');          
    }

    public function storecarrer(Request $request){
        $nama = str_replace(' ', '_', $request->nama);

        $endpoint = "/file-submissions";
        $response = array();
        $file = $request->file('file');
        $name = date('YmdHis') . '-' . $nama . '.' . $file->getClientOriginalExtension();
        $path = base_path() .'/public/images/v2/Recruitment/';
        $resource = fopen($file,"r") or die("File upload Problems");
        $file->move($path, $name);

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API_RESOURCE_V2').'upload/StoreCV', [
              'multipart' => [
                  [
                      'name'     => 'cv',
                      'contents' => file_get_contents($path . $name),
                      'filename' => $name,
                  ],
              ]
          ]);

        $response = $client->request('POST', ENV('APP_URL_API_V2').'recruitment/storerecruitment', [
            'form_params'     => [
                'nama'  => $request->nama,
                'file'  => $name,
            ]
        ]);

        File::delete($path . $name);

        return redirect()->route('FrontEnd.career')->with('alert', 'File Berhasil Di Upload');
    }

    public function store_survey(Request $request){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API').'web/homepage/survey/store', [
            'form_params'         => [
                'id_pelanggan'    => decrypt(Session::get('id_token_xmtrusr')),
                'sumber'          => $request->sumber
            ]
        ]);
    }

    public function bantuan (){
        return view('Pages.bantuan');
    }

    public function pengembangan (){
        return view('layouts.pengembangan');
    }    

    public function telphone (){
        return view('Pages.insertPhone');
    }

    public function store_telphone (Request $request){
        $this->validate($request, [
            'no_telpon'  => 'required|max:13|min:11',
        ]);

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API').'web/profile/store_telephone', [
            'form_params'         => [
                'id_pelanggan'    => decrypt(Session::get('id_token_xmtrusr')),
                'no_telp'         => $request->no_telpon
            ]
        ]);

        if (session('link') == "") {
            return redirect()->route('Mitra.index');
        }else{
            return redirect(session('link'));                
        }
    }

}
