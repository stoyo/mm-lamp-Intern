@extends ('user.templates.default')
@section('content')
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">About
                    <strong>Stoyan's website</strong>
                </h2>
                <hr>
            </div>
            @if(isset($picture))
            <div class="col-md-6">
                <img class="img-responsive img-border-left" src="./images/gallery/{{ $picture->name }}" alt="gallery picture">
            </div>
            @endif
            <div class="col-md-6">
                {!! $about->text !!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
<!-- /.container -->
@stop