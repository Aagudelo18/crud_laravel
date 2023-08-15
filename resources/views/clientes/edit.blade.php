@extends ('plantillabase');


@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/clientes/{{$clientes->id}}" method="POST">
    @csrf
    @method ("PUT")
    
    <div class="mb-3">
        <label for="" class="from-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$clientes->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="from-label"> direccion</label>
        <input id="direccion" name="direccion" type="text" class="form-control" value="{{$clientes->direccion}}">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" value="{{$clientes->telefono}}">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Numero Documento</label>
        <input id="No_Documento" name="No_Documento" type="text" class="form-control" value="{{$clientes->No_documento}}">
    </div>
   
    <a href="/Empleados" class="btn btn-secondary" >cancelar</a>
    <button class="btn btn-primary">GUARDAR</button>
  

</form>

@endsection