<x-layout>

    <div class="px-2 py-20">

        <h1 class="font-bold text-2xl">
            {{ $category->name }}
        </h1>

        <h2 class="font-bold">
            {{ $category->slug }}
        </h2>

        <div class="px-0 py-12">
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
        </div>

        <div class="px-0 py-12">
            <h3 class="font-bold text-lg">Texts <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($category->texts)}} </span> </h3>
            @foreach($category->texts as $text)

                <p>{{ $text->title }}</p>
                <p>{{ $text->author }}</p>
                <p>{{ $text->body }}</p>
                <hr/>

            @endforeach
        </div>

    </div>

    <button class="bg-white text-purple-800 hover:text-purple-400 py-0 px-6">
        <a href="/categories">Back</a>
    </button>
</x-layout>
