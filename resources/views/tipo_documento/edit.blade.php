@extends ('plantillabase');


@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/tipo_documento/{{$tipo_documento->id}}" method="POST">
    @csrf
    @method ("PUT")

    <div class="mb-3">
        <label for="" class="from-label">Tipo</label>
        <input id="nombre_Tipo" name="nombre_Tipo" type="text" class="form-control" value="{{$tipo_documento->nombre_Tipo}}">
    
    
   
    <a href="/tipo_documento" class="btn btn-secondary" >cancelar</a>
    <button class="btn btn-primary">GUARDAR</button>
  

</form>

@endsection