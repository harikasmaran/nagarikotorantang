@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 d-none d-md-block p-0 bg-dark position-fixed" style="height: 100vh;">
            @include('layouts.sidebar')
        </div>

        <main class="offset-md-3 offset-lg-2 col-md-9 col-lg-10 px-md-4">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Tambah Data Penduduk</h2>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('penduduk.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Jorong</label>
                            <input type="text" name="jorong" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Laki-Laki</label>
                            <input type="number" name="laki_laki" class="form-control" required min="0">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Perempuan</label>
                            <input type="number" name="perempuan" class="form-control" required min="0">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah KK</label>
                            <input type="number" name="jumlah_kk" class="form-control" required min="0">
                        </div>

                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                        <a href="{{ route('penduduk.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
