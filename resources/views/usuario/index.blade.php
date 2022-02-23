@extends('layout')

@section('title', 'Usuarios')

@section('content')
<ul>
    <li><a href="{{ route('usuario.create') }}">Crear Usuario</a></li>
</ul>
<center>
    <div class="container">
        <br><h2>Lista de usuarios</h2><br>
        <div class="container">
            <div class="row">
                @forelse($data as $dataItem)
                <div class="col-sm-3"><!--card / border-info-->
                    <div class="text-center">
                        <div class="card-body">
                            <p><a href="{{ route('usuario.show', $dataItem->id) }}">{{ $dataItem->id }}</a></p>
                            <p><strong>Dni:</strong> {{ $dataItem->dni }}</p>
                            <h6 class="card-title withoutMargin">{{ $dataItem->nombre }} {{ $dataItem->apellidos }}</h6>
                            <p>{{ $dataItem->email }}</p>
                            <p class="withoutMargin">{{ $dataItem->direccion }}</p>
                            <p>{{ $dataItem->telefono }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</center>
@endsection