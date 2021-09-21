<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-8">
            <x-panel>
                <h1 class="text-xl text-gray-700 font-bold py-2">Register</h1>

                <form method="POST" action="/register">
                    @csrf
                    <x-form.input name="name" required />
                    <x-form.input name="username" required />
                    <x-form.input name="email" type="email" required />
                    <x-form.input name="password" type="password" autocomplete="new-password" required />
                    <x-form.button>Register</x-form.button>
                </form>

            </x-panel>
        </main>
    </section>
</x-layout>

