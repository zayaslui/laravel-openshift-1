@extends('layouts.principal')
@section('content')
@section('tittle','Contactos')
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			<!---start-contact---->
			<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Encuentranos</h3>
			    	 		<div class="map">
								<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d901.8331362176517!2d-57.6227218!3d-25.293029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da7e0ecdb44f7%3A0xc04a88c55614b952!2sEDB+Construcciones!5e0!3m2!1ses-419!2spy!4v1530460499969" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>					   			
					   			<br>
					   			<small>
					   				<div class="map map-icon">
					   				<a class="" target="_blank" href="https://goo.gl/maps/aVrxbswQxGo" style="color:#666;text-align:left;font-size:0.85em">Ver mapa ampliado</a>
					   					
					   				</div>
					   			</small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Información :</h3>
						<p>Luis Alberto de Herrera 1424 entre Pai Perez y Adva Perú</p>
				   		<p>Tel : (021) 214-368</p>
				   		<p>Celular : (0981) 000 000</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span><a href="mailto:info@example.com">mail@example.com</a></span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3 style="text-align: center;">Formulario de Contactos</h3>
				  	<div class="separator  small center  " style="background-color: #FF6A13;height: 2px;"></div>
						<div class="company_address">
					  		<p>Si tienes cualquier duda, pregunta o simplemente estas interesado en que trabajemos juntos no dudes en ponerte en contacto con nosotros. Lo puedes hacer en nuestras oficinas, por télefono o rellenando el siguiente formulario.</p>				
						</div>
				  	<div class="separator  small center  " style="background-color: #FF6A13;height: 2px;"></div>
				  	<p>
				  		<span style="color: #ff6a13;text-align: center;">
				  			<strong>Trabaja con nosotros</strong>
				  		</span>
						<div class="company_address">
					  		<p>Si quieres trabajar en EDBCONSTRUCCIONES envíanos tus datos y CV a través   <strong><a  class="link_talento" href="/emprende_con_nosotros">este formulario</a></strong> Será estupendo poder conocernos y que formes parte de nuestra Empresa.</p>				
						</div>				  		
				  	</p>
					    <form>
					    	<div>
						    	<span><label>Nombre</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Celular</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Mensaje</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
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