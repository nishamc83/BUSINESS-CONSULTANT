<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description')">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .navbar.navy {
            background-color: #1e3a5f !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 24px;
            color: #ffffff !important;
            font-family: 'Montserrat', sans-serif;
        }

        .navbar a {
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .navbar a:hover {
            color: #ffc107 !important;
        }

        footer {
            background-color: #1e3a5f;
            color: #ffffff;
            padding: 30px 0;
            margin-top: 60px;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navy">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" style="margin-right: 50px;"><i class="fas fa-briefcase"></i> ConsultPro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <i class="fas fa-info-circle"></i> About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('services') ? 'active' : '' }}" href="{{ route('services') }}">
                        <i class="fas fa-cogs"></i> Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('industries') ? 'active' : '' }}" href="{{ route('industries') }}">
                        <i class="fas fa-industry"></i> Industries Served
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('testimonials') ? 'active' : '' }}" href="{{ route('testimonials') }}">
                        <i class="fas fa-comments"></i> Testimonials
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('blog.index') ? 'active' : '' }}" href="{{ route('blog.index') }}">
                        <i class="fas fa-newspaper"></i> Blog/Insights
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('book') ? 'active' : '' }}" href="{{ route('book') }}" style="color: #ffc107 !important; font-weight: 700;">
                        <i class="fas fa-calendar-check"></i> Book a Consultation
                    </a>
                </li>
                @if(Auth::check() && Auth::user()->is_admin)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}" style="color: #27ae60 !important;">
                            <i class="fas fa-tachometer-alt"></i> Admin
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fas fa-lock"></i> Admin Login
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="text-center">
    © {{ date('Y') }} ConsultPro. All Rights Reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
