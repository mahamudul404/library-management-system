<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- add bootstrap link --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-B0R/B3R5sqzW29tG9QveVxhZy7On+rVmdnQz80ain9jNU+rE+rVyiGA6PVCmYl" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Admin Dashboard</h1>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Books</h5>
                        {{-- <p class="card-text">{{ $totalBooks }}</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Borrowed Books</h5>
                        {{-- <p class="card-text">{{ $borrowedBooks }}</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Overdue Books</h5>
                        {{-- <p class="card-text">{{ $overdueBooks }}</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        {{-- <p class="card-text">{{ $totalUsers }}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
