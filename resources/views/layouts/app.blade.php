<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MasjidQu</title>
    <!-- <title>{{ config('app.name', 'MasjidQu') }}</title> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style=
"background-image: url('{{ asset('assets/background.png')}}'); 
background-repeat: no-repeat;
background-size: cover;" class="mx-5">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand fw-bold " href="{{ url('/') }}">
                    MasjidQu
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- @auth
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/masjid/{{auth()->user()->id}}">Profil</a>
                        </li>
                    </ul>
                    @endauth -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item me-4">
                            <a class="nav-link text-dark" href="{{ url('kajian') }}">Kajian</a>
                        </li>

                        <li class="nav-item mx-4">
                            <a class="nav-link text-dark" href="{{ url('masjid') }}">Masjid</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item rounded-pill shadow-sm px-4 ms-4 me-3" style="background: #E5E5E5;">
                                    <a class="nav-link fw-bold text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item rounded-pill shadow-sm px-3" style="background: #E5E5E5;">
                                    <a class="nav-link fw-bold text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle ms-4" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end shadow" style="background: #B8D6E2" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/masjid/{{auth()->user()->id}}">&nbsp;&nbsp;Profil</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="dropdown-item">
                                        @csrf
                                        <button type="submit" class="bg-transparent border-0" onclick="return confirm('Apakah yakin ingin logout ?')">Logout</button>
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>