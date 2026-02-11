@extends('layouts.app')

@section('content')
<div class="container py-5 artikel-container">
    <div class="card artikel-card shadow-lg border-0">
        <div class="card-body p-5">
            <div class="row">
                <!-- Judul -->
                <div class="col-12 mb-5 text-center">
                    <h2 class="artikel-title">
                        Sejarah dan Profil Nagari Koto Rantang
                    </h2>
                    <div class="artikel-divider"></div>
                </div>

                <!-- Artikel -->
                <div class="col-md-8">
                    <div class="artikel-content">

                        <!-- Section -->
                        <h4 class="artikel-subtitle">1. Asal Usul dan Penamaan</h4>
                        <p>
                            Sejarah Nagari Koto Rantang berawal dari perpindahan penduduk dari 
                            <i>Gadut, Tilatang Kamang, Biaro,</i> dan <i>Palembayan</i>. 
                            Mereka mencari daerah baru untuk berladang dan bermukim. 
                            Dari perjalanan tersebut lahirlah permukiman yang membentang dari hulu hingga hilir, 
                            sehingga dinamakan <span class="highlight">“Koto Rantang”</span> (koto yang merentang).
                        </p>
                        <p>Permukiman ini kemudian terbagi menjadi empat jorong:</p>
                        <ul class="artikel-list">
                            <li><b>Batang Palupuah</b> – dinamai dari peristiwa pembuatan palupuah (alas bambu).</li>
                            <li><b>Muaro</b> – berasal dari palupuah yang hanyut berputar di pusaran air (<i>baMuaro</i>).</li>
                            <li><b>Sitingkai</b> – awalnya bernama <i>Satangkai</i> dari bunga setangkai.</li>
                            <li><b>Mudiak Palupuah</b> – merujuk pada daerah tempat mengangkut palupuah ke bagian hulu.</li>
                        </ul>

                        <h4 class="artikel-subtitle">2. Tokoh Perintis</h4>
                        <p>Beberapa perintis awal yang menempati Koto Rantang antara lain:</p>
                        <ul class="artikel-list">
                            <li><b>Bagala Maleka Nan Tuo</b> (suku Pili, dari Kapau) – bermukim di Bukit Parumahan.</li>
                            <li><b>Kali Sati</b> (suku Sikumbang, dari Gadut) – bermukim di Parak Mudiak.</li>
                            <li><b>Bagala Bandaro Basa</b> (suku Tanjung, dari Gadut/Sungai Talang) – bermukim di Bukit Monjong.</li>
                        </ul>
                        <p>Mereka bersama rombongan lain menjadi cikal bakal terbentuknya taratak, dusun, hingga berkembang menjadi nagari.</p>

                        <h4 class="artikel-subtitle">3. Pemerintahan Nagari</h4>
                        <p>
                            Awalnya Koto Rantang merupakan bagian dari Nagari Tilatang Kamang. 
                            Pada tahun 1908, dipilih pimpinan pertama yaitu <b>Dt. Sagalo Amuah</b>. 
                            Tahun 1942, Koto Rantang resmi menjadi nagari dengan Walinagari pertama <b>Dt. Sampono Kayo</b>.
                        </p>
                        <p>Perjalanan sejarah pemerintahan:</p>
                        <ul class="artikel-list">
                            <li><b>1980</b> – sesuai UU No. 5/1979, nagari berubah menjadi desa dengan empat desa.</li>
                            <li><b>2001</b> – sesuai UU No. 22/1999, nagari kembali dipulihkan sebagai bentuk pemerintahan adat.</li>
                        </ul>
                        <p>
                            Hingga kini tercatat <b>31 orang wali nagari/kepala desa</b>, dengan wali nagari saat ini 
                            <span class="highlight">Novri Agus Parta Wijaya, S.Pd., M.Pd. (2021–2027)</span>.
                        </p>

                        <!-- dst... (lanjutkan untuk bagian lain sama formatnya) -->

                    </div>
                </div>

                <!-- Gambar -->
                <div class="col-md-4 text-center">
                    <img src="{{ asset('storage/asset/desa.jpeg') }}" 
                         alt="Nagari Koto Rantang" 
                         class="artikel-img shadow-lg">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Container & Card */
.artikel-container {
    font-family: 'Poppins', sans-serif;
}
.artikel-card {
    border-radius: 16px;
    background: #fff;
}
.artikel-title {
    font-size: 2rem;
    font-weight: 700;
    color: #1e3c72;
}
.artikel-divider {
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #1e3c72, #2a5298);
    margin: 10px auto 0;
    border-radius: 8px;
}

/* Sub Judul */
.artikel-subtitle {
    font-size: 1.25rem;
    margin-top: 30px;
    margin-bottom: 15px;
    color: #2a5298;
    border-left: 4px solid #1e3c72;
    padding-left: 10px;
}

/* List */
.artikel-list {
    list-style: none;
    padding-left: 0;
}
.artikel-list li {
    position: relative;
    padding-left: 25px;
    margin-bottom: 10px;
}
.artikel-list li::before {
    content: "✔";
    position: absolute;
    left: 0;
    color: #1e3c72;
    font-weight: bold;
}

/* Highlight */
.highlight {
    background: #ffeb99;
    padding: 2px 6px;
    border-radius: 4px;
}

/* Image */
.artikel-img {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 12px;
}
</style>
@endpush
