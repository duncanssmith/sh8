@props(['categories'])

<div class="
sm:grid sm:grid-cols-2
md:grid md:grid-cols-4
lg:grid lg:grid-cols-4
xl:grid xl:grid-cols-4
">
    @foreach ($categories as $category)
        {{--        <x-category-card :category="$category" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"></x-category-card>--}}
        <x-category-card :category="$category" class="col-span-6"></x-category-card>
    @endforeach
</div>
