<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-lime-100 min-h-screen flex items-center justify-center">
    <div class="absolute top-5 left-5">
        <a href="{{ url('/') }}" class="text-green-600 font-semibold hover:underline">Dashboard</a>
    </div>

    <div class="w-full max-w-lg mx-auto bg-white rounded-lg shadow-lg border border-green-300">
        <div class="bg-green-500 text-white text-center py-4 rounded-t-lg">
            <h4 class="text-lg font-bold">{{ __('Register') }}</h4>
        </div>
        <div class="p-6">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-green-700 font-medium mb-1">{{ __('Name') }}</label>
                    <input id="name" type="text" 
                        class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" 
                        name="name" 
                        value="{{ old('name') }}" 
                        required 
                        autocomplete="name" 
                        autofocus>
                    @error('name')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-green-700 font-medium mb-1">{{ __('Email Address') }}</label>
                    <input id="email" type="email" 
                        class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autocomplete="email">
                    @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-green-700 font-medium mb-1">{{ __('Password') }}</label>
                    <input id="password" type="password" 
                        class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" 
                        name="password" 
                        required 
                        autocomplete="new-password">
                    @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div class="mb-4">
                    <label for="password-confirm" class="block text-green-700 font-medium mb-1">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" 
                        class="w-full border border-green-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" 
                        name="password_confirmation" 
                        required 
                        autocomplete="new-password">
                </div>

                <!-- Submit Button -->
                <div class="mt-4">
                    <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 rounded-lg transition duration-200">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
