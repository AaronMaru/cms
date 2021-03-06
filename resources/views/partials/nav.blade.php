<nav class="navbar navbar-expand-md navbar-light navbar-laravel bd-navbar">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ url('image\blue.png') }}" alt="" height="30px" width="30px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
              <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Features</a>
              <a class="nav-item nav-link" href="#">Pricing</a>
              <a class="nav-item nav-link" href="#">Disabled</a>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @if(Auth::guest())
                  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                  <li><a class="nav-link" href="{{ route('register') }}">Join the Community</a></li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          Maru <span class="caret"></span>
                          {{-- {{ Auth::user()->name }} <span class="caret"></span> --}}
                      </a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#"><i class="fa fa-fw fa-user-circle-o"></i> Profilel</a>
                          <a class="dropdown-item" href="#"><i class="fa fa-fw fa-bell"></i> Notification</a>
                          <a class="dropdown-item" href="/manage"><i class="fa fa-fw fa-cog"></i> Manage</a>
                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              <i class="fa fa-fw fa-sign-out"></i>{{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>