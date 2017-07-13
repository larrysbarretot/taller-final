@extendes('layouts.master')
<div class="container">
  <h1>Compra completada</h1>
  <h3> Tu pago fue procesado <span class="{{$order->status}}">{{$order->status}}></span></h3>
  <p>Confirma los detalles de envio</p>
  <div class="row">
    <div class="col-xs-6">Email</div>
    <div class="col-xs-6">{{$order->email}}</div>
  </div>
  <div class="row">
    <div class="col-xs-6">Direccion</div>
    <div class="col-xs-6">{{$order->address()}}</div>
  </div>
  <div class="row">
    <div class="col-xs-6">Codigo Postal</div>
    <div class="col-xs-6">{{$order->postal_code}}</div>
  </div>
  <div class="row">
    <div class="col-xs-6">Ciudad</div>
    <div class="col-xs-6">{{$order->city}}</div>
  </div>
  <div class="row">
    <div class="col-xs-6">Estado y Pais</div>
    <div class="col-xs-6">{{"$order->email $order->cuntry_code"}}</div>
  </div>
  <div class="text-xs-center">
    <a href="{{url('/compras/'.$shopping_cart->customid)}}">Link de tu compra</a>
  </div>
</div>
@stop
