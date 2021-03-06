@extends('layout')

@section('title', 'Productos')

@section('content')
<ul>
    <li><a href="{{ route('producto.show', $data->id) }}">Regresar</a></li>
</ul>
<center>
    <form action="{{ route('producto.update') }}" method="POST">
        <br><h2>Modificar productos</h2>
        <div class="container">
            <div class="text-center">
                <div class="card-body">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <label for="nombre">Nombre: </label><br>
                    <input type="text" name="nombre" value="{{ $data->nombre }}" size="100"><br>
                    {!! $errors->first('nombre', '<small style="color: red;">:message</small>') !!}
                    <br><br>
                    <label for="description">Descripción:</label><br>
                    <textarea name="description" cols="100" rows="6">{{ $data->description }}</textarea><br>
                    {!! $errors->first('description', '<small style="color: red;">:message</small>') !!}
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
</center>
@endsection