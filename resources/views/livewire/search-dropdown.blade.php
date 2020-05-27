<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 pl-8 py-1 text-sm focus:outline-none focus:shadow-outline" placeholder="Search" />
    <div class="absolute top-0">
        <svg class="bi bi-search w-5 mt-2 ml-1 fill-current text-gray-500" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
        </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if(strlen($search) > 2)
      <div class="absolute bg-gray-800 text-sm rounded w-64 mt-2">
        <ul>
          @if($searchResult->count() > 0)
            @foreach ($searchResult as $movie)
              <li class="border-b border-gray-700">
                <a href="{{ route('movies.show', $movie['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                  @if($movie['poster_path'])
                    <img src="{{ 'https://image.tmdb.org/t/p/w92/' . $movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="w-8">
                  @else
                    <img src="https://via.placeholder.com/50x75" class="w-8" />
                  @endif
                 <span class="ml-4">{{ $movie['title'] }}</span>
                </a>
              </li>
            @endforeach
          @else
            <div class="px-3 py-3">No result found for "{{ $search }}"</div>
          @endif
        </ul>
      </div>
    @endif
</div>