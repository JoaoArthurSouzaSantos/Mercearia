<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        /* Resetando margens e preenchimentos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        /* Layout principal */
        .container {
            display: flex;
            flex: 1; /* O container ocupa todo o espaço disponível */
            width: 100%;
        }

        /* Lado esquerdo com imagem */
        .image-side {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-side img {
            width: 100%;
            height: 100vh; /* A imagem ocupa toda a altura da tela */
            object-fit: cover;
            border-radius: 8px;
        }

        /* Lado direito com o formulário de login */
        .right {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            min-width: 400px; /* Define uma largura mínima para o formulário */
            height: 100vh; /* A altura ocupa toda a tela */
            position: relative;
            z-index: 1; /* Para que o formulário fique sobre a imagem */
        }

        .card-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .card-header h4 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
        }

        .form-label {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            color: #333;
        }

        .form-control:focus {
            border-color: #f8c800;
            box-shadow: 0 0 0 0.2rem rgba(248, 200, 0, 0.25);
        }

        .btn-warning {
            width: 100%;
            padding: 1rem;
            background-color: #f8c800;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-warning:hover {
            background-color: #d49f00;
        }

        /* Seta para voltar */
        .back-arrow {
            display: inline-block;
            font-size: 1.2rem;
            color: #555;
            text-decoration: none;
            margin-bottom: 1.5rem;
            transition: color 0.3s ease;
        }

        .back-arrow:hover {
            color: #f8c800;
        }

        /* Footer */
        footer {
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: #555;
            padding: 10px 0;
            background-color: #fff;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>
    <!-- Layout da tela de login -->
    <div class="container">
        <!-- Lado esquerdo com imagem -->
        <div class="image-side">
            <img src="images/capaLogin.jpg" alt="Imagem de login">
        </div>

        <!-- Lado direito com formulário de login -->
        <div class="right">
            <div>
                <a href="{{ url('/') }}" class="back-arrow">&#8592; Voltar para a Home</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Login') }}</h4>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn-link" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                        @endif
                    </div>

                    <button type="submit" class="btn-warning mt-4">{{ __('Login') }}</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Minha Aplicação</p>
    </footer>
</body>
</html>
