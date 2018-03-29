@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<table class="table table-responsive table-condensed table-striped">
					<caption>Permisos</caption>
					<thead>
						<tr>
							<th>Name</th>
			                <th>Email</th>
			                <th>Date/Time Added</th>
			                <th>User Roles</th>
			                <th>User Permissions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
						{{-- dd($user->getAllPermissions()) --}}
							<tr>
								<td>{{ $user->name }}</td>
			                    <td>{{ $user->email }}</td>
			                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
			                    <td><a href="{{ url('user/role/'.$user->id) }}" class="btn btn-sm btn-warning">Modificar</a></td>
			                    <td><a href="{{ url('user/permission/'.$user->id) }}" class="btn btn-sm btn-warning">Modificar</a></td>
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