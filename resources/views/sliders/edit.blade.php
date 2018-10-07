@extends('layouts.admin')

@section('content')
@section('title','Editar Sliders')

           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sliders</h1>
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
                                    <form method="POST" action="/sliders/{{$slider->id}}" enctype="Multipart/form-data">
                                        {{-- editar --}}
                                        @method('PUT')
                                        @csrf
                                        @include('sliders.forms.default')
                                        <button type="submit" class="btn btn-primary btn-sm botonera"><i class="fa fa-save"></i></button>
                                        {{-- delete --}}
                                    </form>
                                    <form method="post" action="/sliders/{{$slider->id}}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger  botonera delete"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <form>
                                        <a  class="btn btn-sm btn-success  botonera" href="/usuario"><i class="fa fa-undo"></i></a>
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