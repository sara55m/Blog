<x-layout>
    <x-setting heading="Profile">
        <table class="border-collapse w-full">

            <tbody>

                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">

                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Username</span>

                        <h3>{{$author->username}}</h3>

                    </td>
                </tr>
                    <tr>
                        <th>Email</th>

                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Email</span>
                        <h3>{{$author->email}}</h3>
                    </td>

                </tr>




            </tbody>
        </table>
    </x-setting>
</x-layout>
