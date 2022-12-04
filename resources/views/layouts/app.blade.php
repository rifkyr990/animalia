<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Animalia') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <!-- Fonts -->
    <!-- Styles -->
    <!-- CSS only -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div id="app">
        @if(Auth::check())
        <nav class="navbar fixed-top navbar-expand-md py-3">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    <img src="{{ asset('assets/image/logo.png') }}" alt="" width="120px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link text-light">Home</a></li>
                        <li class="nav-item"><a href="{{ route('features') }}" class="nav-link text-light">Features</a></li>
                        <li class="nav-item"><a href="" class="nav-link text-light">About</a></li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link text-light dropdown-toggle " href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">{{ __('Edit Profile') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @endif

        <main>
            @yield('content')
        </main>
        @if(Auth::check())
        <footer class="py-3 py-4 bg-dark">

            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="" class="nav-link px-2" style="color: #57cc99;">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link px-2" style="color: #57cc99;">Features</a></li>
                <li class="nav-item"><a href="" class="nav-link px-2" style="color: #57cc99;">FAQs</a></li>
                <li class="nav-item"><a href="" class="nav-link px-2" style="color: #57cc99;">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Animalia, Inc</p>
        </footer>
        @endif
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="{{ asset('js/script.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script>
        AOS.init();

    </script>

</body>

</html>
