<html>
    <head>
      <style>
      #carouselExampleControls{ height:500; width:1113 !important} 
      </style>
      <title>Blood Bank</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
   
      <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
     
  
  <body style="background-color:#F8F8FF;">
  
  
    <nav style=" background: darkred !important" class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <a class="navbar-brand" href="#">Blood Bank</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item "> <a class="nav-link" href="{{url('/')}}">Home </a></li>
              <li class="nav-item"> <a class="nav-link" href="blood_bank.php">blood bank</a> </li>
              <li class="nav-item"><a class="nav-link" href="{{url('/donor/show')}}">Donors</a></li>
              <li class="nav-item"><a class="nav-link" href="{{url('/patient')}}">Patient</a></li>              
              <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">contact us</a></li>
              <li class="nav-item active"> <a class="nav-link" href="{{url('login')}}">log in</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
      </div>
  
    </nav>
    
    
  <div class="container">
    @yield('content')
  </div>
  <!-- <footer class="page-footer font-small blue pt-4">
    <div style="color:white" class="footer-copyright text-center py-3 bg-dark ">© 2019 Copyright:
      <a href="#"> Link for Tem</a>
    </div>
</body>
</html>
