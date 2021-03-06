<html>
    <head>
        <title>National Biotechnology Authority</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    
    <bodyre>
    <nav class="navbar navbar-expand-lg navbar-light bg-blue">
  <a class="navbar-brand" href="#">National Biotechnology Authority</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route ('home.index') }}">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route ('home.index') }}">Notices</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Request
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route ('home.payment') }}">Payment Request</a>
          <a class="dropdown-item" href="{{route ('home.pettcash') }}">Petty-Cash Request</a>
          <a class="dropdown-item" href="{{route ('home.pettcash') }}">Staff Request</a>
          <a class="dropdown-item" href="{{route ('home.fuel') }}">Fuel Request</a>
          <a class="dropdown-item" href="{{route ('home.pettcash') }}">Procurement  Request</a>
          <a class="dropdown-item" href="{{route ('home.transport') }}">Transpot Request</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Staff Request</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Dashboard</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    </body>
    <div>
        @yield('content')
    </div>


</html>