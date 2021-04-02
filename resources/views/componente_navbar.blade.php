<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/">Home </a>
      </li>
      <li @if($current=="clientes") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/clientes">Clientes</a>
      </li>
      <li @if($current=="planos") class="nav-item active" @else class="nav-item" @endif>
        <a class="nav-link" href="/planos">Planos </a>
      </li>

      <li class="nav-item active" >
        <a href="{{ route('logout') }}" class="nav-link"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
        
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
        
    </ul>

  </div>
</nav>