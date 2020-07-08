@extends('layouts.FrontEnd')
@section('content')
<div class="box";>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<span class="font-style" style="font-size: 30px; color: #00B159;">Posisi yang dibuka</span>
			</div>
			<div class="col-md-6" style="margin-top: 1em;" onclick="bisnis()">
				<div class="selection-carrer">
					<center>
						<span class="font-style"  style="font-size: 25px;">Business development</span>
					</center>
				</div>
			</div>
			<div class="col-md-6" onclick="guru()">
				<div class="selection-carrer" style="margin-left: -91px; margin-top: 14px;">
					<center>
						<span class="font-style" style="font-size: 25px;">Guru Les Private</span>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="background-color: #00B159; height: auto; padding-bottom: 16em;">
	<div class="container">
		<span class="font-style text-permata-carrer" style="position: relative; top: 40px;">PermataBelajar Karir</span><br>
		<span class="font-style text-tentang" style="color: white; font-size: 20px; position: relative; top:3em;">PermataBelajar didirikan dengan misi tunggal untuk membantu siswa/i SD,SMP,SMA dan Masuk PTN belajar dengan mudah secara lengkap dan menarik
darimana dan dimana saja di seluruh wilayah Indonesia dengan biaya murah menggunakan teknologi digital.
Kami percaya, ada harapan dan kebahagiaan yang melampaui jutaan mimpi dan membawa mereka lebih dekat dengan kenyataan.
Ketika kami mulai menumbuhkan dampak teknologi kami, kami tetap fokus pada semangat pemberdayaan kami.
Kami mencari talenta yang berpikiran sama untuk bergabung dengan keluarga kami yang sedang tumbuh.
Bakat yang merasakan kerinduan untuk membuat dampak positif bagi Indonesia. Bakat yang ingin menginspirasi jutaan orang Indonesia
dengan produk teknologi luar biasa. Bakat yang berbagi mimpi yang sama membantu siswa/i SD,SMP,SMA dan Masuk PTN belajar dengan mudah secara lengkap dan menarik
darimana dan dimana saja di seluruh wilayah Indonesia dengan biaya murah menggunakan teknologi digital.
		</span>
	</div>
</div>

<div id="lamar" class="modal">
  <div class="card">
    <div class="card-body">
    	<form method="POST" action="{{ route('FrontEnd.storecarrer') }}" enctype="multipart/form-data">@csrf
    		<div class="row">
    			<div class="col-md-12">
    				<center>
    					<span id="judul-job" class="font-style" style="font-size: 20px;"></span>
    				</center>
    			</div><hr>
    			<div class="col-md-12">
    				<div class="form-group">
    					<label>Nama Lengkap</label>
    					<input class="form-control" type="text" name="nama">
    				</div>
    			</div>
    			<div class="col-md-12">
    				<div class="form-group">
    					<label>CV/Resume/Portofolio</label>
    					<input class="form-control" type="file" name="file" id="file">
    				</div>
    			</div>
    			<div class="col-md-12">
    				<div class="form-group">
    					<button class="btn btn-success" style="float:right;">Kirim</button>
    				</div>
    			</div>
    		</div>
	    </form>
    </div>
  </div>
</div>

@include('Pages.carrer-Business-development')
@include('Pages.carrer-Guru-Les-Privat')

@endsection
@section('script')

<script src="{!! asset('public\assets\js\sweetalert.min.js') !!}"></script> 

<style type="text/css">
	.selection-carrer{
		border: 1px solid #00B159;
		background-color: #00B159;
		color: white;
		height: 70px;
		padding: 16px 0px 0 0px;
		border-radius: 7px;
		width: 85%;
		cursor: pointer;
	}

	.text-detail-hijau{
		color: #00B159;
		font-size: 25px;
	}

	.job-desc{
		font-size: 25px; 
		color:#797474;
	}


	.font-style{
		font-family: 'Ubuntu', sans-serif;
	}

	.text-permata-carrer{
		color: white;
		font-size: 25px; 
		margin-top: 1em;
	}

	.box{
		width: 76%;
	    height: 14em;
	    background-color: white;
	    position: absolute;
	    left: 154px;
	    top: 28em;
	    border-radius: 5px;
	    border: 1px solid #b9b9b9;
	    box-shadow: 2px 4px 2px 0px rgba(201,201,201,1);
	    padding: 19px 52px 0px 14px;
	}
</style>


 @if ($message = Session::get('alert'))
  <script type="text/javascript">
  	$(document).ready(function(){
  		 swal({
  	      title: "Selamat!",
  	      text: "Lamaran anda berhasil terkirim",
  	      icon: "success",
  	    });
  	});
  </script>
@endif
<script type="text/javascript">

	$('#file').bind('change', function() {
        fileValidation(this.id);
        var mb = this.files[0].size / 1048576 ;
        if (mb > 2) {
            swal({
              title: "Error!",
              text: "File yang kamu upload "+ mb.toFixed(2)+", Maksimal upload yang di izinkan 2 MB",
              icon: "error",
            });
            this.value = "";
        }       
    });

    function fileValidation(response){
            var fileInput = document.getElementById(response);
            var filePath = fileInput.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.pdf|\.docx|\.doc|\.docs)$/i;
            if(!allowedExtensions.exec(filePath)){
                swal({
                  title: "Error!",
                  text: "File yang di ijinkan hanya format .jpeg .jpg .pdf .word dan .png",
                  icon: "error",
                });
                fileInput.value = '';
                return false;
            }
        }

	function guru(){
		$('#guru').show();
		$('#bisnis').hide();
	}

	function bisnis(){
		$('#guru').hide();
		$('#bisnis').show();
	}

	function lamarNow(val){
	  $('#judul-job').html(val)	
	  $('#lamar').modal({
	    fadeDuration: 250,
	  });
	}
</script>
@endsection