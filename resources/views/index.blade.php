@extends('layouts.main')
@section('content')



  <!-- Hero Section -->
  <section class="bg-white py-10">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
    <div>
      <h2 class="text-4xl font-bold mb-4">Breaking News: Tech Stocks Surge</h2>
      <p class="text-gray-700 mb-6">dotNews delivers unbiased, reliable, and fast news from every corner of the world.
      </p>
      <a href="#" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Explore More</a>
    </div>
    <img src="https://source.unsplash.com/600x400/?breaking-news" class="rounded-lg shadow" alt="Hero News" />
    </div>
  </section>

  <!-- Category News -->
  <section class="py-10" id="tech">
    <div class="max-w-7xl mx-auto px-4">
    <h3 class="text-2xl font-semibold mb-6 border-b pb-2">Latest in Tech</h3>
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Card 1 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?ai,robot" alt="Tech" class="w-full h-48 object-cover" />
      <div class="p-4">
        <h4 class="text-lg font-bold mb-2">AI Dominates 2025 Innovation Trends</h4>
        <p class="text-sm text-gray-600">The global shift in automation and AI regulation is heating up this quarter.
        </p>
      </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?cybersecurity" alt="Cybersecurity"
        class="w-full h-48 object-cover" />
      <div class="p-4">
        <h4 class="text-lg font-bold mb-2">Cyber Attacks on Rise Globally</h4>
        <p class="text-sm text-gray-600">Governments and companies invest more in digital defense amid new threats.
        </p>
      </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?5g" alt="5G" class="w-full h-48 object-cover" />
      <div class="p-4">
        <h4 class="text-lg font-bold mb-2">5G Rollout Expands Across Asia</h4>
        <p class="text-sm text-gray-600">Major carriers accelerate infrastructure projects to meet demand.</p>
      </div>
      </div>
    </div>

    <!-- Right-aligned "More" button -->
    <div class="flex justify-end mt-6">
      <a href="{{ route('tech') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">More</a>
    </div>
    </div>
  </section>

  <section class="py-10" id="sports">
    <div class="max-w-7xl mx-auto px-4">
    <h3 class="text-2xl font-semibold mb-6 border-b pb-2">Latest in Sports</h3>
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Card 1 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?football,stadium" alt="Football"
        class="w-full h-48 object-cover" />
      <div class="p-4">
        <h4 class="text-lg font-bold mb-2">Champions League Final: Thrilling Win</h4>
        <p class="text-sm text-gray-600">An epic showdown ends in a dramatic penalty shootout.</p>
      </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?cricket,bat" alt="Cricket" class="w-full h-48 object-cover" />
      <div class="p-4">
        <h4 class="text-lg font-bold mb-2">Asia Cup 2025: Schedule Announced</h4>
        <p class="text-sm text-gray-600">Top teams gear up for a month-long cricket festival.</p>
      </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?tennis,player" alt="Tennis" class="w-full h-48 object-cover" />
      <div class="p-4">
        <h4 class="text-lg font-bold mb-2">Wimbledon: Rising Star Shines Bright</h4>
        <p class="text-sm text-gray-600">18-year-old newcomer advances to Grand Slam semifinals.</p>
      </div>
      </div>
    </div>

    <!-- Right-aligned "More" button -->
    <div class="flex justify-end mt-6">
      <a href="{{ route('sports') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">More</a>
    </div>
    </div>
  </section>






@endsection