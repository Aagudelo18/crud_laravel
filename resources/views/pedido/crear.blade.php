@extends ('plantillabase');


@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/pedidos" method="POST">
@csrf
    <div class="mb-3">
        <label for="" class="from-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="from-label"> Producto</label>
        <input id="producto" name="producto" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Precio</label>
        <input id="precio" name="precio" type="number"step="any" value="0.00"  class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Fecha</label>
        <input id="fecha" name="fecha" type="date" class="form-control" tabindex="4">
    </div>
   
    <a href="/pedidos" class="btn btn-secondary" tabindex="5">CANCELAR</a>
    <button type="submit" class="btn btn-primary" tabindex="6"> GUARDAR</button>

</form>
@endsection