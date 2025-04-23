@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h2>Add Doctor</h2>
    <a href="{{ route('doctors.index') }}" class="btn btn-secondary mb-3">Back</a>

    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Specialization</label>
            <input type="text" name="specialization" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Schedule</label>
            <input type="text" name="schedule" class="form-control" required placeholder="e.g. Monday - Friday, 08:00 - 16:00">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
