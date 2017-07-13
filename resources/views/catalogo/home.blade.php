@extends('layouts.master')
@push('styles')
<style >
  .producto_marco:hover{
    background-color: rgba(0,0,0,0.1);
  }
  #filtros-container{
    padding: 10px;
  }
  .modal-dialog2{
    width: 70%;
    margin: auto;
  }
  .zoom{
    transition: width 2s, height 2s, transform 2s;
    -moz-transition: width 2s, height 2s, -moz-transform 2s;
    -webkit-transition: width 2s, height 2s, -webkit-transform 2s;
    -o-transition: width 2s, height 2s,-o-transform 2s;
  }
  .zoom:hover{
    transform : scale(1);
    -moz-transform : scale(1);      /* Firefox */
    -webkit-transform : scale(1.1);   /* Chrome - Safari */
    -o-transform : scale(1);        /* Opera */
  }
  .texto_boton{
    font-family: 'Open Sans', sans-serif;
  }
</style>
@endpush
@section('content')
<div class="row" ng-app="Tienda" ng-controller="CatalogoController">
  <div class="col-md-3">
    @include('catalogo.sidebar')
  </div>
  <div class="col-md-9 ">
    @foreach ($products as $product)
      @include('catalogo.product')
    @endforeach
    @foreach ($products as $product)
      @include('catalogo.detalle')
    @endforeach
  </div>
</div>
@stop