
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
    
               <div class="col-md-2">
                  <button type="submit" class="btn btn-secondary btn-md btn-block" >Search</button>
                </div>
                {{--  <div class="col-md-4"><input type="text" class="form-control" placeholder="Search" name="q">
            </div>    --}}
            <div class="col-md-4">
                <select  class="form-control" name = "q">
                        <option value = "A+">A+ </option>
                        <option value = "A-">A- </option>
                        <option value = "B+">B+ </option>
                        <option value = "B-">B- </option>
                        <option value = "O+">O+ </option>
                        <option value = "O-">O- </option>
                        <option value = "AB+">AB+ </option>
                        <option value = "AB-">AB- </option>
                </select>  
            </div>
            {{--  <div class="col-md-4">
            <select name="qqq" class="form-control">                                            
                    @foreach($cities as $city)
                           <option value = "{{$city->id}}">{{$city->CityName}} </option>
                    @endforeach 
                   </select>   
                </div>  --}}
</div>
            </form>
{{--  <table class="table mt-5 ">  --}}


  <div>
        <table class="table table-striped">   
                <thead>
                        <tr>
                           
                  <th>Name</th>
                  <th>Blood Type</th>
                  <th>Phone Number</th>
                  <th>City</th>
                        </tr>
                    </thead>             
         @if(isset($details))
        {{--  <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2>Sample User details</h2>  --}}
        <table class="table table-striped">
        
        <tbody>
            @foreach($details as $user)
            <tr>
               
                    <td> {{$user->name}} </td>
                    <td> {{$user->donors->BloodKind}} </td>
                    <td> {{$user->Phone}} </td>
                    <td>{{$user->donors->City->CityName	}} </td>
                    
                
                
            </tr>
            @endforeach
        </tbody>
        @else
        <tbody>
        @foreach($users as $user)
        <tr>
        <td> {{$user->name}} </td>
        <td> {{$user->donors->BloodKind}} </td>
        <td> {{$user->Phone}} </td>
        <td>{{$user->donors->City->CityName	}} </td>
        
        </tr>
          @endforeach 
    </tbody>
    </table>
    @endif
</div>

</table>

@endsection 
