@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div><h2 class="card-title">Sejarah Nagari Koto Rantang</h2></div>
                <div class="col-md-8">
                    <p class="card-text">
                        Nagari Koto Rantang terletak di Kecamatan Palupuh, Kabupaten Agam, Provinsi Sumatera Barat. 
                        Nagari ini memiliki sejarah panjang yang erat kaitannya dengan migrasi masyarakat Minangkabau dari berbagai daerah 
                        seperti Gadut, Tilatang Kamang, Biaro, dan Palembayan.
                    </p>
                    <p class="card-text">
                        Nama <b>"Koto Rantang"</b> berasal dari letak geografisnya. Empat jorong yang ada—Batang Palupuah, Sitingkai, Muaro, 
                        dan Mudiak Palupuah—membentuk permukiman yang memanjang, sehingga masyarakat menyebutnya sebagai Koto Rantang 
                        (kampung yang merentang).
                    </p>
                    <p class="card-text">
                        Tokoh pendiri awal nagari ini antara lain <b>Inyiak Maleka Nan Tuo</b> (suku Pili dari Kapau) 
                        yang menetap di Bukit Parumahan, serta <b>Inyiak Kali Sati</b> (suku Sikumbang dari Gadut) 
                        yang bermukim di Tonggo Parak Mudiak.
                    </p>
                    <p class="card-text">
                        Sejak tahun 1908, Nagari Koto Rantang telah memiliki sistem pemerintahan nagari dengan catatan 
                        31 orang Wali Nagari hingga saat ini. Wali Nagari pertama adalah <b>Inyiak Dt. Sagalo Amuah</b> 
                        (1908–1920), sedangkan yang terbaru menjabat sejak 2021 adalah <b>Novri Agus Parta Wijaya</b>.
                    </p>
                    <p class="card-text">
                        Kehidupan sosial masyarakat masih sangat dipengaruhi oleh adat Minangkabau dengan sistem kekerabatan matrilineal. 
                        Tradisi keagamaan juga kuat, ditandai dengan peran mesjid dan surau sebagai pusat pendidikan, 
                        dakwah, dan aktivitas sosial.
                    </p>
                    <p class="card-text">
                        Selain adat dan agama, Nagari Koto Rantang dikenal memiliki potensi wisata alam dan budaya. 
                        Di antaranya adalah <b>Cagar Alam Batang Palupuah</b> yang terkenal dengan bunga Rafflesia Arnoldi, 
                        serta tradisi <b>“Menampuang”</b> di Jorong Sitingkai pada saat pembagian daging qurban. 
                        Perpaduan sejarah, adat, budaya, dan pembangunan menjadikan Koto Rantang sebagai salah satu 
                        nagari penting di Kabupaten Agam.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('storage/asset/desa.jpg') }}" 
                         alt="Nagari Koto Rantang" 
                         class="img-fluid rounded shadow-sm"  
                         style="width: 100%; max-height: 500px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
