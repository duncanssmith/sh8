@props(['category'])

<article
{{--    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }} >--}}

    <a href="/categories/{{ $category->slug }}">

        <div class="py-6 px-5">

            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <div class="space-x-2">
                        <a href="/categories/{{ $category->slug }}"
                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                           style="font-size: 10px"><i class="icon icon-ellipsis"></i></a>
                    </div>

                    <div class="mt-4">
                        <h1 class="text-3xl">
                            {{ ucwords($category->name) }}
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs"> Updated <time>{{ $category->updated_at->diffForHumans() }}</time> </span>
                    </div>
                </header>
            </div>
        </div>
    </a>
</article>
