@extends('layouts.master')
@section('content')
<!--Celulares-->
<section id="celulares-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-3">
        @include('catalogo.sidebar')
      </div>
      <div class="col-xs-12 col-md-9">
        <div class="row listado-celulares">
          <div class="col-xs-12 col-sm-10">
            <div class="card">
              @if($product->extension)
              <img src='{{url("/products/images/$product->id.$product->extension")}}' class="card-img-top img-fluid">
              @endif
              <div class="card-block">
                <div class="inblock">
                  <h3 class="card-title tituloprod text-center">{{$product->title}} </h3>
                  <h2 class="precioprod text-center"><strong>s/{{$product->pricing}}</strong></h2>
                </div>
                <p><strong>Marca:  </strong>{{$product->marca}}</p>
                <p><strong>Gama:  </strong>{{$product->gama}}</p>
                <p><strong>Conectividad:  </strong>{{$product->conectividad}}</p>
                <p><strong>Descripcion</strong></p>
                <p>{{$product->description}}</p>
                <br>
                <p class="text-xs-center">
                  @include("in_shopping_carts.form",["product"=>$product])
                </p>
                @if(Auth::check() && $product->user_id == Auth::user()->id)
                <div class="text-xs-center">
                  <a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
                  @include('products.delete',['product'=>$product])
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Celulares-->
@stop