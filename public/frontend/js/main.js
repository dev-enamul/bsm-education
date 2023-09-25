$(document).ready(function(){
    
	$("#homeCarousel").owlCarousel({
	    items:1,
	    margin:0,
	    navText: ['<i class="icofont-arrow-left"></i>','<i class="icofont-arrow-right"></i>'],
	    nav:true,
	    loop: true,
	    autoplay: true,
	    autoplayHoverPause: true,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn'
	});

    $("#clientSlider").owlCarousel({
        items:4,
        margin:20,
	    navText: ['<i class="icofont-arrow-left"></i>','<i class="icofont-arrow-right"></i>'],
        nav:true,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    $('#menu').slicknav();

});