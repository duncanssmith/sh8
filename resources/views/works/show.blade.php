<x-layout>

    @php
        $pagetitle="Work"; $backlink="/"; $index="/works"; $create="/admin/works/create";
    @endphp

    <x-pagelinks :pagetitle="$pagetitle" :backlink="$backlink" :index="$index" :create="$create" :admin="$userIsAdmin" />

    <article class="max-w-4xl mx-auto">
        <img src="{{ asset('$work->thumbnail') }}">

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
    </article>

</x-layout>
