@extends ('admin.templates.default')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All posts</h1>
        </div>
    </div>
    <div class="row">
        @include('admin.templates.partials.alert')
        <div class="col-lg-12">
            @foreach(array_chunk($posts->getCollection()->all(), 6) as $row)
            <div class="row" style="margin-bottom:20px;">
                @foreach($row as $post)
                <div class="col-lg-2">
                        <img class="img-responsive" src="./images/blog/{{ $post->picture }}" />
                        <h2>{{ str_limit($post->title, 25) }}</h2>
                        <a href="{{ route('user.blog.custom', ['id'=>$post->id]) }}" target="_blank" class="btn btn-default">Read more</a>
                        <a href="{{ route('admin.blog.edit', ['id'=>$post->id]) }}" class="btn btn-success">Edit</a>
                        <a onclick="if (!confirm('Are you sure you want to delete this post. Once deleted, it can\'t be restored.'))
                                            return false;" href="{{ route('admin.blog.delete', ['id'=>$post->id]) }}" class="btn btn-danger">Delete</a>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            {!! $posts->render() !!}
        </div>
    </div>
</div>
@stop