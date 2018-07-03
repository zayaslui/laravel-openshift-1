<div class="specials">
	<div class="wrap">
	  <div class="specials-heading">
		<h3>Utimas Obras</h3>
	</div>
	<div class="specials-grids" id="little_obras">
		{{-- demo de obras --}}
	</div>
</div>
</div>	

<script>
	$(document).ready(function(){

		$.ajax({
		            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	                url: 'little',
	                datatType : 'json',
	                type: 'post',
	                data: {'id' : 12,'name': 'john'},
	                cache: false,
	                contentType: false,
	                processData: false,
	                success:function(response) {
	
			                    var data = JSON.parse(response);
								var tabla ="";
								$.each(data, function(idx, obj){ 
									if(obj.imagen!='90'){
											tabla+= "<div class='special-grid'>";
											tabla+= "<img src='images/obras/"+obj.imagen+"_1.jpg' title='image-name' />";
											tabla+= "<a href='#'>"+obj.titulo_obra+"</a>";
											tabla+= obj.introduccion;
											tabla+= "<div class='special-grid-background'></div>";
											tabla+= "<a href='#' class='ver-obras'>Ver obra</a>";
											tabla+= "</div>";
				                     }
							});

							$('#little_obras').append(tabla);
							tabla="	<div class='special-grid spe-grid spe-more'><div class='more_obras more_obras-icon'><a href='plans'></a></div></div><div class='clear'> </div>";
							$('#little_obras').append(tabla);
	                },
	                error:function(jqXHR, textStatus, errorThrown ){
	                	console.log(textStatus);
	                }
		});
	});
</script>