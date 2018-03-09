@extends('layouts.app')

@section('content')
	<table>
		<caption>Permisos</caption>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>header</th>
				<th>header</th>
				<th>header</th>
				<th>header</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($permissions as $permission)
				<tr>
					<td>{{ $permission->id }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{ url('/user/create') }}" title="">Crear un nuevo permiso</a>
@endsection