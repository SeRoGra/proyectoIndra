@extends('layout')

@section('title', 'Home')

@section('content')
    <center>
        <div class="container">
            <br><br>
            <h2>Bienvenido a Home</h2>
            <p class="withoutMargin">Se realizara el consumo del Api: {{ config('app.base_uri') }} </p>
            <small>Metodo GET ruta /products</small><br>


            <p>Para cargar los datos en la BD de click <a href="{{ @route('carga.index') }}">aquí</a></p>
        </div>
    </center>
@endsection