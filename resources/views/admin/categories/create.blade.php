<x-layout>
{{--        <x-panel class="max-w-sm mx-auto">--}}
        <h1 class="text-xl text-gray-700 font-bold py-6">Create page</h1>
            <form method="POST" action="/admin/categories">
                @csrf
                <x-form.input name="name" />
                <x-form.input name="slug" />
                <x-form.submit>Submit</x-form.submit>
                <x-form.cancel :route="$route">Cancel</x-form.cancel>
            </form>
{{--        </x-panel>--}}
</x-layout>
