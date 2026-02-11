@extends('layouts.app')

@section('head')
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $brt->judul }}">
    <meta property="og:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($brt->isi), 150) }}">
    <meta property="og:image" content="{{ asset('storage/' . $brt->gambar) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">
@endsection


@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-3 overflow-hidden">
        <!-- Gambar Berita -->
        <div class="position-relative">
            <img src="{{ asset('storage/' . $brt->gambar) }}" 
                 class="card-img-top img-fluid" 
                 alt="{{ $brt->judul }}" 
                 style="max-height: 450px; object-fit: cover; width:100%;">

            <!-- Overlay Judul di atas gambar -->
            <div class="position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-50 text-white p-3">
                <h2 class="fw-bold mb-0">{{ $brt->judul }}</h2>
            </div>
        </div>

        <div class="card-body p-4">
            <!-- Info tambahan -->
            <div class="d-flex flex-wrap justify-content-between text-muted small mb-4">
                <div>
                    <i class="bi bi-calendar-event me-2"></i>
                    {{ \Carbon\Carbon::parse($brt->tanggal)->translatedFormat('d F Y H:i') }}
                </div>
                <div>
                    <i class="bi bi-eye me-2"></i>{{ $brt->views ?? 0 }} kali dibaca
                </div>
            </div>

            <!-- Isi berita -->
            <div class="card-text fs-5" style="line-height: 1.8; text-align: justify;">
                {!! nl2br(e($brt->isi)) !!}
            </div>

            <!-- Tombol kembali -->
            <div class="mt-5">
                <a href="{{ url('/berita') }}" 
                   class="btn btn-success rounded-pill px-4 shadow-sm">
                    <i class="bi bi-arrow-left-circle me-2"></i> Kembali ke Daftar Berita
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
