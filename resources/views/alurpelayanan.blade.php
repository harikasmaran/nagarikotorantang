@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- KONTEN KIRI -->
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>Alur Pelayanan</h3><br>
                    <img src="https://kec-bangkinang.kamparkab.go.id/public/pages/2022/06/6f8fd032ceeeae03572bd6515c13a193.jpg" 
                         class="img-fluid d-block mx-auto mb-4" 
                         alt="Alur Pelayanan">
                    <div class="text-muted mb-3" style="font-size: 14px;">
                        <i class="bi bi-person-fill"></i> Super Admin
                    </div>
                    <div class="d-flex gap-2 mt-4">
                        <a href="https://wa.me/6289621744004?text=Halo%20saya%20tertarik%20dengan%20informasi%20ini" target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="sms:6289621744004?body=Halo%20saya%20ingin%20bertanya" class="btn btn-outline-secondary">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                        <a href="https://www.facebook.com/nagari.koto.rantang.2025" target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SIDEBAR KANAN -->
        <div class="col-md-4">
            {{-- Menu Kategori --}}
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

            {{-- Statistik Penduduk --}}
            <div class="card mb-4 border-custom">
                <div class="card-header bg-custom text-dark fw-bold">
                    <i class="bi bi-bar-chart"></i> Statistik Penduduk
                </div>
                <div class="card-body">
                    <canvas id="chartPenduduk" height="200"></canvas>
                </div>
            </div>
            {{-- Arsip Artikel --}}
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
                        {{-- Tab Terkini --}}
                        <div class="tab-pane fade show active" id="terkini" role="tabpanel">
                            <ul class="list-unstyled">
                                @foreach($brt as $m)
                                    <li class="mb-2">
                                        <small class="text-muted">
                                            {{ \Carbon\Carbon::parse($m->tanggal)->translatedFormat('d F Y H:i') }} WIB
                                        </small><br>
                                        <a href="{{ url('/berita/' . $m->id_berita . '/' . \Illuminate\Support\Str::slug($m->judul)) }}" 
                                           class="text-decoration-none">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($m->judul), 100) }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- Tab Populer --}}
                        <div class="tab-pane fade" id="populer" role="tabpanel">
                            <ul class="list-unstyled">
                                @foreach($populer as $p)
                                    <li class="mb-3">
                                        <small class="text-muted">
                                            {{ \Carbon\Carbon::parse($p->tanggal)->translatedFormat('d F Y H:i') }} WIB
                                        </small><br>
                                        <a href="{{ url('/berita/' . $p->id_berita . '/' . \Illuminate\Support\Str::slug($p->judul)) }}" >
                                            {{ $p->judul }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- CSS Custom --}}
<style>
    .border-custom { border-color: #2d6a4f; }
    .bg-custom { background-color: #2d6a4f; color: #ffffff; }
    .card.bg-custom, .card .card-header.bg-custom { color: #fff !important; }
</style>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('chartPenduduk').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: @json($pdk->pluck('jorong')),
        datasets: [
            { label: 'Laki-Laki', data: @json($pdk->pluck('laki_laki')), backgroundColor: '#007bff' },
            { label: 'Perempuan', data: @json($pdk->pluck('perempuan')), backgroundColor: '#6c757d' },
            { label: 'Total Penduduk', data: @json($pdk->map(fn($m) => $m->laki_laki + $m->perempuan)), backgroundColor: '#28a745' },
            { label: 'Jumlah KK', data: @json($pdk->pluck('jumlah_kk')), backgroundColor: '#ffc107' }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'top' },
            title: { display: true, text: 'Statistik Penduduk & Jumlah KK per Jorong' }
        },
        scales: {
            y: { beginAtZero: true, ticks: { stepSize: 50 } }
        }
    }
});
</script>
@endsection
