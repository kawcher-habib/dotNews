@extends('layouts.main');

@section('content')

   <!-- Section Title -->
  <section class="bg-white py-10 mb-8 shadow">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-4xl font-bold text-gray-800">Technology News</h2>
      <p class="text-gray-600 mt-2 text-lg">Latest tech updates, innovations, and industry trends.</p>
    </div>
  </section>

  <!-- Tech News Grid (10 Cards) -->
  <section class="max-w-7xl mx-auto px-4 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
    <!-- 1 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?ai,robot" alt="AI" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">AI Breakthrough in Medical Research</h3>
        <p class="text-sm text-gray-600">AI tools now help doctors diagnose diseases faster and more accurately.</p>
      </div>
    </article>

    <!-- 2 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?smartphone,technology" alt="Smartphones" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">Top 5 Smartphones to Watch in 2025</h3>
        <p class="text-sm text-gray-600">Explore the most anticipated releases from tech giants this year.</p>
      </div>
    </article>

    <!-- 3 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?internet,5g" alt="5G" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">5G Expansion Reaches Remote Areas</h3>
        <p class="text-sm text-gray-600">Carriers push new infrastructure to connect underserved communities.</p>
      </div>
    </article>

    <!-- 4 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?cybersecurity,hack" alt="Cybersecurity" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">Massive Data Breach Affects Millions</h3>
        <p class="text-sm text-gray-600">Hackers breach major platforms in latest wave of cyber attacks.</p>
      </div>
    </article>

    <!-- 5 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?drones,delivery" alt="Drones" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">Drones to Deliver Groceries in Cities</h3>
        <p class="text-sm text-gray-600">Retailers adopt drones for faster urban logistics.</p>
      </div>
    </article>

    <!-- 6 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?gadget,wearable" alt="Gadgets" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">Wearable Tech Goes Mainstream</h3>
        <p class="text-sm text-gray-600">New smartwatches and glasses dominate the consumer market.</p>
      </div>
    </article>

    <!-- 7 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?robotics,factory" alt="Robotics" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">Robots Replacing Factory Workers?</h3>
        <p class="text-sm text-gray-600">Automation transforms traditional industries across the globe.</p>
      </div>
    </article>

    <!-- 8 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?cloud,server" alt="Cloud Computing" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">Cloud Storage Becomes Cheaper</h3>
        <p class="text-sm text-gray-600">Competition drives down costs and boosts features for users.</p>
      </div>
    </article>

    <!-- 9 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?elonmusk,space" alt="Space Tech" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">Private Space Tech: What's Next?</h3>
        <p class="text-sm text-gray-600">Companies plan manned missions beyond Earth's orbit in 2026.</p>
      </div>
    </article>

    <!-- 10 -->
    <article class="bg-white rounded-lg shadow hover:shadow-lg transition">
      <img src="https://source.unsplash.com/400x250/?laptop,technology" alt="Laptops" class="w-full h-48 object-cover rounded-t" />
      <div class="p-4">
        <h3 class="text-lg font-bold mb-2">Best Laptops for Developers</h3>
        <p class="text-sm text-gray-600">Our 2025 picks for high-performance portable machines.</p>
      </div>
    </article>
  </section>


@endsection