<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Moon Movie App</title>

        <!-- Tailwind -->
        <link href="/css/main.css" rel="stylesheet">
        @livewireStyles
    </head>
    <body class="font-sans bg-gray-900 text-white">
        <nav class="border-b border-gray-800">
            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
                <ul class="flex flex-col md:flex-row items-center">
                    <li>
                        <a href="{{ route('movies.index') }}" class="flex">
                            <svg class="bi bi-moon w-5 fill-current text-gray-600"  viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M14.53 10.53a7 7 0 01-9.058-9.058A7.003 7.003 0 008 15a7.002 7.002 0 006.53-4.47z" clip-rule="evenodd"/>
                            </svg>Moon Movie App
                        </a>
                    </li>
                    <li class="md:ml-16 mt-3 md:mt-0">
                        <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="" class="hover:text-gray-300">TV Shows</a>
                    </li>
                    <li class="md:ml-6 mt-3 md:mt-0">
                        <a href="" class="hover:text-gray-300">Actors</a>
                    </li>
                </ul>
                <div class="flex flex-col md:flex-row items-center">
                    <livewire:search-dropdown />
                    <div class="md:ml-4 mt-3 md:mt-0">
                        <a href="#">
                            <img src="/images/avatar.png" alt="Avatar" class="rounded-full w-8" />
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        @livewireScripts
    </body>
</html>