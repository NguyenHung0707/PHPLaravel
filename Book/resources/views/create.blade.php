<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="d-flex justify-content-between mb-4">
        <h3>Create Book</h3>
        <a href="{{ route('index') }}" class="btn btn-success btn-sm">List Book</a>
    </div>

    @if(session()->has('success'))
        <label for="" class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label for="" class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Author ID</label>
            <input type="text" name="authorid" class="form-control" placeholder="author id">
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" placeholder="title">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" name="ISBN" class="form-control" placeholder="ISBN">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pug Year</label>
                            <input type="text" name="pub_year" class="form-control" placeholder="pub year">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Available</label>
            <input type="text" name="available" class="form-control" placeholder="available">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
