<div class="bg-primary py-3 top-bar shadow d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 text-md-left pl-0">
                <a href="{{ asset('assets/landpage/images/Pesantren.png') }}" target="blankspace" class="p-3"><img
                        src="{{ asset('assets/landpage/images/Pesantren.png') }}" width="50px" alt=""></a>
                <a href="{{ route('dashboard_landpage') }}" class="p-3">Beranda</a>
                <a href="{{ route('nurul_jihad-index') }}" class="p-3">Masjid Nurul Jihad</a>
                <a href="{{ route('rumah_tahfidz-index') }}" class="p-3">Rumah Tahfidz</a>
                <a href="{{ route('raudhatul_athfal-index') }}" class="p-3">RA Darul Istiqamah</a>
                <a href="{{ route('tpa-index') }}" class="p-3">TPA Darul Istiqamah</a>
                <a href="{{ route('majelis_taklim-index') }}" class="p-3">Majelis Taklim</a>
                <a href="{{ route('ikramnurjihad-index') }}" class="p-3">IKRAMNURJIHAD</a>
            </div>
            <div class="col-md-2 text-md-right pt-3">
                <a href="{{ route('login') }}" class="btn btn-light text-dark">Login</a>
                {{-- <a href="#" class="p-3"><span class="icon-facebook"></span></a> --}}
            </div>
        </div>
    </div>
</div>
