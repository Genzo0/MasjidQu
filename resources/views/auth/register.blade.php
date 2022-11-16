@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
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
                                <textarea class="form-control" name="alamat_masjid" id="alamat_masjid" cols="30" rows="10"></textarea>

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
                                <textarea class="form-control" name="deskripsi_masjid" id="deskripsi_masjid" cols="30" rows="10"></textarea>

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
