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
										<a href="/images/servicios/prefabricado/1.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/prefabricado/1.jpg" alt="image">
										</a>									
									</li>							
									<li class="box">
										<a href="/images/servicios/prefabricado/2.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/prefabricado/2.jpg" alt="image">
										</a>									
									</li>
									<li class="box">
										<a href="/images/servicios/prefabricado/3.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/prefabricado/3.jpg" alt="image">
										</a>									
									</li>
									<li class="box">
										<a href="/images/servicios/prefabricado/4.jpg" class="swipebox im" title="My Caption">
											<img src="/images/servicios/prefabricado/4.jpg" alt="image">
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
							<p>&#34; La empresa es pionera en estructura de gran porte para alcantarillados, celulares de hormigón armado destacando la capacidad de recursos humanos y maquinarias para la elaboración de las mismas.&#34;</p>
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