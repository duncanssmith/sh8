<!DOCTYPE html>
<head>
    <title>Duncan Smith {{ $attributes }}</title>
    <meta charset="UTF-8">
{{--    Run npm run build to compile ~/css/app.css --}}
    {{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="https://kit.fontawesome.com/1feeac4669.js" crossorigin="anonymous"></script>
    @auth
        <script src="{{ asset('/js/ckeditor/ckeditor.js') }}"></script>
{{--        <script src="//cdn.ckeditor.com/4.4.5/basic/ckeditor.js"></script>--}}
        <script src="{{ asset('/media/js/image_sort.js')}}"></script>
        <script src="{{ asset('/media/js/text_sort.js')}}"></script>
    @endauth

</head>

<body>

{{--    Gives padding to whole section--}}
    <div class="px-6 py-0 bg-gray-200 text-gray-700">

        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <h1 class="font-bold text-gray-700 text-2xl ">Duncan Smith</h1>
                </a>
            </div>

            @include('_ds_nav')

            @auth
                @include('_ds_nav_auth')
            @endauth

            <div class="mt-8 md:mt-2 py-2 flex items-center">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-sm py-0 mt-2 mb-0 font-bold text-gray-400 ">
                                <i class="far fa-user"></i>&nbsp;
                                {{ auth()->user()->username }}
                            </button>
                        </x-slot>

                        <x-dropdown-item href="/admin/posts/" :active="request()->is('admin/posts')" class="text-sm font-bold text-gray-400">List posts</x-dropdown-item>
                        <x-dropdown-item href="/admin/post/create" :active="request()->is('admin/post/create')" class="text-sm font-bold text-gray-400">Add post</x-dropdown-item>
                        <x-dropdown-item href="#" class="text-sm font-bold text-gray-400">
                            <form method="post" action="/logout">
                                @csrf
                                <x-form.button-logout-link>Log out</x-form.button-logout-link>
                            </form>
                        </x-dropdown-item>
                    </x-dropdown>

                @else
                    <div class="mt-8 mb-8 md:mt-2 py-2">
                        <a href="/login" class="text-xs font-bold uppercase text-gray-400">Login</a>
                        <span class="text-xs font-bold text-gray-400">|</span>
                        <a href="/register" class="text-xs font-bold uppercase text-gray-400">Register</a>
                    </div>
                @endauth

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
