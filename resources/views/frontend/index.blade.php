@extends('frontend.master.layouts')
@section('content')
     
<section class="slider-area">
    <div class="slider">
        <div class="owl-carousel" id="homeCarousel">
       
            <div class="slider-item">
                <img class="mw-100 h-auto" src="{{ asset('frontend/images/slider2.jpg') }}">
            </div>
            <div class="slider-item">
                <img class="mw-100 h-auto" src="{{ asset('frontend/images/slider3.jpg') }}">
            </div>
        </div>
    </div>
</section><!--Slider close-->

<section class="what-we-offer-area pb-5 pt-5">
    <div class="container"> 
        <div class="row">
            <div class="col-sm-12 pb-3">
                <div class="title relative">
                    <h2>What We Offer</h2> 
                </div>
            </div> 

            <div class="col-md-6">
                <p class="text-justify position-relative">
                    <img src="{{asset($key[15]->val??'')}}" alt="Photo" class="mr-3 mt-25 mb-3 float-left w-40">{!!$key[1]->val??''!!} 
                        <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(15,'file','424 X 266')">
                            <span class="edit-icon"></span>
                        </button>
                    </img>
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(1,'textarea')" >
                        <span class="edit-icon"></span>
                    </button> 
                </p>
            </div> 

            <div class="col-md-6">
                <h4 class="color5">Frequently asked questions</h4>
                <!-- Accordion -->
                <div class="accordion mb-3" id="accordionExample">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    {!!$key[2]->val??''!!}
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(2,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                            <div class="card-body position-relative">
                                {!!$key[3]->val??''!!}
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(3,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {!!$key[4]->val??''!!}
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(4,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body position-relative">
                                {!!$key[5]->val??''!!} 
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(5,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    {!!$key[6]->val??''!!} 
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(6,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body position-relative">
                                {!!$key[7]->val??''!!}
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(7,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed position-relative" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    {!!$key[8]->val??''!!} 
                                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(8,'text')" >
                                        <span class="edit-icon"></span>
                                    </button>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body position-relative">
                                {!!$key[9]->val??''!!}
                                <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(9,'textarea')" >
                                    <span class="edit-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="d-flex">
                    <button class="button-1 mr-2"><a href="{{route('login')}}">Login</a> </button> 
                    <button class="button-1"><a href="{{route('user.register')}}">Register</a> </button>
                </div>
            </div> 
        </div>
        
    </div>
</section>
<!-- wwo area close -->


<section class="study-abroad-area background-white-2 pt-5 pb-5">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2 class="text-uppercase">Study Abroad</h2>
                </div>
            </div>
        </div>

        @if(count($study_abroads)>0)
            <div class="row">
                @foreach ($study_abroads as $row)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="studyAbroadBox">
                            <a href="{{route('destination',$row->country)}}">
                                <img src="{{asset($row->image??'uploads/destinations/destination.jpg')}}" alt="BSM Education">
                                <h3>Study in {{ $row->country }}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section><!-- sa area close -->


<section class="partner-area pb-5 pt-5">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h3 class="text-uppercase">Our Partner Institution</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="clients">
                    <div id="clientSlider" class="owl-carousel owl-theme cursor-pointer">
                        @foreach ($partners as $item)
                            <div class="client-logo">
                              <a href='{{route('university',$item->name)}}' target='blank'><img class="cursor-pointer" src="{{asset($item->image)}}" alt="Partner Institute"> </a>
                            </div>
                            
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- client area close -->


<section class="scholarship-area background-white-2 pb-5 pt-5">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2 class="text-uppercase">Scholarships</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="scholarship-content text-center">
                    <p class="position-relative">{!!$key[16]->val??''!!} 
                        <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(16,'textarea')">
                            <span class="edit-icon"></span>
                        </button>
                    </p>
                    <div class="readmore mt-2 float-right">
                        <button class="button-1"><a href="{{route('contact-us')}}" >More Information <i class="icofont-arrow-right"></i></a></button> 
                    </div>
                </div>
            </div><!-- col close -->

        </div>
    </div>
</section><!-- scholarship area close -->

@include('frontend.pages.free_consultant'); 
@include('frontend.pages.achivement');

 
@endsection 
   