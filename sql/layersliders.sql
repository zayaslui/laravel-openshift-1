drop table layers;
drop table sliders;
drop table layersliders;

create table layersliders(
	id int auto_increment,
	tabla varchar(30), -- obras -servicios - otras cosas
	clase varchar(255),
	style varchar(255),
	primary key(id)
);

create table sliders(
	id int auto_increment,
	layerslider int,
	clase varchar(255),
	data_ls varchar(255),
	primary key(slider),
	foreign key(layerslider) references layersliders(id) on update cascade on delete restrict
);

create table layers(
	layer int auto_increment,
	slider int,
	tipo varchar(255),
	clase varchar(255),
    data_ls varchar(255),
	style varchar(255),
	src varchar(255),
    otros varchar(255),
	descripcion varchar(255),
	primary key(layer),
	foreign key(slider) references sliders(id) on update cascade on delete restrict
);

/*layersliders*/
insert into layersliders values(1,null,null,'obras','layerslider centrar','width: 1280px; height: 500px;');

insert into sliders values(1,null,null,1,'ls-slide','slidedelay: 7000; transition2d: 75,79;');

insert into layers values(1,null,null,1,'img','ls-bg','data-ls','style','/images/obras/81_1.jpg','Slide background',null);
insert into layers values(2,null,null,1,'p','ls-l','durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;','top:70px;left:10px;font-weight:300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#3D82DA;border-radius:4px;white-space: nowrap;',null,null,'Aeropuerto Internacional Guaraní');
insert into layers values(3,null,null,1,'p','ls-l','durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;','top:130px;left:10px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#3D82DA;border-radius:4px;white-space: nowrap;',null,null,'EDB Construcciones');
