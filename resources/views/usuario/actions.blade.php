<form action="{{route('id.destroy', $id)}}" method="POST">
    <a href="/admin/settings/{{$id}}/edit"><button type="button" class="btn btn-primary">Editar</button></a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar</button>
                    
 </form>