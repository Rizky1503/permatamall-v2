
<!-- <div class="horizon horizon-prev">
  <img src="{!! asset('public/images/right.png') !!}">
</div>
<div class="horizon horizon-prev">
  <img src="{!! asset('public/images/left.png') !!}">
</div> -->
<div class="items-menu" style="overflow-x: none;" style="cursor: pointer;">
  @foreach($video as $key => $video)
    <div class="item-menu item6" onclick="getvideoBelajar('{{$video->file}}')">
      <img src="{{ ENV('APP_URL_API_RESOURCE_V2').'video/banner/'.$video->banner }}" style="max-width:230px; border-radius: 15px;">
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



<br>
<style type="text/css">
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

  .item-menu {
    text-align: left !important;
  }
</style>

<script type="text/javascript">

$('.horizon-prev').click(function() {
event.preventDefault();
$('#items-menu').animate({
  scrollLeft: "-=775px"
}, "slow");
});

$('.horizon-next').click(function() {
event.preventDefault();
$('#items-menu').animate({
 scrollLeft: "+=775px"
}, "slow");
});  
  
</script>