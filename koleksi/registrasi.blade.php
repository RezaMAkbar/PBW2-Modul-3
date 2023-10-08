<img src="https://media.tenor.com/-WFVGDXbsicAAAAC/ultrakill-minos-prime.gif" alt="DIE!" width="100" max-height="100">
<x-guest-layout>
    <div class="card-header">{{ __('Tambah Data Koleksi') }}</div>
    <form method="POST" action="{{ route('koleksi.daftarKoleksi') }}">
        @csrf

        <!--Reza M. Akbar 6706223125 4604 -->

        <!-- Nama Koleksi -->
        <div>
            <x-input-label for="namaKoleksi" :value="__('Nama Koleksi')" />
            <x-text-input id="namaKoleksi" class="block mt-1 w-full" type="text" name="namaKoleksi" :value="old('namaKoleksi')" required autofocus autocomplete="namaKoleksi" />
            <x-input-error :messages="$errors->get('namaKoleksi')" class="mt-2" />
        </div>

        <!-- Jenis Koleksi -->
        <div>
            <x-input-label for="jenisKoleksi" :value="__('Jenis Koleksi')" />
            <!-- <x-text-input id="jenisKoleksi" class="block mt-1 w-full" type="tinyInteger" name="jenisKoleksi" :value="old('jenisKoleksi')" required autofocus autocomplete="jenisKoleksi" /> -->
            <select id="jenisKoleksi" type="tinyInteger" name="jenisKoleksi" :value="old('jenisKoleksi')" required autofocus autocomplete="jenisKoleksi" class="w-full mt-2 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                <option disabled selected>Pilih Jenis Koleksi</option>
                <option value="1" {{ old('jenisKoleksi') == '1' ? 'selected' : '' }}>Buku</option>
                <option value="2" {{ old('jenisKoleksi') == '2' ? 'selected' : '' }}>Majalah</option>
                <option value="3" {{ old('jenisKoleksi') == '3' ? 'selected' : '' }}>Cakram Digital</option>
            </select>
            <x-input-error :messages="$errors->get('jenisKoleksi')" class="mt-2" />
        </div>

        <!-- Jumlah Koleksi -->
        <div>
            <x-input-label for="jumlahKoleksi" :value="__('jumlahKoleksi')" />
            <x-text-input id="jumlahKoleksi" class="block mt-1 w-full" type="number" name="jumlahKoleksi" :value="old('jumlahKoleksi')" required autofocus autocomplete="jumlahKoleksi" />
            <x-input-error :messages="$errors->get('jumlahKoleksi')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Tambah Koleksi') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
