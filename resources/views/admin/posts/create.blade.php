<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Create post">
            <form method="POST" action="/admin/post" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />
                <x-form.file-upload name="thumbnail" />
                <x-form.input name="slug" />
                <x-form.input name="excerpt" />
                <x-form.textarea name="body" />
                <div class="border border-solid bg-gray-200 rounded-4lg px-8 py-8">
                    <x-form.label name="Category"/>

                        <select class="border border-gray-400 p-2 w-full text-gray-800"
                            name="category_id"
                            id="category_id"
                            required
                        >

                        @php
                            $categories = App\Models\Category::all();
                        @endphp
                        @foreach ( $categories as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('$category_id') == $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                        </select>
                    <x-form.error name="category" />
                </div>
                <x-form.submit>Submit</x-form.submit>
                <x-form.cancel>Cancel</x-form.cancel>
            </form>
        </x-setting>
    </section>
</x-layout>
