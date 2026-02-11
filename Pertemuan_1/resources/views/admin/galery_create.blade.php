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
                <h2>Input Galery</h2>
            </div>
            <form action="{{ route('galery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required>
                </div>
                <button class="btn btn-success">Simpan</button>
                <a href="{{ route('galery.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </main>
    </div>
</div>
@endsection

