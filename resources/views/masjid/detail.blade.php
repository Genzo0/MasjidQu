@extends('../layouts/app')

@section('content')

<div class="container">
    <img src="{{ asset('storage/'. $masjid->foto) }}" alt="{{ $masjid->nama }}" height="150" width="200">
    <h2>{{ $masjid->nama }}</h2>
    <h4>{{ $masjid->alamat }}</h4>
    <span>{{ $masjid->deskripsi }}</span>

    @can('isMyAccount', $masjid)
        <div>
            <a href="/masjid/{{$masjid->id}}/edit">Edit</a>
        </div>
    @endcan

    <h2>Jadwal Kajian</h2>

    @can('isMyAccount', $masjid)
    <div><a href="/kajian/create">Buat kajian</a></div>
    @endcan
    
    @forelse ($listKajian as $kajian)
        <div class="card m-5">
            <h3>{{$kajian->judul_kajian}}</h3>
            <h3>{{$kajian->nama_ustaz}}</h3>
            <h3>{{$kajian->hari}}</h3>
            <h3>{{$kajian->tanggal}}</h3>
            <h3>{{$kajian->waktu}}</h3>
            <h3>{{"Masjid ".$kajian->masjid->nama}}</h3>
            @can('isMyAccount', $kajian->masjid)
            <a href="/kajian/{{$kajian->id}}/edit">Edit</a>
            <form action="/kajian/{{$kajian->id}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" onclick="return confirm('Apakah yakin ingin menghapus ?')">Delete</button>
            </form>
            @endcan
            
        </div>
    @empty
        <h1>Belum ada data kajian</h1>
    @endforelse

    
    <div><a href="/keuangan/{{$masjid->id}}">Keuangan</a></div>
</div>
    
@endsection