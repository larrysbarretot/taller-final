<div id="Detalles" class="modal fade" role="dialog">
  <div  class="modal-dialog2 ">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detalles del producto</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-5">
            <img  src='{{url("/products/images/$product->id.$product->extension")}}' class="zoom img-responsive"> 
          </div>
          <div class="col-sm-7 col-md-4 col-lg-4">
            <div style="border:0px solid #BDBDBD" class="text-justify texto_boton">
              <h3 class="text-danger">@{{Titulo}}</h3>
              <p>@{{Descripcion}}</p>
            </div>
          </div>
          <div class="col-sm-5 col-md-4 col-lg-3">
            <div class="text-xs-center">
            <h2 class="text-danger">S/.@{{Precio}}</h2><br><br>
              <form action="{{ url('/AgregarCarrito') }} " id="form-agregar" method="post">
                <input type="hidden" name="_method" value="post">
                <input type="hidden" name="product_id" value="@{{idProducto}}">
                <input type="hidden" name="product_pricing" value="@{{Precio}}">
                {{ csrf_field() }}
                <button type="submit"  class="btn btn-primary btn-md glyphicon glyphicon-shopping-cart"><span class="texto_boton"><br>  Agregar al <br> carrito</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>