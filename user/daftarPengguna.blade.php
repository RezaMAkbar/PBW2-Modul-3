    <div class="container">
        <h1>Daftar Pengguna</h1>
        <table border="1">

        <!-- Reza M. Akbar 6706223125 4604 -->
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Created At</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Birth Date</th>
                    <th>Religion</th>
                    <th>Gender</th>
                </tr>


                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->phoneNumber }}</td>
                        <td>{{ $user->birthdate }}</td>
                        <td>{{ $user->religion }}</td>
                        <td>
                            @if ($user->gender === 0)
                                Male
                            @elseif ($user->gender === 1)
                                Female
                            @else
                                Unknown
                            @endif
                        </td>
                    </tr>
                @endforeach

        </table>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
        </div>
</div>
