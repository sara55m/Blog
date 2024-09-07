@props(['heading'])
<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b ">{{$heading}}</h1>
    <div class="flex">
    <aside class="w-48 flex-shrink-0">

        <ul>
            <?php
            $author=auth()->user();
            ?>

            <li><a href="/user/{{$author->id}}/edit" class="text-blue-400 hover:text-blue-600 underline">Edit</a></li>
            <li><form action="/user/{{$author->id}}/delete" method="post">
                @csrf
                @method('DELETE')
                <button class="text-gray-400 hover:text-blue-600">Delete</button>

            </form></li>


        </ul>

    </aside>
    <main class="flex-1">
    <x-panel>
        {{$slot}}
        </x-panel>
    </main>
    </div>

        </section>
