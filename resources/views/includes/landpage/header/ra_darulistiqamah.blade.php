<header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

    <div class="container-fluid">
        <div class="row align-items-center position-relative">

            <div>
                <a href="{{ route('raudhatul_athfal-index') }}" class="text-white">
                    <h2 class="text-white">Raudhatul Athfal</h2>
                </a>
            </div>

            <nav class="site-navigation text-left ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                    <li><a href="{{ route('raudhatul_athfal-index') }}" class="nav-link">Dashboard</a></li>
                    <li><a href="{{-- route('raudhatul_athfal-daftar_siswa') --}}" class="nav-link">Daftar Siswa</a></li>
                    <li><a href="{{-- route('raudhatul_athfal-Alumni') --}}" class="nav-link">Alumni</a></li>
                    <li><a href="{{-- route('raudhatul_athfal-Alumni') --}}" class="nav-link">Daftar Guru</a></li>
                    <li><a href="{{ route('raudhatul_athfal-struktur') }}" class="nav-link">Struktur</a></li>
                </ul>
            </nav>

            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#"
                    class="site-menu-toggle py-5 js-menu-toggle text-white"><span
                        class="icon-menu h3 text-white"></span></a>
            </div>
        </div>
    </div>
</header>
