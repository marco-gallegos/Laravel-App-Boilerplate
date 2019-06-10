@extends('layouts.app')

@section('content')
    <div class="row">
        <h2>Editar : {{ $user->name }}</h2>
    </div>
    <div class="row py-4">
        <div class="col-12">
            <form action='{{ url("user/{$user->id}") }}' method="post">
                @method("put")
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="">Name</label>
                        <input type="text" >
                    </div>
                    <div class="col-12"></div>
                    <div class="col-12"></div>
                    <div class="col-12"></div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-success" >Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection