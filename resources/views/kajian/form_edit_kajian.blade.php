@extends('../layouts/app')

@section('content')

    <form action="/kajian/{{$kajian->id}}" method="POST">
        @csrf
        @method('put')
        <div>
            <label for="">Judul Kajian</label>
            <input type="text" name="judul_kajian" id="judul_kajian" value="{{$kajian->judul_kajian}}">
        </div>

        <div>
            <label for="">Nama Ustaz</label>
            <input type="text" name="nama_ustaz" id="judul_kajian" value="{{$kajian->nama_ustaz}}">
        </div>

        <div>
            <label for="">Tanggal dan Waktu</label>
            <input type="datetime-local" name="tanggal" id="tanggal" value="{{$kajian->tanggal.'T'.$kajian->waktu}}">
        </div>

        <button type="submit">Edit Kajian</button>

    </form>
    
@endsection