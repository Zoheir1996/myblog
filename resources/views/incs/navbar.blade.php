<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{  route('home')  }}">
        <i class="fas fa-home"></i>
       Accueil
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('articles') }}">Articles</a>
        </li>
      </ul>
      <div class="navbar-collapse collapse justify-content-between">
      </div>
      <ul class="navbar-nav ml-auto">
        @if (Auth::user())
          @if (Auth::user()->role === 'ADMIN')
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('articles.index') }}">Espace Admin</a>
          </li>
          @endif
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
          <button type= "submit" class="btn">Deconnexion</button>
        </form>
        </li>
        @else
        <li class="nav-item ">
          <a class="nav-link" href="{{ route('login') }}">Me connecter</a>
        </li>
        @endif
      </ul>
    </div>
  </nav>