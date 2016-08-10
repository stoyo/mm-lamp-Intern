@extends ('user.templates.default')
@section('content')
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>form</strong>
                </h2>
                <hr id="alertAfter">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                <form role="form" method="post" action='{{ route('user.contacts.index') }}' id="contacts">
                    <div class="row">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-lg-4">
                            <label class='control-label' for='name'>Name</label>
                            <input type="text" required name='name' class="form-control" value='{{ Request::old('name') ? : '' }}'>
                            @if ($errors->has('name'))
                            <span class='help-block'>{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-lg-4">
                            <label class='control-label' for='email'>Email Address</label>
                            <input type="email" required class="form-control" name='email' value='{{ Request::old('email') ? : '' }}'>
                            @if ($errors->has('email'))
                            <span class='help-block'>{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-lg-4">
                            <label class='control-label' for='phone'>Phone Number</label>
                            <input type="text" required class="form-control" name='phone' value='{{ Request::old('phone') ? : '' }}'>
                            @if ($errors->has('phone'))
                            <span class='help-block'>{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }} col-lg-12">
                            <label class='control-label' for='message'>Message</label>
                            <textarea class="form-control" required name='message' rows="6">{{ Request::old('message') ? : '' }}</textarea>
                            @if ($errors->has('message'))
                            <span class='help-block'>{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                    <input type='hidden' name='_token' value='{{ Session::token() }}'>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->
@stop