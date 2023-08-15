@extends('plantillabase');

@section('contenido')
<h2>Crear Producto</h2>

<form action="/productos" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre Producto</label>
        <input type="text" id="nombre_producto" name="nombre_producto" class="form-control">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Categoria</label>
        <select name="categoria">
        @foreach ($categorias as $categoria)
        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Precio</label>
        <input type="text" id="precio" name="precio" class="form-control">
    </div>
    <a href="/productos" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection 