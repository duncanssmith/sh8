<x-layout>

    @foreach ($categories as $category)
        <h1>
            <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
        </h1>
        <p>
            {{ $category->slug }}
        </p>
    @endforeach

</x-layout>
