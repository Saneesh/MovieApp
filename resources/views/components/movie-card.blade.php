<div class="mt-8">
  <a href="#">
    <img src="{{ 'https://image.tmdb.org/t/p/w500' .$movie['poster_path'] }}" class="hover:opacity-75 transition ease-in-out" />
  </a>
  <div class="mt-2">
    <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
    <div class="flex items-center text-gray-400 text-sm mt-1">
      <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
      </svg>
      <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
      <span class="mx-2">|</span>
      <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
    </div>
    <div class="text-gray-400 text-sm mt-1">
      @foreach ($movie['genre_ids'] as $id)
        {{ $genres->get($id) }} @if(!$loop->last), @endif
      @endforeach
    </div>
  </div>
</div>