@extends('layouts.principal')
@section('content')
@section('tittle','Principal')

	<div id="slider-wrapper"></div>

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

		<div id="script_start_layerslider"></div>


{{-- script listar layerslider --}}
		<script>
			$(document).ready(function(){
				var id = parseInt(location.href.split("/")[4]);
				$.ajax({
			                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				                url: 'layersliderPrincipal',
				                // datatType : 'text',
				                type: 'post',
				                data: {
									        name: 'John Smith',
									        age: 34
									    },
				                // cache: false,
				                // contentType: false,
				                // processData: false,
				                success:function(response) {
				                	// console.log(response);
				                	console.log(JSON.parse(response).response.arr);
				                	// return false;	

				                	var layer = JSON.parse(response).response.arr.html;
				                	// var info = JSON.parse(response).response.obras_det[0].contenido_obra;
				                	// var titulo = JSON.parse(response).response.obras_det[0].titulo_obra;
				                	// var info = JSON.parse(response).response.obras_det.contenido_obra;
				                	// var titulo = JSON.parse(response).response.obras_det.titulo_obra;
				                	var script = JSON.parse(response).response.arr.script;
				                	$("#waiting").remove();
				                	$("#slider-wrapper").append(layer);
							        $("#script_start_layerslider").append(script);

				                },
				                //bendito 
						        error: function(data) {
						            var errors = data.responseJSON;
						            console.log(errors);
						        },
						        beforeSend:function(){
						        	$("#slider-wrapper").append('<div id="waiting" style="width: 100%; height: 500px; visibility: visible;"><div class="lds-facebook"><div></div><div></div><div></div></div></div>');
						        	console.log('beforeSend');
						        }
				});
			})
		</script>

		@stop