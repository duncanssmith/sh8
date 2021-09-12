<x-layout>

    <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10 text-gray-700">
        <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
            <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}" class="rounded-xl">

            <div class="space-x-2">
                <a href="/categories/{{ $post->category->slug }}"
                   class="px-3 py-1 border border-blue-600 rounded-full text-blue-600 text-xs uppercase font-semibold"
                   style="font-size:10px">{{ $post->category->name }}</a>
            </div>

            <p class="mt-4 block text-gray-400 text-xs">
                Published <time>{{ $post->updated_at->diffForHumans() }}</time>
            </p>

            <div class="flex items-center lg:justify-center text-sm mt-4">
                <div class="ml-3 text-left">
                    <h5 class="font-bold">{{ $post->author->name }}</h5>
                </div>
            </div>
        </div>

        <div class="col-span-8">
            <div class="hidden lg:flex justify-between mb-6">
                <div class="space-x-2">
                    <a href="#"
                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">Techniques</a>
                    <a href="#"
                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">Updates</a>
                </div>
            </div>

            <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                {{ $post->title }}
            </h1>

            <div class="font-bold space-y-4 lg:text-lg leading-loose">
                <p class="my-4">{{ $post->excerpt }}
                </p>
            </div>

            <div class="space-y-4 lg:text-lg leading-loose">
                {!! $post->body !!}
            </div>
        </div>
    </article>

</x-layout>
