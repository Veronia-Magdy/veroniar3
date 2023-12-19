<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Posts</title>
</head>
<body>
 <h1>postTitle:{{$Post->postTitle}}</h2> 
 <h2>Description:{{$Post->description}}</h2>
 <h2>Author:{{$Post->author}}</h2>
 <h2>Updated at:{{$Post->updated_at}}</h2>
 <h2>Created at:{{$Post->created_at}}</h4>
 <p>Published:{{ $Post->published? "Published" : "Not Published" }}</p>
</body>
</html>