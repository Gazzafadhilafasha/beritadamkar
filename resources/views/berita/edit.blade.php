@extends('layouts.app')

@section('content')
    <h2>Edit Berita</h2>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}" required>
        </div>
        <div class="form-group">
            <label for="konten">Konten</label>
            <textarea class="form-control" name="konten" required>{{ $berita->konten }}</textarea>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" name="penulis" value="{{ $berita->penulis }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
