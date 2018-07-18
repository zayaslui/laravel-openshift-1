drop table layers;
drop table sliders;
drop table layersliders;

create table layersliders(
layerslider int auto_increment,
tabla varchar(30), -- obras -servicios - otras cosas
apertura varchar(255),
cierre varchar(255),
primary key(layerslider)
);

create table sliders(
slider int auto_increment,
layerslider int,
apertura varchar(255),
cierre varchar(255),
primary key(slider),
foreign key(layerslider) references layersliders(layerslider) on update cascade on delete restrict
);

create table layers(
layer int auto_increment,
slider int,
apertura varchar(255),
cierre varchar(255),
primary key(layer),
foreign key(slider) references sliders(slider) on update cascade on delete restrict
);

/*layersliders*/
insert into layersliders values(1,'obras','<div id="layerslider" class="layerslider centrar" style="width: 1280px; height: 500px;">{}</div>','</div>');

insert into sliders values(1,1,'<div class="ls-slide" data-ls="slidedelay: 7000; transition2d: 75,79;">','</div>');

insert into layers values(1,1,'<img src="/images/obras/81_1.jpg" class="ls-bg" alt="Slide background"/>','');
insert into layers values(2,1,'<p class="ls-l" style="top:70px;left:10px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#3D82DA;border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:3300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">Aeropuerto Internacional Guaraní','</p>');
insert into layers values(3,1,'<p class="ls-l" style="top:130px;left:10px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#3D82DA;border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:4300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">EDB Construcciones','</p>');


select *from layers;