@extends('layouts.app')

@section('contenido')
<h2>Editar Categoria</h2>

<form action="/categorias/{{ $categoria->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre Categoria</label>
        <input type="text" id="nombre_categoria" name="nombre_categoria" class="form-control" value="{{ $categoria->nombre }}">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{ $categoria->descripcion }}">
    </div>
    <a href="/categorias" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection