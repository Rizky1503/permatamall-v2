@extends('layouts.FrontEnd')
@section('content')

<div class="section" style="background-color: #00B159; height: 500px;">
	<div class="container">
		<div style="margin-top: 4%;">
			<center>
				
				<span class="font-style" style="font-size: 28px;">SELAMAT {{$nama}} PAKET {{$kelas}}</span><br>
				<span class="font-style" style="font-size: 28px;">* {{$status}}</span><br>
				@if($status == 'MOHON MAAF ANDA BELUM MEMPUNYAI PAKET AKTIF')
				<span class="font-style" style="font-size: 28px;">SILAHKAN PILIH PAKET PERMATABELAJAR  :</span><br>
				@else
				<span class="font-style" style="font-size: 28px;">TELAH DI AKTIFKAN, SILAHKAN DOWNLOAD APLIKASI KAMI :</span><br>
				@endif				
			</center>
		</div>
	</div>
</div>

@endsection
@section('script')
<style type="text/css">
  .font-style{
    font-family: 'Ubuntu', sans-serif;
    color: white;
  }

  .square-content{
    height:auto; 
    width:60%; 
    background-color:white; 
    border-radius: 10px; 
    padding: 1% 2% 1% 2%;

  }
</style>

@endsection