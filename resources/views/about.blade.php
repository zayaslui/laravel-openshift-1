@extends('layouts.principal')
@section('content')
@section('tittle','Nosotros')
		<!---start-content---->
		<div class="content">
			<div class="wrap">
				<div class="about-us">
					 <div class="about-header">
					    <h3>NOSOTROS</h3>
					 </div>
					<div class="about-info">
						<a href="index.html">EDB CONSTRUCCIONES</a>
						<p>EDB Construcciones es una empresa Paraguaya de Ingeniería, especializada en la construcción vial de rutas, 
                                puentes, viaductos, carreteras y todos los trabajos asociados redes de desagüe cloacal, redes de desagüe pluvial, 
                                tendido de redes eléctricas y obras aeroportuarias y arquitectónicas. <br>
                                Los procesos más importantes para la producción de insumos y materiales son realizados por nuestra empresa en 
                                instalaciones y plantas que son propiedad del grupo empresarial, en los que se aplica procedimientos de control 
                                y gestión de calidad, bajo la norma ISO 9001.<br>
                                Contamos con maquinarias, equipos e infraestructura propios, para ejecutar los servicios específicos en los que estamos especializados.
                                Nuestras obras construidas en todo el territorio nacional, avalan nuestra trayectoria de más de 40 años en el mercado. <br>
                                La solidez y durabilidad de nuestro trabajo, realizado por profesionales, técnicos y obreros paraguayos, con ato nivel 
                                técnico de formación, conocimientos y experiencia son los factores determinantes que reflejan la identidad de la empresa.
                            </p>
					</div>
				</div>
			</div>
			
{{-- 			    <div class="specials">
			    	<div class="wrap">
					  <div class="specials-heading">
						<h3>Utimas Obras</h3>
					</div>
					<div class="specials-grids">
						<div class="special-grid">
							<img src="images/grids-img1.jpg" title="image-name" />
							<a href="#">Latest Plans</a>
							<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
						</div>
						<div class="special-grid">
							<img src="images/grids-img2.jpg" title="image-name" />
							<a href="#">Pre Plans</a>
							<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
						</div>
						<div class="special-grid spe-grid">
							<img src="images/grids-img3.jpg" title="image-name" />
							<a href="#">Free Plans</a>
							<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
						</div>
						<div class="clear"> </div>
					</div>
			  </div>
			</div> --}}
			@include('little_obras')
			@include('publicidad')
		</div>

@stop