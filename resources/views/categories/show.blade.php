<x-layout>

    <h1>Category</h1>
    <a href="/categories" class="text-purple-100 hover:text-purple-200 py-0 px-0">Back</a>

    <div class="px-2 py-20">

        <h1 class="font-bold text-2xl">
            {{ $category->name }}
        </h1>

        <div class="px-0 py-12">

            @if ($category->works->count())
                <h3 class="font-bold text-lg">Works <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($category->works)}} </span> </h3>
                <hr/>
{{--                @foreach($category->works as $work)--}}
                    <x-category-works-grid :works="$works"/>
{{----}}
{{--                    <img src="{{ asset('storage/'.$work->thumbnail) }}">--}}
{{--                    <br>--}}
{{--                    <span title="{{ $work->id }}">*</span>--}}
{{--                    <p>{{ $work->title }}</p>--}}
{{--                    <p>{{ $work->media }}</p>--}}
{{--                    <p>{{ $work->work_date }}</p>--}}
{{--                    <p>{{ $work->dimensions }}</p>--}}
{{--                    <hr/>--}}
{{----}}
{{--                @endforeach--}}
            @else
                <h3 class="font-bold text-lg">Works</h3>
                <p>No works in {{ $category->name }} yet</p>
            @endif

        </div>

        <div class="px-0 py-12">
            @if ($category->texts->count())
                <h3 class="font-bold text-lg">Texts <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($category->texts)}} </span> </h3>
                    <x-category-texts-grid :texts="$texts"/>
            @else
                <h3 class="font-bold text-lg">Texts</h3>
                <p>No texts in {{ $category->name }} yet</p>
            @endif
        </div>
    </div>

</x-layout>
