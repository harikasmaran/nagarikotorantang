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
            <form action="{{ route('galery.update', $item->id_galery) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="{{ $item->deskripsi }}" required>
                </div>
                <div class="mb-3">
                    <label>Gambar (biarkan kosong jika tidak diubah)</label>
                    <input type="file" name="gambar" class="form-control">
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="img-fluid mt-2" width="150">
                </div>
                <div class="mb-3">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ $item->tanggal }}" required>
                </div>
                <button class="btn btn-warning">Update</button>
                <a href="{{ route('galery.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </main>
    </div>
</div>
@endsection