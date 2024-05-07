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
        <a class="nav-link" href="{{-- route('') --}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Struktur</span>
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
