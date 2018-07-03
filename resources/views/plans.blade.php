@extends('layouts.principal')
@section('content')
		<!---End-wrap---->
		<div class="clear"> </div>
		<!---start-content---->
		<div class="content">
			<div class="wrap">
				<div class="about-us">
					 <div class="about-header">
					    <h3>Nuestras Obras</h3>
					 </div>
					<div class="about-info">
						<a href="/">EDB CONSTRUCCIONES</a>
						<p>Introduccion sobre las obras en general</p>
					</div>
				</div>
			</div>

			<div class="specials">
				<div class="wrap" id="specials-grids">
					<div class="specials-heading">
						<h3>Todas las obras</h3>
					</div>
			    </div>
			</div>	
			<div class="clear"> </div>
		</div>
		<script>
			$(document).ready(function(){
				$.ajax({
			                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				                url: 'listarObras',
				                datatType : 'json',
				                type: 'POST',
				                data: {'id' : 12,'name': 'john'},
				                cache: false,
				                contentType: false,
				                processData: false,
				                success:function(response) {
				                    //crear listado de obras

				                    var data = JSON.parse(response);
									var tabla ="";
									var i=0;
									//abrimos specials-grids
									// tabla+="<div class='specials-grids'>";
									$.each(data, function(idx, obj){ 
										i=idx;
					                     //specials-grids
					                     if(i%3==0){
					                     	// cerramos specials-grids y abrimos specials-grids
					                     	tabla+="</div><div class='specials-grids'>"
					                     }
										var last = ((i+1)%3==0)?'spe-grid':'';
										// console.log(i+1%3);

										if(obj.imagen!='90'){
												tabla+= "<div class='special-grid "+last+"'>";
												tabla+= "<img src='images/obras/"+obj.imagen+"_1.jpg' title='image-name' />";
												tabla+= "<a href='#'>"+obj.titulo_obra+"</a>";
												tabla+= obj.introduccion;
												tabla+= "<div class='special-grid-background'></div>";
												tabla+= "<a href='#' class='ver-obras'>Ver obra</a>";
												tabla+= "</div>";
					                     }
								});
								if(i%3==0){
					            // cerramos specials-grids
					             	tabla+="</div>";
					            }
								$('#specials-grids').append(tabla);
								tabla="<div class='clear'></div>";
								$('#specials-grids').append(tabla);

				                },
				                error:function(jqXHR, textStatus, errorThrown ){
									if (jqXHR.status === 0) {

									    console.log('Not connect: Verify Network.');

									  } else if (jqXHR.status == 404) {

									    console.log('Requested page not found [404]');

									  } else if (jqXHR.status == 500) {

									    console.log('Internal Server Error [500].');

									  } else if (textStatus === 'parsererror') {

									    console.log('Requested JSON parse failed.');

									  } else if (textStatus === 'timeout') {

									    console.log('Time out error.');

									  } else if (textStatus === 'abort') {

									    console.log('Ajax request aborted.');

									  } else {

									    console.log('Uncaught Error: ' + jqXHR.responseText);

									  }
				                }
				});
			})
		</script>
@stop