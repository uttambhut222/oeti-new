﻿//career script
$('.apply_now').click(function(){ 
    $('#selectoption').val($(this).data('val')).trigger('change');
})
//career script


//script for process circle slider
let i=2;

	
	$(document).ready(function(){
		$('.dotCircle').css({
				"transform":"rotate("+(360)+"deg)",
				"transition":"2s"
			});
		var radius = 500;
		var fields = $('.itemDot');
		var container = $('.dotCircle');
		var width = container.width();
 radius = width/2.35;
 
		 var height = container.height();
		var angle = 36, step = (2*Math.PI) / fields.length;
		fields.each(function() {
			var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
			var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
			if(window.console) {
				console.log($(this).text(), x, y);
			}
			
			$(this).css({
				left: x + 'px',
				top: y + 'px'
			});
			angle += step;
		});
		
		
		$('.itemDot').click(function(){
			
			var dataTab= $(this).data("tab");
			$('.itemDot').removeClass('active');
			$(this).addClass('active');
			$('.CirItem').removeClass('active');
			$( '.CirItem'+ dataTab).addClass('active');
			i=dataTab;
			
			$('.dotCircle').css({
				"transform":"rotate("+(360-(i-1)*36)+"deg)",
				"transition":"2s"
			});
			$('.itemDot').css({
				"transform":"rotate("+((i-1)*36)+"deg)",
				"transition":"1s"
			});
			
			
		});
		
		setInterval(function(){
			var dataTab= $('.itemDot.active').data("tab");
			if(dataTab>10||i>10){
			dataTab=1;
			i=1;
			}
			$('.itemDot').removeClass('active');
			$('[data-tab="'+i+'"]').addClass('active');
			$('.CirItem').removeClass('active');
			$( '.CirItem'+i).addClass('active');
			i++;
			
			
			$('.dotCircle').css({
				"transform":"rotate("+(360-(i-2)*36)+"deg)",
				"transition":"2s"
			});
			$('.itemDot').css({
				"transform":"rotate("+((i-2)*36)+"deg)",
				"transition":"1s"
			});
			
			}, 5000);
		
	});
//script for process circle slider

// career toggle
function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
// career toggle

// Menu Active
$(document).ready(function() {
	var url = window.location.pathname;
	url = url.replace(".php","");
	url = url.replace("/oeti-new","");
    url = url.replace("/oeti","");
	url = url.replace("/OETI",""); 
	switch (url) {
    case '/AboutUs':
        $('#who').addClass('active');
		$('#aboutus').addClass('active');
		$('#who').addClass('open_db');
	break;
	 case '/Milestones':
        $('#who').addClass('active');
		$('#milestone').addClass('active');
		$('#who').addClass('open_db');
	break;	
	 case '/VisionMission':
        $('#who').addClass('active');
		$('#who').addClass('open_db');
		$('#visionmission').addClass('active');
	break;
	 case '/Family':
        $('#who').addClass('active');
		$('#Family').addClass('active');
		$('#who').addClass('open_db');
	break;				
	case '/Services':
        $('#What').addClass('active');
	break;			
	case '/Portfolio':
        $('#Work').addClass('active');
	break;
	case '/PortfolioDetail':
        $('#Work').addClass('active');
	break;
	case '/Process':
        $('#How').addClass('active');
	break;	
	case '/OurClients':
        $('#Whom').addClass('active');
	break;	
	case '/WhyUs':
        $('#Why').addClass('active');
		$('#chooseus').addClass('active');
		$('#Why').addClass('open_db');
	break;	
	case '/Career':
		$('#Why').addClass('active');
        $('#career').addClass('active');
		$('#Why').addClass('open_db');
	break;	
	case '/index#ContactUs':
        $('#Where').addClass('active');
	break;	
	}

});
// End Menu Active


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



//portfolio script
setInterval(function(){ 
	$(".col-project-box.active").next().addClass('active');  
    $(".col-project-box.active").prev().removeClass('active');   
	$(".section-bg.active").next().addClass('active');  
	$(".section-bg.active").prev().removeClass('active');
	if($("#last_block").hasClass("active")){
		setTimeout(function(){ 
			//alert("asdfgsafas");
			$(".col-project-box").removeClass('active');   
			$(".col-project-box:first-child").addClass('active');  
			$(".section-bg").removeClass('active');
			$(".section-bg:first-child").addClass('active');  
		}, 5000);
	}	
}, 10000);

if($(".roadmap__events__event:last-child").attr("style")){
	setTimeout(function(){ 
		//alert("asdfgsafas");
		$(".col-project-box").removeClass('active');   
		$(".col-project-box:first-child").addClass('active');  
		$(".section-bg").removeClass('active');
		$(".section-bg:first-child").addClass('active');  
	}, 5000);
}	

$(document).ready(function() {
	$('.roadmap__navigation .next').click(function(){
		setTimeout(function(){ 
			var lefttimeline = $(".roadmap__events .roadmap__events__event:last-child").css("left");
			//alert(lefttimeline);
			const body = document.querySelector('body');
			body.style.setProperty('--width-left', lefttimeline);

			$('.roadmap__navigation .prev').click(function(){
				setTimeout(function(){ 
					var lefttimeline = $(".roadmap__events .roadmap__events__event:last-child").css("left");
					body.style.setProperty('--width-left', lefttimeline);
				}, 300); 
			});
		}, 300); 
	});
});






//Hide field - For bot spammer
$(document).ready(
  function() {
    $('#MiddleName').hide()
  }
);

( function($) {
  'use strict';
  

  
	var navbar=$('.js-navbar:not(.navbar-fixed)');


	$(window).on('load', function(){

		$('.loader').fadeOut(1000);
	});

	//for bootstrap carousel
	$('.carousel').carousel()

	
	//owl-carousel
	$('.owl_carousel_services').owlCarousel({
        loop:true,
        autoPlay: true,
        nav:true,
        dots: false,
        margin: 0,
		mouseDrag: false,
		touchDrag: false,
		pullDrag: false,
		/* animateOut: 'fadeOut', */
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
	})
	if(window.location.href.indexOf("?id") > -1) {
		$.urlParam = function(name){
			var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
			return results[1] || 0;
		}
		//alert($.urlParam('id'));
		var toIndex = $.urlParam('id');
		$(".owl_carousel_services").trigger("to.owl.carousel", [toIndex, 1, true]);
	 }


	// career form 			
		$('.apply_now').click(function(){
		$('.screen_menu').addClass("active");
		$('body').addClass("overflow_body");
		});
	
		$(".screen_menu #close_career").click(function() {
		$('.screen_menu').removeClass("active");
		$('body').removeClass("overflow_body");
	   });
	// End career form
	
	// contact form 			
		$('header .content_form .inquire_now').click(function(){
		$('.contcact_form').addClass("active");
		$('body').addClass("overflow_body");
		});
	
		$(".contcact_form .close-menu").click(function() {
		$('.contcact_form').removeClass("active");
		$('body').removeClass("overflow_body");
	   });
	// End contact form
	
	
	/*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/



	navbar.affix({
	  offset: {
	    top: 50
	  }
	});


	navbar.on('affix.bs.affix', function() {
		if (!navbar.hasClass('affix')){
			navbar.addClass('animated slideInDown');
		}
	});

	navbar.on('affixed-top.bs.affix', function() {
	  	navbar.removeClass('animated slideInDown');
	  	
	});

	$('.nav-mobile-list li a[href="#"]').on('click',function(){
		$(this).closest('li').toggleClass('current');
		$(this).closest('li').children('ul').slideToggle(200);
		return false;
	});



	// Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
// End Tooltip 
	
	
	
	/*-------------------------------------------------------------------------------
	  Menu
	-------------------------------------------------------------------------------*/



	$('.navbar-toggle').on('click',function(){
		$('body').removeClass('menu-is-closed').addClass('menu-is-opened');
	});

	$('.close-menu, .click-capture').on('click', function(){
		$('body').removeClass('menu-is-opened').addClass('menu-is-closed');
		$('.menu-list ul').slideUp(300);
	});


	/*-------------------------------------------------------------------------------
	  Owl Carousel
	-------------------------------------------------------------------------------*/


	if ($('.owl-carousel').length > 0){

	   $(".review-carousel").owlCarousel({
			responsive:{
		       0:{
		            items:1
		        },
		        720:{
		            items:1,
		            
		        },
		        1280:{
		            items:1
		        }
		    },
		    responsiveRefreshRate:0,
			nav:true,
			navText:[],
			animateIn: 'fadeIn',
		 	dots:false
		});

	}


	/*-------------------------------------------------------------------------------
	  Full screen sections 
	-------------------------------------------------------------------------------*/



    if ($('.pagepiling').length > 0){

      	$('.pagepiling').pagepiling({
    		scrollingSpeed: 280,
		     loopBottom: false,
        loopTop: false,
		verticalCentered: true,
		direction: 'vertical',
		    anchors: ['WelcomeOpenEyes', 'AboutOpenEyes', 'OurPortfolio', 'OurServices', 'OurClients', 'ContactUs'],
			 navigation: {
          'position': 'right',
          'tooltips': ['Welcome', 'Who we are', 'What we have done', 'What we do', 'Whom we serve', 'Where we are']
        },
			
		    afterLoad: function(anchorLink, index){
	            if ( $('.pp-section.active').scrollTop() > 0 ){
	            	$('.navbar').removeClass('navbar-white');
	            }
	            else{
	            	$('.navbar').addClass('navbar-white');
	            }
	            
  			}
		});



		/*-------------------------------------------------------------------------------
		   Scroll into sections 
		/-------------------------------------------------------------------------------*/



		$('.pp-scrollable').on('scroll', function () {
    		var scrollTop =$(this).scrollTop();
    		if (scrollTop > 0 ) {
    			$('.navbar-2').removeClass('navbar-white');
    		}
    		else{
    			$('.navbar-2').addClass('navbar-white');
    		}
		});



		/*-------------------------------------------------------------------------------
		   Scroller navigation
		/-------------------------------------------------------------------------------*/



		$('#pp-nav').remove().appendTo('body').addClass('white right-boxed hidden-xs');

		$('.pp-nav-up').on('click', function(){
			$.fn.pagepiling.moveSectionUp();
		});

		$('.pp-nav-down').on('click', function(){
			$.fn.pagepiling.moveSectionDown();
		});
    } 



    /*-------------------------------------------------------------------------------
	  Change bacgkround on project section
	-------------------------------------------------------------------------------*/



    $('.project-box').on('mouseover',function(){
    	var index = $('.project-box').index(this);
    	$('.bg-changer .section-bg').removeClass('active').eq(index).addClass('active');
    });



	/*-------------------------------------------------------------------------------
	  Ajax Forms
	-------------------------------------------------------------------------------*/



	if ($('.js-form').length) {
		$('.js-form').each(function(){
			$(this).validate({
				errorClass: 'error wobble-error',
			    submitHandler: function(form){
		        	$.ajax({
			            type: "POST",
			            url:"mail.php",
			            data: $(form).serialize(),
			            success: function() {
			            	$('#error').modal('hide');
		                	$('#success').modal('show');
		                },

		                error: function(){
		                	$('#success').modal('hide');
			                $('#error').modal('show');
			            }
			        });
			    }
			});
		});
	}

	
	//for hide pipeline
	/* var url = window.location.pathname;
	url = url.replace(".php","");
	if ( url === '/' || url === '/index'){ 
    	$("#pp-nav").click(function() {
			$('html, body').animate({
				scrollTop: $("#contact").offset().top
			}, 2000);
		});
	}
	else{
		
	}; */
	//for hide pipeline
	
	// script for tab steps
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var href = $(e.target).attr('href');
        var $curr = $(".process-model  a[href='" + href + "']").parent();

        $('.process-model li').removeClass();

        $curr.addClass("active");
        $curr.prevAll().addClass("visited");
    });
// end  script for tab steps
	
	
	
})(jQuery);

$('.file_upload input[type="file"]').change(function(e){
	var fileName = e.target.files[0].name;
	$('.file_upload input[type="text"]').val(fileName);
});

$(document).ready(function(){
  $(".career_box_content a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});

//career slider
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	dots:false,
	responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
		480:{
            items:2
        },
		767:{
            items:2
        },
        992:{
            items:3
        },
		1280:{
			items:4
		}
    }
})
//end career slider


