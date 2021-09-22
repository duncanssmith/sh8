@props(['text'])

<article
    {{ $attributes->merge(['class' => 'text-gray-700 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-sm']) }} >

    <a href="/texts/{{ $text->slug }}">

        <div class="py-6 px-5">

            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <!-- @auth -->
                        <!-- <span class="space-x-2"> -->
                            <!-- <a href="/admin/texts/edit/{{ $text->slug }}" -->
                               <!-- class="px-3 py-1 border bg-blue-200 border-blue-300 rounded-full text-blue-700 text-xs uppercase font-semibold" -->
                               <!-- style="font-size: 10px"><i class="far fa-edit" title="Edit the text"></i></a> -->
                        <!-- </span> -->
                        <!-- <span class="space-x-2"> -->
                            <!-- <a href="/admin/texts/assign/{{ $text->slug }}" -->
                               <!-- class="px-3 py-1 border bg-green-200 border-green-300 rounded-full text-green-700 text-xs uppercase font-semibold" -->
                               <!-- style="font-size: 10px"><i class="fas fa-link" title="Assign text to a page"></i></a> -->
                        <!-- </span> -->
                        <!-- <span class="space-x-2"> -->
                            <!-- <a href="/admin/texts/delete/{{ $text->slug }}" -->
                               <!-- class="px-3 py-1 border bg-red-200 border-red-300 rounded-full text-red-700 text-xs uppercase font-semibold" -->
                               <!-- style="font-size: 10px"><i class="far fa-trash-alt" title="Delete! (Are you sure?)"></i></a> -->
                        <!-- </span> -->
                    <!-- @endauth -->

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

                    <!-- @auth -->
                        <!-- <div class="bg-green-200 py-4 px-4 rounded-lg"> -->
                            <!-- <h1 class="font-bold text-gray-700">{{ count($text->categories) }} -->
                            <!-- {!! (count($text->categories) == 1) ?  'page' : 'pages' !!} with this text</h1> -->
                            <!-- @foreach ($text->categories as $category) -->
                                <!-- <div class="text-gray-600 text-sm hover:text-gray-400"> -->
                                    <!-- <a href="/categories/{{ $category->slug }} ">{{ ucwords($category->name) }}</a> -->
                                <!-- </div> -->
                            <!-- @endforeach -->
                        <!-- </div> -->
                    <!-- @endauth -->

                </footer>
            </div>
        </div>
    </a>
</article>
