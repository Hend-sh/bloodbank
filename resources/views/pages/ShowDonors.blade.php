
@extends('layouts.main')

@section('content')

<style>
    th{color:white;
        background-color:darkred;
    }
tr:nth-child(even){
    background-color:#dddddd;
}
</style>
<div class="row mt-5">
    <div class="col-md-3">
<a href="{{url('/donors/create')}}"> Create Account Donor </a>
    </div>
</div>
<form action="{{url('/search')}}" method="post" role="search">
@csrf
<div class="row mt-5">
    
               <div class="col-md-3">
                  <button class="btn btn-secondary btn-md btn-block" type="submit">Search</button>
                </div>
              <div class="col-md-9 "><input type="text" class="form-control" placeholder="Search" name="inp">
            </div>
</div>
            </form>
<table class="table mt-5 ">
<thead>
<tr>
<th>Name</th>
<th>Blood Type</th>
<th>Phone Number</th>
<th>City</th>

</tr>
</thead>


@foreach($users as $user)
<tr>
<td> {{$user->name}} </td>
<td> {{$user->donors->BloodKind}} </td>
<td> {{$user->Pone}} </td>
{{--  @if(dd($donor->City))  --}}
<td>{{$user->CityName}} </td>
{{--  @endif  --}}
{{--  <td>{{$donor->City->CityName}} </td>  --}}
</tr>
  @endforeach

{{--  
@foreach($users as $user)
<tr>
<td> {{$user->name}} </td>
@if($user->donors)
<td> {{$user->donors->BloodKind}} </td>
<td> {{$user->Phone}} </td>
<td>{{$user->City->CityName}} </td>
@endif
</tr>
  @endforeach  --}}
</table>

@endsection 
