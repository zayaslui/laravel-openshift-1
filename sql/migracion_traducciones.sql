delete from traducciones;
update obras set contenido_obra_2=null,titulo_multilenguaje=null;

insert into traducciones 
/*titulo obra*/
select 
id,
id as traduccion,
titulo_obra as descripcion,
null as create_at,
null as update_at,
1 as idioma_id
from obras;
update obras set titulo_multilenguaje=id;

/*contenido_obra_2*/
set @serial = (select coalesce(max(id),0) from traducciones);
insert into traducciones 
/*contenido obra*/
select 
@serial:=@serial+1 as id,
@serial as traduccion,
contenido_obra as descripcion,
null as create_at,
null as update_at,
1 as idioma_id
from obras;

update obras set contenido_obra_2=null;
-- set @serial=(select id from traducciones a where id not in (select * from (select titulo_multilenguaje as id_ from obras union select contenido_obra_2 as id_ from obras) as a where id_ is not null) order by id limit 1);
set @serial=13;
update obras set contenido_obra_2=(@serial:=@serial+1) where contenido_obra_2 is null;

select contenido_obra_2 from obras;