<div class="section" style="background-color: #00B159;">  
  <div class="paket-list" style="height: 448px;">
    <div class="container">
      <div class="desc" style="">
        <div class="col-md-12">
            <center><span class="des-paket-home">Langganan Sekarang Juga dan <span style="color: white">Coba Gratis.</span></span></center>
            <center><span class="des-paket-home">Pelajar Indonesia yang Sedang Belajar Disini : <span class="_count" style="font-weight:900">10.000</span> ++</span></center>
        </div>

        <div class="col-md-5" style="position: relative; top: 20px;">
          <div class="square-content" style="box-shadow: 6px 6px 5px 0px rgba(201,201,201,1);">
            <div class="row">
              <div class="col-md-12">
                <label class="label-paket">Pilih Kelas/Paket</label>
                <select class="form-control select-paket font-style" style="font-size: 19px; color: #797474;" id="kelas"> 
                  <option value="">--Pilih Kelas--</option>
                  @foreach($kelas as $key => $kelas)
                    <option data-rc="{{$kelas->title}}" value="{{ encrypt($kelas->id_kelas) }}">{{ $kelas->value }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-12" style="margin-top: 9px;">
                <label class="label-paket">Durasi Langganan</label>
                <select class="form-control select-paket font-style" style="font-size: 19px; color: #797474;" id="durasi"> 
                  <option value="">--Pilih Durasi--</option>
                  @foreach($durasi as $key => $durasi)
                    <option value="{{ $durasi->value }}">{{ strtoupper($durasi->value) }}AN</option>
                  @endforeach
                </select>
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

        <div class="col-md-7" style="position: relative; top: 20px;">
          <div class="square-content" style="box-shadow: 3px 4px 3px 4px rgba(201,201,201,1); height: 272px; padding: 1% 7% 8% 19%;">
            <center>
              <span class="font-style" style="font-size: 17px; color: #797474; position: relative; bottom: -13px;"><b>Paket Bimbel Online Meliputi :</b></span>
            </center>
            <div class="icon-tentang-permata">
              <div class="col-md-4">
                <div class="ringkasan_materi" onclick="getringkasan()" style="cursor: pointer;">
                  <img style="width: 50%;" src="{!! asset('public/images/home/ringkasan_materi.png') !!}"><br>
                  <span class="font-style" style="font-size: 14px;">Ringkasan Materi</span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="soal_dan_latihan" onclick="getsoal()" style="cursor: pointer;">
                  <img style="width: 50%;" src="{!! asset('public/images/home/soal_dan_latihan.png') !!}"><br>
                  <span class="font-style" style="font-size: 14px;">Soal dan latihan</span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="video_belajar" onclick="getvideos()" style="cursor: pointer;">
                  <img style="width: 50%;" src="{!! asset('public/images/home/video_belajar.png') !!}"><br>
                  <span class="font-style" style="font-size: 14px;">Video Belajar</span>
                </div>
              </div>
              <div class="col-md-4" style="margin-top: 10px;">
                <div class="tes">
                  <a href="https://play.google.com/store/apps/details?id=com.permatabimbel" target="_blank">
                    <img style="width: 50%;" src="{!! asset('public/images/home/tes_minat_bakat.png') !!}"><br>
                    <span class="font-style" style="font-size: 14px;">Tes Minat Dan Bakat</span>
                  </a>
                </div>
              </div>
              <div class="col-md-4" style="margin-top: 10px;">
                <div class="tes">
                  <a href="https://play.google.com/store/apps/details?id=com.permatabimbel" target="_blank">
                    <img style="width: 50%;" src="{!! asset('public/images/home/tryout.png') !!}"><br>
                    <span class="font-style" style="font-size: 14px;">TryOut</span>
                  </a>
                </div>
              </div>
              <div class="col-md-4" style="margin-top: 10px;">
                <div class="tes">
                  <a href="https://play.google.com/store/apps/details?id=com.permatabimbel" target="_blank">
                    <img style="width: 50%;" src="{!! asset('public/images/home/forum_konsultasi.png') !!}"><br>
                    <span class="font-style" style="font-size: 14px;">Konsultasi</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
       

        <div class="col-md-12" style="top: 60px;">
          <div class="container">
          <center>
          <span style="color:white; font-size: 20px;  font-family: 'Ubuntu', sans-serif;">
            Membantu siswa/i SD, SMP, SMA dan Tes Masuk PTN belajar dengan lengkap, mudah dan menarik darimana dan dimana saja di seluruh wilayah Indonesia dengan dengan biaya murah menggunakan teknologi digital.
          </span>  
          </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section"  style="background-color: #00B159;">
  <div class="kelebihan-permata"> 
    <div class="container"> 
      <div class="row">
        <div class="col-md-12">
          <center>
            <span style="color:white; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">Mengapa Harus <span style="color: white">Permata</span><span style="color: white;">Belajar </span> ??</span>
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
                  <span class="font-style" style="font-size: 13px;">Sangat Mahal <br>(Rata-rata > Rp6.000.000 / tahun )</span>
                </td>
                <td align="center" class="td" style="background-color: white">
                  <span class="font-style" style="font-size: 13px;">Sangat Mahal <br>(Rata-rata > Rp1.000.000 / tahun )</span>
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

<div class="section"  style="margin-top: 10px; height: 500px">
  <div class="container"> 
    <div class="row">
      <div class="col-md-12">
        <center>
          <span style="color:#00B159; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">Video Pembelajaran</span>
        </center>
      </div>
    </div>
  </div> <br><br>
  @include('Pages.video')
</div>

<div class="section" style="background-color: #00B159">
  <div class="desc-plus-permata-belajar" style="height: auto;background-color: #00B159;padding: 10px 71px 10px 71px;">
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
                    <img class="image-testimoni" src="{!! asset('public/images/foto_testimoni/ada.png') !!}" style="z-index: 1">
                  </center>
                </div>
                <div class="name-testimoni">
                  <center> 
                    <span class="font-style"><b>Lidya Marbun</b></span><br>
                    <span class="font-style"><b>SMAN 83 Jakarta</b></span><br>
                    <span class="font-style"><b>( Kelas 12 SMA )</b></span><br>
                  </center>
                </div>
                <div class="text-testimoni">
                  <center> 
                      <span class="font-style">"Sangat Membantu dalam ngerjain tugas dirumah"</span>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="square-content" style="height: 400px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/foto_testimoni/2.PNG') !!}" style="z-index: 1">
                  </center>
                </div>
                <div class="name-testimoni">
                  <center> 
                    <span class="font-style"><b>Silvia Carmenita</b></span><br>
                    <span class="font-style"><b>SMAN 89 Jakarta</b></span><br>
                    <span class="font-style"><b>( Kelas 11 SMA )</b></span><br>
                  </center>
                </div>
                <div class="text-testimoni">
                  <center> 
                      <span class="font-style">" akhirnya nemu juga bimbel online murah dengan materi sesuai "</span>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="square-content" style="height: 400px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/foto_testimoni/3.PNG') !!}" style="z-index: 1">
                  </center>
                </div>
                <div class="name-testimoni">
                  <center> 
                    <span class="font-style"><b>Sri Rejeki</b></span><br>
                    <span class="font-style"><b>SMAN 3 Kikim Timur Sumatra Selatan</b></span><br>
                    <span class="font-style"><b>( Kelas 11 SMA )</b></span><br>
                  </center>
                </div>
                <div class="text-testimoni">
                  <center> 
                      <span class="font-style">" tampilannya bagus,mudah digunakan dan pelajarannya mudah dimengerti "</span>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-4" style="margin-top: 90px">
              <div class="square-content" style="height: 400px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/home/avatar.jpg') !!}" style="z-index: 1">
                  </center>
                </div>
                <div class="name-testimoni">
                  <center> 
                    <span class="font-style"><b>Miftah </b></span><br>
                    <span class="font-style"><b>SMP Muhammadiyah 1 Padang</b></span><br>
                    <span class="font-style"><b>( Kelas 8 SMP )</b></span><br>
                  </center>
                </div>
                <div class="text-testimoni">
                  <center> 
                      <span class="font-style">" Respon untuk jawab soalnya cepet, suka sekali dengan tentor PermataBelajar "</span>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-4" style="margin-top: 90px">
              <div class="square-content" style="height: 400px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/home/avatar.jpg') !!}" style="z-index: 1">
                  </center>
                </div>
                <div class="name-testimoni">
                  <center> 
                    <span class="font-style"><b>Ridwan Alwi</b></span><br>
                    <span class="font-style"><b>MAN 2 Padangsidempuan</b></span><br>
                    <span class="font-style"><b>( Kelas 12 SMA )</b></span><br>
                  </center>
                </div>
                <div class="text-testimoni">
                  <center> 
                      <span class="font-style">" Bisa belajar dari video dan ringkasan materi yang tersedia untuk setiap pelajaran "</span>
                  </center>
                </div>
              </div>
            </div>
            <div class="col-md-4" style="margin-top: 90px">
              <div class="square-content" style="height: 400px; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
                <div class="avatar-testimoni">
                  <center>
                    <img class="image-testimoni" src="{!! asset('public/images/home/avatar.jpg') !!}" style="z-index: 1">
                  </center>
                </div>
                <div class="name-testimoni">
                  <center> 
                    <span class="font-style"><b>Siti Fatima</b></span><br>
                    <span class="font-style"><b>Nurul Ikhsan Bogor</b></span><br>
                    <span class="font-style"><b>( Kelas 6 SD )</b></span><br>
                  </center>
                </div>
                <div class="text-testimoni">
                  <center> 
                      <span class="font-style">" Saya selalu bertanya tentang tugas sekolah ke guru PermataBelajar, komunikasinya cepat dan asyik. "</span>
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
  <div class="desc-plus-permata-belajar" style="height: auto;background-color: #00B159;padding: 10px 71px 10px 71px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
            <span style="color:white; font-size: 40px;  font-family: 'Ubuntu', sans-serif;">
              Penuhi Semua Kebutuhan Kamu
            </span>
          </center>
        </div><br><br><br><br><br>
        <div class="col-md-6">
          <div class="square-content" style="height: 200px; padding: 3% 13% 7% 13%; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
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
                  <a href="https://play.google.com/store/apps/details?id=com.permatabimbel" target="_blank">
                    <span class="font-style">Selengkapnya</span>
                  </a>
                </center>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="square-content" style="height: 200px; padding: 3% 13% 7% 13%; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
            <div class="title-produk">
              <center>
                <span class="font-style">Tryout</span>
              </center>
            </div><br>
            <div class="desc-produk">
              <center>
                <span class="font-style">Uji Pemahaman Anda <br>di Tryout Permata Belajar</span>
              </center>
            </div><br>
            <div class="link-produk">
              <div class="border-link">
                <center>
                  <a href="https://play.google.com/store/apps/details?id=com.permatabimbel" target="_blank">
                    <span class="font-style">Selengkapnya</span>
                  </a>
                </center>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top: 20px;">
          <div class="square-content" style="height: 200px; padding: 3% 13% 7% 13%; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
            <div class="title-produk">
              <center>
                <span class="font-style">Bimbel Online</span>
              </center>
            </div><br>
            <div class="desc-produk">
              <center>
                <span class="font-style">Belajar latihan,soal,ringkasan materi, <br> video Terlengkap</span>
              </center>
            </div><br>
            <div class="link-produk">
              <div class="border-link">
                <center>
                 <a href="https://play.google.com/store/apps/details?id=com.permatabimbel" target="_blank">
                    <span class="font-style">Selengkapnya</span>
                  </a>
                </center>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top: 20px;">
          <div class="square-content" style="height: 200px; padding: 3% 13% 7% 13%; box-shadow: 7px 7px 5px 0px rgba(0,0,0,0.75);">
            <div class="title-produk">
              <center>
                <span class="font-style">Forum Konsultasi</span>
              </center>
            </div><br>
            <div class="desc-produk">
              <center>
                <span class="font-style">forum tanya jawab soal atau tugas dari sekolah <br> di permatabelajar</span>
              </center>
            </div><br>
            <div class="link-produk">
              <div class="border-link">
                <center>
                 <a href="https://play.google.com/store/apps/details?id=com.permatabimbel" target="_blank">
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
                <a href="{!! asset('public/destkop/PermataBelajar.msi') !!}" onclick="countDownload()">
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
                    <span class="font-style" style="font-size: 18px;">Selesaikan pendaftaran dan dapatkan coba gratis. Coba dan rasakan keseruan belajar dengan Permata Belajar</span>
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


<div id="video" class="modal">
  <div class="card">
    <div class="card-body">
      <center>
      <span>VIDEO</span><br>
      <span>IPA</span><br>
      <span>KELAS 12</span><br>
      <hr>
     <div>
          <video id="player" playsinline controls data-poster="/path/to/poster.jpg">
            <source src="https://resource.permatamall.com/api/v1/v2/video/play/Kelas-12-IPA-MTK-Limit.mp4" type="video/mp4" />
          </video>
     </div>
      </center>
    </div>
  </div>
</div>

<div id="videoBelajar" class="modal">
  <div class="card">
    <div class="card-body">
      <center>
        <div>
          <video id="player" playsinline controls data-poster="/path/to/poster.jpg" style="width: 100%">
            <source id="video_file" src="" type="video/mp4" />
          </video>
        </div>
      </center>
    </div>
  </div>
</div>

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
          <div class="Harga-langganan" style="margin-bottom: 20px;">
            <span class="font-style" style="color:#797474; font-size: 20px; margin-right: 65px; ">Harga Paket</span>
            <span class="font-style" style="color:#797474; font-size: 20px; margin-right: 6px; ">:</span>
            <span class="font-style" style="color:#797474; font-size: 20px;" id="title-harga"><b></b></span>
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
                <input type="hidden" name="kelas" id="tx_kelas" value="">
                <input type="hidden" name="nama_kelas" id="nama_kelas" value="">
                <input type="hidden" name="id_durasi" id="id_durasi" value="">
                <center>
                  <button style="background-color: #ffffff00; border-color: #f0ffff00;"><span class="font-style" style="font-size: 20px; color: white; cursor: pointer;">Aktifkan</span></button>
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
  #videoBelajar{
    z-index: 99;
  }

  .items-menu {
      position: relative;
      width: 100%;
      overflow-x: none !important;
      overflow-y: hidden;
      white-space: nowrap;
      transition: all 0.2s;
      will-change: transform;
      user-select: none;
      cursor: pointer;
      padding-left: 35px;
  }

  .modal {
    max-width: 80% !important;
  }

  .panel-default>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #ddd0;
    border-bottom-color: #ddd0;
  }

  .panel-custom{
    background-color: #00b159 !important; 
    border-color: #ffffff00 !important;  
    color: white !important; 
    border-radius: 10px 49px 10px 49px;  
    height: 67px; 
    padding: 11px 95px 14px 50px;
    border-bottom-color: #ddd0;
  }

  .panel{
    padding-bottom: 10px;
    border-bottom-color: #ddd0;
    box-shadow: 0 1px 1px rgb(253 253 253 / 5%);

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
    color: white;
    font-size: 20px;
    font-family: 'Ubuntu', sans-serif;
  }

  .label-paket{
    font-size: 14px; 
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

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<link rel='stylesheet' href="{!! asset('public/assets/plyr/plyr.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('public/assets/css/template-video.css') !!}">
<script src="{!! asset('public/assets/plyr/polyfill.min.js') !!}"></script>
<script src="{!! asset('public/assets/plyr/plyr.min.js') !!}"></script>
<script  src="{!! asset('public/assets/plyr/script-plyr.js') !!}"></script>
<!-- <script type="text/javascript">
var FILE = "https://resource.permatamall.com/api/v1/v2/video/play/Kelas-12-IPA-MTK-Limit.mp4";
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
      return false;
    }
    callback(new Uint8Array(xhr.response));
  };
}
</script> -->
<script type="text/javascript">
  $(document).ready(function() {
    var item = $('.item'), //Cache your DOM selector
    visible = 5, //Set the number of items that will be visible
    index = 0, //Starting index
    endIndex = ( item.length / visible ) - 1; //End index

      $('#arrowR').click(function(){
          if(index < endIndex ){
            index++;
            item.animate({'left':'-=940px'});
          }
      });
      
      $('#arrowL').click(function(){
          if(index > 0){
            index--;            
            item.animate({'left':'+=940px'});
          }
      });
      
  });
  function countDownload(){
    $.ajax({
        type: "POST",
        url: '{{ route("ExampPermata.proses") }}',
        data: {
          sum : 1,
        },
        success: function(responses){  
          
        }
    });
  }

  $(function() {
    function log_modal_event(event, modal) {
      if(typeof console != 'undefined' && console.log) console.log("[event] " + event.type);
    };

    $(document).on($.modal.CLOSE, log_modal_event);

    $('#video').on($.modal.CLOSE, function(event, modal) {
      location.href = "{{ route('FrontEnd.index') }}";
    });

    $('#videoBelajar').on($.modal.CLOSE, function(event, modal) {
      location.href = "{{ route('FrontEnd.index') }}";
    });

  });

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

  function getsoal(){
    $('#soal').modal({
      fadeDuration: 250,
    });
  }

  function getvideos(){
    $('#video').modal({
      fadeDuration: 250,
    });
  }

  function getvideoBelajar(file){
    document.getElementById("video_file").src = file;
    $('#videoBelajar').modal({
      fadeDuration: 250,
    }); 
  }

  var selection = document.getElementById("kelas");

  selection.onchange = function(event){
    var rc = event.target.options[event.target.selectedIndex].dataset.rc;
    $('#title-harga').html(rc)
  };


  function detailPaket(){
    if ($('#kelas').val() == "" && $('#durasi').val() == "") {
      alert ('silahkan pilih paket dan durasi kamu terlebih dahulu')
      
    }else{
      var kelas     =   $( "#kelas option:selected" ).text();
      var id_kelas  =   $( "#kelas").val();
      var durasi    =   $( "#durasi").val();

      $('#value-paket').html(kelas)  
      $('#nama_kelas').val(kelas)      
      $('#tx_kelas').val(id_kelas)      
      $('#id_durasi').val(durasi)  
          
      $('#detail-paket').modal({
        fadeDuration: 250,
      });   
    }
    
  }


</script>