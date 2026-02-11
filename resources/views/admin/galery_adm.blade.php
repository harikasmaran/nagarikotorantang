@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 d-none d-md-block p-0 bg-dark position-fixed" style="height: 100vh;">
            @include('layouts.sidebar')
        </div>

        <main class="offset-md-3 offset-lg-2 col-md-9 col-lg-10 px-md-4">
            <div class="d-flex justify-content-between align-items-center pt-3 mb-3 border-bottom">
                <h2>Galeri</h2>
                <a href="{{ route('galery.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="row">
                @forelse ($data as $m)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('storage/' . $m->gambar) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="card-text">{{ $m->deskripsi }}</p>
                                <p class="text-muted small">{{ \Carbon\Carbon::parse($m->tanggal)->translatedFormat('d F Y') }}</p>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('galery.edit', $m->id_galery) }}" class="btn btn-warning btn-sm me-2"><i class="bi bi-pencil-square"></i></a>
                                    <form action="{{ route('galery.destroy', $m->id_galery) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')" style="display: inline;">
                                        @csrf
                                        @method('DELETE') <!-- PENTING: inilah yang 'mengubah' POST jadi DELETE -->
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Belum ada galeri.</p>
                @endforelse
            </div>
        </main>
    </div>
</div>
@endsection
