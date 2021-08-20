<x-layout>

    @foreach ($categories as $category)
        <div class="px-2 py-10">

            <h1 class="font-bold text-l">
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </h1>

            <p>
                {{ $category->slug }}
            </p>

            <hr/>

        </div>
    @endforeach

</x-layout>
