@extends('layouts.main')
@section('content')

 <section class="relative bg-white py-10 overflow-hidden">

    @if(!empty($newsData) && count($newsData) > 0)
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
            <h2 class="text-4xl font-bold mb-4">{{ $newsData[0]['title'] ?? 'No title' }}</h2>
            <p class="text-gray-700 mb-6">{{ $newsData[0]['description'] ?? 'No description' }}</p>
            <a href="{{ $newsData[0]['link'] }}" target="_blank"
               class="inline-block bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Read More</a>
        </div>
        <img src="{{ $newsData[0]['image_url'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400' }}"
             alt="News" class="rounded-lg shadow" />
    </div>
    @else
        <p class="text-gray-500">No news available.</p>
    @endif

    <!-- Weather Popup (Sliding) -->
    <div id="weatherPopup"
         class="absolute right-0 top-1/2 -translate-y-1/2 bg-white shadow-xl rounded-lg w-72 p-4 z-20 border 
                transform translate-x-full transition-transform duration-500 ease-out">
        <div class="flex items-center justify-between border-b pb-2 mb-3">
            <h2 class="text-xl font-bold">Today's Weather</h2>
            <button onclick="closeWeather()" class="text-gray-500 hover:text-red-500">&times;</button>
        </div>
        <div class="flex items-center gap-4">
            <img src="https://openweathermap.org/img/wn/01d@2x.png" alt="Weather Icon" class="w-16 h-16">
            <div>
                <p class="text-2xl font-semibold">28°C</p>
                <p class="text-gray-600">Sunny</p>
                <p class="text-sm text-gray-500">Dhaka, Bangladesh</p>
            </div>
        </div>
    </div>

</section>

<script>
    // Show weather after small delay
    window.addEventListener("load", () => {
        setTimeout(() => {
            document.getElementById("weatherPopup").classList.remove("translate-x-full");
        }, 500);
    });

    // Close popup with slide out
    function closeWeather() {
        document.getElementById("weatherPopup").classList.add("translate-x-full");
    }
</script>
  <!-- Category News Teach -->
  <section class="py-10" id="tech">
    <div class="max-w-7xl mx-auto px-4">
    <h3 class="text-2xl font-semibold mb-6 border-b pb-2">Latest in News</h3>
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

     @php 
        $techNews = collect($newsData)->filter(function($item){
            return isset($item['category'][0]) && empty($item['category'][0] === 'top');
        })
       
    @endphp
     
     @foreach ($techNews as $news)
    
      <!-- Card  -->
    
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="{{ $news['image_url'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400' }}" alt="Tech" class="w-full h-48 object-cover" />
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
      <a href="{{ route('tech') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">More</a> <!-- here will be url change -->
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
        $techNews = collect($newsData)->filter(function($item){
                          return isset($item['category'][0]) && $item['category'][0] === 'sports' || isset($item['category'][0]) && $item['category'][0] === 'tourism';
                    })
       
    @endphp
     
     @foreach ($techNews as $news)
    
      <!-- Card  -->
    
     <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="{{ $news['image_url'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400' }}" alt="Sport" class="w-full h-48 object-cover" />
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
    <h3 class="text-2xl font-semibold mb-6 border-b pb-2">Latest in Technology</h3>
      <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            @php 
        $techNews = collect($newsData)->filter(function($item){
              return isset($item['category'][0]) && $item['category'][0] === 'technology' || isset($item['category'][0]) && $item['category'][0] === 'tourism';
        })
       
    @endphp
     
     @foreach ($techNews as $news)
    
      <!-- Card  -->
    
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="{{ $news['image_url'] ?? 'https://ui-avatars.com/api/?name=No+Image&size=400' }}" alt="Politics" class="w-full h-48 object-cover" />
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
      <a href="{{ route('tech') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">More</a>
    </div>
    </div>
  </section>

@endsection