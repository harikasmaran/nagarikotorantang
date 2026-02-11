<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nagari Koto Rantang</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/asset/logo.png') }}" />
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }

        .sidebar a:hover,
        .sidebar .nav-link.active {
            background-color: #495057;
        }
    </style>

    @stack('styles')
</head>
<body>
    
    {{-- Main Page Content --}}
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Stack for Custom Scripts --}}
    @stack('scripts')
</body>
</html>
