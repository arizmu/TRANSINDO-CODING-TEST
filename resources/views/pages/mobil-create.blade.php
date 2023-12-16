<x-app-layout>
    <div class="max-w-md rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
        <a href="#">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Mobil
            </h5>
        </a>
        <hr>
        <div class="py-3">
            <form class="mx-auto max-w-sm" method="post" action="{{route('mobil.store')}}">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Merek Mobil</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="merek" name="merek" type="text" placeholder="Merek Mobil" required>
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Model</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="model" name="model" type="text" placeholder="" required>
                </div>


                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Nomor Plat</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="plat" name="plat" type="text" placeholder="" required>
                </div>


                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Tarif/Hari</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="tarif" name="tarif" type="number" placeholder="" required>
                </div>


                <button
                    class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                    type="submit">Submit</button>
            </form>

        </div>
    </div>

</x-app-layout>
