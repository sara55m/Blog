<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 ">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Log In!</h1>
                <form method="POST" action="login" class="mt-15">
                    @csrf
                    <x-form.input name="email" type="email" />

                    <x-form.input name="password" type="password" />

                    <x-form.submit-button>LogIn</x-form.submit-button>

                    </form>
                    

                    </x-panel>
                {{-- @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error )

                    <li class="text-red-500 text-xs">{{$error}}</li>
                        
                    @endforeach
                </ul>
                    
                @endif --}}
        </main>
    </section>
</x-layout>