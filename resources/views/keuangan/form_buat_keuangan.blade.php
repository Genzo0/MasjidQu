@extends('../layouts/app')

@section('content')
    
    <form action="/keuangan" method="POST">
        @csrf
        <div class="row mb-3">
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
        </button>
    </form>
    
@endsection