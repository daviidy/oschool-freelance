<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="/assets/img/icone-oschool.ico">

    <!--auparavant {{ config('app.name', 'Oschool Freelance') }} -->
    <title>Oschool Freelance | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600|Dancing+Script|Open+Sans" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
              <!--  <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Oschool Freelance') }}
                </a> -->

                <!-- Brand -->
                <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/oschool-freelance-logo.png" alt=""></a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="item-menu collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('jobs.index') }}">Jobs Oschool</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">A propos</a> <!-- {{ url('/apropos') }} -->
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="https://oschool.ci" target="_blank">Forme-toi</a>
                      </li>

                      @if(Auth::check())
                          @if (Auth::user()->isAdmin())
                          <a href="{{ route('jobs.create') }}" target="_blank" ><button style="margin-right: 1rem;" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Poste un job</button></a>
                          @endif
                      @endif

                    <!--<li class="nav-item">
                      <span style="font-size: 28px;">&#124;</span>
                    </li> -->

                        <!-- Authentication Links -->
                        @guest
                            <li><button style="margin-right: 2rem;" class="btn bouton-shadow-secondary" type="button" name="button"> <a class="nav-link" href="{{ route('login') }}">{{ __('Connectez-vous') }}</a> </button></li>
                            <li><button class="btn bouton-shadow" type="button" name="button"><a style="color: #fff;" class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a></button></li>
                        @else
                            <li class="nav-item dropdown">
                                <a style="display:inline;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <img style="position: relative; top: -7%" src="/img/usersPhotos/{{ Auth::user()->image }}" width="50px" class="rounded-circle">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>
                                    <a class="dropdown-item" href="/home">
                                        Tableau de bord
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

        <main class=""> <!-- y avait py-4 -->

          <!--on prepare un div qui va contenir les messages de succes -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @yield('content')
        </main>
    </div>
    @include('layouts.footer')
</body>
</html>
