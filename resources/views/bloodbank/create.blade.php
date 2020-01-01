@extends('layouts.app')

@section('content')

<div class="border mt-5  ">
<form action="/donors" method="post" styly="backgroundcolor:pink;">
@csrf
<label >name</label>
<input  type="text" name="name"><br>
<label >age</label>
<input  type="number"  name="age"><br>
<div >
<label >blood type</label>
<select  name="bloodtype"  style="width:12rem;">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>  
        <option value="B-">B-</option>  
        <option value="AB+">AB+</option>  
        <option value="AB-">AB-</option>  
        <option value="O+">O+</option>  
        <option value="O-">O-</option>  
      </select></div><br>
      
<label >city</label>
<input type="text"  name="city"><br>
<label >phone number</label>
<input type="number"  name="phone_number"><br>
<label >email address</label>
<input type="text"  name="email"><br>
<br>
<input type="submit">
    
</form>
</div>
@endsection