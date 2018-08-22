@extends('layouts.admin')

@section('content')
@section('title','Ver Usuarios')


      <ul class="nav nav-tabs">
        <li class="active">
          <a  href="#1" data-toggle="tab">Sliders</a>
        </li>
        <li>
          <a href="#2" data-toggle="tab">Layers</a>
        </li>
      </ul>
      <div class="tab-content ">
        <div class="tab-pane active" id="1">
                {{-- inicio --}}
                  <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header">Titulo</h1>
                      </div>
                      <!-- /.col-lg-12 -->
                  </div>
                    <div class="row">
                          <div class="col-lg-12">
                              <div class="panel panel-default">
                                  <div class="panel-heading">
                                      Subtitulo
                                  </div>
                                  <div class="panel-body">
                                      <div class="row">
                                          <div class="col-lg-12">
                                              <form class="col-lg-12 col-md-6 col-sm-12">
                                                  @csrf
                                                    @include('sliders.forms.default')
                                                  <a class="btn btn-primary btn-sm" href="/sliders">Sliders</a>
                                              </form>
                                            <div data-tilt class="col-lg-4 col-md-6 col-sm-12"></div>
                                          </div>
                                          <!-- /.row (nested) -->
                                        </div>
                                        <!-- /.panel-body -->
                                      </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                                <!-- /.row -->
                              </div>                  
                {{-- fin --}}
        </div>
        <div class="tab-pane" id="2">
              {{-- contenido --}}
              <table class="display nowrap" id="layers" >
                 <thead>
                    <tr>
                       <th></th>
                       <th>Id</th>
                       <th>Slider_id</th>
                       <th>Tipo</th>
                       <th>clase</th>
{{--                        <th>Data-ls</th>
                       <th>Style</th> --}}
                       <th>Src</th>
                       <th>Otros</th>
                       <th>Descripcion</th>                                              
                       <th>Controles</th>         
                    </tr>
                 </thead>

              </table>
              {{-- contenido --}}
        </div>
      </div>




            <script>
                var table = $('#layers').DataTable({
                  columns: [
                                    {
                                        "className":      'details-control',
                                        "orderable":      false,
                                        "data":           null,
                                        "defaultContent": ''
                                    },
                                    { data :"id", name:"id", className:"all"},
                                    { data: "slider_id", name: "slider_id", className:"min-tablet" },
                                    { data: "tipo", name: "tipo",className:"all" },
                                    { data: "clase", name: "clase",className:"all" },
                                    // { data: "data_ls", name: "data_ls",className:"all" },
                                    // { data: "style", name: "style",className:"all" },
                                    { data: "src", name: "src",className:"all" },
                                    { data: "otros", name: "otros",className:"all" },
                                    { data: "descripcion", name: "descripcion",className:"all" },
                                    {
                                      "className":'all',
                                      "orderable":false,
                                      "data": null,
                                      "defaultContent":'',
                                      render : function ( data, type, full, meta ) {
                                          return '<a class="btn btn-sm btn-success" href="layersliders/'+data.id+'"><i class="fa fa-eye"></i></a>'+
                                          '<a class="btn btn-sm btn-primary" href="usuario/'+data.id+'/edit"><i class="fa fa-edit"></i></a>';
                                       }
                                    },
                                 ],
                  responsive: {
                          details: {
                              display: $.fn.dataTable.Responsive.display.childRowImmediate,
                              type: ''
                          }
                      },
                      ajax: '{{ url('layers_data') }}',
                });
                // header
                new $.fn.dataTable.FixedHeader( table );
              // Add event listener for opening and closing details
                  $('#layers tbody').on('click', 'td.details-control', function () {
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
                  function format(d){
                    var imagen='';
                    if(d.src=='' || d.src==null){
                      imagen =  '<img src=\"../images/sistema/image-not-found.png\"  height=\"100px\"/>' ;        
                    }else{
                      imagen =  '<img src=\"../images/avatar/'+d.src+'\" height=\"200\"/>' ;
                    }

                    return '<table class="tbody" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                        '<tr>'+
                        '<tr>'+
                            '<td class="uno"><strong>Data_ls:</strong></td>'+
                            '<td class="dos">'+d.data_ls+'</td>'+
                        '</tr>'+
                            '<td class="uno"><strong>Style:</strong></td>'+
                            '<td class="dos">'+d.style+'</td>'+
                        '</tr>'+
                        '<tr class="">'+
                            '<td><strong>Imagen:</strong></td>'+
                            '<td>dato4</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td><strong>Operaciones:</strong></td>'+
                            '<td><a href="/show_sliders/" class="btn btn-sm btn-primary">show</a></td>'+
                        '</tr>'+            
                    '</table>';
                  }
                  
            </script>
            <script>
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
                        @if (session('update'))
                            toastr["success"]("Se ha editado exitosamente el registro","Usuarios");
                        @endif
                })
            </script>

@endsection