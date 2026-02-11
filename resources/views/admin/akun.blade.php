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
                <h2>Akun Admin</h2>
            </div>

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <i class="bi bi-person-circle me-2"></i> Profil Admin
                </div>
                <div class="card-body">
                    <form action="{{ route('akun.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- Data Akun -->
                            <div class="col-md-9">
                                <!-- Username -->
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
                                </div>

                                <!-- Password dengan toggle -->
                                <div class="mb-3">
                                    <label class="form-label">Password Baru <small class="text-muted">(Opsional)</small></label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password">
                                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Tombol Simpan -->
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save me-1"></i> Simpan Perubahan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        let passwordInput = document.getElementById('password');
        let icon = this.querySelector('i');
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("bi-eye");
            icon.classList.add("bi-eye-slash");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("bi-eye-slash");
            icon.classList.add("bi-eye");
        }
    });
</script>
@endpush
