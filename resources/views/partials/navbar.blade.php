
<nav class="navbar navbar-inverse navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ action('PostsController@index') }}">Reddit.Dev</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ action('PostsController@index') }}">Posts<span class="sr-only">(current)</span></a></li>
        @if(Auth::check())
          <li><a href="{{ action('UsersController@show') }}">{{ Auth::user()->name }}</a></li>
          <li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
          <li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
        @else
          <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
          <li><a href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>
        @endif
      </ul>

      <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search By<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Title</a></li>
            <li><a href="#">User</a></li>
            <li><a href="#">Content</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      <form class="navbar-form navbar-left" method="GET" action="{{ action('PostsController@search') }}">
        <div class="form-group">
          <input type="text" class="form-control" name="searchQuery" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
         
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>