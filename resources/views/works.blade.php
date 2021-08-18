<x-layout>

@foreach ($works as $work)

    <br/>
    <img src="/images/thumbnails/{{$work->id}}.jpg">

    <h1>
        <a href="/works/{{ $work->slug }}">{{ $work->title }}</a>
    </h1>
    <p>
        {{ $work->slug }}
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
    <hr/>
@endforeach

</x-layout>

