<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 ">

            <x-panel>
                <h1 class="text-center font-bold text-xl">Edit</h1>

                <form method="POST" action="/user/{{$author->id}}/update" class="mt-15">
                    @csrf
                    @method('PATCH')
                    <div class="flex mt-6">
                        <div class="flex-1>">
                        <x-form.input name="image" type="file" :value="old('image',$author->image)"/>
                        </div>
                        <img src="/storage/{{$author->image}}" alt="" class="rounded-xl ml-6" width="100">
                    </div>


                    <x-form.input name="username" type="text" :value="old('username',$author->username)" />
                    <x-form.input name="email" type="email" :value="old('email',$author->email)" />
                    <x-form.input name="password" type="password" autocomplete="new-password" />

                    <x-form.submit-button>Edit</x-form.submit-button>

                    </form>
                    </x-panel>

                    </main>

                    </section>

                    </x-layout>
