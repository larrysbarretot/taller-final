@extends('layouts.master')
@section('content')
<div class="container">
  <h1>Editar Celular</h1>
  @include('products.form',['product'=>$product,'url'=>'/products/'.$product->id,'method'=>'PATCH'])
</div>
@stop