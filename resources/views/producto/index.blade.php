@extends('layout')

@section('title', 'Productos')

@section('content')
    <ul>
        <li><a href="{{ route('producto.create') }}">Crear Producto</a></li>
    </ul>
    <center>
        <div class="container">
            <br><h2>Lista de productos</h2><br>
            @isset(request()->cargaProduct)
                @if(request()->cargaProduct == 1)
                    <span style="color: green">Se realizo la carga del Json exitosamente</span>
                @endif
            @endisset

            <div class="container">
                <div class="row">
                    @forelse($data as $dataItem)
                    <div class="col-sm-3"><!--card / border-info-->
                        <div class="text-center">
                            <div class="card-body">
                                <p><a href="{{ route('producto.show', $dataItem->id) }}">{{ $dataItem->id }}</a></p>
                                <h5 class="card-title">{{ $dataItem->nombre }}</h5>
                                <p>{{ $dataItem->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </center>
@endsection