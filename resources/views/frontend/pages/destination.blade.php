@extends('frontend.master.layouts')
@section('content')
<div class="nhp-banner-c">
    <img src="{{asset('frontend/images/page-banner.jpg')}}" alt="Scholarship Offers">
       <section class="breadcrumb-part">
           <div class="container">
               <div class="row">
               <div class="col-12 text-center">
                       <div class="breadcrumb-title">
                           <h1>Destination</h1>
                           <p style="color:#fff; font-weight:700; "><a  href="{{url('/')}}" style="color: #000">Home</a> / USA</p>
                       </div>
                   </div>
               </div> 
           </div>
       </section>
    </div>

 
<section class="application-area pt-5">
    <div class="container">

        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 pb-5">
				<div class="row">
					<div class="col-sm-12 pb-3">
						<div class="title relative">
							<h2>Study In {{$data->country}}</h2> 
						</div>
						<p class="m-0">{!!$data->short_description!!}</p>
					</div>
				</div>
                <div class="fc-content">
                    @isset($data->image)
                        <img class="w-100" src="{{asset($data->image??'')}}" alt="">
                    @endisset
					
					
					<div class="accordion mb-3 mt-3" id="accordionExample">
						<!-- Card -->
						<div class="card">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Why Study in {{$data->country}}?
									</button>
								</h2>
							</div>
							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
								<div class="card-body">
									<div id="collapse-4-Two" class="nhp-accodian-result collapse show" data-parent="#accordion-4">
										 {!!$data->reason!!}
									</div>
								</div>
							</div>
						</div>
						<!-- Card -->
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Required Documents
									</button>
								</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									{!!$data->requir_document!!}
								</div>
							</div>
						</div>
						<!-- Card -->
						<div class="card">
							<div class="card-header" id="headingThree">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Application Procedures
									</button>
								</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									{!!$data->procedure!!}
								</div>
							</div>
						</div>
	
						<div class="card">
							<div class="card-header" id="headingThree">
								<h2 class="mb-0">
									<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Visa Procedure and Fees
									</button>
								</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									{!!$data->fee!!}
								</div>
							</div>
						</div>
					</div> 

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

{{--  <section class="promo-video mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/UFKr5T643B0?controls=0" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>  --}}

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
                        @if (isset($data->partners) && count($data->partners)>0)
                            @foreach ($data->partners as $partner)
                                <div class="client-logo">
                                    <a href='{{route('university',$partner->name)}}'><img src="{{asset($partner->image??'uploads/institutes/default.jpg')}}"> </a>
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