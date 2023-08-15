@extends ('plantillabase');


@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/Empleados/{{$empleados->id}}" method="POST">
    @csrf
    @method ("PUT")
    
    <div class="mb-3">
        <label for="" class="from-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$empleados->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="from-label"> Numero Documento</label>
        <input id="cedula" name="cedula" type="text" class="form-control" value="{{$empleados->cedula}}">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Cargo</label>
        <input id="cargo" name="cargo" type="text" class="form-control" value="{{$empleados->cargo}}">
    </div>
    
   
    <a href="/Empleados" class="btn btn-secondary" >cancelar</a>
    <button class="btn btn-primary">GUARDAR</button>
  

</form>

@endsection