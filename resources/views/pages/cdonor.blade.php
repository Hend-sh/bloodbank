@extends('layouts.main')

@section('content')

<div class="container" class="mt-5">
                @if($errors->count())
                <div class="alert alert-danger">
                    <ul> 
                        @foreach($errors->all() as $error)
                           <li> {{$error}}
                        @endforeach
                    </ul>
                </div>
                @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white" style=" background: darkred !important">{{ __('Donor Register') }}</div>

                <div class="card-body">
                    <form method="post"  action="{{url('/donors')}}">
                        @csrf
                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
    
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
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
    
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
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                    
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
                                                    <input  type="text" class="form-control @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone') }}"  autocomplete="Phone" autofocus>                
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
                                        <input  type="text" class="form-control @error('Location') is-invalid @enderror" name="Location" value="{{ old('Location') }}" autofocus>                
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
                                    <option value = "{{$city->cityNum}}">{{$city->CityName}} </option>
                             @endforeach 
                            </select>                            
                                @error('cites')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
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
                            </div>
                                 
                            <div class="form-group row">
                                <label for="Nationality	" class="col-md-4 col-form-label text-md-right">{{ __(' Nationality') }}</label>
    
                                <div class="col-md-6">
                                <select name="Nationality" class="form-control @error('Nationality') is-invalid @enderror">                                            
                                    @foreach($nationality as $nat)
                                    <option value = "{{$nat->numNat}}">{{$nat->Nationality}} </option>
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
                                    <input type="radio" name="gender" class=" @error('gender') is-invalid @enderror"  value="male"> Male
                                    <input type="radio"  name ="gender" class=" @error('gender') is-invalid @enderror"  value="female"> Female
                                    
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
                                <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-5">
                                            <button type="submit" class="btn btn-secondary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                 </div>        

                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
