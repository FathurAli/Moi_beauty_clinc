@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2>Edit Doctor</h2>
    <a href="{{ route('doctors.index') }}" class="btn btn-secondary mb-3">Back</a>

    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf @method('PATCH')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $doctor->name }}" required>
        </div>
        <div class="mb-3">
            <label>Specialization</label>
            <input type="text" name="specialization" class="form-control" value="{{ $doctor->specialization }}" required>
        </div>
        <div class="mb-3">
            <label>Schedule</label>
            <input type="text" name="schedule" class="form-control" value="{{ $doctor->schedule }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
