@extends('layouts.master')
@section('content')
<div class="container">
  <h1>Nuevo Celular</h1>
  @include('products.form',['product'=>$product,'url'=>'/products','method'=>'POST'])
</div>
@stop