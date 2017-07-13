<!--Carousel-->
<div id="carousel-container">
  <div id="productosCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#productosCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#productosCarousel" data-slide-to="1"></li>
      <li data-target="#productosCarousel" data-slide-to="2"></li>
      <li data-target="#productosCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="{{url('CelularesPeru/imagenes/portada1.jpg')}}" alt="Primer producto">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('CelularesPeru/imagenes/portada2.jpg')}}" alt="Segundo producto">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="carousel-item">
       <img src="{{url('CelularesPeru/imagenes/portada3.jpg')}}" alt="Tercer producto">
       <div class="carousel-caption">
       </div>
     </div>
     <div class="carousel-item">
      <img src="{{url('CelularesPeru/imagenes/portada4.jpg')}}" alt="Cuarto producto">
      <div class="carousel-caption">
      </div>
    </div>
    <a class="left carousel-control" href="#productosCarousel" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Producto Anterior</span>
    </a>
    <a class="right carousel-control" href="#productosCarousel" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span>
      <span class="sr-only">Producto Siguiente</span>
    </a>
  </div>
</div>
<!--/Carousel-->