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

        $detail     = Session::get('paket');
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
        

        return redirect()->route('Login.index',['kelas' => $detail, 'nama_kelas' => $nama_kelas, 'id_durasi'=> $durasi]);
    }

    public function jenis_user(Request $request){
        Session::put('jenis_user_login',encrypt($request->jenis));
    }

}
