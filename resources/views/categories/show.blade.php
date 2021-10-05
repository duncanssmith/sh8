<x-layout>

    <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-1 gap-x-10 text-gray-400">
        <div class="px-2 py-20">

            <h1 class="font-semibold text-base">
                {{ $category->name }}
            </h1>

            <div class="px-0 py-2">

                @if ($works->count() > 1)
                    <h3 class="font-semibold text-base">{{count($works)}} works</h3>
                    <!-- <h3 class="font-semibold text-base">{{ $works->count() }} works</h3> -->
                    <!-- <h3 class="font-bold text-base">Works <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($works)}} </span> </h3> -->
                    <x-category-works-grid :works="$works"/>
                    <!-- <x-carousel :works="$works"/> -->
                    <!-- <x-carousel-tailwind :works="$works"/> -->
                @elseif (count($works) == '1')
                    <h3 class="font-semibold text-base">{{count($works)}} work</h3>
                    <x-category-works-grid :works="$works" />
                    <!-- <x-carousel :works="$works"/> -->
                    <!-- <x-carousel-tailwind :works="$works"/> -->
                @else
                    <h3 class="font-bold text-base">Works</h3>
                    <p>No works in {{ $category->name }} yet</p>
                @endif

            </div>

            <div class="px-0 py-2">
                @if ($texts->count() > 1)
                    <!-- <h3 class="font-bold text-base">Texts <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($texts)}} </span> </h3> -->
                    <h3 class="font-semibold text-base">{{count($texts)}} texts</h3>
                    <x-category-texts-grid :texts="$texts" />
                @elseif (count($texts) == '1')
                    <h3 class="font-semibold text-base">{{count($texts)}} text</h3>
                    <x-category-texts-grid :texts="$texts" />
                @else
                    <p>No texts in {{ $category->name }} yet</p>
                @endif
            </div>
        </div>
    </article>

</x-layout>
