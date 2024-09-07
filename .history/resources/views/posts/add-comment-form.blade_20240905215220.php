@auth
<x-panel>
    <form method="post" action="/posts/{{$post->title}}/comments">
        @csrf
        <header class="flex items-center">
            <img src="http://i.pravatar.cc/100?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full">
            <h2 class="ml-3">Want to participate?</h2>
        </header>
        <div class="mt-8">
            <textarea name='body' cols="30" rows="5" class="w-full text-sm focus:outline-none focus:ring" placeholder="Write Your Comment Here" required></textarea>
            {{-- show an error message if the comment does not meet validation resrictions --}}
            @error('body')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex justify-end border-t border-gray-300 mt-6 pt-6">
            <x-form.submit-button>Post</x-form.submit-button>
        </div>

    </form>

</x-panel>
{{-- register and log in link for guests --}}
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline">Register</a> OR <a href="/login" class="hover:underline">Log In</a> To Leave A Comment
</p>

@endauth
