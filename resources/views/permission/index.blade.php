@extends('layouts.app')

@section('title', '| Permission')

@section('content')
<div class="row">
    <div class="col-10">
        <h1><i class="fa fa-key"></i>Available Permissions</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>Permission</th>
                        <th>Actualizar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td> 
                    <td><a href='{{ url("permission/{$permission->id}/edit") }}' class="btn btn-warning">Actualizar</a></td>
                        <td><a href="" class="btn btn-warning">Eliminar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-2">
        <div class="btn-group btn-group-vertical">
            <a href="{{ URL('permission/create') }}" class="btn btn-success">Add Permission</a>
        </div>
    </div>
</div>

@endsection