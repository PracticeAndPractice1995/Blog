@extends('/layouts/master')
@section('content')
    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="/post/create" role="button">Publish a post</a></p>
    </div>

    <!-- Example row of columns -->
    <div class="row">

        @foreach($posts as $post)
        <div class="col-lg-4">

            <h2>{{$post->title}}</h2>
            {{$post->created_at}}
            <p>{{$post->body}} </p>
            <p><a class="btn btn-primary" href="/post/{{$post->id}}" role="button">View details &raquo;</a></p>
        </div>
        @endforeach

    </div>

@endsection

