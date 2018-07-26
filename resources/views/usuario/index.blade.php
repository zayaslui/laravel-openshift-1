@extends('layouts.admin')


@if (session('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>{{ session('message') }}</strong>
	</div>
@endif

@section('content')
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operaciones</th>
			</thead>
			@foreach ($usuarios as $user)
				<tbody>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						{{-- <a class="btn btn-small btn-info" href="{{ URL::to('usuario/' . $user->id . '/edit') }}">Edit this User</a> --}}
						<a class="btn btn-small btn-info" href="{{ URL::to('usuario/' . $user->slug . '/edit') }}">Edit this User</a>
						<a class="btn btn-small btn-info" href="{{ URL::to('usuario/' . $user->slug) }}">show this User</a>						
					</td>
				</tbody>
			@endforeach
		</table>

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
						@if (session('create'))
							toastr["success"]("Se ha creado exitosamente el registro","Usuarios");
						@endif
						@if (session('destroy'))
							toastr["error"]("Se ha eliminado exitosamente el registro","Usuarios");
						@endif
                })
            </script>
@stop