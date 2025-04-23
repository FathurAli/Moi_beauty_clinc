@extends('layout')

@section('title', 'Tambah Layanan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Tambah Layanan</h2>
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="form-group">
            <label for="img">Gambar:</label>
            <input type="file" name="img" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
    
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
    
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" name="price" class="form-control" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    
</div>
@endsection
