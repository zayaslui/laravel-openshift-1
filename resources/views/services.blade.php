@extends('layouts.principal')
@section('content')
@section('tittle','Servicios')

		<div class="content">
				<!---start-services---->
				<div class="services">
					<div class="wrap">
					  <div class="services-header">
						<h3>Servicios</h3>
					 </div>
					   <div class="section group group">
							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="images/one.png">
								</div>
							    <div class="text list_2_of_1">
 									<h3><span>Hormigon</span> armado</h3>
									<!-- <h4>Plantas Hormigoneras.</h4> -->
									<!-- <p>La empresa cuenta con varias plantas hormigoneras con capacidades de producción que oscilan.... </p> -->
										 <!-- <a class="button" href="#">Learn More</a>  -->
			                      <div class="blog-card spring-fever img1">
			                          <div class="title-content">
			                            <!-- <h3 class="h3_">HORMIGON ELABORADO</h3> -->
			                            <hr />
			                            <div class="intro">Plantas Hormigoneras</div>
			                          </div><!-- /.title-content -->
			                          <div class="card-info">
			                            La empresa cuenta con varias plantas hormigoneras con capacidades de producción que oscilan... 
			                          </div><!-- /.card-info -->
			                          <!-- overlays -->
			                          <div class="gradient-overlay"></div>
			                          <div class="color-overlay"></div>
			                          <a href="services/hormigon" class="ver">Ver mas</a>
			                    </div><!-- /.blog-card -->

							   </div>
						   </div>

							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="images/dos.png">
								</div>
								<div class="text list_2_of_1">
									  <h3><span>Planta trituradora </span>y canteras</h3>
			                      <div class="blog-card spring-fever img2">
			                          <div class="title-content">
			                            <!-- <h3 class="h3_">HORMIGON ELABORADO</h3> -->
			                            <hr />
			                            <div class="intro">Plantas Hormigoneras</div>
			                          </div><!-- /.title-content -->
			                          <div class="card-info">
			                            La empresa cuenta con diversas canteras para la explotación de piedras y trituración de las mismas.
			                          </div><!-- /.card-info -->
			                          <!-- overlays -->
			                          <div class="gradient-overlay"></div>
			                          <div class="color-overlay"></div>
			                          <a href="services/mineria" class="ver">Ver mas</a>
			                    </div><!-- /.blog-card -->

								</div>
							</div>

						</div>
						<div class="section group">
							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="images/tres.png">
								</div>
							    <div class="text list_2_of_1 ">
									<h3><span>Pre</span>fabricacion</h3>
					                      <div class="blog-card spring-fever img3">
					                          <div class="title-content">
					                            <!-- <h3 class="h3_">HORMIGON ELABORADO</h3> -->
					                            <hr />
					                            <div class="intro">Plantas Hormigoneras</div>
					                          </div><!-- /.title-content -->
					                          <div class="card-info">
					                            La empresa es pionera en estructura de gran porte para alcantarillados, celulares de hormigón armado ...
					                          </div><!-- /.card-info -->
					                          <!-- overlays -->
					                          <div class="gradient-overlay"></div>
					                          <div class="color-overlay"></div>
					                          <a href="services/mineria" class="ver">Ver mas</a>
					                    </div><!-- /.blog-card -->

							   </div>
						   </div>			
							<div class="listview_1_of_2 images_1_of_2">
								<div class="listimg listimg_2_of_1">
									  <img src="images/cuatro.png">
								</div>
								<div class="text list_2_of_1">
									  <h3><span>Concreto </span>Asfáltico</h3>
				                      <div class="blog-card spring-fever img1">
			                          <div class="title-content">
			                            <!-- <h3 class="h3_">HORMIGON ELABORADO</h3> -->
			                            <hr />
			                            <div class="intro">Concreto Asfaltico</div>
			                          </div><!-- /.title-content -->
			                          <div class="card-info">
			                            La empresa es pionera en estructura de gran porte para alcantarillados, celulares de hormigón ...
			                          </div><!-- /.card-info -->
			                          <!-- overlays -->
			                          <div class="gradient-overlay"></div>
			                          <div class="color-overlay"></div>
			                          <a href="services/concreto" class="ver">Ver mas</a>
			                    </div><!-- /.blog-card -->

								</div>
							</div>
						</div>
				  </div>
				</div>
				<!---End-services---->
			@include('little_obras')

		</div>
		<!---End-content---->

		</div>
@stop