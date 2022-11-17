@extends('../layouts/app')

@section('content')
    <form action="/masjid/{{$masjid->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

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
            <label for="Gambar masjid" class="col-md-4 col-form-label text-md-end">{{ __('Gambar masjid') }}</label>
    
            <div class="col-md-6">
                <input type="file" name="foto_masjid" id="foto_masjid">
                <input type="hidden" name="foto_lama" value="{{$masjid->foto}}">
            </div>
        </div>
    
        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Edit
                </button>
            </div>
        </div>
    </form>


@endsection