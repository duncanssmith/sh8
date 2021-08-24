<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-5xl">
        <span class="text-blue-500">Duncan Smith</span>
    </h1>

    {{--                <h2 class="inline-flex mt-2">By Lary Laracore <img src="./images/lary-head.svg" alt="Head of Lary the mascot"></h2>--}}

    {{--                <p class="text-sm mt-14">Paintings and drawings, 2021</p>--}}

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        {{--                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">--}}
        {{--                        <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">--}}
        {{--                            <option value="category" disabled selected>Category--}}
        {{--                            </option>--}}
        {{--                            <option value="personal">Personal</option>--}}
        {{--                            <option value="business">Business</option>--}}
        {{--                        </select>--}}

        {{--                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"--}}
        {{--                             height="22" viewBox="0 0 22 22">--}}
        {{--                            <g fill="none" fill-rule="evenodd">--}}
        {{--                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">--}}
        {{--                                </path>--}}
        {{--                                <path fill="#222"--}}
        {{--                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>--}}
        {{--                            </g>--}}
{{--        </svg>--}}
    {{--                    </div>--}}

    <!-- Other Filters -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters </option>
                <option value="foo">Foo </option>
                <option value="bar">Bar </option>
                <option value="sub">Sub </option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>

<div class="max-w-4xl mx-auto">

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


    <div class="flex items-center justify-center mb-4 mt-5">
        <button
            class="text-purple-500 bg-transparent border-l border-t border-b border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded-l outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
            type="button">
            <a href="/">Posts</a>
        </button>
        <button
            class="text-purple-500 bg-transparent border border-solid border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
            type="button">
            <a href="/laravel">Laravel</a>
        </button>
        <button
            class="text-purple-500 bg-transparent border border-solid border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
            type="button">
            <a href="/dashboard">Dashboard</a>
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
            <a href="/categories">Categories</a>
        </button>
    </div>

    <div>
        <h1>{{ $title ?? '' }}</h1>
    </div>

    <div class="lg:grid lg:grid-cols-1">
        <x-post-card></x-post-card>
    </div>
    <div class="lg:grid lg:grid-cols-2">
        <x-post-card></x-post-card>
        <x-post-card></x-post-card>
    </div>
    <div class="lg:grid lg:grid-cols-3">
        <x-post-card></x-post-card>
        <x-post-card></x-post-card>
        <x-post-card></x-post-card>
    </div>
