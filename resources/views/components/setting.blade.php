@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="">{{ $heading }}</h1>
</section>

<div class="flex">
    <aside class="w-48">
        <h4 class="font-semibold mb-4">Links</h4>
        <ul>
            <li>
                <a href="/admin/posts" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">Posts</a>
            </li>
            <li>
                <a href="/admin/post/create" class="{{ request()->is('admin/post/create') ? 'text-blue-500' : '' }}">Add post</a>
            </li>
            <li>
                <a href="/admin/categories" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">Categories</a>
            </li>
            <li>
                <a href="/admin/category/create" class="{{ request()->is('admin/category/create') ? 'text-blue-500' : '' }}">Add category</a>
            </li>
            <li>
                <a href="/admin/works" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">Works</a>
            </li>
            <li>
                <a href="/admin/work/create" class="{{ request()->is('admin/work/create') ? 'text-blue-500' : '' }}">Add work</a>
            </li>
            <li>
                <a href="/admin/texts" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">Texts</a>
            </li>
            <li>
                <a href="/admin/text/create" class="{{ request()->is('admin/text/create') ? 'text-blue-500' : '' }}">Add text</a>
            </li>
        </ul>
    </aside>

    <main class="flex-1">
        <x-panel>
            {{ $slot }}
        </x-panel>
    </main>
</div>

{{--<div class="md:flex md:justify-between md:items-center"> Spacer here</div>--}}

{{--<div class="md:flex md:justify-between md:items-center">--}}
{{--    <div class="lg:grid lg:grid-cols-6 ">--}}
{{--    {{ $slot }}--}}
{{--</div>--}}
