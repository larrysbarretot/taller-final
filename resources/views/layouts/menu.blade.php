<div id="menu-container">
  <nav id="navMenu" class="navbar-toggleable-xs navbar navbar-light collapse">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-8">
          <ul class="nav navbar-nav">
            <li class="nav-item text-xs-center">
              <a href="{{url('/')}}" class="nav-link active"><span class="icon-home-outline"> Home</span></a>
            </li>
            <li class="nav-item text-xs-center">
              <a href="{{url('/catalogo')}}" class="nav-link"><span class="icon-news"> Catalogo</span></a>
            </li>
            <li class="nav-item text-xs-center">
              <a href="{{url('/carrito')}}" class="nav-link"><span class="icon-shopping-cart"> Carrito<span> {{$productsCount}}</span></span></a>
            </li>
            <li class="nav-item text-xs-center">
              <a href="{{url('/nosotros')}}" class="nav-link"><span class="icon-group"> Nosotros</span></a>
            </li>
            <li class="nav-item text-xs-center">
              <a href="{{url('/contacto')}}" class="nav-link"><span class="icon-location"> Contacto</span></a>
            </li>
            @if (Auth::guest())
            <li class="nav-item text-xs-center hidden-sm-up">
              <a href="{{ url('/register') }}" class="nav-link"><span class="icon-input-checked"> Registrar</span></a>
            </li>
            <li class="nav-item text-xs-center hidden-sm-up">
              <a href="{{url('/login')}}" class="nav-link"><span class="icon-power"> Entrar</span></a>
            </li>
            @else
            <li class="nav-item text-xs-center hidden-sm-up">
              <a class="nav-link" href="{{ url('/logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Salir
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
            @endif
          </ul>
        </div>
        <div class="col-sm-12 col-lg-4 hidden-xs-down">
          <form>
            <div class="input-group">
              <input  type="text" class="form-control" placeholder="¿Qué está buscando?"></input>
              <span class="input-group-btn">
                <button class="btn btn-celperu" type="button">
                  <span class="hidden-sm-down">Buscar</span>
                  <i class="fa fa-search hidden-md-up"></i>
                </button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <div id="search-bar" class="container hidden-sm-up">
    <div class="row">
      <div class="col-xs-12">
        <form>
          <div class="input-group">
            <input  type="text" class="form-control" placeholder="¿Encontró lo que buscaba?"></input>
            <span class="input-group-btn">
              <button class="btn btn-celperu" type="button">
                <span class="hidden-sm-down">Buscar</span>
                <i class="fa fa-search hidden-md-up"></i>
              </button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>