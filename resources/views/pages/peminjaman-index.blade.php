<x-app-layout>
    <div class="w-full rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
        <div class="flex justify-between">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Mobil
            </h5>
            {{-- <div>
                <form class="flex gap-4" action="{{ route('mobil') }}" method="get">
                    <div class="">
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="search" name="search" type="text" placeholder="Merek Mobil">
                    </div>
                    <button
                        class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                        type="submit">cari data</button>
                </form>
            </div> --}}
            <a class="mb-2 me-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                href="{{ route('peminjaman.create') }}">Peminjaman Mobil</a>

        </div>
        <hr>
        <div class="py-3">
            <div class="relative overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3" scope="col">
                                Merek Mobil
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Costumers
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Tanggal
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Jumlah Hari
                            </th>
                            <th class="px-6 py-3" scope="col">
                                Biaya
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($data as $item)
                            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                    scope="row">
                                    {{ $item->merek }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->model }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->plat }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->tarif }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($item->status == false)
                                        <span
                                            class="me-2 rounded bg-blue-500 px-2.5 py-0.5 text-sm font-medium text-white dark:bg-blue-900 dark:text-blue-300">Tersedia</span>
                                    @else
                                        <span
                                            class="me-2 rounded bg-orange-500 px-2.5 py-0.5 text-sm font-medium text-white dark:bg-blue-900 dark:text-blue-300">Disewa</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-app-layout>
