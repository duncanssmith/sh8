<!DOCTYPE html>
    <title>Duncan Smith {{ $attributes }}</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/app.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1feeac4669.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<body>

{{--    Gives padding to whole section--}}
    <div class="px-6 py-0 bg-gray-200 text-gray-700">

        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <h1 class="font-bold text-gray-700 text-2xl ">Duncan Smith</h1>
                </a>
            </div>

            @include ('_ds_nav')

            <div class="mt-8 md:mt-2 py-2">

                @if(Auth()->user())
                    <p class="text-gray-400 text-md py-0 mt-2 mb-0"><i class="far fa-user"></i> {{ Auth()->user()->username }}</p>
                    <form method="post" action="/logout">
                        @csrf
                        <span class="mt-0 mb-0 py-0">
                            <x-submit>Logout</x-submit>
                        </span>
                    </form>
                @endif

                @guest
                    <div class="mt-8 mb-8 md:mt-2 py-2">
                        <a href="/login" class="text-xs font-bold uppercase text-gray-400">Login</a> |
                        <a href="/register" class="text-xs font-bold uppercase text-gray-400">Register</a>
                    </div>
                @endguest

            </div>
        </nav>
    </div>

    <div class="bg-gray-100">
        <main class="max-w-6xl mx-auto mt-0 lg:mt-0 space-y-6">

            {{ $slot }}

        </main>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded text-center py-4 px-6 mt-6">
            <div class="mt-4">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    @include('_footer_content')
                </div>
            </div>
        </footer>
    </div>

    <x-flash />

    </body>
