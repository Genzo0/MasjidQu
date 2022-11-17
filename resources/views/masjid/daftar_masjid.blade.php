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
            <div class="card shadow-sm" style="width: 18rem; height: 25rem; border-radius: 20px;">
                <img src="{{ asset('storage/'. $masjid->foto) }}" class="card-img-top" alt="{{ $masjid->nama }}" width="150" height="250"
                style="border-top-right-radius: 20px; border-top-left-radius: 20px">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Masjid {{ $masjid->nama }}</h5>
                    <h6 class="card-text"><i class="fa fa-map-marker mt-1"></i>  {{ $masjid->alamat }}</h6>
                    <!-- <a href="masjid/{{$masjid->id}}" class="card-link mt-4" style="float: right">Baca lebih lanjut...</a> -->
                    <a href="masjid/{{$masjid->id}}" class="btn btn-primary mt-3 float-end">Lihat Masjid</a>
                </div>
            </div>
        </div> 
@empty
    <h1 class="position-absolute top-50 start-50 translate-middle">belum ada data masjid</h1>
@endforelse
    </div> 
</div>
@endsection