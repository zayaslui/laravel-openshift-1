@extends('layouts.admin')
@section('title','Obras')

@section('content')

{{-- contenido --}}
<table class="display nowrap" id="example" style="width: 80%">
   <thead>
      <tr>
         <th></th>
         <th>Id</th>
         <th>Descripcion</th>
		<th>Operaciones</th>
      </tr>
   </thead>
</table>
{{-- contenido --}}

<script>
	function format(d){
			// var detalles = JSON.parse(d.detalles.replace(/&quot;/g,'"'));
			var existe = (d === undefined || d == null || d.length <= 0)?true:false;
            var layersliders_id = d.id;
            var tabla = '';
           	var imagen='';
		    if(d.avatar==''){
			    imagen =  '<img src=\"../images/sistema/image-not-found.png\"  height=\"100px\"/>' ;	    	
		    }else{
		    	imagen= '<img src=\"../images/prensas/'+d.imagen+'\" height=\"200\"/>' ;
		    }

			tabla += '<table class=" table-details table table-responsive" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;padding-right:50px;">'+
		        '<tr>'+
		            '<td><strong>Imagen:</strong></td>'+
		            '<td>'+imagen+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td><strong>Link:</strong></td>'+
		            '<td>'+d.link+'</td>'+
		        '</tr>'+      
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
			{data:"descripcion",name:"descripcion",className:"all"},
			// {data:"link",name:"link",className:""},
			// {data:"titulo_obra",name:"titulo_obra",className:"min-tablet"},
			// {data:"contenido_obra",name:"contenido_obra",className:""},
			// {data:"introduccion",name:"introduccion",className:""},			
			{
				"className":'all',
				"orderable":false,
				"data": null,
				"defaultContent":'',
				render : function ( data, type, full, meta ) {
			        return '<a class="btn btn-sm btn-success" href="prensa_/'+data.id+'"><i class="fa fa-eye"></i></a>'+
			        '<a class="btn btn-sm btn-primary" href="prensa_/'+data.id+'/edit"><i class="fa fa-edit"></i></a>';

			     }
			},		
		],
		ajax: {
			"url":"listar_prensa",
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