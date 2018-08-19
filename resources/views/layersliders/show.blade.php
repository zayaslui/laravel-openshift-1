@extends('layouts.admin')

@section('content')
@section('title','Ver Usuarios')


                         <div class="row">
                              <div class="col-lg-12">
                                  <h1 class="page-header">{{$titulo}}</h1>
                              </div>
                              <!-- /.col-lg-12 -->
                          </div>
                          <!-- /.row -->
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          {{$subtitulo}}
                                      </div>
                                      <div class="panel-body">
                                          <div class="row">
                                              <div class="col-lg-12">
                                                  <form class="col-lg-8 col-md-6 col-sm-12">
                                                      @csrf
                                                        @include('layersliders.forms.default')
                                                      <a class="btn btn-primary btn-sm" href="/layersliders">Listar Layersliders</a>
                                                  </form>
                                                  <div data-tilt class="col-lg-4 col-md-6 col-sm-12">
                                              </div>
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

            <script>

            </script>            
@endsection