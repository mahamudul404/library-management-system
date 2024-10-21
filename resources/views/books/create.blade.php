<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- add bootstrap link --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B0R/B3R5sqzW29tG9QveVxhZy7On+rVmdnQz80ain9jNU+rE+rVyiGA6PVCmYl" crossorigin="anonymous">
  <title>Create book page</title>
</head>
<body>
  <div class="  ">
    <h1 class="text-center">Create Book</h1>
    <div class="container">
      <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" class="form-control" id="author" name="author" required>
        </div>
        
        <div>
          <label for="isbn">ISBN</label>
          <input type="text" class="form-control" id="isbn" name="isbn" required>
        </div>
        
        <div class="form-group">
          <label for="year">Year</label>
          <input type="text" class="form-control" id="year" name="year" required>
        </div>

        <div class="form-group">
          <label for="cover_image">Image</label>
          <input type="file" class="form-control-file" id="cover_image" name="cover_image">
        </div>

        <div>
          <label for="available">Available</label>
          <input type="checkbox" class="form-control-file" id="available" name="available">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </div>

  </div>

</body>
</html>