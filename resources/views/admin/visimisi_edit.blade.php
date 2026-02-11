@extends('layouts.index')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar tetap -->
        <div class="col-md-3 col-lg-2 d-none d-md-block p-0 bg-dark position-fixed" style="height: 100vh;">
            @include('layouts.sidebar')
        </div>

        <!-- Konten utama -->
        <main class="offset-md-3 offset-lg-2 col-md-9 col-lg-10 px-md-4 py-5">
            <h2>Edit Visi & Misi</h2>
            <form action="{{ route('visimisi.update', $item->id_vm) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="visi" class="form-label fw-bold">Visi</label>
                    <textarea name="visi" class="form-control" rows="3" placeholder="Tulis visi...">{{ $item->visi }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="misi" class="form-label fw-bold">Misi</label>
                    <div class="alert alert-info py-2 px-3 mb-2" style="font-size: 0.9rem;">
                        <i class="bi bi-info-circle"></i> 
                        <strong>Catatan:</strong> Tambahkan tanda titik koma (<code>;</code>) di akhir setiap kalimat untuk membedakan poin-poin misi.
                    </div>
                    <textarea name="misi" class="form-control" rows="4" placeholder="Tulis misi secara terpisah...">{{ $item->misi }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label fw-bold">Tanggal</label>
                    <input type="datetime-local" name="tanggal" class="form-control" value="{{ \Carbon\Carbon::parse($item->tanggal)->format('Y-m-d\TH:i') }}" required>
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Simpan</button>
                <a href="{{ route('penduduk.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left-circle me-1"></i> Kembali</a>
            </form>
        </main>
    </div>
</div>
@endsection
