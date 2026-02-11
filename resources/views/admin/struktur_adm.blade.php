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
                <h2>Struktur Organisasi</h2>
            </div>

            <div class="row">
                @forelse ($data as $m)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('storage/' . $m->gambar) }}" 
                                 class="card-img-top" 
                                 style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <p class="text-muted small">
                                    {{ \Carbon\Carbon::parse($m->tanggal)->translatedFormat('d F Y') }}
                                </p>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('struktur.edit', $m->id) }}" 
                                       class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            Belum ada data struktur organisasi.
                        </div>
                    </div>
                @endforelse
            </div>
        </main>
    </div>
</div>
@endsection
