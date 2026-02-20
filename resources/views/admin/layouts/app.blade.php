<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy-primary: #1e3a5f;
            --navy-dark: #152640;
            --navy-light: #2d5a8c;
            --grey-light: #f8f9fa;
            --grey-medium: #6b7280;
            --grey-border: #d1d5db;
            --white: #ffffff;
        }

        * {
            font-family: 'Open Sans', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }

        body {
            background-color: var(--grey-light);
            color: #333;
        }

        /* Sidebar Styling */
        .sidebar {
            background: linear-gradient(135deg, var(--navy-primary) 0%, var(--navy-dark) 100%);
            min-height: 100vh;
            padding: 0;
            position: fixed;
            width: 280px;
            left: 0;
            top: 0;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }

        .sidebar .brand {
            background: rgba(0, 0, 0, 0.1);
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .sidebar .brand h4 {
            color: var(--white);
            margin: 0;
            font-size: 24px;
            letter-spacing: 0.5px;
        }

        .sidebar .brand p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 12px;
            margin: 8px 0 0 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 14px 20px;
            margin: 5px 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .sidebar a i {
            width: 24px;
            margin-right: 12px;
            text-align: center;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--white);
        }

        .sidebar a.active {
            background-color: var(--navy-light);
            color: var(--white);
            border-left-color: #ffc107;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .sidebar hr {
            margin: 15px 0;
            border-color: rgba(255, 255, 255, 0.1);
        }

        /* Main Content */
        .main-content {
            margin-left: 280px;
            padding: 30px 25px;
            min-height: 100vh;
        }

        /* Topbar */
        .topbar {
            background: var(--white);
            padding: 20px 25px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-left: 4px solid var(--navy-primary);
        }

        .topbar h5 {
            margin: 0;
            color: var(--navy-primary);
            font-size: 18px;
        }

        .topbar span {
            color: var(--grey-medium);
            font-size: 14px;
            font-weight: 500;
        }

        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-header h1 {
            color: var(--navy-primary);
            margin: 0;
            font-size: 32px;
            font-weight: 700;
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            background: linear-gradient(135deg, var(--navy-primary) 0%, var(--navy-light) 100%);
            color: var(--white);
            border: none;
            border-radius: 12px 12px 0 0;
            padding: 20px 25px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
        }

        .card-body {
            padding: 25px;
        }

        .card-footer {
            background-color: var(--grey-light);
            border-top: 1px solid var(--grey-border);
            border-radius: 0 0 12px 12px;
            padding: 15px 25px;
        }

        /* Stat Cards */
        .stat-card {
            background: var(--white);
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            border-top: 4px solid var(--navy-primary);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
        }

        .stat-card i {
            font-size: 32px;
            color: var(--navy-primary);
            margin-bottom: 15px;
        }

        .stat-card h3 {
            color: var(--navy-primary);
            font-size: 28px;
            margin: 10px 0;
            font-weight: 700;
        }

        .stat-card p {
            color: var(--grey-medium);
            margin: 0;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--navy-primary);
            border-color: var(--navy-primary);
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--navy-light);
            border-color: var(--navy-light);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(30, 58, 95, 0.3);
        }

        .btn-secondary {
            background-color: var(--grey-border);
            border-color: var(--grey-border);
            color: #333;
            font-weight: 600;
            border-radius: 8px;
        }

        .btn-secondary:hover {
            background-color: var(--grey-medium);
            border-color: var(--grey-medium);
        }

        .btn-info {
            border-radius: 8px;
            font-weight: 600;
        }

        .btn-danger {
            border-radius: 8px;
            font-weight: 600;
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 13px;
        }

        /* Tables */
        .table {
            background-color: var(--white);
            margin-bottom: 0;
        }

        .table thead th {
            background-color: var(--grey-light);
            border-bottom: 2px solid var(--grey-border);
            color: var(--navy-primary);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
            padding: 15px;
        }

        .table tbody td {
            vertical-align: middle;
            padding: 15px;
            border-bottom: 1px solid var(--grey-border);
        }

        .table tbody tr:hover {
            background-color: var(--grey-light);
        }

        /* Forms */
        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid var(--grey-border);
            padding: 10px 15px;
            font-family: 'Open Sans', sans-serif;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--navy-primary);
            box-shadow: 0 0 0 0.2rem rgba(30, 58, 95, 0.15);
        }

        .form-label {
            color: var(--navy-primary);
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        /* Alerts */
        .alert {
            border: none;
            border-radius: 8px;
            border-left: 4px solid;
            padding: 15px 20px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            border-left-color: #27ae60;
            color: #1e4620;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-left-color: #e74c3c;
            color: #721c24;
        }

        .alert-warning {
            background-color: #fff3cd;
            border-left-color: #f39c12;
            color: #856404;
        }

        /* Badges */
        .badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 12px;
        }

        /* Pagination */
        .pagination .page-link {
            color: var(--navy-primary);
            border-color: var(--grey-border);
            border-radius: 6px;
            margin: 0 3px;
        }

        .pagination .page-link:hover {
            background-color: var(--navy-primary);
            border-color: var(--navy-primary);
            color: var(--white);
        }

        .pagination .page-item.active .page-link {
            background-color: var(--navy-primary);
            border-color: var(--navy-primary);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
                transition: width 0.3s ease;
            }

            .sidebar.active {
                width: 280px;
            }

            .main-content {
                margin-left: 0;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .page-header h1 {
                margin-bottom: 15px;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="sidebar">
        <div class="brand">
            <h4><i class="fas fa-briefcase"></i> Admin</h4>
            <p>Dashboard</p>
        </div>
        <a href="{{ route('admin.dashboard') }}" class="@if(Route::is('admin.dashboard')) active @endif">
            <i class="fas fa-grid"></i> Dashboard
        </a>
        <a href="{{ route('admin.blogs.index') }}" class="@if(Route::is('admin.blogs.*')) active @endif">
            <i class="fas fa-newspaper"></i> Blog Posts
        </a>
        <a href="{{ route('admin.consultations.index') }}" class="@if(Route::is('admin.consultations.*')) active @endif">
            <i class="fas fa-calendar-check"></i> Consultations
        </a>
        <a href="{{ route('admin.contacts.index') }}" class="@if(Route::is('admin.contacts.*')) active @endif">
            <i class="fas fa-inbox"></i> Messages
        </a>
        <a href="{{ route('admin.testimonials.index') }}" class="@if(Route::is('admin.testimonials.*')) active @endif">
            <i class="fas fa-comments"></i> Testimonials
        </a>
        <hr>
        <a href="{{ route('home') }}">
            <i class="fas fa-external-link-alt"></i> Website
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <div class="main-content">
        @if(Auth::check())
        <div class="topbar">
            <div>
                <h5>Welcome back, <strong>{{ Auth::user()->name }}</strong></h5>
            </div>
            <span>{{ now()->format('l, M d, Y') }}</span>
        </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fas fa-exclamation-triangle"></i> Errors:</strong>
                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                setTimeout(function() {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 5000);
            });
        });
    </script>
    @yield('scripts')
</body>
</html>
