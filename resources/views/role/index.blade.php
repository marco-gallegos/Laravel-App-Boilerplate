@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-10 table-responsive">
			<table class="table table-sm table-striped table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Permisos</th>
						<th>Edita</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($roles as $rol)
						<tr>
							<td>{{ $rol->name }}</td>
							<td><a href="{{ url('role/permissions/'.$rol->id) }}" class="btn btn-sm btn-primary">Vincular</a></td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="col-1">
			<div class="btn-group btn-group-vertical">
				<a href="{{ url('role/create') }}" class="btn btn-primary">Agregar</a>
			</div>
		</div>
	</div>
@endsection