@extends ('admin.templates.default')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit post</h1>
        </div>
    </div>
    <div class="row">
        @include('admin.templates.partials.alert')
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post" enctype="multipart/form-data" action='{{ route('admin.blog.edit', ['id'=>$post->id]) }}'>
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label class="control-label" for='title'>Post title</label>
                                    <input class="form-control" required name='title' type='text' value='{{ Request::old('title') ?: $post->title }}'>
                                    @if ($errors->has('title'))
                                    <span class='help-block'>{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label class="control-label" for='description'>Post description</label>
                                    <textarea class="form-control" required name="description" rows="3">{{ Request::old('description') ?: $post->description }}</textarea>
                                    @if ($errors->has('description'))
                                    <span class='help-block'>{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-default">Edit</button>
                                <input type='hidden' name='_token' value='{{ Session::token() }}'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop