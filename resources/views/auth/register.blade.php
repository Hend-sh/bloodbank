@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register to the website') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

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
                                <label for="Phone number" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>
    
                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}"  autocomplete="phone_number" autofocus>
    
                                    @error('Phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                       
            
                        <div class="form-group row">
                            <label for="Blood type" class="col-md-4 col-form-label text-md-right">{{ __('Blood type') }}</label>

                            <div class="col-md-6">
                                <select name="blood type">
                                    <option > A+ </option>
                                    <option>  A- </option>
                                    <option>  B+ </option>
                                    <option>  B- </option> 
                                    <option>  O+ </option>
                                    <option>  O- </option>
                                    <option>  AB+ </option>
                                    <option>  AB- </option>
                                    
                                </select>
                                @error('blood type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                                <label for="Location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
    
                                <div class="col-md-6">
                                    <input id="Location" type="password" class="form-control" name="Location"  autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="Gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
        
                                    <div class="col-md-6">
                                        <input  type="radio"  name="Gendar" value = " " autocomplete="Gendar"> male
                                        <input  type="radio"  name="Gendar" value ="" autocomplete="Gendar"> female
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                        <label for="Date of birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="Date of birth" type="date" class="form-control @error('Date of birth') is-invalid @enderror" name="Date of birth"  autocomplete="new-password" autofocus>
            
                                            @error('Date of birth')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                            <label for="Date of last donat" class="col-md-4 col-form-label text-md-right">{{ __('Date of last donat') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="Date of last donat" type="date" class="form-control @error('Date of last donat') is-invalid @enderror" name="Date of last donat"  autocomplete="Date of last donat">
                
                                                @error('Date of last donat')
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
                                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
