<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('landpage.dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-mosque"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Darul Istiqamah</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard.admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-mosque"></i>
            <span>Masjid Nurul Jihad</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('event.nuruljihad.admin') }}">Event</a>
                <a class="collapse-item" href="{{ route('kajian.nuruljihad.admin') }}">Kajian</a>
                <a class="collapse-item" href="{{ route('penceramah.nuruljihad.admin') }}">Penceramah</a>
                <a class="collapse-item" href="{{ route('struktur.nuruljihad.admin') }}">Struktur</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Rumah Tahfidz</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('kajian') ? 'active' : '' }}">
        <a class="nav-link" href="{{-- route('index_kajian') --}}">
            <i class="fas fa-fw fa-book"></i>
            <span>RA Darul Istiqamah</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('kajian') ? 'active' : '' }}">
        <a class="nav-link" href="{{-- route('index_kajian') --}}">
            <i class="fas fa-fw fa-book"></i>
            <span>TPA Darul Istiqamah</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('kajian') ? 'active' : '' }}">
        <a class="nav-link" href="{{-- route('index_kajian') --}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Majelis Taklim</span>
        </a>
    </li>
    <li class="nav-item {{ Request::is('kajian') ? 'active' : '' }}">
        <a class="nav-link" href="{{-- route('index_kajian') --}}">
            <i class="fas fa-fw fa-user"></i>
            <span>IkramnuJihad</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
