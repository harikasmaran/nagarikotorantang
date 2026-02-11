<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nagari Koto Rantang</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/asset/logo.png') }}" />
    @stack('styles')
</head>
<body>
    <div class="sidebar d-flex flex-column p-3 text-white bg-dark" style="height: 100vh;">
        <h4 class="text-center mb-3">Admin Desa</h4>
        <hr>

        <ul class="nav nav-pills flex-column mb-auto">
            <!-- Dashboard -->
            <li class="nav-item">
                <a href="/dashboard" class="nav-link text-white">
                    <i class="bi bi-speedometer2 me-2"></i>Dashboard
                </a>
            </li>

            <!-- Data Penduduk -->
            <li>
                <a href="{{ route('penduduk.index') }}" class="nav-link text-white">
                    <i class="bi bi-people-fill me-2"></i>Data Penduduk
                </a>
            </li>

            <!-- Berita Desa -->
            <li>
                <a href="/admin/berita_adm" class="nav-link text-white">
                    <i class="bi bi-newspaper me-2"></i>Berita Desa
                </a>
            </li>

            <!-- Galeri -->
            <li>
                <a href="{{ route('galery.index') }}" class="nav-link text-white">
                    <i class="bi bi-images me-2"></i>Galeri
                </a>
            </li>

            <!-- Visi Misi -->
            <li>
                <a href="{{ route('visimisi.index') }}" class="nav-link text-white">
                    <i class="bi bi-bullseye me-2"></i>Visi Misi
                </a>
            </li>

            <!-- Struktur  -->
            <li>
                <a href="{{ route('struktur.index') }}" class="nav-link text-white">
                    <i class="bi bi-bullseye me-2"></i>Struktur 
                </a>
            </li>

            <!-- Akun -->
            <li>
                <a href="{{ route('akun.index') }}" class="nav-link text-white">
                    <i class="bi bi-person-circle me-2"></i>Akun
                </a>
            </li>

            <!-- Logout -->
            <li>
                <a href="{{ route('logout') }}" class="nav-link text-white">
                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a>
            </li>
        </ul>
    </div>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
