<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">Parsinta x Raden</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-5">
                @foreach ($navbar as $name => $url)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ $url }}">{{ $name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
