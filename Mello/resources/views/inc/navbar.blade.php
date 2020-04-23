<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{config('app.name', 'Mello')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExample04">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts">The Stream</a>
      </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if(Auth::guest())
        <div class="container"> </div>
          <li class="nav-item">
            <div class="container"> <a href="{{ route('login')}}" class="btn btn-outline-primary">Login</a></div>
          </li>
          <li class="nav-item"><div class="container"><a href="{{ route('register')}}" class="btn btn-outline-primary">Register</a></div></li>
        @else 
          
          <li class="nav-item">
            <div class="container">
              <a class="btn btn-outline-success" href="/posts/create">Create a Post !</a>
            </div>
          </li>
          <li>
            <form action="{{ route('logout')}}" method="post">
              @csrf
              <button type="submit" class="btn btn-outline-danger">Logout</button> 
            </form>
          </li>
          <li>
            <div class="container"?>
              <a href="{{route('profile')}}" class="btn btn-outline-primary">
                {{ Auth::user()->name }}
              </a>
            </div>
          </li>
          
        @endif
      </ul>
    </div>
  </nav>