<x-layout>

@foreach ($works as $work)
    <h1>
        <a href="/works/{{ $work->id }}">{{ $work->title }}</a>
    </h1>
    <p>
        {{ $work->reference }}
    </p>
    <p>
        {{ $work->media }}
    </p>
    <p>
        {{ $work->dimensions }}
    </p>
    <p>
        {{ $work->work_date }}
    </p>
@endforeach

</x-layout>

