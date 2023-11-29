<header class="bg-dark">
        <nav class="navbar navbar-dark h-100">
            <div class="container-fluid">
                <div class="links">
                    <a href="{{ route('home')}}" target="_blank" class="navbar-brand p-1">Torna al sito</a>
                    <a class="text-decoration-none" href="{{ route('admin.home')}}"><i class="fa-solid fa-house"></i></a>
                </div>
                {{-- logout  --}}
                <form action="{{route('logout')}}" class="d-flex" method="POST" role="search">
                    @csrf
                    <button type="submit" class="btn btn-outline-light" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
                </form>

            </div>
          </nav>
</header>
