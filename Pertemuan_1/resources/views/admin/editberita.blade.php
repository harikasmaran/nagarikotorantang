@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar tetap -->
        <div class="col-md-3 col-lg-2 d-none d-md-block p-0 bg-dark position-fixed" style="height: 100vh;">
            @include('layouts.sidebar')
        </div>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Edit Berita</h2>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Ada kesalahan saat input:<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('berita.update', $berita->id_berita) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Isi Berita</label>
                    <div class="col-sm-6">
                        <textarea name="isi" class="form-control" rows="5" required>{{ $berita->isi }}</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Gambar Saat Ini</label>
                    <div class="col-sm-6">
                        @if($berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}" width="200" class="mb-2">
                        @else
                            <p>Tidak ada gambar</p>
                        @endif
                        <input type="file" class="form-control mt-2" name="gambar">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-6">
                        <input type="datetime-local" class="form-control" name="tanggal"
                            value="{{ \Carbon\Carbon::parse($berita->tanggal)->format('Y-m-d\TH:i') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-6 text-end">
                        <button type="submit" class="btn btn-success">Update Berita</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>
@endsection
