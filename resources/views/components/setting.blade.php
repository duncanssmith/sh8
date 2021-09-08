@props(['heading'])

<section class="py-8 max-w-6xl mx-auto">
    <h1 class="text-gray-700 font-semibold">{{ $heading }}</h1>
</section>

<div class="flex">
    <aside class="w-48 bg-white border py-4 px-4">
        <h4 class="text-gray-400 font-semibold mb-4">Links</h4>
        <ul>
{{--            class="block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400"--}}

            <li class="text-gray-500 text-sm">
                <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                ">Posts</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/post/create" class="{{ request()->is('admin/post/create') ? 'text-blue-500' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Add post</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/categories" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                ">Categories</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/category/create" class="{{ request()->is('admin/category/create') ? 'text-blue-500' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Add category</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/works" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Works</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/work/create" class="{{ request()->is('admin/work/create') ? 'text-blue-500' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Add work</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/texts" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Texts</a>
            </li>
            <li class="text-gray-500 text-sm">
                <a href="/admin/text/create" class="{{ request()->is('admin/text/create') ? 'text-blue-500' : '' }}
                    block text-left px-3 text-sm leading-6 hover:bg-gray-200 focus:bg-gray-200 hover:text-gray-600 focus:text-gray-700 text-sm font-bold text-gray-400
                    ">Add text</a>
            </li>
        </ul>
    </aside>

    <main class="flex-1">
        <x-panel>
            {{ $slot }}
        </x-panel>
    </main>
</div>

