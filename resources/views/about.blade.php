<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->

</head>
<body>
    <ul>
        @foreach($tasks as $task)
            <li>{{$task->body}}</li>
        @endforeach
    </ul>
</body>
</html>
