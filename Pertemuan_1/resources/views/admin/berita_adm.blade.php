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
                <h2>Berita Desa</h2>
            </div>

            <div class="card-body px-0">
                <a href="/admin/inputberita" class="btn btn-primary mb-3">
                    <i class="bi bi-plus-circle"></i> Tambah Berita
                </a>

                <table class="table table-bordered table-hover">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi Singkat</th>
                            <th>Gambar</th>
                            <th>Tanggal</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brt as $no => $m)
                        <tr>
                            <td>{{ $no + 1 }}</td>
                            <td>{{ $m->judul }}</td>
                            <td>{{ Str::limit(strip_tags($m->isi), 100) }}</td>
                            <td class="text-center">
                                @if ($m->gambar)
                                    <img src="{{ asset('storage/' . $m->gambar) }}" width="80" class="img-thumbnail" style="cursor: zoom-in;" onclick="zoomImage('{{ asset('storage/' . $m->gambar) }}')">
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $m->tanggal }}</td>
                            <td class="text-center">
                                <a href="{{ route('berita.edit', $m->id_berita) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="/admin/berita_adm/hapus/{{$m->id_berita}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Modal Zoom Gambar -->
            <div class="modal fade" id="modalZoom" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark">
                        <div class="modal-body text-center">
                            <img id="zoomedImage" src="" class="img-fluid rounded" alt="Zoomed Gambar">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function zoomImage(src) {
        const image = document.getElementById('zoomedImage');
        image.src = src;
        new bootstrap.Modal(document.getElementById('modalZoom')).show();
    }
</script>
@endpush
