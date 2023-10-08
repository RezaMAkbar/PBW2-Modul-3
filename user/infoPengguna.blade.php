<!-- Reza M. Akbar 6706223125 4604 -->

<div class="container">
    <h1>Informasi Pengguna</h1>
    <p><strong>Name:</strong> {{ $user->fullname }}</p>
    <p><strong>User Name:</strong> {{ $user->username }}</p>
    <p><strong>Gender:</strong>
        @if ($user->gender === 0)
            Male
        @elseif ($user->gender === 1)
            Female
        @else
            Unknown
        @endif
    </p>
    <p><strong>Birth Date:</strong> {{ $user->birthdate }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Address:</strong> {{ $user->address }}</p>
    <p><strong>Created At:</strong> {{ $user->created_at }}</p>
    <p><strong>Phone Number:</strong> {{ $user->phoneNumber }}</p>
    <p><strong>Religion:</strong> {{ $user->religion }}</p>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
    </div>
</div>