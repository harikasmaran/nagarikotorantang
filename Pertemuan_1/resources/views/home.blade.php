@extends('layouts.app')

@section('content')

<!-- Hero -->
<div class="hero position-relative d-flex align-items-center justify-content-center text-center" 
     style="
        background-image: url('{{ asset('storage/asset/bg.png') }}');
        background-size: cover;
        background-position: center;
        height: 90vh;
        width: 100%;
        overflow: hidden;
        filter: brightness(1.6);
     ">
    
    <!-- Overlay gradasi -->
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" 
         style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.6)); z-index: 1;"></div>

    <div class="container text-white position-relative" style="z-index: 2;">
        <!-- Efek mengetik -->
        <h1 class="display-2 fw-bold mb-3 animate__animated animate__fadeInDown">
            <span id="typed-text"></span>
        </h1>

        <p class="lead mb-1 animate__animated animate__fadeInUp animate__delay-1s">
            Di Website Resmi Nagari Koto Rantang
        </p>
        <p class="lead animate__animated animate__fadeInUp animate__delay-2s">
            Kec. Palupuh, Kab. Agam
        </p>

        <a href="#berita" 
           class="btn btn-lg btn-light mt-4 px-4 py-2 rounded-pill shadow-lg animate__animated animate__zoomIn animate__delay-3s">
            <i class="bi bi-newspaper me-2"></i> Lihat Berita Terbaru
        </a>
    </div>
</div>

<!-- Tentang -->
<div class="container py-5" id="tentang">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/asset/desa.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Desa" width="300">
        </div>
        <div class="col-md-6">
            <h2>Tentang Nagari Kami</h2>
            <p>
                Nagari Koto Rantang merupakan salah satu desa tua yang terletak di wilayah pedalaman yang kaya akan sejarah dan kearifan lokal. 
                Nama "Muaro" sendiri berasal dari bahasa Minangkabau yang berarti "muara" atau tempat bertemunya dua aliran sungai, 
                yang dulunya menjadi pusat aktivitas masyarakat seperti berdagang, bercocok tanam, dan bermusyawarah.
            </p>
            <a href="/artikeldesa" class="btn btn-outline-primary" >Baca Selengkapnya</a>
        </div>
    </div>
</div>
<!-- Berita -->
<div class="bg-light py-5" id="berita">
    <div class="container">
        <h2 class="text-center mb-4">Berita Terbaru</h2><br>
        <div class="row">
            @foreach($brt as $m)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('storage/' . $m->gambar) }}" 
                         class="card-img-top" alt="Berita" 
                         style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $m->judul }}</h5>
                        <p class="card-text">
                            {{ \Illuminate\Support\Str::limit(strip_tags($m->isi), 100) }}
                        </p>
                        <a href="{{ route('berita.show', $m->id_berita) }}" 
                            class="btn btn-primary-custom">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Tombol Lihat Artikel Lainnya -->
        <div class="text-center mt-6">
            <a href="/berita" class="text-dark fw-semibold text-decoration-none">
                Lihat Artikel Lainnya <i class="bi bi-chevron-double-right me-2"></i>
            </a>
        </div>  

    </div>
</div>

<!-- Galeri -->
<div class="container py-5" id="galeri">
    <h2 class="text-center mb-4">Galeri Kegiatan</h2><br>
    <div class="row g-3">
        @foreach($glr as $m)
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="{{ asset('storage/' . $m->gambar) }}" 
                     class="card-img-top" alt="Galeri" 
                     style="height: 220px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-text">{{ $m->deskripsi }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Tombol Lihat Galeri Lainnya -->
    <div class="text-center mt-4">
        <a href="/galery" class="text-dark fw-semibold text-decoration-none">
            </i> Lihat Gambar Lainnya <i class="bi bi-chevron-double-right me-2"></i>
        </a>
    </div>
</div>

<!-- CSS Animasi -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    .hero h1, .hero p, .hero a {
        opacity: 0;
        animation: fadeInUp 1.5s forwards;
    }
    .hero h1 { animation-delay: 0.5s; }
    .hero p:nth-of-type(1) { animation-delay: 1s; }
    .hero p:nth-of-type(2) { animation-delay: 1.5s; }
    .hero a { animation-delay: 2s; }

    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    /* Ganti warna utama Bootstrap */
    .btn-primary, .btn-outline-primary {
        --bs-btn-color: #2d6a4f;
        --bs-btn-border-color: #2d6a4f;
        --bs-btn-hover-bg: #2d6a4f;
        --bs-btn-hover-border-color: #2d6a4f;
        --bs-btn-active-bg: #2d6a4f;
        --bs-btn-active-border-color: #2d6a4f;
    }
    .btn-primary-custom{
    background-color: #2d6a4f;
    border-color: #2d6a4f;
    color: #fff;
    }
    .btn-primary-custom:hover {
    background-color: #429670ff;
    border-color: #429670ff;
    color: #fff;
    }
</style>

<!-- Typed.js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    new Typed("#typed-text", {
        strings: [
            "SELAMAT DATANG",
            "WELCOME TO OUR VILLAGE",
            "NAGARI KOTO RANTANG"
        ],
        typeSpeed: 60,
        backSpeed: 30,
        backDelay: 1500,
        loop: true
    });
});
</script>

@endsection
