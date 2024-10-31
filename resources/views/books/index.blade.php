{{-- this is users libray view page user can borrowed books use tailwind css --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Management</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Books</h1>

        <div class="grid grid-cols-3 gap-4">
            @foreach ($books as $book)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold mb-2">{{ $book->title }}</h2>
                    <p class="text-gray-600 mb-2">{{ $book->author }}</p>

                   
                    {{-- image --}}
                    <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}"
                        class="w-full h-40 object-cover mb-4 rounded-lg" />
                    {{-- borrow button --}}
                    <form action="" method="POST">
                        @csrf
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Borrow
                        </button>
                    </form>
                </div>
            @endforeach

        </div>

</body>

</html>
