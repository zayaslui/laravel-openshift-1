@extends('layouts.principal')
@section('content')
@section('tittle','Emprende')
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			<!---start-contact---->
			<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<!-- <h3>Encuentranos</h3> -->
			    	 		<div class="talento">
								<img src="/images/talento.jpg" alt="">
					   		</div>
      				</div>

				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3 style="text-align: center;">Formulario de CV</h3>
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
			<!---End-contact---->
			<div class="clear"> </div>
		</div>

		@stop