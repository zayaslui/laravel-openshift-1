@extends('layouts.admin')
@section('title','Editar Obras')

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
                                    <form method="POST" action="/obras_/{{$obras->id}}" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        @include('obras.forms.default')
                                            
                                        <div class="form-group">
                                            <label for="imagen">Imagen</label>
                                            <input type="file" name="imagen" id="imagen">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm botonera"><i class="fa fa-save"></i></button>
                                    </form>
                                    <form method="post" action="/obras_/{{$obras->id}}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger delete botonera"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <form>
                                        <a  class="btn btn-sm btn-success botonera" href="/obras_"><i class="fa fa-undo"></i></a>
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