@extends('layouts.principal')
@section('content')
@section('tittle','Trayectoria')



<div id="slider-wrapper"></div>
<div id="script_start_layerslider"></div>

{{-- script listar layerslider --}}
		<script>
			$(document).ready(function(){
				$.ajax({
			                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				                url: 'layersliderTrayectoria',
				                type: 'post',
				                success:function(response) {
				                	console.log(JSON.parse(response).response.arr);
				                	var layer = JSON.parse(response).response.arr.html;
				                	var script = JSON.parse(response).response.arr.script;
				                	
				                	$("#slider-wrapper").append(layer);
							        $("#script_start_layerslider").append(script);

				                },
						        error: function(data) {
						            var errors = data.responseJSON;
						            console.log(errors);
						        }
				});
			})
		</script>
{{-- script listar layerslider --}}

@stop