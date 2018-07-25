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
                            Ver Usuario
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                        @csrf

                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Nick</label>
                                               <input type="text" class="form-control" id="exampleInputEmail1" name="name"aria-describedby="emailHelp" placeholder="Enter nick"  value="{{ $user->name }}" disabled>
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"aria-describedby="emailHelp" placeholder="Enter email" value="{{ $user->email }}" disabled>
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="{{ $user->password}}" disabled>
                                              </div>
                                        <a class="btn btn-primary" href="/usuario">Listar Usuarios</a>
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