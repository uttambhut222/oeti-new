// Scroll Header
if (screen.width < 768) {
    var sticky = $('header');
	sticky.addClass('header_fixed');
}
else {
    $(window).scroll(function(){
	  var sticky = $('header'),
		  scroll = $(window).scrollTop();

	  if (scroll >= 200){ sticky.addClass('header_fixed');}
	  else {sticky.removeClass('header_fixed');}
	});
}

// End Scroll Header

// Menu Active
$(document).ready(function() {
	var url = window.location.pathname;
	url = url.replace(".php","");
    url = url.replace("/oeti","");
	url = url.replace("/OETI","");
	switch (url) {
    case '/history':
        $('#who').addClass('active');
		$('#history').addClass('active');
	break;
			
	case '/visionmission':
        $('#who').addClass('active');
		$('#visionmission').addClass('active');
	break;
			
	case '/team':
        $('#who').addClass('active');
		$('#team').addClass('active');
	break;	
			
	case '/service':
        $('#what').addClass('active');
	break;	
	case '/web_development':
        $('#what').addClass('active');
	break;
	case '/app_development':
        $('#what').addClass('active');
	break;
	case '/ux_design':
        $('#what').addClass('active');
	break;
	case '/customer_service':
        $('#what').addClass('active');
	break;
	case '/quality_analysis':
        $('#what').addClass('active');
	break;
	case '/financial_services':
        $('#what').addClass('active');
	break;
			
	case '/staff':
        $('#what').addClass('active');
		$('#staff').addClass('active');
	break;
			
	case '/work':
        $('#work').addClass('active');
	break;
	case '/afp':
        $('#work').addClass('active');
	break;
	case '/atd':
        $('#work').addClass('active');
	break;
	case '/learnfeedback':
        $('#work').addClass('active');
	break;
	case '/aere':
        $('#work').addClass('active');
	break;
	case '/allinstitute':
        $('#work').addClass('active');
	break;
	case '/tedxtysons':
        $('#work').addClass('active');
	break;
			
	case '/process':
        $('#how').addClass('active');
	break;
	
	case '/client':
        $('#whom').addClass('active');
	break;
	
	case '/why':
        $('#why').addClass('active');
	break;
			
	case '/certification':
        $('#why').addClass('active');
		$('#certification').addClass('active');
	break;
			
	case '/career':
        $('#why').addClass('active');
		$('#career').addClass('active');
	break;	
			
	case '/career_detail':
        $('#why').addClass('active');
		$('#career').addClass('active');
	break;	
	}

});
// End Menu Active

// Header Contact Scroll
$(document).ready(function() {
	var url = window.location.pathname;
	url = url.replace(".php","");
    url = url.replace("/oeti","");
	url = url.replace("/OETI","");
	if ( url === '/' || url === '/index'){ 
    	$("#where_btn").click(function() {
			$('html, body').animate({
				scrollTop: $("#ContactUs").offset().top
			}, 2000);
		});
	   $("#where_btn_inner").click(function() {
    		$('html, body').animate({
        	scrollTop: $("#contact").offset().top
    		}, 2000);
		$('.hamburger').removeClass("active");
		$('.screen_menu').removeClass("active");
		$('body').removeClass("overflow_body");
	   });
	}
   else {
	   $("#where_btn").click(function() {
    	window.location.replace("index#ContactUs");
	   });

	   $("#where_btn_inner").click(function() {
   		window.location.replace("index#contact");
	   });
   }
});
// End Header Contact Scroll

// Inquiry Form
$("#inquire_now").click(function() {
	$('.form_widget').addClass("active");
	$('body').addClass("overflow_body");
});
$(".form_widget .glyphicon-remove").click(function() {
	$('.form_widget').removeClass("active");
	$('body').removeClass("overflow_body");
});
//Hide field - For bot spammer
$(document).ready(
  function() {
    $('#MiddleName').hide()
  }
);

//End Inquiry Form

// Menu 
$('.hamburger').click(function(){
    $(this).toggleClass("active");
	$('.screen_menu').toggleClass("active");
	$('body').toggleClass("overflow_body");
});
// End Menu

// Back to Top 
$(function(){
  $(window).scroll(function(){
    var scrolled = $(window).scrollTop();
    if (scrolled > 200){ $('.go_top').fadeIn('slow');}
    if (scrolled < 200){ $('.go_top').fadeOut('slow');}
  });
  
  $('.go_top').click(function () {
    $("html, body").animate({ scrollTop: "0" },  500);
  });

});
// End Back to Top

// Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
// End Tooltip 

// Work Slider 
$('.owl-carousel-work').owlCarousel({
        loop:true,
        autoPlay: false,
        nav:false,
        dots: true,
        margin: 15,
        stopOnHover : true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },

            300:{
                items:1
            },
            479:{
                items:1
            },
            600:{
                items:1
            },
            768:{
                items:1
            },
            979:{
                items:1
            },
            1024:{
                items:1
            },
            1199:{
                items:1
            }
        }
    });
// End Work Slider

// Work
if($('.filter-list').length){
	$('.filter-list').mixItUp({});
}
// End Work

// Apply Online Scroll
$(".apply_online").click(function() {
    $('html, body').animate({
        scrollTop: $("#apply_online").offset().top
    }, 2000);
});
 $(document).ready(function(){
   $('.file_upload input[type="file"]').change(function(e){
       var fileName = e.target.files[0].name;
	   $('.file_upload input[type="text"]').val(fileName);
   });
});
// Apply Online Scroll

// Team Slider 
$('.owl-carousel-team').owlCarousel({
        loop:true,
        autoPlay: true,
        nav:true,
        dots: false,
        margin: 15,
        stopOnHover : true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },

            300:{
                items:1
            },
            479:{
                items:1
            },
            600:{
                items:1
            },
            768:{
                items:1
            },
            979:{
                items:1
            },
            1024:{
                items:1
            },
            1199:{
                items:1
            }
        }
    });
// End Team Slider

// Certificate Slider 
$('.owl-carousel-certificate').owlCarousel({
        loop:true,
        autoPlay: true,
        nav:false,
        dots: true,
        margin: 15,
        stopOnHover : true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },

            300:{
                items:1
            },
            479:{
                items:1
            },
            600:{
                items:1
            },
            768:{
                items:1
            },
            979:{
                items:1
            },
            1024:{
                items:1
            },
            1199:{
                items:1
            }
        }
    });
// End Certificate Slider
