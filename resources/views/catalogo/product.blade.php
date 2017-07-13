<div class="panel panel-default col-md-4 producto_marco ">
  <div  class="panel-body text-center">
    @if($product->extension)
    <img  src="{{url("/products/images/$product->id.$product->extension")}}" class="img-responsive">
    @endif
    <h3 class="text-warning">{{$product->title}} </h3>
    <h2 class="text-danger"><strong>s/{{$product->pricing}}</strong></h2>      
    <p>{{$product->marca}}</p>
    <p>{{$product->gama}}</p>
    <p>{{$product->conectividad}}</p>                 
    <a href=""><span ng-click="VerDetalles('{{$product->description}}','{{$product->pricing}}','{{$product->id}}','{{$product->title}}')">Ver detalles</span></a>
    <br>
    <p class="text-xs-center">
      @include("in_shopping_carts.form",["product"=>$product])
    </p>
    @if(Auth::check() && $product->user_id == Auth::user()->id)
    <div>
      <a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a>
      @include('products.delete',['product'=>$product])
    </div>
    @endif
  </div>
</div>