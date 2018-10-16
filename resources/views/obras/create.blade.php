@extends('layouts.admin')
@section('title','Crear Obras')

@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        {{$titulo}}
                    </h1>
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
                                    <form method="POST" action="/obras_" enctype="multipart/form-data">
                                        @csrf
                                        @include('obras.forms.default')

                                      <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                                      <a  class="btn btn-sm btn-success " href="/obras_">Volver</a>
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