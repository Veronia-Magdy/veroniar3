<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADD CAR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>ADD NEW CAR DATA</h2>
  <form action="{{ route('storeCar') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="title" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="Description">Description:</label>
      <textarea class="form-control" name="Description" id="Description" cols="60" rows="3" ></textarea>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="Published"> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>