<x-dropdown>
    <x-slot name="trigger">
        <button class="
        text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-500
        active:bg-gray-600 text-base px-4 py-2 outline-none
        focus:outline-none mb-1 ease-linear transition-all duration-150 px-10
        ">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Pages' }}

<!-- {{--            <x-icon name="down-arrow" class="absolute pointer-events-none" style=""/>--}} -->
        </button>
    </x-slot>

    @foreach ($categories as $category)
        <x-dropdown-item
            href="/category/{{ $category->slug }}"
           :active='request()->is("category/.{$category->slug}")'
        >{{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
