@extends('layouts.default')
@section('content')
    <h1>Editar comida</h1>
    <a href="{{route('comidas.index')}}">Volver a comidas</a>
    @if($exito)
        <p>La comida se actualizo</p>
    @endif
    <form method="POST" action="{{ route('comidas.update',array('comidas'=>$comida->id)) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label class="form-label">Nombre:</label>
            <input class="form-control" type="text" name="txtNombre" value="{{$comida->nombre}}">
        </div>
        <div class="form-group">
            <label class="form-label">Precio:</label>
            <input class="form-control" type="text" name="txtPrecio" value="{{$comida->precio}}">
        </div>
        <div class="form-group">
            <label class="form-label">Descripcion:</label>
            <input class="form-control" type="text" name="txtDescripcion" value="{{$comida->descripcion}}">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Actualizar comida</button>
        </div>
    </form>

    <form method="POST" action="{{route('comidas.destroy', array('comidas'=>$comida->id))}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-danger" type="submit">Borrar comida</button>
    </form>
@endsection