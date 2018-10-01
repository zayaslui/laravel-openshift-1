@extends('layouts.principal')
@section('content')

<!---start-content---->
<div class="content">	
		<!-- layerslayer -->
	<div id="slider-wrapper">
	</div>
</div>
<div id="script">
  
</div>
<script>
$.ajax({
      url: 'puta',
      type: "post",
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: {},
      success: function(data){
        $("#slider-wrapper").append(data.arr.html);
        $("#script").append(data.arr.script);
      }
    });

// function start(){
//         $("#layerslider").layerSlider({
//                   pauseOnHover: false,
//                   skinsPath: '/skins/',
//                   width : '75%',
//                   height : '500px',
//                   responsive : true,
//                   responsiveUnder : 960,
//                   sublayerContainer : 900,
//                   autoStart : true,
//                   pauseOnHover : true,
//                   firstLayer : 1,
//                   animateFirstLayer : true,
//                   randomSlideshow : false,
//                   twoWaySlideshow : true,
//                   loops : 0,
//                   forceLoopNum : true,
//                   autoPlayVideos : true,
//                   autoPauseSlideshow : 'auto',
//                   // youtubePreview : 'maxresdefault.jpg',
//                   keybNav : true,
//                   touchNav : true,
//                   // skin : '',
//                   // globalBGColor : 'transparent',
//                   navPrevNext : true,
//                   navStartStop : true,
//                   navButtons : true,
//                   hoverPrevNext : true,
//                   hoverBottomNav : false,
//                   showBarTimer : false,
//                   showCircleTimer : true,
//                   thumbnailNavigation : 'disabled',
//                   tnWidth : 100,
//                   tnHeight : 60,
//                   tnContainerWidth : '60%',
//                   tnActiveOpacity : 35,
//                   tnInactiveOpacity : 100,
//                   imgPreload : true,
//                   yourLogo : false,
//                   yourLogoStyle : 'left: 10px; top: 10px;',
//                   yourLogoLink : false,
//                   yourLogoTarget : '_self',
//                   cbInit : function(element) { },
//                   cbStart : function(data) { },
//                   cbStop : function(data) { },
//                   cbPause : function(data) { },
//                   cbAnimStart : function(data) { },
//                   cbAnimStop : function(data) { },
//                   cbPrev : function(data) { },
//                   cbNext : function(data) { }
//           });
//       }
</script>




@stop