@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>hola buenas me quiero morir</h1>
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
            </form>
        </div>
    </div>
@stop