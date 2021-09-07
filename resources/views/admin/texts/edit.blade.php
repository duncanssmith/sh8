<x-layout>
    <x-setting :heading="'Edit text: ' . $text->title">
        <form method="POST" action="/admin/text/{{ $text->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $text->title)" required />
            <x-form.input name="slug" :value="old('slug', $text->slug)" required />
            <x-form.textarea name="body" required>{{ old('body', $text->body) }}</x-form.textarea>
            <x-form.input name="author" :value="old('author', $text->author)" required />
            <x-form.input name="year" :value="old('year', $text->year)" required />
            <x-form.textarea name="description" required>{{ old('description', $text->description) }}</x-form.textarea>
            <x-form.input name="publication" :value="old('publication', $text->publication)" required />
            <x-form.input name="publication_date" :value="old('publication_date', $text->publication_date)" required />

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
