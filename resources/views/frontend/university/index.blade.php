@extends('frontend.master.layouts')
@section('content')
<div class="nhp-banner-c">
    <img src="{{asset('frontend/images/page-banner.jpg')}}" alt="Scholarship Offers">
       <section class="breadcrumb-part">
           <div class="container">
               <div class="row">
               <div class="col-12 text-center">
                       <div class="breadcrumb-title">
                           <h1>{{$data->name}}</h1>
                           <p style="color:#fff; font-weight:700; "><a  href="{{url('/')}}" style="color: #000">Home</a> / {{$data->name}}</p>
                       </div>
                   </div>
               </div> 
           </div>
       </section>
    </div>

 
    @if (isset($data) )
    <section class="application-area pt-5">
        <div class="container"> 
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="fc-content">
                        <div class="fc-header mb-5">
                            <img src="{{asset($data->image??'uploads/institutes/default.jpg')}}" alt="">
                            <h5>Education {{@$data->destination->country}} Academy</h5>
                            <p>{{@$data->destination->short_description}}</p>
                        </div>
                        <h2>Why Study At The Education {{@$data->destination->country}} Academy? </h2>
                        <p>{!! @$data->destination->reason!!}</p>
                    </div><!-- logo box close -->
                </div><!-- col close -->
    
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Apply Now</h2>
                        </div>
                    </div>
                    <div class="free-consultation apply-page"> 
                        <form class="" action="">
                            <div class="row inputBox">
                                <div class="col-md-6">
                                    <label for="nameF">First Name*</label>
                                    <input type="text" class="form-control" id="nameF">
                                </div>
                                <div class="col-md-6">
                                    <label for="nameL">Last Name*</label>
                                    <input type="text" class="form-control" id="nameL">
                                </div>
                            </div>
    
                           
                            <div class="inputBox">
                                <label for="phoneB">Mobile Number*</label>
                                <input type="text" class="form-control" id="phoneB">
                            </div>
                            <div class="inputBox">
                                <label for="emailB">Email Address*</label>
                                <input type="email" class="form-control" id="emailB">
                            </div>
                            <div class="inputBox">
                                <label for="destinationB">Study Destination*</label>
                                <select class="form-control" id="destinationB">
                                    <option value=""></option>
                                    <option value="">USA</option>
                                    <option value="">CANADA</option>
                                </select>
                            </div>
                            {{--  <div class="inputBox">
                                <label for="courseB">Course Level*</label>
                                <select class="form-control" id="courseB">
                                    <option value=""></option>
                                    <option value="">option 1</option>
                                    <option value="">option 2</option>
                                </select>
                            </div>  --}}
                            <div class="inputBox">
                                <label for="phoneB">Subject*</label>
                                <input type="text" class="form-control" id="subjectB">
                            </div>
                            <div class="inputBox">
                                <label for="messageB">Message</label>
                                <textarea name="" id="messageB" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                              <div class="inputBox ml-4">
                                <input type="checkbox" class="form-check-input" id="check">
                                <label class="form-check-label" for="check">I agreed to BSM Education & Immigration Services terms.</label>
                            </div>
                            <div class="inputBox">
                                <button type="submit" class="button-1">Submit Now <i class="icofont-arrow-right"></i></button>
                            </div>
                        </form>
                    </div><!-- logo box close -->
                </div><!-- col close -->
    
            </div>
        </div>
    </section><!-- fa area close -->
    
    @endif

  
<section class="partner-area mb-5 pt-5 pb-5 background-white-2">
    <div class="container"> 
            <div class="col-sm-12">
                <div class="text-center">
                    <h3>Our Partner Institution in UK</h3>
                </div>
            </div>
        </div>

        <div class="row"> 

            <div class="col-md-12">
                <div class="clients">
                    <div id="clientSlider" class="owl-carousel owl-theme">
                        @if (isset($datas) && count($datas)>0)
                            @foreach ($datas as $partner)
                                <div class="client-logo">
                                    <a href='{{$partner->name}}'><img src="{{asset($partner->image??'uploads/institutes/default.jpg')}}"> </a>
                                </div> 
                            @endforeach
                        @endif
                        <div class="client-logo">
                            <img src="{{asset('frontend/images/clientlogo.jpg')}}"> 
                        </div> 
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- client area close -->

@endsection