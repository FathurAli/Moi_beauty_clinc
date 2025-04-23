@extends('layout')

@section('content')
    <h2>Daftar Dokter</h2>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary">Tambah Dokter</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Spesialisasi</th>
                <th>Jadwal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->specialization }}</td>
                    <td>{{ $doctor->schedule }}</td>
                    <td>
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
