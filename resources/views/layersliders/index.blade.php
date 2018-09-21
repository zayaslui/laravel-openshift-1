@extends('layouts.admin')
@section('title','Layersliders')

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
         <th>tabla</th>
         <th>clase</th>
         <th>style</th>
         <th>Controles</th>         
      </tr>
   </thead>

</table>
{{-- contenido --}}

	{{-- modals inicio --}}

    <!-- Modal form to add a post -->
	<div id="addModal" class="modal fade" role="dialog">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal">×</button>
	                <h4 class="modal-title"></h4>
	            </div>
	            <div class="modal-body">
	                <form class="form-horizontal" role="form">
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="title">Title:</label>
	                        <div class="col-sm-10">
	                            <input type="text" class="form-control" id="title_add" autofocus>
	                            <small>Min: 2, Max: 32, only text</small>
	                            <p class="errorTitle text-center alert alert-danger hidden"></p>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-sm-2" for="content">Content:</label>
	                        <div class="col-sm-10">
	                            <textarea class="form-control" id="content_add" cols="40" rows="5"></textarea>
	                            <small>Min: 2, Max: 128, only text</small>
	                            <p class="errorContent text-center alert alert-danger hidden"></p>
	                        </div>
	                    </div>
	                </form>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-success add" data-dismiss="modal">
	                        <span id="" class='glyphicon glyphicon-check'></span> Add
	                    </button>
	                    <button type="button" class="btn btn-warning" data-dismiss="modal">
	                        <span class='glyphicon glyphicon-remove'></span> Close
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

<!-- Modal form to show a post -->
    <div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="title_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="content">Content:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content_show" cols="40" rows="5" disabled></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

	    <!-- Modal form to edit a form -->
	    <div id="editModal" class="modal fade" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal">×</button>
	                    <h4 class="modal-title"></h4>
	                </div>
	                <div class="modal-body">
	                    <form class="form-horizontal" role="form">
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="id">ID:</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control" id="id_edit" disabled>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="title">Title:</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control" id="title_edit" autofocus>
	                                <p class="errorTitle text-center alert alert-danger hidden"></p>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="content">Content:</label>
	                            <div class="col-sm-10">
	                                <textarea class="form-control" id="content_edit" cols="40" rows="5"></textarea>
	                                <p class="errorContent text-center alert alert-danger hidden"></p>
	                            </div>
	                        </div>
	                    </form>
	                    <div class="modal-footer">
	                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
	                            <span class='glyphicon glyphicon-check'></span> Edit
	                        </button>
	                        <button type="button" class="btn btn-warning" data-dismiss="modal">
	                            <span class='glyphicon glyphicon-remove'></span> Close
	                        </button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!-- Modal form to delete a form -->
	    <div id="deleteModal" class="modal fade" role="dialog">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" data-dismiss="modal">×</button>
	                    <h4 class="modal-title"></h4>
	                </div>
	                <div class="modal-body">
	                    <h3 class="text-center">Are you sure you want to delete the following post?</h3>
	                    <br />
	                    <form class="form-horizontal" role="form">
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="id">ID:</label>
	                            <div class="col-sm-10">
	                                <input type="text" class="form-control" id="id_delete" disabled>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="control-label col-sm-2" for="title">Title:</label>
	                            <div class="col-sm-10">
	                                <input type="name" class="form-control" id="title_delete" disabled>
	                            </div>
	                        </div>
	                    </form>
	                    <div class="modal-footer">
	                        <button type="button" class="btn btn-danger delete" data-dismiss="modal">
	                            <span id="" class='glyphicon glyphicon-trash'></span> Delete
	                        </button>
	                        <button type="button" class="btn btn-warning" data-dismiss="modal">
	                            <span class='glyphicon glyphicon-remove'></span> Close
	                        </button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>		
	{{-- modals fin --}}
	<script>   
/* Formatting function for row details - modify as you need */
		function format ( d ) {

            var dato = JSON.parse(d.detalles.replace(/&quot;/g,'"'));
            // console.log(dato);
			var a = (d === undefined || d == null || d.length <= 0)?true:false;

		    // `d` is the original data object for the row
		    if(dato === undefined || dato == null || dato.length <= 0){
			    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'
			    +'<a class="btn btn-sm btn-primary" href="sliders/create">Agregar Slider</a></table>'
		    }
		    var tabla = '';
		    for(var i=0;i<dato.length;i++){
		    	var id="";
		    	var clase="";
		    	var data_ls="";
			    var imagen='';

				    if(d.avatar=='' || d.avatar==null){
					    imagen =  '<img src=\"../images/sistema/image-not-found.png\"  height=\"100px\"/>' ;	    	
				    }else{
				    	imagen =  '<img src=\"../images/avatar/'+d.avatar+'\" height=\"200\"/>' ;
				    }
				    
		    		for(var j in dato[i])
		    		{
		    			 // console.log(j +' ---------'+dato[i][j])
		    			 if(j=='id'){id = dato[i][j]};
		    			 if(j=='clase'){clase = dato[i][j]};
		    			 if(j=='data_ls'){data_ls = dato[i][j]};
		    			 if(j=='imagen'){imagen = dato[i][j]};
				    }
	    			 tabla+='<table class="subtabla" cellpadding="5" cellspacing="0" border="0" style="">'+
							        '<tr>'+
							        '<tr>'+
							            '<td><strong>Id:</strong></td>'+
							            '<td>'+id+'</td>'+
							        '</tr>'+
							            '<td><strong>Clase:</strong></td>'+
							            '<td>'+clase+'</td>'+
							        '</tr>'+
							        '<tr>'+
							            '<td><strong>Data-ls:</strong></td>'+
							            '<td>'+data_ls+'</td>'+
							        '</tr>'+		        
							        '<tr>'+
							            '<td><strong>Imagen:</strong></td>'+
							            '<td>'+imagen+'</td>'+
							        '</tr>'+
							        '<tr>'+
							            '<td><strong>Operaciones:</strong></td>'+
							            '<td><a href="/show_sliders/'+id+'" class="btn btn-sm btn-primary">show</a></td>'+
							        '</tr>'+		        
							    '</table>';
				}

		    return tabla;
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
                        { data: "tabla", name: "name",className:"min-tablet" },
                        { data: "clase", name: "clase",className:"all" },
                        { data: "style", name: "style",className:"all" },
                        {
                        	"className":'all',
                        	"orderable":false,
                        	"data": null,
                        	"defaultContent":'',
                        	render : function ( data, type, full, meta ) {
					            return '<a class="btn btn-sm btn-success" href="layersliders/'+data.id+'"><i class="fa fa-eye"></i></a>'+
					            '<a class="btn btn-sm btn-primary" href="layersliders/'+data.id+'/edit"><i class="fa fa-edit"></i></a>';
					         }
                        },
                     ],
			responsive: {
	            details: {
	                display: $.fn.dataTable.Responsive.display.childRowImmediate,
	                type: ''
	            }
	        },
       		ajax: '{{ url('layersliders_data') }}',
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
		            //detalles
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