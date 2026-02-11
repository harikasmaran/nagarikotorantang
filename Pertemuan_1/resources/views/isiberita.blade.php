@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow">
        <img src="{{ asset('storage/' . $brt->gambar) }}" class="card-img-top" alt="{{ $brt->judul }}">
        <div class="card-body">
            <h2 class="card-title">{{ $brt->judul }}</h2>
            <p class="text-muted">{{ \Carbon\Carbon::parse($brt->tanggal)->translatedFormat('d F Y H:i') }}</p>
            <p class="card-text">{!! nl2br(e($brt->isi)) !!}</p>
        </div>
    </div>
</div>
@endsection