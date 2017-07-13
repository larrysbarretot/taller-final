@extends('layouts.master')
@section('content')
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
.amcharts-export-menu-top-right {
  top: 10px;
  right: 0;
}
</style>
<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<!-- Chart code -->
<script>
var Data=[@foreach($reportes as $item)
{marca:'{{$item->marca}}',cantidad:'{{$item->Cantidad}}',color:'{{$item->color}}' 
},
@endforeach]
var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider":Data,
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Ventas por marca"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "cantidad"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "marca",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }
});
</script>
<h3 class="text-primary">
  REPORTE DE VENTAS POR MARCA
</h3>
<!-- HTML -->
<div class="row">
  <div class="col-md-6" id="chartdiv"></div>
  <div class="col-md-4">
    <br><table class="table table-bordered" >
    <tr>
      <td>Marca</td>
      <td>Cantidad de ventas</td>
      <td>Color</td>
    </tr>
    <tr>@foreach($reportes as $item)
      <td>{{$item->marca}}</td>
      <td>{{$item->Cantidad}}</td>
      <td style="background-color:{{$item->color}} "></td>
    </tr>
    @endforeach
  </table>
</div>
</div>
@stop