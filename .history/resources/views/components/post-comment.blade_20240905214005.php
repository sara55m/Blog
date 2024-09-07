@props(['comment'])
<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="/storage/{{$comment->author->image}}" alt="Author Image" style="border-radius:50%;" height="90px" width="90px">
        </div>
        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{$comment->author->username}}</h3>
                <p class="text-xs">posted <time> {{$comment->created_at->format('F j, Y , g:i a')}}</time></p>
            </header>
            <p>{{$comment->body}}</p>
        </div>
    </article>

    </x-panel>
