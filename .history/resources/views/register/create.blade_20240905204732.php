<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 ">

            <x-panel>
                <h1 class="text-center font-bold text-xl">Register</h1>

                <form method="POST" action="register" class="mt-15" enctype="multipart/form-data">
                    @csrf

                    <x-form.input name="image" type="file"/>
                    <x-form.input name="username" type="text" autocomplete="username" />
                    <x-form.input name="email" type="email" autocomplete="username" />
                    <x-form.input name="password" type="password" autocomplete="new-password" />

                    <x-form.submit-button>Submit</x-form.submit-button>

                    </form>
                    </x-panel>

                    </main>

                    </section>

                    </x-layout>
