<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADD Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.navv')
<div class="container">
  <h2>ADD NEW POST DATA</h2>
  <form action="{{ route('storePost') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="title" class="form-control" id="title" placeholder="Enter title" name="postTitle" value="{{ old('postTitle') }}"> 
      @error('postTitle')
       {{ $message }}
        @enderror
    </div>

    <div class="form-group">
      <label for="author">Author:</label>
      <input type="author" class="form-control" id="title" placeholder="Enter title" name="author" value="{{ old('author') }}"> 
      @error('author')
       {{ $message }}
        @enderror
    </div>
    <div class="form-group">
      <label for="Description">Description:</label>
      <textarea class="form-control" name="description" id="Description" cols="60" rows="3" >{{ old('description') }}</textarea>
      @error('description')
       {{ $message }}
        @enderror
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image"> 
      @error('image')
       {{ $message }}
        @enderror
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published"> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>