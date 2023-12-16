<x-app-layout>
    <div class="w-full rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
        <div class="flex justify-between">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">COSTUMERS
            </h5>
            <a class="mb-2 me-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                href="{{ route('register') }}">Costumers Baru</a>

        </div>
        <hr>
        <div class="py-3">
            <div class="relative overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3" scope="col">
                                Costumers Name
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Alamat
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Telpon
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Sim
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                    scope="row">
                                    {{ $item->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->alamat }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->telpon }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->sim }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-app-layout>
