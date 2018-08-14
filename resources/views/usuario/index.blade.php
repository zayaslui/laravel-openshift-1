@extends('layouts.admin')
@section('title','Usuarios')

@if (session('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>{{ session('message') }}</strong>
	</div>
@endif

@section('content')


{{-- contenido --}}
<table class="display nowrap" id="example" >
   <thead>
      <tr>
         <th></th>
         <th>Id</th>                    
         <th>Nombre</th>
         <th>Email</th>
         <th>Controles</th>
      </tr>
   </thead>

</table>
{{-- contenido --}}

	<script>   
/* Formatting function for row details - modify as you need */
		function format ( d ) {
		    // `d` is the original data object for the row
		    var imagen='';
		    if(d.avatar==''){
			    imagen =  '<img src=\"../images/sistema/image-not-found.png\"  height=\"100px\"/>' ;	    	
		    }else{
		    	imagen= '<img src=\"../images/avatar/'+d.avatar+'\" height=\"200\"/>' ;
		    }
		    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
		        '<tr>'+
		            '<td><strong>Full name:</strong></td>'+
		            '<td>'+d.name+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td><strong>Extension number:</strong></td>'+
		            '<td>Extension</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td><strong>Avatar:</strong></td>'+
		            '<td>'+imagen+'</td>'+
		        '</tr>'+
		    '</table>';
		}
		function controles(d){
			return "<button class='btn btn-sm btn-success'>Agregar</button>";
		}  
		var table = $('#example').DataTable({
			columns: [
						{
			                "className":      'details-control',
			                "orderable":      false,
			                "data":           null,
			                "defaultContent": ''
			            },
                        {data :"id", name:"id", className:"desktop"},
                        { data: "name", name: "name",className:"min-tablet" },
                        { data: "email", name: "email",className:"all" },
                        {
                        	"className":'all',
                        	"orderable":false,
                        	"data": null,
                        	"defaultContent":'',
                        	render : function ( data, type, full, meta ) {
					            return '<a class="btn btn-sm btn-success" href="usuario/'+data.slug+'"><i class="fa fa-eye"></i></a>'+
					            '<a class="btn btn-sm btn-primary" href="usuario/'+data.slug+'/edit"><i class="fa fa-edit"></i></a>';
					         }
                        },
                     ],
			responsive: {
	            details: {
	                display: $.fn.dataTable.Responsive.display.childRowImmediate,
	                type: ''
	            }
	        },
       		ajax: '{{ url('datatables') }}',
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

	    $(document).ready(function(){
					toastr.options = {
					  "closeButton": true,
					  "debug": false,
					  "newestOnTop": true,
					  "progressBar": true,
					  "positionClass": "toast-top-right",
					  "preventDuplicates": true,
					  "onclick": null,
					  "showDuration": "300",
					  "hideDuration": "1000",
					  "timeOut": "5000",
					  "extendedTimeOut": "1000",
					  "showEasing": "swing",
					  "hideEasing": "linear",
					  "showMethod": "fadeIn",
					  "hideMethod": "fadeOut",
					}				
				@if (session('create'))
					toastr["success"]("Se ha creado exitosamente el registro","Usuarios");
				@endif
				@if (session('destroy'))
					toastr["error"]("Se ha eliminado exitosamente el registro","Usuarios");
				@endif
	    })
	</script>
	<script>
			$('.js-tilt').tilt({
			    scale: 1.2
			})
	</script>
@stop