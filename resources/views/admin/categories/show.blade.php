<x-layout>

        <div class="px-2 py-20">


            <p class="font-semibold text-gray-500">Name: {{ $category->name }} </p>
            <p class="font-semibold text-gray-500">Slug: {{ $category->slug }} </p>
            <p class="font-semibold text-gray-500">Display?:
                @if ($category->display)
                    <i class="fa fa-check text-green-500"></i>
                @else
                    <i class="fa fa-times text-grey-500"></i>
                @endif
            </p>
            <p class="font-semibold text-gray-500">Nav menu item?:
                @if ($category->nav_menu_item)
                    <i class="fa fa-check text-green-500"></i>
                @else
                    <i class="fa fa-times text-grey-500"></i>
                @endif
            </p>
            <p class="font-bold text-gray-500"> {{ $category->updated_date }} </p>
            <p class="font-bold text-gray-500"> {{ $category->created_date }} </p>

        </div>


</x-layout>
