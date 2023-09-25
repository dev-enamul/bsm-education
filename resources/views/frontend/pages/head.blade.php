  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BSM Education</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.css')}}"> 
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    <!-- Icon Font -->
    <link rel="stylesheet" href="{{asset('frontend/css/icofont.min.css')}}">

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 


    @yield('css')

    @if (Auth::check() && Auth::user()->role == 1)
        <style>
          #edit_button{
                display: block !important;
            }
        </style>
    @else
        <style>
            #edit_button{
                display: none !important;
            }
        </style>
    @endif