{{--@props(['post', 'image'])--}}
@props(['post'])

    <article
        {{ $attributes->merge(['class' => 'text-gray-700 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }} >

        <a href="/posts/{{ $post->slug }}">

            <div class="py-6 px-5">
                <div>
                    <img src="{{ asset($post->thumbnail) }}" alt="Post image" class="rounded-xl">
                </div>

                <div class="mt-8 flex flex-col justify-between">
                    <header>
                        <div class="space-x-2">
                            <a href="/categories/{{ $post->category->slug }}"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">{{ $post->category->name }}</a>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">
                                {{ $post->title }}
                            </h1>

                            <span class="mt-2 block text-gray-400 text-xs"> Published <time>{{ $post->updated_at->diffForHumans() }}</time> </span>
                        </div>
                    </header>

                    <div class="font-bold text-sm mt-4">
                        <p>{{ $post->excerpt }}</p>
                    </div>

                    <div class="text-sm mt-4">
                        <p>{{ $post->body }}</p>
                    </div>

                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <div class="ml-3">
                                <h5 class="font-bold">{{ $post->author->name }}</h5>
                            </div>
                        </div>

                        <div>
                            <a href="/posts/{{ $post->slug }}"
                               class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                            >
                                Read More
                            </a>
                        </div>
                    </footer>
                </div>
            </div>
        </a>
    </article>
