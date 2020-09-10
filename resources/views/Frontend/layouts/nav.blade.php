  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-dark"><a href="/"><span> BookStore</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          {{-- <li><a href="{{url('/#about')}}">About</a></li> --}}
          <li><a href="{{url('/#services')}}">Books</a></li>
          <li><a href="{{url('/#team')}}">Team</a></li>
          <li><a href="{{url('/#contact')}}">Contact</a></li>
          @auth
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
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
          <li class="get-started"><a href="{{ url('/userlogin') }}">Login</a></li>
          <li class="get-started"><a href="{{ url('/userregister') }}">Register</a></li>
          @endauth
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->