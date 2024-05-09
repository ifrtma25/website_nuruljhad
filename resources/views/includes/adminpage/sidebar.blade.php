<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('assets/adminpages/img/profile.jpg') }}" alt="..."
                        class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">Administrator</span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ Request::is('dashboard_admin') ? 'active' : '' }}">
                    <a href="{{ route('dashboard-admin') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Masjid Nurul Jihad</h4>
                </li>

                <li class="nav-item {{ Request::is('nurul_jihad/kajian-admin') ? 'active' : '' }}">
                    <a href="{{ route('kajian-nuruljihad-admin') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Kajian</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('nurul_jihad/kegiatan-admin') ? 'active' : '' }}">
                    <a href="{{ route('kegiatan-nuruljihad-admin') }}">
                        <i class="fas fa-th-list"></i>
                        <p>Kegiatan</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('nurul_jihad/penceramah-admin') ? 'active' : '' }}">
                    <a href="{{ route('penceramah-nuruljihad-admin') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Penceramah</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('nurul_jihad/struktur-admin') ? 'active' : '' }}">
                    <a href="{{ route('struktur-nuruljihad-admin', ['id' => 1]) }}">
                        <i class="fas fa-table"></i>
                        <p>Struktur</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Rumah Tahfidz</h4>
                </li>
                <li class="nav-item {{ Request::is('rumah_tahfidz/daftar_santri-admin') ? 'active' : '' }}">
                    <a href="{{ route('daftar_santri-rumah_tahfidz-admin') }}">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Daftar Santri</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('rumah_tahfidz/program-admin') ? 'active' : '' }}">
                    <a href="{{ route('program-rumah_tahfidz-admin') }}">
                        <i class="far fa-chart-bar"></i>
                        <p>Program</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('rumah_tahfidz/struktur-admin') ? 'active' : '' }}">
                    <a href="{{ route('struktur-rumah_tahfidz-admin') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Struktur</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">RA Darul Istiqamah</h4>
                </li>
                <li class="nav-item {{ Request::is('raudhatul_athfal/alumni-admin') ? 'active' : '' }}">
                    <a href="{{ route('alumni-raudhatul_athfal-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Alumni</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('raudhatul_athfal/daftar_guru-admin') ? 'active' : '' }}">
                    <a href="{{ route('daftar_guru-raudhatul_athfal-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Daftar Guru</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('raudhatul_athfal/daftar_siswa-admin') ? 'active' : '' }}">
                    <a href="{{ route('daftar_siswa-raudhatul_athfal-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Daftar Siswa</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('raudhatul_athfal/struktur-admin') ? 'active' : '' }}">
                    <a href="{{ route('struktur-raudhatul_athfal-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Struktur</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">TPA Darul Istiqamah</h4>
                </li>
                <li class="nav-item {{ Request::is('tpa_darulistiqamah/daftar_santri-admin') ? 'active' : '' }}">
                    <a href="{{ route('daftar_santri-tpa_darulistiqamah-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Daftar Santri</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('tpa_darulistiqamah/ustadz_ustadzah-admin') ? 'active' : '' }}">
                    <a href="{{ route('ustadz_ustadzah-tpa_darulistiqamah-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Ustadz & Ustadzah</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('tpa_darulistiqamah/wisudawan-admin') ? 'active' : '' }}">
                    <a href="{{ route('wisudawan-tpa_darulistiqamah-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Wisudawan</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Majelis Taklim</h4>
                </li>
                <li class="nav-item {{ Request::is('majelis_taklim/kajian-admin') ? 'active' : '' }}">
                    <a href="{{ route('kajian-majelis_taklim-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Kajian</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('majelis_taklim/keanggotaan-admin') ? 'active' : '' }}">
                    <a href="{{ route('keanggotaan-majelis_taklim-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Keanggotaan</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Ikramnurjihad</h4>
                </li>
                {{-- <li class="nav-item {{ Request::is('ikramnurjihad/kajian-admin') ? 'active' : '' }}">
                    <a href="{{ route('kajian-majelis_taklim-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Kajian</p>
                    </a>
                </li> --}}
                <li class="nav-item {{ Request::is('ikramnurjihad/kegiatan-admin') ? 'active' : '' }}">
                    <a href="{{ route('kegiatan-ikramnurjihad-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Kegiatan</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('ikramnurjihad/struktur-admin') ? 'active' : '' }}">
                    <a href="{{ route('struktur-ikramnurjihad-admin') }}">
                        <i class="fas fa-bars"></i>
                        <p>Struktur</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
