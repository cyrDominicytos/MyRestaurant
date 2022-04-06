  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <h1>
                <a class="navbar-brand" href="index.html">
                    Foodi<span>e</span> Blog<i class="fas fa-utensils"></i>
                </a>
            </h1>
            <!-- if logo is image enable this   
<a class="navbar-brand" href="#index.html">
    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
</a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button> 

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index_client')}}">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menu_client')}}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Panier</a>
                    </li>
                </ul>
            </div>
            <style>
                .search-right a{
                    font-weight: bold;
                    margin-right: 10px;
                    text-transform: uppercase;
                }
            </style>
            @if (Auth::check()) 
            {{-- input your code there --}}
             <div class="search-right ml-lg-3">
                <a class="nav-item" href="{{ route('logout_client') }}">
                    Deconnexion
                </a>
            </div> 
            <div class="search-right ml-lg-3">
                <a data-bs-toggle="modal" data-bs-target="#staticBackdropReservation">
                    Reservation
                </a>
            </div>
            @else
             <div class="search-right ml-lg-3">
                <a data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">
                    Connexion
                </a>
                 <a data-bs-toggle="modal" data-bs-target="#staticBackdropRegister">
                    Inscription
                </a> 
            </div> 
            @endif 

            <!-- //search button -->
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!--//header-->
