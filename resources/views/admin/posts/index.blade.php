<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Manage posts">
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
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="/posts/{{ $post->slug }}">
                                                @if ($post->thumbnail)
                                                    <img src="{{ asset($post->thumbnail) }}" width="20%"/>&nbsp;
                                                @endif
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-600">
                                                    <a href="/posts/{{ $post->slug }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="/admin/post/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <form method="POST" action="/admin/post/{{ $post->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-xs text-gray-400">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! empty($posts) ? '' : $posts->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </x-setting>
    </section>
</x-layout>
