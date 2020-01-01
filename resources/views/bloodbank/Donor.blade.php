
@extends('layouts.app')

@section('content')

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