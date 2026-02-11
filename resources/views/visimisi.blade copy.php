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
                        <a href="https://wa.me/6289621744004?text=Halo%20saya%20tertarik%20dengan%20informasi%20ini" 
                        target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="sms:6289621744004?body=Halo%20saya%20ingin%20bertanya" 
                        class="btn btn-outline-secondary">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                        <a href="https://www.facebook.com/nagari.koto.rantang.2025" 
                        target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </div>
                @endforeach
                </div>    
            </div>
        </div>
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
                    <hr>
                    <h6 class="fw-bold">Tabel Penduduk per Jorong</h6>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Jorong</th>
                                    <th>Laki-Laki</th>
                                    <th>Perempuan</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalLaki = 0;
                                    $totalPerempuan = 0;
                                    $totalSemua = 0;
                                @endphp

                                @foreach($pdk as $m)
                                    @php
                                        $totalLaki += $m->laki_laki;
                                        $totalPerempuan += $m->perempuan;
                                        $totalSemua += $m->laki_laki + $m->perempuan;
                                    @endphp
                                    <tr>
                                        <td>{{ $m->jorong }}</td>
                                        <td>{{ $m->laki_laki }}</td>
                                        <td>{{ $m->perempuan }}</td>
                                        <td>{{ $m->laki_laki + $m->perempuan }}</td>
                                    </tr>
                                @endforeach

                                <!-- Baris total keseluruhan -->
                                <tr class="fw-bold table-secondary">
                                    <td>Total Keseluruhan</td>
                                    <td>{{ $totalLaki }}</td>
                                    <td>{{ $totalPerempuan }}</td>
                                    <td>{{ $totalSemua }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
                            @foreach($brt as $m)
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <small class="text-muted">
                                            {{ \Carbon\Carbon::parse($m->tanggal)->translatedFormat('d F Y H:i') }} WIB
                                        </small>
                                        <br>
                                        <a href="{{ route('berita.show', $m->id_berita) }}" class="text-decoration-none">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($m->judul), 100) }}
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                        {{-- Tab Populer --}}
                        <div class="tab-pane fade" id="populer" role="tabpanel">
                            @foreach($populer as $p)
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <small class="text-muted">
                                            {{ \Carbon\Carbon::parse($p->tanggal)->translatedFormat('d F Y H:i') }} WIB
                                        </small>
                                        <br>
                                        <a href="{{ route('berita.show', $p->id_berita) }}">
                                            {{ $p->judul }}
                                        </a>
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
const ctx = document.getElementById('chartPenduduk').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                @foreach($pdk as $m)
                    "{{ $m->jorong }}",
                @endforeach
            ],
            datasets: [
                {
                    label: 'Laki-Laki',
                    data: [
                        @foreach($pdk as $m)
                            {{ $m->laki_laki }},
                        @endforeach
                    ],
                    backgroundColor: '#007bff'
                },
                {
                    label: 'Perempuan',
                    data: [
                        @foreach($pdk as $m)
                            {{ $m->perempuan }},
                        @endforeach
                    ],
                    backgroundColor: '#6c757d'
                },
                {
                    label: 'Total',
                    data: [
                        @foreach($pdk as $m)
                            {{ $m->laki_laki + $m->perempuan }},
                        @endforeach
                    ],
                    backgroundColor: '#28a745'
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                title: { display: true, text: 'Statistik Penduduk per Jorong' }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 50 }
                }
            }
        }
    });
</script>
@endsection




































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
                        <a href="https://wa.me/6289621744004?text=Halo%20saya%20tertarik%20dengan%20informasi%20ini" 
                        target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="sms:6289621744004?body=Halo%20saya%20ingin%20bertanya" 
                        class="btn btn-outline-secondary">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                        <a href="https://www.facebook.com/nagari.koto.rantang.2025" 
                        target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-facebook"></i>
                        </a>
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
                                    <a href="{{ url('/berita/' . $m->id_berita . '/' . str_replace([' ', '/', '\\'], '-', $m->judul)) }}" class="text-decoration-none">{{ \Illuminate\Support\Str::limit(strip_tags($m->judul), 100) }}</a>
                                </li>
                            </ul>
                        @endforeach
                        </div>
                        <div class="tab-pane fade" id="populer" role="tabpanel">
                            @foreach($populer as $p)
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($p->tanggal)->translatedFormat('d F Y H:i') }} WIB</small><br>
                                    <a href="{{ url('/berita/' . $p->id_berita . '/' . str_replace([' ', '/', '\\'], '-', $p->judul)) }}">{{ $p->judul }}</a>
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
x






