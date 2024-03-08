<div class="bg-primary py-3 top-bar shadow d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-md-left pl-0">
                <a href="{{ asset('assets/landpage/images/Pesantren.png') }}" target="blankspace" class="p-3"><img
                        src="{{ asset('assets/landpage/images/Pesantren.png') }}" width="50px" alt=""></a>
                <a href="{{ route('landpage.dashboard') }}" class="p-3">Beranda</a>
                <a href="{{ route('index.nurul_jihad') }}" class="p-3">Masjid Nurul Jihad</a>
                <a href="{{ route('index.raudhatul_athfal') }}" class="p-3">TK/TPA Raudhatul Athfal</a>
                <a href="{{ route('index.rumah_tahfidz') }}" class="p-3">Rumah Tahfidz</a>
            </div>
            <div class="col-md-4 text-md-right pt-3">
                <a href="{{ route('login') }}" class="btn btn-light text-dark">Login</a>
                {{-- <a href="#" class="p-3"><span class="icon-facebook"></span></a> --}}
            </div>
        </div>
    </div>
</div>
