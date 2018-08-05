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
				<div id="news-block"></div>
				{{-- news --}}

			</div>	
			{{-- obras --}}
			


			
			<div class="clear"> </div>
		</div>
		@include('js.listarAllPrensaAjax')

@stop