<x-layout>

    <h1>Works</h1>
    <a href="/" class="text-purple-100 hover:text-purple-200 py-0 px-0">Back</a>

    @foreach ($works as $work)
        <br/>
        <img src="/images/ds/{{ $images[$work->id] }}" width="40%">

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

