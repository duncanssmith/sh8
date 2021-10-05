<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Manage works">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <th class="px-6 py-4 whitespace-nowrap text-gray-700"> Image </th>
                                        <th class="px-6 py-4 whitespace-nowrap text-gray-700"> Title </th>
                                        <th class="px-6 py-4 whitespace-nowrap">&nbsp;</th>
                                        <th class="px-6 py-4 whitespace-nowrap">&nbsp;</th>
                                        <th class="px-6 py-4 whitespace-nowrap">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($works as $work)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($work->thumbnail)
                                                <a href="/works/{{ $work->slug }}">
                                                    <img src="{{ asset($work->thumbnail) }}" />
                                                </a>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-600">
                                                    <a href="/works/{{ $work->slug }}">
                                                        {{ $work->title }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/work/{{ $work->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/category/assign_work/{{ $work->id }}" class="text-blue-500 hover:text-blue-600">Assign</a>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                            <!-- Are you sure you want to delete this? modal /////////////////////////////////// -->
                                            <div id="item-delete-{{$work->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">

                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title">Delete</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete '{{$work->title}}'?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Close</button>
                                                            <!-- delete the group (uses the destroy method DESTROY /groups/{id} -->
                                                            <!-- we will add this later since its a little more complicated than the other two buttons -->
                                                                <form method="POST" action="/admin/work/{{ $work->id }}">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button class="text-xs text-gray-400">Delete</button>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </x-setting>
    </section>
</x-layout>
