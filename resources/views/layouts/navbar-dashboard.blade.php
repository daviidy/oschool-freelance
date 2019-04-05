<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class=" container-fluid  ">

        @if(Request::path() == 'home')
        <a class="navbar-brand" href=""> Mon profil </a>
        @elseif(Request::path() == 'mes-jobs')
          @if (Auth::user()->isAdmin()) 
        <a class="navbar-brand" href=""> Liste des propositions </a>
          @else
        <a class="navbar-brand" href=""> Mes Jobs </a>
          @endif
        @elseif(Request::path() == 'notifications')
        <a class="navbar-brand" href=""> Notifications </a>
        @endif
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-palette"></i>
                        <span class="d-lg-none">Mon profil</span>
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-planet"></i>
                        <span class="notification">0</span>
                        <span class="d-lg-none">Notification</span>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">Aucune notification</a>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nc-icon nc-zoom-split"></i>
                        <span class="d-lg-block">&nbsp;Recherche</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <span class="no-icon">Accueil</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">Mon espace</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @if (!Auth::user()->isAdmin())
                        <a class="dropdown-item" href="#">Forme-toi</a>
                        <a class="dropdown-item" href="#">CV en ligne</a>
                        <a class="dropdown-item" href="#">Contactes-nous</a>
                        <a class="dropdown-item" href="#">Travailles avec nous</a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">{{ __('Se déconnecter') }}
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                       </a>
                        @else
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">{{ __('Se déconnecter') }}
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                       </a>
                       @endif
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jobs.index') }}">
                        <span class="no-icon">Jobs Oschool</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
