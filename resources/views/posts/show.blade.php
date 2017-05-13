
@extends('/layouts/master')
@section('content')
    <h2 id="title2">{{$post->title}}</h2>
    <hr>
    <p>{{$post->body}} </p>

    <div class=" bootstrap snippet">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-comment">
                    <h3 class="text-success">Comments</h3>
                    <hr/>
                    <ul class="comments">
                        @foreach($post->comments as $comment)
                            <li class="clearfix">
                                <div class="post-comments">
                                    <p class="meta">{{$comment->created_at}}</p>
                                    <p>
                                        {{$comment->body}}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/post/{{$post->id}}/comments">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" placeholder="Your comment here" class="form-control">

                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
        </div>
    </div>
@endsection