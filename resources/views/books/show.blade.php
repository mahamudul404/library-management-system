<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details - {{ $book->title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-gray-200">

    {{-- Navbar --}}
    <nav class="bg-gray-800 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-indigo-500">Library Management</a>
            <div class="space-x-4">
                <a href="/" class="text-gray-300 hover:text-indigo-400">Home</a>
                <a href="/borrowed-books" class="text-gray-300 hover:text-indigo-400">Borrowed Books</a>
            </div>
        </div>
    </nav>

    {{-- Book Details --}}
    <div class="container mx-auto p-6">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg flex flex-col md:flex-row">
            {{-- Book Cover Image --}}
            <div class="md:w-1/3 mb-6 md:mb-0">
                <img src="{{ asset('images/' . $book->cover_image) }}" alt="{{ $book->title }}"
                    class="rounded-lg w-full h-auto object-cover">
            </div>

            {{-- Book Information --}}
            <div class="md:w-2/3 md:ml-6 space-y-4">
                <h1 class="text-3xl font-bold text-indigo-400">{{ $book->title }}</h1>
                
                <div class="text-lg text-gray-300">
                    <strong>Author:</strong> {{ $book->author }}
                </div>
                
                <div class="text-lg text-gray-300">
                    <strong>ISBN:</strong> {{ $book->isbn }}
                </div>

                <div class="text-lg text-gray-300">
                    <strong>Publication Year:</strong> {{ $book->year }}
                </div>

                <div class="text-lg text-gray-300">
                    <strong>Availability:</strong> 
                    @if($book->available)
                        <span class="text-green-400">Available</span>
                    @else
                        <span class="text-red-400">Not Available</span>
                    @endif
                </div>

                {{-- Description Section --}}
                <div class="text-lg text-gray-300">
                    <strong>Description:</strong>
                    <p class="text-gray-400 mt-2">{{ $book->description }}</p>
                </div>

                {{-- Borrow Button --}}
                <form action="" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded transition-colors duration-200 ease-in-out">
                        Borrow This Book
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
