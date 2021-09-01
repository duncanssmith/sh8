@props(['work', 'admin'])

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
                    @if ($admin)
                        <span class="space-x-2">
                            <a href="/admin/works/{{ $work->slug }}/edit"
                               class="px-3 py-1 border bg-blue-200 border-blue-300 rounded-full text-blue-700 text-xs uppercase font-semibold"
                               style="font-size: 10px"><i class="far fa-edit" title="Edit this work"></i></a>
                        </span>
                        <span class="space-x-2">
                            <a href="/admin/works/{{ $work->slug }}/assign"
                               class="px-3 py-1 border bg-green-200 border-green-300 rounded-full text-green-700 text-xs uppercase font-semibold"
                               style="font-size: 10px"><i class="fas fa-link" title="Assign this work to a page"></i></a>
                        </span>
                        <span class="space-x-2">
                            <a href="/admin/works/{{ $work->slug }}/delete"
                               class="px-3 py-1 border bg-red-200 border-red-300 rounded-full text-red-700 text-xs uppercase font-semibold"
                               style="font-size: 10px"><i class="far fa-trash-alt" title="Delete work! (Are you sure?)"></i></a>
                        </span>
                    @endif

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

                    @if ($admin)
                        <div class="bg-pink-200 py-4 px-4 rounded-lg">
                            <h1 class="font-bold text-gray-700">{{ count($work->categories) }}
                                {!! (count($work->categories) == 1) ?  'page' : 'pages' !!} with this work</h1>
                            @foreach ($work->categories as $category)
                                <div class="text-gray-600 text-sm hover:text-gray-400">
                                    <a href="/categories/{{ $category->slug }} ">{{ ucwords($category->name) }}</a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </footer>
            </div>
        </div>
    </a>
</article>
