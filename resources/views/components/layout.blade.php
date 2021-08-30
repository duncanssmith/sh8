<!DOCTYPE html>
    <title>sh8</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/app.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

{{--<body class="max-w-4xl mx-auto">--}}
{{--<body  class="mx-auto ">--}}
{{--<body>--}}
<body class="max-w-4xl mx-auto" style="font-family: Open Sans, sans-serif">

    <section class="px-6 py-8">

        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
{{--                    <img src="/images/logo.svg" alt="Duncan Smith" width="165" height="16">--}}
                    <h1 class="font-bold text-white text-xl ">Duncan Smith</h1>
                    @if(Auth()->user())
                        <p class="text-white text-md">{{ Auth()->user()->username }} logged in</p>
                    @endif
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                @if(Auth()->user())
{{--                    <a href="/logout" class=" bg-gray-100 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 mt-5">Logout </a>--}}
                    <form method="post" action="/logout">
                        @csrf
                        <x-submit>Logout</x-submit>
                    </form>
                @else
                    <a href="/login" class="text-xs font-bold uppercase">Login</a>
                    <a href="/register" class="text-xs font-bold uppercase">Register</a>

{{--                    <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">--}}
{{--                    Subscribe for Updates--}}
{{--                    </a>--}}
                @endif
            </div>
        </nav>

            {{ $slot }}

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
{{--            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">--}}
{{--            <h5 class="text-3xl">Stay in touch with the latest posts</h5>--}}
{{--            <p class="text-sm mt-3">Keep the inbox clean</p>--}}

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

{{--                    <form method="POST" action="#" class="lg:flex text-sm">--}}
{{--                        <div class="lg:py-3 lg:px-5 flex items-center">--}}
{{--                            <label for="email" class="hidden lg:inline-block">--}}
{{--                                <img src="./images/mailbox-icon.svg" alt="mailbox letter">--}}
{{--                            </label>--}}
{{----}}
{{--                            <input id="email" type="text" placeholder="Your email address"--}}
{{--                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">--}}
{{--                        </div>--}}
{{----}}
{{--                        <button type="submit"--}}
{{--                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"--}}
{{--                        >--}}
{{--                            Subscribe--}}
{{--                        </button>--}}
{{--                    </form>--}}
                </div>
            </div>
        </footer>
    </section>

    <x-flash />

    </body>
