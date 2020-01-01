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
     
  
  <body style="background-color:#F8F8FF	;">
  
  
    <nav style=" background: darkred !important" class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <a class="navbar-brand" href="#">Blood Bank</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item "> <a class="nav-link" href="{{url('index')}}">Home </a></li>
              <li class="nav-item"> <a class="nav-link" href="blood_bank.php">blood bank</a> </li>
              <li class="nav-item"><a class="nav-link" href="Donor.blade.php">Donors</a></li>
              <li class="nav-item"><a class="nav-link" href="contact-us.php">contuct us</a></li>
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
  </footer> -->
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
  
  $('.carousel').carousel({
    interval: 2000
  })
  
  </script>
  
  </body>
  
  
    </html>