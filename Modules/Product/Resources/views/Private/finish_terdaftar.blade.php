@extends('layouts.FrontEnd')

@section('content')
<div style="width: 100%; height: 220px; background-image: url('{!! asset('public/images/sidebar/privat.png') !!}');">
    <div class="container">
      <p style="font-size: 24px;color: #fff;font-weight: 600;margin-top: 70px; text-align: center;">
          Les Privat
      </p>
    </div>
</div>
<div class="container"  style="margin-top: 30px; margin-bottom: 30px;">
  <div class="content">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAvVBMVEX/////pQD/owD/wHL/oQD/pgD/xXT/yHn/qAD///z/+/L//fj//PX/9uX/zX//8NT/89//9+j/0Yf/047/riX/wWH/26T/7dH/6L7/8dn/skP/tkH/3J//t0v/+Oj/rQD/vlP/zHb/4K7/58L/wlv/47T/2JT/xmz/7cv/xWT/tTP/26b/tz7/sDf/syH/ryz/vkz/y23/xFf/uC3/0n3/vWL/0pT/yYD/2KX/143/x2H/7cf/tDz/zIv/u1bIW2AOAAALD0lEQVR4nO1d10LjSgyNtTa4pCeQBMKGFNIWkrCFuyzc/f/PunYCpNgzmiI3rs/TPiwjKWPPqBzJpVKBAgUKFChQoECBAv8zzPvNs/Pzar/mpK1JLKg3b9a2BQCGvb55/pq2OuRwqzYE1gUI/mFX3bRVIoXXHZg7694B5uDOS1stOritE/t2NlYbaStGhcowwkAf5qKXtmo06C2MSAP9bdx00laOAvULloE+bj/BLjaYO7gzsZK2grrwqsAz0IBhOW0VNTE1efYFx81l2irqoct9RLebaM/TVlIHjRVmoG/iMs/eTRU30Ddxmraa6hi3hSxc1tJWVBXlmYB9Ac7zGk2NhLbQ38T2XdqqqqF3K2agb+JFLu9958kSNNAA6zKPz2lnKbqFvonXOTxsXKGb4sPEZv6ct7EtZeEgd56Nt5Ex0Ddxkrc3sS9noO++jtJWWQ7uQNJC/znNV2JqiAVNYZg/01ZaBi+C3szRJrZzlLRxF/IG+pjl58YQdUhPNzE37mn9r9IW5sc9dfpSl/2BhXZOcjYyDumJife5cE/lHNITE3Phno6lL/sDC/PgnroTdQN9ExfZT7yNLC0Lrcy7p65AhpRr4o+sb2JT3iE9hvmctgl81JS8maNNbGe64OapOaTHJi6yHAurOaSnm5hh97RyoW+gj+y6p8oO6TF89zSrz2nthmQLDbjJ6GFTbgknuRFYrWy6px3Ny34PWGUyoeFOdC/7PcxMuqd3Wg7pMcDK4I3hKse9kSZmsLg/pTTQf04zV9zvEXgzh8ieezoU4iSAGYDPknr/v8O0TTpGF99CMGFw/2c4fPz+YwDRdMzjTeymbdQhGqhDCkZ7+PJ+erjz5yV68sJFlgi2qEMK62b96C/c/jViI9j9lKyJAMa6AJiEH7neEDMxO+RTb4rpOqtH/Jnb4u88ZMc9xZLcMIx+o7wW/5eBZUbc0zJyU8BF1A4GwNLjMMyGZ4MkuXk70dtwvXWwxwnawYR3j7xN3zh/fIe8ivdZeBP7/KAJZrwWp8aM/5yaGbgxvvLjXqwmiGTnYJB+VqqJHBY3/JIgVi+GakJ2MDFfIxqeIXmzc+6f++5pyoeNi9GA7RayAurwzdK9Me6QmAJPYM8fsBVSrbehSW54wHxL9wpbYsJyGBKA08diILjCLjQHSyOD9ZReCrzDv+wD9W4w7VAL/Ws/Nfe03ER0o7HQMFLrGRZoGIErTDn0PQyu/ZRujLIA6wI/aerIWbpdZZKOeyrCusDzSZjLsF0lHQKxJ1KIwZMt2I26W2aVxiY+CxVirCayjFhVNQ0CsSDrAs6QdZpCRUdoJ04H84Yiivmq/UIO0zPBakDiBOKuwAGxtRCJntxfGe1va4i2FsKaf5j2RGv/SROIhYkzWIwv+iwkzdCoC7cWGsYTdyVxjhFsEkyBe0/C9hnmP9wjQrxJ0YAEU+AyrAt2PjiA8684vSFBAjGW5D7W656nV2MmQeAwE0todGXIXXzPVIpGlRhDQ7K1kMtrFuvY/zBxmcybKNlaaP7mnPJIVj+0ViIMja+SxBnznPP2/JbjUcE6iazUTymdglIu2xlxZWnhSTA0XkSdkA+lVuybWppymwBDA01yh5XiDKDpyVPFFnEzNIRC8mOY7DO+I98u3OaVIwmgwuQ2W8we5rH0Ygb8jfWwcS4VmNxssqgzkqekgtWPs+m7hya5o3S6Z706ZZUOG1jGGGM4LRUaMLuOq9bnBtX4NrGj1m1gsn70yg8lC63YUuDOdzUmN/MwrSv+Ypu4NvFOkSRrsmrxHUXue1xT7FyVYyYAbBgrKhyluwWX8Vz7UzV1Ar+N8VQpNysClklXQu1VuQndYIR1iu91EGPEkNBwquo9P4zD1FE6SncY0h82Cg7p3sLoML+s3uoWA0MDI6DxLYyO6ioabUTkKXDnm05rIeMw7epYSJ0Cl0lyR6izilxUrALJWpO2SdGTSE1HaWNFngt/9Jrd2EGZAnq6cwQif2+9XjDaqUsKg62OtYn0TDVGhAQw/9C9iXN0GjBmYdSgBFd7OAFZCty51+0OhUXEsi/aFq6o6hgj7cY7uI1YVnYsXxhUKfCKakxxYOFVxLn3U39ZooQGQRM6PEQkyAhmaBgkCY25ckxxYGH7JbwwwXwCjAchhHJVW49ovoIrQNnDFz7TP2wEukMFYIUJ7TXZAkgUwNaOMSoXNHMEwtGFTji2h3mrmQLXiyn2gFloaZpBKIbuGOm6/k2xBfwKJTLEKHv4yno3htMi6rKHm9DDNKRZ2YCqzibWNJ3jvRqvodTRF6qltT6QoZwMC6kRurjKgqREgbVZ6VgBvJDNYwlnjupEA4kMbgkWAeG4kjDf+4XAVXpffK36nbop1VQkH9YpRZHmOnyDYgq8d02oA/x7srpKNZm5ePgcE4FHdGG9KfGrOx7Pd6gF0Eihh2HxWElMjOlelAD2er1+fX299nETYE25uFKM4Z7TjtTZftfxELSLz+RT4F2qyz4RKMQYlVu62WRJAJaSMYZzmacdDGC25NzTOtn8vKQAA7kUuG6SOwWYUTlZJmqE8/MSA8jcGIQjEJMDbMRZ4Hozudkq7Ma1CQ5sk4clPAilQRfY7AFgre4fm9Pp9Plxs7LiMBJeRW8Mskmrh2gvRvsYx72bEE8h3MISTGh0KGOKHcC66B4LL49udUt2EWIehDh9LqnXv5NsN8NuY29Ib6IhFGOMKXLRRwBrGnXKNZrkB5pQp6kWcSZarDGNrhC5LfJdhAkeY0i1bYlJZY610PmcCUOW8Q07bJQplkyYC/bPKtWcJwRYYZuIfoNZWuSad77h819kwaTrvqFOH/c2uWXaJ5tYHFj8OsYj+RYiVxTVpPo9TO6XFF/ojxmks9VBppkpSOR1mopMnJFERPH3GERlxAPALZsFTpmlfZOGXsHS3X64TJtJs6kofhGOJ+0B+87YV3yKkrRQ5rd3kZGwSsLQOVEik7Ckpf4TfX7HEFMQzfqSlhp9B7vIFEs1WTcYaSkOCxk0G7nWeFFRFNPMFMTaEVkpxW+HYqLQaWY9CmpUWO5t+Je9iyEeFbktSCulB4JDNDNPo3+FB3TWVyxJoSAFfrqJWp0BPEl/+W1mdJSME5iPx4Iq5N7MG7D2HeEpStKCT/oDyGOKvaQZbxNJuJ0MwUcxBg3FMlpQe8S59GPbwuDGODjkXJovwjEkXbMvDOyzEXqCD44Aio/6cSRNWM9pYxKj2ENicj3OLQxETaJdt/L3WO7gvdyPT4BcxilmK2oZRcv6uoy7hgdvM5Zr5PmuEMzV6PQC9rqr2IuUbx+ecH4nUO8FazFuHJypjfkwrhv4EOaWIt1IhFcCMFhcjnsN13Ub9fFoNoipSnoidRMccr2Eava+Se3bWbV6Ppu0YymQRiJ4TC+Tq9nHw/jiIej98siYzlkE3HslL1f8NVmA7ZUan3kL/ce0Xpp/cgu7pW+f3MIpfcEwWzCbsaUvMgLz5//AQuSTW3mH+aw1YCQHMEel+ie3sPbpfZpyyVl85k00v3ul0vgz7+G2ca8hN7w6V4DlliE1SjBeSxiwY7mRdzhlBuZ7RSGOAn4WcNCWOKZrh80Qjlr2utpThLIHc3lUfu5M8O+55wpgbk76oCpPg09kI5h2K9R74fRmxiexEUxj0YksBjWm7cQTmpR4V779zOnP700nVw9t27atHU7+NmN40+5NV1/r9sPV5BnjCpacerc/nbZaraaP6hbn7zg7wJdkcSj6Q5+deoGivr7Tab9bT++TpQUKFChQoECBAgUK8PAfGqvmHsSG5d0AAAAASUVORK5CYII=" width="100" style="float: left; margin-right: 20px;">
    <span style="text-align: justify;">Sobat Permata Les Privat, Pesanan Guru dengan spesifikasi yang sama telah terdaftar, mohon sobat permata les privat cek di menu keranjang untuk lebih detail</span>
  </div>  
</div>

@endsection
@section('script')
<style>

  .content{
    padding: 30px 30px 30px 30px;
    width: 100%;  
    margin-bottom: 20px;
    font-size: 24px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  }

  .invoice-box {
      max-width: 100%;
      margin: auto;
      padding: 30px;
      border: 1px solid #eee;
      box-shadow: 0 0 10px rgba(0, 0, 0, .15);
      font-size: 16px;
      line-height: 24px;
      color: #000;
  }
  
  .invoice-box table {
      width: 100%;
      line-height: inherit;
      text-align: left;
  }
  
  .invoice-box table td {
      padding: 5px;
      vertical-align: top;
  }
  
  .invoice-box table tr td:nth-child(2) {
      text-align: right;
  }
  
  .invoice-box table tr.top table td {
      padding-bottom: 20px;
  }
  
  .invoice-box table tr.top table td.title {
      font-size: 45px;
      line-height: 45px;
      color: #333;
  }
  
  .invoice-box table tr.information table td {
      padding-bottom: 40px;
  }
  
  .invoice-box table tr.heading td {
      background: #eee;
      border-bottom: 1px solid #ddd;
      font-weight: bold;
  }
  
  .invoice-box table tr.details td {
      padding-bottom: 20px;
  }
  
  .invoice-box table tr.item td{
      border-bottom: 1px solid #eee;
  }
  
  .invoice-box table tr.item.last td {
      border-bottom: none;
  }
  
  .invoice-box table tr.total td:nth-child(2) {
      border-top: 2px solid #eee;
      font-weight: bold;
  }
  
  @media only screen and (max-width: 600px) {
      .invoice-box table tr.top table td {
          width: 100%;
          display: block;
          text-align: center;
      }
      
      .invoice-box table tr.information table td {
          width: 100%;
          display: block;
          text-align: center;
      }
  }
  
  /** RTL **/
  .rtl {
      direction: rtl;
  }
  
  .rtl table {
      text-align: right;
  }
  
  .rtl table tr td:nth-child(2) {
      text-align: left;
  }
</style>
@endsection
