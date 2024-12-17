<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fff4; /* Light lime background */
        }
        .navbar {
            background-color: #28a745; /* Green */
        }
        .navbar-brand {
            color: white;
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: #c3f0d0; /* Light green on hover */
        }
        .btn-primary {
            background-color: #dfff00; /* Lemon yellow */
            border-color: #dfff00;
            color: #555555;
        }
        .btn-primary:hover {
            background-color: #c7e600; /* Darker lemon */
            color: #333333;
        }
        .content {
            text-align: center;
            margin-top: 50px;
        }
        .content h1 {
            color: #28a745; /* Green */
        }
        .content p {
            color: #555555; /* Grey text */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png" alt="Bootstrap Logo" width="30" height="24" class="d-inline-block align-text-top">
                Bootstrap Home
            </a>
            @if (Route::has('login'))
                <div class="d-flex">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-link text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <h1>Bem-vindo à Página Inicial</h1>
        <p>Explore nosso site para encontrar informações úteis e interessantes.</p>
        <a href="#" class="btn btn-primary">Saiba Mais</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
