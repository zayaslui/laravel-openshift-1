@extends('layouts.admin')

@section('content')
@section('title','Ver Usuarios')

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
                                    <form class="col-lg-8 col-md-6 col-sm-12">
                                        @csrf
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Nick</label>
                                               <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter nick"  value="{{ $user->name }}" disabled>
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" name="email"aria-describedby="emailHelp" placeholder="Enter email" value="{{ $user->email }}" disabled>
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                              </div>

                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Password</label>
                                                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="{{ $user->password}}" disabled>
                                                </div>
                                              <div>

                                              </div>
                                        <a class="btn btn-primary btn-sm" href="/usuario">Listar Usuarios</a>
                                    </form>
                                    <div data-tilt class="col-lg-4 col-md-6 col-sm-12">
                                      <figure class="figure  avatar">
                                        @if($user -> avatar)
                                        <img src="/images/avatar/{{ $user -> avatar }}" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                                        @else
                                        <img src="https://www.google.com.py/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." style="height: 50px">                                        
                                        @endif
                                        <figcaption class="figure-caption"></figcaption>
                                      </figure>
                                    </div>
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
                $('.js-tilt').tilt({
                    scale: 1.2
                })
            </script>            
@endsection