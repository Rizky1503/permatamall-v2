<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomePageController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        $private = "Harus_login";
        $data   = json_decode(file_get_contents(ENV('APP_URL_API').'bo/list/paket'));
        $ringkasan = json_decode(file_get_contents(ENV('APP_URL_API_V2').'web/ringkasan'));
        $soal = json_decode(file_get_contents(ENV('APP_URL_API_V2').'web/soal'));

        return view('Pages.homePage')->with([
            'private'    => $private,
            'data'       => $data,
            'ringkasan'  => $ringkasan,
            'soal'       => $soal, 
        ]);          
    }

     public function career(){        
        $private = "Harus_login";
       
        return view('Pages.carrer')->with([
            'private'    => $private,
        ]);          
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
