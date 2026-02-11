<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nagari Koto Rantang</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/asset/logo.png') }}" />
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    @yield('head')

    <style>
        #navbar {
            transition: top 0.3s ease-in-out;
        }
        .hero {
            background: url('https://source.unsplash.com/1600x600/?village,nature') center/cover no-repeat;
            color: white;
            height: 80vh;
            display: flex;
            align-items: center;
            position: relative;
        }
        .hero::after {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero-content {
            z-index: 2;
        }
        footer .social-link {
            transition: all 0.3s ease;
        }
        footer .social-link:hover {
            color: #ffd700;
            transform: scale(1.2);
        }
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: #ffffff !important;
                padding: 10px;
                border-radius: 0 0 8px 8px;
                box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            }
        }
    </style>
    @stack('styles')
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top" style="height: 60px;">
    <div class="container">
        <img src="{{ asset('storage/asset/logo.png') }}" alt="Logo Desa" width="40" height="40" class="me-2">
        <a class="navbar-brand fw-bold" href="/">Nagari Koto Rantang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="/">Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                    <ul class="dropdown-menu" aria-labelledby="profilDropdown">
                        <li><a class="dropdown-item" href="/visi_misi">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="/listing">Peta Desa</a></li>
                        <li><a class="dropdown-item" href="/struktur">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/alurpelayanan">Pelayanan</a></li>
                <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="/galery">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="text-white pt-5 pb-4" style="background: linear-gradient(to right, #2d6a4f, #40916c);">
    <div class="container">
        <div class="row text-center text-md-start">
            <div class="col-md-6 mb-4">
                <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-2">
                    <img src="{{ asset('storage/asset/logo.png') }}" alt="Logo Desa" width="55" class="me-2">
                    <h5 class="fw-bold m-0">Nagari Koto Rantang</h5>
                </div>
                <p class="small">Website resmi Nagari Koto Rantang sebagai pusat informasi, layanan publik, dan berita terkini bagi masyarakat.</p>
            </div>

            <div class="col-md-6 mb-4 text-center text-md-end">
                <h6 class="fw-bold mb-3">Kontak</h6>
                <p class="small mb-1"><i class="bi bi-geo-alt-fill me-2"></i>Palupuh, Agam, Sumatera Barat</p>
                <p class="small mb-1"><i class="bi bi-telephone-fill me-2"></i>+62 812-3456-7890</p>
                <p class="small"><i class="bi bi-envelope-fill me-2"></i>info@nagarikotarantang.id</p>
                <div class="mt-3">
                    <a href="#" class="text-white fs-5 me-3 social-link"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white fs-5 me-3 social-link"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white fs-5 me-3 social-link"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="text-white fs-5 social-link"><i class="bi bi-envelope"></i></a>
                </div>
            </div>
        </div>

        <hr class="border-light">
        <div class="text-center">
            <p class="mb-0">Made With <i class="bi bi-balloon-heart-fill"></i> Programmer KKN USTI 2025</p>
        </div>
    </div>
</footer>

<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function () {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            navbar.style.top = "-80px";
        } else {
            navbar.style.top = "0";
        }
        lastScrollTop = scrollTop;
    });
</script>
@stack('scripts')
</body>
</html>
