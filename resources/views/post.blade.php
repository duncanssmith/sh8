<x-layout>

    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
            <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                <img src="/images/ds/{{ $image }}" alt="{{ $post->title }}" class="rounded-xl">

                <div class="space-x-2">
                    <a href="/categories/{{ $post->category->slug }}"
                       class="px-3 py-1 border border-blue-600 rounded-full text-blue-600 text-xs uppercase font-semibold"
                       style="font-size: 10px">{{ $post->category->name }}</a>
                </div>


                <p class="mt-4 block text-gray-400 text-xs">
                    Published <time>{{ $post->updated_at->diffForHumans() }}</time>
                </p>

                <div class="flex items-center lg:justify-center text-sm mt-4">
                    <div class="ml-3 text-left">
                        <h5 class="font-bold">{{ $post->author->name }}</h5>
                    </div>
                </div>
            </div>

            <div class="col-span-8">
                <div class="hidden lg:flex justify-between mb-6">
                    <a href="/"
                       class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                        <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path class="fill-current"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                </path>
                            </g>
                        </svg>

                        All posts
                    </a>

                    <div class="space-x-2">
                        <a href="#"
                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                           style="font-size: 10px">Techniques</a>
                        <a href="#"
                           class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                           style="font-size: 10px">Updates</a>
                    </div>
                </div>

                <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{ $post->title }}
                </h1>

                <div class="space-y-4 lg:text-md leading-loose">
                    {{ $post->excerpt }}
                </div>

                <div class="space-y-4 lg:text-lg leading-loose">
                    {{ $post->body }}
                </div>
            </div>
        </article>
    </main>

{{--            <h1 class="text-2xl font-bold mt-8 mb-5">--}}
{{--                {{ $post->title }}--}}
{{--            </h1>--}}

{{--            <h2 class="text-1xl font-bold mt-8 mb-5">--}}
{{--                {{ $post->slug }}--}}
{{--            </h2>--}}

{{--            <article>--}}
{{--                {{ $post->body }}--}}
{{--            </article>--}}

{{--            <p class="my-5">--}}
{{--                by <a href="/authors/{{$post->author->username}}">{{ $post->author->username }}</a>--}}
{{--            </p>--}}

{{--            <a href="/" class="font-bold text-purple-800 hover:text-purple-600 py-0 px-6">Back</a>--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    </main>--}}

</x-layout>
