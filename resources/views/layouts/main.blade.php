<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>dotNews - Trusted News Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Navbar -->
  <header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-3xl font-bold text-red-600">dotNews</h1>
      <nav class="hidden md:flex space-x-6 text-sm font-medium">
        <a href="#" class="hover:text-red-600">Home</a>
        <a href="#world" class="hover:text-red-600">World</a>
        <a href="#politics" class="hover:text-red-600">Politics</a>
        <a href="#tech" class="hover:text-red-600">Tech</a>
        <a href="#admin" class="hover:text-red-600">Admin</a>
      </nav>
      <!-- Search -->
      <div class="relative">
        <input type="text" placeholder="Search..." class="border rounded-full pl-4 pr-10 py-1 text-sm focus:outline-none" />
        <svg class="w-4 h-4 absolute right-3 top-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z"/>
        </svg>
      </div>
    </div>
  </header>

  @yield('content')

</body>
</html>
