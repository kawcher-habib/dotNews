@extends('layouts.main');

@section('content')

      <section class="relative h-[80vh] bg-cover bg-center" style="background-image: url('{{ $newsData[0]['image'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400'}}');">
      <div class="absolute inset-0 bg-black bg-opacity-60"></div>

      <div class="relative z-10 flex items-center justify-center h-full px-6 text-center text-white">
        <div>
          <h1 class="text-4xl md:text-6xl font-bold mb-4">{{ $newsData[0]['title'] ?? 'No title'}}</h1>
          <p class="text-lg md:text-xl max-w-2xl mx-auto">{{ $newsData[0]['description'] ?? 'No description' }}</p>
          <a href="#explore" class="mt-6 inline-block bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded text-lg transition">
            Explore Tech News
          </a>
        </div>
      </div>
    </section>

   <!-- Section Title -->
      <section class="bg-white py-10 mb-8 shadow">
        <div class="max-w-7xl mx-auto px-4">
          <h2 class="text-4xl font-bold text-gray-800">Technology News</h2>
          <p class="text-gray-600 mt-2 text-lg">Latest tech updates, innovations, and industry trends.</p>
        </div>
      </section>

    @if(!empty($newsData))

        <section class="max-w-7xl mx-auto px-4 py-10 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3" id="explore">
            @foreach ($newsData as $news)
                <article class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden flex flex-col">
                    <!-- Image -->
                    <img 
                        src="{{ $news['image'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400' }}" 
                        alt="{{ $news['title'] ?? 'News Image' }}" 
                        class="w-full h-48 object-cover" 
                    />

                    <!-- Content -->
                    <div class="p-4 flex-grow">
                        <h3 class="text-lg font-bold mb-2">
                            {{ $news['title'] ?? 'No title available' }}
                        </h3>
                        <p class="text-sm text-gray-600">
                            {{ $news['description'] ?? 'No description provided.' }}
                        </p>
                    </div>

                    <!-- Read More Button -->
                    <div class="px-4 pb-4 mt-auto flex justify-end">
                        <a 
                            href="{{ $news['url'] ?? '#' }}" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                        >
                            Read More
                        </a>
                    </div>
                </article>
            @endforeach
        </section>

    @else
      <p class="text-gray-500">No news available.</p>
    @endif

@endsection