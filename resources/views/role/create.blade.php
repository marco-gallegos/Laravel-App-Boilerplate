@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-12">
			<form action="{{ url('role') }}" method="POST" accept-charset="utf-8" class="form">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name" class="form-control-label">Nommbre</label>
					<input name="name" type="text" class="form-control">
				</div>
				<div class="form-group">
					<button type="submmit" class="btn btn-success">Enviar</button>
				</div>
			</form>
		</div>
	</div>
@endsection