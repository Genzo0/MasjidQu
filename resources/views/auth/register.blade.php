@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-8 fs-1">
            <p class="text-center position-relative" 
            style="font-size: 70px; top:29vh">Selamat Datang</p>
        </div>
        <div class="col-4">
        <section>
      <div
        class="card shadow-sm p-2"
        style="
          width: 25rem;
          background-color: transparent;
          border-radius: 40px;
        "
      >
        <div class="card-body">
          <p class="card-title text-center mb-4" style="font-size: 50px">Register</p>
          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
              <input
                type="text"
                class="form-control @error('username') is-invalid @enderror " 
                name="username" 
                id = "username"
                value="{{ old('username') }}"
                placeholder="Nama Pengguna*"
              />
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control @error('nama_masjid') is-invalid @enderror" 
                name="nama_masjid" 
                value="{{ old('nama_masjid') }}"
                id="nama_masjid"
                placeholder="Nama Masjid*"
              />
                @error('nama_masjid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class=" mb-3">
              <!-- <label for="exampleInputEmail1" class="form-label"
                >Username</label
              > -->
              <input
                type="text"
                class="form-control @error('alamat_masjid') is-invalid @enderror" 
                name="alamat_masjid" 
                value="{{ old('alamat_masjid') }}"
                id="alamat_masjid"
                placeholder="Alamat Masjid*"
              />

              @error('alamat_masjid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control @error('deskripsi_masjid') is-invalid @enderror" 
                name="deskripsi_masjid"
                id="deskripsi_masjid"
                placeholder="Deskripsi Masjid*"
              />
              @error('deskripsi_masjid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <input
                type="password"
                class="form-control @error('password') is-invalid @enderror" 
                name="password"
                id="password"
                placeholder="Kata Sandi*"
              />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
              <input
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                name="password_confirmation"
                id="password-confirm"
                placeholder="Konfirmasi Kata Sandi*"
              />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-control input-group">
                <p class="opacity-75">Foto Masjid</p>
                <input type="file" name="foto_masjid" id="foto_masjid">
            </div>
            <div>
                <p class="mt-2">* wajib diisi</p>
            </div>
            <div class="d-grid">
              <button
                class="btn btn-primary mt-2"
                type="submit"
                style="background-color: #0094b1"
              >
                Register
              </button>
            </div>
          </form>
          <p style="margin-top: 40px">
            Sudah punya akun?
            <a href="{{url('login');}}" class="card-link">Login Sekarang</a>
          </p>
          <p>
            Masuk sebagai tamu?
            <a href="{{url('/');}}" class="card-link">Masuk Sekarang!</a>
          </p>
        </div>
      </div>
    </section>

            <!-- <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nama_masjid" class="col-md-4 col-form-label text-md-end">{{ __('Nama Masjid') }}</label>

                            <div class="col-md-6">
                                <input id="nama_masjid" type="text" class="form-control @error('nama_masjid') is-invalid @enderror" name="nama_masjid" value="{{ old('nama_masjid') }}">

                                @error('nama_masjid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="alamat_masjid" class="col-md-4 col-form-label text-md-end">{{ __('Alamat Masjid') }}</label>

                            <div class="col-md-6">
                                <textarea id="alamat_masjid" type="text" class="form-control @error('alamat_masjid') is-invalid @enderror" name="alamat_masjid">{{ old('alamat_masjid') }}</textarea>

                                @error('alamat_masjid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="deskripsi_masjid" class="col-md-4 col-form-label text-md-end">{{ __('Deskripsi Masjid') }}</label>

                            <div class="col-md-6">
                                <textarea id="deskripsi_masjid" type="text" class="form-control @error('deskripsi_masjid') is-invalid @enderror" name="deskripsi_masjid">{{ old('deskripsi_masjid') }}</textarea>

                                @error('deskripsi_masjid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Foto Masjid') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="foto_masjid" id="foto_masjid">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div>
                        <span>Sudah punya akun ? <a href="{{url('login');}}">Login sekarang</a></span>
                    </div>
                    <div>
                        <span>Ingin masuk sebagai tamu ? <a href="{{url('/');}}">Masuk sekarang</a></span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
