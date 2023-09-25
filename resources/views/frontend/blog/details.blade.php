@extends('frontend.master.layouts')
@section('content')

<div class="nhp-banner-c">
    <img src="{{asset('frontend/images/page-banner.jpg')}}" alt="Scholarship Offers">
       <section class="breadcrumb-part">
           <div class="container">
               <div class="row">
               <div class="col-12 text-center">
                       <div class="breadcrumb-title">
                           <h1>Blog Details</h1>
                           <p style="color:#fff; font-weight:700; "><a  href="{{url('/')}}" style="color: #000">Home</a> / Blog Details</p>
                       </div>
                   </div>
               </div> 
           </div>
       </section>
    </div>

    <section class="blog-details-area mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="blog-details">
                        <h2>{{$data->heading}}</h2>
                        <div class="thumbnail mb-4">
                            <img class="w-100" src="{{asset($data->details_image)}}" alt="">
                        </div>
                        <p>{!!$data->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 

@endsection