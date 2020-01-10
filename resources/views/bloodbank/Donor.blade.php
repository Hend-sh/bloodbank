
@extends('layouts.app')

@section('content')

<style>
    th{color:white;
        background-color:darkred;
    }
tr:nth-child(even){
    background-color:#dddddd;
}
</style>
<form action="{{url('/donors')}}" method="post" role="search">
@csrf
<div class="row mt-5">
    
               <div class="col-md-3">
                  <button class="btn btn-secondary btn-md btn-block" type="submit">Search</button>
                </div>
              <div class="col-md-9 "><input type="text" class="form-control" placeholder="Search" name='inp'>
            </div>
</div>
            </form>
<table class="table mt-5 ">
<thead>
<tr>
<th>Name</th>
<th>Age</th>
<th>Blood Type</th>
<th>Phone Number</th>
<th>Email Address</th>
</tr>
</thead>
@foreach($donors as $donor)
<tr>
<td>{{$donor->name}}</td>
<td>{{$donor->age}}</td>
<td>{{$donor->bloodtype}}</td>
<td>{{$donor->phone_number}}</td>
<td>{{$donor->email}}</td>
</tr>
@endforeach

</table>

@endsection
</html>