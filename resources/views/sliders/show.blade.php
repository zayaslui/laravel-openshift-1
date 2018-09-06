@extends('layouts.admin')

@section('content')
@section('title','Ver Layersliders')


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
                                                  <a class="btn btn-primary btn-sm" href="/layersliders">Listar LayerSliders</a>
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
            <div>
                <div class="add-modal btn btn-sm btn-primary">
                    <li>Agregar Layer</li>
                </div>
              </div>
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
                          <label class="control-label col-sm-2" for="slider_id_add">Slider_id:</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" id="slider_id_add" autofocus disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="tipo_add">Tipo:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="tipo_add">
                              <small>Min: 2, Max: 128, only text</small>
                              <p class="errorContent text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="clase_add">Clase:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="clase_add" >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="src_add">Src</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="src_add" >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="otros_add">Otros</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="otros_add" >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="descripcion_add">descripcion</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="descripcion_add" >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="data_ls_add">Data-ls</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="data_ls_add" >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="style_add">Style</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="style_add" >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>                      

                  </form>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-success add" data-dismiss="modal">
                          <span id="" class=''></span> Add
                      </button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal">
                          <span class=''></span> Close
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>

{{-- edit --}}
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
                          <label class="control-label col-sm-2" for="slider_id_edit">Slider_id:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="slider_id_edit" autofocus disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="tipo_edit">Tipo:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="tipo_edit"  >
                              <small>Min: 2, Max: 128, only text</small>
                              <p class="errorContent text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="clase_edit">Clase:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="clase_edit"  >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="src_edit">Src</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="src_edit"  >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="otros_edit">Otros</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="otros_edit"  >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="descripcion_edit">descripcion</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="descripcion_edit" >
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="data_ls_edit">Data-ls</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="data_ls_edit" cols="40" rows="5"  ></textarea>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                  </form>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-success edit" data-dismiss="modal" id="">
                          <span id="" class=''></span> Edit
                      </button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal">
                          <span class=''></span> Close
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>


{{-- show --}}

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
                          <label class="control-label col-sm-2" for="slider_id_show">Slider_id:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="slider_id_show" autofocus disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="tipo_show">Tipo:</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" id="tipo_show" cols="40" rows="5"  disabled></textarea>
                              <small>Min: 2, Max: 128, only text</small>
                              <p class="errorContent text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="clase_show">Clase:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="clase_show"  disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="src_show">Src</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="src_show"  disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="otros_show">Otros</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="otros_show"  disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="descripcion_show">descripcion</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="descripcion_show" disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="data_ls_show">Data-ls</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="data_ls_show" disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                  </form>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-dismiss="modal">
                          <span class=''></span> Close
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>

{{-- delete --}}
  <div id="deleteModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" role="form">
                    <input type="text" id="id" hidden="">
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="slider_id_delete">Slider_id:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="slider_id_delete" autofocus disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="tipo_delete">Tipo:</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" id="tipo_delete" cols="40" rows="5"  disabled></textarea>
                              <small>Min: 2, Max: 128, only text</small>
                              <p class="errorContent text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="clase_delete">Clase:</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="clase_delete"  disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <label class="control-label col-sm-2" for="src_delete">Src</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="src_delete"  disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="otros_delete">Otros</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="otros_delete"  disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="descripcion_delete">descripcion</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="descripcion_delete" disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-sm-2" for="data_ls_delete">Data-ls</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="data_ls_delete" disabled>
                              <small>Min: 2, Max: 32, only text</small>
                              <p class="errorTitle text-center alert alert-danger hidden"></p>
                          </div>
                      </div>
                  </form>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                          <span id="" class=''></span> delete
                      </button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal">
                          <span class=''></span> Close
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>

{{-- ajax crud --}}

<script>

          // add a new post
        $(document).on('click', '.add-modal', function() {
            $('.modal-title').text('Add');
            $('#slider_id_add').val(window.location.href.substring(window.location.href.lastIndexOf('/') + 1));
            $('#slider_id_edit').val("");
            $('#tipo_edit').val("");
            $('#clase_edit').val("");
            $('#src_edit').val("");
            $('#otros_edit').val("");
            $('#descripcion_edit').val("");
            $('#data_ls_edit').val("");
            $('#style_edit').val("");            
            $('#addModal').modal('show');


        });
        $('.modal-footer').on('click', '.add', function() {
            $.ajax({
                type: 'POST',
                url: '/layers',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'slider_id': $('#slider_id_add').val(),
                    'tipo': $('#tipo_add').val(),   
                    'clase': $('#clase_add').val(),
                    'src': $('#src_add').val(),
                    'otros': $('#otros_add').val(),
                    'descripcion': $('#descripcion_add').val(),
                    'data_ls': $('#data_ls_add').val(),                    
                    'style': $('#style_add').val()
                },
                success: function(data) {
                    $('.errorTitle').addClass('hidden');
                    $('.errorContent').addClass('hidden');

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);
                        if (data.errors.title) {
                            $('.errorTitle').removeClass('hidden');
                            $('.errorTitle').text(data.errors.title);
                        }
                        if (data.errors.content) {
                            $('.errorContent').removeClass('hidden');
                            $('.errorContent').text(data.errors.content);
                        }
                    } else {
                        toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                        
                        $('#layers').DataTable().row.add( {
                                "id":       data.id,
                                "slider_id":   data.slider_id,
                                "tipo":     data.tipo,
                                "clase": data.clase,
                                "src": data.src    ,
                                "otros":data.otros,
                                "descripcion" :data.descripcion,
                                "data_ls":data.data_ls,
                                "style":data.style
                            } ).draw();

                        // $('.new_published').iCheck({
                        //     checkboxClass: 'icheckbox_square-yellow',
                        //     radioClass: 'iradio_square-yellow',
                        //     increaseArea: '20%'
                        // });
                        // $('.new_published').on('ifToggled', function(event){
                        //     $(this).closest('tr').toggleClass('warning');
                        // });
                        // $('.new_published').on('ifChanged', function(event){
                        //     id = $(this).data('id');
                            // $.ajax({
                            //     type: 'POST',
                            //      url: "-{-{ URL::route('changeStatus') -}-}",
                            //     data: {
                            //         '_token': $('input[name=_token]').val(),
                            //         'id': id
                            //     },
                            //     success: function(data) {
                            //         // empty
                            //     },
                            // });
                        // });
                    }
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    console.log(errors);
                }
            });
        });


        // Show a post
        $(document).on('click', '.show-modal', function() {
            var table = $('#layers').DataTable();
            var data = table.row( $(this).parents('tr') ).data();
            $('.modal-title').text('Show');
            // $('#id').val(data["id"]);
            $('#slider_id_show').val(data["slider_id"]);
            $('#tipo_show').val(data["tipo"]);
            $('#clase_show').val(data["clase"]);
            $('#src_show').val(data["src"]);
            $('#otros_show').val(data["otros"]);
            $('#descripcion_show').val(data["descripcion"]);
            $('#data_ls_show').val(data["data_ls"]);
            $('#style_show').val(data["style"]);
            $('#showModal').modal('show');
        });

        // edit a layer
        $(document).on('click', '.edit-modal', function() {
            var table = $('#layers').DataTable();
            var data = table.row( $(this).parents('tr') ).data();
            $('.modal-title').text('Edit');
            // $('#id').val(data["id"]);
            $('#slider_id_edit').val(data["slider_id"]);
            $('#tipo_edit').val(data["tipo"]);
            $('#clase_edit').val(data["clase"]);
            $('#src_edit').val(data["src"]);
            $('#otros_edit').val(data["otros"]);
            $('#descripcion_edit').val(data["descripcion"]);
            $('#data_ls_edit').val(data["data_ls"]);
            $('#style_edit').val(data["style"]);
            $('#editModal').modal('show');
        });

        //delete layer
      // $(document).on('click', '.delete-modal', function() {
      //       var table = $('#layers').DataTable();
      //       var data = table.row( $(this).parents('tr') ).data();
      //       $('.modal-title').text('Delete');
      //       $('#id').val(data["id"]);           
      //       $('#slider_id_delete').val(data["slider_id"]);
      //       $('#tipo_delete').val(data["tipo"]);
      //       $('#clase_delete').val(data["clase"]);
      //       $('#src_delete').val(data["src"]);
      //       $('#otros_delete').val(data["otros"]);
      //       $('#descripcion_delete').val(data["descripcion"]);
      //       $('#data_ls_delete').val(data["data_ls"]);
      //       $('#style_delete').val(data["style"]);
      //       $('#deleteModal').modal('show');
      //   });

          $(document).on('click', '.delete-modal', function() {
            var table = $('#layers').DataTable();    
            var id = this.id.split("_")[1];
            var dato = "item"+id;
            var dato_delete = this.id;
                $.ajax({
                    type: 'DELETE',
                    url: '/layers/'+id,
                    data: {
                        '_token': $('input[name=_token]').val(),
                    },
                    success: function(data) {
                       toastr.success('Successfully deleted Layer!', 'Success Alert', {timeOut: 5000});
                       var that = this;
                       setTimeout(function(){
                        that.delete_row();
                       },2000)
                    },
                    delete_row:function(){
                      table
                            .row( $("#"+dato_delete).parents('tr') )
                            .remove()
                            .draw();
                    }
                });
            });
          $(document).on('click','.edit-modal',function(){
              var id = this.id.split("_")[1];
              $(".edit").attr('id',id);
          });

          // edit
          $('.modal-footer').on('click', '.edit', function() {
                      //obtener id del modal-edit
                      console.log()
                      var id = this.id;

                      $.ajax({
                          type: 'PUT',
                          url: '/layers/' + id,
                          data: {
                              '_token': $('input[name=_token]').val(),
                              'slider_id': $('#slider_id_edit').val(),
                              'tipo': $('#tipo_edit').val(),   
                              'clase': $('#clase_edit').val(),
                              'src': $('#src_edit').val(),
                              'otros': $('#otros_edit').val(),
                              'descripcion': $('#descripcion_edit').val(),
                              'data_ls': $('#data_ls_edit').val(),                    
                              'style': $('#style_edit').val()
                          },
                          success: function(data) {
                              // $('.errorTitle').addClass('hidden');
                              // $('.errorContent').addClass('hidden');
                              // console.log(data);  

                              if ((data.errors)) {
                                  // setTimeout(function () {
                                  //     $('#editModal').modal('show');
                                  //     toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                                  // }, 500);

                                  // if (data.errors.title) {
                                  //     $('.errorTitle').removeClass('hidden');
                                  //     $('.errorTitle').text(data.errors.title);
                                  // }
                                  // if (data.errors.content) {
                                  //     $('.errorContent').removeClass('hidden');
                                  //     $('.errorContent').text(data.errors.content);
                                  // }
                              } else {
                                  toastr.success('Successfully updated Post!', 'Success Alert', {timeOut: 5000});
                                  var newData = table.row($("#item"+data.id)).data();
                                  var actual = table.row($("#item"+data.id)).data(data).draw();
                                  $("#item"+data.id).closest('tr').toggleClass('warning');

                                  // if (data.is_published) {
                                  //     $('.edit_published').prop('checked', true);
                                  //     $('.edit_published').closest('tr').addClass('warning');
                                  // }
                                  // $('.edit_published').iCheck({
                                  //     checkboxClass: 'icheckbox_square-yellow',
                                  //     radioClass: 'iradio_square-yellow',
                                  //     increaseArea: '20%'
                                  // });
                                  // $('.edit_published').on('ifToggled', function(event) {
                                  //     $(this).closest('tr').toggleClass('warning');
                                  // });
                                  // $('.edit_published').on('ifChanged', function(event){
                                  //     id = $(this).data('id');
                                  //     $.ajax({
                                  //         type: 'POST',
                                          // url: " -{-{ URL::route('changeStatus') }}",
                                  //         data: {
                                  //             '_token': $('input[name=_token]').val(),
                                  //             'id': id
                                  //         },
                                  //         success: function(data) {
                                  //             // empty
                                  //         },
                                  //     });
                                  // });
                              }
                          },
                          error: function(data) {
                              var errors = data.responseJSON;
                              console.log(errors);
                          }
                      });
                  });          
</script>
{{-- ajax crud --}}



            <script>
                var table = $('#layers').DataTable({
                  'createdRow': function( row, data, dataIndex ) {
                      $(row).attr('id', 'item'+data.id);
                  },
                  'getId' : function(){
                    var url = window.location.href;
                    var id = url.substring(url.lastIndexOf('/') + 1);
                    return id;
                  },
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
                                          return '<a class="show-modal btn btn-sm btn-success"><i class="fa fa-eye"></i></a>'+
                                          '<a class="edit-modal btn btn-sm btn-primary" id="edit_'+data.id+'"><i class="fa fa-edit"></i></a>' +
                                          '<a class="delete-modal btn btn-sm btn-danger" id="delete_'+data.id+'"><i class="fa fa-trash"></i></a>';
                                       }
                                    },
                                 ],
                  columnDefs : [
                    {
                        'targets': 3,
                        'createdCell':  function (td, cellData, rowData, row, col) {
                            $(td).attr('id', 'cell-' + cellData); 
                        }
                    }
                  ],
                  responsive: {
                          details: {
                              display: $.fn.dataTable.Responsive.display.childRowImmediate,
                              type: ''
                          }
                      },
                      ajax: '/layers_data/'+window.location.href.substring(window.location.href.lastIndexOf('/') + 1),
                });
                // header
                new $.fn.dataTable.FixedHeader( table );
              // Add event listener for opening and closing details
                  $('#layers tbody').on('click', 'td.details-control', function () {
                      var table = $('#layers').DataTable();
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
                    // if(d.src=='' || d.src==null){
                    //   imagen =  '<img src=\"../images/sistema/image-not-found.png\"  height=\"100px\"/>' ;        
                    // }else{
                    //   imagen =  '<img src=\"../images/avatar/'+d.src+'\" height=\"200\"/>' ;
                    // }

                    return '<table class=" table-details table table-responsive" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;width:50px">'+
                        '<tr>'+
                        '<tr style="width:100px;">'+
                            '<td class="uno"><strong>Data_ls:</strong></td>'+
                            '<td class="dos"> <textarea class="form-control" id="data_ls_edit" cols="10" rows="5" style="width: 435px; height: 127px;" disabled>'+d.data_ls+'</textarea></td>'+
                        '</tr>'+
                            '<td class="uno"><strong>Style:</strong></td>'+
                            '<td class="dos"><textarea class="form-control" id="style_edit" cols="10" rows="5" style="width: 100%; height: 100%;" disabled>'+d.style+'</textarea></td>'+
                        '</tr>'+
                        '<tr class="">'+
                            '<td><strong>Imagen:</strong></td>'+
                            '<td>'+d.src+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td><strong>Operaciones:</strong></td>'+
                            '<td><a href="/show_sliders/" class="btn btn-sm btn-primary">show</a></td>'+
                        '</tr>'+            
                    '</table>';
                  }
                  $(".table-details").DataTable({
                    responsive:true,
                    "scrollX": true
                  });
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