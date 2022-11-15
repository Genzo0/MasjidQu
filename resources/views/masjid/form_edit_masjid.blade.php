@extends('../layouts/app')

@section('content')
    <form action="/masjid/{{$masjid->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row mb-3">
            <label for="nama_masjid" class="col-md-4 col-form-label text-md-end">{{ __('nama_masjid') }}</label>
    
            <div class="col-md-6">
                <input id="nama_masjid" type="text" class="form-control @error('nama_masjid') is-invalid @enderror" name="nama_masjid" value="{{$masjid->nama ? $masjid->nama : ""}}">
    
                @error('nama_masjid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="row mb-3">
            <label for="alamat_masjid" class="col-md-4 col-form-label text-md-end">{{ __('alamat_masjid') }}</label>
    
            <div class="col-md-6">
                <textarea name="alamat_masjid" id="alamat_masjid" cols="30" rows="10">{{$masjid->alamat}}</textarea>
    
                @error('alamat_masjid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="row mb-3">
            <label for="deskripsi_masjid" class="col-md-4 col-form-label text-md-end">{{ __('deskripsi_masjid') }}</label>
    
            <div class="col-md-6">
                <textarea name="deskripsi_masjid" id="deskripsi_masjid" cols="30" rows="10">{{$masjid->deskripsi}}</textarea>
    
                @error('deskripsi_masjid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
    
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