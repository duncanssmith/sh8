<x-layout>

    <br/>
    <img src="'/img/' . ' {{ $work->reference }} ' . ' .jpg'">

    <p>{{ $basePath }}</p>
    <p>{{ $appPath }}</p>
    <p>{{ $resourcePath }}</p>
    <p>{{ $publicPath }}</p>

    <h1>
        {{ $work->title }}
    </h1>
    <p>
        {{ $work->media }}
    </p>
    <p>
        {{ $work->dimensions }}
    </p>
    <p>
        {{ $work->work_date }}
    </p>

    <a href="/works">Back</a>

</x-layout>
