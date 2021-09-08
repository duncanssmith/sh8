<x-layout>
    <x-setting heading="Create page">
{{--        <h1 class="text-xl text-gray-700 font-bold py-6">Create page</h1>--}}
            <form method="POST" action="/admin/category">
                @csrf
                <x-form.input name="name" />
                <x-form.input name="slug" />
                <x-form.submit>Submit</x-form.submit>
                <x-form.cancel>Cancel</x-form.cancel>
            </form>
    </x-setting>
</x-layout>
