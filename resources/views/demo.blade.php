@extends('layouts.principal')
@section('content')
{{-- cargar el html de layerslider --}}


<!---start-content---->
<div class="content">	
		<!-- layerslayer -->
	<div id="slider-wrapper">
	</div>
</div>

		<script>
			$(document).ready(function(){
				$.ajax({
					type:'POST',
					url:'layerdata',
					// data:'',
					sucess:function(data){
						/*realizar el append*/
						// $("#slider-wrapper").append(data);
						console.log(data);
					},

				})
			});


	</script>


@stop