<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/forgot', 'RegistrasiController@ForgotApi')->name('ApiForgotPassword.index');


// notification
Route::group(['prefix'=>'web/notification','as'=>'ApiNotification.'], function(){
    Route::post('/member', function(Request $request){
    	if (!empty($request->_token)) {
    		$url = ENV('APP_URL_API').'notification/member/'.decrypt($request->_token);
       		$data = json_decode(file_get_contents($url));

       		$new_array = array();
       		foreach ($data->Data as $key => $value) {
       			$abad['url'] = route('Notification.more',[encrypt($value->id_notifikasi)]);
       			$abad['produk_notifikasi'] = $value->produk_notifikasi;
       			$abad['status_notifikasi'] = $value->status_notifikasi;
       			$abad['keterangan'] = $value->keterangan;
       			$new_array[] = $abad;


       		}
       		return array([
       			"count" => $data->Count->count,
       			"data" => $new_array,
       		]);
    	}else{
    		return 0;
    	}    	
    })->name('member');
});

// chat post
Route::group(['prefix'=>'web/chat/post','as'=>'ChatPost.'], function(){
    Route::post('/member', function(Request $request){
      return $request->all();    
    })->name('Member');
});


// // chat post
// Route::group(['prefix'=>'/broadcast','as'=>'Broadcast.'], function(){
//     Route::get('/whatsapp/{urutan_pertama}/{urutan_terakhir}', function(Request $request){

//           $json = file_get_contents("http://localhost/permataMall-FrontEnd/public/json_no_telp.json");

//           foreach(json_decode($json)->tigaratuslimapuluh_empatratus as $key => $value) {
//             $data = [
//               'phone' => $value->no_telp, // Receivers phone
//               'body' => "Silahkan mencoba Aplikasi *Permata bimbel Online*, yang mendukung *KURIKULUM NASIONAL* dan membantu siswa agar tetap belajar dari rumah, *GRATIS SELAMA MASA PROMOSI...* https://bit.ly/permatamallandroid", // Message
//             ];
//             $json = json_encode($data); // Encode data to JSON
//             // URL for request POST /message
//             $url = 'https://eu25.chat-api.com/instance114997/sendMessage?token=0yce1feg1fqsjzbq';
//             // Make a POST request
//             $options = stream_context_create(['http' => [
//                     'method'  => 'POST',
//                     'header'  => 'Content-type: application/json',
//                     'content' => $json
//                 ]
//             ]);
//             // Send a request
//             $result = file_get_contents($url, false, $options);
//           }

//     })->name('whatsapp');
// });



// notification
Route::group(['prefix'=>'mobile/','as'=>'MobileUpload.'], function(){
    Route::post('/upload_pembayaran', function(Request $request){
      

      return $request->all();
      
      $target_dir   = 'uploads/';
      $target_file  = $target_dir.basename($_FILES["fileToUpload"]["name"]);

      $status = array();

      if(move_uploaded_file($_FILES['fileToUpload']['tm_name'], $target_file)){
        $status['kode'] = 1;
        $status['deskripsi'] = 'upload hasil';
      }else{
        $status['kode'] = 0;
        $status['deskripsi'] = 'upload gagal';
      }

      echo json_decode($status);
    });
});


// notification
Route::group(['prefix'=>'mobile/','as'=>'Send_Email.'], function(){
    Route::post('/pelanggan', function(Request $request){
      $client = new \GuzzleHttp\Client();
      $response = $client->request('POST', ENV('APP_URL_API').'web/profile/pelanggan/email_send', [
          'form_params'   => [
              'id_user'   => $request->id_pelanggan,
              'link'      => route('EmailVerify.confirm',[encrypt($request->id_pelanggan)])
          ]
      ]);
      return response()->json([
        'status' => 'true', 
        'responses' => '200', 
        'Data' => 'Berhasil'
      ]);      
    })->name('pelanggan');


    Route::post('/pelanggan/konfirmasi_email', function(Request $request){
      $url = ENV('APP_URL_API').'web/profile/pelanggan/email_confirm/'.decrypt($request->token);
      $data = json_decode(file_get_contents($url));   

      $data = response()->json([
        'id_pelanggan' => decrypt($request->token),
        'command'      => 'Email Berhasil Dikonfirmasi'
      ]);

      return response()->json([
        'status' => 'true', 
        'responses' => '200', 
        'Data' => $data
      ]);
    })->name('pelanggan_konfirmasi_email');


    Route::post('/pelanggan/auth/request_otp', function(Request $request){

      if ($request->no_telpon) {
        $phone = $request->no_telpon;
        $replace_phone = array();
        if (substr($phone, 0, 1) == '0') {
          array_push($replace_phone, "+62".substr($phone, 1, 20));
        }else if (substr($phone, 0, 1) != "+") {
          array_push($replace_phone, "+".$phone);
        }else{
          array_push($replace_phone, $phone);          
        }
        try {
          $token = env("TWILIO_AUTH_TOKEN");
          $twilio_sid = env("TWILIO_SID");
          $twilio_verify_sid = env("TWILIO_VERIFY_SID");
          $twilio = new Twilio\Rest\Client($twilio_sid, $token);
          $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($replace_phone[0], "sms");
          return response()->json([
            'status' => 'true', 
            'responses' => '200', 
            'Data' => 'kode OTP telah dikirim ke '.$phone
          ]);
        } catch (Exception $e) {
          return response()->json([
            'status' => 'true', 
            'responses' => '201', 
            'Data' => 'terjadi kesalahan, mohon gunakan no telpon lain'
          ]);       
        }
      }else{
        return response()->json([
          'status' => 'true', 
          'responses' => '201', 
          'Data' => 'no telpon tidak valid'
        ]);               
      }      
    })->name('pelanggan_request_otp');
    

    Route::post('/pelanggan/auth/verify_otp', function(Request $request){
      try {
        if ($request->phone_number) {
          $phone = $request->phone_number;
          $replace_phone = array();
          if (substr($phone, 0, 1) == '0') {
            array_push($replace_phone, "+62".substr($phone, 1, 20));
          }else if (substr($phone, 0, 1) != "+") {
            array_push($replace_phone, "+".$phone);
          }else{
            array_push($replace_phone, $phone);          
          }
          $token = env("TWILIO_AUTH_TOKEN");
          $twilio_sid = env("TWILIO_SID");
          $twilio_verify_sid = env("TWILIO_VERIFY_SID");
          $twilio = new Twilio\Rest\Client($twilio_sid, $token);
          $verification = $twilio->verify->v2->services($twilio_verify_sid)
              ->verificationChecks
              ->create($request->verification_code, array('to' => $replace_phone[0]));
          if ($verification->valid) {
              return response()->json([
                'status' => 'true', 
                'responses' => '200', 
                'Data' => 'Verifikasi gagal, silahkan kirim ulang kode'
              ]);
          }else{
              return response()->json([
                'status' => 'true', 
                'responses' => '201', 
                'Data' => 'Verifikasi Gagal'
              ]);
          }  
        }else{
          return response()->json([
            'status' => 'true', 
            'responses' => '201', 
            'Data' => 'Verifikasi gagal, silahkan kirim ulang kode'
          ]);
        }                
      } catch (Exception $e) {
        return response()->json([
          'status' => 'true', 
          'responses' => '201', 
          'Data' => 'Verifikasi gagal, silahkan kirim ulang kode'
        ]);       
      }
    })->name('pelanggan_verify_otp');
});
