<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Archiv Behindertenbewegung</title>

    <!-- Fonts -->


    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/app.css"> @livewireStyles
</head>

<body class="">
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center border-b-2 border-gray-100 px-4 py-6 md:justify-start md:space-x-10" x-data="{ open: false }">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="{{ url('/') }}">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button" @click="open = true" class="bg-white p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Menü öffnen</span>
                        <i data-feather="menu"></i>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <a href="{{ url('/ueber-uns') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 flex flex-col items-center">
                        <i data-feather="message-square"></i>
                        <span class="text-sm">Blog</span>
                    </a>
                    <a href="{{ url('/ueber-uns') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 flex flex-col items-center">
                        <i data-feather="archive"></i>
                        <span class="text-sm">Archiv</span>
                    </a>
                    <a href="{{ url('/ueber-uns') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 flex flex-col items-center">
                        <i data-feather="info"></i>
                        <span class="text-sm">Über uns</span>
                    </a>
                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="{{ url('/spenden') }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-none text-sm font-medium text-white bg-red-600 hover:bg-red-700">
                        Spenden
                    </a>
                </div>


                <div x-show="open" @click.away="open = false" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden z-10">
                    <div class="shadow-xl ring-1 ring-black ring-opacity-5 bg-white">

                      <div class="pt-5 pb-6 px-5">

                        <div class="flex items-center justify-between">
                          <div>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                          </div>
                          <div class="-mr-2">
                            <button type="button" @click="open = false" class="bg-white p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                              <span class="sr-only">Menü schließen</span>
                              <i data-feather="x"></i>
                            </button>
                          </div>
                        </div>

                        <div class="mt-6">
                          <nav class="grid gap-y-8">
                            <a href="#" class="-m-3 p-3 flex items-center hover:bg-gray-100">
                              <span class="ml-3 text-base font-medium text-gray-900">
                                Blog
                              </span>
                            </a>
                
                            <a href="#" class="-m-3 p-3 flex items-center hover:bg-gray-100">
                              <span class="ml-3 text-base font-medium text-gray-900">
                                Archiv
                              </span>
                            </a>
                
                            <a href="#" class="-m-3 p-3 flex items-center hover:bg-gray-100">
                              <span class="ml-3 text-base font-medium text-gray-900">
                                Über uns
                              </span>
                            </a>
                          </nav>
                        </div>

                      </div>

                      <div class="py-6 px-5 space-y-6">
                        <div>
                          <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent shadow-lg text-base font-medium text-white bg-red-600 hover:bg-red-700">
                            Spenden
                          </a>
                        </div>
                      </div>
                    </div>
                </div>
                



            </div>
        </div>
    </div>
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-center border-t-2 mt-10 border-gray-100 py-6">
                <div>
                    <a href="{{ url('/impressum') }}" class="text-sm text-gray-700 px-2 hover:underline">Datenschutz / Impressum</a>
                @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 px-2 hover:underline">Dashboard</a> @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 px-2 hover:underline">Login</a> @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 px-2 hover:underline">Register</a> @endif @endauth
                @endif
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>