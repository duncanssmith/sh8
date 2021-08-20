<!DOCTYPE html>
    <title>sh8</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/app.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <body  class="max-w-4xl mx-auto">
        <div class="container">
{{--            <div x-data="{ show: false }">--}}
{{--                <button @click="show = !show" class="text-white font-bold bg-purple-700 hover:bg-purple-800 py-2 px-4 rounded">Pages</button>--}}
{{--                <div x-show="show" class="py-2 px-4">--}}
{{--                    <a href="/categories" class="block text-white font-bold bg-purple-500 hover:bg-purple-600 py-2 px-4 rounded">Categories</a>--}}
{{--                    <a href="/works" class="block text-white font-bold bg-purple-500 hover:bg-purple-600 py-2 px-4 rounded">Works</a>--}}
{{--                    <a href="/texts" class="block text-white font-bold bg-purple-500 hover:bg-purple-600 py-2 px-4 rounded">Texts</a>--}}
{{--                    <a href="/posts" class="block text-white font-bold bg-purple-500 hover:bg-purple-600 py-2 px-4 rounded">Posts</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <hr/>--}}

            <div class="flex items-center justify-center mb-4">
                <button
                    class="text-purple-500 bg-transparent border-l border-t border-b border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded-l outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
                    type="button">
                    <a href="/categories">Categories</a>
                </button>
                <button
                    class="text-purple-500 bg-transparent border border-solid border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
                    type="button">
                    <a href="/works">Works</a>
                </button>
                <button
                    class="text-purple-500 bg-transparent border border-solid border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
                    type="button">
                    <a href="/texts">Texts</a>
                </button>
                <button
                    class="text-purple-500 bg-transparent border-t border-b border-r border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded-r outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
                    type="button">
                    <a href="/posts">Posts</a>
                </button>
            </div>


            {{ $slot }}
        </div>
    </body>
