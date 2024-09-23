@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $berita->judul }}</h2>
            <p class="card-text">{{ $berita->konten }}</p>
            <small class="text-muted">Ditulis oleh: {{ $berita->penulis }}</small>
            <br>
            <a href="{{ route('berita.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Berita</a>
        </div>
    </div>
@endsection
