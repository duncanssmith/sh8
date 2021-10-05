@props(['categories'])

<div class="flex bg-gray-100">
    @foreach ($categories as $category)
    <div class="flex-1 bg-gray-200">
        <x-category-card :category="$category" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"></x-category-card>
        <x-category-card :category="$category" class="col-span-1"></x-category-card>
    </div>
    @endforeach
</div>

<div class="">

</div>


<!-- <div class=" sm:grid sm:grid-cols-2 md:grid md:grid-cols-4 lg:grid lg:grid-cols-4 xl:grid xl:grid-cols-4 "> -->
    <!-- @foreach ($categories as $category) -->
        <!-- {{--        <x-category-card :category="$category" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"></x-category-card>--}} -->
        <!-- <x-category-card :category="$category" class="col-span-6"></x-category-card> -->
    <!-- @endforeach -->
<!-- </div> -->
