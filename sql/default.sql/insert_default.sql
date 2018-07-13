
delete from default.prensas;
delete from default.obras_det;
delete from default.obras;

insert into default.obras(id,created_at,updated_at,descripcion,imagen,titulo_obra,contenido_obra,introduccion)values(1,NULL,NULL,"descripcion ",89,"Avda. Madame Lynch","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />
Rehabilitaci&oacute;n de la Circunvalaci&oacute;n de Asunci&oacute;n, Tramo 4 Mojones &ndash; Defensores del Chaco &ndash","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />
Rehabilitaci&oacute;n de la Circunvalaci&oacute;n de Asunci&oacute;n, Tramo 4 Mojones &ndash; Defensores del Chaco &ndash");

insert into default.obras(id,created_at,updated_at,descripcion,imagen,titulo_obra,contenido_obra,introduccion)values(2,NULL,NULL,"descripcion ",81,"Ruta Luque - San Bernardino","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.<br />
Pavimentaci&oacute;n Asf&aacute;ltica del Tramo Luque &ndash; San Bernardino
","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.<br />
Pavimentaci&oacute;n Asf&aacute;ltica del Tramo Luque &ndash; San Bernardino");

insert into default.obras(id,created_at,updated_at,descripcion,imagen,titulo_obra,contenido_obra,introduccion)values(3,NULL,NULL,"descripcion ",82,"Avda. Acceso Este Laguna Grande","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />
Accesos Viales a la Ciudad de Asunci&oacute;n.&nbsp;<br />
&ndash;Paquete 1: Acceso Este a la Ciudad de Asunci&oacute;n<","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />
Accesos Viales a la Ciudad de Asunci&oacute;n.&nbsp;<br />
&ndash;Paquete 1: Acceso Este a la Ciudad de Asunci&oacute;n<");
insert into default.obras(id,created_at,updated_at,descripcion,imagen,titulo_obra,contenido_obra,introduccion)values(4,NULL,NULL,"descripcion ",84,"Franja Costera de Encarnación","<p>ENTIDAD BINACIONAL YACYRET&Aacute;.&nbsp;<br />
Tratamiento &nbsp;Costero de la Ciudad de Encarnaci&oacute;n - Departamento de Itap&uacute;a.&nbsp;<br />
&ndash;Paquete A.</p>

<p>Movi","<p>ENTIDAD BINACIONAL YACYRET&Aacute;.&nbsp;<br />
Tratamiento &nbsp;Costero de la Ciudad de Encarnaci&oacute;n - Departamento de Itap&uacute;a.&nbsp;");

insert into default.obras(id,created_at,updated_at,descripcion,imagen,titulo_obra,contenido_obra,introduccion)values(5,NULL,NULL,"descripcion ",86,"Aeropuerto Internacional Guaraní","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />
Construcci&oacute;n del Aeropuerto Internacional Guaran&iacute;.&nbsp;<br />
Contrato de Obras Civiles y Arquitect&oacut","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />
Construcci&oacute;n del Aeropuerto Internacional Guaran&iacute;.&nbsp;");

insert into default.obras(id,created_at,updated_at,descripcion,imagen,titulo_obra,contenido_obra,introduccion)values(6,NULL,NULL,"descripcion ",88,"Aeropuerto de Encarnación","<p>ENTIDAD BINACIONAL YACYRET&Aacute;.&nbsp;<br />
Construcci&oacute;n del Aeropuerto de Encarnaci&oacute;n - Dpto. de Itap&uacute;a.&nbsp;<br />
-Pista de 2.000 mts de Longitud y 45 mts de","<p>ENTIDAD BINACIONAL YACYRET&Aacute;.&nbsp;<br />
Construcci&oacute;n del Aeropuerto de Encarnaci&oacute;n - Dpto. de Itap&uacute;a.&nbsp;");

insert into default.obras(id,created_at,updated_at,descripcion,imagen,titulo_obra,contenido_obra,introduccion)values(
7,NULL,NULL,"descripcion ",80,"Ruta Santa Rosa - Capitán Bado","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />
Proyecto de Rehabilitaci&oacute;n y Pavimentaci&oacute;n del Tramo Santa Rosa del Aguaray &ndash; Capit&aacute;n Bado.&nb","<p>MINISTERIO DE OBRAS P&Uacute;BLICAS Y COMUNICACIONES.&nbsp;<br />
Proyecto de Rehabilitaci&oacute;n y Pavimentaci&oacute;n del Tramo Santa Rosa del Aguaray &ndash;");

insert into default.obras(id,created_at,updated_at,descripcion,imagen,titulo_obra,contenido_obra,introduccion)values(8,NULL,NULL,"descripcion ",90,"Trayectoria","<p>Para ver nuestra trayectoria, haga clic aqu&iacute;:&nbsp;<a href=""https://goo.gl/l1e22D"">https://goo.gl/l1e22D</a></p>
","<p>Para ver nuestra trayectoria, haga clic aqu&iacute;:&nbsp;<a href=""https://goo.gl/l1e22D"">https://goo.gl/l1e22D</a></p>
");

delete from default.obras_det;
insert into default.obras_det(id,obras_id,titulo_obra,contenido_obra,imagen,created_at,updated_at,layer)values(1,1,'Avda. Madame Lynch','MINISTERIO DE OBRAS PÚBLICAS Y COMUNICACIONES. 
Rehabilitación de la Circunvalación de Asunción, Tramo 4 Mojones – Defensores del Chaco – Avda. Madame Lynch – Empalme Ruta N°9. 
Volumen de Obras:

-Viales:
Una supercarretera de 12, 5 Km de longitud, de 4 vías.

-Tres Viaductos:
1-En Cuatro Mojones:  de 125 m  de longitud x 16 m de ancho, 1.600  m3 de H°A°.
2-En Avda. E. Ayala:  de 196 m de longitud x 16 m de ancho, 2.080 m3 de H°A°.
3-En Avda. Mcal. López:
lado derecho de 198 m de longitud x 8 m de ancho
lado izquierdo de 170 m de longitud x 8 m de ancho, 2.540 m3 de H°A°.

-Desagües: Se ejecutó un canal de cielo abierto de 6 Km de longitud con una 
excavación de 350.000 m3, con barandas metálicas protectoras y guarda raíles.
-Alcantarillas: Se construyeron 25.000 m de alcantarillas celulares de 2,5x2,5 m y 
6.000 m de tubulares de diferentes diámetro','80',null,null,'		<!-- layerslayer -->
	<div id="slider-wrapper">

		<!-- LayerSlider start -->

		<div id="layerslider" class="layerslider centrar" style="width: 1280px; height: 500px;">

			<!-- slide one start -->

			<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">

				<!-- slide background image -->

				<img src="/images/obras/89_1.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->

				<p class="ls-l" style="
					top:70px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Avda. Madame Lynch
				</p>
				<!-- layer two -->

<!-- 				<img class="ls-l" style="left: 30%; top: 50%;" src="images/sliderimages/clownfish.png" alt="Image layer" data-ls="
					offsetxin: left;
					offsetxout: right;
					offsetyin: 150;
					offsetyout: -250;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					durationout: 2500;
					delayin: 500;
					showuntil: 1;
				">
 -->
				<!-- <p class="ls-l" style="top:30px;left:90%;font-weight: 500; text-align: right;font-size:30px;color:#bd5949;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatein:90;transformoriginin:right bottom 0;offsetxout:0;durationout:1500;transformoriginout:right bottom 0;">
					...con los
				</p>
				<p class="ls-l" style="top:62px;left:85%;font-weight: 300; text-align: center;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f06a52;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:3250;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:0;durationout:1000;rotatexout:90;transformoriginout:50% bottom 0;">
					Mejores precios
				</p> -->
				<p class="ls-l" style="
					top:130px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Una empresa Paraguaya de Ingeniería
				</p>

			</div>

			<!-- slide one end -->

			<!-- slide two start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/89_2.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: left;
					offsetxout: 0;
					offsetyin: 100;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer two -->

<!-- 				<img class="ls-l" 
					style="
						left: 650px; 
						top: 70px;
						background-color:blue;
					" 
					src="images/logo.png" 
					alt="Image layer" 
					data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide two end -->

			<!-- slide 3 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/89_3.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 3 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide 3 end -->

			<!-- slide 4 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/89_3.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 4 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 4 end -->
		</div>


		</div>

		<!-- LayerSlider end -->
');

insert into default.obras_det(id,obras_id,titulo_obra,contenido_obra,imagen,created_at,updated_at,layer)values(2,6,'titulo_detalle_1','contenido_obra','88',null,null,'		<!-- layerslayer -->
	<div id="slider-wrapper">

		<!-- LayerSlider start -->

		<div id="layerslider" class="layerslider centrar" style="width: 1280px; height: 500px;">

			<!-- slide one start -->

			<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">

				<!-- slide background image -->

				<img src="/images/obras/88_1.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->

				<p class="ls-l" style="
					top:70px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Aeropuerto de Encarnación
				</p>
				<!-- layer two -->

<!-- 				<img class="ls-l" style="left: 30%; top: 50%;" src="images/sliderimages/clownfish.png" alt="Image layer" data-ls="
					offsetxin: left;
					offsetxout: right;
					offsetyin: 150;
					offsetyout: -250;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					durationout: 2500;
					delayin: 500;
					showuntil: 1;
				">
 -->
				<!-- <p class="ls-l" style="top:30px;left:90%;font-weight: 500; text-align: right;font-size:30px;color:#bd5949;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatein:90;transformoriginin:right bottom 0;offsetxout:0;durationout:1500;transformoriginout:right bottom 0;">
					...con los
				</p>
				<p class="ls-l" style="top:62px;left:85%;font-weight: 300; text-align: center;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f06a52;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:3250;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:0;durationout:1000;rotatexout:90;transformoriginout:50% bottom 0;">
					Mejores precios
				</p> -->
				<p class="ls-l" style="
					top:130px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">EDB Construcciones
				</p>

			</div>

			<!-- slide one end -->

			<!-- slide two start -->
<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->
			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/88_2.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: left;
					offsetxout: 0;
					offsetyin: 100;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer two -->

<!-- 				<img class="ls-l" 
					style="
						left: 650px; 
						top: 70px;
						background-color:blue;
					" 
					src="images/logo.png" 
					alt="Image layer" 
					data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide two end -->

			<!-- slide 3 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/88_3.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 3 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide 3 end -->

			<!-- slide 4 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/88_4.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 4 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 4 end -->

			<!-- slide 5 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/88_5.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 5 end -->

			<!-- slide 6 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/88_6.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 6 end -->

			<!-- slide 7 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/88_7.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 7 end -->

			<!-- slide 8 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/88_8.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 8 end -->

			<!-- slide 9 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/88_9.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 9 end -->

		</div>


		</div>

		<!-- LayerSlider end -->
');

insert into default.obras_det(id,obras_id,titulo_obra,contenido_obra,imagen,created_at,updated_at,layer)values(3,5,'Avda. Acceso Este Laguna Grande','MINISTERIO DE OBRAS PÚBLICAS Y COMUNICACIONES. 
Construcción del Aeropuerto Internacional Guaraní. 
Contrato de Obras Civiles y Arquitectónicas.

Obras Civiles:
Pista de Aterrizaje: longitud de 3.400 m y 45 m de ancho.
Calle de Rodaje: longitud de 1.300 m Y 23 m de ancho.
Plataforma de Embarque de Pasajeros: superficie de 46.200 m2.
Plataforma de Aviación General:  superficie de 68.000 m2.
Playa de estacionamiento para vehículos: superficie de 11.370 m2.
Camino de Acceso: longitud de 3.780 m con dos calzadas de 7 m de ancho y paseo central
Planta de abastecimiento de agua potable: capacidad de 300 m3.
Planta de Tratamiento de aguas servidas: capacidad de 200m3/d.

Obras Arquitectónicas:
Edificio Terminal de Pasajeros: superficie de 9.400 mts2.
Edificio de Carga y Aduana: superficie de 1.200 mts2.
Estación de Bomberos y Rescate: superficie de 500 mts2.
Caseta de Radio Ayuda a la Aeronavegación : superficie de 752 mts2.
*EJECUCIÔN: 1.987 días calendario.','86',null,null,'		<!-- layerslayer -->
	<div id="slider-wrapper">

		<!-- LayerSlider start -->

		<div id="layerslider" class="layerslider centrar" style="width: 1280px; height: 500px;">

			<!-- slide one start -->

			<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">

				<!-- slide background image -->

				<img src="/images/obras/86_1.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->

				<p class="ls-l" style="
					top:70px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Avda. Acceso Este Laguna Grande
				</p>
				<!-- layer two -->

<!-- 				<img class="ls-l" style="left: 30%; top: 50%;" src="images/sliderimages/clownfish.png" alt="Image layer" data-ls="
					offsetxin: left;
					offsetxout: right;
					offsetyin: 150;
					offsetyout: -250;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					durationout: 2500;
					delayin: 500;
					showuntil: 1;
				">
 -->
				<!-- <p class="ls-l" style="top:30px;left:90%;font-weight: 500; text-align: right;font-size:30px;color:#bd5949;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatein:90;transformoriginin:right bottom 0;offsetxout:0;durationout:1500;transformoriginout:right bottom 0;">
					...con los
				</p>
				<p class="ls-l" style="top:62px;left:85%;font-weight: 300; text-align: center;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f06a52;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:3250;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:0;durationout:1000;rotatexout:90;transformoriginout:50% bottom 0;">
					Mejores precios
				</p> -->
				<p class="ls-l" style="
					top:130px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">EDB Construcciones
				</p>

			</div>

			<!-- slide one end -->

			<!-- slide two start -->
<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->
			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/86_2.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: left;
					offsetxout: 0;
					offsetyin: 100;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer two -->

<!-- 				<img class="ls-l" 
					style="
						left: 650px; 
						top: 70px;
						background-color:blue;
					" 
					src="images/logo.png" 
					alt="Image layer" 
					data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide two end -->

			<!-- slide 3 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/86_3.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 3 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide 3 end -->

			<!-- slide 4 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/86_4.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 4 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 4 end -->

			<!-- slide 5 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/86_5.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 5 end -->

			<!-- slide 6 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/86_6.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 6 end -->

		</div>


		</div>

		<!-- LayerSlider end -->');
        
        
insert into default.obras_det(id,obras_id,titulo_obra,contenido_obra,imagen,created_at,updated_at,layer)values(4,4,'titulo_detalle_1','ENTIDAD BINACIONAL YACYRETÁ. 
Tratamiento  Costero de la Ciudad de Encarnación - Departamento de Itapúa. 
–Paquete A.

Movimiento de suelos, carga de pedraplenes, desagües pluviales y cloacales; base petrea, carpeta asfáltica, cordones de hormigón, cunetas, señalizaciones horizontales y verticales, empastados y obras de arte.

–Playa San José, Quiteria, Cruz Rojín

–Avda. Costera, playa San Isidro','84',null,null,'		<!-- layerslayer -->
	<div id="slider-wrapper">

		<!-- LayerSlider start -->

		<div id="layerslider" class="layerslider centrar" style="width: 1280px; height: 500px;">

			<!-- slide one start -->

			<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">

				<!-- slide background image -->

				<img src="/images/obras/84_1.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->

				<p class="ls-l" style="
					top:70px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Franja Costera de Encarnación
				</p>
				<!-- layer two -->

<!-- 				<img class="ls-l" style="left: 30%; top: 50%;" src="images/sliderimages/clownfish.png" alt="Image layer" data-ls="
					offsetxin: left;
					offsetxout: right;
					offsetyin: 150;
					offsetyout: -250;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					durationout: 2500;
					delayin: 500;
					showuntil: 1;
				">
 -->
				<!-- <p class="ls-l" style="top:30px;left:90%;font-weight: 500; text-align: right;font-size:30px;color:#bd5949;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatein:90;transformoriginin:right bottom 0;offsetxout:0;durationout:1500;transformoriginout:right bottom 0;">
					...con los
				</p>
				<p class="ls-l" style="top:62px;left:85%;font-weight: 300; text-align: center;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f06a52;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:3250;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:0;durationout:1000;rotatexout:90;transformoriginout:50% bottom 0;">
					Mejores precios
				</p> -->
				<p class="ls-l" style="
					top:130px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">EDB Construcciones
				</p>

			</div>

			<!-- slide one end -->

			<!-- slide two start -->
<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->
			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/84_2.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: left;
					offsetxout: 0;
					offsetyin: 100;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer two -->

<!-- 				<img class="ls-l" 
					style="
						left: 650px; 
						top: 70px;
						background-color:blue;
					" 
					src="images/logo.png" 
					alt="Image layer" 
					data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide two end -->

			<!-- slide 3 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/84_3.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 3 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide 3 end -->

			<!-- slide 4 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/84_4.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 4 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 4 end -->

			<!-- slide 5 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/84_5.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 5 end -->

			<!-- slide 6 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/84_6.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 6 end -->


			<!-- slide 7 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/84_7.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 7 end -->

			<!-- slide 8 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/84_8.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 8 end -->			
		</div>


		</div>

		<!-- LayerSlider end -->');
        
        
        
insert into default.obras_det(id,obras_id,titulo_obra,contenido_obra,imagen,created_at,updated_at,layer)values(5,3,'titulo_detalle_1','MINISTERIO DE OBRAS PÚBLICAS Y COMUNICACIONES. 
Accesos Viales a la Ciudad de Asunción. 
–Paquete 1: Acceso Este a la Ciudad de Asunción
-30 km de alcantarillas prefabricadas subterraneas 
-Ciudades que abarca el proyecto: Asunción - San Lorenzo - Luque - Fdo. De la Mora
-300 personales apróximadamente trabajando 
-150 máquinas de alta generación
-Utilización de materiales prefabricados con certificación ISO 9001','82',null,null,'		<!-- layerslayer -->
	<div id="slider-wrapper">

		<!-- LayerSlider start -->

		<div id="layerslider" class="layerslider centrar" style="width: 1280px; height: 500px;">

			<!-- slide one start -->

			<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">

				<!-- slide background image -->

				<img src="/images/obras/82_1.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->

				<p class="ls-l" style="
					top:70px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Aeropuerto Internacional Guaraní
				</p>
				<!-- layer two -->

<!-- 				<img class="ls-l" style="left: 30%; top: 50%;" src="images/sliderimages/clownfish.png" alt="Image layer" data-ls="
					offsetxin: left;
					offsetxout: right;
					offsetyin: 150;
					offsetyout: -250;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					durationout: 2500;
					delayin: 500;
					showuntil: 1;
				">
 -->
				<!-- <p class="ls-l" style="top:30px;left:90%;font-weight: 500; text-align: right;font-size:30px;color:#bd5949;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatein:90;transformoriginin:right bottom 0;offsetxout:0;durationout:1500;transformoriginout:right bottom 0;">
					...con los
				</p>
				<p class="ls-l" style="top:62px;left:85%;font-weight: 300; text-align: center;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f06a52;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:3250;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:0;durationout:1000;rotatexout:90;transformoriginout:50% bottom 0;">
					Mejores precios
				</p> -->
				<p class="ls-l" style="
					top:130px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">EDB Construcciones
				</p>

			</div>

			<!-- slide one end -->

			<!-- slide two start -->
<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->
			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/82_2.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: left;
					offsetxout: 0;
					offsetyin: 100;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer two -->

<!-- 				<img class="ls-l" 
					style="
						left: 650px; 
						top: 70px;
						background-color:blue;
					" 
					src="images/logo.png" 
					alt="Image layer" 
					data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide two end -->

			<!-- slide 3 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/82_3.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 3 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide 3 end -->

			<!-- slide 4 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/82_4.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 4 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 4 end -->

			<!-- slide 5 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/82_5.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 5 end -->

			<!-- slide 6 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/82_6.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 6 end -->


			<!-- slide 7 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/82_7.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 7 end -->

			<!-- slide 8 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/82_8.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 8 end -->			

			<!-- slide 9 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/82_9.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 9 end -->			

			<!-- slide 10 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/82_10.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 10 end -->			
		</div>

	</div>

	<!-- LayerSlider end -->');
    
    
insert into default.obras_det(id,obras_id,titulo_obra,contenido_obra,imagen,created_at,updated_at,layer)values(6,2,'Ruta Luque - San Bernardino','MINISTERIO DE OBRAS PÚBLICAS Y COMUNICACIONES.
Pavimentación Asfáltica del Tramo Luque – San Bernardino
-21.3 Km de Ruta Asfaltada, 390.000 M3 de Terraplén y 4 Puentes de HºAº
-Primera ruta ecológica con ciclovía (ecovía)
-Incorporación de materiales prefabricados con certificación ISO 9001
-2 departamentos unidos, Central y Cordillera
-Concluido

','81',null,null,'		<!-- layerslayer -->
	<div id="slider-wrapper">

		<!-- LayerSlider start -->

		<div id="layerslider" class="layerslider centrar" style="width: 1280px; height: 500px;">

			<!-- slide one start -->

			<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">

				<!-- slide background image -->

				<img src="/images/obras/81_1.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->

				<p class="ls-l" style="
					top:70px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Aeropuerto Internacional Guaraní
				</p>
				<!-- layer two -->

<!-- 				<img class="ls-l" style="left: 30%; top: 50%;" src="images/sliderimages/clownfish.png" alt="Image layer" data-ls="
					offsetxin: left;
					offsetxout: right;
					offsetyin: 150;
					offsetyout: -250;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					durationout: 2500;
					delayin: 500;
					showuntil: 1;
				">
 -->
				<!-- <p class="ls-l" style="top:30px;left:90%;font-weight: 500; text-align: right;font-size:30px;color:#bd5949;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatein:90;transformoriginin:right bottom 0;offsetxout:0;durationout:1500;transformoriginout:right bottom 0;">
					...con los
				</p>
				<p class="ls-l" style="top:62px;left:85%;font-weight: 300; text-align: center;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f06a52;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:3250;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:0;durationout:1000;rotatexout:90;transformoriginout:50% bottom 0;">
					Mejores precios
				</p> -->
				<p class="ls-l" style="
					top:130px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">EDB Construcciones
				</p>

			</div>

			<!-- slide one end -->

			<!-- slide two start -->
<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->
			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_2.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: left;
					offsetxout: 0;
					offsetyin: 100;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer two -->

<!-- 				<img class="ls-l" 
					style="
						left: 650px; 
						top: 70px;
						background-color:blue;
					" 
					src="images/logo.png" 
					alt="Image layer" 
					data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide two end -->

			<!-- slide 3 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_3.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 3 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide 3 end -->

			<!-- slide 4 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_4.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 4 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 4 end -->

			<!-- slide 5 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_5.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 5 end -->

			<!-- slide 6 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_6.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 6 end -->


			<!-- slide 7 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_7.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 7 end -->

			<!-- slide 8 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_8.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 8 end -->			

			<!-- slide 9 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_9.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 9 end -->			

			<!-- slide 10 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_10.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 10 end -->			
		</div>

	</div>

	<!-- LayerSlider end -->');
    
    
insert into default.obras_det(id,obras_id,titulo_obra,contenido_obra,imagen,created_at,updated_at,layer)values(7,7,'Ruta Santa Rosa - Capitán Bado','MINISTERIO DE OBRAS PÚBLICAS Y COMUNICACIONES. 
Proyecto de Rehabilitación y Pavimentación del Tramo Santa Rosa del Aguaray – Capitán Bado. 
TRAMO 1.
-35 Kmts de  Ruta Pavimentada.
-3 puentes de ho armado (ver mas info)
-40.000 tn de concreto asfáltico
-700.000 m3 de terraplenes','80',null,null,'		<!-- layerslayer -->
	<div id="slider-wrapper">

		<!-- LayerSlider start -->

		<div id="layerslider" class="layerslider centrar" style="width: 1280px; height: 500px;">

			<!-- slide one start -->

			<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">

				<!-- slide background image -->

				<img src="/images/obras/81_1.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->

				<p class="ls-l" style="
					top:70px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Aeropuerto Internacional Guaraní
				</p>
				<!-- layer two -->

<!-- 				<img class="ls-l" style="left: 30%; top: 50%;" src="images/sliderimages/clownfish.png" alt="Image layer" data-ls="
					offsetxin: left;
					offsetxout: right;
					offsetyin: 150;
					offsetyout: -250;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					durationout: 2500;
					delayin: 500;
					showuntil: 1;
				">
 -->
				<!-- <p class="ls-l" style="top:30px;left:90%;font-weight: 500; text-align: right;font-size:30px;color:#bd5949;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatein:90;transformoriginin:right bottom 0;offsetxout:0;durationout:1500;transformoriginout:right bottom 0;">
					...con los
				</p>
				<p class="ls-l" style="top:62px;left:85%;font-weight: 300; text-align: center;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f06a52;white-space: nowrap;" data-ls="offsetxin:0;durationin:2500;delayin:3250;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:0;durationout:1000;rotatexout:90;transformoriginout:50% bottom 0;">
					Mejores precios
				</p> -->
				<p class="ls-l" style="
					top:130px;
				    left:10px;
				    font-weight: 300;
				    height:40px;
				    padding-right:10px;
				    padding-left:10px;
				    font-size:30px;
				    line-height:37px;
				    color:#ffffff;
				    background:#3D82DA;
				    border-radius:4px;
				    white-space: nowrap;" data-ls="durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">EDB Construcciones
				</p>

			</div>

			<!-- slide one end -->

			<!-- slide two start -->
<!-- <h1 class="ls-l" style="
				top: 10px;
				left: 10px;
				font-weight: 300;
			    height:40px;
			    padding-right:10px;
			    padding-left:10px;
			    font-size:30px;
			    line-height:37px;
			    color:#ffffff;
			    background:#3D82DA;
			    border-radius:4px;
			    white-space: nowrap" 
				data-ls="
					offsetxin: 0;
					offsetxout: 300;
					offsetyin: top;
					offsetyout: 300;
					durationin: 2000;
					durationout: 2000;
					delayin: 2000;
					rotateyin: 60;
				">HORIZONTE VIAJES</h1> -->
			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_2.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: left;
					offsetxout: 0;
					offsetyin: 100;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer two -->

<!-- 				<img class="ls-l" 
					style="
						left: 650px; 
						top: 70px;
						background-color:blue;
					" 
					src="images/logo.png" 
					alt="Image layer" 
					data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide two end -->

			<!-- slide 3 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_3.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 3 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;
				"> -->

			</div>

			<!-- slide 3 end -->

			<!-- slide 4 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_4.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 4 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 4 end -->

			<!-- slide 5 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_5.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 5 end -->

			<!-- slide 6 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_6.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 6 end -->


			<!-- slide 7 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_7.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 7 end -->

			<!-- slide 8 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_8.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 8 end -->			

			<!-- slide 9 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_9.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 9 end -->			

			<!-- slide 10 start -->

			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d: 5; timeshift: -1000;">

				<!-- slide background image -->

				<img src="/images/obras/81_10.jpg" class="ls-bg" alt="Slide background"/>

				<!-- layer one -->

				<h2 class="ls-l claim parrafo light-green" style="top: 600px; left: 50%;" data-ls="
					offsetxin: -100;
					offsetxout: 0;
					offsetyin: 0;
					offsetyout: bottom;
					durationin: 2500;
					delayin: 1000;
					skewxin: 60;
				">We like Tucans :)</h2>

				<!-- layer 5 -->

<!-- 				<img class="ls-l" style="left: 650px; top: 70px;" src="images/sliderimages/tucan.png" alt="Image layer" data-ls="
					offsetxin: right;
					offsetxout: 0;
					offsetyin: 200;
					offsetyout: bottom;
					rotatein: 50;
					rotateout: -20;
					fadein: false;
					fadeout: false;
					easingin: easeoutquart;
					easingout: easeinquart;
					durationin: 2500;
					delayin: 500;">
 -->

			</div>

			<!-- slide 10 end -->			
		</div>

	</div>

	<!-- LayerSlider end -->
	');




INSERT INTO `prensas` VALUES (10,NULL,NULL,'http://www.radio1000.com.py/show/35577','Avanzan con fuerza las obras de la futura avenida Laguna Grande',''),(11,NULL,NULL,'http://www.presuntospy.com/2016/09/buena-noticia-la-avenida-laguna-grande.html?m=1','Buena noticia! La avenida laguna grande o Acceso este Avanza con fuerza!',''),(12,NULL,NULL,'https://www.youtube.com/watch?v=qXhl_40Mysc','Agradecemos la entrevista en el programa Maquinas &amp; Construcciones',''),(14,NULL,NULL,'https://www.youtube.com/watch?v=qXhl_40Mysc&feature=youtu.be','EXPO OBRAS - EDB CONSTRUCCIONES',''),(15,NULL,NULL,'http://www.adndigital.com.py/acceso-este-vertido-de-hormigon-hidraulico/','Acceso Este: vertido de hormigón hidráulico',''),(16,NULL,NULL,'http://www.adndigital.com.py/avanzan-las-obra-sobre-la-ruta-11/','Avanzan las obra sobre la ruta 11',''),(17,NULL,NULL,'http://www.mopc.gov.py/avanzan-obras-en-la-ruta-xi-con-la-carga-de-losa-en-el-puente-sobre-rio-verde-n3947','Avanzan obras en la Ruta XI con la carga de losa en el puente sobre Río Verde',''),(18,NULL,NULL,'http://www.ip.gov.py/ip/?p=136333','Avanzan obras de construcción de la ruta XI a Capitán Bado',''),(19,NULL,NULL,'http://www.abc.com.py/edicion-impresa/economia/en-un-ano-acceso-este-estaria-listo-para-unos-25000-vehiculos-por-dia-1535195.html','En un año Acceso Este estaría listo para unos 25.000 vehículos por día',''),(20,NULL,NULL,'http://www.abc.com.py/edicion-impresa/economia/acceso-este-25000-vehiculos-mas-sobre-m-lynch-1535273.html','Acceso Este, 25.000 vehículos más sobre M. Lynch',''),(21,NULL,NULL,'http://www.lanacion.com.py/2016/12/28/avanzan-obras-la-ruta-xi-carga-losa-rio-verde/','Avanzan obras en ruta XI con carga de losa sobre río Verde',''),(22,NULL,NULL,'http://www.hoy.com.py/nacionales/Avanzan-obras-de-la-ruta-XI-a-Capitn-Bado','Avanzan obras de la ruta XI a Capitán Bado',''),(23,NULL,NULL,'http://www.lanacion.com.py/2017/01/10/obras-laguna-grande-culminaran-octubre/','Obras en Laguna Grande culminarán en octubre',''),(24,NULL,NULL,'http://www.5dias.com.py/52837-acceso-por-laguna-grande-se-terminaria-en-octubre-proximo','Acceso por Laguna Grande se terminaría en octubre próximo',''),(25,NULL,NULL,'http://www.hoy.com.py/nacionales/avenida-laguna-grande-con-avance-de-mas-del-70','Avenida Laguna Grande, con avance de más del 70%',''),(26,NULL,NULL,'http://www.radio1000.com.py/show/43260','Verifican avance de obras en Laguna Grande',''),(27,NULL,NULL,'https://www.youtube.com/watch?v=SvIhilV7lQg','Programa de investigación  saca a la luz Sanción injusta a EDB  ',''),(28,NULL,NULL,'http://www.mopc.gov.py/el-acceso-este-estaria-culminado-para-el-mes-de-octubre-n4431','El Acceso Este estaría culminado para el mes de octubre',''),(29,NULL,NULL,'http://www.ip.gov.py/ip/en-71-avanzan-obras-en-acceso-este-laguna-grande/','MOPC anuncia que obras del acceso este culminarán en octubre',''),(30,NULL,NULL,'http://objetivo.com.py/index.php/2017/05/04/octubre-acceso-laguna-grande/','Para octubre, acceso por Laguna Grande',''),(31,NULL,NULL,'http://www.canalpro.com.py/obras-de-acceso-este-884/','Obras de Acceso Este',''),(32,NULL,NULL,'http://www.adndigital.com.py/el-acceso-este-por-laguna-grande-culminaria-en-octubre/','El acceso este por laguna grande culminaría en octubre',''),(33,NULL,NULL,'http://www.hoy.com.py/nacionales/Palos-o-caricias-revelan-la-tcnica-de-apriete-de-Acero-para-hacer-nego','Palos o ‘caricias’: revelan la técnica de apriete de Acero para hacer negocios',''),(34,NULL,NULL,'http://www.lavozdigital.com.py/noticia.php?id=9287&id_categoria=9','Empresario de la Construcción demandaría a dueño de ABC',''),(35,NULL,NULL,'http://www.hoy.com.py/radio970/constructora-denuncia-persecucion-de-zuccolillo-y-piensa-accionar','Constructora denuncia persecución de Zuccolillo y piensa accionar',''),(36,NULL,NULL,'http://www.radio1000.com.py/show/43646','Directivo de EDB Construcciones arremete contra &quot;obsesiones&quot; del Diario ABC Color',''),(37,NULL,NULL,'http://www.edbconstrucciones.com.py/es/admin/menu.html','EDB acusa a Aldo Zuccolillo de persecución mediática',''),(38,NULL,NULL,'','EDB: “No hubo ningún delito ambiental”',''),(39,NULL,NULL,'http://www.lanacion.com.py/negocios/2017/05/11/constructora-analiza-accionar-contra-zuccolillo-por-persecucion/','Constructora analiza accionar contra Zuccolillo por persecución',''),(40,NULL,NULL,'http://www.adndigital.com.py/abc-herramienta-de-presion-de-zuccolillo-para-hacer-negocios/','ABC, herramienta de presión de Zuccolillo para hacer negocios',''),(41,NULL,NULL,'http://www.construccionesparaguay.com/noticias/ver/519','Acceso Este: Colocaron cinco vigas para puente sobre el arroyo San Lorenzo',''),(42,NULL,NULL,'http://www.radio1000.com.py/show/44355','Colocaron cinco vigas para puente sobre el arroyo San Lorenzo',''),(43,NULL,NULL,'http://www.ip.gov.py/ip/en-el-acceso-este-colocaron-vigas-para-puente-sobre-arroyo-san-lorenzo/','En el Acceso Este colocaron vigas para puente sobre arroyo San Lorenzo',''),(44,NULL,NULL,'http://www.mopc.gov.py/acceso-este-colocaron-cinco-vigas-para-puente-sobre-el-arroyo-san-lorenzo-n4544',' Acceso Este: Cinco vigas para puente sobre el arroyo San Lorenzo',''),(45,NULL,NULL,'http://www.lanacion.com.py/negocios_edicion_impresa/2017/05/30/colocaron-cinco-vigas-para-puente/','Colocaron cinco vigas para puente',''),(46,NULL,NULL,'http://www.5dias.com.py/92144-colocan-vigas-en-puente-del-arroyo-san-lorenzo','Colocan vigas en puente del arroyo San Lorenzo',''),(47,NULL,NULL,'http://www.mopc.gov.py/ruta-santa-rosa-capitan-bado-esta-con-92-de-avance-n4553','Ruta Santa Rosa – Capitán Bado está con 92% de avance',''),(50,NULL,NULL,'http://www.5dias.com.py/92204-ruta-capitan-bado-esta-con-el-92-de-avance','Ruta Capitán Bado está con el 92% de avance',''),(51,NULL,NULL,'http://www.mopc.gov.py/solo-faltan-7-2-km-para-concluir-el-primer-tramo-de-la-ruta-santa-rosa-del-aguaray-capitan-bado-n4699','Solo faltan 7,2 km para concluir el primer tramo de la ruta Santa Rosa del Aguaray - Capitán Bado',''),(52,NULL,NULL,'http://www.ip.gov.py/ip/avanzan-labores-en-ruta-santa-rosa-del-aguaray-capitan-bado/','Avanzan labores en ruta Santa Rosa del Aguaray – Capitán Bado',''),(53,NULL,NULL,'http://radio1000.com.py/show/45879#.WV0UyztkijQ.whatsapp','Santa Rosa del Aguaray: Avanzan obras de la Ruta 11 “Juana María de Lara”',''),(55,NULL,NULL,'http://www.radio1000.com.py/show/46422','Obra Acceso Este se encuentra en etapas finales',''),(57,NULL,NULL,'https://www.ip.gov.py/ip/asfaltado-cambiara-imagen-al-barrio-laguna-grande/','Asfaltado cambiará imagen al barrio Laguna Grande',''),(58,NULL,NULL,'http://www.elpais.com.py/barrio-laguna-grande-cambiara-imagen-asfaltado/',' Barrio Laguna Grande cambiará su imagen con asfaltado',''),(59,NULL,NULL,'http://www.mopc.gov.py/continua-construccion-de-desag-es-pluviales-y-zanja-tecnica-del-metrobus-n4802','Continúa construcción de desagües pluviales y zanja técnica del Metrobús',''),(60,NULL,NULL,'http://radio1000.com.py/show/46783','Barrio Laguna Grande contará con 13 km de asfalto',''),(61,NULL,NULL,'','Asfaltado llega al barrio Laguna Grande',''),(62,NULL,NULL,'http://www.lanacion.com.py/pais/2017/07/12/terminaran-asfalto-santa-rosa-capitan-bado-en-octubre/','Terminarán asfalto Santa Rosa – Capitan Bado en Octubre',''),(63,NULL,NULL,'http://www.lanacion.com.py/negocios/2017/08/10/inicio-la-primera-convencion-nacional-de-la-industria-de-la-construccion/','Inició la Primera Convención Nacional de la Industria de la Construcción',''),(64,NULL,NULL,'http://www.radio1000.com.py/show/47537','Audio | Obras de Avenida Laguna Grande pasan por algunas dificultades pero concluirían en octubre',''),(65,NULL,NULL,'http://www.adndigital.com.py/asfaltado-de-laguna-grande-finalizara-en-octubre-afirman/','Asfaltado de Laguna Grande finalizará en octubre, afirman',''),(66,NULL,NULL,'','Video/Obras de Laguna Grande en etapa final',''),(67,NULL,NULL,'http://www.economia.com.py/economia/se-despeja-sector-que-va-a-conectar-laguna-grande-con-madame-lynch-12413.html','Se despeja sector que va a conectar Laguna Grande con Madame Lynch',''),(68,NULL,NULL,'http://www.abc.com.py/edicion-impresa/economia/prometen-acceso-este-para-octubre-1625975.html','Prometen “Acceso Este” para octubre',''),(69,NULL,NULL,'http://www.lanacion.com.py/pais_edicion_impresa/2017/08/28/asfalto-santa-rosa-y-capitan-bado/','Asfalto Santa Rosa y Capitán Bado',''),(70,NULL,NULL,'http://www.abc.com.py/edicion-impresa/economia/se-despeja-sector-que-va-a-conectar-laguna-grande-con-madame-lynch-1626445.html','Se despeja sector que va a conectar Laguna Grande con Madame Lynch',''),(71,NULL,NULL,'http://www.lanacion.com.py/negocios_edicion_impresa/2017/09/20/primer-tramo-de-la-ruta-11-culminara-a-fin-de-noviembre/','Primer tramo de la Ruta 11 culminará a fin de noviembre',''),(72,NULL,NULL,'http://www.mopc.gov.py/primer-tramo-de-la-ruta-que-unira-santa-rosa-con-capitan-bado-concluira-a-fines-de-noviembre-n4990','Primer tramo de la ruta que unirá Santa Rosa con Capitán Bado concluirá a fines de noviembre',''),(73,NULL,NULL,'','Columnas de ANDE, en medio del Acceso Este',''),(74,NULL,NULL,'http://www.adndigital.com.py/culmina-pavimentacion-une-san-pedro-amambay/','Culmina pavimentación que une San Pedro y Amambay',''),(75,NULL,NULL,'http://www.amambay570.com.py/noticias_mas.php?id=13219','Culminan trabajos del 1er. tramo de la ruta Santa Rosa- Capitán Bado','');
update default.prensas set  imagen=concat(id,'','_1');

