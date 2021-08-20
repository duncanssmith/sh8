<x-layout>

    <br/>
    <img src="'/img/' . ' {{ $work->reference }} ' . ' .jpg'">

    <p>{{ $title ?? '' }}</p>
    <p>{{ $author ?? '' }}</p>
    <p>{{ $content ?? '' }}</p>

    <h1>
        {{ $work->title }}
    </h1>
    <p>
        {{ $work->media ?? ''}}
    </p>
    <p>
        {{ $work->dimensions ?? '' }}
    </p>
    <p>
        {{ $work->work_date ?? ''}}
    </p>

    <a href="/works" class="font-bold text-purple-800 hover:text-purple-600 py-0 px-6">Back</a>

</x-layout>
