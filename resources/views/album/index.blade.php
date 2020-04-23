<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Albums</title>
</head>
<body>
    <h1>Albums</h1>
    @if(count($albums) >0)
        @foreach($albums as $album)
           <h3>{{$album->album_name}}</h3>
           @endforeach
   @else 
      <p>No albums found</p>
   @endif
</body>
</html>