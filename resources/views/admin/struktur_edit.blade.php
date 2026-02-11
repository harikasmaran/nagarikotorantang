@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-none d-md-block p-0 bg-dark position-fixed" style="height: 100vh;">
            @include('layouts.sidebar')
        </div>

        <!-- Main Content -->
        <main class="offset-md-3 offset-lg-2 col-md-9 col-lg-10 px-md-4">
            <div class="d-flex justify-content-between align-items-center pt-3 mb-3 border-bottom">
                <h2>Edit Struktur Organisasi</h2>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form action="{{ route('struktur.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Tanggal -->
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal" 
                                           class="form-control" 
                                           value="{{ old('tanggal', $item->tanggal) }}" required>
                                </div>

                                <!-- Gambar -->
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label><br>
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/' . $item->gambar) }}" 
                                             alt="Gambar Struktur" 
                                             class="img-thumbnail mb-2" 
                                             style="max-height: 200px;">
                                    @endif
                                    <input type="file" name="gambar" id="gambar" class="form-control">
                                    <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                                </div>

                                <!-- Tombol -->
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('struktur.index') }}" class="btn btn-secondary">
                                        <i class="bi bi-arrow-left"></i> Kembali
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-save"></i> Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
