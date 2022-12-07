@extends('../layouts/app')

@section('content')

    <form action="/kajian" method="POST">
        @csrf

        <div class="container bg-white bg-opacity-25 rounded-4 shadow-sm col-8 mx-auto py-4">
            <h4 class="d-flex justify-content-center mb-5 fw-bold fs-2">Tambah Kajian</h4>
            <form>
              <div class="row my-3">
                <label for="judul_kajian" class="col-2"><h6 class="float-end h-50 mt-2">Judul Kajian</h6></label>
                <div class="col-sm-9">
                    <input id="judul_kajian" type="text" class="form-control @error('judul_kajian') is-invalid @enderror" name="judul_kajian" value="{{ old('judul_kajian') }}"
                    placeholder="Judul Kajian">

                    @error('judul_kajian')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="pemateri" class="col-2"><h6 class="float-end h-50 mt-2">Nama Ustaz</h6></label>
                <div class="col-sm-9">
                    <input id="nama_ustaz" type="text" class="form-control @error('nama_ustaz') is-invalid @enderror" name="nama_ustaz" value="{{ old('nama_ustaz') }}"
                    placeholder="Ustadz/Pemateri">

                    @error('nama_ustaz')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="waktu" class="col-2"><h6 class="float-end h-50 mt-2">Tanggal</h6></label>
                <div class="col-sm-9">
                    <input id="tanggal" type="datetime-local" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">

                    @error('tanggal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <div class="col-12 d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-info px-5">Tambah Kajian</button>
                </div>
              </div>
            </form>
          </div>

        {{-- <div class="container">
            <div class="card shadow-sm p-5 position-absolute top-50 start-50 translate-middle" style="width: 100vh; height: 75vh; border-radius: 60px;">
            <div class="row mb-5">
                <h2 class="fw-bold text-center">Tambah Kajian</h2>
            </div>
            <div class="row mb-3">
                <!-- <label for="judul_kajian" class="col-md-4 col-form-label text-md-end">{{ __('judul_kajian') }}</label> -->
                <label for="judul_kajian" class="col-md-4 col-form-label text-md-end">{{ __('judul_kajian') }}</label>
                
                <div class="col-md-6">
                    <input id="judul_kajian" type="text" class="form-control @error('judul_kajian') is-invalid @enderror" name="judul_kajian" value="{{ old('judul_kajian') }}"
                    placeholder="Tema Kajian">

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
                    <input id="nama_ustaz" type="text" class="form-control @error('nama_ustaz') is-invalid @enderror" name="nama_ustaz" value="{{ old('nama_ustaz') }}"
                    placeholder="Ustadz/Pemateri">

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
            <div class="">
                <button type="submit" class="btn btn-primary position-relative top-50 start-50 translate-middle px-5">Tambah Kajian</button>
            </div>
            </div>
        </div> --}}
        

        

    </form>
    
@endsection