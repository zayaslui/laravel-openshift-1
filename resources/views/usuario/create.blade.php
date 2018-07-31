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
                            {{$titulo}}
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
									<form method="POST" action="/usuario" enctype="multipart/form-data">
                                        @csrf
                                        @include('usuario.forms.usr')
                                        <div class="form-group">
                                            <label for="avatar">Avatar</label>
                                            <input type="file" name="avatar" id="avatar">
                                        </div>
                                      <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                                      <a  class="btn btn-sm btn-success " href="/usuario">Volver</a>
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