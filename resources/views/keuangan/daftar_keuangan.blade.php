@extends('../layouts/app')

@section('content')
    <div class="container">
        <div class="container shadow-lg p-4" style="border-radius: 1.5rem">
        <h1 class="text-center fw-bold" style="margin-bottom: 4rem">Laporan Keuangan</h1>
        
        @can('isMyAccount', $masjid)
            <form action="/keuangan/create" method="GET">
                @csrf
                <button class="btn btn-primary mb-3" type="submit">Tambah Laporan Keuangan</button>
            </form>
        @endauth
        
        <table class="table table-bordered">
        <thead>
            <tr class="text-center">
            <th scope="col">Tanggal</th>
            <th scope="col">Pengeluaran</th>
            <th scope="col">Pemasukan</th>
            <th scope="col">Saldo</th>
            <th scope="col">Keterangan</th>
            @can('isMyAccount', $masjid)
                <th scope="col" colspan="2">Aksi</th>
            @endcan
            </tr>
        </thead>
        <tbody>
            @forelse ($listKeuangan as $keuangan)
                <tr>
                <th scope="row">{{$keuangan['tanggal']}}</th>
                <td>{{$keuangan['pengeluaran']}}</td>
                <td>{{$keuangan['pemasukkan']}}</td>
                <td>{{$keuangan['saldo']}}</td>
                <td>{{$keuangan['keterangan']}}</td>
                
                @can('isMyAccount', $masjid)
                <td>
                    <form action="/keuangan/{{$keuangan['id']}}/edit" method="GET" style="float: left">
                        @csrf
                        <button class="btn btn-primary me-2" style="width: 4rem" type="submit">Edit</button>
                    </form>
                
                    <form action="/keuangan/{{$keuangan['id']}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" style="width: 4rem" type="submit">Hapus</button>
                    </form>
                </td>
                @endcan
                
            @empty
                <th scope="row" colspan="6" class="text-center p-5">Belum ada data keuangan</th>
            @endforelse
        </tbody>
        </table>
        </div>
        
    </div>
@endsection