<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Car</title>
</head>
<body>
 <h1>Title:{{$Car->title}}</h2> 
 <h2>Description:{{$Car->description}}</h3>
 <h2>Updated at:{{$Car->updated_at}}</h2>
 <h2>Created at:{{$Car->created_at}}</h4>
 <p>Published:{{ $Car->published? "Published" : "Not Published" }}</p>
 <h2>Category:{{ $Car->category->cat_name }}</h3>
</body>
</html>