@extends('layouts.main')

@section('content')
  <div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      <img src="{{ 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="w-64 md:w-96">
      <div class="md:ml-24">
        <h2 class="text-4xl font-semibold">{{ $movie['title'] . ' (' . \Carbon\Carbon::parse($movie['release_date'])->format('Y') .')' }}</h2>
        <div class="flex flex-wrap items-center text-gray-400 text-sm">
          <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
          <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
          <span class="mx-2">|</span>
          <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
          <span class="mx-2">|</span>
          <span>
            @foreach ($movie['genres'] as $genre)
              {{ $genre['name'] }} @if(!$loop->last), @endif
            @endforeach
          </span>
        </div>
        <p class="text-gray-300 mt-8">
          {{ $movie['overview']}}
        </p>
        <div class="mt-12">
          <h4 class="text-white font-semibold">Featured Cast</h4>
          <div class="flex mt-4">
            @foreach($movie['credits']['crew'] as $crew)
              @if($loop->index < 5)
                  <div class="mr-8">
                    <div>{{ $crew['name'] }}</div>
                    <div class="text-sm text-gray-400">{{ $crew['department'] }}</div>
                  </div>
                @endif
            @endforeach
          </div>
        </div>
        @if(count($movie['videos']['results']) > 0)
          <div class="mt-12">
            <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key']}}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
              <svg class="bi bi-play w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.804 8L5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 010 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" clip-rule="evenodd"/>
              </svg>
              <span class="ml-2">Play trailor</span>
            </a>
          </div>
        @endif
      </div>
    </div>
  </div> <!-- End of movie info -->

  <div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Cast</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach($movie['credits']['cast'] as $cast)
          @if($cast['profile_path'] && $loop->index < 10)
              <div class="mt-8">
                <a href="#">
                  <img src="{{ 'https://image.tmdb.org/t/p/w300' . $cast['profile_path'] }}" class="hover:opacity-75 transition ease-in-out" />
                </a>
                <div class="mt-2">

                  <div class="text-lg mt-2 hover:text-gray-300">
                    {{ $cast['name'] }}
                  </div>
                  <div class="text-gray-400 text-sm mt-1">
                    {{ $cast['character'] }}
                  </div>
                </div>
              </div>
            @endif
        @endforeach
      </div >
    </div> <!-- End of cast -->

    <div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Images</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($movie['images']['backdrops'] as $backdrop)
          @if($loop->index < 6)
            <div class="mt-8">
                <img src="{{ 'https://image.tmdb.org/t/p/w300' . $backdrop['file_path'] }}" />
            </div>
          @endif
        @endforeach
      </div >
    </div>
  </div> <!-- End of images -->
@endsection