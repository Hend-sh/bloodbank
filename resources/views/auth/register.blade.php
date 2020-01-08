@extends('layouts.app')

@section('content')
<script type="text/javascript" src="jquery.js"></script>
<style>
	#showdonor,#showbloodbank
	{
		display:none;
	}
	</style>

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white" style=" background: darkred !important">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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
                                            <label for="Phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>
                
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
                                            <label for="prive" class="col-md-4 col-form-label text-md-right">{{ __('type') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="radio" class="form-control @error('prive') is-invalid @enderror" name="prive" value ="1" > Donor
                                                <input id="password" type="radio" class="form-control @error('prive') is-invalid @enderror" name="prive"  value="2" > Blood Bank
                                                
                                                @error('prive')
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function function1()
    {
        var x = document.getElementById("showdonor");
        if (x.style.display==='none')
        {
            x.style.display = "block";
        }else 
        {

            x.style.display ="none";
        }
    }
    function function2()
    {
        var x = document.getElementById("showbloodbank");
        if (x.style.display==='none')
        {
            x.style.display = "block";
        }else 
        {

            x.style.display ="none";
        }
    }
</script>
@endsection
