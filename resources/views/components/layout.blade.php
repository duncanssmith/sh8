<!DOCTYPE html>
<head>
    <title>Works</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{--    Run npm run build to compile ~/css/app.css --}}
    {{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    {{--    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="/css/app.css">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/1feeac4669.js" crossorigin="anonymous"></script>

    @auth
        <script src="{{ asset('/js/vendor/ckeditor/ckeditor.js') }}"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <style>
            #sortable { list-style-type: none; margin: 10px; padding: 10px; width: 30%; }
            #sortable li { margin: 10px 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
            #sortable li span { position: absolute; margin-left: -1.3em; }
        </style>
        <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript">var uuid = "{{ $uuid ?? ''}}"; var path = "{{ $path ?? ''}}";</script>
        <script type="text/javascript" src="{{ asset('/js/sortable-sort.js') }}" rel="script"></script>
    @endauth
</head>
<body>

{{--    Gives padding to whole section--}}
    <div class="px-6 py-0 bg-transparent text-gray-500 text-base">

        <nav class="md:flex md:justify-between md:items-center border-b border-solid border-gray-100 border-b">
            <div>
                <a href="/">
                    <h1 class="font-semibold text-gray-400 text-4xg ">works</h1>
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
                                {{ auth()->user()->name }}<br/>
                                <span class="text-xs">{{ auth()->user()->email }}</span>
                            </button>
                        </x-slot>

                        <x-dropdown-item href="/admin/posts/" :active="request()->is('admin/posts')" class="text-sm font-bold text-gray-400">List posts</x-dropdown-item>
                        <x-dropdown-item href="/admin/post/create" :active="request()->is('admin/post/create')" class="text-sm font-bold text-gray-400">Add post</x-dropdown-item>
                        <x-dropdown-item href="#" class="text-base font-bold text-gray-400">
                            <form method="post" action="/logout">
                                @csrf
                                <x-form.button-logout-link>Log out</x-form.button-logout-link>
                            </form>
                        </x-dropdown-item>
                    </x-dropdown>

                @else
                    <div class="mt-8 mb-8 md:mt-2 py-2 text-gray-400">
                        <a href="/login" class="text-xs font-bold uppercase">Login</a>
                        <span class="text-xs font-bold">|</span>
                        <a href="/register" class="text-xs font-bold uppercase">Register</a>
                    </div>
                @endauth

            </div>
        </nav>
    </div>

    <div class="white">
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

{{-- React example --}}
{{--<script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>--}}
{{--<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>--}}
<!-- Load our React component. -->
{{--<script src="/js/like_button.js"></script>--}}

</body>
