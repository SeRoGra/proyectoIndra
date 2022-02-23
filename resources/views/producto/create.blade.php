@extends('layout')

@section('title', 'Productos')

@section('content')
<ul>
    <li><a href="{{ route('producto.index') }}">Regresar</a></li>
</ul>
<center>
    <br><h2>Crear productos</h2><br>
    <form action="{{ route('producto.store') }}" method="POST">
        <div class="container">
            <div class="text-center">
                <div class="card-body">
                    @csrf
                    <label for="nombre">Nombre: </label><br>
                    <input type="text" name="nombre" size="100" value="{{ old('nombre') }}"><br>
                    {!! $errors->first('nombre', '<small style="color: red;">:message</small>') !!}
                    <br><br>
                    <label for="description">Descripción:</label><br>
                    <textarea name="description" cols="100" rows="6">{{ old('description') }}</textarea><br>
                    {!! $errors->first('description', '<small style="color: red;">:message</small>') !!}
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</center>
@endsection