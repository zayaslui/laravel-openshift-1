
{{-- script listar obras --}}
		<script>
			$(document).ready(function(){
				var id = parseInt(location.href.split("/")[4]);

				$.ajax({
			                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				                url: 'listarPrensa',
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

											tabla +='<div class="news-block">	';
											tabla +='		<div class="news-block-bottom">';	
											tabla +='			<div class="buzz-news">';		
											tabla +='				<div class="news-1">';			
											tabla +='				<div class="news-text1">';
											tabla +='					<h2>Novedades</h2>';
											tabla +='				</div>';
											tabla +='				<div class="reaches">';
											tabla +='					<h6>Archivo</h6>';
											tabla +='				</div>';
											tabla +='			   <div class="clear"> </div>';
											tabla +='			</div>';
											tabla +='			<h3><a href="'+obj.link+' target=blank_">Titulo</a></h3>';
											tabla +='			<br>';
											tabla +='			<p>'+obj.descripcion+'</p>';
											// tabla +='			<br>';
											// tabla +='			<br>';
											tabla +='			<div class="news-btn-3"><a class="popup-with-zoom-anim" href="'+obj.link+'" target="blank_">Ver Más</a></div>';
											tabla +='		</div>';
											tabla +='		<div class="buzz-img">';
											tabla +='			<a href="'+obj.link+'" target="blank_">';
											tabla +='				<img src="images/prensas/'+obj.imagen+'.jpg" class="img-responsive" alt="">';
											tabla +='			</a>';
											tabla +='		</div>';
											tabla +='	  <div class="clear"> </div>';
											tabla +='	</div>';
											tabla +='</div>';


									});
									/*agregar*/
									$('#news-block').append(tabla);									
				                },
						        error: function(data) {
						            var errors = data.responseJSON;
						            console.log(errors);
						        }
				});
			})
		</script>