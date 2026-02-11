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
                <h2>Visi Misi</h2>
            </div>
            <div class="card-body px-0">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
                <table class="table table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>No</th>
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Tanggal</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $no => $p)
                            <tr class="text-center">
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $p->visi }}</td>
                                <td>{{ $p->misi }}</td>
                                <td>{{ $p->tanggal }}</td>
                                <td>
                                    <a href="{{ route('visimisi.edit', $p->id_vm) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
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