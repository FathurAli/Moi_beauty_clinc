<div class="sidebar">
    <h3 class="text-center">Admin Panel</h3>
    <hr>
    <a href="{{ route('admin.dashboard') }}">
        <i class="fa-solid fa-gauge-high"></i> Dashboard
    </a>
    <a href="{{ route('doctors.index') }}">
        <i class="fa-solid fa-user-doctor"></i> Doctors
    </a>
    <a href="{{ url('admin/services/data') }}">
        <i class="fa-solid fa-hand-holding-medical"></i> Services
    </a>
    <hr>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger w-100">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </button>
    </form>
</div>
