

<!--DEBUT HEADER-->
    <header>
        <div class="header-container">
            <div class="icon hamburger-icon" sidebarjs-toggle></div>

            <div class="img">
                <img src="{{asset('image/AlienHeader.jpg')}}" alt="AlienHeader"/>
            </div>

            <nav class="nav-container">
                <div class="list-general">
                    <ul>
                        <li><a href="{{ url('/contact/pageContact') }}" class="link-header">Contact</a></li>
                        @if (Auth::check() && Auth::user()->profil== '1')
                        
                            <li>@yield ('ajouter')</li>
                        @endif
                    </ul>
                </div>
                <div class="list-auth">
                    <ul>
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}" class="link-header">Connection</a></li>
                            <li><a href="{{ url('/register') }}" class="link-header">Inscription</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="link-header">
                                    {{-- ligne qui donne le nom de la personne connecté
                                    penser a rajouter un menu--}}
                                    <span class="name-log"> {{Auth::user()->name }} <span class="caret"></span>

                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();" class="link-header">
                                            Se deconnecté
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                <!-- ...-->
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>

            <div class="img">
                <img src="{{asset('image/yourname.jpg')}}" alt="yourname"/>
            </div>
        </div>
        <div class="title">
           <h1><a href="/index">LE JOURNAL DE L'ACTU CINE</h1></a>
        </div>
    </header>

<!--FIN HEADER-->



<!-- SIDE BAR-->
    <div sidebarjs-toggle></div>

    <div sidebarjs>
        <div sidebarjs-toggle></div>
        <div class="side">
           <div id="t-side"><h2>MENU</h2></div>
            <nav>
               <div id="image-side"><img src="{{asset('image/Merlin-enchanteur.jpg')}}"alt="Merlin-enchanteur"/></div>
                <div class="first-menu">
                    <ul>
                        <li><a class="menu" href="\film\index">FILMS</a></li>
                        <li><a class="menu" href="\animation\index">ANIMATIONS</a></li>
                        <li><a class="menu" href="\actudvd\index">Actu DVD Blu-Ray</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<!--FIN SIDE BAR-->

