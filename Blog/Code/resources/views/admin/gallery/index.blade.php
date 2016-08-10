@extends ('admin.templates.default')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Gallery</h1>
        </div>
    </div>
    <div class="row">
        @include('admin.templates.partials.alert')
        <div class="col-lg-12">
            @foreach(array_chunk($pictures->getCollection()->all(), 6) as $row)
            <div class="row" style="margin-bottom:20px;">
                @foreach($row as $picture)
                <div class="col-lg-2">
                        <img class="img-responsive" style='margin-bottom:10px;' src="./images/gallery/{{ $picture->name }}" />
                        <a onclick="if (!confirm('Are you sure you want to delete this picture. Once deleted, it can\'t be restored.'))
                                            return false;" href="{{ route('admin.gallery.delete', ['id'=>$picture->id]) }}" class="btn btn-block btn-danger">Delete</a>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            {!! $pictures->render() !!}
        </div>
    </div>
</div>
@stop