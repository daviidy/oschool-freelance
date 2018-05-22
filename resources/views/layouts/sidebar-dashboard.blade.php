<div class="sidebar" data-image="/assets/img/sidebar-5.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/" class="simple-text">
                <img src="/img/oschool freelance-fond-blanc.png" width="220px" alt="">
            </a>
        </div>
        <ul class="nav">
            <li class=" {{ Request::path() == 'home' ? 'nav-item active' : "" }}">
                <a class="nav-link" href="/home">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Mon profil</p>
                </a>
            </li>
            <li class=" {{ Request::path() == 'mes-jobs' ? 'nav-item active' : "" }}">
                <a class="nav-link" href="/mes-jobs">
                    <i class="nc-icon nc-notes"></i>
                    @if (Auth::user()->isAdmin())
                    <p>Propositions</p>
                    @else
                    <p>Mes jobs</p>
                    @endif
                </a>
            </li>
          <!--  <li class=" {{ Request::path() == 'notifications' ? 'nav-item active' : "" }}">
                <a class="nav-link" href="/notifications">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>
