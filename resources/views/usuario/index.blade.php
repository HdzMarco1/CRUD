@extends('adminlte::page')

@section('title', 'index')

@section('content_header')
    <h1 class="m-0 text-dark">CRUD</h1>
    <br>
     <a href="/admin/settings/create"><button type="button" class="btn btn-success float-right">Agregar</button></a>
@stop

@section('content')
    <div class="container">
        <table class="table table-bordered data-table">
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

            </tbody>
        </table>  
    </div>

    @push('scripts')
        <script>
            $(function(){
                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('usuario.index')}}",

                    columns: [
                        { data: 'id', name:'id'},
                        { data: 'name', name:'name'},
                        { data: 'email', name:'email'},
                        { data: 'password', name:'password'},
                        { data: 'action', name:'action', orderable: false,  searchable: false},

                    ]
                });

            });
        </script>

    @endpush
@stop


