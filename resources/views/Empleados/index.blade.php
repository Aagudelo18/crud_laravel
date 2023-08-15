@extends ('plantillabase');


@section('contenido')

<a href="Empleados/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th scope="col"> id</th>      
            <th scope="col"> tipo documento</th> 
            <th scope="col"> nombre</th>
            <th scope="col"> Numero Documento</th>
            <th scope="col"> cargo</th>
            <th scope="col"> Acciones</th>
            
        </tr>
    </thead>
<tbody>
@foreach($empleados as $empleado)

    <tr>
        
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->tipo_id}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->cedula}}</td>
        <td>{{$empleado->cargo}}</td>
        
        
        <td>

        <form action="{{route ('Empleados.destroy',$empleado->id )}}" method="POST">
            <a href="/Empleados/{{$empleado->id}}/edit" class="btn btn-info"> EDITAR</a>
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