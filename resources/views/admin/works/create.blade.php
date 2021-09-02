<x-layout>

{{--        <x-panel class="max-w-sm mx-auto">--}}

        <h1 class="text-xl text-gray-700 font-bold py-6">Create work</h1>
            <form method="POST" action="/admin/works" enctype="multipart/form-data">
                @csrf

                <x-form.file-upload name="thumbnail" />
                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="media" />
                <x-form.input name="dimensions" />
                <x-form.input name="date" />

                <x-form.button>Submit</x-form.button>

                <x-form.cancel :route="$route">Cancel</x-form.cancel>

            </form>
{{--        </x-panel>--}}
</x-layout>
