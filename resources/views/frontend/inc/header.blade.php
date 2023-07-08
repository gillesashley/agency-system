@section('header')
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="d-flex align-items-center">JayJay Health Care</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('pages.index') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('pages.about') }}" class="{{ request()->is('about*') ? 'active' : '' }}">About</a>
                    </li>
                    <li><a href="{{ route('pages.services') }}"
                            class="{{ request()->is('services*') ? 'active' : '' }}">Services</a></li>
                    {{-- <li><a href="portfolio.html">Portfolio</a></li> --}}
                    <li><a href="team.html">Team</a></li>
                    {{-- <li><a href="blog.html">Blog</a></li> --}}
                    <li class="dropdown">
                        <a href="#"><span>Dropdown</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li><a href="{{ route('pages.apply') }}">Apply Here</a></li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('pages.contact') }}" class="{{ request()->is('contact*') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
@show
