<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegistrasiController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
      return view('Pages.Registrasi.index');
    }  

    public function refund_policy(){
        return view('Pages.Registrasi.refund');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function check(Request $request){
        $this->validate($request, [
            'jenis_registrasi'  => 'required',
            'nama_lengkap'      => 'required',
            'no_telp'           => 'required',
            'email'             => 'required|email',
            'Password'          => 'required',
            'alamat'            => 'required',
        ]);

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API').'merchant/pelanggan', [
            'form_params'               => [
                'nama'      => $request->nama_lengkap,
                'no_telpon' => $request->no_telp,
                'email'     => $request->email,
                'password'  => $request->Password,
                'alamat'    => $request->alamat,
                'kota'      => '',                    
            ]
        ]);

        if ($response->getBody() == "already_exist") {
            return redirect()->route('Registrasi.index')->with('alert','Email dan No telp telah terdaftar,silahkan login atau gunakan akun lain untuk registrasi');
        }else{

            $responses = json_decode($response->getBody());
            Session::put('id_token_xmtrusr',encrypt($responses->id_pelanggan));
            Session::put('id_token_xmtrusr_name',encrypt($responses->nama));        
            Session::put('profile',encrypt($responses));                        
            Session::put('login',TRUE);

            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', ENV('APP_URL_API').'web/profile/pelanggan/email_send', [
                'form_params'   => [
                    'id_user'   => decrypt(Session::get('id_token_xmtrusr')),
                    'link'      => route('EmailVerify.confirm',[Session::get('id_token_xmtrusr')])
                ]
            ]);

           
            return redirect()->route('EmailVerify.index');
                
        }  
    }  

   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function logout()
    {
        Session::flush();
        return redirect()->route('FrontEnd.index');
    } 


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login(Request $request)
    {   
        Session::put('paket',$request->kelas);
        Session::put('nama_kelas',$request->nama_kelas);
        Session::put('durasi',$request->id_durasi);

        if(Session::get('id_token_xmtrusr')){
            $client = new \GuzzleHttp\Client();
            $cekApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/check/paket', [
             'form_params' => [
                 'id_kelas'     => decrypt($request->kelas),
                 'id_pelanggan' => decrypt(Session::get('id_token_xmtrusr'))
             ],
             'headers' => [
                      'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
             ]
            ]);
            $cek =  json_decode($cekApi->getBody());
            
            if ($cek->data->page == 'gratis') {
                return redirect()->route('Order.download',['nama'=>Session::get('id_token_xmtrusr_name'),'kelas'=>$request->nama_kelas,'status'=>encrypt('GRATIS SELAMA MASA PROMOSI'),'page'=>'gratis','durasi'=>$request->id_durasi,'id_kelas'=>decrypt($request->kelas)]);
            }else if ($cek->data->page == '2 harI') {
                return redirect()->route('Order.download',['nama'=>Session::get('id_token_xmtrusr_name'),'kelas'=>$request->nama_kelas,'status'=>encrypt('GRATIS SELAMA 2 HARI UNTUK SMA'),'page'=>'2 hari','durasi'=>$request->id_durasi,'id_kelas'=>decrypt($request->kelas)]);
            }else if ($cek->data->page == 'aktif') {
                return redirect()->route('Order.download',['nama'=>Session::get('id_token_xmtrusr_name'),'kelas'=>$request->nama_kelas,'status'=>encrypt($cek->data->title),'page'=>'aktif','durasi'=>$request->id_durasi,'id_kelas'=>decrypt($request->kelas)]);
            }else{
                return redirect()->route('Order.download',['nama'=>Session::get('id_token_xmtrusr_name'),'kelas'=>$request->nama_kelas,'status'=>encrypt('MOHON MAAF ANDA BELUM MEMPUNYAI PAKET AKTIF'),'page'=>'paket','durasi'=>$request->id_durasi,'id_kelas'=>decrypt($request->kelas)]);
            }
        }else{
            return view('Pages.Registrasi.login')->with([
                'paket'      => $request->kelas,
                'nama_kelas' => $request->nama_kelas,
                'durasi'     => $request->id_durasi,
            ]);
        }
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'jenis_Login'  => 'required',
            'email' => 'required|email',
            'Password' => 'required',
        ]);


        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API').'merchant/pelanggan/cekLogin', [
            'form_params'   => [
                'email'     => $request->email,
                'password'  => $request->Password,
            ]
        ]);

        $responses = json_decode($response->getBody());
        if ($responses->status == "true") {
            Session::put('id_token_xmtrusr',encrypt($responses->cekEmail->id_pelanggan));
            Session::put('id_token_xmtrusr_name',encrypt($responses->cekEmail->nama));
            Session::put('profile',encrypt($responses->cekEmail));
            Session::put('login',TRUE);

            $cekApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/check/paket', [
             'form_params' => [
                 'id_kelas'     => decrypt($request->detail),
                 'id_pelanggan' =>$responses->cekEmail->id_pelanggan
             ],
             'headers' => [
                      'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
             ]
            ]);
            $cek =  json_decode($cekApi->getBody());
            
            if ($cek->data->page == 'gratis') {
                return redirect()->route('Order.download',['nama'=>encrypt($responses->cekEmail->nama),'kelas'=>$request->nama_kelas,'status'=>encrypt('GRATIS SELAMA MASA PROMOSI'),'page'=>'download','durasi'=>$request->durasi,'id_kelas'=>decrypt($request->detail)]);
            }else if ($cek->data->page == '2 hari') {
                return redirect()->route('Order.download',['nama'=>encrypt($responses->cekEmail->nama),'kelas'=>$request->nama_kelas,'status'=>encrypt('GRATIS SELAMA 2 HARI UNTUK SMA'),'page'=>'2 hari','durasi'=>$request->durasi,'id_kelas'=>decrypt($request->detail)]);
            }else if ($cek->data->page == 'aktif') {
                return redirect()->route('Order.download',['nama'=>encrypt($responses->cekEmail->nama),'kelas'=>$request->nama_kelas,'status'=>encrypt($cek->data->title),'page'=>'aktif','durasi'=>$request->durasi,'id_kelas'=>decrypt($request->detail)]);
            }else{
                return redirect()->route('Order.download',['nama'=>encrypt($responses->cekEmail->nama),'kelas'=>$request->nama_kelas,'status'=>encrypt('MOHON MAAF ANDA BELUM MEMPUNYAI PAKET AKTIF'),'page'=>'paket','durasi'=>$request->durasi,'id_kelas'=>decrypt($request->detail)]);
            }

        }else{
            return redirect()->route('Login.index')->with('alert','Login Gagal, pastikan email dan passwod sesuai');
        }
              
    }

   
    public function verify()
    {

        $EmailVerifiedPelanggan = json_decode(file_get_contents(ENV('APP_URL_API').'web/profile/pelanggan/email_verified/'.decrypt(Session::get('id_token_xmtrusr'))));      

        if(json_encode($EmailVerifiedPelanggan->data, true) == "false") {
            return redirect()->route('FrontEnd.index');
        }        
        return view('Pages.Registrasi.verify');
    }    
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function verifyMitra()
    {

        $EmailVerifiedMitra = json_decode(file_get_contents(ENV('APP_URL_API').'web/profile/mitra/email_verified/'.decrypt(Session::get('id_token_xmtrusr'))));      

        if(json_encode($EmailVerifiedMitra->data, true) == "false") {
            return redirect()->route('Login.download');
        }        
        return view('Pages.Registrasi.verifyMitra');
    }    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function request(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API').'web/profile/pelanggan/email_send', [
            'form_params'   => [
                'id_user'   => decrypt(Session::get('id_token_xmtrusr')),
                'link'      => route('EmailVerify.confirm',[Session::get('id_token_xmtrusr')])
            ]
        ]);
        return $response->getBody();
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function requestMitra(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API').'web/profile/mitra/email_send', [
            'form_params'   => [
                'id_user'   => decrypt(Session::get('id_token_xmtrusr')),
                'link'      => route('EmailVerifyMitra.confirm',[Session::get('id_token_xmtrusr')])
            ]
        ]);
        return $response->getBody();
    }   


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function confirm($id)
    {
        $url = ENV('APP_URL_API').'web/profile/pelanggan/email_confirm/'.decrypt($id);
        $data = json_decode(file_get_contents($url)); 

        $id_kelas = Session::get('paket');
        $nama_kelas = Session::get('nama_kelas');
        $durasi = Session::get('durasi');

        $client = new \GuzzleHttp\Client();
        $cekApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/check/paket', [
         'form_params' => [
             'id_kelas'     => decrypt($id_kelas),
             'id_pelanggan' => decrypt(Session::get('id_token_xmtrusr'))
         ],
         'headers' => [
                  'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
         ]
        ]);
        $cek =  json_decode($cekApi->getBody());

        if ($cek->data->page == 'gratis') {
            return redirect()->route('Order.download',['nama'=>Session::get('id_token_xmtrusr_name'),'kelas'=>$nama_kelas,'status'=>encrypt('GRATIS SELAMA MASA PROMOSI'),'page'=>'download','durasi'=>$durasi,'id_kelas'=>decrypt($id_kelas)]);
        }else if ($cek->data->page == '2 harI') {
            return redirect()->route('Order.download',['nama'=>Session::get('id_token_xmtrusr_name'),'kelas'=>$nama_kelas,'status'=>encrypt('GRATIS SELAMA 2 HARI UNTUK SMA'),'page'=>'2 hari','durasi'=>$durasi,'id_kelas'=>decrypt($id_kelas)]);
        }else if ($cek->data->page == 'aktif') {
            return redirect()->route('Order.download',['nama'=>Session::get('id_token_xmtrusr_name'),'kelas'=>$nama_kelas,'status'=>encrypt($cek->data->title),'page'=>'aktif','durasi'=>$durasi,'id_kelas'=>decrypt($id_kelas)]);
        }else{
            return redirect()->route('Order.download',['nama'=>Session::get('id_token_xmtrusr_name'),'kelas'=>$nama_kelas,'status'=>encrypt('MOHON MAAF ANDA BELUM MEMPUNYAI PAKET AKTIF'),'page'=>'paket','durasi'=>$durasi,'id_kelas'=>decrypt($id_kelas)]);
        }
        
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function confirmMitra($id)
    {
        $url = ENV('APP_URL_API').'web/profile/mitra/email_confirm/'.decrypt($id);
        $data = json_decode(file_get_contents($url));     
        return redirect()->route('Login.download');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Forgot()
    {
        if(Session::get('login')){
            return redirect()->route('Login.download');
        }
        return view('Pages.Registrasi.Forgot');
    } 


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ChangePassword(Request $request)
    {
        if(Session::get('login')){
            return redirect()->route('Login.download');
        }
        return view('Pages.Registrasi.Change')->with([
            'id' => str_replace(' ', '+', $request->token)
        ]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ChangePasswordStore(Request $request)
    {
        $this->validate($request, [
            'password_baru' => 'required|required_with:Konfirmasi_password_baru|same:Konfirmasi_password_baru',
            'Konfirmasi_password_baru'  => 'required',
            
        ]);

        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API').'web/profile/change', [
            'form_params'               => [
                'token'     => $request->_token_id,
                'password'  => $request->Konfirmasi_password_baru
            ]
        ]);


        if ($response->getBody() == "Berhasil") {
            return redirect()->route('Login.index')->with('success','Password Berhasil Diubah');
        }else{
            return redirect()->route('ChangePassword.index',['token' => $request->_token_id])->with('alert','Gagal diubah,silahkan coba lagi');
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ForgotApi(Request $request)
    {
        $client = new \GuzzleHttp\Client();            
        $response = $client->request('POST', ENV('APP_URL_API').'web/profile/forgot', [
            'form_params'   => [
                'email'         => $request->email,
                'jenis_login'   => $request->jenis_login,
                '_token'        => $request->_token,
            ]
        ]);
        return $response->getBody();
    }

    public function store_latlong(Request $request){
       return $request; 
    }       


}
