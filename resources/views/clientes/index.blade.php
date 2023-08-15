@extends ('plantillabase');


@section('contenido')

<a href="clientes/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th scope="col"> id</th>      
            <th scope="col"> tipo documento</th> 
            <th scope="col"> nombre</th>
            <th scope="col"> Direccion</th>
            <th scope="col"> Telefono</th>
            <th scope="col"> Numero Documento</th>
            <th scope="col"> Acciones</th>
            
        </tr>
    </thead>
<tbody>
@foreach($clientes as $clientes)

    <tr>
        
        <td>{{$clientes->id}}</td>
        <td>{{$clientes->tipo_id}}</td>
        <td>{{$clientes->nombre}}</td>
        <td>{{$clientes->direccion}}</td>
        <td>{{$clientes->telefono}}</td>
        <td>{{$clientes->No_Documento}}</td>
        
        
        <td>

        <form action="{{route ('clientes.destroy',$clientes->id )}}" method="POST">
            <a href="/clientes/{{$clientes->id}}/edit" class="btn btn-info"> EDITAR</a>
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