
{{-- script listar obras --}}
		<script>
			$(document).ready(function(){
				var id = parseInt(location.href.split("/")[4]);

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
												tabla+= "<a href='/obras_det/"+obj.id+"' class='ver-obras'>Ver obra</a>";
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
						        error: function(data) {
						            var errors = data.responseJSON;
						            console.log(errors);
						        }
				});
			})
		</script>