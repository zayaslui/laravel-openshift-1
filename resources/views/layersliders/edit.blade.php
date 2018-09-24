@extends('layouts.admin')

@section('content')
@section('title','Editar Usuarios')

           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LayerSlider</h1>
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
                                <div class="col-lg-12" style="padding-top: 2%;">
                                    <form method="POST" action="/layersliders/{{$layerslider->id}}">
                                        {{-- editar --}}
                                        @method('PUT')
                                        @csrf
                                        @include('layersliders.forms.default')
                                         <div class="form-group">
                                            <label for="avatar">Operaciones</label>
                                            {{-- <input type="file" name="avatar" id="avatar"> --}}
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm botonera"><i class="fa fa-save"></i></button>
                                        {{-- delete --}}
                                    </form>
                                    <form method="post" action="/layersliders/{{$layerslider->id}}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger  botonera delete"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <form>
                                        <a  class="btn btn-sm btn-success  botonera" href="/layersliders"><i class="fa fa-undo"></i></a>
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

@endsection