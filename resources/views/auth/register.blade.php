<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Web Desa</title>
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #2d6a4f, #40916c);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            max-width: 500px;
            width: 100%;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 2rem;
        }
        .register-card img {
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
</head>

<body>

    <div class="register-card">
        <div class="text-center">
            <img src="{{ asset('storage/asset/logo.png') }}" alt="Logo Desa">
            <h4 class="mb-4">Daftar Akun Web Desa</h4>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                    <button type="button" class="btn btn-outline-secondary" id="togglePassword"><i class="bi bi-eye"></i></button>
                </div>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <div class="input-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                    <button type="button" class="btn btn-outline-secondary" id="togglePasswordConfirm"><i class="bi bi-eye"></i></button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Daftar</button>

            <div class="text-center">
                <p class="mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none">Login</a></p>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script>
        function togglePassword(inputId, iconId) {
            let input = document.getElementById(inputId);
            let icon = document.getElementById(iconId).querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        }

        document.getElementById('togglePassword').addEventListener('click', function () {
            togglePassword('password', 'togglePassword');
        });

        document.getElementById('togglePasswordConfirm').addEventListener('click', function () {
            togglePassword('password_confirmation', 'togglePasswordConfirm');
        });
    </script>

</body>
</html>
