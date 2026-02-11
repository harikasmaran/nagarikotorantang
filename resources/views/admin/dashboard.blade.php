@extends('layouts.index')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar tetap -->
        <div class="col-md-3 col-lg-2 d-none d-md-block p-0 bg-dark position-fixed" style="height: 100vh;">
            @include('layouts.sidebar')
        </div>

        <!-- Konten utama -->
        <main class="offset-md-3 offset-lg-2 col-md-9 col-lg-10 px-md-4">
            <!-- Judul halaman -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Dashboard Admin</h2>
            </div>

            <!-- Ucapan selamat datang -->
            <div class="alert alert-success" role="alert">
                Selamat datang, {{ Auth::user()->name }}! Anda login sebagai pengelola Website Nagari Koto Rantang.
            </div>

            <!-- Statistik -->
            <div class="row">
                <div class="col-md-3">
                    @php
                        $totalPenduduk = $pdk->sum('laki_laki') + $pdk->sum('perempuan');
                    @endphp
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Penduduk</h5>
                            <p class="card-text fs-4">{{ $totalPenduduk }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Berita Aktif</h5>
                            <p class="card-text fs-4">{{ $brt }} Artikel</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Galeri</h5>
                            <p class="card-text fs-4">{{ $glr }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informasi Umum -->
            <div class="card mt-4">
                <div class="card-header">
                    Informasi Umum
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tentang Nagari Koto Rantang</h5>
                    <p class="card-text">
                        Nagari Koto Rantang merupakan salah satu nagari di Kecamatan Damai Sejahtera. Admin dapat memperbarui data profil nagari, perangkat nagari, dan informasi lainnya melalui menu yang tersedia.
                    </p>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
