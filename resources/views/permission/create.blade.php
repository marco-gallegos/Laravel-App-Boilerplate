@extends('layouts.app')
@section('content')
	<div class='col-12'>
	<form action="{{ url('permission') }}" method="POST" accept-charset="utf-8">
		{{ csrf_field() }}
		<div class="from-group">
			<label for="name" class="form-control-label">Nombre</label>
			<input type="text" name="name" placeholder="" class="form-control">
		</div>
		<div class="from-group">
			<button type="submmit" class="btn btn-success">Enviar</button>
		</div>
	</form>
	</div>
@endsection