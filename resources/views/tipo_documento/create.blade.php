@extends ('plantillabase');


@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/tipo_documento" method="POST">
@csrf

    <div class="mb-3">
        <label for="" class="from-label">Tipo</label>
        <input id="nombre_Tipo" name="nombre_Tipo" type="text" class="form-control" tabindex="1">
    
    
   
    <a href="/tipo_documento" class="btn btn-secondary" tabindex="5">CANCELAR</a>
    <button type="submit" class="btn btn-primary" tabindex="6"> GUARDAR</button>

</form>
@endsection