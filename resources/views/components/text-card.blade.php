@props(['text', 'image'])

    <article
        {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }} >

        <a href="/texts/{{ $text->slug }}">

            <div class="py-6 px-5">

                <div class="mt-8 flex flex-col justify-between">
                    <header>
                        <div class="space-x-2">
                            <a href="/texts/{{ $text->slug }}"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">...</a>
                        </div>

                        <div class="mt-4">
                            <h1 class="text-3xl">
                                {{ $text->title }}
                            </h1>
                            <p class="text-3sm">
                                {{ $text->body }}
                            </p>
                            <p class="text-3sm">
                                {{ $text->author }}
                            </p>
                            <p class="text-3md">
                                {{ $text->year }}
                            </p>

                            <span class="mt-2 block text-gray-400 text-xs"> Published <time>{{ $text->updated_at->diffForHumans() }}</time> </span>
                        </div>
                    </header>

                    <footer class="flex justify-between items-center mt-8">
                        <div class="flex items-center text-sm">
                            <div class="ml-3">
                                <h5 class="font-bold">{{ $text->id }}</h5>
                            </div>
                        </div>

                        <div>
                            <a href="/texts/{{ $text->slug }}"
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
