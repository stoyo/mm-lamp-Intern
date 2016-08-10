@extends ('admin.templates.default')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add a picture</h1>
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
                            <form role="form" method="post" enctype="multipart/form-data" action='{{ route('admin.gallery.new') }}'>
                                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                    <label class="control-label" for='picture'>Post picture</label>
                                    <input type="file" required name='picture'>
                                    @if ($errors->has('picture'))
                                    <span class='help-block'>{{ $errors->first('picture') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-default">Add</button>
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