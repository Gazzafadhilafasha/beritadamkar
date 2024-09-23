@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Berita</h2>
        <div class="d-flex justify-content-center mb-3">
            <a href="{{ route('berita.create') }}" class="btn btn-primary btn-lg">Tambah Berita</a>
        </div>

        <div class="list-group">
            @foreach ($beritas as $berita)
            <div class="list-group-item mb-3 border rounded shadow-sm p-4" style="background-color: #fff;">
                <h5 class="mb-1">{{ $berita->judul }}</h5>
                <p class="mb-1" style="color: #555;">{{ Str::limit($berita->konten, 100) }}</p>
                <small class="text-muted">Ditulis oleh: {{ $berita->penulis }}</small>
                <div class="mt-2 d-flex justify-content-between align-items-center">
                    <div>
                        <a href="{{ route('berita.show', $berita->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </div>
                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-3">
            <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-lg">Kembali ke Dashboard</a>
        </div>

        <form action="{{ route('logout') }}" method="POST" class="d-flex justify-content-center mt-3">
            @csrf
            <button type="submit" class="btn btn-danger btn-lg">Logout</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa; /* Background lembut */
        color: #333; /* Warna teks gelap */
    }
    .list-group-item {
        transition: all 0.2s ease;
        border: 1px solid #dee2e6; /* Garis border halus */
        background-color: #fefefe; /* Warna latar item berita */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .list-group-item:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }
    h2 {
        font-weight: 700; /* Bold untuk judul */
        color: #007bff; /* Warna judul */
    }
    small {
        font-size: 0.9em; /* Ukuran font kecil untuk penulis */
    }
    .btn {
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover, .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
        opacity: 0.85; /* Efek hover pada tombol */
    }
</style>
@endpush
