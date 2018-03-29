@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-10">
			<h1>Roles de {{ $user->name }}</h1>
			<form action="{{ url('user/linkrole/'.$user->id) }}" method="post" accept-charset="utf-8">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Permiso</th>
							<th>Estado</th>
							<th>Descripcion</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($roles as $role)
							<tr>
								<td>{{ $role->name }}</td>
								<td>
									<input type="checkbox" name="roles[]" value="{{ $role->id }}"
									@if ($user->hasRole($role->name))
										checked="checked"
									@endif
									>
								</td>
								<td>----</td>
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