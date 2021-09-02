<x-layout>
    <h1 class="text-xl text-gray-700 font-bold py-6">Edit page</h1>
{{--    <x-setting :heading="Edit page:  . $category->name">--}}
        <form method="POST" action="/admin/categories/{{ $category->id }}">
            @csrf
            @method('PATCH')
            <x-form.input name="name" :value="old('title', $category->title)" required />
            <x-form.input name="slug" :value="old('slug', $category->slug)" required />
            <x-form.button>Update</x-form.button>
            <x-form.cancel>Cancel</x-form.cancel>
        </form>
{{--    </x-setting>--}}
</x-layout>
