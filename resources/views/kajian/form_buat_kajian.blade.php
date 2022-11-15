@extends('../layouts/app')

@section('content')

    <form action="/kajian" method="POST">
        @csrf
        <div>
            <label for="">Judul Kajian</label>
            <input type="text" name="judul_kajian" id="judul_kajian">
        </div>

        <div>
            <label for="">Nama Ustaz</label>
            <input type="text" name="nama_ustaz" id="judul_kajian">
        </div>

        <div>
            <label for="">Tanggal dan Waktu</label>
            <input type="datetime-local" name="tanggal" id="tanggal">
        </div>

        <button type="submit">Buat Kajian</button>

    </form>
    
@endsection