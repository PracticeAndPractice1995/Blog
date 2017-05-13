<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
</head>
<body>
<ul>
    @foreach($books as $book)
        <a href="books/{{$book->id}}"><li>{{$book->name}}</li></a>
    @endforeach
</ul>
</body>
</html>
