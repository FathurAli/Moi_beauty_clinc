<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
            position: fixed;
        }
        .sidebar a {
            display: flex;
            align-items: center;
            gap: 10px; /* Jarak antara ikon dan teks */
            padding: 12px;
            font-size: 16px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .sidebar a i {
            font-size: 18px;
            width: 20px;
            text-align: center;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
            width: 100%;
        }
        .logout-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            text-align: left;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center">Admin Panel</h3>
        <hr>
        <a href="{{ route('admin.dashboard') }}">
            <i class="fa-solid fa-gauge-high"></i> Dashboard
        </a>
        <a href="{{ route('doctors.index') }}">
            <i class="fa-solid fa-user-doctor"></i> Doctors
        </a>
        <a href="{{ route('services.index') }}">
            <i class="fa-solid fa-hand-holding-medical"></i> Services
        </a>
        <hr>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger logout-btn">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </button>
        </form>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

</body>
</html>
