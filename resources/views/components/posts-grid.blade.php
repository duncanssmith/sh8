{{--@props(['posts', 'images'])--}}
@props(['posts'])

{{--<x-post-featured-card :post="$posts[0]" :image="$images[$posts[0]->id]"/>--}}
<x-post-featured-card :post="$posts[0]"/>

<div class="lg:grid lg:grid-cols-6">
    @foreach ($posts->skip(1) as $post)
{{--        <x-post-card :post="$post" :image="$images[$post->id]" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"></x-post-card>--}}
        <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"></x-post-card>
{{--        {{ dd($loop) }}--}}
    @endforeach
</div>
