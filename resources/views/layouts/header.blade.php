<nav class="navbar navbar-light bg-white  navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
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
                    <a class="nav-link" href="{{ route('index', ['depature' => 'palemo']) }}">Partenza da Palermo
                        @if(request()->depature == 'palemo' || request()->depature == null)
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index', ['depature' => 'catalina']) }}">Partenza da Catania
                        @if(request()->depature == 'catalina')
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index', ['depature' => 'roma']) }}">Partenza da Roma
                        @if(request()->depature == 'roma')
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index', ['depature' => 'milano']) }}">Partenza da Milano
                        @if(request()->depature == 'milano')
                            <span class="sr-only">(current)</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-dark ms-md-3" onclick=" window.open('https://t.me/viagginvidia','_blank')">Iscriviti a Telegram</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
