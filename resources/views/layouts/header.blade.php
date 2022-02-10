<nav class="navbar navbar-light bg-white  navbar-expand-md">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
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
                    <a class="nav-link" href="{{ route('palemo') }}">Partenza da Palermo <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('catalina') }}">Partenza da Catania</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('roma') }}">Partenza da Roma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('milano') }}">Partenza da Milano</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-dark ms-md-3" onclick=" window.open('https://t.me/viagginvidia','_blank')">Iscriviti a Telegram</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
