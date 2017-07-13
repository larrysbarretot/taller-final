<div class="col-xs-12 col-sm-6 col-lg-4">
  <div class="panel panel-default producto_marco ">
    <div  class="panel-body">
      @if($product->extension)
      <img  src='{{url("/products/images/$product->id.$product->extension")}}' class="img-responsive">
      @endif
      <h3 class="text-center text-warning">{{$product->title}}</h3>
      <h2 class="text-center text-danger"><strong>s/{{$product->pricing}}</strong></h2>      
      <p class="text-center">{{$product->marca}}</p>
      <p class="text-center">{{$product->gama}}</p>
      <p class="text-center">{{$product->conectividad}}</p>
      <div class="text-center">
        <a href=""><span ng-click="VerDetalles('{{$product->description}}','{{$product->pricing}}','{{$product->id}}','{{$product->title}}')">Ver detalles</span></a>
      </div>
      <br>
      <p class="text-center">
        @include("in_shopping_carts.form",["product"=>$product])
      </p>
      @if(Auth::check() && $product->user_id == Auth::user()->id)
      <div class="text-center">
        <a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
        @include('products.delete',['product'=>$product])
      </div>
      @endif
    </div>
  </div>
</div>