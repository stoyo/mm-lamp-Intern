@extends ('user.templates.default')
@section('content')
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        @foreach($posts as $post)
                        <div class="item">
                            <img class="img-responsive img-full" src="./images/blog/{{ $post->picture }}" alt="{{ $post->title }}">
                        </div>
                        @endforeach
                    </div>

                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Welcome to</small>
                </h2>
                <h1 class="brand-name">Stoyan's website</h1>
                <hr class="tagline-divider">
                <h2>
                    <small>By
                        <strong>Spens</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div>


    @foreach($posts as $post)
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>{{ $post->title }}</strong>
                </h2>
                <hr>
                <a href='{{ route('user.blog.custom', ['id'=>$post->id]) }}'><img class="img-responsive img-border" src="./images/blog/{{ $post->picture }}" alt="{{ $post->title }}"></a>
                <hr class="visible-xs">
               
            </div>
        </div>
    </div>
    @endforeach


    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Beautiful boxes
                    <strong>to showcase your content</strong>
                </h2>
                <hr>
                <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
        </div>
    </div>

</div>
@stop