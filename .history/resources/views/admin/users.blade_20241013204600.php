<x-layout>
    <x-setting2 heading="Manage Categories">
        <table class="border-collapse w-full">

            <tbody>
                @foreach ($users as $user )
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Name</span>
                        <a href="/users/{{$user->name}}">

                            {{$user->name}}
                        </a>
                    </td>

                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Slug</span>
                        <a href="/categories/{{$user->email}}">

                            {{$user->email}}
                        </a>
                    </td>



                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>
    </x-setting2>
</x-layout>
