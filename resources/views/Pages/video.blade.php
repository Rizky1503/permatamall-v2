
<!-- <div class="horizon horizon-prev">
  <img src="{!! asset('public/images/right.png') !!}">
</div>
<div class="horizon horizon-prev">
  <img src="{!! asset('public/images/left.png') !!}">
</div> -->
<div class="items-vid-menu">
    <div id="list-container">
        <div class='list'>
            <div id="arrowL">
                <a class="left carousel-control-vid-left">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
            </div>
            <div id="arrowR">
                <a class="right carousel-control-vid-right">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            @foreach($video as $key => $video)
            <div class="item-vid-menu item6 item" onclick="getvideoBelajar('{{$video->file}}')">
              <img src="{{ ENV('APP_URL_API_RESOURCE_V2').'video/banner/'.$video->banner }}" style="max-width:214px; border-radius: 15px;">
              <br><br>
              <center>
                <span class="font-style" style="font-size: 15px;">{{ $video->kelas }}</span><br>
                <span class="font-style" style="font-size: 15px;">{{ $video->bidang_studi }}</span><br>
                <span class="font-style" style="font-size: 15px;">{{  substr($video->title,0,30) }}</span>
              </center>
              <br>
            </div> 
            @endforeach
        </div>
    </div>
</div>





<br>
<style type="text/css">
 .items-vid-menu {
   position: relative;
   width: 100%;
   white-space: nowrap;
   transition: all 0.2s;
   will-change: transform;
   user-select: none;
   cursor: pointer;
   padding-left: 35px;
 }

 #list-container {
     overflow:hidden;    
     width: 9999px;  
     float:left;  
     margin-left: -39px;  
 }

 .list{
    min-width:1400px;
    float:left;
 }

.carousel-control-vid-left{
     position: absolute;
     top: 90px;
     bottom: 0;
     left: -74px;
     width: 15%;
     font-size: 20px;
     color: #fff;
     text-align: center;
     text-shadow: 0 1px 2px rgba(0,0,0,.6);
     background-color: rgba(0,0,0,0);
     filter: alpha(opacity=50);
     opacity: .5;
     z-index: 2;
 }

 .carousel-control-vid-right{
     position: absolute;
     top: 90px;
     bottom: 0;
     right: : -80px;
     width: 15%;
     font-size: 20px;
     color: #fff;
     text-align: center;
     text-shadow: 0 1px 2px rgba(0,0,0,.6);
     background-color: rgba(0,0,0,0);
     filter: alpha(opacity=50);
     opacity: .5;
     z-index: 2;
 }



.right {
    right: -80px !important;
}


 .item-vid-menu {
   display: inline-block;
   background: #f1f1f1;
   text-align: center;
   padding: 10px;
   min-width: 100px;
   margin: 10px 3px 1px 3px;
   border-radius: 4px;
   margin:5px;
   float:left;
   position:relative;
 }

</style>

<script type="text/javascript">

  
</script>