<header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

    <div class="container-fluid">
        <div class="row align-items-center position-relative">
            <div>
                <a href="{{ route('ikramnurjihad.index') }}" class="text-white">
                    <h2 class="text-white">Ikramnurjihad</h2>
                </a>
            </div>

            <nav class="site-navigation text-left ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                    <li><a href="{{ route('ikramnurjihad.index') }}" class="nav-link">Beranda</a></li>
                    <li><a href="{{-- route('kajian') --}}" class="nav-link">Kajian</a></li>
                    <li><a href="blog.html" class="nav-link">Informasi</a></li>
                    <li><a href="{{ route('ikramnurjihad.struktur') }}" class="nav-link">Struktur</a></li>
                </ul>
            </nav>

            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#"
                    class="site-menu-toggle py-5 js-menu-toggle text-white"><span
                        class="icon-menu h3 text-white"></span></a>
            </div>
        </div>
    </div>
</header>
