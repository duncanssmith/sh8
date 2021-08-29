<x-layout>

{{--    @include ('_posts_header')--}}

    <div class="my-10">
    <h1>Works</h1>
    <a href="/" class="text-purple-100 hover:text-purple-200 py-0 px-0">Back</a>
    </div>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @include('_ds_nav')

        @if($userIsAdmin)
            <a href="/admin/works/create" title="add a new work" class="text-2xl text-indigo-900"> + </a>
        @endif

        @if ($works->count() > 0)
            <div>
                <h1>{{ $title ?? '' }} <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"> {{count($works)}} </span> </h1>
            </div>
            <x-works-grid :works="$works"/>

            {{-- pagination links, only when on works table --}}
{{--            {!! empty($categories) ? $works->links() : '' !!}--}}
        @else
            <p class="text-center">No works found.</p>
        @endif

    @foreach ($works as $work)
        <br/>
        <img src="/{{ $work->thumbnail }}" width="40%">

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

    </main>

</x-layout>

