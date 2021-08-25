<x-layout>

    <h1>Work</h1>
    <a href="/works" class="text-purple-100 hover:text-purple-200 py-0 px-0">Back</a>

    <br/>
    <img src="/images/ds/{{ $image }}">

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


</x-layout>
