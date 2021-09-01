<x-layout>

    @php
        $pagetitle="Text"; $index="/texts"; $create="/admin/texts/create";
    @endphp

    <x-pagelinks :pagetitle="$pagetitle" :index="$index" :create="$create" :admin="$userIsAdmin" />

    <article class="">
        <h1> {{ $text->title }} </h1>
        <h2>
            {{ $text->slug }}
        </h2>
        <article>
            {{ $text->body }}
        </article>
        <p>
            Author: {{ $text->author }}
        </p>
        <p>
            Year: {{ $text->year }}
        </p>
        <p>
            Description: {{ $text->description }}
        </p>
        <p>
            Publication: {{ $text->publication }}
        </p>
        <p>
            Publication date: {{ $text->publication_date }}
        </p>
    </article>

</x-layout>
