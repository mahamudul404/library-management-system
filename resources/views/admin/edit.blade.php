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
        {{-- edit books page id --}}
        <main class="flex-1 p-8 bg-white rounded-lg shadow-md mt-4 mr-4 ml-4 mb-4" id="edit-book-page">
            <!-- Add your content here -->
            <h1 class="text-2xl font-bold mb-4">Edit Book</h1>
            <form action=" {{ route('admin.books.update', $book->id) }} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                    <input type="text" id="title" name="title" value="{{ $book->title }}" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="author" class="block text-gray-700 font-bold mb-2">Author:</label>
                    <input type="text" id="author" name="author" value="{{ $book->author }}" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="isbn" class="block text-gray-700 font-bold mb-2">ISBN:</label>
                    <input type="text" id="isbn" name="isbn" value="{{ $book->isbn }}" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                {{-- year --}}
                <div class="mb-4ǀ">
                    <label for="year" class="block text-gray-700 font-bold mb-2">Year:</label>
                    <input type="text" id="year" name="year" value="{{ $book->year }}" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="available" class="block text-gray-700 font-bold mb-2">Available</label>
                    {{-- integer input --}}
                    <input type="number" id="available" name="available" value="{{ $book->available }}" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                {{-- image show current image and upload --}}
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
                    <img src="{{ asset('images/' . $book->cover_image) }}" alt="{{ $book->title }}"
                        class="w-20 h-20 object-cover" style="width: 100px">
                    <input type="file" id="cover_image" name="cover_image" class="mt-2">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Book
                </button>
            </form>
        </main>





    </div>

</body>

</html>
