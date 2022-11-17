@extends('../layouts/app')

@section('content')

    <form action="/kajian" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="judul_kajian" class="col-md-4 col-form-label text-md-end">{{ __('judul_kajian') }}</label>

            <div class="col-md-6">
                <input id="judul_kajian" type="text" class="form-control @error('judul_kajian') is-invalid @enderror" name="judul_kajian" value="{{ old('judul_kajian') }}">

                @error('judul_kajian')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="nama_ustaz" class="col-md-4 col-form-label text-md-end">{{ __('nama_ustaz') }}</label>

            <div class="col-md-6">
                <input id="nama_ustaz" type="text" class="form-control @error('nama_ustaz') is-invalid @enderror" name="nama_ustaz" value="{{ old('nama_ustaz') }}">

                @error('nama_ustaz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="tanggal" class="col-md-4 col-form-label text-md-end">{{ __('tanggal dan waktu') }}</label>

            <div class="col-md-6">
                <input id="tanggal" type="datetime-local" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">

                @error('tanggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <button type="submit">Buat Kajian</button>

    </form>
    
@endsection