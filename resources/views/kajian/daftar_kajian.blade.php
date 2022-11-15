@extends('../layouts/app')

@section('content')

    <form action="/kajian" method="GET">
        @csrf
        <input type="search" id="search" name="search">
        <button type="submit">Search</button>
    </form>
    
    @forelse ($listKajian as $kajian)
        <div class="card m-5">
            <h3>{{$kajian->judul_kajian}}</h3>
            <h3>{{$kajian->nama_ustaz}}</h3>
            <h3>{{$kajian->hari}}</h3>
            <h3>{{$kajian->tanggal}}</h3>
            <h3>{{$kajian->waktu}}</h3>
            <h3>{{"Masjid ".$kajian->masjid->nama}}</h3>
        </div>
    @empty
        <h1>Belum ada data kajian</h1>
    @endforelse

@endsection