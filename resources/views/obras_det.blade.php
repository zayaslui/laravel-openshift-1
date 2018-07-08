@extends('layouts.principal')
@section('content')
@section('tittle','Obras')
<!---start-content---->
<div class="content">	
	
		{{ csrf_field() }}
		<div id="layer_">
				
		</div>


			<div class="testmonials">
				<div class="wrap">
					<div class="testmonial-grid">
						<h3>Descripcion :</h3>
						<p>&#34; MINISTERIO DE OBRAS PÚBLICAS Y COMUNICACIONES. 
											Rehabilitación de la Circunvalación de Asunción, Tramo 4 Mojones – Defensores del Chaco – Avda. Madame Lynch – Empalme Ruta N°9. 
											Volumen de Obras:

											-Viales:
											Una supercarretera de 12, 5 Km de longitud, de 4 vías.

											-Tres Viaductos:
											1-En Cuatro Mojones:  de 125 m  de longitud x 16 m de ancho, 1.600  m3 de H°A°.
											2-En Avda. E. Ayala:  de 196 m de longitud x 16 m de ancho, 2.080 m3 de H°A°.
											3-En Avda. Mcal. López:
											lado derecho de 198 m de longitud x 8 m de ancho
											lado izquierdo de 170 m de longitud x 8 m de ancho, 2.540 m3 de H°A°.

											-Desagües: Se ejecutó un canal de cielo abierto de 6 Km de longitud con una 
											excavación de 350.000 m3, con barandas metálicas protectoras y guarda raíles.
											-Alcantarillas: Se construyeron 25.000 m de alcantarillas celulares de 2,5x2,5 m y 
											6.000 m de tubulares de diferentes diámetro.&#34;</p>
					</div>
				</div>
			</div>			
			<div class="clear"> </div>
</div>
{{-- end content --}}

{{-- script listar obras --}}
		<script>
			$(document).ready(function(){
				var id = parseInt(location.href.split("/")[4]);
				$.ajax({
			                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				                url: '/singleObras/'+id,
				                datatType : 'json',
				                type: 'post',
				                data: {
									        name: 'John Smith',
									        age: 34
									    },
				                // cache: false,
				                // contentType: false,
				                // processData: false,
				                success:function(response) {
				                	console.log(response);
				                	var dato = JSON.parse(response)[0].layer;
				                    this.createSlider(dato);
				                },
				                createSlider:function(data){
									$('#layer_').append(data);
									this.load_script();
				                },
				                load_script:function(){
										$("#layerslider").layerSlider({
												pauseOnHover: false,
												skinsPath: '/skins/',
									            width : '75%',
									            height : '500px',
									            responsive : true,
									            responsiveUnder : 960,
									            sublayerContainer : 900,
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
				                },
				                //bendito 
						        error: function(data) {
						            var errors = data.responseJSON;
						            console.log(errors);
						        }
				});
			})
		</script>

@stop