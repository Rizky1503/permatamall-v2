<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Socialite;
use Socialize;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($driver)
    {   
        return Socialite::driver($driver)->redirect();
    }

    public function handleProviderCallback($driver)
    {
        // $user = Socialite::driver($driver)->user();
        $user = Socialite::driver($driver)->stateless()->user();
        $now = \Carbon\Carbon::now()->format('mY');

        $detail     = decrypt(Session::get('paket'));
        $nama_kelas = Session::get('nama_kelas');
        $durasi     = Session::get('durasi');
        
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', ENV('APP_URL_API').'merchant/pelanggan_google', [
            'form_params'               => [
                'nama'      => $user->user['name'],
                'no_telpon' => '',
                'email'     => $user->user['email'],
                'password'  => $now,
                'alamat'    => '',
                'kota'      => '',                    
            ]
        ]);

        $responses = json_decode($response->getBody());
        Session::put('id_token_xmtrusr',encrypt($responses->id_pelanggan));
        Session::put('id_token_xmtrusr_name',encrypt($responses->nama));        
        Session::put('profile',encrypt($responses));                        
        Session::put('login',TRUE);
        

        $cekApi = $client->request('POST', ENV('APP_URL_API_V2').'web/transaksi/check/paket', [
         'form_params' => [
             'id_kelas'     => $detail,
             'id_pelanggan' => $responses->id_pelanggan
         ],
         'headers' => [
                  'Authorization' => 'Bearer '.'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE'
         ]
        ]);
        $cek =  json_decode($cekApi->getBody());

        if ($cek->data->page == 'gratis') {
            return redirect()->route('Order.download',['nama'=>encrypt($responses->nama),'kelas'=>$nama_kelas,'status'=>encrypt('GRATIS SELAMA MASA PROMOSI'),'page'=>'download','durasi'=>$durasi,'id_kelas'=>decrypt($detail)]);
        }else if ($cek->data->page == '2 hari') {
            return redirect()->route('Order.download',['nama'=>encrypt($responses->nama),'kelas'=>$nama_kelas,'status'=>encrypt('GRATIS SELAMA 2 HARI UNTUK SMA'),'page'=>'2 hari','durasi'=>$durasi,'id_kelas'=>decrypt($detail)]);
        }else if ($cek->data->page == 'aktif') {
            return redirect()->route('Order.download',['nama'=>encrypt($responses->nama),'kelas'=>$nama_kelas,'status'=>encrypt($cek->data->title),'page'=>'aktif','durasi'=>$durasi,'id_kelas'=>decrypt($detail)]);
        }else{
            return redirect()->route('Order.download',['nama'=>encrypt($responses->nama),'kelas'=>$nama_kelas,'status'=>encrypt('MOHON MAAF ANDA BELUM MEMPUNYAI PAKET AKTIF'),'page'=>'paket','durasi'=>$durasi,'id_kelas'=>decrypt($detail)]);
        }
    }

    public function jenis_user(Request $request){
        Session::put('jenis_user_login',encrypt($request->jenis));
    }

}
