@extends('layouts.app')

@section('content')
<body>
    @guest
    <h1 class="display-1 position-absolute top-50 start-50 translate-middle text-center">Selamat Datang</h1>
    @endguest

    @auth
        <h1 class="display-4 position-absolute top-50 start-50 translate-middle text-center">Selamat Datang, <br>Pengurus Masjid {{$masjid->nama}}</h1>
    @endauth
</body>
@endsection
