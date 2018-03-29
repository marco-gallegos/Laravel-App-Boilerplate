@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-10">
			<h1>Permisos de {{ $user->name }}</h1>
			<form action="{{ url('user/linkpermission/'.$user->id) }}" method="post" accept-charset="utf-8">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Permiso</th>
							<th>Estado</th>
							<th>Descripcion</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($permissions as $permission)
							<tr>
								<td>{{ $permission->name }}</td>
								<td>
									<input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
									@if ($user->hasPermissionTo($permission->id))
										checked="checked"
									@endif
									>
								</td>
								<td></td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ csrf_field() }}
				<button type="submmit" class="btn btn-success col-12" confi>Guardar</button>
			</form>
		</div>
	</div>
@endsection