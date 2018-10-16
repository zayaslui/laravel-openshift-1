@extends('layouts.principal')
@section('content')
@section('tittle','Obras')
<!---start-content---->
<style>
	.dibujo{
		top:200px;
	}
</style>
<div class="content">	
	
		<div class="testmonials">
			<div class="wrap">
				<div class="tituloh3">
					<h3 id="titulo_obra_"></h3>
				</div>
			</div>
		</div>			
			<div class="clear"> </div>
			
		{{ csrf_field() }}
			<div id="slider-wrapper">
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
<div id="script_start_layerslider">
  
</div>

{{-- script listar obras --}}
		<script>
			$(document).ready(function(){
				var id = parseInt(location.href.split("/")[4]);
				$.ajax({
			                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				                url: '/singleObras/'+id,
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
				                	console.log(JSON.parse(response));
				                	
				                	var layer = JSON.parse(response).response.layerslider.arr.html;
				                	// var info = JSON.parse(response).response.obras_det[0].contenido_obra;
				                	// var titulo = JSON.parse(response).response.obras_det[0].titulo_obra;
				                	var info = JSON.parse(response).response.obras.contenido_obra;
				                	var titulo = JSON.parse(response).response.obras.titulo_obra;				                	
				                	var script = JSON.parse(response).response.layerslider.arr.script;
				                	
				                	$("#slider-wrapper").append(layer);
							        $("#script_start_layerslider").append(script);


				                	this.createTitulo(titulo);
				                    // this.createSlider(layer);
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