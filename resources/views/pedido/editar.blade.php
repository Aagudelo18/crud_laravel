@extends ('plantillabase');


@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/pedidos/{{$pedido->id}}" method="POST">
    @csrf
    @method ('PUT')

    <div class="mb-3">
        <label for="" class="from-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$pedido->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="from-label"> Producto</label>
        <input id="producto" name="producto" type="text" class="form-control" value="{{$pedido->producto}}">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$pedido->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Precio</label>
        <input id="precio" name="precio" type="number" class="form-control" value="{{$pedido->precio}}">
    </div>
    <div class="mb-3">
        <label for="" class="from-label">Fecha</label>
        <input id="fecha" name="fecha" type="date" class="form-control" value="{{$pedido->fecha}}">
    </div>
   
    <a href="/pedidos" class="btn btn-secondary" >cancelar</a>
    <button class="btn btn-primary">GUARDAR</button>
  

</form>

@endsection