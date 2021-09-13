<x-layout>
    <x-setting heading="Create work">
{{--        <h1 class="text-xl text-gray-700 font-bold py-6">Create work</h1>--}}
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
</x-layout>
