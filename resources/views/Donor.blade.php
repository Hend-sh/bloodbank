@extends('layout.main')
@section('content')

<form action=" "align="center" dir="rtl">
    <label class="form-control-label">City
      <select name="" class="form-control " style="width:12rem;">
        <option value="">طرابلس</option>
        <option value="">الزاويـة</option>
      </select>
    </label>
    <label class="form-control-label" >Blood Type
      <select name="" class="form-control " style="width:12rem;">
        <option value="">A+</option>
        <option value="">A-</option>
        <option value="">B+</option>  
        <option value="">B-</option>  
        <option value="">AB+</option>  
        <option value="">AB-</option>  
        <option value="">O+</option>  
        <option value="">O-</option>  
      </select>
    </label>
    <label for="">
       <input type="submit" name="" value="search" class="btn btn-secondary">
    </label>
</form>
<div class="container"> 
<table class="table text-center table-Active"><?php//light?>
<tr style=" background: darkred !important" >
<th>Name Donor</th>
<th>City</th>
<th>Email</th>
<th>Phone</th>
<th>Blood Type</th>
</tr>

<tr>
<td>Asera Omar</td>
<td>Tripoly</td>
<td>asera_omar@yahoo.com</td>
<td>0917996988</td>
<td>A+</td>
</tr>
<tr>
<td>shada koja</td>
<td>Tripoly</td>
<td>shada@yahoo.com</td>
<td>0917996988</td>
<td>B+</td>
</tr>
<tr>
<td>hend ali</td>
<td>Tripoly</td>
<td>hend@yahoo.com</td>
<td>0917996988</td>
<td>AB+</td>
</tr>
</table>
</div>

@endsection
