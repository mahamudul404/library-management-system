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
                    <li class="mb-2"><a href="{{ route('admin.dashboard') }}" class="hover:bg-gray-700 p-2 rounded">Dashboard</a></li>
                    <li class="mb-2"><a href="#" class="hover:bg-gray-700 p-2 rounded">Books</a></li>
                    <li class="mb-2"><a href="{{ route('admin.users') }}" class="hover:bg-gray-700 p-2 rounded">Members</a></li>
                </ul>
            </div>

            {{-- Logout option at the bottom --}}
            <div>
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:bg-gray-700 p-2 rounded">Logout</a>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </aside>

        {{-- Add New Book Form --}}
        <main class="flex-1 p-8">
            <div class="container mx-auto max-w-lg bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-between">
                    <h1 class="text-2xl font-bold mb-6 text-gray-800">Add New Book</h1>
                    <a href=" {{ route(  'admin.books'   ) }} " class="mb-4 inline-block bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600 transition duration-300 ease-in-out">Return Books List</a>
                </div>
                <form action=" {{ route( 'books.store' ) }} " method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                        <input type="text" id="title" name="title" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700 font-semibold mb-2">Author</label>
                        <input type="text" id="author" name="author" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    
                    <div class="mb-4">
                        <label for="isbn" class="block text-gray-700 font-semibold mb-2">ISBN</label>
                        <input type="text" id="isbn" name="isbn" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    
                    <div class="mb-4">
                        <label for="year" class="block text-gray-700 font-semibold mb-2">Year</label>
                        <input type="text" id="year" name="year" required class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    
                    <div class="mb-4">
                        <label for="cover_image" class="block text-gray-700 font-semibold mb-2">Cover Image</label>
                        <input type="file" id="cover_image" name="cover_image" class="w-full text-gray-600">
                    </div>
                    
                    <div class="mb-4 flex items-center">
                        <input type="checkbox" id="available" name="available" class="text-indigo-600 focus:ring-indigo-500 h-4 w-4 rounded">
                        <label for="available" class="ml-2 text-gray-700 font-semibold">Available</label>
                    </div>
                    
                    <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Submit
                    </button>
                </form>
            </div>
        </main>
    </div>

</body>

</html>
