@extends('layouts.main')

@section('content')
<div class="continner mt-5">
        @if($errors->count())
        <div class="alert alert-danger">
            <ul> 
                @foreach($errors->all() as $error)
                   <li> {{$error}}
                @endforeach
            </ul>
        </div>
        @endif
<div class="card-deck">
        <div class="card h-100 !important">
          <div class="card-body">
                         
                                          <table class="table text-center table-Active" style="background-color:white;">
                                                  <tr class="text-white" style="background: darkred !important">
                                                  <th>Blood Type</th>
                                                  <th>Quantity</th>
                                                  <th>date</th>
                                                  <th>Expiration date</th>
                                                  <th></th>
                                                  <th> </th>
                                                  </tr>
                                                  
                                                  @foreach($blgroup  as $bgroup)
                                                  <tr>
                                                  <td>{{$bgroup->bloodType}}</td>
                                                  <td>{{$bgroup->Quantity}}</td>
                                                  <td>{{$bgroup->created_at}}</td>
                                                  <td>{{$bgroup->Expiration_date}}</td>
                                                  <td><a class="btn btn-success" > Delete </a></td>
                                                  <td><a class="btn btn-success" > Edit </a></td>
                                                  
                                                  
                                                  </tr>
                                                  @endforeach
                                          </table>
                                  </div>
                             </div>
                      
               
      
        <div class="card w-100 h-100 !important">
          <div class="card-body ">
                <div class="card-header text-white" style=" background: darkred !important">{{ __('Register') }}</div>
                
        <form action ="{{route('bloodgroup-store')}}" method ="post" style="w-50 h-100">
                @csrf    
                <div class="form-group row mt-3">
                        <label for="bloodType" class="col-md-4 col-form-label text-md-right">{{ __('blood type') }}</label>

                        <div class="col-md-6">
                        <select name="bloodType" class="form-control @error('bloodType') is-invalid @enderror">                                            
                                <option value = "A+">A+ </option>
                                <option value = "A-">A- </option>
                                <option value = "B+">B+ </option>
                                <option value = "B-">B- </option>
                                <option value = "O+">O+ </option>
                                <option value = "O-">O- </option>
                                <option value = "AB+">AB+ </option>
                                <option value = "AB-">AB- </option>
                        </select>                            
                            @error('bloodType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                         
                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Needs For') }}</label>

                        <div class="col-md-6">
                        <select name="type" class="form-control @error('type') is-invalid @enderror">                                            
                          @foreach($BloodType as $btype)-->
                           <option value = "{{$btype->type}}">{{$btype->typeName}} </option>
                            @endforeach 
                        </select>               
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                                     
                    <div class="form-group row">
                            <label for="Quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                    <input  type="text" class="form-control @error('Quantity') is-invalid @enderror" name="Quantity" value="{{ old('Quantity') }}"  autocomplete="Phone" autofocus>                
                                @error('Quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="Expiration_date" class="col-md-4 col-form-label text-md-right">{{ __('Expiration date') }}</label>

                            <div class="col-md-6">
                                    <input  type="date" class="form-control @error('Expiration_date') is-invalid @enderror" name="Expiration_date" value="{{ old('Expiration_date') }}"  autofocus>                
                                @error('Expiration_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
         </div>                    
        </form>
    </div
          </div>
        </div>
       
        </div>
</div>   
  
  
 
  @endsection
  