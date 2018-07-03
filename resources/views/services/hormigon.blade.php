@extends('layouts.principal')
@section('content')

		<div class="content">
			<div class="wrap">
				<div class="about-us">
					 <div class="about-header">
					    <h3>Servicios</h3>
					 </div>
					<div class="about-info">
						<a href="/">EDB CONSTRUCCIONES - SERVICIOS - HORMIGON</a>
					</div>

							
				</div>
					{{-- start galeria --}}
						<div class="galeria1">
							<ul>
									<li class="box">
										<a href="/images/servicios/hormigon/1.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/hormigon/1.jpg" alt="image">
										</a>									
									</li>							
									<li class="box">
										<a href="/images/servicios/hormigon/2.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/hormigon/2.jpg" alt="image">
										</a>									
									</li>
									<li class="box">
										<a href="/images/servicios/hormigon/3.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/hormigon/3.jpg" alt="image">
										</a>									
									</li>
									<li class="box">
										<a href="/images/servicios/hormigon/4.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/hormigon/4.jpg" alt="image">
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
							<h3>HORMIGON ELABORADO</h3>
							<p>&#34; La empresa cuenta con varias plantas hormigoneras con capacidades de producción que oscilan entre los 50 y 80 m³/h, camiones distribuidores de concreto, terminadoras de hormigón estructural y bombas de hormigón. La empresa tiene la capacidad de autosustentarse y proveerse de concreto en todas sus obras al igual que estructuras prefabricadas.&#34;</p>
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