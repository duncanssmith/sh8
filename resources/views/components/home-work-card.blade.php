@props(['work'])

<article
    {{ $attributes->merge(['class' => 'text-gray-700 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }} >

    <a href="/works/{{ $work->slug }}">

        <div class="py-6 px-5">
            <div>
                @if ($work->thumbnail)
                <img src="{{ asset($work->thumbnail) }}" alt="Work image" class="rounded-xl">
                @else
                    <h3>No image</h3>
                @endif
            </div>

            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <div class="mt-4">
                        <h1 class="text-3xl">
                            {{ $work->title }}
                        </h1>
                        <p class="text-3sm">
                            {{ $work->media }}
                        </p>
                        <p class="text-3sm">
                            {{ $work->dimensions }}
                        </p>
                        <p class="text-3md">
                            {{ $work->work_date }}
                        </p>

                        <span class="mt-2 block text-gray-400 text-xs"> Updated <time>{{ $work->updated_at->diffForHumans() }}</time> </span>
                    </div>
                </header>
                <footer class="flex justify-between items-center mt-8">
                    <div>
                        <a href="/works/{{ $work->slug }}"
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
