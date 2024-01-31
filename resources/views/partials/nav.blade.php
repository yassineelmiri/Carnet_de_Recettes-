@once
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('homepage') }}">R-E-C-E-T-T-E-S</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('homepage') }}">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profiles.index') }}">Mon profile</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('setting.index') }}">Mes informations</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.logout') }}">Déconnection</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.show') }}">Se connecter</a>
                    </li>
                @endguest




                {{-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button">
                        {{ auth()->user()->name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="{{ route('login.logout') }}" class="dropdown-item">Déconnexion</a>
                    </div>
                    <ul class="dropdown-menu" style="">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div> --}}



            </ul>

        </div>
    </nav>
@endonce
