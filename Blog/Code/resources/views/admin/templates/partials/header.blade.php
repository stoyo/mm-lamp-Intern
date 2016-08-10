<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route("admin.index.index") }}">Stoyan's website Panel</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">

        <li><a href="{{ route('auth.signout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
    </ul>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{ route("admin.index.index") }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{ route("admin.about.index") }}"><i class="fa fa-table fa-fw"></i> About</a>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Blog<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse in" aria-expanded="true">
                        <li>
                            <a href="{{ route("admin.blog.new") }}">Add a post</a>
                        </li>
                        <li>
                            <a href="{{ route("admin.blog.index") }}">All posts</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-picture-o fa-fw"></i> Gallery<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse in" aria-expanded="true">
                        <li>
                            <a href="{{ route('admin.gallery.new') }}">Add a picture</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.gallery.index') }}">All pictures</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>