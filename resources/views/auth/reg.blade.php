<!-- resources/views/auth/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 bg-white rounded shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-700">Register</h2>

        <form method="POST" action="#">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block mb-1 text-sm font-medium text-gray-600">Name</label>
                <input type="text" name="name" id="name" required autofocus
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('name')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block mb-1 text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email" id="email" required
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

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block mb-1 text-sm font-medium text-gray-600">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit"
                class="w-full px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                Register
            </button>

            <p class="mt-4 text-sm text-center text-gray-600">
                Already have an account?
                <a href="#" class="text-blue-500 hover:underline">Login here</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>
