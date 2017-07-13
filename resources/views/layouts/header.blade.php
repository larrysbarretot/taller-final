<header id="header-container">
  <div class="container">
    <div class="row flex-items-xs-between flex-items-xs-middle">
      <div class="col-xs-10 col-sm-5">
        <img src="{{url('CelularesPeru/imagenes/logo.png')}}" height="55px" alt="calidad">
      </div>
      <div class="col-xs-2 col-sm-7 text-xs-right">
        <button class="navbar-toggler  hidden-sm-up" data-toggle="collapse" data-target="#navMenu">&#9776;</button>
        @if (Auth::guest())
        <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/register') }}">
          <span class=" icon-input-checked-outline"> Registrar</span>
        </a>
        <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/login') }}">
          <span class="icon-power"> Entrar</span>
        </a>
        @else
        <a href="#" class="login hidden-xs-down text-uppercase font-weigth-bold">
          {{ Auth::user()->name }}
        </a>
        <a class="login hidden-xs-down text-uppercase font-weigth-bold" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">&#62; 
          Salir
        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        @endif
      </div> 
    </div>
  </div>  
</header>