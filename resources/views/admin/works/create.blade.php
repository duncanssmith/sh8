<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Create work">
            <form method="POST" action="/admin/work" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />
                <x-form.file-upload name="thumbnail" />
                <x-form.input name="slug" />
                <x-form.input name="media" />
                <x-form.input name="dimensions" />
                <x-form.input name="work_date" />
                <x-form.submit>Submit</x-form.submit>
                <x-form.cancel>Cancel</x-form.cancel>
            </form>
        </x-setting>
    </section>
</x-layout>
