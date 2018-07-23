@extends('layouts.admin')

@section('content')
@section('title','Crear Usuarios')

		{{-- alert --}}
			@include('alerts.request')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Usuarios
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Agregar Usuarios
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
									<form method="POST" action="/usuario" enctype="multipart/form-data">
                                        @csrf
                                        @include('usuario.forms.usr')
                                          <div class="form-group">
                                            <label for="2">Password</label>
                                            <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                                          </div>
                                      <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form>
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
@stop