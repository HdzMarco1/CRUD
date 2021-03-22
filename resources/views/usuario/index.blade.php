@extends('adminlte::page')

@section('title', 'index')

@section('content_header')
    <h1 class="m-0 text-dark">CRUD</h1>
    <br>
     <a href="/admin/settings/create"><button type="button" class="btn btn-success float-right">Agregar</button></a>
@stop

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <form action="{{route('id.destroy', $user->id)}}" method="POST">
                    <a href="/admin/settings/{{$user->id}}/edit"><button type="button" class="btn btn-primary">Editar</button></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>  
    </div>
@stop


