<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Borrowed Books</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-gray-200">

    {{-- Navbar --}}
    <nav class="bg-gray-800 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-indigo-500">Library Management</a>
            <div class="space-x-4">
                <a href="/" class="text-gray-300 hover:text-indigo-400">Home</a>

            </div>
        </div>
    </nav>

    {{-- this section show user borrowed books and due date and user return option --}}

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-extrabold mb-6 text-center text-gray-100">Borrowed Books</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($borrowings as $book)
                <div
                    class="bg-gray-800 p-5 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <h2 class="text-xl font-semibold mb-2 text-white">{{ $book->title }}</h2>
                    <p class="text-sm text-gray-400 mb-4">by {{ $book->author }}</p>

                    {{-- Show book cover image --}}
                    <img src="{{ asset('images/' . $book->book->cover_image) }}" alt="{{ $book->title }}"
                        class="rounded-lg mb-4 w-full h-48 object-cover">

                    <a href=" {{ route('books.show', $book->id) }} "
                        class="text-lg font-semibold text-indigo-400 hover:underline mb-2">Read More</a>


                    <form action="   " method="POST" class="text-center">
                        @csrf
                        <button type="submit"
                            class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded transition-colors duration-200 ease-in-out mt-4">
                            Return
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>
