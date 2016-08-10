@extends ('user.templates.default')
@section('content')
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Gallery</strong>
                </h2>
                <hr>
            </div>

            @foreach(array_chunk($pictures->getCollection()->all(), 6) as $row)
            <div class='row col-lg-12'>
                @foreach($row as $picture)
                <div class="col-sm-4 text-center" style='margin-bottom:20px;'>
                    <a href='./images/gallery/{{ $picture->name }}' class='fancybox' data-fancybox-group="gallery" title="gallery picture">
                        <img class="img-responsive" src="./images/gallery/{{ $picture->name }}" alt="gallery picture">
                    </a>
                </div>
                @endforeach
            </div>
            @endforeach
            
            <div class='col-lg-12' style='margin-top:-15px;'>
                {!! $pictures->render() !!}
            </div>

        </div>
    </div>

</div>
@stop