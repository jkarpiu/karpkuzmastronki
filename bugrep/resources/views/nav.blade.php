<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Bugrep</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item @if($title ?? ''=="")
             active
             @endif">
          <a class="nav-link" href="/">Główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link add @if($title ?? ''=='Dodaj')
          active
          @endif" href="/add">Dodaj</a>
        </li>
    </li>
    <li class="nav-item">
      <a class="nav-link add
      @if($title ?? ''=='Przeglądaj')
          active
          @endif
      " href="/browse">Przeglądaj</a>
    </li>
    <li class="nav-item">
        <a class="nav-link add
        @if($title ?? ''=='Archiwum')
          active
          @endif
        " href="/archive">Archiwum</a>
      </li>
      </ul>
      <!-- Right Side Of Navbar -->
      <form class="form-inline my-2 my-lg-0" action="search" method="GET">
        <input class="form-control mr-sm-2" type="search" name="item" placeholder="Wyszukaj BUG-a lub użytkownika">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Szukaj</button>
      </form>
    </div>
    <ul class="navbar-nav ml-auto nav-flex-icons">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item avatar dropdown">
                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img style='width:30px;height:30px;' src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle z-depth-0"
                    alt="avatar image">
                </a>

                <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-55">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </nav>
