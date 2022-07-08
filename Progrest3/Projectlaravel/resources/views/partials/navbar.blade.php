<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">..</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link active" href="/home">Home</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link active" href="posts?source=coppamagz">
                        Coppa Magz
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="posts?source=koreatimes">
                        Korea Times
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="posts?source=yonhapagency">
                        Yon Hap Agency
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link active" href="/about">About</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
