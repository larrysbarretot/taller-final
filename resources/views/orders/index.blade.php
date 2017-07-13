@extends('layouts.master')
@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2>Dashboard</h2>  
    </div>
    <div class="panel-body">
      <h3>Estadisticas</h3>
      <div class="row">
        <div class="col-xs-4 col-md-3 col-lg-2 est">
          <span class="estadistica">{{$totalMonth}}USD</span>
          Ingresos del mes
        </div>
        <div class="col-xs-4 col-md-3 col-lg-2 est">
          <span class="estadistica">{{$totalMonthCount}}</span>
          Numero de ventas
        </div>
      </div>
      <h3>Ventas</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>ID. venta</td>
              <td>Comprador</td>
              <td>Direccion</td>
              <td>Fecha de venta</td>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
            <tr>
              <td>{{$order->id}}</td>
              <td>{{$order->recipient_name}}</td>
              <td>{{$order->address()}}</td>
              <td>{{$order->created_at}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@stop