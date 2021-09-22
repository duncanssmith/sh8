<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Edit category">
            <form method="POST" action="/admin/category/{{ $category->id }}">
                @csrf
                @method('PATCH')
                <x-form.input name="name" :value="old('name', $category->name)" required />
                <x-form.input name="slug" :value="old('slug', $category->slug)" required />
                <x-form.checkbox name="display" :value="old('display', $category->display)" id="{{ $category->display }}" checked="{{ $category->display }}" />
                <x-form.checkbox name="nav_menu_item" :value="old('nav_menu_item', $category->nav_menu_item)" id="{{ $category->nav_menu_item }}" checked="{{ $category->nav_menu_item }}" />
                <x-form.submit>Update</x-form.submit>
                <x-form.cancel>Cancel</x-form.cancel>
            </form>

        </x-setting>
    </section>
</x-layout>
