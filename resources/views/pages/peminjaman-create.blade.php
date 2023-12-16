<x-app-layout>
    <div class="max-w-md rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
        <a href="#">
            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Mobil
            </h5>
        </a>
        <hr>
        <div class="py-3">
            <form class="mx-auto max-w-sm" method="post" action="{{ route('peminjaman.store') }}">
                @csrf

                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Costumers</label>
                    <select
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="cs" name="cs">
                        <option selected>Pilih Cs</option>
                        @foreach ($cs as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Tanggal
                        Mulai</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="mulai" name="mulai" type="date" placeholder="Merek Mobil" required>
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Tanggal
                        Selesai</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="selesai" name="selesai" type="date" placeholder="" required>
                </div>


                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Pilih
                        Mobil</label>
                    <select
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="mobil" name="mobil">
                        <option selected>Pilih Mobil Tersedia</option>
                        @foreach ($mobil as $item)
                            <option value="{{ $item->id }}">{{ $item->merek . ' - ' . $item->model }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                        for="email">Tarif/Hari</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="tarif" name="tarif" type="number" readonly required>
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Total
                        Biaya</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="total_biaya" name="total_biaya" type="number" readonly required>
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="email">Jumlah Hari</label>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        id="hari" name="hari" type="number" readonly required>
                </div>

                <button
                    class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto"
                    type="submit">Submit</button>
            </form>

        </div>
    </div>

    <script>
        const selectMobil = document.getElementById('mobil');
        const inputMulai = document.getElementById('mulai');
        const inputSelesai = document.getElementById('selesai');
        const inputTarif = document.getElementById('tarif');
        const inputTotalBiaya = document.getElementById('total_biaya');

        selectMobil.addEventListener('change', function() {
            const itemId = this.value;
            // Fetch data tarif mobil berdasarkan itemId
            fetch(`/pemesanan/mobil/${itemId}`)
                .then(response => response.json())
                .then(data => {

                    const tarifPerHari = data.tarif;
                    inputTarif.value = tarifPerHari;
                    console.log(tarifPerHari);
                    if (!inputMulai.value || !inputSelesai.value) {
                        alert('Silahkan pilih tanggal mulai dan selesai terlebih dahulu!');
                        return;
                    }

                    // if (!inputMulai.value <= !inputSelesai.value) {
                    //     alert('Pemilihan tanggal tidak sesuai!');
                    //     return;
                    // }

                    const dateMulai = new Date(inputMulai.value);
                    const dateSelesai = new Date(inputSelesai.value);

                    const diffInDays = Math.ceil((dateSelesai - dateMulai) / (1000 * 60 * 60 * 24));

                    if (diffInDays < 1) {
                        alert('Minimal sewa 1 hari');
                        return;
                    }

                    // Hitung total biaya
                    const totalBiaya = diffInDays * tarifPerHari;
                    console.log(totalBiaya);
                    inputTotalBiaya.value = totalBiaya;

                    document.getElementById('hari').value =  diffInDays
                })
                .catch(error => {
                    console.error(error);
                    alert('Error fetching tarif mobil!');
                });
        })
    </script>

</x-app-layout>
