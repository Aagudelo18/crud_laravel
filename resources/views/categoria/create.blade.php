@extends('layouts.app')

@section('contenido')
<h2>Crear Categoria</h2>

<form action="/categorias" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre Categoria</label>
        <input type="text" id="nombre_categoria" name="nombre_categoria" class="form-control">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control">
    </div>
    <a href="/categorias" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection 