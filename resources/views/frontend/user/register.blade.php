@extends('frontend.master.layouts')
@section('content')

<div class="nhp-banner-c">
    <img src="{{asset('frontend/images/page-banner.jpg')}}" alt="Scholarship Offers">
       <section class="breadcrumb-part">
           <div class="container">
               <div class="row">
               <div class="col-12 text-center">
                       <div class="breadcrumb-title">
                           <h1>Register</h1>
                           <p style="color:#fff; font-weight:700; "><a  href="{{url('/')}}" style="color: #000">Home</a> / Assess your qualification</p>
                       </div>
                   </div>
               </div> 
           </div>
       </section>
    </div>


<section class="registration-area pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 pb-3">
                <div class="title relative">
                    <h2>Assess Your Qualifications <small>Check if you have a job offer from a U.S. employer that aligns with EB-3 criteria.</small></h2> 
                </div> 
            </div>

            <div class="col-xl-12"> 
                <div class="registration-wizard">
                    <div class="row">
                        <div class="col-lg-6 hidden-sm">
                            <div class="reg-left">
                                <img src="{{ asset('frontend/images/visa-registration.jpg') }}" class="w-100">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            @include('backend.layouts.notification')
                            <h5>Please enter your information</h5>
                            <form class="" action="{{ route('register.submit') }}" method="POST">
                                @csrf
                                <div class="row inputBox">
                                    <div class="col-md-12">
                                        <label for="nameB">Name*</label>
                                        <input type="text" class="form-control" id="nameB" required="" name="name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div> 
                                </div>

                                <div class="inputBox">
                                    <label for="addressB">Address*</label>
                                    <textarea id="addressB" class="form-control" required="" name="address"></textarea>
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="row inputBox">
                                    <div class="col-md-6">
                                        <label for="countryB">Destination*</label>
                                        <select class="form-control" id="countryB" required="" name="country">
                                            <option selected="" disabled="">Select Country*</option>
                                            @foreach ($destinations as $key=> $val)
                                                <option value="{{$key}}">{{$val}}</option>    
                                            @endforeach
                                        </select>
                                    @error('country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phoneB">Phone</label>
                                        <input type="text" class="form-control" id="phoneB" name="phone">
                                        @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row inputBox">
                                    <div class="col-md-12">
                                        <label for="emailB">Email*</label>
                                        <input type="email" class="form-control" id="emailB" required="" name="email">
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div> 
                                </div>

                                <div class="row inputBox">
                                    <div class="col-md-6">
                                        <label for="passwordB">Password*</label>
                                        <input type="password" class="form-control" id="passwordB" required="" name="password">
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="passwordV">Verify Password*</label>
                                        <input type="password" class="form-control" id="passwordV" required="" name="confirm_password">
                                        @error('confirm_password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="inputBox mb-0">
                                    <button type="submit" class="button-1 w-100">Register <i class="icofont-arrow-right"></i></button> 
                                    {{--  <div class="bg-default p-2 text-center"><b>Returning to complete your profile? <a href="{{route('login')}}" class="">Click here to login!</a></b></div>  --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- registration wizard close -->
            </div><!-- col close -->
        </div><!-- row close -->
    </div>
</section>

@endsection