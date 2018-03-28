@extends('layouts.app')
@section('content')
	<div class="row">
		<h1>Editando el Rol : {{ $rol->name }}</h1>
		{{-- dd($rol->permissions) --}}
		<div class="col-12">
			<form action="{{ url('role/link/'.$rol->id) }}" method="post" accept-charset="utf-8">
				{{ csrf_field() }}
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Habilitado</th>
							<th>Descripcion</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($permissions as $permission)
							<tr>
								<td>{{ $permission->name }}</td>
								<td>
									<input type="checkbox" name="permissions[]" value="{{ $permission->id }}" placeholder=""
									@if ($rol->hasPermissionTo($permission->name))
										checked="checked" 
									@endif
									>
								</td>
								<td>----</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<button type="submmit" class="btn btn-success">Enviar</button>
			</form>
		</div>
	</div>
@endsection