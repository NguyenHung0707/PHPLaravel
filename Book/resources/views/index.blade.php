<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    body{
        width: 80%;
        margin: 0 auto;
    }
</style>
<body>

    <div class="d-flex justify-content-between mb-4">
        <h3>Book Detail</h3>
        <a href="{{route('create')}}" class="btn btn-success btn-sm">New Create</a>
    </div>

    @if(session()->has('success'))
        <label for="" class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label for="" class="alert alert-danger w-100">{{session('error')}}</label>
    @endif
        <form action="{{route('timkiem')}}" method="GET" class="form-inline justify-content-between d-flex col-md-4 " role="form">
            <div class="form-group col-md-10">
                <input  name="key" class="form-control" placeholder="Search By Name...">
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </form>
    <br>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Book ID</th>
            <th>Author ID</th>
            <th>Title</th>
            <th>ISBN</th>
            <th>Pug Year</th>
            <th>Available</th>
        </tr>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{$book->bookid}}</td>
                <td>{{$book->authorid}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->ISBN}}</td>
                <td>{{$book->pub_year}}</td>
                <td>{{$book->available}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
