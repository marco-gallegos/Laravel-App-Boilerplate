@extends('layouts.app')

@section('content')
	@php
		use Carbon\Carbon;
		Carbon::setLocale("es");
	@endphp
	<div class="container">
		<div class="row">
			<div class="col-10">
				<table class="table table-condensed table-striped table-mini">
					<caption>Permisos</caption>
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Date/Time Added</th>
							<th>User Roles</th>
							<th>User Permissions</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							@php
								$fecha = new Carbon($user->created_at);
								$fecha = $fecha->isoFormat("LLLL");
							@endphp
							<tr>
								<td data-label="name" >{{ $user->name }}</td>
								<td data-label="email" >{{ $user->email }}</td>
								<td data-label="created" >{{ $fecha }}</td>
								<td data-label="roles" ><a href="{{ url('user/role/'.$user->id) }}" class="btn btn-sm btn-warning">Modificar</a></td>
								<td data-label="permissions" ><a href="{{ url('user/permission/'.$user->id) }}" class="btn btn-sm btn-warning">Modificar</a></td>
								<td data-label="Acciones" >
									<a href='{{ url("user/{$user->id}") }}' class="btn btn-primary" >
										<i class="fa fa-edit"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<div class="col-2">
				<div class="col-12">
					@can('admin role')
						<a href="{{ url('role') }}" class="btn btn-sm btn-primary">Admin Roles</a><br>
					@endcan
				</div>
				<div class="btn-group btn-group-vertical">
					<a href="{{ url('register') }}" class="btn btn-sm btn-primary">Crear un nuevo Usuario</a><br>
					<a href="{{ url('role/create') }}" class="btn btn-sm btn-primary">Crear un nuevo Rol</a><br>			
					<a href="{{ url('permission/create') }}" class="btn btn-sm btn-primary">Crear un nuevo Permiso</a>
				</div>
			</div>
		</div>	
	</div>
@endsection