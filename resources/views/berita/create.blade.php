@extends('layouts.app')

@section('content')
    <h2>Tambah Berita</h2>
    <form action="{{ route('berita.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul" required>
        </div>
        <div class="form-group">
            <label for="konten">Konten</label>
            <textarea class="form-control" name="konten" placeholder="Konten" required></textarea>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" name="penulis" placeholder="Penulis" required>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
@endsection
