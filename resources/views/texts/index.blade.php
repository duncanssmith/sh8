<x-layout>

    <div class="my-10">
    <h1>Texts</h1>
    <a href="/" class="text-purple-100 hover:text-purple-200 py-0 px-0">Back</a>
    </div>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    @include('_ds_nav')

    @if($userIsAdmin)
        <a href="/admin/works/create" title="add a new work" class="text-2xl text-indigo-900"> + </a>
    @endif

    @foreach ($texts as $text)
        <br/>
        <h1>
            <a href="/texts/{{ $text->slug }}">{{ $text->title }}</a>
        </h1>
        <article>
            {{ $text->body }}
        </article>
        <p>
            {{ $text->author }}
        </p>
        <p>
            {{ $text->year }}
        </p>
        <p>
            {{ $text->description }}
        </p>
        <p>
            {{ $text->publication }}
        </p>
        <p>
            {{ $text->publication_date }}
        </p>
        <hr/>
    @endforeach

    </main>

</x-layout>
