@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4 fw-bold">Berita Desa</h1>
    <p class="text-center text-muted mb-5">Informasi dan kabar terbaru seputar kegiatan Nagari Koto Rantang.</p>
    <div class="row">
        @foreach($brt as $m)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('storage/' . $m->gambar) }}" class="card-img-top" alt="Gambar Berita">
                <div class="card-body">
                    <h5 class="card-title">{{ $m->judul }}</h5>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($m->isi), 100) }}</p>
                    <a href="{{ url('/berita/' . $m->id_berita . '/' . str_replace([' ', '/', '\\'], '-', $m->judul)) }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
                <div class="card-footer text-muted small d-flex justify-content-between align-items-center">
                    <div>
                        <i class="bi bi-clock me-1"></i> 
                        {{ \Carbon\Carbon::parse($m->tanggal)->translatedFormat('d F Y H:i') }} WIB
                    </div>
                    <div>
                        <span class="badge rounded-pill bg-light text-dark">
                            <i class="bi bi-eye me-1"></i> {{ $m->views ?? 0 }}X dilihat
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<style>
    .btn-primary{
        background-color: #2d6a4f;
        border-color: #2d6a4f;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #429670ff;
        border-color: #429670ff;
        color: #fff;
    }
</style>
@endsection
