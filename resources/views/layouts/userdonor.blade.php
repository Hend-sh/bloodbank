@extends('layouts.main')
@section('content')


         
            <div class="row mt-5">
                <div class="col-2">
                        <div class="btn-group-vertical" data-toggle="buttons">
                               <a href="blood_bank_home.php"><button type="button"  style="width:20rem; background: darkred !important" class=" btn btn-secondary m-1 p-3 active background: darkred !important">View Account Info</button></a> 
                               <a href="blood_bank_donors.php"><button type="button"  style="width:20rem; background: darkred !important" class="btn btn-secondary m-1 p-3 background: darkred !important">Update Info</button></a> 
                               <a href="blood_bank_donors.php"><button type="button"  style="width:20rem; background: darkred !important" class="btn btn-secondary m-1 p-3 background: darkred !important">Deactivie Account</button></a> 
                               
                       </div>
                </div>  
           
                <div class="col-10" align="center">
                     @yield('content')
                </div>
            </div>
            
         
       

@endsection