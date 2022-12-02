@extends('../layouts/app')

@section('content')

<form action="/kajian" method="GET">
    @csrf
    <div class="container">
        <div class="row mb-5">
            <div class="col-3">
            <form>
                <input class="rounded-pill shadow-sm" type="search" name="search" placeholder="Cari Kajian" style="
                height: 40px;
                border: none;
                background-image: url('{{ asset('assets/ic-search.png')}}');
                background-position: 10px 10px;
                background-size: 20px 20px;
                padding: 12px 20px 12px 40px;
                background-repeat: no-repeat;
                outline: none;">
                </div>
            </form>
        </div>
    </div>    
</form>
    
<div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
              <h1 class="fw-bold">Daftar Kajian</h1>
            </div>
    @forelse ($listKajian as $kajian)
        <div class="col-10 mx-auto mb-3">
            <div class="card mb-2 bg-transparent rounded-4 shadow-sm">
              <div class="row g-0">
                <div class="col-5">
                  <img src="{{asset('assets/img-kajian.jpg')}}" class="img-fluid rounded-start">
                </div>
                <div class="col-6">
                  <div class="card-body mt-3 ms-2">
                    <p>
                      <span>
                        <i class="fa fa-book-open fa-xl me-1" style="margin-left: -2px;"></i>
                        {{$kajian->judul_kajian}}
                      </span>
                    </p>
                    <p>
                      <span>
                        <i class="far fa-user fa-xl me-2"></i>
                        {{$kajian->nama_ustaz}}
                      </span>
                    </p>
                    <p>
                      <span>
                        <i class="far fa-calendar-check fa-xl me-2"></i>
                        {{$kajian->hari}}, {{$kajian->tanggal}}
                      </span>
                    </p>
                    <p>
                      <span>
                        <i class="far fa-clock fa-xl me-2"></i>
                        {{$kajian->waktu}} WIB
                      </span>
                    </p>
                    <p>
                      <span>
                        <i class="fa fa-location-dot fa-xl me-2"></i>
                        {{"Masjid ".$kajian->masjid->nama}}
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    @empty
    <div>
        <h3 class="position-absolute top-50 start-50 translate-middle opacity-75">belum ada data kajian</h3>
    </div>
    @endforelse
</div>
</div>
@endsection