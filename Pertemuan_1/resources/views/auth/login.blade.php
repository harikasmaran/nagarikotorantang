@extends('layouts.index')

@section('content')
<style>
    body {
        background: linear-gradient(to right, #2d6a4f, #40916c);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-card {
        max-width: 400px;
        width: 100%;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        padding: 2rem;
    }
    .login-card img {
        width: 80px;
        margin-bottom: 1rem;
    }
    .form-control {
        border-radius: 10px;
    }
    .btn-primary {
        background-color: #2d6a4f;
        border: none;
        border-radius: 10px;
    }
    .btn-primary:hover {
        background-color: #1b4332;
    }
</style>

<div class="login-card text-center">
    <img src="{{ asset('storage/asset/logo.png') }}" alt="Logo Desa">

    <h4 class="mb-4">Login Web Desa</h4>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="/proseslogin" method="POST">
        @csrf
        <div class="mb-3 text-start">
            <label for="name" class="form-label">Username</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control" 
                placeholder="Masukkan username" 
                required
            >
        </div>
        <div class="mb-3 text-start">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="form-control" 
                    placeholder="Masukkan password" 
                    required
                >
                <button 
                    type="button" 
                    class="btn btn-outline-secondary" 
                    id="togglePassword"
                >
                    <i class="bi bi-eye"></i>
                </button>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
        <p class="mb-0">
            Belum punya akun? 
            <a href="/register" class="text-decoration-none">Daftar</a>
        </p>
    </form>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        let passwordInput = document.getElementById('password');
        let icon = this.querySelector('i');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.replace('bi-eye', 'bi-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.replace('bi-eye-slash', 'bi-eye');
        }
    });
</script>
@endsection
