


  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom w-100">
    <a class="navbar-brand ml-4" href="#"><img src="{{ asset('img/Baguga.png') }}" alt="baguuga" width="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        @if (Route::has('login'))
          @auth
            <li class="nav-item p-2 active">
              <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
                        <li class="nav-item p-2 dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name . " " .Auth::user()->last_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          @else

            <li class="nav-item p-2">
              <a class="nav-link" href="{{ route('login') }}">Log In</a>
            </li>
            @if (Route::has('register'))
              <li class="nav-item p-2">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
            @endif
          @endauth
        @endif

      </ul>
    </div>
  </nav>
