<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- add bootstrap cdn and link --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>

    <div class="container">

        <table class="table table-bordered">

            <tr>

                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Image</th>
                <th>ISBN</th>
                <th>Available</th>
                <th>Action</th>

            </tr>

            @foreach ($books as $book)
                <tr>

                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td><img src="{{ asset('storage/' . $book->cover_image) }}" width="100px"></td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->available }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('books.destroy', $book->id) }}" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
            @endforeach

        </table>

    </div>

</body>

</html>
