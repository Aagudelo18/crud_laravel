@extends ('plantillabase');


@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/clientes" method="POST">
@csrf
<div class="form-group">
    <label for="tipo_documento"->Tipo de documento</label>
    <select class="tipo_id" name="tipo_id" requerid>
        @foreach ($tipo_documentos as $tipo_documento)
        <option value="{{$tipo_documento->id}}">{{$tipo_documento->nombre_Tipo}}</option>
        @endforeach
    </select>
</div>         

    <div class="mb-3">
        <label for="" class="from-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="from-label"> direccion</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">telefono</label>
        <input id="telefono" name="telefono" type="tex" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="from-label"> Numero Documento</label>
        <input id="No_Documento" name="No_Documento" type="text" class="form-control" tabindex="4">
    </div>
    
   
    <a href="/clientes" class="btn btn-secondary" tabindex="5">CANCELAR</a>
    <button type="submit" class="btn btn-primary" tabindex="6"> GUARDAR</button>

</form>
@endsection