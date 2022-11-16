@extends('../layouts/app')

@section('content')

    @can('isMyAccount', $masjid)
        <a href="/keuangan/create">Tambah laporan keuangan</a>
    @endauth
    
    @forelse ($listKeuangan as $keuangan)
        <div class="card m-5">
            <h4>{{$keuangan->tanggal}}</h4>
            <h4>{{$keuangan->pengeluaran}}</h4>
            <h4>{{$keuangan->pemasukkan}}</h4>
            <h4>{{$keuangan->saldo}}</h4>
            <h4>{{$keuangan->keterangan}}</h4>
            @can('isMyAccount', $keuangan->masjid)
                <a href="/keuangan/{{$keuangan->id}}/edit">Edit</a>
                <form action="/keuangan/{{$keuangan->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Apakah yakin ingin menghapus ?')">hapus</button>
                </form>  
            @endcan
        </div>
    @empty
        <h1>Belum ada data keuangan</h1>
    @endforelse

@endsection