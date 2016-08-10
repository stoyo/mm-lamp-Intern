@extends ('admin.templates.default')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">About</h1>
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
                            <form role="form" method="post" enctype="multipart/form-data" action='{{ route('admin.about.index') }}'>
                                <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                                    <label class="control-label" for='text'>Post description</label>
                                    <textarea class="form-control" required name="text" rows="3">{{ Request::old('text') ?: $about->text }}</textarea>
                                    @if ($errors->has('text'))
                                    <span class='help-block'>{{ $errors->first('text') }}</span>
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