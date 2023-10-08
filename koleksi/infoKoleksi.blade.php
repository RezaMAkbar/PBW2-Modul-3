<!-- Reza M. Akbar 6706223125 4604 -->

<div class="container">
    <h1>Informasi Koleksi</h1>
    <p><strong>Nama Koleksi:</strong> {{ $collection->namaKoleksi }}</p>
    <p><strong>Jenis Koleksi:</strong>
        @if ($collection->jenisKoleksi === 1)
            Buku
        @elseif ($collection->jenisKoleksi === 2)
            Majalah
        @elseif ($collection->jenisKoleksi === 3)
            Cakram Digital
        @else
            Unknown
        @endif
    </p>
    <p><strong>Jumlah Koleksi:</strong> {{ $collection->jumlahKoleksi }}</p>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
        </div>
</div>