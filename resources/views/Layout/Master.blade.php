<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Int~Gag</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Int ~ Gag</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route("INT-GAG")}}">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Premium</a>
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


      <form class="form-inline my-2 my-lg-0" action="{{route('login')}}" method="POST">
        @csrf
        <input class="form-control mr-sm-2" type="search" placeholder="Password" name="Password" value="{{old('Password')}}" aria-label="LoginPwd">
        <input class="form-control mr-sm-2" type="search" placeholder="Username" name="Username" value="{{old('Username')}}" aria-label="Username">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in</button>
      </form>

      <a href="{{route("register")}}" class="btn btn-outline-success my-2 my-sm-0"">Register</a>

    
      <form class="form-inline my-2 my-lg-0" action="{{route('logout')}}" method="POST">
        @csrf
        <a href="{{route("logout")}}" class="btn btn-outline-success my-2 my-sm-0"">logout</a>
      </form>

    </div>
  </nav>


    <main>
       @yield('content')
    </main>
       
    <footer>
        copyright
    </footer>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>