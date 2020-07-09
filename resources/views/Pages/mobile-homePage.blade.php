<div class="section-mobile">  
  <div class="paket-list" style="height: auto">
    <div class="container">
      <div class="desc" style="padding-top: 3px;">
        <div class="col-md-12">
            <center><span class="des-paket-home-mobile">Langganan Sekarang Juga dan <span style="color: #00B159">dapatkan Coba Gratis 2 Hari</span></span></center>
            <center><span class="des-paket-home-mobile">pelajar Indonesia yang sedang belajar disini : <span class="count-mobile" style="font-weight:900">10000</span> +</span></center>
        </div>
        <div class="col-md-5" style="position: relative; top: 50px;">
          <div class="square-content-mobile" style="box-shadow: 6px 6px 5px 0px rgba(201,201,201,1);">
            <div class="row">
              <div class="col-md-12">
                <label class="label-paket-mobile">Pilih Kelas/Paket</label>
                <select class="form-control select-paket font-style" style="font-size: 15px; color: #797474;" id="kelas-mobile">
                  <option>--Pilih Kelas--</option>
                  <option value="TES MASUK PTN">TES MASUK PTN</option>
                  <option value="Kelas 12 IPA">KELAS 12 IPA</option>
                  <option value="Kelas 12 IPS">KELAS 12 IPS</option>
                  <option value="Kelas 11 SMA">KELAS 11 SMA </option>
                  <option value="Kelas 10 SMA">KELAS 10 SMA</option>
                  <option value="Kelas 9 SMP">KELAS 9 SMA</option>
                  <option value="Kelas 8 SMP">KELAS 8 SMP</option>
                  <option value="Kelas 7 SMP">KELAS 7 SMP</option>
                  <option value="Kelas 6 SD">KELAS 6 SMP</option>
                  <option value="Kelas 5 SD">KELAS 5 SD</option>
                  <option value="Kelas 4 SD">KELAS 4 SD</option>
                </select>
              </div>
              <div class="col-md-12" style="margin-top: 9px;">
                <label class="label-paket-mobile">Durasi Langganan</label>
                <select class="form-control select-paket font-style" style="font-size: 15px; color: #797474;" id="durasi-mobile" onchange="gethargamobile(this.value)"> 
                  <option value="">--Pilih Durasi--</option>
                  <option value="1">1 BULAN</option>
                  <option value="3">3 BULAN</option>
                  <option value="6">6 BULAN</option>
                  <option value="12">12 BULAN</option>
                </select>
              </div>
              <div class="col-md-12" style="margin-top: 9px;">
                <label class="label-paket-mobile">Harga Paket</label>
                <p class="font-style" style="color:#797474; text-decoration: line-through; font-size: 14px; position: relative; top: -5px; left: 110px;" id="harga-mobile">RP 20.000/ 1 Bulan</p>
                <span class="font-style" style="color:#00B159; font-size: 18px;">GRATIS SELAMA MASA PROMOSI</span>
              </div>
              <div class="col-md-12" style="margin-top: 9px;" onclick="detailPaketMobile()">
                <div class="button-style">
                  <center>
                    <span style="color:white; font-size: 16px;  font-family: 'Ubuntu', sans-serif;">Langganan Sekarang !</span>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7" style="position: relative; top: 50px;">
          <center>
            <div class="tentang-permata">
              <table>
                <tr>
                  <td><h2 class="font-style"><b>Paket Bimbel Online Meliputi :</b></h2></td>
                </tr>
                <tr>
                  <td><span style="font-size: 18px;"> - Ringkasan Materi Pelajaran </span></td>
                </tr>
                <tr>
                  <td><span style="font-size: 18px;"> - Soal Latihan dengan Pembahasan </span></td>
                </tr>
                <tr>
                  <td><span style="font-size: 18px;"> - Video Tutorial Belajar </span></td>
                </tr>
                <tr>
                  <td><span style="font-size: 18px;"> - Forum Diskusi dan Konsultasi </span></td>
                </tr>
              </table>            
            </div>
            <div class="icon-tentang-permata">
              <div class="col-md-4">
                <div class="ringkasan_materi" onclick="getringkasan()" style="cursor: pointer;">
                  <img style="width: 25%;" src="{!! asset('public/images/home/ringkasan_materi.png') !!}"><br>
                  <span class="font-style" style="font-size: 19px;">Ringkasan Materi</span>
                </div>
              </div>
              <div class="col-md-4" style="margin-top: 1em;">
                <div class="soal_dan_latihan" onclick="getsoal()" style="cursor: pointer;">
                  <img style="width: 25%;" src="{!! asset('public/images/home/soal_dan_latihan.png') !!}"><br>
                  <span class="font-style" style="font-size: 19px;">Soal dan latihan</span>
                </div>
              </div>
              <div class="col-md-4" style="margin-top: 1em;">
                <div class="video_belajar" onclick="getvideo()" style="cursor: pointer;">
                  <img style="width: 25%;" src="{!! asset('public/images/home/video_belajar.png') !!}"><br>
                  <span class="font-style" style="font-size: 19px;">Video Belajar</span>
                </div>
              </div>
            </div>
          </center>
        </div>
        <div class="col-md-12" style="position: relative; top: 99px;">
          <div class="container">
          <span style="color:#797474; font-size: 19px;  font-family: 'Ubuntu', sans-serif;">
            Membantu siswa/i SD, SMP, SMA dan Tes Masuk PTN belajar dengan lengkap, mudah dan menarik darimana dan dimana saja di seluruh wilayah Indonesia dengan dengan biaya murah menggunakan teknologi digital.
          </span>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br>

<div class="section-mobile">
  <div class="kelebihan-permata"> 
    <div class="container"> 
      <div class="row">
        <div class="col-md-12">
          <center>
            <span style="color:#797474; font-size: 25px;  font-family: 'Ubuntu', sans-serif;">Mengapa Harus <span style="color: #00B159">Permata</span> <span style="color: #4d9aea;">Belajar </span> ??</span>
          </center>
        </div><br>
        <div class="col-md-12">
          <center>
            <img src="{!! asset('public/images/home/bimbel-offline.png') !!}">
            <img src="{!! asset('public/images/home/bimbel-online.png') !!}" style="margin-top: 1em;">
            <img src="{!! asset('public/images/home/permatabelajar.png') !!}" style="margin-top: 1em;">
          </center>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-mobile" style="background-color: #00B159">
  <div class="desc-plus-permata-belajar" style="height: auto;background-color: #00B159;padding: 10px 23px 10px 23px;">
    <div class="container">
      <div class="row">
        <div class="permata-testimoni">
          <div class="col-md-12">
            <center>
              <span style="color:white; font-size: 25px;  font-family: 'Ubuntu', sans-serif;">Semua Orang Bisa Mewujudkannya, Termasuk Kamu</span>
            </center>
          </div>
          <div class="testimoni">
            <div class="col-md-4" style="margin-top: 1em;">
              <div class="square-content-mobile" style="height: 340px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni-mobile">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/home/avatar.jpg') !!}">
                  </center>
                </div>
                <div class="name-testimoni-mobile">
                  <center> 
                    <span class="font-style"><b>Nur Lailatul Badriyah</b></span><br>
                    <span class="font-style"><b>( Kelas 12 SMA )</b></span>
                  </center>
                </div>
                <div class="text-testimoni">
                  <center> 
                      <span class="font-style">"Paket bimbel lengkap sangat membantu belajar dari rumah"</span>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-4" style="margin-top: 6em;">
              <div class="square-content-mobile" style="height: 380px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni-mobile">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/home/avatar.jpg') !!}">
                  </center>
                </div>
                <div class="name-testimoni-mobile">
                  <center> 
                    <span class="font-style"><b>Riska Listiana</b></span><br>
                    <span class="font-style"><b>( Kelas 10 SMA )</b></span>
                  </center>
                </div>
                <div class="text-testimoni">
                  <center> 
                      <span class="font-style">" Tampilan menarik dan mudah menggunakan nya Kontenya bagus , mudah dimengerti dan simple "</span>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-4" style="margin-top: 6em;">
              <div class="square-content-mobile" style="height: 340px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni-mobile">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/home/avatar.jpg') !!}">
                  </center>
                </div>
                <div class="name-testimoni-mobile">
                  <center> 
                    <span class="font-style"><b>Gresia Samosir</b></span><br>
                    <span class="font-style"><b>( Kelas 11 SMA )</b></span>
                  </center>
                </div>
                <div class="text-testimoni">
                  <center> 
                      <span class="font-style">"Applikasinya bagus, konten menarik dan bagus"</span>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>

<div class="section-mobile" style="background-color: #00B159;">
  <div class="desc-plus-permata-belajar" style="height: auto;background-color: #00B159;padding: 10px 11px 10px 11px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
            <span style="color:white; font-size: 25px;  font-family: 'Ubuntu', sans-serif;">
              Penuhi Semua Kebutuhan Kamu
            </span>
          </center>
        </div><br>
        <div class="col-md-4">
          <div class="square-content-mobile" style="height: auto; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
            <div class="title-produk">
              <center>
                <span class="font-style">Les Privat</span>
              </center>
            </div><br>
            <div class="desc-produk">
              <center>
                <span class="font-style">Belajar Privat secara online <br> dengan guru terbaik</span>
              </center>
            </div><br>
            <div class="link-produk">
              <div class="border-link">
                <center>
                  <a href="{{ route('pengembangan') }}">
                    <span class="font-style">Selengkapnya</span>
                  </a>
                </center>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="margin-top: 2em;">
          <div class="square-content-mobile" style="height: auto; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
            <div class="title-produk">
              <center>
                <span class="font-style">Les Privat Online</span>
              </center>
            </div><br>
            <div class="desc-produk">
              <center>
                <span class="font-style">Belajar Privat secara online <br> dengan guru terbaik</span>
              </center>
            </div><br>
            <div class="link-produk">
              <div class="border-link">
                <center>
                  <a href="{{ route('pengembangan') }}">
                    <span class="font-style">Selengkapnya</span>
                  </a>
                </center>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4"  style="margin-top: 2em;">
          <div class="square-content-mobile" style="height: auto; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
            <div class="title-produk">
              <center>
                <span class="font-style">Forum Diskusi</span>
              </center>
            </div><br>
            <div class="desc-produk">
              <center>
                <span class="font-style">forum tanya jawab soal atau tugas dari sekolah</span>
              </center>
            </div><br>
            <div class="link-produk">
              <div class="border-link">
                <center>
                  <a href="{{ route('pengembangan') }}">
                    <span class="font-style">Selengkapnya</span>
                  </a>
                </center>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12" style="margin-top: 2em;">
          <div class="square-content-mobile" style="height: auto; padding: 3% 13% 3% 13%; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
            <div class="title-produk">
              <center>
                <span class="font-style">PermataMall</span>
              </center>
            </div><br>
            <div class="desc-produk">
              <center>
                <span class="font-style">online marketplace terbaik,terpercaya, dan terlengkap sesuai dengan kebutuhan kamu seperti Jual Beli online, Sewa Menyewa,berbagai macam Tiket dan Pembayaran</span>
              </center>
            </div><br>
            <div class="link-produk">
              <div class="border-link">
                <center>
                  <a href="{{ route('pengembangan') }}">
                    <span class="font-style">Selengkapnya</span>
                  </a>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="section-mobile">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <center>
          <span style="color:#00B159; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">
            Permata Blog
          </span>
        </center>
      </div><br><br><br><br><br>
      <div class="blog" >
        <center>
          <div class="col-md-4">
            <div class="square-blog" style="height: 370px;">
              <div class="image-blog" style="width: 100% height: 155px;" >
                <img class="images-blog" src="{!! asset('public/images/home/back.jpg') !!}">
              </div><br><br><br><br><br><br><br><br><br>
              <div class="title-blog">
                <span class="font-style">Tahukah Kamu bahwa belajar</span>
              </div><br>
              <div class="border-link">
                <span class="font-style">Read More</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="square-blog" style="height: 370px;">
              <div class="image-blog" style="width: 100% height: 155px;" >
                <img class="images-blog" src="{!! asset('public/images/home/back.jpg') !!}">
              </div><br><br><br><br><br><br><br><br><br>
              <div class="title-blog">
                <span class="font-style">Tahukah Kamu bahwa belajar</span>
              </div><br>
              <div class="border-link">
                <span class="font-style">Read More</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="square-blog" style="height: 370px;">
              <div class="image-blog" style="width: 100% height: 155px;" >
                <img class="images-blog" src="{!! asset('public/images/home/back.jpg') !!}">
              </div><br><br><br><br><br><br><br><br><br>
              <div class="title-blog">
                <span class="font-style">Tahukah Kamu bahwa belajar</span>
              </div><br>
              <div class="border-link">
                <span class="font-style">Read More</span>
              </div>
            </div>
          </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <div class="col-md-12">
            <center>
              <div class="border-link" style="color: white; background-color: #00B159; width: 50%; height: 30px; padding:20px;" >
                <span class="font-style" style="position: relative; bottom: 13px;">Artikel Lainnya</span>
              </div>
            </center>
          </div>
        </center>
      </div>
    </div>
  </div>
</div> -->

<div class="section-mobile">
  <div class="container">
    <div class="col-md-12">
      <center>
        <span style="color:#797474; font-size: 25px;  font-family: 'Ubuntu', sans-serif;">
          Petanyaan Seputar PermataBelajar
        </span>
      </center>
    </div><br>
    <div class="col-md-12"> 
      <main>
          <article class="panel-group bs-accordion" id="accordion" role="tablist" aria-multiselectable="true" style="background-color: #ffffff00; border-color: #ffffff00;">
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00;">
              <div class="panel-heading panel-custom-mobile" role="tab" id="headingOne-mobile">
                <h4 class="panel-title font-style" style="font-size: 18px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne-mobile" aria-expanded="true" aria-controls="collapseOne">
                    Bisa nggak satu akun, dipakainya bareng-bareng?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseOne-mobile" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne-mobile">
                <div class="panel-body">
                  <center>
                    <span class="font-style" style="font-size: 18px;">Untuk mempermudah proses belajar kamu agar lebih fokus dan nyaman, PermataBelajar hanya diperuntukkan untuk penggunaan secara individual</span>
                  </center>
                </div>
              </div>
            </section>
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00; margin-top: 1em;">
              <div class="panel-heading panel-custom-mobile" role="tab" id="headingTwo-mobile">
                <h4 class="panel-title font-style" style=" font-size: 18px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-mobile" aria-expanded="true" aria-controls="collapseOne">
                    Pembayaran di PermataBelajar bisa dicicil nggak ?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseTwo-mobile" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo-mobile">
                <div class="panel-body">
                  <center>
                    <span class="font-style" style="font-size: 18px;">Untuk Saat ini, pembayaran PermataBelajar hanya dapat dilakukan 1 kali di awal.</span>
                  </center>
                </div>
              </div>
            </section>
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00; margin-top: 1em;">
              <div class="panel-heading panel-custom-mobile" role="tab" id="headingThree-mobile">
                <h4 class="panel-title font-style" style=" font-size: 18px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree-mobile" aria-expanded="true" aria-controls="collapseOne">
                    Bagaimana Metode Pembayaran untuk BerLangganan ?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseThree-mobile" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree-mobile">
                <div class="panel-body">
                    <span class="font-style" style="font-size: 18px;">metode pembayaran Bank Transfer Manual (BCA,Mandiri), Transfer Otomatis melalui Virtual Account (Permata Bank , BNI) dan GOPAY</span>
                </div>
              </div>
            </section>
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00; margin-top: 1em;">
              <div class="panel-heading panel-custom-mobile" role="tab" id="headingour-mobile">
                <h4 class="panel-title font-style" style=" font-size: 18px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour-mobile" aria-expanded="true" aria-controls="collapseOne">
                    Apakah Materi PermataBelajar sesuai dengan pelajaran sekolah ?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseFour-mobile" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingour-mobile">
                <div class="panel-body">``
                    <span class="font-style" style="font-size: 18px;">Tentunya, materi yang dipelajari di sekolah ada di PermataBelajar. Materi PermataBelajar lengkap , pembahasan yang mendalam , dan sesuai dengan kurikulum Nasional</span>``
                </div>
              </div>
            </section>
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00; margin-top: 1em;">
              <div class="panel-heading panel-custom-mobile" role="tab" id="headinFive-mobile">
                <h4 class="panel-title font-style" style=" font-size: 18px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive-mobile" aria-expanded="true" aria-controls="collapseOne">
                    Masih Belum Yakin ?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseFive-mobile" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinFive-mobile">
                <div class="panel-body">
                    <span class="font-style" style="font-size: 18px;">Selesaikan pendaftaran dan dapatkan coba gratis selama 2 hari. Coba dan rasakan keseruan belajar dengan Permata Belajar</span>
                </div>
              </div>
            </section>
          </article>
        </main>
    </div>
  </div>
</div>

<div class="section-mobile" style="background-color: #2980b9;">
  <div class="desc-plus-permata-belajar" style="height: auto;background-color: #2980b9;padding: 10px 9px 10px 9px;">
    <div class="container">
      <div class="row">
        <div class="fitur-permata">
          <div class="col-md-12">
            <center>
              <span style="color:white; font-size: 25px;  font-family: 'Ubuntu', sans-serif;">Belajar dengan aman dan nyaman</span>
            </center>
          </div><br>
          <div class="col-md-12">
            <div class="square-content-mobile" style="height: auto; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
              <div class="row">
                <div class="privacy" style="margin-left: -59px;">
                  <div class="col-md-12">
                    <div class="col-md-3">
                      <div class="icon">
                        <img style="width: 50%; position: relative; bottom: 27px; left: 90px;" src="{!! asset('public/images/home/padlock.png') !!}">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <span class="font-style" style="font-size: 23px; color: #424242; position: relative; bottom: 39px; left: 39px;">Jaga informasi pribadi kamu</span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474; position: relative; bottom: 39px; left: 39px;">E-mail, username, password, kode OTP (One Time Password) dan data pribadi lainnya cukup kamu saja yang tahu.</span>
                    </div>
                  </div>
                </div>
                <div class="OTP" style="margin-left: -59px;">
                  <div class="col-md-12">
                    <div class="col-md-3">
                      <div class="icon">
                        <img style="width: 50%; position: relative; bottom: 10px; left: 90px;" src="{!! asset('public/images/home/otp.png') !!}">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <span class="font-style" style="font-size: 23px; color: #424242; position: relative; bottom: 21px; left: 39px;">Kode OTP itu Sangat Rahasia</span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474; position: relative; bottom: 21px; left: 39px;">Rahasiakan kode OTP dan Masukkan kode OTP hanya di websiter/aplikasi resmi PermataBelajar. Jangan bagikan pada siapa pun, termasuk pihak PermataMall.</span>
                    </div>
                  </div>
                </div>
                <div class="secutity" style="margin-left: -59px;">
                  <div class="col-md-12">
                    <div class="col-md-3">
                      <div class="icon">
                        <img style="width: 50%; position: relative; bottom: 10px; left: 90px;" src="{!! asset('public/images/home/password.png') !!}">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <span class="font-style" style="font-size: 23px; color: #424242; position: relative; bottom: 27px; left: 39px;">Waspada Penipuan Atas Nama PermataMall </span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474; position: relative; bottom: 27px; left: 39px;">Transaksi resmi hanya melalui Sistem Pembayaran resmi PermataMal dan tanpa adanya perantara orang/website/aplikasi lainnya</span>
                    </div>
                  </div>
                </div>
                <div class="kenali" style="margin-left: -59px;">
                  <div class="col-md-12">
                    <div class="col-md-3">
                      <div class="icon">
                        <img style="width: 50%; position: relative; bottom: 10px; left: 90px;" src="{!! asset('public/images/home/browser.png') !!}">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <span class="font-style" style="font-size: 23px; color: #424242; position: relative; bottom: 24px; left: 39px;">Kenali nomor tagihan kamu dan transfer dana sesuai nominalnya</span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474; position: relative; bottom: 24px; left: 39px;">Untuk mempermudah transaksi kamu , bayarlah sesuai dengan nominal yang tertera pada tagihan transaksimu di website/aplikasi resmi PermataMall/PermataBelajar</span>
                    </div>
                  </div>
                </div>
                <div class="safety" style="margin-left: -59px; position: relative; top: 22px;">
                  <div class="col-md-12">
                    <div class="col-md-3">
                      <div class="icon">
                        <img style="width: 50%; position: relative; bottom: 10px; left: 90px;" src="{!! asset('public/images/home/safety.png') !!}">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <span class="font-style" style="font-size: 23px; color: #424242; position: relative; bottom: 24px; left: 39px;">Pasti Aman dan Terpercaya</span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474; position: relative; bottom: 24px; left: 39px;">Untuk mempermudah transaksi kamu , bayarlah sesuai dengan nominal yang tertera pada tagihan transaksimu di website/aplikasi resmi PermataMall/PermataBelajar</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@if($ringkasan)
<div id="loadMe" class="modal modal-mobile">
  <div class="card">
    <div class="card-body">
      <center>
      <span>Ringkasan Materi</span><br>
      <span>{{ $ringkasan->kelas }}</span><br>
      <span>{{ $ringkasan->bidang_studi }}</span><br>
      <hr>
        <img src="{{ ENV('APP_URL_API_RESOURCE').'v2/image/ringkasan-materi/'.$ringkasan->file}}">
      </center>
    </div>
  </div>
</div>
@endif
@if($soal)
<div id="soal" class="modal modal-mobile">
  <div class="card">
    <div class="card-body">
      <center>
      <span>Soal dan Pembahasan</span><br>
      <span>{{ $soal->kelas }}</span><br>
      <span>{{ $soal->bidang_studi }}</span><br>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <p>SOAL : </p>
          <img src="{{ ENV('APP_URL_API_RESOURCE').'v2/image/soal/'.$soal->soal}}">
        </div>
        <div class="col-md-6">
          <p>PEMBAHASAN : </p>
          <img src="{{ ENV('APP_URL_API_RESOURCE').'v2/image/pembahasan/'.$soal->pembahasan}}">
        </div>
      </div>
      </center>
    </div>
  </div>
</div>
@endif

<div id="video" class="modal modal-mobile">
  <div class="card">
    <div class="card-body">
      <center>
      <span>Ringkasan Materi</span><br>
      <span>IPA</span><br>
      <span>KELAS 12</span><br>
      <hr>
     <div>
         <video controls autoplay width="320" height="240"></video>
     </div>
      </center>
    </div>
  </div>
</div>


<div id="detail-paket-mobile" class="modal" style="max-width: 80% !important; margin-right: 39px;">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <span class="font-style" style="color:#00b159; font-size: 20px; ">Langganan Kamu</span>
          <div class="paket-langganan">
            <span class="font-style" style="color:#797474; font-size: 15px;">Paket/Kelas Kamu</span>
            <span class="font-style" style="color:#797474; font-size: 15px;">:</span>
            <span class="font-style" style="color:#797474; font-size: 15px;" id="value-paket-mobile"><b>Tes Masuk PTN</b></span>
          </div>
          <div class="durasi-langganan">
            <span class="font-style" style="color:#797474; font-size: 15px;">Durasi Langganan</span>
            <span class="font-style" style="color:#797474; font-size: 15px;">:</span>
            <span class="font-style" style="color:#797474; font-size: 15px;" id="value-durasi-mobile"><b>12 Bulan</b></span>
          </div>
          <div class="Harga-langganan" style="margin-bottom: 15px;">
            <span class="font-style" style="color:#797474; font-size: 15px;">Harga Paket</span>
            <span class="font-style" style="color:#797474; font-size: 15px;">:</span>
            <span class="font-style" style="color:#797474; font-size: 15px;"><b>Gratis Selama Promosi</b></span>
          </div>
        </div>
        <div class="col-md-12">
          <span class="font-style" style="color:#00b159; font-size: 15px; ">Paket Bimbel Meliputi</span>
          <div class="paket-1">
            <span class="font-style" style="color:#00B159; font-size: 15px; margin-right: 2px; ">-</span>
            <span class="font-style" style="color:#797474; font-size: 15px; ">Ringkasan Materi Pembelajaran</span>
          </div>
          <div class="paket-2">
            <span class="font-style" style="color:#00B159; font-size: 15px; margin-right: 2px; ">-</span>
            <span class="font-style" style="color:#797474; font-size: 15px; ">Soal Latihan dengan Pembahasan</span>
          </div>
          <div class="paket-3">
            <span class="font-style" style="color:#00B159; font-size: 15px; margin-right: 2px; ">-</span>
            <span class="font-style" style="color:#797474; font-size: 15px; ">Video Tutorial Belajar</span>
          </div>
          <div class="paket-4" style="margin-bottom: 15px;">
            <span class="font-style" style="color:#00B159; font-size: 15px; margin-right: 2px; ">-</span>
            <span class="font-style" style="color:#797474; font-size: 15px; ">Forum Diskusi dan Konsultasi</span>
          </div>          
        </div>
        <div class="col-md-12">
          <div class="col-md-6">
            <a href="#ex1" rel="modal:open">
              <div style="border: 1px solid #00b159; background-color: white; height: 30px; padding-top: 5px; border-radius: 13px;">
                <center>
                  <span class="font-style" style="font-size: 15px; color: #797474; ">Ubah Paket</span>
                </center>
              </div>
            </a>
          </div>
          <div class="col-md-6" style="margin-top: 5px;">
            <a href="{{ route('Login.index') }}">
              <div style="border: 1px solid #00b159; background-color: #00b159; height: 30px; padding-top: 5px; border-radius: 13px;">
                <center>
                  <span class="font-style" style="font-size: 15px; color: white; ">Langganan Sekarang</span>
                </center>
              </div>
            </a>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>
<style type="text/css">
  .modal-mobile {
    max-width: 30% !important;
  }

  .panel-custom-mobile{
    background-color: #00b159 !important; 
    border-color: #ffffff00 !important;  
    color: white !important; 
    border-radius: 10px;  
    height: auto;
    padding: 13px 24px 17px 23px;
  }

  .panel{
    padding-bottom: 10px;
  }

  .tambahan-table-bawah{
    background-color: #e5f7ee;
    height: 32px;
    width: 232px;
    position: absolute;
    right: 124px;
    bottom: -16px;
    border-radius: 10px;
  }

  .tambahan-table-atas{
    background-color: #ffffff;
    height: 36px;
    width: 232px;
    left: 813px;
    position: absolute;
    top: -21px;
    border-radius: 21px;
  }

  .title-blog{
    font-size: 29px;
  }

  .image-blog{
    width: 91%;
    position: absolute;
    left: 16px;
    top: 2px;
    border-radius: 125px;
  }

  .images-blog{
    border-radius: 13px 13px 0px 0px;
  }

  .blog{
    padding: 0px 75px 0px 75px;
  }

  .border-link{
    border: 1px solid #00B159; 
    border-radius: 20px;
    font-size: 18px;
    height: 30px;
    color: #797474;
  }

  .desc-produk{
    font-size:19px;
    color: #797474;
  }

  .title-produk{
    font-size:25px; 
    color: #00B159;
  }

  .testimoni{
    padding-top: 4em;
  }

  .avatar-testimoni-mobile{
    width: 38%;
    z-index: 2;
    position: absolute;
    top: -54px;
    right: 98px;
  }

  .image-testimoni{
    border-radius: 50%;
  }

  .text-testimoni{
    position: relative; 
    top: 83px;
    font-size:22px;
    color: #797474;
  }

  .name-testimoni-mobile{
    position: relative; 
    top: 66px;
    font-size:19px; 
    color: #00B159;
  }

  table {
    border-collapse: collapse;
    border-radius: 1em;
    overflow: hidden;
  }

  .td {
    padding: 1em;
    border-bottom: 2px solid #f1eded; 
  }

  .icon-tentang-permata{
    position: relative;
    top: 33px;
  }

  .font-style{
    font-family: 'Ubuntu', sans-serif;
  }

  .select-paket{
    border-radius: 45px;
    height: 45px;
    border-color: #00B159
  }

  .des-paket-home-mobile{
    color: #3e3e3e;
    font-size: 28px;
    font-family: 'Ubuntu', sans-serif;
  }

  .label-paket-mobile{
    font-size: 15px; 
    color: #797474;
    font-family: 'Ubuntu', sans-serif;
  }

  .section-mobile {
      padding-top: 20px !important;
      padding-bottom: 28px !important;
      background-color: #e8e8e861;
  }

  .square-content-mobile{
    height:auto; 
    width:100%; 
    background-color:white; 
    border-radius: 10px; 
    padding: 7% 13% 7% 13%;

  }

  .square-blog{
    height:auto; 
    width:100%; 
    background-color:white; 
    border-radius: 5px 15px 15px 15px; 
    padding: 7% 13% 7% 13%;
    box-shadow: 6px 6px 5px 0px rgba(201,201,201,1);
  }


  .button-style{
    width: 100%; 
    background: linear-gradient(90deg, rgba(0,177,89,1) 0%, rgba(0,177,89,1) 39%, rgba(83,203,137,1) 100%);
    border-radius: 20px; 
    padding: 11px;
  }

  .dot{
    color: #00b159;
  }


</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel='stylesheet' href="{!! asset('public/assets/plyr/plyr.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/template-video.css') !!}">
<script src="{!! asset('public/assets/plyr/polyfill.min.js') !!}"></script>
<script src="{!! asset('public/assets/plyr/plyr.min.js') !!}"></script>
<script  src="{!! asset('public/assets/plyr/script-plyr.js') !!}"></script>
<script type="text/javascript">
var FILE = "https://resource.permatamall.com/api/v1/v2/video/play/20200626-Video-contoh_soal_matematika.webm";
var NUM_CHUNKS = 10000;
var video = document.querySelector('video');

window.MediaSource = window.MediaSource || window.WebKitMediaSource;
if (!!!window.MediaSource) {
  alert('MediaSource API is not available');
}

var mediaSource = new MediaSource();


video.src = window.URL.createObjectURL(mediaSource);

function callback(e) {
  var sourceBuffer = mediaSource.addSourceBuffer('video/webm; codecs="vorbis,vp8"');
  GET(FILE, function(uInt8Array) {
    var file = new Blob([uInt8Array], {type: 'video/webm'});
    var chunkSize = Math.ceil(file.size / NUM_CHUNKS);
    var i = 0;

    (function readChunk_(i) {
      var reader = new FileReader();
      reader.onload = function(e) {
        sourceBuffer.appendBuffer(new Uint8Array(e.target.result));
        if (i == NUM_CHUNKS - 1) {
          mediaSource.endOfStream();
        } else {
          // if (video.paused) {
          //   video.play(); // Start playing after 1st chunk is appended.
          // }
          readChunk_(++i);
        }
      };

      var startByte = chunkSize * i;
      var chunk = file.slice(startByte, startByte + chunkSize);

      reader.readAsArrayBuffer(chunk);
    })(i);  // Start the recursive call by self calling.
  });
}

mediaSource.addEventListener('sourceopen', callback, false);
mediaSource.addEventListener('webkitsourceopen', callback, false);

mediaSource.addEventListener('webkitsourceended', function(e) {
  console.log('mediaSource readyState: ' + this.readyState);
}, false);

function GET(url, callback) {
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'https://cors-anywhere.herokuapp.com/'+url, true);
  xhr.responseType = 'arraybuffer';
  xhr.send();
  xhr.onload = function(e) {
    if (xhr.status != 200) {
      alert("Unexpected status code " + xhr.status + " for " + url);
      return false;
    }
    callback(new Uint8Array(xhr.response));
  };
}
</script>
<script type="text/javascript">
  $('.count-mobile').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
             $(this).text(Math.ceil(now).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
          }
      });
  });

  function ShowDescVideoBelajar(){
    $("#video-belajar").show();
    $("#ringkasan-materi").hide();
    $("#latihan-soal").hide();
    $("#bank-soal").hide();
  } 

  function ShowDescRingkasanMateri(){
    $("#video-belajar").hide();
    $("#ringkasan-materi").show();
    $("#latihan-soal").hide();
    $("#bank-soal").hide();
  }
  function ShowDesclatihanSoal(){
    $("#video-belajar").hide();
    $("#ringkasan-materi").hide();
    $("#latihan-soal").show();
    $("#bank-soal").hide();
  }
  function ShowDescBankSoal(){
    $("#video-belajar").hide();
    $("#ringkasan-materi").hide();
    $("#latihan-soal").hide();
    $("#bank-soal").show();
  }

  function getringkasan(){
    $('#loadMe').modal({
      fadeDuration: 250,
    });
  }
  function getvideo(){
    $('#video').modal({
      fadeDuration: 250,
    });
  }

  function getsoal(){
    $('#soal').modal({
      fadeDuration: 250,
    });
  }

  function detailPaketMobile(){
    if ($('#kelas-mobile').val() == "" && $('#durasi-mobile').val() == "") {
      alert ('silahkan pilih paket dan durasi kamu terlebih dahulu')
      
    }else{
      var kelas  = $('#kelas-mobile').val()
      var durasi = $('#durasi-mobile').val()

      $('#value-paket-mobile').html(kelas)
      $('#value-durasi-mobile').html(durasi + ' Bulan')

      $('#detail-paket-mobile').modal({
        fadeDuration: 250,
      });   
    }
    
  }

  function gethargamobile(val){
    if ($('#kelas-mobile').val() == "Kelas 12 IPA" || $('#kelas-mobile').val() == "Kelas 12 IPS" || $('#kelas-mobile').val() == "Kelas 11 SMA" || $('#kelas-mobile').val() == "Kelas 10 SMA" || $('#kelas-mobile').val() == "Kelas 9 SMP"  || $('#kelas-mobile').val() == "Kelas 8 SMP"  || $('#kelas-mobile').val() == "Kelas 7 SMP"  || $('#kelas-mobile').val() == "Kelas 6 SD"   || $('#kelas-mobile').val() == "Kelas 5 SD"   || $('#kelas-mobile').val() == "Kelas 4 SD" ) {
      if (val == 1) {
        $('#harga-mobile').html('RP 20.000/ 1 Bulan')
      }else if( val == 3){
        $('#harga-mobile').html('RP 40.000/ 3 Bulan')
      }else if( val == 6){
        $('#harga-mobile').html('RP 70.000/ 6 Bulan')
      }else if( val == 12){
        $('#harga-mobile').html('RP 120.000/ 12 Bulan')
      }
    }else if ($('#kelas-mobile').val()=="TES MASUK PTN"){
      if (val == 1) {
        $('#harga-mobile').html('RP 30.000/ 1 Bulan')
      }else if( val == 3){
        $('#harga-mobile').html('RP 60.000/ 3 Bulan')
      }else if( val == 6){
        $('#harga-mobile').html('RP 100.000/ 6 Bulan')
      }else if( val == 12){
        $('#harga-mobile').html('RP 180.000/ 12 Bulan')
      }
    }
  }


</script>