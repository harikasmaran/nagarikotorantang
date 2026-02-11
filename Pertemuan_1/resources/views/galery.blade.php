@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4 fw-bold">Galery Desa</h1><br>

    <div class="row">
        @foreach ($glr as $m)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('storage/' . $m->gambar) }}" class="card-img-top" alt="Gambar Berita">
                <div class="card-body">
                    <h5 class="card-title">{{$m -> deskripsi}}</h5>
                </div>
                <div class="card-footer text-muted small d-flex justify-content-between align-items-center">
                    <div>
                        <i class="bi bi-clock me-1"></i>  {{ \Carbon\Carbon::parse($m->tanggal)->translatedFormat('d F Y ') }} WIB
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
