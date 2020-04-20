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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Newbies</a>
              <a class="dropdown-item" href="#">Getting warmer</a>
              <a class="dropdown-item" href="#">Hottest</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Animals</a>
              <a class="dropdown-item" href="#">Memes</a>
              <a class="dropdown-item" href="#">Anime</a>
              <a class="dropdown-item" href="#">Funny</a>
              <a class="dropdown-item" href="#"></a>
            </div>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li>
            <a class="btn btn-success" href="/posts/create">Create a Post !</a>
          </li>
      </ul>
    </div>
  </nav>