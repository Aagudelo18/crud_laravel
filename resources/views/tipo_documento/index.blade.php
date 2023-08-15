@extends ('plantillabase');


@section('contenido')

<a href="tipo_documento/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th scope="col"> id</th>           
            <th scope="col"> Tipo</th>
            <th scope="col"> Acciones</th>
            
        </tr>
    </thead>
<tbody>
@foreach($tipo_documento as $tipo_documento)
    <tr>
        <td>{{$tipo_documento->id}}</td>
        <td>{{$tipo_documento->nombre_Tipo}}</td>
        
        
        
        <td>

        <form action="{{route ('tipo_documento.destroy',$tipo_documento->id )}}" method="POST">
            <a href="/tipo_documento/{{$tipo_documento->id}}/edit" class="btn btn-info"> EDITAR</a>
            @csrf
            @method ('DELETE')
            <button type="submit" class="btn btn-danger">BORRAR</button>
            </form>
        </td>

    </tr>
    @endforeach
</tbody>

</table>
@endsection