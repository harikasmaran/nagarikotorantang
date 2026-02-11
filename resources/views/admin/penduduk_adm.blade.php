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
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2>Data Penduduk</h2>
                <a href="{{ route('penduduk.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Tambah Data
                </a>
            </div>
            <div class="card-body px-0">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
                <table class="table table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Jorong</th>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Total Penduduk</th>
                            <th>Jumlah KK</th>
                            <th width="200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $no => $p)
                            <tr class="text-center">
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $p->jorong }}</td>
                                <td>{{ $p->laki_laki }}</td>
                                <td>{{ $p->perempuan }}</td>
                                <td>{{ $p->laki_laki + $p->perempuan }}</td>
                                <td>{{ $p->jumlah_kk }}</td>
                                <td class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('penduduk.edit', $p->id_penduduk) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    
                                    <form action="{{ route('penduduk.destroy', $p->id_penduduk) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection
