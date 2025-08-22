<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 bg-white rounded shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-700">Login</h2>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block mb-1 text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email" id="email" required autofocus
                       class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block mb-1 text-sm font-medium text-gray-600">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('password')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember"
                       class="w-4 h-4 text-blue-600 border-gray-300 rounded">
                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
            </div>

            <!-- Submit -->
            <button type="submit"
                    class="w-full px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                Login
            </button>

            <div class="mt-4 text-sm text-center text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
