@extends('layout')

@section('title', 'Edit Layanan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Layanan</h2>
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Nama Layanan</label>
            <input type="text" name="name" value="{{ $service->name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="price" value="{{ $service->price }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" rows="3" required>{{ $service->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Gambar (Kosongkan jika tidak ingin mengubah)</label><br>
            <img src="{{ asset('storage/store/services/' . $service->img) }}" width="100" class="mb-2">
            <input type="file" name="img" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
