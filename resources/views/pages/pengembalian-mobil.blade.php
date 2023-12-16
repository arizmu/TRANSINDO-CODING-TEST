<x-app-layout>
    <div class="max-w-md rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
        <a href="#">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Pengembalian Mobil
            </h5>
        </a>
        <hr>
        <div class="py-3">
            @if (session()->has('error'))
            <div class="mb-4 rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <span class="font-medium">Danger alert!</span> {{ session('error') }}
            </div>
            @endif
            @if (session()->has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">Success alert!</span> {{ session('success') }}
              </div>
            @endif
            <form class="mx-auto max-w-sm" method="post" action="{{ route('pengembalian.proses') }}">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Masukkan
                        No. Plat Mobil</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="plat" name="plat" type="text" required>
                </div>

                <button
                    class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                    type="submit">Submit</button>
            </form>

        </div>
    </div>

</x-app-layout>
