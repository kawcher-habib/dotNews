<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>dotNews - Trusted News Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

  <!-- Navbar -->
  <header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-3xl font-bold text-red-600">dotNews</h1>
      <nav class="hidden md:flex space-x-6 text-sm font-medium">
        <a href="{{ route('home') }}" class="hover:text-red-600">Home</a>
        <a href="#world" class="hover:text-red-600">World</a>
        <a href="{{ route('politic') }}" class="hover:text-red-600">Politics</a>
        <a href="{{ route('tech') }}" class="hover:text-red-600">Tech</a>
        <a href="{{ route('sports') }}" class="hover:text-red-600">Sports</a>
      </nav>
      <!-- Search -->
      <div class="relative">
        <input type="text" placeholder="Search..."
          class="border rounded-full pl-4 pr-10 py-1 text-sm focus:outline-none" />
        <svg class="w-4 h-4 absolute right-3 top-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
        </svg>
      </div>
    </div>
  </header>

  @yield('content')

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6 mt-10">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-sm">
      <p>&copy; 2025 dotNews. All rights reserved.</p>
      <div class="space-x-4 mt-2 md:mt-0">
        <a href="#" class="hover:text-red-400">Privacy</a>
        <a href="#" class="hover:text-red-400">Terms</a>
        <a href="#" class="hover:text-red-400">Contact</a>
      </div>
    </div>
  </footer>

</body>

</html>