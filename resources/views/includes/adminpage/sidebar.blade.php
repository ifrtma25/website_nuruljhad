<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard_landpage') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-mosque"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Darul Istiqamah</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard_admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard-admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        Masjid Nurul Jihad
    </div>

    <li class="nav-item {{ Request::is('nurul_jihad/kajian-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kajian-nuruljihad-admin') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Kajian</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('nurul_jihad/kegiatan-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kegiatan-nuruljihad-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Kegiatan</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('nurul_jihad/penceramah-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('penceramah-nuruljihad-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Penceramah</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('nurul_jihad/struktur-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('struktur-nuruljihad-admin') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Struktur</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        Rumah Tahfidz
    </div>

    <li class="nav-item {{ Request::is('rumah_tahfidz/daftar_santri-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('daftar_santri-rumah_tahfidz-admin') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Daftar Santri</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('rumah_tahfidz/program-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('program-rumah_tahfidz-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Program</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('rumah_tahfidz/struktur-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('struktur-rumah_tahfidz-admin') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Struktur</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        Raudhatul Athfal
    </div>

    <li class="nav-item {{ Request::is('raudhatul_athfal/alumni-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('alumni-raudhatul_athfal-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Alumni</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('raudhatul_athfal/daftar_guru-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('daftar_guru-raudhatul_athfal-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Daftar Guru</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('raudhatul_athfal/daftar_siswa-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('daftar_siswa-raudhatul_athfal-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Daftar Siswa</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('raudhatul_athfal/struktur-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('struktur-raudhatul_athfal-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Struktur</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        TPA Darul Istiqamah
    </div>

    <li class="nav-item {{ Request::is('tpa_darulistiqamah/daftar_santri-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('daftar_santri-tpa_darulistiqamah-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Daftar Santri</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('tpa_darulistiqamah/daftar_santri-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('ustadz_ustadzah-tpa_darulistiqamah-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Ustadz / Ustadzah</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('tpa_darulistiqamah/daftar_santri-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('wisudawan-tpa_darulistiqamah-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Wisudawan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        Majelis Taklim
    </div>

    <li class="nav-item {{ Request::is('majelis_taklim/kajian-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kajian-majelis_taklim-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Kajian</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('majelis_taklim/keanggotaan-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('keanggotaan-majelis_taklim-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Keanggotaan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        IkramnurJihad
    </div>

    <li class="nav-item {{ Request::is('ikramnurjihad/kegiatan-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kegiatan-ikramnurjihad-admin') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Kegiatan</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('ikramnurjihad/struktur-admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('struktur-ikramnurjihad-admin') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Struktur</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
