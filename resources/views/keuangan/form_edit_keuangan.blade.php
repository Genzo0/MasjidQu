@extends('../layouts/app')

@section('content')
    
    <form action="/keuangan/{{$keuangan->id}}" method="POST">
        @csrf
        @method('put')
        <div>
            <label for="">Pemasukkan</label>
            <input type="number" name="pemasukkan" id="pemasukkan" value="{{$keuangan->pemasukkan}}">
        </div>

        <div>
            <label for="">Pengeluaran</label>
            <input type="number" name="pengeluaran" id="pengeluaran" value="{{$keuangan->pengeluaran}}">
        </div>

        <div>
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" value="{{$keuangan->keterangan}}">
        </div>

        <div>
            <label for="">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" value="{{$keuangan->tanggal}}">
        </div>

        <button type="submit">
            ubah
        </button>
    </form>
    
@endsection