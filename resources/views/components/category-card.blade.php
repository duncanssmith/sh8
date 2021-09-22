@props(['category'])

<article
    {{ $attributes->merge(['class' => 'text-gray-700 bg-gray-100 transition-colors duration-300
       hover:bg-gray-300 border border-black border-opacity-0
       hover:border-opacity-5 rounded-xl']) }}
>
    <a href="/categories/{{ $category->slug }}">

        <div class="py-6 px-5">

            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <!-- @auth -->
                        <!-- <span class="space-x-2"> -->
                            <!-- <a href="/admin/categories/edit/{{ $category->slug }}" -->
                               <!-- class="px-3 py-1 border bg-blue-200 border-blue-300 rounded-full text-blue-700 text-xs uppercase font-semibold" -->
                               <!-- style="font-size: 10px"><i class="far fa-edit" title="Edit"></i></a> -->
                        <!-- </span> -->
                        <!-- <span class="space-x-2"> -->
                            <!-- <a href="/admin/categories/sort-texts/{{ $category->slug }}" -->
                               <!-- class="px-3 py-1 border bg-green-200 border-green-300 rounded-full text-green-700 text-xs uppercase font-semibold" -->
                               <!-- style="font-size: 10px"><i class="fas fa-sort-amount-up-alt" title="Sort texts"></i></a> -->
                        <!-- </span> -->
                        <!-- <span class="space-x-2"> -->
                            <!-- <a href="/admin/categories/sort-works/{{ $category->slug }}" -->
                               <!-- class="px-3 py-1 border bg-green-200 border-green-300 rounded-full text-green-700 text-xs uppercase font-semibold" -->
                               <!-- style="font-size: 10px"><i class="fas fa-sort-amount-down-alt" title="Sort works"></i></a> -->
                        <!-- </span> -->
                        <!-- <span class="space-x-2"> -->
                            <!-- <a href="/admin/categories/delete/{{ $category->slug }}" -->
                               <!-- class="px-3 py-1 border bg-red-200 border-red-300 rounded-full text-red-700 text-xs uppercase font-semibold" -->
                               <!-- style="font-size: 10px"><i class="far fa-trash-alt" title="Delete! (Are you sure?)"></i></a> -->
                        <!-- </span> -->
                    <!-- @endauth -->

                    <div class="mt-4">
                        <h1 class="text-3xl">
                            <a href="/categories/{{ $category->slug }}"> {{ ucwords($category->name) }} </a>
                        </h1>
                        <h3 class="text-xl">
                            <a href="/home/{{ $category->slug }}"> view as home page DUNCAN DEBUG 400</a>
                        </h3>
                        <p class="space-x-2">{{ count($category->works) }} {!! count($category->works) == 1 ? 'work' : 'works' !!}</p>
                        <p class="space-x-2">{{ count($category->texts) }} {!! count($category->texts) == 1 ? 'text' : 'texts' !!}</p>
                    </div>
                </header>
            </div>
        </div>
    </a>
</article>
