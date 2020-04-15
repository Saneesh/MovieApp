<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Moon Movie App</title>

        <!-- Tailwind -->
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body class="font-sans bg-gray-900 text-white">
        <nav class="border-b border-gray-800">
            <div class="container mx-auto flex items-center justify-between px-4 py-6">
                <ul class="flex items-center">
                    <li>
                        <a href="#" class="flex">
                            <svg class="bi bi-moon w-5 fill-current text-gray-600"  viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M14.53 10.53a7 7 0 01-9.058-9.058A7.003 7.003 0 008 15a7.002 7.002 0 006.53-4.47z" clip-rule="evenodd"/>
                            </svg>Moon Movie App
                        </a>
                    </li>
                    <li class="ml-16">
                        <a href="" class="hover:text-gray-300">Movies</a>
                    </li>
                    <li class="ml-6">
                        <a href="" class="hover:text-gray-300">TV Shows</a>
                    </li>
                    <li class="ml-6">
                        <a href="" class="hover:text-gray-300">Actors</a>
                    </li>
                </ul>
                <div class="flex items-center">
                    <div class="relative">
                        <input type="text" class="bg-gray-800 rounded-full w-64 pl-8 py-1 text-sm focus:outline-none focus:shadow-outline" placeholder="Search" />
                        <div class="absolute top-0">
                            <svg class="bi bi-search w-5 mt-2 ml-1 fill-current text-gray-500" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div class="ml-4">
                        <a href="#">
                            <img src="/images/avatar.png" alt="Avatar" class="rounded-full w-8" />
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </body>
</html>