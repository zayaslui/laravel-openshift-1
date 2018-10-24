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
         <th>Título obra</th>
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
			// var detalles = JSON.parse(d.detalles.replace(/&quot;/g,'"'));
			var existe = (d === undefined || d == null || d.length <= 0)?true:false;
            var layersliders_id = d.layersliders_id;
            var tabla = '';
           	var imagen='';
		    if(d.avatar==''){
			    imagen =  '<img src=\"../images/sistema/image-not-found.png\"  height=\"100px\"/>' ;	    	
		    }else{
		    	imagen= '<img src=\"../images/obras/'+d.imagen+'\" height=\"200\"/>' ;
		    }

			tabla += '<table class=" table-details table table-responsive" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;padding-right:50px;">';

		     tabla +=   
		     	'<tr>'+
		            '<td><strong>Imagen:</strong></td>'+
		            '<td>'+imagen+'</td>'+
		        '</tr>';
		   if(d.titulo_obra){
				    tabla +=
				        '<tr>'+
				            '<td><strong>Titulo de Obra:</strong></td>'+
				            '<td>'+d.titulo_obra+'</td>'+
				        '</tr>';		        		        	
		        }
		    if(d.introduccion){
		            tabla +=
		                '</tr>'+
		                    '<td class="uno"><strong>Introduccion:</strong></td>'+
		                    '<td class="dos"><textarea class="form-control" id="style_edit" cols="10" rows="5" style="width: 100%; height: 100%;" disabled>'+d.introduccion+'</textarea></td>'+
		                '</tr>';
		    }
		    if(d.contenido_obra){
	            tabla +=
	                '</tr>'+
	                    '<td class="uno"><strong>Contenido Obra:</strong></td>'+
	                    '<td class="dos"><textarea class="form-control" id="style_edit" cols="10" rows="5" style="width: 100%; height: 100%;" disabled>'+d.contenido_obra+'</textarea></td>'+
	                '</tr>';
		    }
		    if(d.layerslider_id){
		            tabla +=
		                '</tr>'+
		                    '<td class="uno"><strong>LayerSlider:</strong></td>'+
		                    '<td class="dos">'+d.layerslider_id+'</td>'+
		                '</tr>';
		    	
		    }
		   tabla +=
		   		 '</table>';

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
			        return '<a class="btn btn-sm btn-success" href="obras_/'+data.id+'"><i class="fa fa-eye"></i></a>'+
			        '<a class="btn btn-sm btn-primary" href="obras_/'+data.id+'/edit"><i class="fa fa-edit"></i></a>';

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