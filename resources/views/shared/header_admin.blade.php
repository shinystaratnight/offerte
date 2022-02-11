<nav class="navbar navbar-light bg-white  navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin') }}">
            <img src=" https://www.viagginvidia.it/images/viagginvidia350x72.jpg"
                 height="30" alt="image">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNav3" aria-controls="navbarNav3"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav3">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin', ['departure' => 'palermo']) }}">Partenza da Palermo
                        @if(request()->departure == 'palermo' || request()->departure == null)
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin', ['departure' => 'catalina']) }}">Partenza da Catania
                        @if(request()->departure == 'catalina')
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin', ['departure' => 'roma']) }}">Partenza da Roma
                        @if(request()->departure == 'roma')
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin', ['departure' => 'milano']) }}">Partenza da Milano
                        @if(request()->departure == 'milano')
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Log out</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
