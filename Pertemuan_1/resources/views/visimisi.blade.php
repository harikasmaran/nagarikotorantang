@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body"><br>
                @foreach($vm as $m)
                    <h2 class="fw-bold">Visi dan Misi</h2>
                    <div class="text-muted mb-3 d-flex align-items-center" style="font-size: 14px;">
                        <i class="bi bi-person-circle me-2"></i> Super Admin
                        <i class="bi bi-clock ms-4 me-2"></i>  {{ \Carbon\Carbon::parse($m->tanggal)->translatedFormat('d F Y H:i') }} WIB
                    </div>
                    <h5 class="fw-semibold mt-4">Visi Nagari Koto Rantang</h5>
                    <p>{{$m -> visi}}</p>
                    <h5 class="fw-semibold mt-4">Misi Nagari Koto Rantang</h5>
                    <ol>
                        @foreach(explode(';', $m->misi) as $point)
                            @if(trim($point) != '')
                            <li>{{ trim($point) }}</li>
                            @endif
                        @endforeach
                    </ol>
                    <div class="d-flex gap-2 mt-4">
                        <a href="https://wa.me/6281234567890?text=Halo%20saya%20tertarik%20dengan%20informasi%20ini" 
                        target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="sms:081234567890?body=Halo%20saya%20ingin%20bertanya" 
                        class="btn btn-outline-secondary">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" 
                        target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <button class="btn btn-outline-secondary" onclick="sharePage()">
                            <i class="bi bi-share"></i>
                        </button>
                    </div>
                @endforeach
                </div>    
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 border-custom">
                <div class="card-header bg-custom text-dark fw-bold">
                    <i class="bi bi-list"></i> Menu Kategori
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li><a href="/berita" class="text-decoration-none">Berita</a></li>
                    </ul>
                </div>
            </div>
            <div class="card mb-4 border-custom">
                <div class="card-header bg-custom text-dark fw-bold">
                    <i class="bi bi-bar-chart"></i> Statistik
                </div>
                <div class="card-body">
                    <canvas id="chartPenduduk" height="200"></canvas>
                </div>
            </div>
            <div class="card mb-4 border-custom">
                <div class="card-header bg-custom text-dark fw-bold">
                    <i class="bi bi-archive"></i> Arsip Artikel
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" id="arsipTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="terkini-tab" data-bs-toggle="tab" data-bs-target="#terkini" type="button" role="tab">Terkini</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="populer-tab" data-bs-toggle="tab" data-bs-target="#populer" type="button" role="tab">Populer</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="arsipTabContent">
                        <div class="tab-pane fade show active" id="terkini" role="tabpanel">
                        @foreach($brt as $m)
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($m->tanggal)->translatedFormat('d F Y H:i') }} WIB</small><br>
                                    <a href="{{ route('berita.show', $m->id_berita) }}" class="text-decoration-none">{{ \Illuminate\Support\Str::limit(strip_tags($m->judul), 100) }}</a>
                                </li>
                            </ul>
                        @endforeach
                        </div>
                        <div class="tab-pane fade" id="populer" role="tabpanel">
                            @foreach($populer as $p)
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($p->tanggal)->translatedFormat('d F Y H:i') }} WIB</small><br>
                                    <a href="{{ route('berita.show', $p->id_berita) }}">{{ $p->judul }}</a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .border-custom{
        border-color: #2d6a4f;
    }
    .bg-custom{
         background-color: #2d6a4f;
         color: #ffffff;
    }
    .card.bg-custom,.card .card-header.bg-custom {
    color: #fff !important;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
@foreach($pdk as $m)
    const ctx = document.getElementById('chartPenduduk').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Laki-Laki', 'Perempuan', 'Total'],
            datasets: [{
                label: 'Jumlah',
                data: [{{$m->laki_laki}}, {{$m->perempuan}}, {{ $m->laki_laki + $m->perempuan }}],
                backgroundColor: ['#007bff', '#6c757d', '#28a745']
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1000
                    }
                }
            }
        }
    });
@endforeach
function sharePage() {
    if (navigator.share) {
        navigator.share({
            title: document.title,
            text: 'Coba cek halaman ini:',
            url: window.location.href
        });
    } else {
        alert("Fitur share tidak didukung di browser ini");
    }
}
</script>
@endsection
