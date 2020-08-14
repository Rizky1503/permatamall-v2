@extends('layouts.FrontEnd')
@section('content')

<div class="section" style="background-color: #00B159; height: auto; padding-bottom:10%; ">
	<div class="container">
		<div style="margin-top: 4%;">
			<center>
				@if($paket)
				<div id="transaksi">
					@foreach($paket as $key => $paket)
						@if($paket->command == 'TSCN')
							<div class="square" style="margin-top: 2%;">
								<span class="font-style-black" style="font-size: 30px">{{ $paket->nama_paket }}</span><hr>
								<table>
									@foreach($paket->result as $key => $result)
									<tr>
										<td width="45%"><span class="font-style-black" style="font-size: 20px">{{ $result->name }}</span></td>
										<td width="10%"><span class="font-style-black" style="font-size: 20px"> : </span></td>
										<td><span class="font-style-grey" style="font-size: 20px">{{ $result->value }}</span></td>
									</tr>
									@endforeach
								</table><br>

								@if($paket->id_paket != 4)
									<a href="{{ route('Order.order',['id_paket' => encrypt($paket->id_paket),'id_price' => encrypt($paket->id_price),'expired_paket' => encrypt($paket->expired),'kelas' => encrypt($paket->resultPaket->kelas)]) }}">
									<div class="button-berlangganan">
										<span class="font-style" style="font-size: 20px">Detail Pesanan</span>
									</div>
								@endif
								</a>
							</div>
						@endif
					@endforeach
				</div>
				@endif
			</center>
		</div>
	</div>
</div>

@endsection
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<script type="text/javascript">
	

	// sessionStorage.setItem("page", 0);
	// $(window).scroll(function() {
	// 	if($(window).scrollTop() >= $(document).height() - $(window).height()) {
	// 		var  jumlah = parseFloat(sessionStorage.getItem("page")) + 1
	// 		sessionStorage.setItem("page", jumlah);
			
	// 		var set_url = '{{ENV('APP_URL_API_V2')}}'

	// 		$.ajax({
	// 		    type: "POST",
	// 		    url: set_url + '',
	// 		    headers: {
	// 		            "Authorization":"Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1aWQiOjMsImlhdCI6MTU5NTI5ODMwN30.i4GWwTPyp853fcwO4f71qJTmQzu06qcSrh2_vw71tYE",
	// 		        },
	// 		    data: {
	// 		        page         : jumlah,
	// 		        id_pelanggan : '{{decrypt(Session::get('id_token_xmtrusr'))}}',
	// 		        active       : '1',
	// 		    },
	// 		    success: function(responses){  
	// 		    	location.reload()
	// 		    }
	// 		});
	// 	}
	// });

</script>

<style type="text/css">
  .font-style-black{
    font-family: 'Ubuntu', sans-serif;
    color: #504e4e;;
  }

  .font-style-grey{
    font-family: 'Ubuntu', sans-serif;
    color: #6b6b6b;;
  }

  .font-style{
    font-family: 'Ubuntu', sans-serif;
    color: white;
  }

  .square{
    height:auto; 
    width:60%; 
    background-color:white; 
    border-radius: 15px;
    padding: 2%;
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