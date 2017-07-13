@extends('layouts.master')
@section('content')
<div class="container">
  <h1 class="ver">Lista de Celulares</h1>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>ID</td>
          <td>Titulo</td>
          <td>Marca</td>
          <td>Gama</td>
          <td>Conectividad</td>
          <td>Descripcion</td>
          <td>Precio</td>
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->title }}</td>
          <td>{{ $product->marca }}</td>
          <td>{{ $product->gama }}</td>
          <td>{{ $product->conectividad }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->pricing }}</td>
          <td>
            <a style="color: #E57000" class="ver" href='{{url("/products/$product->id")}}'>Ver</a>
            </br>
            <a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
            @include('products.delete',['product'=>$product])
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <br>
</div>
<div class="floating">
  <a href="{{url('/products/create')}}" class="btn btn-primmary btnplus">
    <i class="fa fa-plus">Agregar</i>
  </a>
</div>  
@stop