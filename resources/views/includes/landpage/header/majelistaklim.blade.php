<header class="site-navbar site-navbar-target bg-secondary shadow mt-2" role="banner">

    <div class="container-fluid">
        <div class="row align-items-center position-relative">

            <div>
                <a href="{{ route('majelis_taklim-index') }}" class="text-white">
                    <h2 class="text-white">Majelis Taklim</h2>
                </a>
            </div>

            <nav class="site-navigation text-left ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                    <li><a href="{{ route('majelis_taklim-index') }}" class="nav-link">Beranda</a></li>
                    <li><a href="{{ route('majelis_taklim-kajian') }}" class="nav-link">Kajian</a></li>
                    <li><a href="{{ route('majelis_taklim-keanggotaan') }}" class="nav-link">Keanggotaan</a></li>
                </ul>
            </nav>

            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#"
                    class="site-menu-toggle py-5 js-menu-toggle text-white"><span
                        class="icon-menu h3 text-white"></span></a>
            </div>
        </div>
    </div>
</header>
