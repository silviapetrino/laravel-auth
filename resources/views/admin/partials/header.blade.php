<header class="bg-dark">
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
          <a href="{{ route('home')}}" target="_blank" class="navbar-brand">Vai al sito</a>
          <form action="{{route('logout')}}" class="d-flex" method="POST" role="search">
            @csrf
            <button type="submit" class="btn btn-outline-success" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
          </form>
        </div>
      </nav>
</header>
