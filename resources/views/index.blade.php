@extends('layouts.main')
@section('content')



  <!-- Hero Section -->
  <section class="bg-white py-10">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
      <div>
        <h2 class="text-4xl font-bold mb-4">Breaking News: Tech Stocks Surge</h2>
        <p class="text-gray-700 mb-6">dotNews delivers unbiased, reliable, and fast news from every corner of the world.</p>
        <a href="#" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Explore More</a>
      </div>
      <img src="https://source.unsplash.com/600x400/?breaking-news" class="rounded-lg shadow" alt="Hero News"/>
    </div>
  </section>

  <!-- Category News -->
  <section class="py-10" id="tech">
    <div class="max-w-7xl mx-auto px-4">
      <h3 class="text-2xl font-semibold mb-6 border-b pb-2">Latest in Tech</h3>
      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="https://source.unsplash.com/400x250/?ai,robot" alt="Tech" class="w-full h-48 object-cover" />
          <div class="p-4">
            <h4 class="text-lg font-bold mb-2">AI Dominates 2025 Innovation Trends</h4>
            <p class="text-sm text-gray-600">The global shift in automation and AI regulation is heating up this quarter.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="https://source.unsplash.com/400x250/?cybersecurity" alt="Cybersecurity" class="w-full h-48 object-cover" />
          <div class="p-4">
            <h4 class="text-lg font-bold mb-2">Cyber Attacks on Rise Globally</h4>
            <p class="text-sm text-gray-600">Governments and companies invest more in digital defense amid new threats.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="https://source.unsplash.com/400x250/?5g" alt="5G" class="w-full h-48 object-cover" />
          <div class="p-4">
            <h4 class="text-lg font-bold mb-2">5G Rollout Expands Across Asia</h4>
            <p class="text-sm text-gray-600">Major carriers accelerate infrastructure projects to meet demand.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Admin Panel Preview -->
  <section class="bg-white py-10 px-4 mt-10" id="admin">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-2xl font-bold mb-6 border-b pb-2">Admin Dashboard</h2>
      <div class="grid gap-6 grid-cols-1 md:grid-cols-2">
        <div class="bg-gray-100 p-4 rounded shadow">
          <h3 class="text-lg font-semibold mb-2">Post New Article</h3>
          <form class="space-y-4">
            <input type="text" placeholder="Title" class="w-full px-3 py-2 border rounded" />
            <textarea placeholder="Content" class="w-full px-3 py-2 border rounded h-32"></textarea>
            <select class="w-full px-3 py-2 border rounded">
              <option>Choose Category</option>
              <option>Tech</option>
              <option>Politics</option>
              <option>World</option>
            </select>
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Publish</button>
          </form>
        </div>
        <div class="bg-gray-100 p-4 rounded shadow">
          <h3 class="text-lg font-semibold mb-2">Recent Posts</h3>
          <ul class="text-sm space-y-2">
            <li>• Market Update – <span class="text-gray-500">2 hrs ago</span></li>
            <li>• Tech Expo Highlights – <span class="text-gray-500">1 day ago</span></li>
            <li>• New Political Debate – <span class="text-gray-500">3 days ago</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

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

@endsection