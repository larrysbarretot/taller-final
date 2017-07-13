{!! Form::open(['url' => '/in_shopping_carts','method'=> 'POST', 'class'=> 'text-center']) !!}
<input type="hidden" name="product_id" value="{{$product->id}}"></input>
<input type="hidden" name="product_pricing" value="{{$product->pricing}}">
<input type="submit" value="Agregar al carrito" class="btn btn-success"></input>
{!! Form::close() !!}