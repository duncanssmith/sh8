<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Manage pages">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <th class="px-6 py-4 whitespace-nowrap text-gray-700">Page name </th>
                                        <th class="px-6 py-4 whitespace-nowrap">Display?&nbsp;</th>
                                        <th class="px-6 py-4 whitespace-nowrap">Nav menu item?&nbsp;</th>
                                        <th class="px-6 py-4 whitespace-nowrap">Works&nbsp;</th>
                                        <th class="px-6 py-4 whitespace-nowrap">Texts&nbsp;</th>
                                        <th class="px-6 py-4 whitespace-nowrap" colspan="4">Actions&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-600">
                                                    <a href="/admin/categories/{{ $category->slug }}">
                                                        {{ $category->name }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            @if ($category->display)
                                                <i class="fa fa-check text-green-500"></i>
                                            @endif
                                        </td>
                                        <td class="">
                                            @if ($category->nav_menu_item)
                                                <i class="fa fa-check text-green-500"></i>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ count($category->works) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ count($category->texts) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/category/{{ $category->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/category/{{ $category->id }}/sort_page_works" class="text-blue-500 hover:text-blue-600">Sort works</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/category/{{$category->id}}/sort_page_texts" class="text-blue-500 hover:text-blue-600">Sort texts</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <form method="POST" action="/admin/category/{{ $category->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-xs text-gray-400">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>

                            {!! empty($categories) ? '' : $categories->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </x-setting>
    </section>
</x-layout>
