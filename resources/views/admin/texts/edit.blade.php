<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Edit text">
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
                <x-form.submit>Update</x-form.submit>
                <x-form.cancel>Cancel</x-form.cancel>
            </form>
        </x-setting>
    </section>
</x-layout>
