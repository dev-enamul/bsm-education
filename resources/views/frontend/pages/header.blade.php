<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="top-header-left">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href=""><i class="icofont-ui-call"></i> +880-132-805-8806</a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-envelope-open"></i> info@bsmeduimmi.com</a></li>
                        </ul>
                    </div><!-- top header left close -->
                </div><!-- col close -->
                <div class="col-xl-6 col-lg-6 hidden-sm">
                    <div class="top-header-right">
                        <ul class="list-inline float-right">
                            <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100092170517780"><i class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-instagram"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="icofont-youtube-play"></i></a></li>
                        </ul>
                    </div><!-- top header right close -->
                </div><!-- col close -->
            </div><!-- row close-->
        </div><!-- .container close -->
    </div><!-- top header close -->

   

</header>

<div class="logo-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <div class="logo-box">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="BSM Education">
                    </a>
                </div><!-- logo box close -->
            </div><!-- col close -->
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                <div class="mainmenu">
                    <ul id="menu">
                        <li class="{{Route::is('home')?'active':''}}"><a href="{{ url('/') }}">HOME</a></li>
                        <li class="{{Route::is('who-we-are')?'active':''}}"><a href="{{ route('who-we-are') }}">WHO WE ARE</a>
                            {{--  <ul>
                                <li><a href="">Meet the Team</a></li>
                                <li><a href="">Partner Institution</a></li>
                                <li><a href="">Acheivements</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Free Consultation</a></li>
                                <li><a href="">After Visa Assistance</a></li>
                            </ul>  --}}
                        </li>
                        <li class="{{Route::is('home.green_card')?'active':''}} {{Route::is('home.visa.processing')?'active':''}}"><a href="javascript:void(0)">SERVICES <i class="icofont-caret-down"></i></a>
                            <ul>
                                <li><a href="{{route('home.green_card')}}">USA EB-3 Green Card Program</a></li>
                                {{--  <li><a href="">Student Counseling</a></li>  --}}
                                {{--  <li><a href="">Scholarship</a></li>  --}}
                                {{--  <li><a href="">Student Admission</a></li>  --}}
                                <li><a href="{{route('home.visa.processing')}}">Visa Processing</a></li>
                                {{--  <li><a href="">Virtual Counselling</a></li>  --}}
                                {{--  <li><a href="">Accommodation</a></li>  --}}
                            </ul>
                        </li>
                        <li class="{{Route::is('destination')?'active':''}}"><a href="">DESTINATION<i class="icofont-caret-down"></i></a>
                            <ul>
                                @foreach ($destinations as $key=>$item)
                                <li><a href="{{ route('destination',$item) }}">{{ $item }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="{{Route::is('frontend.blogs')?'active':''}} {{Route::is('frontend.blog')?'active':''}}"><a href="{{ route('frontend.blogs') }}">BLOG</a></li>
                        <li class="{{Route::is('contact-us')?'active':''}}"><a href="{{ route('contact-us') }}">CONTACT US</a></li>
                      	<li class=""><button class="button-1 mr-2" style="padding: 2px;"><a href="{{ route('contact-us') }}">Apply Now</a> </button></li>
                    </ul>
                </div>
            </div>
            {{--  <div class="col-xl-2 pl-0 col-lg-2 col-md-2 hidden-sm">
                <div class="search-bar text-right">
                    <form action="">
                        <input type="text" class="search-box" placeholder="Search" name="search">
                    </form>
                </div>
            </div>  --}}
        </div>
    </div>
</div>