<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Mercearia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #212529;
            margin: 0;
        }

        .navbar {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #212529;
        }
        .navbar a {
            color: #212529;
        }
        .navbar a:hover {
            text-decoration: underline;
        }

        .hero {
            position: relative;
            height: 400px;
            background: url('{{ asset('images/merceariaHome.jpg') }}') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
        }
        
        .cards-section {
            padding: 60px 20px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        footer {
            background-color: #212529;
            color: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mercearia</a>
            @if (Route::has('login'))
                <div class="d-flex">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-dark me-2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="text-center">
            <h1>Bem-vindo à Mercearia</h1>
            <p>Ofertas incríveis esperam por você!</p>
            <a href="#" class="btn btn-primary">Explore Agora</a>
        </div>
    </div>

        <!-- Cards Section -->
    <div class="cards-section container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/organizacaoeficiente.jpg" class="card-img-top" alt="Organização eficiente" style="width: 300px; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Organização eficiente</h5>
                        <p class="card-text">Controle centralizado de estoque, vendas, pedidos e contas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/reducaodeperdas.jpg" class="card-img-top" alt="Redução de perdas" style="width: 300px; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Redução de perdas</h5>
                        <p class="card-text">Evite desperdício com o controle de validade e estoque.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/economiatempo.jpg" class="card-img-top" alt="Economia de tempo" style="width: 300px; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Economia de tempo</h5>
                        <p class="card-text">Automatize tarefas repetitivas e foque em outras áreas do negócio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/aumentovendas.jpg" class="card-img-top" alt="Aumento das vendas" style="width: 300px; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Aumento das vendas</h5>
                        <p class="card-text">Crie promoções baseadas nos produtos mais vendidos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/relatoriosdetalhados.jpg" class="card-img-top" alt="Relatórios detalhados" style="width: 300px; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Relatórios detalhados</h5>
                        <p class="card-text">Acompanhe receitas, despesas e lucros em tempo real.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/atendimentoagil.jpg" class="card-img-top" alt="Atendimento mais ágil" style="width: 300px; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Atendimento mais ágil</h5>
                        <p class="card-text">Reduza o tempo de espera dos clientes com processamento rápido.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>

    <!-- Footer Section -->
    <footer class="text-center py-4">
        <div class="container">
            <p class="mb-1">&copy; 2024 João Arthur Sopuza Santos</p>
            <p class="mb-1">Telefone: (XX) XXXXX-XXXX</p>
            <p class="mb-1">E-mail: joaoarthur@email.com</p>
            <p>Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
