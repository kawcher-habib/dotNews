@extends('layouts.main')
@section('content')

  <!-- Hero Section -->
  <section class="bg-white py-10">

    @if(!empty($newsData) && count($newsData) > 0)

    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    <div>
      <h2 class="text-4xl font-bold mb-4">{{ $newsData[0]['title'] ?? 'No title' }}</h2>
      <p class="text-gray-700 mb-6">{{$newsData[0]['description'] ?? 'No description'}}</p>
      <a href="{{ $newsData[0]['url'] }}" target="_blank"
      class="inline-block bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Read More</a>
    </div>
    <img src="{{$newsData[0]['image'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400' }}" alt="News"
      class="rounded-lg shadow" />
    </div>
    @else
    <p class="text-gray-500">No news available.</p>
    @endif
  </section>



  <!-- Category News Teach -->
  <section class="py-10" id="tech">
    <div class="max-w-7xl mx-auto px-4">
    <h3 class="text-2xl font-semibold mb-6 border-b pb-2">Latest in News</h3>
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

     @php 
        $techNews = collect($newsData)
                    ->where('category', 'general')
                    ->values()
                    ->slice(2, 3);
       
    @endphp
     
     @foreach ($techNews as $news)
    
      <!-- Card  -->
    
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="{{ $news['image'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400' }}" alt="Tech" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">{{ $news['title'] ?? "No title" }}</h4>
          <p class="text-sm text-gray-600">{{ $news['description'] ?? "No description"}}
          </p>
        </div>
      </div>
     
     @endforeach
  </div>

    <!-- Right-aligned "More" button -->
    <div class="flex justify-end mt-6">
      <a href="{{ route('tech') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">More</a>
    </div>
    </div>
  </section>

  <!-- Category News Sports -->
  <section class="py-10" id="sports">
    <div class="max-w-7xl mx-auto px-4">
      <h3 class="text-2xl font-semibold mb-6 border-b pb-2">Latest in Sports</h3>
      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Card 1 -->
          @php 
        $techNews = collect($newsData)
                    ->where('category', 'general')
                    ->values()
                    ->slice(4, 3);
       
    @endphp
     
     @foreach ($techNews as $news)
    
      <!-- Card  -->
    
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="{{ $news['image'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400' }}" alt="Sport" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">{{ $news['title'] ?? "No title" }}</h4>
          <p class="text-sm text-gray-600">{{ $news['description'] ?? "No description"}}
          </p>
        </div>
      </div>
     
     @endforeach
  </div>
        
      </div>

      <!-- Right-aligned "More" button -->
      <div class="flex justify-end mt-6">
        <a href="{{ route('sports') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">More</a>
      </div>
    </div>
  </section>


  <!-- Category News Politics -->
  <section class="py-10" id="politic">
    <div class="max-w-7xl mx-auto px-4">
    <h3 class="text-2xl font-semibold mb-6 border-b pb-2">Latest in Politics</h3>
      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            @php 
        $techNews = collect($newsData)
                    ->where('category', 'general')
                    ->values()
                    ->slice(7, 3);
       
    @endphp
     
     @foreach ($techNews as $news)
    
      <!-- Card  -->
    
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="{{ $news['image'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400' }}" alt="Politics" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">{{ $news['title'] ?? "No title" }}</h4>
          <p class="text-sm text-gray-600">{{ $news['description'] ?? "No description"}}
          </p>
        </div>
      </div>
     
     @endforeach
  </div>
        
      </div>

    <!-- Right-aligned "More" button -->
    <div class="flex justify-end mt-6">
      <a href="{{ route('sports') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">More</a>
    </div>
    </div>
  </section>

@endsection