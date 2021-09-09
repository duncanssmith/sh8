@props(['text'])

<article
    {{ $attributes->merge(['class' => 'text-gray-700 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }} >

    <a href="/texts/{{ $text->slug }}">

        <div class="py-6 px-5">

            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <div class="mt-4 text-gray-700">
                        <h1 class="text-3xl my-4">
                            {{ $text->title }}
                        </h1>
                        <p class="text-3sm">
                            {{ $text->body }}
                        </p>
                        <p class="text-3sm mt-2">
                            {{ $text->author }}
                        </p>
                        <p class="text-3md mt-1">
                            {{ $text->year }}
                        </p>

                        <span class="mt-2 block text-gray-400 text-xs"> Published <time>{{ $text->updated_at->diffForHumans() }}</time> </span>
                    </div>
                </header>

                <footer class="flex justify-between items-center mt-8">
                    <div>
                        <a href="/texts/{{ $text->slug }}"
                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                        >
                            View
                        </a>
                    </div>
                </footer>
            </div>
        </div>
    </a>
</article>
