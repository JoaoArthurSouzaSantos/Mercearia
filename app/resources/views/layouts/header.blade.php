<style>
    body {
        background-color: #f5f7fa;
        font-family: 'Arial', sans-serif;
    }
    .navbar {
        background-color: #2c3e50;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand {
        color: #ffffff;
        font-size: 1.5rem;
        font-weight: bold;
    }
    .navbar-nav .nav-link {
        color: #ecf0f1;
        text-align: center;
        transition: all 0.3s ease;
    }
    .navbar-nav .nav-link:hover {
        color: #f1c40f;
    }
    .nav-item {
        margin: 0 10px;
    }
    .nav-item img {
        width: 50px;
        margin-bottom: 5px;
        transition: transform 0.3s ease;
    }
    .nav-item:hover img {
        transform: scale(1.1);
    }
    .dropdown-menu {
        background-color: #2c3e50;
        border: none;
    }
    .dropdown-item {
        color: #ffffff;
        transition: all 0.3s ease;
    }
    .dropdown-item:hover {
        background-color: #34495e;
        color: #f1c40f;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Mendes ERP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" >
                    <img src="/icons/casa-limpa.png" alt="Home" style="width: 30px;">
                    <div>Home</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <img src="/icons/cadastro.png" alt="Cadastros" style="width: 30px;">
                    <div>Cadastros</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="/icons/relatorio.png" alt="Relatórios" style="width: 30px;">
                    <div>Relatórios</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="/icons/analise-de-dados.png" alt="Dashboard" style="width: 30px;">
                    <div>Dashboard</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="/icons/contabilidade.png" alt="Financeiro" style="width: 30px;">
                    <div>Financeiro</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="/icons/estoque.png" alt="Estoque" style="width: 30px;">
                    <div>Estoque</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="/icons/ponto-de-venda.png" alt="PDV" style="width: 30px;">
                    <div>PDV</div>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/icons/user.png" alt="User" style="width: 40px;"> {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
</nav>
