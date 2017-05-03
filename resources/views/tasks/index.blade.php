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
        <li>
            <a href="/tasks/{{$task->id}}">
                {{$task->body}}
            </a>
        </li>
    @endforeach
</ul>
</body>
</html>
