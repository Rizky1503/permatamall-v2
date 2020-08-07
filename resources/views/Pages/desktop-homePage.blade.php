<div class="section">  
  <div class="paket-list" style="height: auto">
    <div class="container">
      <div class="desc" style="padding-top: 35px;">
        <div class="col-md-12">
            <center><span class="des-paket-home">Langganan Sekarang Juga dan <span style="color: #00B159">dapatkan Coba Gratis 2 Hari</span></span></center>
            <center><span class="des-paket-home">pelajar Indonesia yang sedang belajar disini : <span class="count" style="font-weight:900">10000</span> +</span></center>
        </div>
        <div class="col-md-5" style="position: relative; top: 50px;">
          <div class="square-content" style="box-shadow: 6px 6px 5px 0px rgba(201,201,201,1);">
            <div class="row">
              <div class="col-md-12">
                <label class="label-paket">Pilih Kelas/Paket</label>
                <select class="form-control select-paket font-style" style="font-size: 19px; color: #797474;" id="kelas">
                  <option value="">--Pilih Kelas--</option>
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
                <label class="label-paket">Durasi Langganan</label>
                <select class="form-control select-paket font-style" style="font-size: 19px; color: #797474;" id="durasi" onchange="getharga(this.value)"> 
                  <option value="">--Pilih Durasi--</option>
                  <option value="1">1 BULAN</option>
                  <option value="3">3 BULAN</option>
                  <option value="6">6 BULAN</option>
                  <option value="12">12 BULAN</option>
                </select>
              </div>
              <div class="col-md-12" style="margin-top: 9px;">
                <label class="label-paket">Harga Paket</label>
                <p class="font-style" style="color:#797474; text-decoration: line-through; font-size: 16px; position: relative; top: -5px; left: 160px;" id="harga">RP 20.000/ 1 Bulan</p>
                <span class="font-style" style="color:#00B159; font-size: 27px;">GRATIS SELAMA MASA PROMOSI</span>
              </div>
              <div class="col-md-12" style="margin-top: 9px;">
                <div class="button-style">
                  <center>
                    <span onclick="detailPaket()" style="cursor: pointer; color:white; font-size: 23px;  font-family: 'Ubuntu', sans-serif;">Langganan Sekarang !</span>
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
                  <td><span style="font-size: 29px;"> - Ringkasan Materi Pelajaran </span></td>
                </tr>
                <tr>
                  <td><span style="font-size: 29px;"> - Soal Latihan dengan Pembahasan </span></td>
                </tr>
                <tr>
                  <td><span style="font-size: 29px;"> - Video Tutorial Belajar </span></td>
                </tr>
                <tr>
                  <td><span style="font-size: 29px;"> - Forum Diskusi dan Konsultasi </span></td>
                </tr>
              </table>            
            </div>
            <div class="icon-tentang-permata">
              <div class="col-md-4">
                <div class="ringkasan_materi" onclick="getringkasan()" style="cursor: pointer;">
                  <img style="width: 50%;" src="{!! asset('public/images/home/ringkasan_materi.png') !!}"><br>
                  <span class="font-style" style="font-size: 19px;">Ringkasan Materi</span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="soal_dan_latihan" onclick="getsoal()" style="cursor: pointer;">
                  <img style="width: 50%;" src="{!! asset('public/images/home/soal_dan_latihan.png') !!}"><br>
                  <span class="font-style" style="font-size: 19px;">Soal dan latihan</span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="video_belajar" onclick="getvideo()" style="cursor: pointer;">
                  <img style="width: 50%;" src="{!! asset('public/images/home/video_belajar.png') !!}"><br>
                  <span class="font-style" style="font-size: 19px;">Video Belajar</span>
                </div>
              </div>
            </div>
          </center>
        </div>
        <div class="col-md-12" style="position: relative; top: 76px;">
          <div class="container">
          <center>
          <span style="color:#797474; font-size: 25px;  font-family: 'Ubuntu', sans-serif;">
            Membantu siswa/i SD, SMP, SMA dan Tes Masuk PTN belajar dengan lengkap, mudah dan menarik darimana dan dimana saja di seluruh wilayah Indonesia dengan dengan biaya murah menggunakan teknologi digital.
          </span>  
          </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br>

<div class="section">
  <div class="kelebihan-permata"> 
    <div class="container"> 
      <div class="row">
        <div class="col-md-12">
          <center>
            <span style="color:#797474; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">Mengapa Harus <span style="color: #00B159">Permata</span> <span style="color: #4d9aea;">Belajar </span> ??</span>
          </center>
        </div><br><br><br><br><br>
        <div class="col-md-12">
          <div class="tambahan-table-atas"></div>
          <center>
            <table border="1" style="border-color: #f1eded; border-radius: 1em 0em 1em 1em;" width="81%">
              <tr>
                <td class="td" rowspan="2" align="center" style="background: #D9E7F4;" >
                  <span class="font-style" style="font-size: 19px;">Biaya</span>
                </td>

                <td class="td" align="center" style="background-color: #d4d4d4;">
                  <span class="font-style" style="font-size: 19px;">Bimbel Offline</span>
                </td>
                
                <td class="td" align="center" style="background-color: #d4d4d4;">
                  <span class="font-style" style="font-size: 19px;">Bimbel Online </span>
                </td>
                
                <td class="td" align="center" style="background-color: white;">
                  <span class="font-style" style="color: #00B159; font-size: 27px; z-index: 1;">Permata</span> 
                  <span class="font-style" style="color: #4d9aea; font-size: 27px; z-index: 1;">Belajar</span>
                </td>
              </tr>

              <tr>
                <td align="center" class="td" style="background-color: white">
                  <span class="font-style" style="font-size: 13px;">Sangat Mahal <br>(Rata-rata > Rp10.000.000 / tahun )</span>
                </td>
                <td align="center" class="td" style="background-color: white">
                  <span class="font-style" style="font-size: 13px;">Sangat Mahal <br>(Rata-rata > Rp10.000.000 / tahun )</span>
                </td>
                <td align="center" class="td" style="background-color: #E5F7EE">
                  <span class="font-style" style="font-size: 13px;">Sangat Murah dan Terjangkau <br>(hanya Rp100/hari)</span>
                </td>
              </tr>

              <tr>
                <td class="td" align="center" style="background: #D9E7F4;" ><span class="font-style" style="font-size: 19px;">Cara Belajar</span></td>
                <td align="center" class="td" style="background-color: white"><span class="font-style" style="font-size: 13px;">sesuai jadwal belajar yang sudah <br> ditentukan dan waktu terbatas</span></td>
                <td align="center" class="td" style="background-color: white"><span class="font-style" style="font-size: 13px;">belajar kapanpun dan dimanapun <br> secara online </span></td>
                 <td align="center" class="td" style="background-color: #E5F7EE"><span class="font-style" style="font-size: 13px;">belajar kapanpun dan dimanapun <br> dan bisa diulang-ulang</span></td>
              </tr>

              <tr>
                <td class="td" align="center" style="background: #D9E7F4;" ><span class="font-style" style="font-size: 19px;">Materi Belajar</span></td>
                <td align="center" class="td" style="background-color: white"><span class="font-style" style="font-size: 13px;">dengan buku materi pelajaran <br> yang banyak dan merepotkan</span></td>
                <td align="center" class="td" style="background-color: white"><span class="font-style" style="font-size: 13px;">terkadang hanya tersedia <br> beberapa materi</span></td>
                 <td align="center" class="td" style="background-color: #E5F7EE"><span class="font-style" style="font-size: 13px;">materi belajar lengkap dengan <br> ringkasan materi dan video belajar</span></td>
              </tr>

              <tr>
                <td class="td" align="center" style="background: #D9E7F4;" ><span class="font-style" style="font-size: 19px;">Metode Pembelajaran</span></td>
                <td align="center" class="td" style="background-color: white"><span class="font-style" style="font-size: 13px;">terlalu banyak murid dan diajarkan <br> sekali menyesuaikan jadwal</span></td>
                <td align="center" class="td" style="background-color: white"><span class="font-style" style="font-size: 13px;">pembelajaran online <br> kurang terintegrasi</span></td>
                 <td align="center" class="td" style="background-color: #E5F7EE"><span class="font-style" style="font-size: 13px;">pembelajaran terintegrasi dengan <br> ringkasan materi dan video belajar <br> disertai dengan quiz</span></td>
              </tr>
            </table>
          </center>
          <div class="tambahan-table-bawah"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section" style="background-color: #00B159">
  <div class="desc-plus-permata-belajar" style="height: 550px;background-color: #00B159;padding: 10px 71px 10px 71px;">
    <div class="container">
      <div class="row">
        <div class="permata-testimoni">
          <div class="col-md-12">
            <center>
              <span style="color:white; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">Semua Orang Bisa Mewujudkannya, Termasuk Kamu</span>
            </center>
          </div><br><br><br><br><br>
          <div class="testimoni">
            <div class="col-md-4">
              <div class="square-content" style="height: 400px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/home/avatar.jpg') !!}">
                  </center>
                </div>
                <div class="name-testimoni">
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
            <div class="col-md-4">
              <div class="square-content" style="height: 400px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/home/avatar.jpg') !!}">
                  </center>
                </div>
                <div class="name-testimoni">
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
            <div class="col-md-4">
              <div class="square-content" style="height: 400px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/home/avatar.jpg') !!}">
                  </center>
                </div>
                <div class="name-testimoni">
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

<div class="section" style="background-color: #00B159">
  <div class="desc-plus-permata-belajar" style="height: 630px;background-color: #00B159;padding: 10px 71px 10px 71px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
            <span style="color:white; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">
              Penuhi Semua Kebutuhan Kamu
            </span>
          </center>
        </div><br><br><br><br><br>
        <div class="col-md-4">
          <div class="square-content" style="height: 210px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
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
        <div class="col-md-4">
          <div class="square-content" style="height: 210px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
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
        <div class="col-md-4">
          <div class="square-content" style="height: 210px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
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
        <div class="col-md-12" style="position: relative; top: 2em;">
          <div class="square-content" style="height: 220px; padding: 3% 13% 3% 13%; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
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

<!-- <div class="section">
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

<div class="section">
  <div class="container">
    <div class="col-md-12">
      <center>
        <span style="color:#797474; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">
          Download Aplikasi PermataBelajar
        </span>
      </center>
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <div>
              <center>
                <div>
                  <img style="width: 70%" src="{!! asset('public/assets/images/icon/icon/Laptop.png') !!}">
                </div>
                <a href="http://resource.permatamall.com/api/v1/v2/download/aplikasi">
                  <div style="width: 70%; background-color:#00b159; border-radius: 15px; padding: 2% 5% 2% 5%; color: white">
                    <span class="font-style" style="font-size: 23px;">Download Aplikasi Destkop</span>
                  </div>
                </a>
              </center>
            </div>
          </div>
          <div class="col-md-6">
            <div>
              <center>
                <div>
                  <img style="width: 70%" src="{!! asset('public/assets/images/icon/icon/Hp.png') !!}">
                </div>
                <a href="https://play.google.com/store/apps/details?id=com.permatabimbel">
                <div style="width: 70%; background-color:#00b159; border-radius: 15px; padding: 2% 5% 2% 5%; color: white">
                  <span class="font-style" style="font-size: 23px;">Download Aplikasi Android</span>
                </div>
                </a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12" style="margin-top: 50px;">
      <center>
        <span style="color:#797474; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">
          Petanyaan Seputar PermataBelajar
        </span>
      </center>
    </div><br><br><br><br><br>
    <div class="col-md-12"> 
      <main>
          <article class="panel-group bs-accordion" id="accordion" role="tablist" aria-multiselectable="true" style="background-color: #ffffff00; border-color: #ffffff00;">
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00;">
              <div class="panel-heading panel-custom" role="tab" id="headingOne">
                <h4 class="panel-title font-style" style="position: relative; top: 15px; font-size: 23px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Bisa nggak satu akun, dipakainya bareng-bareng?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <center>
                    <span class="font-style" style="font-size: 18px;">Untuk mempermudah proses belajar kamu agar lebih fokus dan nyaman, PermataBelajar hanya diperuntukkan untuk penggunaan secara individual</span>
                  </center>
                </div>
              </div>
            </section>
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00;">
              <div class="panel-heading panel-custom" role="tab" id="headingTwo">
                <h4 class="panel-title font-style" style="position: relative; top: 15px; font-size: 23px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                    Pembayaran di PermataBelajar bisa dicicil nggak ?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <center>
                    <span class="font-style" style="font-size: 18px;">Untuk Saat ini, pembayaran PermataBelajar hanya dapat dilakukan 1 kali di awal.</span>
                  </center>
                </div>
              </div>
            </section>
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00;">
              <div class="panel-heading panel-custom" role="tab" id="headingThree">
                <h4 class="panel-title font-style" style="position: relative; top: 15px; font-size: 23px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                    Bagaimana Metode Pembayaran untuk BerLangganan ?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <span class="font-style" style="font-size: 18px;">metode pembayaran Bank Transfer Manual (BCA,Mandiri), Transfer Otomatis melalui Virtual Account (Permata Bank , BNI) dan GOPAY</span>
                </div>
              </div>
            </section>
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00;">
              <div class="panel-heading panel-custom" role="tab" id="headingour">
                <h4 class="panel-title font-style" style="position: relative; top: 15px; font-size: 23px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                    Apakah Materi PermataBelajar sesuai dengan pelajaran sekolah ?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingour">
                <div class="panel-body">``
                    <span class="font-style" style="font-size: 18px;">Tentunya, materi yang dipelajari di sekolah ada di PermataBelajar. Materi PermataBelajar lengkap , pembahasan yang mendalam , dan sesuai dengan kurikulum Nasional</span>``
                </div>
              </div>
            </section>
            <section class="panel panel-default" style="background-color: #ffffff00; border-color: #ffffff00;">
              <div class="panel-heading panel-custom" role="tab" id="headinFive">
                <h4 class="panel-title font-style" style="position: relative; top: 15px; font-size: 23px;">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                    Masih Belum Yakin ?
                    <span class="glyphicon glyphicon-chevron-down pull-right" aria-hidden="true"></span>
                  </a>
                </h4>
              </div>
              <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinFive">
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

<div class="section" style="background-color: #2980b9;">
  <div class="desc-plus-permata-belajar" style="height: auto;background-color: #2980b9;padding: 10px 71px 10px 71px;">
    <div class="container">
      <div class="row">
        <div class="fitur-permata">
          <div class="col-md-12">
            <center>
              <span style="color:white; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">Belajar dengan aman dan nyaman</span>
            </center>
          </div><br><br><br><br><br>
          <div class="col-md-12">
            <div class="square-content" style="height: auto; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
              <div class="row">
                <div class="privacy" style="margin-left: -59px;">
                  <div class="col-md-12">
                    <div class="col-md-3">
                      <div class="icon">
                        <img style="width: 50%; position: relative; bottom: 27px; left: 90px;" src="{!! asset('public/images/home/padlock.png') !!}">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <span class="font-style" style="font-size: 23px; color: #424242;">Jaga informasi pribadi kamu</span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474;">E-mail, username, password, kode OTP (One Time Password) dan data pribadi lainnya cukup kamu saja yang tahu.</span>
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
                      <span class="font-style" style="font-size: 23px; color: #424242;">Kode OTP itu Sangat Rahasia</span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474;">Rahasiakan kode OTP dan Masukkan kode OTP hanya di websiter/aplikasi resmi PermataBelajar. Jangan bagikan pada siapa pun, termasuk pihak PermataMall.</span>
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
                      <span class="font-style" style="font-size: 23px; color: #424242;">Waspada Penipuan Atas Nama PermataMall </span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474;">Transaksi resmi hanya melalui Sistem Pembayaran resmi PermataMal dan tanpa adanya perantara orang/website/aplikasi lainnya</span>
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
                      <span class="font-style" style="font-size: 23px; color: #424242;">Kenali nomor tagihan kamu dan transfer dana sesuai nominalnya</span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474;">Untuk mempermudah transaksi kamu , bayarlah sesuai dengan nominal yang tertera pada tagihan transaksimu di website/aplikasi resmi PermataMall/PermataBelajar</span>
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
                      <span class="font-style" style="font-size: 23px; color: #424242;">Pasti Aman dan Terpercaya</span><br>
                      <span class="font-style" style="font-size: 14px; color: #797474;">Untuk mempermudah transaksi kamu , bayarlah sesuai dengan nominal yang tertera pada tagihan transaksimu di website/aplikasi resmi PermataMall/PermataBelajar</span>
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
<div id="loadMe" class="modal">
  <div class="card">
    <div class="card-body">
      <center>
      <span>Ringkasan Materi</span><br>
      <span>KELAS 12 IPA</span><br>
      <span>MATEMATIKA PEMINATAN</span><br>
      <hr>
        <img src="{{ ENV('APP_URL_API_RESOURCE').'v2/image/ringkasan-materi/20200803Q5baWsx0dc-Limit_Fungsi.png'}}">
      </center>
    </div>
  </div>
</div>
@endif
@if($soal)
<div id="soal" class="modal">
  <div class="card">
    <div class="card-body">
      <center>
      <span>Soal dan Pembahasan</span><br>
      <span>KELAS 12 IPA</span><br>
      <span>MATEMATIKA PEMINATAN</span><br>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <p>SOAL : </p>
          <img src="{{ ENV('APP_URL_API_RESOURCE').'v2/image/soal/20200724-RcCSuXV1ZW-Limit_di_ketakhinggaan_suatu_fungsi.PNG'}}">
        </div>
        <div class="col-md-6">
          <p>PEMBAHASAN : </p>
          <img src="{{ ENV('APP_URL_API_RESOURCE').'v2/image/pembahasan/20200724-UAiTR1ZoI7-Limit_di_ketakhinggaan_suatu_fungsi.PNG'}}">
        </div>
      </div>
      </center>
    </div>
  </div>
</div>
@endif
<div id="video" class="modal">
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

<div id="detail-paket" class="modal" style="max-width: 50% !important;">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <span class="font-style" style="color:#00b159; font-size: 25px; ">Langganan Kamu</span>
          <div class="paket-langganan">
            <span class="font-style" style="color:#797474; font-size: 20px; margin-right: 12px; ">Paket/Kelas Kamu</span>
            <span class="font-style" style="color:#797474; font-size: 20px; margin-right: 6px; ">:</span>
            <span class="font-style" style="color:#797474; font-size: 20px; " id="value-paket"><b></b></span>
          </div>
          <div class="durasi-langganan">
            <span class="font-style" style="color:#797474; font-size: 20px; margin-right: 14px; ">Durasi Langganan</span>
            <span class="font-style" style="color:#797474; font-size: 20px; margin-right: 6px; ">:</span>
            <span class="font-style" style="color:#797474; font-size: 20px; " id="value-durasi"><b></b></span>
          </div>
          <div class="Harga-langganan" style="margin-bottom: 20px;">
            <span class="font-style" style="color:#797474; font-size: 20px; margin-right: 65px; ">Harga Paket</span>
            <span class="font-style" style="color:#797474; font-size: 20px; margin-right: 6px; ">:</span>
            <span class="font-style" style="color:#797474; font-size: 20px; "><b>Gratis Selama Promosi</b></span>
          </div>
        </div>
        <div class="col-md-12">
          <span class="font-style" style="color:#00b159; font-size: 25px; ">Paket Bimbel Meliputi</span>
          <div class="paket-1">
            <span class="font-style" style="color:#00B159; font-size: 20px; margin-right: 12px; ">-</span>
            <span class="font-style" style="color:#797474; font-size: 20px; ">Ringkasan Materi Pembelajaran</span>
          </div>
          <div class="paket-2">
            <span class="font-style" style="color:#00B159; font-size: 20px; margin-right: 12px; ">-</span>
            <span class="font-style" style="color:#797474; font-size: 20px; ">Soal Latihan dengan Pembahasan</span>
          </div>
          <div class="paket-3">
            <span class="font-style" style="color:#00B159; font-size: 20px; margin-right: 12px; ">-</span>
            <span class="font-style" style="color:#797474; font-size: 20px; ">Video Tutorial Belajar</span>
          </div>
          <div class="paket-4" style="margin-bottom: 20px;">
            <span class="font-style" style="color:#00B159; font-size: 20px; margin-right: 12px; ">-</span>
            <span class="font-style" style="color:#797474; font-size: 20px; ">Forum Diskusi dan Konsultasi</span>
          </div>          
        </div>
        <div class="col-md-12">
          <div class="col-md-6">
            <a href="#ex1" rel="modal:open">
              <div style="border: 1px solid #00b159; background-color: white; height: 40px; padding-top: 5px; border-radius: 13px;">
                <center>
                  <span class="font-style" style="font-size: 20px; color: #797474; ">Ubah Paket</span>
                </center>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <div style="border: 1px solid #00b159; background-color: #00b159; height: 40px; padding-top: 2px; border-radius: 13px;">
              <form method="get" action="{{ route('Login.index') }}">
                <input type="hidden" name="gabungan" id="gabungan">
                <center>
                  <button style="background-color: #ffffff00; border-color: #f0ffff00;"><span class="font-style" style="font-size: 20px; color: white; cursor: pointer;">Langganan Sekarang</span></button>
                </center>
              </form>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>



<style type="text/css">
  .modal {
    max-width: 80% !important;
  }

  .panel-custom{
    background-color: #00b159 !important; 
    border-color: #ffffff00 !important;  
    color: white !important; 
    border-radius: 10px 49px 10px 49px;  
    height: 67px; 
    padding: 11px 95px 14px 50px;
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

  .avatar-testimoni{
    width: 30%;
    z-index: 3;
    position: absolute;
    top: -60px;
    right: 137px;
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

  .name-testimoni{
    position: relative; 
    top: 57px;
    font-size:25px; 
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

  .des-paket-home{
    color: #3e3e3e;
    font-size: 38px;
    font-family: 'Ubuntu', sans-serif;
  }

  .label-paket{
    font-size: 18px; 
    color: #797474;
    font-family: 'Ubuntu', sans-serif;
  }

  .section {
      padding-top: 30px !important;
      padding-bottom: 38px !important;
      background-color: #e8e8e861;
  }

  .square-content{
    height:auto; 
    width:100%; 
    background-color:white; 
    border-radius: 10px 49px 10px 49px; 
    padding: 7% 13% 7% 13%;

  }

  .square-blog{
    height:auto; 
    width:100%; 
    background-color:white; 
    border-radius: 15px 15px 15px 15px; 
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
var FILE = "https://resource.permatamall.com/api/v1/v2/video/play/Kelas-12-IPA-MTK-Limit.mp4";
var NUM_CHUNKS = 10000;
var video = document.querySelector('video');

window.MediaSource = window.MediaSource || window.WebKitMediaSource;

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
      return false;
    }
    callback(new Uint8Array(xhr.response));
  };
}
</script>
<script type="text/javascript">
  $('.count').each(function () {
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

  function detailPaket(){
    if ($('#kelas').val() == "" && $('#durasi').val() == "") {
      alert ('silahkan pilih paket dan durasi kamu terlebih dahulu')
      
    }else{
      var kelas  = $('#kelas').val()
      var durasi = $('#durasi').val()
      var gabungan = [kelas,durasi]
      
      $('#value-paket').html(kelas)
      $('#gabungan').val(gabungan)
      $('#value-durasi').html(durasi + ' Bulan')

      $('#detail-paket').modal({
        fadeDuration: 250,
      });   
    }
    
  }

  function getharga(val){
    if ($('#kelas').val() == "Kelas 12 IPA" || $('#kelas').val() == "Kelas 12 IPS" || $('#kelas').val() == "Kelas 11 SMA" || $('#kelas').val() == "Kelas 10 SMA" || $('#kelas').val() == "Kelas 9 SMP"  || $('#kelas').val() == "Kelas 8 SMP"  || $('#kelas').val() == "Kelas 7 SMP"  || $('#kelas').val() == "Kelas 6 SD"   || $('#kelas').val() == "Kelas 5 SD"   || $('#kelas').val() == "Kelas 4 SD" ) {
      if (val == 1) {
        $('#harga').html('RP 20.000/ 1 Bulan')
      }else if( val == 3){
        $('#harga').html('RP 40.000/ 3 Bulan')
      }else if( val == 6){
        $('#harga').html('RP 70.000/ 6 Bulan')
      }else if( val == 12){
        $('#harga').html('RP 120.000/ 12 Bulan')
      }
    }else if ($('#kelas').val()=="TES MASUK PTN"){
      if (val == 1) {
        $('#harga').html('RP 30.000/ 1 Bulan')
      }else if( val == 3){
        $('#harga').html('RP 60.000/ 3 Bulan')
      }else if( val == 6){
        $('#harga').html('RP 100.000/ 6 Bulan')
      }else if( val == 12){
        $('#harga').html('RP 180.000/ 12 Bulan')
      }
    }
  }

</script>