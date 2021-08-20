<x-layout>

    <div class="px-2 py-20">

        <h1 class="font-bold text-2xl">
            {{ $category->name }}
        </h1>

        <div class="px-0 py-12">
            @if (count($category->works) > 0)
                <h3 class="font-bold text-lg">Works <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($category->works)}} </span> </h3>
                <hr/>
                @foreach($category->works as $work)

                    <img src="{{ $work->id }}">
                    <br>
                    <span title="{{ $work->id }}">*</span>
                    <p>{{ $work->title }}</p>
                    <p>{{ $work->media }}</p>
                    <p>{{ $work->work_date }}</p>
                    <p>{{ $work->dimensions }}</p>
                    <hr/>

                @endforeach
            @else
                <h3 class="font-bold text-lg">Works</h3>
                <p>No works in {{ $category->name }} yet</p>
            @endif
        </div>

        <div class="px-0 py-12">
            @if (count($category->texts) > 0)
                <h3 class="font-bold text-lg">Texts <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($category->texts)}} </span> </h3>
                @foreach($category->texts as $text)

                    <h2 class="font-bold text-lg px-0 py-8">{{ $text->title }}</h2>
                    <p class="text-md">{{ $text->body }}</p>
                    <h5 class="font-bold text-md px-0 py-6">{{ $text->author }}</h5>
                    <span class="text-md px-0 py-4"> {{ $text->year }}</span>
                    <hr/>

                @endforeach
            @else
                <h3 class="font-bold text-lg">Texts</h3>
                <p>No texts in {{ $category->name }} yet</p>
            @endif
        </div>

    </div>

    <button class="bg-white text-purple-800 hover:text-purple-400 py-0 px-6">
        <a href="/categories">Back</a>
    </button>
</x-layout>
