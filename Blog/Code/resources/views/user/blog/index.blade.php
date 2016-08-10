@extends ('user.templates.default')
@section('content')
<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Company
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                @foreach($posts as $post)
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="./images/blog/{{ $post->picture }}" alt="">
                    <h2>{{ $post->title }}
                        <br>
                        <small>{{ $post->created_at->diffForHumans() }}</small>
                    </h2>
                    <a href="{{ route('user.blog.custom', ['id'=>$post->id]) }}" class="btn btn-default btn-lg">Read Post</a>
                    <hr>
                </div>
                @endforeach
                <div class="col-lg-12 text-center">
                    {!! $posts->render() !!}
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
@stop