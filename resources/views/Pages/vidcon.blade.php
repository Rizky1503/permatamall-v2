
<!-- <div class="horizon horizon-prev">
  <img src="{!! asset('public/images/right.png') !!}">
</div>
<div class="horizon horizon-prev">
  <img src="{!! asset('public/images/left.png') !!}">
</div> -->
<div class="items-vidcon-menu">
    <div id="list-container">
        <div class='list'>
            <div id="arrowLVidcon">
                <a class="left carousel-control-vidcon-left">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
            </div>
            <div id="arrowRVidcon">
                <a class="right carousel-control-vidcon-right">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            @foreach($vidcon[0]->forum as $key => $vidcon)
            <a href='https://play.google.com/store/apps/details?id=com.permatabimbel' target="_blank">
              <div class="item-vidcon-menu item6 item-vidcon">
                <div class="row">
                  <div class="col-md-5">
                    <img src="{{ $vidcon->icon }}" style="max-width:140px; border-radius: 15px;">
                  </div>
                  <div class="col-md-7">
                    <div style="text-align: justify !important;">
                      <span><b>{!! $vidcon->title !!}</b></span><br>
                    </div><br>
                    @foreach($vidcon->dataContent as $num => $teks)
                      <span class="font-style" style="font-size: 15px;">- {{ $teks->title }}</span><br>
                    @endforeach
                  </div>
                </div>
                <br>
              </div>
            </a> 
            @endforeach
        </div>
    </div>
</div>
<br>
<style type="text/css">
 .items-vidcon-menu {
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

.carousel-control-vidcon-left{
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

 .carousel-control-vidcon-right{
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


 .item-vidcon-menu {
   display: inline-block;
   background: #f1f1f1;
   padding: 10px;
   min-width: 100px;
   margin: 10px 3px 1px 3px;
   border-radius: 4px;
   margin:5px;
   float:left;
   position:relative;
   text-align: left !important;
   height: 160px;
 }

</style>
