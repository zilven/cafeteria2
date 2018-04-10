    @extends('layouts.default')
    @section('content')
    <h1>Nueva comida</h1>
    <form method="POST" action="{{ route('comidas.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="form-label">Nombre:</label>
            <input class="form-control" type="text" name="txtNombre">
        </div>
        <div class="form-group">
        <label class="form-label">Precio:</label>
        <input class="form-control" type="text" name="txtPrecio">
        </div>
        <div class="form-group">
        <label class="form-label">Descripcion:</label>
        <input class="form-control" type="text" name="txtDescripcion">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Agregar comida</button>
        </div>
    </form>

    @endsection