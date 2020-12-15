<ul class="nav nav-tabs">
  @if( true || Auth::check() )
      <li class="nav-item">
        <a class="nav-link active" href="{{url('/')}}">Hotel La Rivera</a>
      </li>
  
      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hotel</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
          <a class="dropdown-item" href="{{url('/hotel/mision-vision')}}">Misión y Visión</a>
          <a class="dropdown-item" href="{{url('/hotel/ubicación')}}">Ubicación</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
          <a class="dropdown-item" href="{{url('/servicios/eventos')}}">Eventos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{url('/clientes/visualizar')}}">Vizualizar</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/reservas')}}">Reservas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('factura')}}">facturación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('contacto')}}">Contactos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Consultas</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{url('conhabita')}}">Habitaciones</a>
          <a class="dropdown-item" href="{{url('consultas')}}">Clientes</a>
        </div>
  @endif
</ul>