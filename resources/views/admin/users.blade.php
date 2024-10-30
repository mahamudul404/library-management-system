<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management Dashboard</title>
    @vite('resources/css/app.css') {{-- Assuming you're using Vite --}}
</head>

<body class="bg-gray-100 font-sans">

    <div class="min-h-screen flex">

        {{-- Sidebar --}}
        <aside class="bg-gray-800 text-white w-64 p-4 flex flex-col justify-between">
            <div>
                <h2 class="text-xl font-bold mb-4">Library Admin</h2>
                <ul>
                    <li class="mb-2"><a href="{{ route('admin.dashboard') }}"
                            class="hover:bg-gray-700 p-2 rounded">Dashboard</a></li>
                    <li class="mb-2"><a href="#" class="hover:bg-gray-700 p-2 rounded">Books</a></li>
                    <li class="mb-2"><a href=" {{ route('admin.users') }} "
                            class="hover:bg-gray-700 p-2 rounded">Members</a></li>
                </ul>
            </div>

            {{-- Logout option at the bottom --}}
            <div>
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="hover:bg-gray-700 p-2 rounded">Logout</a>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </aside>

        {{-- show users table --}}
        <main class="flex-1 p-8">
            <h1 class="text-3xl font-bold mb-6">Members</h1>

            <div class="mt-8 bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-4">Members</h2>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Email</th>
                            <th class="py-2 px-4 border-b">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users ?? [] as $user)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $user->name ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">{{ $user->email ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">{{ $user->role ?? 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>



    </div>

</body>

</html>
