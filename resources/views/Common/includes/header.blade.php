<header id="header" class="site-header text-black">
    <nav id="header-nav" class="navbar navbar-expand-lg">
        <div class="container-lg">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('Common/images/main-logo.png') }}" class="logo" alt="logo">
            </a>
            <button class="navbar-toggler d-flex d-lg-none order-3 border-0 p-1 ms-2" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg class="navbar-icon">
                    <use xlink:href="#navbar-icon"></use>
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar">
                <div class="offcanvas-header px-4 pb-0">
                    <a class="navbar-brand ps-3" href="index.html">
                        <img src="images/main-logo.png" class="logo" alt="logo">
                    </a>
                    <button type="button" class="btn-close btn-close-black p-5" data-bs-dismiss="offcanvas"
                        aria-label="Close" data-bs-target="#bdNavbar"></button>
                </div>
                <div class="offcanvas-body">
                    <ul id="navbar" class="navbar-nav fw-bold justify-content-end align-items-center flex-grow-1">
                        <li class="nav-item dropdown">
                            <a class="nav-link me-5 active border-0" href="{{ route('home') }}"
                                aria-expanded="false">Home</a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link me-5" href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-5" href="{{ route('blog') }}">Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-5" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-5" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
</header>
