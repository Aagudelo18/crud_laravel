@extends('plantillabase');

@section('contenido')
<h2>Editar Producto</h2>

<form action="/productos/{{ $producto->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre Producto</label>
        <input type="text" id="nombre_producto" name="nombre_producto" class="form-control" value="{{ $producto->nombre }}">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Categoria</label>
        <select name="categoria" id="categoria">
        @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{ $producto->descripcion }}">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Precio</label>
        <input type="text" id="precio" name="precio" class="form-control" value="{{ $producto->precio }}">
    </div>
    <a href="/productos" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection