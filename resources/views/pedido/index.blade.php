@extends ('plantillabase');


@section('contenido')

<a href="pedidos/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th scope="col"> id</th>           
            <th scope="col"> nombre</th>
            <th scope="col"> producto</th>
            <th scope="col"> cantidad</th>
            <th scope="col"> precio</th>
            <th scope="col"> fecha</th>
            <th scope="col"> Acciones</th>
        </tr>
    </thead>
<tbody>
    @foreach($pedidos as $pedido)
    <tr>
        <td>{{$pedido->id }}</td>
        <td>{{$pedido->nombre }}</td>
        <td>{{$pedido->producto }}</td>
        <td>{{$pedido->cantidad}}</td>
        <td>{{$pedido->precio}}</td>
        <td>{{$pedido->fecha}}</td>
    
        <td>

        <form action="{{route ('pedidos.destroy',$pedido->id )}}" method="POST">
            <a href="/pedidos/{{$pedido->id}}/edit" class="btn btn-info"> EDITAR</a>
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

