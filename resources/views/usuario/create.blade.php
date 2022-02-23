@extends('layout')

@section('title', 'Usuarios')

@section('content')
<ul>
    <li><a href="{{ route('usuario.index') }}">Regresar</a></li>
</ul>
<center>
    <br><h2>Crear usuarios</h2><br>
    <form action="{{ route('usuario.store') }}" method="POST">
        <div class="container" style="width: 40%;">
            <div class="text-center">
                    @csrf
                    <label for="nombre">Nombre:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                    </div>
                    {!! $errors->first('nombre', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="apellidos">Apellidos:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}">
                    </div>
                    {!! $errors->first('apellidos', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="dni">Dni:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="number" class="form-control" name="dni" value="{{ old('dni') }}">
                    </div>
                    {!! $errors->first('dni', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="direccion">Dirección:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">
                    </div>
                    {!! $errors->first('direccion', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="telefono">Telefono:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="number" class="form-control" name="telefono" value="{{ old('telefono') }}">
                    </div>
                    {!! $errors->first('telefono', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="email">Email:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    {!! $errors->first('email', '<small style="color: red;">:message</small><br>') !!}
                    <br>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form><br><br>
    </center>
    @endsection