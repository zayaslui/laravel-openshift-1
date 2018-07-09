@extends('layouts.principal')
@section('content')
@section('tittle','Obras')
<!---start-content---->
<div class="content">	
	
		<div class="testmonials">
			<div class="wrap">
				<div class="testmonial-grid">
					<h3 id="titulo_obra_"></h3>
				</div>
			</div>
		</div>			
			<div class="clear"> </div>
			
		{{ csrf_field() }}
		<div id="layer_">
				
		</div>


			<div class="testmonials">
				<div class="wrap">
					<div class="testmonial-grid">
						<h3>Información :</h3>
						<p id='info_'></p>
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
				                	var layer = JSON.parse(response)[0].layer;
				                	var info = JSON.parse(response)[0].contenido_obra;
				                	var titulo = JSON.parse(response)[0].titulo_obra;
				                	
				                	this.createTitulo(titulo);
				                    this.createSlider(layer);
				                    this.createInformacion(info);
				                },
				                createTitulo:function(titulo){
				                	$("#titulo_obra_").append(titulo);
				                },
				                createInformacion:function(info){
				                	$('#info_').append(info);
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