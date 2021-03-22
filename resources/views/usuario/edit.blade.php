@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{route('id.update', $user->id)}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="{{$user->email}}">
            </div>
            <button type="submit" class="btn btn-primary">actualizar</button>
            <a href="/admin/settings"><button type="button" class="btn btn-danger">cancelar</button></a>
            </form>
        </div>
    </div>
@stop