@extends('layouts.main')

@section('content')

<br><br>
<div class="container">
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
                <div class="card-header text-white" style=" background: darkred !important">{{ __('Paitent Register') }}</div>

                <div class="card-body">
                    <form method="post"  action="{{route('reg-patinet-store')}}">
                        @csrf

                         <div class="form-group row">
                                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('phone number') }}</label>
                
                                            <div class="col-md-6">
                                                    <input  type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}"  autocomplete="Phone" autofocus>                
                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                         </div>
                         <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>
    
                                <div class="col-md-6">
                                        <input  type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" autofocus>                
                                    @error('address')
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
                             @foreach($cities as $city)-->
                                    <option value = "{{$city->city_Num}}">{{$city->CityName}} </option>
                             @endforeach 
                            </select>                            
                                @error('Phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="blood_type" class="col-md-4 col-form-label text-md-right">{{ __('blood type') }}</label>
    
                                <div class="col-md-6">
                                <select name="blood_type" class="form-control @error('blood_type') is-invalid @enderror">                                            
                                        <option value = "A+">A+ </option>
                                        <option value = "A-">A- </option>
                                        <option value = "B+">B+ </option>
                                        <option value = "B-">B- </option>
                                        <option value = "O+">O+ </option>
                                        <option value = "O-">O- </option>
                                        <option value = "AB+">AB+ </option>
                                        <option value = "AB-">AB- </option>
                                </select>                            
                                    @error('blood_type')
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
