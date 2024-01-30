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
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/profile">Mon profile</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profiles.index') }}">Mon profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('setting.index') }}">Mes informations</a>
                </li>

            </ul>
        
        </div>
    </nav>
@endonce
