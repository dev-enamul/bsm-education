@extends('frontend.master.layouts')
@section('content')

<section class="contact-us-area mt-5 mb-5 pt-3">
    <div class="container">
        <div class="row">

            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="contact-left-details">
                    <h2>Contact Us </h2>
                    <p class="intro">{!!$key[42]->val??''!!}</p>
                    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(42,'textarea')"  style="top: 50px">
                        <span class="edit-icon"></span>
                    </button>
                    <div class="row">
                    	<div class="col-lg-4 col-md-12 col-sm-12">
                    		<div class="contact-icon">
                    			<i class="icofont-ui-call"></i>
                    		</div>
                    		<h4>Call Us</h4>
                    		<p>+880-132-805-8806</p>
                    	</div>
                    	<div class="col-lg-4 col-md-12 col-sm-12">
                    		<div class="contact-icon">
                    			<i class="icofont-envelope-open"></i>
                    		</div>
                    		<h4>Mail Us</h4>
                    		<p>info@bsmeduimmi.com</p>
                    	</div>
                    	<div class="col-lg-4 col-md-12 col-sm-12">
                    		<div class="contact-icon">
                    			<i class="icofont-home"></i>
                    		</div>
                    		<h4>Visit Us</h4>
                    		<p>3, Shahid Tajuddin Ahmed Sawarani (4th Floor), Moghbazar, Dhaka-1207 Bangladesh</p>
                    	</div>
                    </div>
                </div>
            </div><!-- col close -->

            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="contact-right-thumb">
                    <img class="position-relative w-100" src="{{asset($key[43]->val??'')}}" alt="Tour Visa">
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(43,'file','612 X 408')" >
                        <span class="edit-icon"></span>
                    </button> 
                </div>
            </div><!-- col close -->

        </div>
    </div>
</section>

 @include('frontend.pages.free_consultant')
 @include('frontend.pages.achivement')
@endsection