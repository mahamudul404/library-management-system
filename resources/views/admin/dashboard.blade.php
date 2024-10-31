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
                    <li class="mb-2"><a href="{{ route('admin.books') }}"
                            class="hover:bg-gray-700 p-2 rounded">Books</a></li>
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

        {{-- Main Content --}}
        <main class="flex-1 p-8">
            <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

            {{-- Stats Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-500">Total Books</p>
                    <h2 class="text-2xl font-bold"> {{ $totalbooks }} </h2>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    {{-- Show total users in the auth table role user is count and show the total users --}}
                    <p class="text-gray-500">Total Members</p>
                    <h2 class="text-2xl font-bold"> {{ $totalUsers }}</h2>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-500">Total borowred Books</p>
                    <h2 class="text-2xl font-bold"> Example Laravel variable</h2>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-gray-500">Borrowed Books</p>
                    <h2 class="text-2xl font-bold"></h2> {{-- Example Laravel variable, using null coalescing operator for safety --}}
                </div>
            </div>

            {{-- Recent Transactions Table --}}
            <div class="mt-8 bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-4"> Borowed Books </h2>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Book Title</th>
                            <th class="py-2 px-4 border-b">Member Name</th>
                            <th class="py-2 px-4 border-b">Borrowed Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($recentTransactions ?? [] as $transaction)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $transaction->book->title ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">{{ $transaction->member->name ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">{{ $transaction->borrowed_date ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">{{ $transaction->due_date ?? 'N/A' }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </main>


    </div>

</body>

</html>
