@extends('layouts.FrontEnd')
@section('content')

<div class="section" style="background-color: #00B159; height: 500px;">
	<div class="container">
		<div class="square-content" style="margin-top: 3em;">
			<div class="selamat-belajar">
				<span class="font-style" style="color: #00B159; font-size: 25px">Selamat Belajar</span>
			</div><hr>
			<div class="row">
		        <div class="col-md-12 detail">
		          <div class="paket-langganan">
		            <span class="font-style" style="color:#797474; font-size: 20px; ">Paket/Kelas Kamu</span>
		            <span class="font-style" style="color:#797474; font-size: 20px; ">:</span>
		            <span class="font-style" style="color:#797474; font-size: 20px; " id="value-paket"><b>{{$kelas}}</b></span>
		          </div>
		          <div class="durasi-langganan" style="margin-right: 66px;">
		            <span class="font-style" style="color:#797474; font-size: 20px; ">Durasi Langganan</span>
		            <span class="font-style" style="color:#797474; font-size: 20px; ">:</span>
		            <span class="font-style" style="color:#797474; font-size: 20px; " id="value-durasi"><b>{{$durasi}} Bulan</b></span>
		          </div>
		          <div class="Harga-langganan" style="margin-bottom: 20px;">
		            <span class="font-style" style="color:#797474; font-size: 20px; ">Harga Paket</span>
		            <span class="font-style titik-dua" style="color:#797474; font-size: 20px; ">:</span>
		            <span class="font-style" style="color:#797474; font-size: 20px; "><b>Gratis Selama Promosi</b></span>
		          </div>
		        </div>
		        <div class="col-md-12">
		          <div class="col-md-12">
		            <a href="https://play.google.com/store/apps/details?id=com.permatabimbel" target="_blank">
		              <div style="border: 1px solid #00b159; background-color: #00b159; height: 40px; padding-top: 5px; border-radius: 13px;">
		                <center>
		                  <span class="font-style" style="font-size: 20px; color: white; ">Download Sekarang</span>
		                </center>
		              </div>
		            </a>
		          </div>
		        </div>
		    </div>
		</div>
	</div>
</div>

@endsection
@section('script')

<style type="text/css">
	@media screen and (min-width: 601px) {
		.titik-dua{
			margin-left: 51px;
		}

		.detail{
			padding: 0 150px 0 281px;
		}

		.selamat-belajar{
			padding: 0 246px 0 335px;
		}
	}

	.square-content{
	  height:auto; 
	  width:100%; 
	  background-color:white; 
	  border-radius: 10px; 
	  padding: 7% 13% 7% 13%;
	}
</style>
@endsection