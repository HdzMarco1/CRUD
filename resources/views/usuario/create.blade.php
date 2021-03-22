@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>hola buenas me quiero morir</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <form action="/admin/settings/" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">crear</button>
            </form>
        </div>
    </div>
@stop
