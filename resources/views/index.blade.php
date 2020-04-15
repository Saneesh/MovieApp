@extends('layouts.main')

@section('content')
  <div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End popular movies -->

    <div class="now-playing py-24">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now playing</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
        <div class="mt-8">
          <a href="#">
            <img src="/images/f2.jpg" class="hover:opacity-75 transition ease-in-out" />
          </a>
          <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">Frozen II</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
              <svg class="bi bi-star-fill text-orange-500 w-4" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
              </svg>
              <span class="ml-1">85%</span>
              <span class="mx-2">|</span>
              <span>Nov, 2019</span>
            </div>
            <div class="text-gray-400 text-sm mt-1">
              Animation, Adventure, Fantacy, Comedy
            </div>
          </div>
        </div>
      </div>
    </div> <!-- Now playing -->
</div>

@endsection