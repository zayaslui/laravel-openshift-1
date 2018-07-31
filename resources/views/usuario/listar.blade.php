@extends('layouts.admin')



@if (session('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>{{ session('message') }}</strong>
	</div>
@endif

@section('content')


{{-- contenido --}}
<table class="display" id="example" >
   <thead>
      <tr>
         <th></th>
         <th>Id</th>                    
         <th>Nombre</th>
         <th>Email</th>
      </tr>
   </thead>

</table>
{{-- contenido --}}

	<script>
		// datatables
						// { data: 'avatar', name: 'avatar',
		    //                 render: function( data, type, full, meta ) {
		    //                     return "<img src=\"https://www.google.com.py/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png\" height=\"20\"/>";
		    //                 }
		    //             },       
/* Formatting function for row details - modify as you need */
		function format ( d ) {
		    // `d` is the original data object for the row
		    var imagen='';
		    console.log(d.avatar);
		    if(d.avatar==''){
			    imagen =  '<img src=\"https://www.google.com.py/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png\" height=\"20\"/>' ;	    	
		    }else{
		    	imagen= '<img src=\"../images/avatar/'+d.avatar+'\" height=\"20\"/>' ;
		    }
		    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
		        '<tr>'+
		            '<td>Full name:</td>'+
		            '<td>'+d.name+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Extension number:</td>'+
		            '<td>Extension</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Extra info:</td>'+
		            '<td>'+imagen+'</td>'+
		        '</tr>'+
		    '</table>';
		}		                     
		var table = $('#example').DataTable({
			columns: [
						{
			                "className":      'details-control',
			                "orderable":      false,
			                "data":           null,
			                "defaultContent": ''
			            },
                        {data :'id', name:'id'},
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                     ],
               ajax: '{{ url('datatables') }}',                     
		});

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
					  "hideMethod": "fadeOut"
					}				
				@if (session('create'))
					toastr["success"]("Se ha creado exitosamente el registro","Usuarios");
				@endif
				@if (session('destroy'))
					toastr["error"]("Se ha eliminado exitosamente el registro","Usuarios");
				@endif
	    })
	</script>
@stop