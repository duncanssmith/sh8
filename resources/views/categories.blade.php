<x-layout>

    <h1>Categories</h1>
    <a href="/" class="text-purple-100 hover:text-purple-200 py-0 px-0">Back</a>

@foreach ($categories as $category)
        <div class="px-2 py-10">

            <h1 class="font-bold text-l">
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </h1>

            <hr/>

        </div>
    @endforeach

</x-layout>
