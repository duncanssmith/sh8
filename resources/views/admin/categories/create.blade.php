<x-layout>
    <section class="px-6 py-8">
        <x-setting heading="Create page">
            <form method="POST" action="/admin/category">
                @csrf
                <x-form.input name="name" />
                <x-form.input name="slug" />
                <x-form.checkbox name="{{ 'display' }}" id="" checked="" />
                <x-form.checkbox name="{{ 'nav_menu_item' }}" id="" checked=""/>
                <x-form.submit>Submit</x-form.submit>
                <x-form.cancel>Cancel</x-form.cancel>
            </form>
        </x-setting>
    </section>
</x-layout>
