<header>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ 'dashboard' }}">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('account') }}">@if(Auth::user())   Account  @endif</a></li>
        <li><a href="{{ route('logout') }}"> @if(Auth::user())   Logout   @endif</a></li>
        <li>
          <a  aria-haspopup="true" aria-expanded="false">@if(Auth::user()) {{Auth::user()->first_name}} @endif</a>
          
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>