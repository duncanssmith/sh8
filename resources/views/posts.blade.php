<x-layout>

   @include ('_posts_header')

{{--    <main class="h-full flex items-center px-6 lg:px-32 bg-purple-900 text-white">--}}
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            @include('_ds_nav')

            @if ($posts->count() > 0)
                <div>
                    <h1>{{ $title ?? '' }} <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($posts)}} </span> </h1>
                </div>
                <x-posts-grid :posts="$posts" />
            @else
                <p class="text-center">No posts found.</p>
            @endif
    </main>

</x-layout>
