@extends('layouts.FrontEnd')
@section('content')
<div class="section" style="background-color: #e8e8e861; height: auto; padding-bottom:10%; ">
	<div class="container">
		<div style="margin-top: 4%;">
			<span>Refresh halaman ini setelah Anda melakukan pembayaran atau kembali ke halaman utama</span><br><br>
			<div class="row">
				<div class="col-md-4">
					<div class="square">
						<div style="padding-top: 16px; padding-left: 12px">
							<span class="font-style-black" style="font-size: 20px;">Detail Pemesanan</span>
						</div><hr>
						<div style=" padding-left: 12px">
							<span class="font-style-black" style="font-size: 21px">No. Invoice :</span><br>
							<span class="font-style-grey" style="font-size: 21px">{{ $order->invoice }}</span><br><br>

							<span class="font-style-black" style="font-size: 21px">Nama Pengguna :</span><br>
							<span class="font-style-grey" style="font-size: 21px">{{ $order->nama }}</span><br><br>

							<span class="font-style-black" style="font-size: 21px">Nama Paket</span><br>
							<span class="font-style-grey" style="font-size: 21px">{{ $order->nama_paket }} {{$order->duration}} {{ $order->type }}</span><br><br>

							<span class="font-style-black" style="font-size: 21px">Masa Paket</span><br>
							<span class="font-style-grey" style="font-size: 21px">{{ $expired_paket }}</span><br><br>
						</div>
					</div><br>
					@if($pay->dataOrder->id_payment == 1 || $pay->dataOrder->id_payment == 2)
						@if($pay->data->jenis_payment == 'Manual')
							<div class="square">
								<div style="padding-left: 12px; padding-top: 16px; padding-bottom: 16px;">
								@if($pay->data->textPayment == 'Bukti Pembayaran sudah Diupload, Team akan menghubungi segera, jika Ada Pertanyaan atau keluhan silahkan masuk ke halaman profile -> Hubungi Kami')
									<span class="font-style-grey" style="font-size: 18px">{{$pay->data->textPayment}}</span>
								@else
									<label>Upload Bukti Pembayaran</label>
									<form method="post" action="{{ route('Order.BuktiPembayaran') }}" enctype="multipart/form-data">@csrf
										<input type="file" name="file">
										<input type="hidden" name="invoice" value="{{ encrypt($order->invoice) }}">
										<button type="submit" style="margin-left: 30px;">Upload</button>
									</form>
								@endif
								</div>
							</div><br>
						@endif
					@endif
					<div class="square">
						<div style="padding-left: 12px; padding-top: 16px; padding-bottom: 16px;">
							@foreach($pay->dataPayment->more as $key => $total)
								<div style="border-bottom: 1px dashed #6b6b6b; width: 95%;"> 
									<span class="font-style-grey" style="font-size: 21px">{{ $total->title }}</span>
									<span class="font-style-black" style=" float:right; font-size: 21px ">{{ $total->value }}</span>
								</div>
							@endforeach
						</div>
					</div><br>
				</div>
				
				<div class="col-md-7">
					@if(!$pay->tutorial)
						@foreach($pay->data as $key => $bank)
							<span class="font-style-black" style="font-size:20px;">{{$bank->channel}}</span><br>
							<span class="font-style-black" style="font-size:15px;">{{$bank->keterangan}}</span><br>
							<div class="square" style="padding : 1px 52px 1px 52px;">
								<div class="row"> 
									@foreach($bank->list as $list)
									<div class="col-md-6">
										<div>
											<input type="radio" name="payment" value="{{ encrypt($list->id_payment) }}" onclick="selectpayment('{{ encrypt($order->invoice) }}',this.value)">
											<img style="width: 55%" src="{{ $list->breadchumb }}"><br>
										</div>
										<div style="margin-top: -24px; margin-right: -12px; margin-left: 21px;">
											<span><b>{{ $list->nama_payment }}</b></span>
										</div>
									</div>
									@endforeach
								</div>
							</div><br>
						@endforeach
					@else
						<div class="square" style="padding : 11px 52px 11px 52px; height: auto">
							@if($pay->dataOrder->id_payment == 4)
								<span class="font-style-grey" style="font-size: 20px">Qr Code : </span>
								<center>
									<img style="width: 70%;" src="{{$pay->data->midtrans->qr_code}}"><br>
								</center>
							@else
							<span class="font-style-black" style="font-size:21px;">Nama Rekening</span>
							<img  style="float: right; width: 10%" src="{{ $pay->data->breadchumb }}"><br>
							<span class="font-style-grey" style="font-size: 20px">{{ $pay->data->nama_bank }}</span><br><br>

							
							<span class="font-style-black" style="font-size:21px;">No Rekening</span><br>
							<span class="font-style-grey" style="font-size: 20px">@if($pay->data->midtrans){{ $pay->data->midtrans->virtual_account }}@else{{$pay->data->no_payment}} @endif</span><br><br>
							@endif

							@if($pay->data->midtrans)
							<center>
								<span class="font-style-grey" style="font-size:21px;">Lakukan Pembayaran Sebelum :</span><br>
								<span class="font-style" style="font-size:21px; color: red;">{{ $pay->data->midtrans->transaction_time_convert }}</span><br>
							</center>
							@endif
						</div><br>
						@if($pay->data->textPayment != 'Bukti Pembayaran sudah Diupload, Team akan menghubungi segera, jika Ada Pertanyaan atau keluhan silahkan masuk ke halaman profile -> Hubungi Kami')
							<div class="button-berlangganan" onclick="changemethod('{{ encrypt($order->invoice) }}')" style="cursor: pointer;">
								<center>
									<span class="font-style" style="font-size: 18px">Ganti Metode Pembayaran</span>
								</center>
							</div><br>
						@endif
						<div class="square" style="padding : 11px 52px 11px 52px; height: auto">
							@foreach($pay->tutorial as $key => $tutor)
								<span class="font-style-grey" style="font-size: 18px">{{$key + 1}} . {{ $tutor->title }}</span><br><br>
							@endforeach
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('script')
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
    width:100%; 
    background-color:white; 
    border-radius: 15px;
    padding:;
    border: 1px solid #00B159; 
  }

  .button-berlangganan{
  	border-radius: 54px;
    background-color: #fd8c00;
    height: auto;
    width: 100%;
    padding: 8px 0px 8px 0px;
    color: white;
    font-size: 20px;
  }
</style>

<script type="text/javascript">
	function selectpayment(invoice,id_payment){
		$.ajax({
		    type: "GET",
		    url: '{{ route("Order.selectpayment") }}',
		    data: {
		        invoice    : invoice,
		        id_payment : id_payment,
		    },
		    success: function(responses){  
		    	location.reload()
		    }
		});
	}

	function changemethod(invoice){
		$.ajax({
		    type: "GET",
		    url: '{{ route("Order.changepayment") }}',
		    data: {
		        invoice    : invoice,
		    },
		    success: function(responses){  
		    	location.reload()
		    }
		});
	}
</script>
@endsection