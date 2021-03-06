@extends('layouts.principal')
@section('content')
@section('tittle','Principal')

		<!-- layerslayer -->
	<div id="slider-wrapper">

		<!-- LayerSlider start -->

		<div id="layerslider" class="layerslider" style="width: 1280px; height: 500px;">

			<!-- slide one start -->

			<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">

				<!-- slide background image -->

				<img src="images/banner/1.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->

				<p class="ls-l" style="
					top:70px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">EDB Construcciones
				</p>
				<!-- layer two -->

<!-- 				<img class="ls-l" style="left: 30%; top: 50%;" src="images/sliderimages/clownfish.png" alt="Image layer" data-ls="
					offsetxin: left;
					offsetxout: right;
					offsetyin: 150;
					offsetyout: -250;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					durationout: 2500;
					delayin: 500;
					showuntil: 1;
				">
 -->
				<!-- <p class="ls-l" style="top:30px;left:90%;font-weight: 500; text-align: right;font-size:30px;color:#bd5949;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatein:90;transformoriginin:right bottom 0;offsetxout:0;durationout:1500;transformoriginout:right bottom 0;">
					...con los
				</p>
				<p class="ls-l" style="top:62px;left:85%;font-weight: 300; text-align: center;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f06a52;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:3250;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:0;durationout:1000;rotatexout:90;transformoriginout:50% bottom 0;">
					Mejores precios
				</p> -->
				<p class="ls-l" style="
					top:130px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Una empresa Paraguaya de Ingeniería
				</p>

			</div>

			<!-- slide one end -->

			<!-- slide two start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="images/banner/2.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: left;
					offsetxout: 0;
					offsetyin: 100;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer two -->

<!-- 				<img class="ls-l" 
					style="
						left: 650px; 
						top: 70px;
						background-color:blue;
					" 
					src="images/logo.png" 
					alt="Image layer" 
					data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide two end -->

			<!-- slide 3 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="images/banner/3.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 3 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide 3 end -->

			<!-- slide 4 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="images/banner/4.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 4 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide 4 end -->
		</div>


		</div>

		<!-- LayerSlider end -->

	<!---start-content---->
		<div class="content">
			
		    <div class="content_top ico-12-1">
		    	<div class="wrap ">
					<h1><a href="#">EDB Construcciones</a></h1>
					<p>EDB Construcciones es una empresa Paraguaya de Ingeniería, especializada en la construcción vial de rutas, 
                            puentes, viaductos, carreteras y todos los trabajos asociados redes de desagüe cloacal, redes de desagüe pluvial, 
                            tendido de redes eléctricas y obras aeroportuarias y arquitectónicas. <br>
                            Los procesos más importantes para la producción de insumos y materiales son realizados por nuestra empresa en 
                            instalaciones y plantas que son propiedad del grupo empresarial, en los que se aplica procedimientos de control 
                            y gestión de calidad, bajo la norma ISO 9001.<br></p>
					<span><a class="learnmore" href="about">Leer más</a></span>
				</div>
		    </div>

		    <div class="titulo-servicio">
			    <div class="wrap">
					<div class="specials-heading">
						<h3>Servicios</h3>
					</div>			
			    </div>
		    </div>

			@include('services.little_service')
			
			{{-- obras --}}
			<div class="specials">
				<div class="wrap" id="specials-grids">
					<div class="specials-heading">
						<h3>Obras Emblemáticas</h3>
					</div>
			    </div>
			</div>	
			@include('js.listarAllObrasAjax')
			{{-- obras --}}

		</div>

  </div>
	<div class="clear"> </div>
	<!---End-content---->

		<script>
			$(document).ready(
			function(){
				$("#layerslider").layerSlider({
						pauseOnHover: false,
						skinsPath: 'skins/',
			            width : '100%',
			            height : '500px',
			            responsive : true,
			            responsiveUnder : 960,
			            // sublayerContainer : 960,
			            autoStart : true,
			            pauseOnHover : true,
			            firstLayer : 1,
			            animateFirstLayer : true,
			            randomSlideshow : false,
			            twoWaySlideshow : true,
			            loops : 0,
			            forceLoopNum : true,
			            autoPlayVideos : true,
			            autoPauseSlideshow : 'auto',
			            // youtubePreview : 'maxresdefault.jpg',
			            keybNav : true,
			            touchNav : true,
			            // skin : '',
			            // globalBGColor : 'transparent',
						navPrevNext : true,
			            navStartStop : true,
			            navButtons : true,
			            hoverPrevNext : true,
			            hoverBottomNav : false,
			            showBarTimer : false,
			            showCircleTimer : true,
			            thumbnailNavigation : 'disabled',
			            tnWidth : 100,
			            tnHeight : 60,
			            tnContainerWidth : '60%',
			            tnActiveOpacity : 35,
			            tnInactiveOpacity : 100,
			            imgPreload : true,
			    		yourLogo : false,
			            yourLogoStyle : 'left: 10px; top: 10px;',
			            yourLogoLink : false,
			            yourLogoTarget : '_self',
			            cbInit : function(element) { },
			            cbStart : function(data) { },
			            cbStop : function(data) { },
			            cbPause : function(data) { },
			            cbAnimStart : function(data) { },
			            cbAnimStop : function(data) { },
			            cbPrev : function(data) { },
			            cbNext : function(data) { }
					});
			});
	</script>


		@stop