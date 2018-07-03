@extends('layouts.principal')
@section('content')

		<div class="content">
			<div class="wrap">
				<div class="about-us">
					 <div class="about-header">
					    <h3>Servicios</h3>
					 </div>
					<div class="about-info">
						<a href="/">EDB CONSTRUCCIONES - SERVICIOS - PLANTA TRITURADORA Y CANTERAS</a>
					</div>

							
				</div>
					{{-- start galeria --}}
						<div class="galeria1">
							<ul>
									<li class="box">
										<a href="/images/servicios/mineria/1.jpg" class="swipebox im" title="My Caption">
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
							<h3>HORMIGON ELABORADO</h3>
							<p>&#34; La empresa cuenta con diversas canteras para la explotación de piedras y trituración de las mismas. La cantera principal de la empresa es la que se encuentra en la ciudad de Emboscada y a la vez dispone de una planta trituradora de capacidad de 60 tn/h, así también, la empresa cuenta con plantas trituradoras móviles, las cuales se encuentran en las obras principales que demanda la misma.&#34;</p>
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