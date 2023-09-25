@extends('frontend.master.layouts')
@section('content')

<div class="nhp-banner-c">
    <img src="{{asset('frontend/images/page-banner.jpg')}}" alt="Scholarship Offers">
       <section class="breadcrumb-part">
           <div class="container">
               <div class="row">
               <div class="col-12 text-center">
                       <div class="breadcrumb-title">
                           <h1>USA EB-3 Green Card</h1>
                           <p style="color:#fff; font-weight:700; "><a  href="{{url('/')}}" style="color: #000">Home</a> / Who we are</p>
                       </div>
                   </div>
               </div> 
           </div>
       </section>
    </div>
    
<section class="what-we-are-area pb-5 pt-5">
    <div class="container">
 
        <div class="row">
            <div class="col-sm-12 pb-3">
                <div class="title relative">
                    <h2>What Is the EB-3 Visa?  </h2> 
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwo-thumb">
                    <img class="position-relative" src="{{asset($key[34]->val??'')}}" alt="EB-3">
                    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(34,'file','629 X 474')" >
                        <span class="edit-icon"></span>
                    </button> 
                </div><!-- logo box close -->
            </div><!-- col close -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwe-content"> 
                    <p class="intro">{!!$key[35]->val??''!!}</p>
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(34,'textarea')" >
                        <span class="edit-icon"></span>
                    </button> 

                </div><!-- logo box close -->
            </div><!-- col close -->

        </div>
    </div>
</section><!-- wwo area close -->


<section class="what-we-are-area background-white-2 pt-5 pb-5">
    <div class="container">

        <div class="row">

            <div class="col-md-12 mb-2">
                <div class="title-r">
                    <h2>What we offered?</h2>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwe-content"> 
                    <p class="intro">{!!$key[37]->val??''!!}</p>
                    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(37,'textarea')" >
                        <span class="edit-icon"></span>
                    </button>
                </div><!-- logo box close -->

                <div class="d-flex">
                    <button class="button-1 mr-2"><a href="{{route('login')}}">Login</a> </button> 
                    <button class="button-1"><a href="{{route('user.register')}}">Register</a> </button>
                </div>

            </div><!-- col close -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwo-thumb">
                    <img class="position-relative" src="{{asset($key[36]->val??'')}}" alt="EB-3">
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(36,'file','629 X 474')" >
                        <span class="edit-icon"></span>
                    </button> 
                </div><!-- logo box close -->
            </div><!-- col close -->

        </div>
    </div>
</section><!-- wwo area close -->
 
 @include('frontend.pages.free_consultant')
 @include('frontend.pages.achivement')
@endsection