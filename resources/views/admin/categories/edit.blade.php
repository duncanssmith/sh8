<x-layout>
    <x-setting :heading="'Edit category: ' . $category->name">
        <form method="POST" action="/admin/categories/{{ $category->id }}">
            @csrf
            @method('PATCH')

            <x-form.input name="name" :value="old('title', $category->title)" required />
            <x-form.input name="slug" :value="old('slug', $category->slug)" required />

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
