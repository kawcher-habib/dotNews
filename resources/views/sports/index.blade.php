@extends('layouts.main')

@section('content')

<section class="py-10" id="sports">
  <div class="max-w-7xl mx-auto px-4">
    <h3 class="text-2xl font-semibold mb-6 border-b pb-2">Latest in Sports</h3>
    
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Card 1 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?football,stadium" alt="Football Match" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">Champions League Final Ends in Drama</h4>
          <p class="text-sm text-gray-600">Last-minute goal seals the title in front of a packed stadium.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?cricket,batsman" alt="Cricket" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">Asia Cup 2025: India vs Bangladesh Thriller</h4>
          <p class="text-sm text-gray-600">The nail-biting match goes down to the final over.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?tennis,grand-slam" alt="Tennis" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">Wimbledon: New Champion Emerges</h4>
          <p class="text-sm text-gray-600">A 19-year-old stuns the top seed to claim their first Grand Slam.</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?basketball,nba" alt="Basketball" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">NBA Finals: MVP Leads Team to Victory</h4>
          <p class="text-sm text-gray-600">A record-breaking performance crowns the season’s best.</p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?olympics,gold" alt="Olympics" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">Olympics 2025: Nations Compete for Glory</h4>
          <p class="text-sm text-gray-600">Medal tables shake up after surprising wins.</p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?rugby,match" alt="Rugby" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">Rugby World Cup: Fierce Rivalries Continue</h4>
          <p class="text-sm text-gray-600">Hard tackles and historic upsets define the quarterfinals.</p>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?f1,race" alt="Formula 1" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">F1 Grand Prix: Pole Position to Podium</h4>
          <p class="text-sm text-gray-600">Rain and strategy shake up the weekend's leaderboard.</p>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?golf,tournament" alt="Golf" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">Masters Tournament: Veteran Returns to Form</h4>
          <p class="text-sm text-gray-600">Crowds cheer as legend climbs the leaderboard again.</p>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?boxing,ring" alt="Boxing" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">Heavyweight Clash: KO in the Fifth</h4>
          <p class="text-sm text-gray-600">A brutal finish as the champion defends his belt in style.</p>
        </div>
      </div>

      <!-- Card 10 -->
      <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
        <img src="https://source.unsplash.com/400x250/?swimming,competition" alt="Swimming" class="w-full h-48 object-cover" />
        <div class="p-4">
          <h4 class="text-lg font-bold mb-2">Swim Stars Set New Records</h4>
          <p class="text-sm text-gray-600">Athletes break world records in a splash-filled final day.</p>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection