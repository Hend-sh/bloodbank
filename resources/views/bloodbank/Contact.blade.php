
@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="{{route('contactus-store')}}" method="post">
                        @csrf
                        <div class="card border rounded-0">
                            <div class="card-header p-0">
                                <div style=" background: darkred !important" class=" text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i>Contact us</h3>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user "></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="please enter your name" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="please enter your email" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="please enter your report" name="message" ></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input style=" background: darkred !important" type="submit" value="Send" class="btn   btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>
@endsection