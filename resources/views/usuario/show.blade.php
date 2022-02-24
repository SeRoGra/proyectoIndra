@extends('layout')

@section('title', 'Usuarios')

@section('content')
<ul>
    <li><a href="{{ route('usuario.index') }}">Regresar</a></li>
</ul>
<center>
    <div class="container">
        <br><h2>Modificar/Eliminar usuarios</h2><br>
        <div class="container">
            <div class="text-center">
                <div class="card-body">
                    <p>{{ $data->id }}</p>
                    <p><strong>Dni:</strong> {{ $data->dni }}</p>
                    <h6 class="card-title withoutMargin">{{ $data->nombre }} {{ $data->apellidos }}</h6>
                    <p>{{ $data->email }}</p>
                    <p class="withoutMargin">{{ $data->direccion }}</p>
                    <p>{{ $data->telefono }}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('usuario.edit', $data->id) }}" class="btn btn-primary">Modificar</a>
    <form action="{{ route('usuario.destroy', ['id' => $data->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-light">Eliminar</button>
    </form>
</center>
<ul>
    <li><a href="{{ route('asociados.index', $data->id) }}">Asociar producto</a></li>
</ul>
@endsection