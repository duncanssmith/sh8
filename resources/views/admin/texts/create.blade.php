<x-layout>
    <x-setting heading="Create text">
{{--        <h1 class="text-xl text-gray-700 font-bold py-6">Create text</h1>--}}
        <form method="POST" action="/admin/text">
            @csrf
            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.textarea name="body" class="ckeditor" />
            <x-form.input name="author" />
            <x-form.input name="year" />
            <x-form.textarea name="description" class="ckeditor" />
            <x-form.input name="publication" />
            <x-form.input name="publication_date" />
            <x-form.submit>Submit</x-form.submit>
{{--            <x-form.cancel>Cancel</x-form.cancel>--}}

        </form>
    </x-setting>
</x-layout>
