@extends('layouts.admin')

@section('content')
@section('title','Editar Usuarios')

           <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Usuarios</h1>
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
                                    <form method="POST" action="/usuario/{{$user->slug}}" enctype="Multipart/form-data">
                                        {{-- editar --}}
                                        @method('PUT')
                                        @csrf
                                        @include('usuario.forms.usr')
                                        <div class="form-group">
                                            
                                            <label for="avatar">Avatar</label>
                                            <input type="file" name="avatar" id="avatar" class="">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm botonera"><i class="fa fa-save"></i></button>
                                        {{-- delete --}}
                                    </form>
                                    <form method="post" action="/usuario/{{$user->slug}}">
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