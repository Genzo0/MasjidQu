@extends('../layouts/app')

@section('content')
    
    <form action="/keuangan" method="POST">
        @csrf
        <div>
            <label for="">Pemasukkan</label>
            <input type="number" name="pemasukkan" id="pemasukkan">
        </div>

        <div>
            <label for="">Pengeluaran</label>
            <input type="number" name="pengeluaran" id="pengeluaran">
        </div>

        <div>
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan">
        </div>

        <div>
            <label for="">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal">
        </div>

        <button type="submit">
            buat keuangan
        </button>
    </form>
    
@endsection