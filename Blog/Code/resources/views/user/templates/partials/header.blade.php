<div class="brand">Stoyan's website</div>
<div class="address-bar">48 Hipodruma Palace | Sofia, Bulgaria, 1000 | 0883.600.750</div>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('user.index.index') }}">Stoyan's website</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('user.index.index') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('user.blog.index') }}">Blog</a>
                </li>
                <li>
                    <a href="{{ route('user.gallery.index') }}">Gallery</a>
                </li>
                <li>
                    <a href="{{ route('user.about.index') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('user.contacts.index') }}">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>