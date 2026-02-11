@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar tetap -->
        <div class="col-md-3 col-lg-2 d-none d-md-block p-0 bg-dark position-fixed" style="height: 100vh;">
            @include('layouts.sidebar')
        </div>
        
        <!-- Konten utama -->
        <main class="offset-md-3 offset-lg-2 col-md-9 col-lg-10 px-md-4">
            <br><br>
            <h2>Edit Data Penduduk</h2>
            <div class="card mt-3">
                <div class="card-body">
                    <form action="{{ route('penduduk.update', $item->id_penduduk) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="jorong" class="form-label">Jorong</label>
                            <input type="text" name="jorong" class="form-control" 
                                   value="{{ $item->jorong }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="laki_laki" class="form-label">Laki-laki</label>
                            <input type="number" name="laki_laki" class="form-control" 
                                   value="{{ $item->laki_laki }}" required min="0">
                        </div>

                        <div class="mb-3">
                            <label for="perempuan" class="form-label">Perempuan</label>
                            <input type="number" name="perempuan" class="form-control" 
                                   value="{{ $item->perempuan }}" required min="0">
                        </div>

                        <div class="mb-3">
                            <label for="jumlah_kk" class="form-label">Jumlah KK</label>
                            <input type="number" name="jumlah_kk" class="form-control" 
                                   value="{{ $item->jumlah_kk }}" required min="0">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                        <a href="{{ route('penduduk.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
