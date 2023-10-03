@extends('frontend.master.layouts')
@section('content')

@include('frontend.pages.page_banner')
<section class="what-we-are-area pb-5 pt-5">
    <div class="container"> 
        <div class="row">
            <div class="col-sm-12 pb-3 text-center"> 
                <div class="title relative" style="margin-bottom: -11px">
                    <h2 class="mb-0 pb-0">Zahir Uddin Babar </h2> 
                </div> 
                <small class="">Chief Executive Officer</small>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwo-thumb">
                    <img class="position-relative" src="{{asset($key[31]->val??'')}}" alt="ceo of BSM Education">
                        <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(31,'file','629 X 474')" >
                            <span class="edit-icon"></span>
                        </button> 
                    </img>
                </div><!-- logo box close -->
            </div><!-- col close -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwe-content">  
                    <p class="intro"> {!!$key[18]->val??''!!} </p>
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(18,'textarea')" >
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

            <div class="col-sm-12 pb-3 text-center"> 
                <div class="title relative" style="margin-bottom: -11px">
                    <h2 class="mb-0 pb-0"> Dr Muhit Rana </h2> 
                </div> 
                <small class="">Managing Partner</small>
            </div> 

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwe-content"> 
                    <p>{!!$key[19]->val??''!!}</p>
                    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(19,'textarea')" >
                        <span class="edit-icon"></span>
                    </button> 
                </div><!-- logo box close -->
            </div><!-- col close -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwo-thumb">
                    <img src="{{ asset($key[32]->val??'') }}" alt="MD of BSM Education">
                        <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(32,'file','629 X 474')" >
                            <span class="edit-icon"></span>
                        </button> 
                    </img>
                   
                </div><!-- logo box close -->
            </div><!-- col close -->

        </div>
    </div>
</section><!-- wwo area close -->


<section class="what-we-are-area mt-5 mb-4">
    <div class="container">

        <div class="row">
           
            <div class="col-sm-12 pb-3 text-center"> 
                <div class="title relative" style="margin-bottom: -11px">
                    <h2 class="mb-0 pb-0"> Md Saif Uddin </h2> 
                </div> 
                <small class="">Managing Partner</small>
            </div> 


            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwo-thumb">
                    <img class="position-relative" src="{{asset($key[33]->val??'')}}" alt="MD of BSM Education">
                    <button class="edit button-1 top_left" id="edit_button" onclick="getEditModal(33,'file','629 X 474')" >
                        <span class="edit-icon"></span>
                    </button> 
                </img>
                </div><!-- logo box close -->
            </div><!-- col close -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="wwe-content"> 
                    <p>{{$key[20]->val}}</p>
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(20,'textarea')" >
                        <span class="edit-icon"></span>
                    </button> 
                </div><!-- logo box close -->
            </div><!-- col close -->

        </div>
    </div>
</section><!-- wwe area close -->

 

<section class="mission-area background-white-2 pt-5 pb-5"> 
    <div class="container">
        <div class="row">
            <!-- Mision -->
            <div class="col-md-4 ">
                <p class="mb-0"><br><img src="{{asset($key[21]->val??'')}}" alt="Mission" class="mb15 img-fluid">
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(21,'file','820 X 300')" >
                        <span class="edit-icon"></span>
                    </button> 
                </p>
                <h3 class="color5 wow fadeInUp mb-0" style="visibility: visible; animation-name: fadeInUp;">Mission</h3>
                <p class="position-relative">{!!$key[22]->val!!} 
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(22,'text')" >
                        <span class="edit-icon"></span>
                    </button> 
                </p>
            </div>
            <!-- Vision -->
            <div class="col-md-4">
                <p class="mb-0"><br><img src="{{asset($key[23]->val??'')}}" alt="Vision" class="mb15 img-fluid">
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(23,'file','820 X 300')" >
                        <span class="edit-icon"></span>
                    </button> 
                </p>
                <h3 class="color5 wow fadeInUp mb-0" style="visibility: visible; animation-name: fadeInUp;">Vision</h3>
                <p class="position-relative">{!!$key[24]->val!!} 
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(24,'text')" >
                        <span class="edit-icon"></span>
                    </button> 
                </p>
            </div>
            <!-- Values -->
            <div class="col-md-4">
                <p class="mb-0"><br><img src="{{asset($key[25]->val??'')}}" alt="Values" class="mb15 img-fluid">
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(25,'file','820 X 300')" >
                        <span class="edit-icon"></span>
                    </button> 
                </p>
                <h3 class="color5 wow fadeInUp mb-0" style="visibility: visible; animation-name: fadeInUp;">Values</h3>
                <p class="position-relative"> {!!$key[26]->val!!} 
                    <button class="edit button-1 top_right" id="edit_button" onclick="getEditModal(26,'text')" >
                        <span class="edit-icon"></span>
                    </button> 
                </p>
            </div>
        </div><!-- /row -->
    </div>
  
</section><!-- mission area close -->

  

<section class="team-area">

    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up"> 
          <div class="row"> 
            <div class="col-sm-12 pb-3">
                <div class="title relative">
                    <h2>Our Team</h2> 
                </div>
            </div> 

            @foreach ($teams as $team)
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{asset($team->image??'uploads/team/default.jpg')}}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>{{$team->name}}</h4>
                        <span>{{$team->position}}</span>
                        <p>{{$team->description}}</p>
                        <div class="social">
                        <a target="blank" href="{{$team->twitter}}"><i class="icofont-twitter"></i></a>
                        <a target="blank" href="{{$team->facebook}}"><i class="icofont-facebook"></i></a>
                        <a target="blank" href="{{$team->instagram}}"><i class="icofont-instagram"></i></a>
                        <a target="blank" href="{{$team->linkedin}}"> <i class="icofont-linkedin"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
          
 
            
          </div>
      
        </div>
      </section><!-- End Team Section --> 
</section><!-- team area close -->

@endsection