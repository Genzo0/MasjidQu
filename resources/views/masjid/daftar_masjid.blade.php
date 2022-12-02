@extends('../layouts/app')

@section('content')

<form action="/masjid" method="GET">
    @csrf
    <div class="container">
        <div class="row mb-5">
            <div class="col-3">
            <form>
                <input class="rounded-pill shadow-sm" type="search" name="search" placeholder="Cari Masjid" style="
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
@forelse ($listMasjid as $masjid)
        <div class="col-3">
            <div class="card shadow-sm mb-4 bg-transparent" style="width: 19rem; height: 25rem; border-radius: 20px;">
                <img src="{{ asset('storage/'. $masjid->foto) }}" class="card-img-top" alt="{{ $masjid->nama }}" width="100" height="210"
                style="border-top-right-radius: 20px; border-top-left-radius: 20px">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Masjid {{ $masjid->nama }}</h5>
                    <h6 class="card-text"><i class="fa fa-location-dot mt-1"></i>  {{ $masjid->alamat }}</h6>
                    <!-- <a href="masjid/{{$masjid->id}}" class="card-link mt-4" style="float: right">Baca lebih lanjut...</a> -->
                    <a href="masjid/{{$masjid->id}}" class="btn btn-primary mb-3 me-3 position-absolute bottom-0 end-0">Lihat Masjid</a>
                </div>
            </div>
        </div> 
@empty
    <div>
        <h1 class="position-absolute top-50 start-50 translate-middle opacity-75">belum ada data masjid</h1>
    </div>
@endforelse
    </div> 
</div>
@endsection