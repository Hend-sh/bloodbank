@extends('layouts.main')
@section('content')
<style>
.centerText
{
margin-left:7rem;
}
</style>
<br><br>
<form action=" "algin="center" dir="ltr">
    <label class="form-control-label">City
      <select name="" class="form-control " style="width:12rem;">
        <option value="">Tripoli</option>
        <option value="">Sabha</option>
      </select>
    </label>
    <label class="form-control-label" >Location
      <select name="" class="form-control " style="width:12rem;">
        <option value="">hay Alandols</option>
        <option value="">Almdainah</option>
         
      </select>
    </label>
    <label for="">
       <input type="submit" name="" value="search" class="btn btn-secondary">
    </label>
</form>
<hr>



     <div class="row ml-5">
     @foreach($users as $user)
     <table class="table m-2" dir="ltr" style="width:32rem;  background-color:white;" border="0">
            <tr class="table-secondary">
            <td colspan="2"></td>
            </tr>

            <tr >
            <td rowspan="5" style="width:15rem;"><img class="imag" src="img/1.jpg" alt=""> </td>
            <td><b>{{$user->blood_bank_name}}</b>  </td>
            </tr>
            <tr>
            <!-- <td>المدينة</td> -->
            <td><b>City : </b> {{$user->city_number}}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>Location : </b> {{$user->location}}         
            </td>
            </tr>
            <tr>
            <!-- <td>المنطقة</td> -->
            <td> المدينة</td>
            </tr>
            <tr>
            <!-- <td> الموقع علي الخريطة</td> -->
            <td> kkkk</td>
            </tr>
            <tr>
            <!-- <td>التواصل:</td> -->
            <td ><a href="#">Click here to see the location</a> </td>
            </tr>
            <tr class="table-secondary">
            <td colspan="2" dir="ltr"> 
            <button style="width:10rem; background: darkred !important" class="btn btn-secondary"  id="back">contact</button>
            <button style="width:10rem; background: darkred !important" class="btn btn-secondary"  id="back">View Donors </button>

            </td>
            </tr>
        </table>
    
         @endforeach
     </div>

@endsection
    