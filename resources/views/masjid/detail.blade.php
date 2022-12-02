@extends('../layouts/app')

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-10 mx-auto">
          <img src="{{ asset('storage/'. $masjid->foto) }}" class="img-fluid rounded w-100 shadow-sm" alt="{{ $masjid->nama }}" height="500">
        </div>
    </div>
    <div class="row">
        <div class="col-10 mx-auto mt-4">
          <h3 class="fw-bold fs-1">Masjid {{ $masjid->nama }}</h3>
              <p class="mb-5 fs-5">{{ $masjid->deskripsi }}</p>
        </div>
    </div>

    @can('isMyAccount', $masjid)
      <form action="/masjid/{{$masjid->id}}/edit" method="get">
      @csrf
        <div class="row">
            <div class="col-10 mx-auto">
              <button type="submit" class="btn btn-primary shadow-sm rounded-4 float-end opacity-75" style="width: 120px;">
                  Edit
              </button>
            </div>
        </div>
      </form>
    @endcan    
    
    @can('isMyAccount', $masjid)
    <form action="/kajian/create" method="get">
      @csrf
    <div class="col-10 mx-auto mb-4">
      <button type="submit" class="btn btn-success  shadow-lg rounded-4 float-end opacity-75" style="width: 180px;">
          <b>Tambah Kajian</b>
      </button>
    </div>
    </form>
    @endcan
    <div class="col-10 mx-auto">
      <h3 class="fw-bold fs-1 mb-3">Jadwal Kajian</h3>
    @forelse ($listKajian as $kajian)
          <div class="card mb-3 bg-transparent rounded-4 shadow">
            <div class="row g-0">
              <div class="col-6">
                <img src="{{asset('assets/masjid-detail.svg')}}" class="img-fluid rounded-start w-100">
              </div>
              <div class="col-6">
                <div class="card-body">
                  <p>
                    <span>
                      <i class="fa fa-book-open fa-xl me-1" style="margin-left: -2px;"></i>
                      {{$kajian->judul_kajian}}
                    </span>
                  </p>
                  <p>
                    <span>
                    <i class="far fa-user fa-xl me-2"></i>
                      {{$kajian->nama_ustaz}}
                    </span>
                  </p>
                  <p>
                    <span>
                    <i class="far fa-calendar-check fa-xl me-2"></i>
                      {{$kajian->hari}}, {{$kajian->tanggal}}
                    </span>
                  </p>
                  <p>
                    <span>
                      <i class="far fa-clock fa-xl me-2"></i>
                      {{$kajian->waktu}} WIB
                    </span>
                  </p>
                  <p>
                    <span>
                      <i class="fa fa-location-dot fa-xl me-2" style="margin-left: 2px"></i>
                      {{"Masjid ".$kajian->masjid->nama}}
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-10 mx-auto mb-3">
                @can('isMyAccount', $kajian->masjid)
                <form action="/kajian/{{$kajian->id}}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" onclick="return confirm('Apakah yakin ingin menghapus ?')"
                  class="btn btn-danger shadow rounded-4 float-end opacity-75" style="width: 120px;">
                  Hapus
                  </button>
                </form>

                <form action="/kajian/{{$kajian->id}}/edit" method="get">
                  @csrf
                <button type="submit" class="btn btn-primary shadow rounded-4 float-end opacity-75 mx-4" style="width: 120px;">
                    Edit
                </button>
                </form>
                @endcan
              </div>
            </div>
          </div>
          
        
    @empty
    <div class="card mb-3 bg-transparent rounded-4 shadow p-5">
      <div class="row g-0">
        <div class="col-6">
          <h1 class="position-absolute top-50 start-50 translate-middle fs-5">Belum ada data kajian</h1>
        </div>
      </div>
    </div>
    @endforelse
    </div>

    <div class="row">
        <div class="col-10 mx-auto">
          <form action="/keuangan/{{$masjid->id}}" method="get">
            <button type="submit" class="btn float-end shadow-lg rounded-4">
              <span>
                <img src="{{asset('assets/detail-keuangan-icon.svg')}}" style="height: 60px; width: 60px; ">
                <a href="/keuangan/{{$masjid->id}}" class="fw-bold fs-5 text-decoration-none text-dark">Detail Keuangan</a>
              </span>
            </button>
          </form>
        </div>
    </div>
</div>    
@endsection