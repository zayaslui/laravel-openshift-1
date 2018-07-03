<!DOCTYPE HTML>
<html>
<head>
<title>EDB</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<script src="{{asset('js/jquery.min.js')}}"></script>
<meta id="token" name="csrf-token" content="{{ csrf_token() }}">

	<!-- LayerSlider stylesheet -->

<link rel="stylesheet" href=" {{asset('css/layerslider.css')}}"  type="text/css">
<script src="{{asset('js/layerslider.transitions.js')}}"></script>
<script src="{{asset('js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<script src="{{asset('js/greensock.js')}}" type="text/javascript"></script>

<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"  media="all" />	
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'BC1lbLnA4G';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

 </head>
    <body>
		<!---start-header---->
			<div class="header" id="menu">
					<div class='wrap'>
							<div class='logo'>
								<a href='/'><img src='images/logo.png' title='logo' /></a>
							</div>
							<div class='top-nav'>
								<ul>
									<li class="{{ Request::path() == '/' ? 'active' : '' }} social-links principal-icon"><a href="/">Principal</a></li>
									<li class="{{ Request::path() == 'about' ? 'active' : '' }} social-links nosotros-icon"><a href="about">Acerca de</a></li>
									<li class="{{ Request::path() == 'services' ? 'active' : '' }} social-links servicios-icon"><a href="services">Servicios</a></li>
									<li class="{{ Request::path() == 'plans' ? 'active' : '' }} social-links planes-icon"><a href="plans">Planes</a></li>
									<li class="{{ Request::path() == 'contact' ? 'active' : '' }}  social-links contactos-icon"><a href="contact">Contactos</a></li>
								</ul>
							</div>
							<div class='clear'> </div>
					</div>				
			</div>
			<!---End-header---->    	
		<!---start-content---->
		@yield('content')
		<!---End-content---->
			 <div class="social-bar">
			    <a href="https://www.facebook.com/DevCode.la" class="icon icon-facebook" target="_blank"></a>
			    <a href="https://twitter.com/DevCodela" class="icon icon-twitter" target="_blank"></a>
			    <a href="https://www.youtube.com/c/devcodela" class="icon icon-youtube" target="_blank"></a>
			    <a href="https://www.instagram.com/devcodela/" class="icon icon-instagram" target="_blank"></a>
			  </div>
		<div class="clear"> </div>
		<!---start-footer---->
		<div  id="footer">
					<div class='footer'>
						<div class='wrap'>
						<div class='footer-grids'>
							<div class='footer-grid'>
									<div class='logo-footer'>
										<a href=''><img src='images/logo.png' alt=''></a>
									</div>
							</div>
							<div class='footer-grid'>
								<h3>Atajos</h3>
								<ul>
									<li class='footer-icons footer-menu-icons principal-icon-footer'><a href='index.html'></a></li>
									<li class='footer-icons footer-menu-icons servicios-icon-footer'><a href='#'></a></li>
									<li class='footer-icons footer-menu-icons nosotros-icon-footer'><a href='#'></a></li>
									<li class='footer-icons footer-menu-icons planes-icon-footer'><a href='#'></a></li>
								</ul>
							</div>
							<div class='footer-grid'>
								<h3>Redes Sociales</h3>
								<ul>
									<li class='footer-icons facebook-icon'><a href='#'></a></li>
									<li class='footer-icons instagram-icon'><a href='#'></a></li>
									<li class='footer-icons twiter-icon'><a href='#'></a></li>
									<li class='footer-icons snapchat-icon'><a href='#'></a></li>
								</ul>
							</div>
							<div class='footer-grid footer-lastgrid '>
								<h3>Contáctanos</h3>
								<ul>
									<li class='footer-icons telefono-icon-footer'><p></p></li>
									<li class='footer-icons fax-icon-footer'><p></p></li>
									<li class='footer-icons celular-icon-footer'><p></p></li>
									<li class='footer-icons direccion-icon-footer'><p></p></li>
								</ul>
							</div>
							<div class='clear'> </div>
						</div>
						</div>
					</div>
					<div class='clear'> </div>
					<div class='copy-right'>
						<p>© EDB CONSTRUCIONES. All Rights Reserved | Design by <a href='#'>El soldado desconocido</a></p>
					</div>
					
	</body>
</html>

