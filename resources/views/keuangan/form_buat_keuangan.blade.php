@extends('../layouts/app')

@section('content')
    
    <form action="/keuangan" method="POST">
        @csrf
        <div class="container bg-white bg-opacity-25 rounded-4 shadow-sm col-8 mx-auto py-4">
            <h4 class="d-flex justify-content-center mb-5 fw-bold fs-2">Tambah Keuangan</h4>
            <form>
              <div class="row my-3">
                <label for="tanggal" class="col-2"><h6 class="float-end w-50 h-50 mt-2">Tanggal</h6></label>
                <div class="col-sm-9">
                    <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">

                    @error('tanggal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="pengeluaran" class="col-2"><h6 class="float-end w-50 h-50 mt-2">Pengeluaran</h6></label>
                <div class="col-sm-9">
                    <input id="pengeluaran" type="number" class="form-control @error('pengeluaran') is-invalid @enderror" name="pengeluaran" value="{{ old('pengeluaran') }}"
                    placeholder="ex: 100000">

                    @error('pengeluaran')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="pemasukkan" class="col-2"><h6 class="float-end w-50 h-50 mt-2">Pemasukan</h6></label>
                <div class="col-sm-9">
                    <input id="pemasukkan" type="number" class="form-control @error('pemasukkan') is-invalid @enderror" name="pemasukkan" value="{{ old('pemasukkan') }}"
                    placeholder="ex: 100000">

                    @error('pemasukkan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <label for="keterangan" class="col-2"><h6 class="float-end w-50 h-50 mt-2">Keterangan</h6></label>
                <div class="col-sm-9">
                    <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}"
                    placeholder="ex: Pembayaran Listrik Bulanan">

                    @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="row my-3">
                <div class="col-12 d-flex justify-content-center">
                  <button type="submit" class="btn btn-info px-5 mt-4">Tambah</button>
                </div>
              </div>
            </form>
          </div>

        {{-- <div class="row mb-3">
            <label for="pemasukkan" class="col-md-4 col-form-label text-md-end">{{ __('Pemasukkan') }}</label>

            <div class="col-md-6">
                <input id="pemasukkan" type="number" class="form-control @error('pemasukkan') is-invalid @enderror" name="pemasukkan" value="{{ old('pemasukkan') }}">

                @error('pemasukkan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="pengeluaran" class="col-md-4 col-form-label text-md-end">{{ __('pengeluaran') }}</label>

            <div class="col-md-6">
                <input id="pengeluaran" type="number" class="form-control @error('pengeluaran') is-invalid @enderror" name="pengeluaran" value="{{ old('pengeluaran') }}">

                @error('pengeluaran')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="keterangan" class="col-md-4 col-form-label text-md-end">{{ __('keterangan') }}</label>

            <div class="col-md-6">
                <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}">

                @error('keterangan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="tanggal" class="col-md-4 col-form-label text-md-end">{{ __('tanggal') }}</label>

            <div class="col-md-6">
                <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">

                @error('tanggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <button type="submit">
            buat keuangan
        </button> --}}
    </form>
    
@endsection