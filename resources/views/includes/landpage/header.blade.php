<header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">

            <div>
                <a href="{{ route('nurul_jihad.index') }}" class="text-white">
                    <h2 class="text-white">Masjid Nurul Jihad</h2>
                </a>
            </div>

            <nav class="site-navigation text-left ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                    <li><a href="{{ route('nurul_jihad.index') }}" class="nav-link">Beranda</a></li>
                    <li><a href="{{ route('nurul_jihad.kajian') }}" class="nav-link">Kajian</a></li>
                    <li><a href="{{ route('nurul_jihad.program') }}" class="nav-link">Program</a></li>
                    <li><a href="{{ route('nurul_jihad.struktur') }}" class="nav-link">Struktur</a></li>
                    <li><a href="contact.html" class="nav-link">Kontak</a></li>
                </ul>
            </nav>

            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#"
                    class="site-menu-toggle py-5 js-menu-toggle text-white"><span
                        class="icon-menu h3 text-white"></span></a>
            </div>
        </div>
    </div>
</header>