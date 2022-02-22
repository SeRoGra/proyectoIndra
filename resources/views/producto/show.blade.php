@extends('layout')

@section('title', 'Productos')

@section('content')
    <ul>
        <li><a href="{{ route('producto.index') }}">Regresar</a></li>
    </ul>
    <center>

            <br><h2>Modificar/Eliminar productos</h2><br>

                <div class="container">
                    <div class="text-center">
                        <div class="card-body">
                            <p>{{ $data->id }}</a></p>
                            <h5 class="card-title">{{ $data->nombre }}</h5>
                            <p>{{ $data->description }}</p>
                        </div>
                    </div>
                </div>
                <a href="{{ route('producto.edit', $data->id) }}" class="btn btn-primary">Modificar</a>
                <button class="btn btn-light">Eliminar</button>

    </center>
@endsection