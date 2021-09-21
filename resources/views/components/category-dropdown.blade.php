<x-dropdown>
    <x-slot name="trigger">
        <button class="
        text-gray-400 bg-transparent border-solid border-t border-b border-r border-gray-400 hover:bg-gray-400 hover:text-white
        active:bg-gray-600 font-bold uppercase text-xs px-4 py-2 rounded-r outline-none
        focus:outline-none mb-1 ease-linear transition-all duration-150 px-12
        ">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : ' PAGES ' }}

{{--            <x-icon name="down-arrow" class="absolute pointer-events-none" style=""/>--}}
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
