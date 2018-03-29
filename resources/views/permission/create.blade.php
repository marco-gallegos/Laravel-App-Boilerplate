@extends('layouts.app')

@section('content')
	<div class="row">
		<div class='col-12'>
			<form action="{{ url('permission') }}" method="POST" accept-charset="utf-8" class="form">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name" class="form-control-label">Nombre</label>
					<input type="text" name="name" placeholder="" class="form-control">
				</div>
				<div class="form-group">
					<button type="submmit" class="btn btn-success form-control">Enviar</button>
				</div>
			</form>
		</div>
	</div>
@endsection