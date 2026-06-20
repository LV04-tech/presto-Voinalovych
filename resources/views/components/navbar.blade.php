
{{-- navbar  --}}
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand py-2 angle" href="{{route('homepage')}}">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex align-items-center justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tutti gli articoli</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
            <li><a class="dropdown-item" 
              href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
            </li>
            @if (!$loop->last)
            <hr class="dropdown-divider">
            @endif  
            @endforeach
          </ul>
        </li>
        
        
        {{-- Utente NON è autenticato --}}
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
        @endguest
        
        <li class="nav-item">
          <a class="nav-link" href="#">Contatti</a>
        </li>
        {{-- fine utente NON AUTH  --}}
        
        {{-- Utente autenticato  --}}
        @auth
        
        {{-- zona revisore  --}}
        @if (Auth::user()->is_revisor)
        <li class="nav-item">
          <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25"
          href=" {{ route('revisor.index') }}">Zona revisore
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ \App\Models\Article::toBeRevisedCount() }}

          </span>
        </a>
      </li>
      @endif
      {{-- fine zona revisore  --}}
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('create.article')}}">Crea Articolo</a>
      </li>
      <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle ></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Benvenut*{{Auth::user()->name}}</a>
      </li>
      <form class="nav-link" action="{{route('logout')}}" method="POST">
        <button type="submit">Logout</button>
        @csrf
      </form>
      @endauth  
    </ul>
  </div>
</div>
</nav>
{{-- fine navbar  --}}