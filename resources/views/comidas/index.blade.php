@extends('layouts.default')
@section('content')

    <h1>Comidas</h1>
    @if($exito != null)
        @if($exito == 1)
            <p>Se ha agregado una comida</p>
        @else
            <p>No se ha podido agregar comida</p>
        @endif
    @endif

        @if($borrado != null)
        @if($borrado == 1)
            <p>Se ha borrado una comida</p>
        @else
            <p>No se ha podido borrar una comida</p>
        @endif
    @endif
    <a href="{{route('comidas.create')}}">
        <button>Agregar comida</button>
    </a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comidas as $comida)
                <tr>
                    <td>{{$comida->nombre}}</td>
                    <td>{{$comida->precio}}</td>
                    <td>
                        <a href="{{route('comidas.edit',$comida->id)}}"
                        <button>Editar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection