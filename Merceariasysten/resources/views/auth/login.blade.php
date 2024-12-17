<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column justify-content-center align-items-center min-vh-100">

    <!-- Link para Dashboard -->
    <div class="position-absolute top-0 start-0 m-3">
        <a href="{{ url('/') }}" class="text-primary fw-semibold text-decoration-none">Dashboard</a>
    </div>

    <!-- Card de Login -->
    <div class="card shadow-lg border-primary" style="width: 100%; max-width: 400px;">
        <!-- Título -->
        <div class="card-header bg-primary text-white text-center">
            <h4 class="fw-bold m-0">{{ __('Login') }}</h4>
        </div>

        <!-- Formulário -->
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Campo de Email -->
                <div class="mb-3">
                    <label for="email" class="form-label text-primary fw-medium">{{ __('Email Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        class="form-control border-primary">
                    @error('email')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Campo de Senha -->
                <div class="mb-3">
                    <label for="password" class="form-label text-primary fw-medium">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="form-control border-primary">
                    @error('password')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Checkbox Remember Me -->
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input border-primary" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text-primary" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <!-- Botões -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary text-white fw-medium">
                        {{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-primary text-decoration-none small text-center">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
