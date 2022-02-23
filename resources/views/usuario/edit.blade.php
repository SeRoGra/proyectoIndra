@extends('layout')

@section('title', 'Productos')

@section('content')
<ul>
    <li><a href="{{ route('usuario.show', $data->id) }}">Regresar</a></li>
</ul>
<center>
    <form action="{{ route('usuario.update') }}" method="POST">
        <br><h2>Modificar usuarios</h2>
        <div class="container" style="width: 40%;">
            <div class="text-center">
                <div class="card-body">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <label for="nombre">Nombre:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="text" class="form-control" name="nombre" value="{{ $data->nombre }}">
                    </div>
                    {!! $errors->first('nombre', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="apellidos">Apellidos:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="text" class="form-control" name="apellidos" value="{{ $data->apellidos }}">
                    </div>
                    {!! $errors->first('apellidos', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="dni">Dni:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="number" class="form-control" name="dni" value="{{ $data->dni }}">
                    </div>
                    {!! $errors->first('dni', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="direccion">Dirección:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="text" class="form-control" name="direccion" value="{{ $data->direccion }}">
                    </div>
                    {!! $errors->first('direccion', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="telefono">Telefono:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="number" class="form-control" name="telefono" value="{{ $data->telefono }}">
                    </div>
                    {!! $errors->first('telefono', '<small style="color: red;">:message</small><br>') !!}
                    <br>

                    <label for="email">Email:</label>
                    <div class="input-group mb-3 withoutMargin">
                        <input type="email" class="form-control" name="email" value="{{ $data->email }}">
                    </div>
                    {!! $errors->first('email', '<small style="color: red;">:message</small><br>') !!}
                    <br>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
</center>
@endsection