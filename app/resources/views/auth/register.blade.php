<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style>
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

        .container {
            display: flex;
            flex: 1;
            width: 100%;
        }

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
            min-width: 400px;
            height: 100vh;
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
    <div class="container">
        <div class="right">
            <div>
                <a href="{{ url('/') }}" class="back-arrow">&#8592; Voltar para a Home</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Register') }}</h4>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn-warning mt-4">{{ __('Register') }}</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Minha Aplicação</p>
    </footer>
</body>
</html>
