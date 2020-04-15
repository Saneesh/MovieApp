@extends('layouts.main')

@section('content')
  <div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
      <img src="/images/f2.jpg" alt="Frozen II" class="w-64 md:w-96">
      <div class="md:ml-24">
        <h2 class="text-4xl font-semibold">Frozen II (2019)</h2>
        <div class="flex flex-wrap items-center text-gray-400 text-sm">
          <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
          <span class="ml-1">85%</span>
          <span class="mx-2">|</span>
          <span>Nov, 2019</span>
          <span class="mx-2">|</span>
          <span>Animation, Adventure, Fantacy, Comedy</span>
        </div>
        <p class="text-gray-300 mt-8">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="mt-12">
          <h4 class="text-white font-semibold">Featured Cast</h4>
          <div class="flex mt-4">
            <div>
              <div>Chris Buck, Jennifer Lee</div>
              <div class="text-sm text-gray-400">Director</div>
            </div>
            <div class="ml-8">
              <div>Jennifer Lee</div>
              <div class="text-sm text-gray-400">Screenplay</div>
            </div>
          </div>
        </div>
        <div class="mt-12">
          <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
            <svg class="bi bi-play w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.804 8L5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 010 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z" clip-rule="evenodd"/>
            </svg>
            <span class="ml-2">Play trailor</span>
          </button>
        </div>
      </div>
    </div>
  </div> <!-- End of movie info -->

  <div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Cast</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="/images/avatar2.png" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">

            <div class="text-lg mt-2 hover:text-gray-300">
              Idina Menzel
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Elsa
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/avatar2.png" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">

            <div class="text-lg mt-2 hover:text-gray-300">
              Kristen Bell
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Anna
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/avatar.png" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">

            <div class="text-lg mt-2 hover:text-gray-300">
              Josh Gad
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Olaf
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/avatar.png" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">

            <div class="text-lg mt-2 hover:text-gray-300">
              Jonathan Groff
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Kristoff
            </div>
          </div>
        </div>
      </div >
    </div> <!-- End of cast -->

    <div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
      <h2 class="text-4xl font-semibold">Images</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="mt-8">
            <img src="/images/avatar.png" />
        </div><div class="mt-8">
            <img src="/images/avatar.png" />
        </div><div class="mt-8">
            <img src="/images/avatar.png" />
        </div><div class="mt-8">
            <img src="/images/avatar.png" />
        </div>
      </div >
    </div>
  </div> <!-- End of images -->
@endsection