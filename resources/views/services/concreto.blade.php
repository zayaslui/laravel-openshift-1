@extends('layouts.principal')
@section('content')

		<div class="content">
			<div class="wrap">
				<div class="about-us">
					 <div class="about-header">
					    <h3>Servicios</h3>
					 </div>
					<div class="about-info">
						<a href="/">EDB CONSTRUCCIONES - SERVICIOS - CONCRETO ASFÁLTICO</a>
					</div>

							
				</div>
					{{-- start galeria --}}
						<div class="galeria1">
							<ul>
									<li class="box">
										<a href="/images/servicios/hormigon/1.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/mineria/1.jpg" alt="image">
										</a>									
									</li>							
									<li class="box">
										<a href="/images/servicios/mineria/2.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/mineria/2.jpg" alt="image">
										</a>									
									</li>
									<li class="box">
										<a href="/images/servicios/mineria/3.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/mineria/3.jpg" alt="image">
										</a>									
									</li>
									<li class="box">
										<a href="/images/servicios/mineria/4.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/mineria/4.jpg" alt="image">
										</a>									
									</li>																
							</ul>
						</div>
						{{-- end galeria --}}					
			</div>
			{{-- PARRAFO --}}
				<div class="testmonials">
					<div class="wrap">
						<div class="testmonial-grid">
							<h3>CONCRETO ASFÁLTICO</h3>
							<p>&#34; La empresa cuenta con varias plantas elaboradoras de concreto asfáltico cuyas capacidades oscilan entre las 80 y 100 toneladas/h. Las mismas se encuentran distribuidas en las distintas obras que encara la empresa actualmente (plantas móviles). En el área de Asunción y gran Asunción, la empresa cuenta con una planta de capacidad de 120 toneladas/h, dicha planta se encuentra en la ciudad de Capiatá.
&#34;</p>
						</div>
					</div>
				</div>
				{{-- END PARRAFO			 --}}
			<div class="clear"> </div>
		</div>
		<script>
				( function( $ ) {
					$( '.swipebox' ).swipebox();
				} )( jQuery );
		</script>
@stop