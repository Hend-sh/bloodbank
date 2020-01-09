@extends('layouts.main')

@section('content')


<div class="border mt-5 ml-5 mr-5 mb-5  " style="background-color:lightgrey" >
<nav  style="align-items:center; display:flex; justify-content:center; padding:4%;" class=" form-control navbar-brand bg-danger"><b><h1>Donate</h1></b></nav>
<form class="mr-5" action="/donors" method="post"  >
@csrf
<div class="row mt-5">
    <div class="col-md-4" style="text-align:right;">
        <label ><b>Name</b></label></div>

    <div class="col-md-6">
        <input class="form-control " type="text" name="name"></div>
</div>
<div class="row mt-4">    
    <div class="col-md-4" style="text-align:right;">
    <label ><b>Age</b></label></div>
    <div class="col-md-6">
<input class="form-control" type="number"  name="age"></div>
</div>
<div class="row mt-4" >
    <div class="col-md-4" style="text-align:right;">
<label ><b>Blood Type</b></label></div>

<div class="col-6 ">
<select  name="bloodtype" class="form-control">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select></div>
</div>

<div class="row mt-4">
    <div class="col-md-4" style="text-align:right;">
        <label ><b>City</b></label></div>
     <div class="col-md-6">   
<input class="form-control" type="text"  name="city"></div>
</div>
<div class="row mt-4" >
    <div class="col-md-4" style="text-align:right;">
        <label ><b>Phone Number</b></label></div>
    <div class="col-md-6">
        <input class="form-control" type="number"  name="phone_number"></div>
        </div>
 <div class="row mt-4">
     <div class="col-md-4" style="text-align:right;">       
<label ><b>E-mail Address</b></label></div>
     <div class="col-md-6">
    <input class="form-control" type="text"  name="email"></div></div>
<br>
<div class="col-md-12" style="align-items:center; display:flex; justify-content:center;">
<button onclick="myfun()" class="btn btn-danger form-control" style="width:150px !important;" type="submit">submit</button>
<script>
function myfun(){
    alert("thanks, your donate has been added");
}
</script>
</div>
</form>
</div>
@endsection