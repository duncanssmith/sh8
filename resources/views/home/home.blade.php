<x-layout>

    <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-1 gap-x-10 text-gray-600">
        <div class="px-2 py-20">

            <h1 class="font-bold text-2xl">
                {{ $category->name }}
            </h1>

            <div class="px-0 py-2">

                @if ($works->count())
                    <h3 class="font-bold text-lg">Works <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($works)}} </span> </h3>
                    <hr/>
                    <x-home-works-grid :works="$works"/>
                @else
                    <h3 class="font-bold text-lg">Works</h3>
                    <p>No works in {{ $category->name }} yet</p>
                @endif

            </div>

            <div class="px-0 py-12">
                @if ($texts->count())
                    <h3 class="font-bold text-lg">Texts <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($texts)}} </span> </h3>
                    <x-home-texts-grid :texts="$texts" />
                @else
                    <h3 class="font-bold text-lg">Texts</h3>
                    <p>No texts in {{ $category->name }} yet</p>
                @endif
            </div>
        </div>
    </article>

</x-layout>
