<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Create text">
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
                <x-form.cancel>Cancel</x-form.cancel>
            </form>
        </x-setting>
    </section>
</x-layout>
