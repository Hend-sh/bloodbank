@extends('layouts.user')
@section('content')


    <style>
    .vis
    {
       display:none;
    }
    </style>
    <script type="text/javascript" src="jquery.js"></script>
    <script>
     $(document).ready(function() {
					
         $('#add_user').click(function(){
         $('#f_add_user').show();
         $('#user').hide();
        })

        $('#back').click(function(){
          $('#user').show();
         $('#f_add_user').hide();	
        })


     
    });
    </script>
 
<!-- <?php 

// foreach($users as $user)
//     {{ $user->user}}
?> -->

<hr>
        <table class="table text-center table-Active" style="width:50rem;  background-color:white;" id="user">        
          <tr style=" background: darkred !important" class="text-white">
          <th>user name</th>
          <th>Email</th>
          <th>date</th>
          <th></th>
          </tr>

          @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td><a style=" background: darkred !important" class="btn btn-secondary"  href="{{url('users/'.$user->id)}}">Delet</a></td>
          </tr>
          @endforeach

          <tr>
            <td colspan="4" >
              <button class="btn btn-secondary btn-lg" style="width:20rem;background: darkred !important" id="add_user">Add User</button>
            </td>            
          </tr>
          
        </table>
        <form action="" method="post" id="f_add_user" style="background-color:white;width:50rem;" class="vis">
        @csrf 
        <h4  class="bg-secondary p-2 text-white" style="width:50rem; background: darkred !important">form add user</h4><br>    
            <label class="form-control-label">user name
              <input type="text"  class="form-control " name="name">
            </label>

            <label class="form-control-label">Email
              <input type="text"  class="form-control " name="email">
            </label><br>

            <label class="form-control-label">Password
              <input type="password"  class="form-control " name="password">
            </label>

            <label class="form-control-label">Confirm Password
              <input type="password"  class="form-control ">
            </label><br>

            <label class="form-control-label">Phone Number
              <input type="text"  class="form-control " name="phone">
            </label>

            <label class="form-control-label">Gender
            <select name="" class="form-control " style="width:12rem;" >
                <option value="">Male</option>
                <option value="">Female</option>
            </select>
            </label><br>
            <input type="submit" name="submit" value="Add" style="width:15rem;  background: darkred !important" class="btn btn-secondary" />
            <button style="width:15rem; background: darkred !important" class="btn btn-secondary"  id="back">Back</button>
            <br><br>
        </form>

<br><br><br><br><br>





@endsection