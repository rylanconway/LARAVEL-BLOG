@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Posts</div>
                    @foreach($posts as $post)

                        <div class="blog-post">
                            <h2 class="blog-post-title">

                                <a href="/posts/{{$post->id}}">

                                    {{$post->title}}

                                </a>

                                </h2>
                                <p class="blog-post-meta">


                                {{$post->created_at}}</p>


                                {{$post->body}}

                            @if(Auth::user()->role == 'postmanager')
                                <form action="/post/delete" method="get">
                                    <input type="hidden" id="id" name="id" value="{{ $post->id }}">
                                    <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                                </form>
                                @endif
                            <hr>
                        </div>

                    @endforeach

                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

