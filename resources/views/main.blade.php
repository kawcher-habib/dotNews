<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>dotNews</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">
  <!-- Header -->
  <header class="bg-white shadow-md p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-bold text-blue-600">dotNews</h1>
      <nav class="space-x-4">
        <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">World</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Politics</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Tech</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Sports</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-100 py-12">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold mb-4">Top Stories of the Day</h2>
      <p class="text-lg text-gray-700">Stay updated with the latest breaking news from around the world.</p>
    </div>
  </section>

  <!-- News Articles -->
  <main class="container mx-auto py-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <article class="bg-white rounded-lg shadow p-4">
      <img src="https://via.placeholder.com/400x200" alt="News Image" class="rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Breaking News Headline</h3>
      <p class="text-gray-600 mb-2">Short summary of the news article goes here to attract readers.</p>
      <a href="#" class="text-blue-500 hover:underline">Read more</a>
    </article>

    <article class="bg-white rounded-lg shadow p-4">
      <img src="https://via.placeholder.com/400x200" alt="News Image" class="rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Tech Innovation Today</h3>
      <p class="text-gray-600 mb-2">Latest updates in the technology world. Learn what's new.</p>
      <a href="#" class="text-blue-500 hover:underline">Read more</a>
    </article>

    <article class="bg-white rounded-lg shadow p-4">
      <img src="https://via.placeholder.com/400x200" alt="News Image" class="rounded mb-4">
      <h3 class="text-xl font-semibold mb-2">Sports Highlights</h3>
      <p class="text-gray-600 mb-2">Catch up with the latest scores and highlights in sports.</p>
      <a href="#" class="text-blue-500 hover:underline">Read more</a>
    </article>
  </main>

  <!-- Footer -->
  <footer class="bg-white mt-12 p-6 shadow-inner">
    <div class="container mx-auto text-center">
      <p class="text-gray-600">&copy; 2025 dotNews. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>
