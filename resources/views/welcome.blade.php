<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
        .navbar {
            background-color: #cbd5e0 !important;
        }
        .text-logo {
            color: #f8f9fa;
        }
        .card {
            border: none;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 1.5rem;
            color: #ef4444;
        }
        .footer {
            background-color: #f8f9fa;
            color: #6c757d;
            padding: 1rem;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h1a.5.5 0 0 1 0 1H2a1 1 0 0 0-1 1v2.5a1.5 1.5 0 0 0 0 3V12a1 1 0 0 0 1 1h1a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm15 8V9.5a1.5 1.5 0 0 0 0-3V4a2 2 0 0 0-2-2h-1a.5.5 0 0 0 0 1h1a1 1 0 0 1 1 1v2.5a.5.5 0 0 1 0 1V12a1 1 0 0 1-1 1h-1a.5.5 0 0 0 0 1h1a2 2 0 0 0 2-2Zm-4.5-10a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h4a.5.5 0 0 0 .5-.5ZM10 16a.5.5 0 0 0 .5-.5V15H6v.5a.5.5 0 0 0 1 0v-.5h2v.5a.5.5 0 0 0 .5.5ZM5.5 0a.5.5 0 0 0-.5.5V1h5V.5a.5.5 0 0 0-1 0v.5H6v-.5a.5.5 0 0 0-.5-.5ZM2 8.5A1.5 1.5 0 1 1 3.5 7 1.5 1.5 0 0 1 2 8.5Zm9-1a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 11 7.5Z"/>
            </svg>
            Laravel Ticket System
        </a>
        @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-primary">
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900">Log in</a>
                        </li>
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        @endif
    </div>
</nav>
<!-- Main Content -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-body">
                    <h1 class="card-title">Support Ticket System</h1>
                    <p class="card-text">Manage your support tickets easily with our Laravel-powered system.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer text-center mt-5">
    <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


