@extends('layouts.admin')
@section('title','Obras')

@section('content')

{{-- contenido --}}
<table class="display nowrap" id="example" style="width: 80%">
   <thead>
      <tr>
         <th></th>
         <th>Id</th>                    
         {{-- <th>Descripcion</th> --}}
         {{-- <th>imagen</th> --}}
         <th>titulo obra</th>
         {{-- <th>Contenido Obra</th> --}}
         {{-- <th>Introduccion</th> --}}
		{{--  <th>Contenido Obra</th> --}}
		<th>Operaciones</th>
      </tr>
   </thead>
</table>
{{-- contenido --}}

<script>
	function format(d){
			var detalles = JSON.parse(d.detalles.replace(/&quot;/g,'"'));
			var existe = (d === undefined || d == null || d.length <= 0)?true:false;
            var layersliders_id = d.id;
            var tabla = '';

			tabla += '<table class=" table-details table table-responsive" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;padding-right:50px;">'+
		        '<tr>'+
		            '<td><strong>Imagen:</strong></td>'+
		            '<td>'+d.imagen+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td><strong>Titulo de Obra:</strong></td>'+
		            '<td>'+d.titulo_obra+'</td>'+
		        '</tr>'+		        
                '</tr>'+
                    '<td class="uno"><strong>Introduccion:</strong></td>'+
                    '<td class="dos"><textarea class="form-control" id="style_edit" cols="10" rows="5" style="width: 100%; height: 100%;" disabled>'+d.introduccion+'</textarea></td>'+
                '</tr>'+
                '</tr>'+
                    '<td class="uno"><strong>Contenido Obra:</strong></td>'+
                    '<td class="dos"><textarea class="form-control" id="style_edit" cols="10" rows="5" style="width: 100%; height: 100%;" disabled>'+d.contenido_obra+'</textarea></td>'+
                '</tr>'+        
		    '</table>';
		    //detalles
		    //bucle para detalles
		    tabla+='<h1>Detalles</h1>';		    

		    for(var i=0;i<detalles.length;i++){
		    	var titulo_obra="";
		    	var contenido_obra="";
		    	var imagen="";

					for(var j in detalles[i])
					{
						 console.log(j +' ---------'+detalles[i][j])
						 if(j=='id'){id = detalles[i][j]}
						 if(j=='titulo_obra'){titulo_obra = detalles[i][j]}
						 if(j=='contenido_obra'){contenido_obra = detalles[i][j]}
						 if(j=='imagen'){imagen = detalles[i][j]}
						 if(j=='layerslider_id'){layersliders_id = detalles[i][j]}
					}
			    tabla+='<hr class="style12"/>';

				tabla+='<table id="" class="subtabla" cellpadding="5" cellspacing="0" border="0" style="">'+
					        '<tr>'+
					        '<tr>'+
					            '<td><strong>Id:</strong></td>'+
					            '<td>'+id+'</td>'+
					        '</tr>'+
					            '<td><strong>Titulo Obra:</strong></td>'+
					            '<td>'+titulo_obra+'</td>'+
					        '</tr>'+
	                        '</tr>'+
	                            '<td class="uno"><strong>Contenido Obra:</strong></td>'+
	                            '<td class="dos"><textarea class="form-control" id="style_edit" cols="10" rows="5" style="width: 100%; height: 100%;" disabled>'+contenido_obra+'</textarea></td>'+
	                        '</tr>'+
					        '<tr>'+
					            '<td><strong>Imagen:</strong></td>'+
					            '<td>'+imagen+'</td>'+
					        '</tr>'+
					        '<tr>'+
					            '<td><strong>LayerSlider:</strong></td>'+
					            '<td>'+layersliders_id+'</td>'+
					        '</tr>'+					        
					        '<tr>'+
					            '<td><strong>Operaciones:</strong></td>'+
					            '<td><a href="/obras/1" class="btn btn-sm btn-primary">show</a>'+
					            '<a id="delete_1" name="delete_1" class="btn btn-sm btn-danger delete">delete</a></td>'+
					        '</tr>'+	
					    '</table>';
		    }

		    return tabla;
	}
	var table = $('#example').DataTable({
		columns : [
			{
			    "className":      'details-control',
			    "orderable":      false,
			    "data":           null,
			    "defaultContent": ''
			},
			{data:"id",name:"id",className:"all"},
			// {data:"descripcion",name:"descripcion",className:"all"},
			// {data:"imagen",name:"imagen",className:""},
			{data:"titulo_obra",name:"titulo_obra",className:"min-tablet"},
			// {data:"contenido_obra",name:"contenido_obra",className:""},
			// {data:"introduccion",name:"introduccion",className:""},			
			{
				"className":'all',
				"orderable":false,
				"data": null,
				"defaultContent":'',
				render : function ( data, type, full, meta ) {
			        return '<a class="btn btn-sm btn-success" href="obras/'+data.id+'"><i class="fa fa-eye"></i></a>'+
			        '<a class="btn btn-sm btn-primary" href="orbas/'+data.id+'/edit"><i class="fa fa-edit"></i></a>';
			     }
			},		
		],
		ajax: {
			"url":"listar_obras",
			"contentType": "application/json; charset=ISO-8859-1",
		},
	});
	// header
	new $.fn.dataTable.FixedHeader( table );

	// Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
</script>


@stop