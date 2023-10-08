<div class="container">
        <h1>Daftar Koleksi</h1>
        <table border="1">

        <!-- Reza M. Akbar 6706223125 4604 -->
                <tr>
                    <th>ID</th>
                    <th>Nama Koleksi</th>
                    <th>Jenis Koleksi</th>
                    <th>Jumlah Koleksi</th>
                    <th>Created At</th>
                </tr>


                @foreach ($collections as $collection)
                    <tr>
                        <td>{{ $collection->id }}</td>
                        <td>{{ $collection->namaKoleksi }}</td>
                        <td>
                            @if ($collection->jenisKoleksi === 1)
                                Buku
                            @elseif ($collection->jenisKoleksi === 2)
                                Majalah
                            @elseif ($collection->jenisKoleksi === 3)
                                Cakram Digital
                            @else
                                Unknown
                            @endif
                        </td>
                        <td>{{ $collection->jumlahKoleksi }}</td>
                        <td>{{ $collection->createdAt }}</td>
                        
                    </tr>
                @endforeach

        </table>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
        </div>
</div>