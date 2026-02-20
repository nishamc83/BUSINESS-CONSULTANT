<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--navy-primary) 0%, var(--navy-dark) 100%);
            font-family: 'Open Sans', sans-serif;
        }

        .auth-container {
            width: 100%;
            max-width: 420px;
            padding: 15px;
        }

        .card {
            border: none;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, var(--navy-primary) 0%, var(--navy-dark) 100%);
            color: var(--white);
            border: none;
            border-radius: 12px 12px 0 0;
            padding: 40px 30px;
            text-align: center;
        }

        .card-header h2 {
            margin: 0 0 10px 0;
            font-size: 28px;
            font-weight: 700;
            color: var(--white);
        }

        .card-header p {
            margin: 0;
            font-size: 14px;
            opacity: 0.9;
            letter-spacing: 0.5px;
        }

        .card-body {
            padding: 40px;
            background: var(--white);
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid var(--grey-border);
            padding: 12px 15px;
            margin-bottom: 15px;
            font-family: 'Open Sans', sans-serif;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--navy-primary);
            box-shadow: 0 0 0 0.2rem rgba(30, 58, 95, 0.15);
        }

        .form-label {
            color: var(--navy-primary);
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-check {
            margin-bottom: 20px;
        }

        .form-check-input {
            border-radius: 4px;
            border: 1px solid var(--grey-border);
            width: 18px;
            height: 18px;
        }

        .form-check-input:checked {
            background-color: var(--navy-primary);
            border-color: var(--navy-primary);
        }

        .form-check-label {
            color: #333;
            font-weight: 500;
            margin-left: 8px;
        }

        .btn-login {
            background: linear-gradient(135deg, var(--navy-primary) 0%, var(--navy-light) 100%);
            border: none;
            color: var(--white);
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            font-family: 'Open Sans', sans-serif;
        }

        .btn-login:hover {
            background: linear-gradient(135deg, var(--navy-light) 0%, var(--navy-dark) 100%);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(30, 58, 95, 0.3);
        }

        .alert {
            border: none;
            border-radius: 8px;
            border-left: 4px solid;
            margin-bottom: 20px;
            padding: 12px 15px;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-left-color: #e74c3c;
            color: #721c24;
        }

        .text-center-link {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid var(--grey-border);
            margin-top: 20px;
        }

        .text-center-link a {
            color: var(--navy-primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .text-center-link a:hover {
            text-decoration: underline;
        }

        .invalid-feedback {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            display: block;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="auth-container">
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
