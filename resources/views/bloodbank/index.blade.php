@extends('layouts.app')
@section('content')

<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 h-100 " src="" alt="First slide">
            
          </div>
          <div class="carousel-item">
            <img class="d-block  w-100 h-100 " src="" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 h-100" src="" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
<div class="card-deck mt-5">
        <div class="card w-100 h-100 !important">
          <img src="" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">BLOOD DONATION ACTIVITY
      </h5>
            <p class="card-text">Blood Bank donation system can collect blood from many donators in short from various sources and distribute that blood to needy people who require blood..</p>
          <br>
          </div>
        </div>
        <br><br><br>
      
        <div class="card w-100 h-100 !important">
          <img src="" class="card-img-top" alt="...">
          <div class="card-body">
        
      
            <h5 class="card-title">ABOUT US</h5>
            <p class="card-text">make the process of obtaining blood from a blood bank hassle-free and corruption-free and make the system of blood bank management effective..</p>
          </div>
        </div>
        <div class="card  w-100 h-100 !important">
          <img src="" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">CAMPS</h5>
            <p class="card-text">The Blood Bank is fortunate to work with different Associations like Banks, Colleges, Insurance Institutes, Corporates, NGOs. Religious organization for conducting Blood Donation Camps throughout the year</p>
          </div>
        </div>
    </div>   
@endsection