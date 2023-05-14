<!DOCTYPE html>
<html lang='id'>

<head>
    <meta charset="UTF-8">
    <title>Create Data Form - Project Data Movie </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
    </div class="row">
    </div class="col-lg-12 margin-tb">
    </div class="pull-left">
    <h2>Add Data</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ url('/movie') }}" enctype="multipart/form-data"> Back</a>
    </div>
</div>
</div>
@if (session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{  session('status') }}
</div>
@endif

<form action="{{ url("/movie") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Movie:</strong>
                <input type="text" name="name" value={{ 'name' }}
                class="form-control" placeholder="Movie Name">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Genres Movie:</strong>
                    <input type="genres" name="genres" class="form-control" placeholder="Genres Movie"
                    value="{{ 'genres' }}">
                    @error('genres')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rating Movie:</strong>
                    <input type="Number" name="rating" value="rating" class="form-control"
                    placeholder="Rating Movie"
                    @error('rating')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
     </form>
   </div>
 </body>
</html>