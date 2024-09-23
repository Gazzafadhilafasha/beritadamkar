<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Berita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #343a40;
        }
        .card {
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .card-footer {
            background-color: #f8f9fa;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .btn-primary:hover, .btn-danger:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Dashboard Berita</h1>

        <!-- Loop melalui setiap berita dan arahkan ke user/berita.blade.php -->
        @foreach($beritas as $berita)
        <div class="card mb-4">
            <div class="card-header">
                <h2>
                    <a href="{{ route('user.berita.show', $berita->id) }}" class="text-white text-decoration-none">{{ $berita->judul }}</a>
                </h2>
            </div>
            <div class="card-body">
                <p>{{ Str::limit($berita->konten, 100) }}</p>
            </div>
            <div class="card-footer text-muted">
                <p>Diterbitkan pada: {{ $berita->created_at->format('d M Y') }}</p>
            </div>
        </div>
        @endforeach

        <!-- Tombol Login untuk Admin -->
        <div class="text-center mb-3">
            <form action="{{ route('login') }}" method="GET">
                @csrf
                <button type="submit" class="btn btn-primary">Login Sebagai Admin</button>
            </form>
        </div>

        <!-- Tombol Logout -->
        <div class="text-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Log Out Sebagai Admin</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
