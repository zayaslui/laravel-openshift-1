@extends('layouts.principal')
@section('content')
@section('tittle','Obras')
		<!---End-wrap---->
		<div class="clear"> </div>
		<!---start-content---->
		<div class="content">

			<div class="wrap">
				<div class="about-us">
					 <div class="about-header">
					    <h3>Prensa</h3>
					 </div>
					<div class="about-info">
						<a href="/">EDB CONSTRUCCIONES</a>
						<p>Introduccion sobre las obras en general</p>
					</div>
				</div>
			</div>

			{{-- obras --}}
			<div class="specials">
				<div class="wrap" id="specials-grids">
					<div class="specials-heading">
						<h3>Todas las Noticias</h3>
					</div>
			    </div>

				{{-- news --}}
				<div id="news-block">
					
 									<!-- <div class="news-block">	
										<div class="news-block-bottom">
											<div class="buzz-news">
												<div class="news-1">
													<div class="news-text1">
														<h2>Novedades</h2>
													</div>
													<div class="reaches">
														<h6>Archivo</h6>
													</div>
												   <div class="clear"> </div>
												</div>
												<h3><a href="#">Tramos</a></h3>
												<br>
												<p>Culminan trabajos del 1er. tramo de la ruta Santa Rosa- Capitán Bado</p>
												<br>
												<br>
												<div class="news-btn-3"><a class="popup-with-zoom-anim" href="#small-dialog">More</a></div>
											</div>
											<div class="buzz-img">
												<a href="#">
													<img src="images/prensas/71_1.jpg" class="img-responsive" alt="">
												</a>
											</div>
										  <div class="clear"> </div>
										</div>
									</div> -->

				</div>

				{{-- news --}}

			</div>	
			{{-- obras --}}
			


			
			<div class="clear"> </div>
		</div>
		@include('js.listarAllPrensaAjax')

@stop