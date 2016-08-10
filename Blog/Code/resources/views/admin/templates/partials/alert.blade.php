@if (Session::has('info'))
<div class="col-lg-12">
    <div class="alert alert-success fade in" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('info') }}
    </div>
</div>
@endif