@extends('../layouts/app')

@section('content')

    <form action="/kajian/{{$kajian->id}}" method="POST">
        @csrf
        @method('put')

        <div class="container bg-white bg-opacity-25 rounded-4 col-8 mx-auto py-4">
            <h4 class="d-flex justify-content-center mb-5 fw-bold fs-2">Edit Kajian</h4>
            <form>
              <div class="row my-3">
                <label for="judul_kajian" class="col-2"><img src="{{asset('assets/kajian_img/Book.svg')}}" class="float-end w-50 h-50 mt-1"></label>
                <div class="col-sm-9">
                    <input id="judul_kajian" type="text" class="form-control @error('judul_kajian') is-invalid @enderror" name="judul_kajian" value="{{ $kajian->judul_kajian }}">

                    @error('judul_kajian')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="nama_ustaz" class="col-2"><img src="{{asset('assets/kajian_img/person.svg')}}" class="float-end w-50 h-50 mt-1"></label>
                <div class="col-sm-9">
                    <input id="nama_ustaz" type="text" class="form-control @error('nama_ustaz') is-invalid @enderror" name="nama_ustaz" value="{{ $kajian->nama_ustaz }}">

                    @error('nama_ustaz')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="tanggal" class="col-2"><img src="{{asset('assets/kajian_img/date.svg')}}" class="float-end w-50 h-50 mt-1"></label>
                <div class="col-sm-9">
                    <input id="tanggal" type="datetime-local" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ $kajian->tanggal.'T'.$kajian->waktu }}">

                    @error('tanggal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <div class="col-12 d-flex justify-content-center mt-5">
                  <button type="submit" class="btn btn-info px-5">Edit Kajian</button>
                </div>
              </div>
            </form>
          </div>




        {{-- <div class="row mb-3">
            <label for="judul_kajian" class="col-md-4 col-form-label text-md-end">{{ __('judul_kajian') }}</label>

            <div class="col-md-6">
                <input id="judul_kajian" type="text" class="form-control @error('judul_kajian') is-invalid @enderror" name="judul_kajian" value="{{ $kajian->judul_kajian }}">

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
                <input id="nama_ustaz" type="text" class="form-control @error('nama_ustaz') is-invalid @enderror" name="nama_ustaz" value="{{ $kajian->nama_ustaz }}">

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
                <input id="tanggal" type="datetime-local" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ $kajian->tanggal.'T'.$kajian->waktu }}">

                @error('tanggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <button type="submit">Edit Kajian</button> --}}

    </form>
    
@endsection