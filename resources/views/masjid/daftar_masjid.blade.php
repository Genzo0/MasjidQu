@extends('../layouts/app')

@section('content')

<form action="/masjid" method="GET">
    @csrf
    <input type="search" id="search" name="search">
    <button type="submit">Search</button>
</form>

@forelse ($listMasjid as $masjid)
    <div class="card mb-5">
        <img src="{{ asset('storage/'. $masjid->foto) }}" alt="{{ $masjid->nama }}" height="150" width="200">
        <h4>{{ $masjid->nama }}</h4>
        <h5>{{ $masjid->alamat }}</h5>
        <a href="masjid/{{$masjid->id}}">Lihat Masjid</a>
    </div>
@empty
    <p>Belum ada data masjid</p>
@endforelse
    
@endsection