@extends('layouts.principal')
@section('content')
@section('tittle','Emprende')
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			<!---start-contact---->
			<div class="leyenda">
				<h5>
				“Talento es un concepto relacionado con la inteligencia o capacidad para entender y con la aptitud o capacidad para desarrollar una actividad u ocupación.”
				</h5>
			</div>
			<div class="wrap_intro_talento">
				<div class="group_talento_1 intro_talento">
					<div class="imagen_talento">
							{{-- <img src="/images/talento.jpg" alt=""> --}}
							<img src="http://www.abalia.com/wp-content/uploads/2016/07/Abalia_Talento_3.jpg" alt="">
					</div>
				</div>	
				<div class="group_talento_2 intro_talento">
					<p class="parrafo_talento">
						EDBcontrucciones es Empresa cuyo motor son las + de 250 personas que trabajan en ella cada día, poniendo lo mejor de si mismas.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis deserunt sequi voluptates, tenetur modi facilis explicabo repudiandae cupiditate officia id praesentium laboriosam adipisci atque culpa quibusdam minus porro quo. Praesentium quia vitae porro consectetur nobis tempora sed laborum impedit. Ullam doloribus id cupiditate est ad nesciunt blanditiis nam deserunt rem earum iusto harum unde voluptatibus suscipit placeat qui, et accusamus nobis vero. Possimus quod quos tempore numquam illum! Quidem optio, est quas porro dolor, aliquid architecto modi voluptatibus explicabo nobis, repudiandae aut aperiam necessitatibus incidunt? Asperiores ullam nesciunt quod incidunt, quo quia, deserunt rem? Dolorem cupiditate, sapiente iure eveniet vel.
					</p>
				</div>
			</div>
			<div class="contenedor_talento">
				<div class="section group">			
					<div class="col span_1_of_3">
						<div class="contact_info">
				    	 	<!-- <h3>Encuentranos</h3> -->
							<h3 style="text-align: left;">Contacta</h3>
						  	<div class="separator  small center  " style="background-color: #FF6A13;height: 2px;"></div>
						  	<p class="parrafo_talento">
						  		EDBcontrucciones busca a los mejores: los que con sus excelentes conocimientos y su actitud positiva marcan la diferencia porque ayudan a construir y crecer.
								Sabemos que el motor de nuestra Organización eres tú. Y por eso queremos que te incorpores en nuestro proceso de selección. ¡Te esperamos!
						  	</p>
	      				</div>

					</div>				
					<div class="col span_2_of_3">
					  <div class="contact-form">
					  	<h3 style="text-align: center;">Formulario de Currículum Vitae</h3>
					  	<div class="separator  small center  " style="background-color: #FF6A13;height: 2px;"></div>
					  	<p>			  		
					  	</p>
						    <form>
						    	<div>
							    	<span><label>Nombre (requerido)</label></span>
							    	<span><input name="userName" type="text" class="textbox"></span>
							    </div>
							    <div>
							    	<span><label>Correo electrónico (requerido)</label></span>
							    	<span><input name="userEmail" type="text" class="textbox"></span>
							    </div>
							    <div>
							    	<span><label>Asunto</label></span>
							    	<span><input name="userEmail" type="text" class="textbox"></span>
							    </div>						    
							    <div>
							    	<span><label>Mensaje</label></span>
							    	<span><textarea name="userMsg"> </textarea></span>
							    </div>

								<div class="company_address">
									<p>Adjuntar CV - (Solo se admiten archivos PDF - tamaño máximo 1mb)</p>	
								</div>
								<div><input type="file"></div>
								<br>
							   <div>
							   		<span><input type="submit" class="mybutton" value="Enviar"></span>
							  </div>

						    </form>
					    </div>
	  				</div>				
				  </div>

				</div>

			  </div>
			<!---End-contact---->
			<div class="clear"> </div>
		</div>

		@stop