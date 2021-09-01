<x-layout>

    @php
        $pagetitle="Pages"; $index="/"; $create="/admin/categories/create";
    @endphp

    <x-pagelinks :pagetitle="$pagetitle" :index="$index" :create="$create" :admin="$userIsAdmin" />

    <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-1 gap-x-10 text-gray-600">
        <div class="px-2 py-20">

            <h1 class="font-bold text-2xl">
                {{ $category->name }}
            </h1>

            <div class="px-0 py-12">

                @if ($category->works->count())
                    <h3 class="font-bold text-lg">Works <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($category->works)}} </span> </h3>
                    <hr/>
                        <x-category-works-grid :works="$works" :admin="$userIsAdmin"/>
                @else
                    <h3 class="font-bold text-lg">Works</h3>
                    <p>No works in {{ $category->name }} yet</p>
                @endif

            </div>

            <div class="px-0 py-12">
                @if ($category->texts->count())
                    <h3 class="font-bold text-lg">Texts <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($category->texts)}} </span> </h3>
                        <x-category-texts-grid :texts="$texts" :admin="$userIsAdmin"/>
                @else
                    <h3 class="font-bold text-lg">Texts</h3>
                    <p>No texts in {{ $category->name }} yet</p>
                @endif
            </div>
        </div>
    </article>

</x-layout>
