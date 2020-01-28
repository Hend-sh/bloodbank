@extends('layouts.userdonor')
@section('content')
<div class="row mt-5">
        <div class="col-2">
                <div class="btn-group-vertical" data-toggle="buttons">
                       <a href="blood_bank_home.php"><button type="button"  style="width:20rem; background: darkred !important" class=" btn btn-secondary m-1 p-3 active background: darkred !important">View Account Info</button></a> 
                       <a href="blood_bank_donors.php"><button type="button"  style="width:20rem; background: darkred !important" class="btn btn-secondary m-1 p-3 background: darkred !important">Update Info</button></a> 
                       <a href="blood_bank_donors.php"><button type="button"  style="width:20rem; background: darkred !important" class="btn btn-secondary m-1 p-3 background: darkred !important">Deactivie Account</button></a> 
                       
               </div>
        </div>  
   
    </div>
    <div class="continer">
<form action method="post">
    @method("patch")
    <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        
                      <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  value="{{$user->password}}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

     <div class="form-group row">
                        <label for="Phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

                        <div class="col-md-6">
                                <input  type="text" class="form-control @error('Phone') is-invalid @enderror" name="Phone" value="{{$user->Phone}}">                
                            @error('Phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
     </div>

     <div class="form-group row">
            <label for="Location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

            <div class="col-md-6">
                    <input  type="text" class="form-control @error('Location') is-invalid @enderror" name="Location" value="{{ $user->donors->Location }}" autofocus>                
                @error('Location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
</div>
     <div class="form-group row">
        <label for="cities" class="col-md-4 col-form-label text-md-right">{{ __('cities') }}</label>

        <div class="col-md-6">
        <select name="cites" class="form-control @error('cites') is-invalid @enderror">                                            
         @foreach($cities as $city)
                <option {{ $city->id == $donors->city_id ? 'selected' : '' }} value="{{ $city->id }}">{{$city->CityName}} </option>
                
         @endforeach 
        </select>                            
            @error('cites')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    {{--  <div class="form-group row">
            <label for="BloodKind" class="col-md-4 col-form-label text-md-right">{{ __('blood type') }}</label>

            <div class="col-md-6">
            <select name="BloodKind" class="form-control @error('BloodKind') is-invalid @enderror">                                            
                    <option value = "A+">A+ </option>
                    <option value = "A-">A- </option>
                    <option value = "B+">B+ </option>
                    <option value = "B-">B- </option>
                    <option value = "O+">O+ </option>
                    <option value = "O-">O- </option>
                    <option value = "AB+">AB+ </option>
                    <option value = "AB-">AB- </option>
            </select>                            
                @error('BloodKind')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>  --}}
             
        <div class="form-group row">
            <label for="Nationality	" class="col-md-4 col-form-label text-md-right">{{ __(' Nationality') }}</label>

            <div class="col-md-6">
            <select name="Nationality" class="form-control @error('Nationality') is-invalid @enderror">                                            
                @foreach($nationality as $nat)
                <option value = "{{$nat->id}}">{{$nat->Nationality}} </option>
                <option {{ $city->id == $donors->city_id ? 'selected' : '' }} value="{{ $city->id }}">{{$city->CityName}} </option>                
                
                @endforeach 
            </select>                            
                @error('Nationality')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="gender	" class="col-md-4 col-form-label text-md-right">{{ __('Gendar') }}</label>

            <div class="col-md-6 "class="form-control">
                <input type="radio" name="gender" class=" @error('gender') is-invalid @enderror"    @if($user->donors->gender === 'male')   selected = 'selected' @endif> Male
                <input type="radio"  name ="gender" class=" @error('gender') is-invalid @enderror"  @if($user->donors->gender === 'female') selected = 'selected' @endif> Female
                
                @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
                <label for="HealthStatus" class="col-md-4 col-form-label text-md-right">{{ __('Health Status') }}</label>

                <div class="col-md-6">
                <select name="Health_Status" class="form-control @error('Health_Status') is-invalid @enderror">                                            
                        <option value = "Excellent">Excellent </option>
                        <option value = "Very good ">Very good </option>
                        <option value = "good">good </option>                                            
                </select>                            
                    @error('Health_Status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                </div>
            </div>
            <div class="form-group row">
                    <label for="dateBirth" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                    <div class="col-md-6">
                            <input  type="date" class="form-control @error('dateBirth') is-invalid @enderror" name="dateBirth" value="{{ old('dateBirth') }}"  autocomplete="dateBirth" autofocus>                
                        @error('dateBirth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
   @csrf
</div>
   
</form>
        
         
        
          
         





@endsection