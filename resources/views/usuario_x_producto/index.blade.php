@extends('layout')

@section('title', 'Asociar Productos')

@section('content')
<ul>
    <li><a href="{{ route('usuario.show', $user_id) }}">Regresar</a></li>
</ul>
<center>
    <div class="container">
        <br><h2>Asociar productos</h2><br>
        <form action="{{ route('asociados.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user_id }}">
            <div class="form-group">
                <select name="producto" class="form-control">
                    <option value="">--Seleccione--</option>
                    @forelse($data as $dataItem)
                    <option value="{{ $dataItem->id }}">{{ $dataItem->nombre }}</option>
                    @endforeach
                </select>
                {!! $errors->first('producto', '<small style="color: red;">:message</small><br>') !!}
            </div><br>
            <button type="submit" class="btn btn-primary">Asociar producto</button>
        </form>
    </div>
    <br><br>
    <div class="container" style="width: 50%;">
        <h6>Productos asociados</h6>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">nombre</th>
              <th scope="col"></th>
          </tr>
      </thead>
      <tbody>
        @forelse($userProduct as $userProductItem)
        <tr>
          <th scope="row">{{ $userProductItem->user_products_id }}</th>
          <td>{{ $userProductItem->nombre }}</td>
          <td>
            <form action="{{ route('asociados.destroy', ['id' => $userProductItem->user_products_id, 'user_id' => $user_id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-light">Eliminar</button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</center>
@endsection