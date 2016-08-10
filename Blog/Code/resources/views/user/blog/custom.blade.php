@extends ('user.templates.default')
@section('content')
<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>{{ $post->title }}</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="./images/blog/{{ $post->picture }}" alt="">
                    <h2>
                        <small>{{ $post->created_at->diffForHumans() }}</small>
                    </h2>
                    <p>{!! $post->description !!}</p>
                    <hr>
                </div>
            </div>
        </div>

    </div>
@stop