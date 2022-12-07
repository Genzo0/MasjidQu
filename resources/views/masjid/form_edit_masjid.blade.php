@extends('../layouts/app')

@section('content')
    <form action="/masjid/{{$masjid->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="container bg-white bg-opacity-25 rounded-4 col-8 mx-auto py-4">
            <h4 class="d-flex justify-content-center mb-5 fw-bold fs-2">Edit Masjid</h4>
            <form>
              <div class="row my-3">
                <label for="nama_masjid" class="col-2"><h6 class="float-end h-50 mt-2">Nama Masjid</h6></label>
                <div class="col-sm-9">
                    <input id="nama_masjid" type="text" class="form-control @error('nama_masjid') is-invalid @enderror" name="nama_masjid" value="{{ $masjid->nama }}">

                    @error('nama_masjid')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="alamat_masjid" class="col-2"><h6 class="float-end w-50 h-50 mt-2">Alamat Masjid</h6></label>
                <div class="col-sm-9">
                    <textarea id="alamat_masjid" type="text" class="form-control @error('alamat_masjid') is-invalid @enderror" name="alamat_masjid">{{ $masjid->alamat }}</textarea>

                    @error('alamat_masjid')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="deskripsi_masjid" class="col-2"><h6 class="float-end w-50 h-50 mt-2">Deskripsi Masjid</h6></label>
                <div class="col-sm-9">
                    <textarea id="deskripsi_masjid" type="text" class="form-control @error('deskripsi_masjid') is-invalid @enderror" name="deskripsi_masjid">{{ $masjid->deskripsi }}</textarea>

                    @error('deskripsi_masjid')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="gambar" class="col-2"><h6 class="float-end h-50 mt-2">Foto Masjid</h6></label>
                <div class="col-sm-9">
                    <input type="file" name="foto_masjid" class="form-control" id="foto_masjid">
                </div>
              </div>
              <div class="row my-3">
                <div class="col-12 d-flex justify-content-center mt-4">
                  <button type="submit" class="btn btn-info px-5">Edit Masjid</button>
                </div>
              </div>

        {{-- <div class="row mb-3">
            <label for="nama_masjid" class="col-md-4 col-form-label text-md-end">{{ __('Nama Masjid') }}</label>

            <div class="col-md-6">
                <input id="nama_masjid" type="text" class="form-control @error('nama_masjid') is-invalid @enderror" name="nama_masjid" value="{{ $masjid->nama }}">

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
                <textarea id="alamat_masjid" type="text" class="form-control @error('alamat_masjid') is-invalid @enderror" name="alamat_masjid">{{ $masjid->alamat }}</textarea>

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
                <textarea id="deskripsi_masjid" type="text" class="form-control @error('deskripsi_masjid') is-invalid @enderror" name="deskripsi_masjid">{{ $masjid->deskripsi }}</textarea>

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
        </div> --}}
    </form>


@endsection