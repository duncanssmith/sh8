@props(['heading', 'count'])

<section class="py-8 max-w-6xl mx-auto">
    <h1 class="text-gray-500 font-semibold">{{ $heading }}
        @if ( !empty($count) )
            <span class="py-2 px-2 border border-solid border-gray-800 bg-transparent text-gray-500 rounded-sm">{{ $count ?? 0 }}</span>
        @endif
    </h1>
</section>

<div class="flex">
    <x-panel>
        <aside class="w-48 bg-white border py-4 px-4">
        <h4 class="text-gray-400 font-semibold mb-4">Admin options</h4>
        <ul>
{{--            class="block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400"--}}

            <li class="text-gray-500 text-sm">
                <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-gray-100 bg-gray-700' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                ">Posts</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/post/create" class="{{ request()->is('admin/post/create') ? 'text-gray-100 bg-gray-700' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Add post</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/categories" class="{{ request()->is('admin/categories') ? 'text-gray-100 bg-gray-700' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                ">Categories</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/category/create" class="{{ request()->is('admin/category/create') ? 'text-gray-100 bg-gray-700' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Add category</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/works" class="{{ request()->is('admin/works') ? 'text-gray-100 bg-gray-700' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Works</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/work/create" class="{{ request()->is('admin/work/create') ? 'text-gray-100 bg-gray-700' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Add work</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/texts" class="{{ request()->is('admin/texts') ? 'text-gray-100 bg-gray-700' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Texts</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/text/create" class="{{ request()->is('admin/text/create') ? 'text-gray-100 bg-gray-700' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Add text</a>
            </li>
        </ul>
    </aside>
    </x-panel>

    <main class="flex-1">
        <x-panel>
            {{ $slot }}
        </x-panel>
    </main>
</div>

