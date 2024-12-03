<x-layout>
    <x-setting heading="Manage Posts">
        <table class="border-collapse w-full">

            <tbody>
                @foreach ($posts as $post )
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Title</span>
                        <a href="/posts/{{$post->title}}">

                            {{$post->title}}
                        </a>
                    </td>

                      <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Status</span>
                        <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">Published</span>
                      </td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                        <a href="/admin/posts/{{$post->id}}/edit" class="text-blue-400 hover:text-blue-600 underline">Edit</a>
                    </td>{{--{{route('posts.edit',$post->id)}}--}}
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                        {{-- <a href="/admin/posts/{{$post->id}}/delete" class="text-blue-400 hover:text-blue-600 underline pl-6">Delete</a> --}}
                        <form action="/admin/posts/{{$post->id}}/delete" method="post">
                            @csrf{{--{{route('posts.destroy',$post->id)}}--}}
                            @method('DELETE')
                            <button class="text-gray-400 hover:text-blue-600 pl-6">Delete</button>

                        </form>
                    </td>
                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>
    </x-setting>
</x-layout>
