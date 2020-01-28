
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
<a href="{{url('/patient')}}"> Registrtion Paitent </a>
    </div>
</div>


  <div>
        <table class="table table-striped mt-5">   
                <thead>
                        <tr>
                           
                  <th>Address</th>
                  <th>City</th>
                  <th>Phone Number</th>
                  <th>Blood Type</th>
                     </tr>
                    </thead>             
       
        
        <tbody>
           {{--  {{dd($patient)}}   --}}
        @foreach($patient as $pat)
        <tr>
        <td> {{$pat->address}} </td>
        <td>{{$pat->City->CityName	}} </td>
        <td> {{$pat->phone_number}} </td>
        <td> {{$pat->blood_type}} </td>        
        </tr>
        @endforeach 
    </tbody>
    </table>
</div>

</table>

@endsection 
