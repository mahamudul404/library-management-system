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
            <div class="flex justify-between items-center ml-8 mt-4">
                <h1 class="text-3xl font-bold mb-6">Books</h1>
                {{-- add new books a link add  --}}
                <a href="  {{ route('books.add') }} " class="px-2 py-1 bg-blue-500 text-white rounded-md">Add
                    New
                    Book</a>
            </div>
            <div class="mt-8 bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-4">Books</h2>
                <table class="w-full">
                    <thead class="text-left">
                        <tr class="text-left">
                            <th class="py-2 px-4 border-b">Title</th>
                            <th class="py-2 px-4 border-b">Author</th>
                            <th class="py-2 px-4 border-b">Year</th>
                            <th class="py-2 px-4 border-b">Image</th>
                            <th class="py-2 px-4 border-b">ISBN</th>
                            <th class="py-2 px-4 border-b">Available</th>
                            <th class="py-2 px-4 border-b">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @foreach ($books as $book)
                            <tr class="text-left">
                                <td class="py-2 px-4 border-b">{{ $book->title ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">{{ $book->author ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">{{ $book->year ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b"><img src="{{ asset('storage/' . $book->cover_image) }}"
                                        width="100px"></td>
                                <td class="py-2 px-4 border-b">{{ $book->isbn ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">{{ $book->available ?? 'N/A' }}</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="" class="px-2 py-1 bg-blue-500 text-white rounded-md">Edit</a>
                                    <a href="{{ route('books.destroy', $book->id) }}"
                                        class="px-2 py-1 bg-red-500 text-white rounded-md">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>




    </div>

</body>

</html>
