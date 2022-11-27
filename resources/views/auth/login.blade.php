@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-end mt-3">
        <div class="col-8 fs-1">
            <p class="text-center position-relative" 
            style="font-size: 70px; top:27vh">Selamat Datang</p>
        </div>
        <div class="col-4">
            <!-- form login -->
            <div
                class="card shadow-sm p-3 position-relative mt-5"
                style="
                width: 25rem;
                background-color: transparent;
                border-radius: 50px;
                ">
                <div class="card-body">
                <p class="card-title text-center mb-4" style="font-size: 50px">Login</p>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div>
                        <input
                            type="username"
                            class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}""
                            id="username"
                            placeholder="Nama Pengguna"
                        />
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div>
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror mt-4" 
                            name="password"
                            placeholder="Kata Sandi"
                        />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-grid gap-2">
                    <button
                        class="btn btn-primary mt-5"
                        type="submit"
                        style="background-color: #0094b1;"
                    >
                        Login
                    </button>
                    </div>
                </form>
                <p style="margin-top: 40px">
                    Belum punya akun?
                    <a href="{{url('register');}}" class="card-link">Register Sekarang</a>
                </p>
                <p class="mt-2">
                    Masuk sebagai tamu?
                    <a href="{{url('/');}}" class="card-link">Masuk Sekarang!</a>
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
