@extends('layouts.FrontEnd')
@section('content')

<div class="section" style="background-color: #00B159; height: auto; padding-bottom:10%; ">
	<div class="container">
		<div style="margin-top: 4%;">
			<center>
				<span class="font-style" style="font-size: 28px;"><b> {{$nama}} </b></span><br>

				<span class="font-style" style="font-size: 28px;">ANDA MEMILIH PAKET {{$kelas}}</span><br>

				@if($page == 'aktif')
					<span class="font-style" style="font-size: 28px;">{{$status}}</span><br>
				@elseif($kelas == 'KELAS 12 IPA' || $kelas == 'KELAS 12 IPS' || $kelas == 'KELAS 11 IPA' || $kelas == 'KELAS 11 IPS' || $kelas == 'KELAS 10 IPA' || $kelas == 'KELAS 10 IPS')
					<span class="font-style" style="font-size: 28px;">PAKET GRATIS 2 HARI UNTUK {{$kelas}} TELAH SELESAI</span><br>
				@else
					<span class="font-style" style="font-size: 28px;">PAKET GRATIS SELAMA PROMOSI UNTUK {{$kelas}} TELAH SELESAI</span><br>
				@endif

				@if($status == 'MOHON MAAF ANDA BELUM MEMPUNYAI PAKET AKTIF')
					<span class="font-style" style="font-size: 28px;">SILAHKAN PILIH PAKET PERMATABELAJAR UNTUK BERLANGGANAN :</span><br>
				@elseif($page == 'aktif')
					<span class="font-style" style="font-size: 28px;">TELAH DI AKTIFKAN, SILAHKAN DOWNLOAD APLIKASI KAMI :</span><br>
				@else
				@endif				
			</center>
		</div>
		<div style="margin-top: 5%">
			<center>
				@if($paket)
					<div class="row">
						@foreach($paket->data as $key => $paket)
							<div class="col-md-4" style="margin-top: 12px;">
								<div class="square">
									<center>
										<span class="font-style" style="font-size: 21px; color: #504e4e;">{{ $paket->nama_paket }}</span><br>
										<span class="font-style" style="font-size: 21px; color: #504e4e;">{{ $paket->kelas }}</span><br><br>
										<span class="font-style" style="font-size: 14px; color: #504e4e;">aktif sampai {{ $paket->expired}}</span><br>
										<span class="font-style" style="font-size: 23px; margin-bottom: 10px; color: #00B159;">RP</span>
										<span class="font-style" style="font-size: 45px; color: #00B159;">{{ number_format($paket->price,0,',','.') }}</span><br>
										<div class="tentang-permata">
										  <table>
										    <tr>
										      <td><span class="font-style" style="font-size: 17px; color: #504e4e;"> - Ringkasan Materi Pelajaran </span></td>
										    </tr>
										    <tr>
										      <td><span class="font-style" style="font-size: 17px; color: #504e4e;"> - Soal Latihan dengan Pembahasan </span></td>
										    </tr>
										    <tr>
										      <td><span class="font-style" style="font-size: 17px; color: #504e4e;"> - Video Tutorial Belajar </span></td>
										    </tr>
										    <tr>
										      <td><span class="font-style" style="font-size: 17px; color: #504e4e;"> - Forum Diskusi dan Konsultasi </span></td>
										    </tr>
										  </table>            
										</div><br>
										<a href="{{ route('Order.order',['id_paket' => encrypt($paket->id_paket),'id_price'=> encrypt($paket->id_price),'expired_paket'=>encrypt($paket->expired),'kelas'=> encrypt($kelas)]) }}">
											<div class="button-berlangganan" style="cursor: pointer;">
												<span class="font-style" style="font-size: 22px;">Berlangganan</span>
											</div>
										</a>
									</center>
								</div>	
							</div>
						@endforeach
					</div>
				@else
				<div class="row">
					<div class="col-md-4">
						<p><a href='https://play.google.com/store/apps/details?id=com.permatabimbel'><img src="{!! asset('public/assets/images/icon/icon/cb935093.png') !!}" alt="" style="max-height: 100px;"></a></p>
					</div>
					<div class="col-md-4">
						<p> <a href="{!! asset('public/destkop/PermataBelajar.msi') !!}"><img src="{!! asset('public/assets/images/icon/icon/Windows_badge.png') !!}" alt="" style="max-height: 100px;"></a></p>
					</div>
					<div class="col-md-4">
						<p><a href=''><img src="{!! asset('public/assets/images/icon/icon/c3ef5d85.png') !!}" alt="" style="max-height: 100px;"></a></p>
					</div>
				</div>
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

  .square{
    height:auto; 
    width:100%; 
    background-color:white; 
    border-radius: 17px 17px 7px 61px;
    padding: 5% 12% 6% 12%;
  }

  .button-berlangganan{
  	border-radius: 54px;
    background-color: #00B159;
    height: auto;
    width: 100%;
    padding: 8px 0px 8px 0px;
  }
</style>

@endsection