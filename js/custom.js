/***************************************************************************************************************
||||||||||||||||||||||||||||        CUSTOM SCRIPT FOR MUSEUM                       |||||||||||||||||||||||||||||
****************************************************************************************************************
||||||||||||||||||||||||||||              TABLE OF CONTENT                  ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
****************************************************************************************************************

01. Revolution slider
02. Sticky header
03. Prealoader
04. Language switcher
05. prettyPhoto
06. BrandCarousel
07. Testimonial carousel
08. ScrollToTop 
09. Cart Touch Spin
10. PriceFilter
11. Cart touch spin
12. Fancybox activator
13. ContactFormValidation
14. Scoll to target
15. PrettyPhoto

****************************************************************************************************************
||||||||||||||||||||||||||||            End TABLE OF CONTENT                ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************/

"use strict";


// dropdown menu
var mobileWidth = 992;
var navcollapse = $('.navigation li.dropdown');

$(window).on('resize', function(){
    navcollapse.children('ul').hide();
    navcollapse.children('.megamenu').hide();
});

navcollapse.hover(function() {
if($(window).innerWidth() >= mobileWidth){
      $(this).children('ul').stop(true, false, true).slideToggle(500);
      $(this).children('.megamenu').stop(true, false, true).slideToggle(500);
    }
});



//Submenu Dropdown Toggle
if($('.main-header .navigation li.dropdown ul').length){
    $('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');		

    //Dropdown Button
    $('.main-header .navigation li.dropdown .dropdown-btn').on('click', function() {
        $(this).prev('ul').slideToggle(500);
        $(this).prev('.megamenu').slideToggle(500);
    });

    //Disable dropdown parent link
    $('.navigation li.dropdown > a').on('click', function(e) {
        e.preventDefault();
    });
}



//Update Header Style and Scroll to Top
function headerStyle() {
    if($('.main-header').length){
        var windowpos = $(window).scrollTop();
        var siteHeader = $('.main-header');
        var scrollLink = $('.scroll-top');
        if (windowpos >= 250) {
            siteHeader.addClass('fixed-header');
            scrollLink.fadeIn(300);
        } else {
            siteHeader.removeClass('fixed-header');
            scrollLink.fadeOut(300);
        }
    }
}
headerStyle();


// Scroll to a Specific Div
if($('.scroll-to-target').length){
    $(".scroll-to-target").on('click', function() {
        var target = $(this).attr('data-target');
       // animate
       $('html, body').animate({
           scrollTop: $(target).offset().top
        }, 1000);

    });
}



//===Language switcher===
function languageSwitcher() {
    if ($("#polyglot-language-options").length) {
        $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
            effect: 'slide',
            animSpeed: 500,
            testMode: true,
            onChange: function(evt) {
                    alert("The selected language is: " + evt.selectedItem);
            }

        });
    };
}



//===Search box ===
function searchbox() {
	//Search Box Toggle
	if($('.seach-toggle').length){
		//Dropdown Button
		$('.seach-toggle').on('click', function() {
			$(this).toggleClass('active');
			$(this).next('.search-box').toggleClass('now-visible');
		});
	}
}


// Date picker
function datepicker () {
    if ($('#datepicker').length) {
        $('#datepicker').datepicker();
    };
}



// Time picker
function timepicker () {
    if ($('input[name="time"]').length) {
        $('input[name="time"]').ptTimeSelect();
    }
}



// ===Prealoder===
function prealoader() {
    if($('.preloader').length){
        $('.preloader').delay(200).fadeOut(500);
    }
}



//  Fact counter
function CounterNumberChanger () {
	var timer = $('.timer');
	if(timer.length) {
		timer.appear(function () {
			timer.countTo();
		})
	}
}



// Single Product Tab
function singleProductTab () {
    if($('.tabs-box').length){
        $('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
            e.preventDefault();
            var target = $($(this).attr('data-tab'));

            if ($(target).is(':visible')){
                return false;
            }else{
                target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
                $(this).addClass('active-btn');
                target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
                target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
                $(target).fadeIn(300);
                $(target).addClass('active-tab');
            }
        });
    }
}



// Price Filter
function priceFilter() {
    if ($('.price-ranger').length) {
        $('.price-ranger #slider-range').slider({
            range: true,
            min: 10,
            max: 200,
            values: [11, 99],
            slide: function(event, ui) {
                $('.price-ranger .ranger-min-max-block .min').val('$' + ui.values[0]);
                $('.price-ranger .ranger-min-max-block .max').val('$' + ui.values[1]);
            }
        });
        $('.price-ranger .ranger-min-max-block .min').val('$' + $('.price-ranger #slider-range').slider('values', 0));
        $('.price-ranger .ranger-min-max-block .max').val('$' + $('.price-ranger #slider-range').slider('values', 1));
    };
}



//Progress Bar / Levels
if($('.progress-levels .progress-box .bar-fill').length){
    $(".progress-box .bar-fill").each(function() {
        $('.progress-box .bar-fill').appear(function(){
            var progressWidth = $(this).attr('data-percent');
            $(this).css('width',progressWidth+'%');
        });

    },{accY: 0});
}



//Fact Counter + Text Count
if($('.count-box').length){
    $('.count-box').appear(function(){

        var $t = $(this),
            n = $t.find(".count-text").attr("data-stop"),
            r = parseInt($t.find(".count-text").attr("data-speed"), 10);

        if (!$t.hasClass("counted")) {
            $t.addClass("counted");
            $({
                countNum: $t.find(".count-text").text()
            }).animate({
                countNum: n
            }, {
                duration: r,
                easing: "linear",
                step: function() {
                    $t.find(".count-text").text(Math.floor(this.countNum));
                },
                complete: function() {
                    $t.find(".count-text").text(this.countNum);
                }
            });
        }

    },{accY: 0});
}



// Cart Touch Spin
function cartTouchSpin() {
    if ($('.quantity-spinner').length) {
        $("input.quantity-spinner").TouchSpin({
            verticalbuttons: true
        });
    }
}



//=== Tool tip ===
function tooltip () {
	if ($('.tool_tip').length) {
			$('.tool_tip').tooltip();
		};
	$
}



// ===Project===
function projectMasonaryLayout() {
    if ($('.masonary-layout').length) {
        $('.masonary-layout').isotope({
            layoutMode: 'masonry'
        });
    }
    if ($('.post-filter').length) {
        $('.post-filter li').children('.filter-text').on('click', function() {
            var Self = $(this);
            var selector = Self.parent().attr('data-filter');
            $('.post-filter li').removeClass('active');
            Self.parent().addClass('active');
            $('.filter-layout').isotope({
                filter: selector,
                animationOptions: {
                    duration: 500,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    }

    if ($('.post-filter.has-dynamic-filters-counter').length) {
        // var allItem = $('.single-filter-item').length;
        var activeFilterItem = $('.post-filter.has-dynamic-filters-counter').find('li');
        activeFilterItem.each(function() {
            var filterElement = $(this).data('filter');
            var count = $('.filter-layout').find(filterElement).length;
            $(this).children('.filter-text').append('<span class="count">' + count + '</span>');
        });
    };
}



function countryInfo() {
    if ($('.area_select').length) {
        $('.area_select').change(function() {
            var val = $(this).val();
            if (val) {
                $('.state:not(#value' + val + ')').slideUp();
                $('#value' + val).slideDown();
            } else {
                $('.state').slideDown();
            }
        });
    }
}



// Select Menu 
function selectDropdown() {
    if ($(".selectmenu").length) {
        $(".selectmenu").selectmenu();

        var changeSelectMenu = function(event, item) {
            $(this).trigger('change', item);
        };
        $(".selectmenu").selectmenu({ change: changeSelectMenu });
    };
}



//=== CountDownTimer===
function countDownTimer () {
	if ($('.time-countdown').length) {
		$('.time-countdown').each(function () {
			var Self = $(this);
			var countDate = Self.data('countdown-time'); // getting date

			Self.countdown(countDate, function(event) {
	     		$(this).html('<h2>'+ event.strftime('%D : %H : %M : %S') +'</h2>');
	   		});
		});
	};
	if ($('.time-countdown-two').length) {
		$('.time-countdown-two').each(function () {
			var Self = $(this);
			var countDate = Self.data('countdown-time'); // getting date

			Self.countdown(countDate, function(event) {
	     		$(this).html('<li> <div class="box"> <span class="days">'+ event.strftime('%D') +'</span> <span class="timeRef">days</span> </div> </li> <li> <div class="box"> <span class="hours">'+ event.strftime('%H') +'</span> <span class="timeRef clr-1">hours</span> </div> </li> <li> <div class="box"> <span class="minutes">'+ event.strftime('%M') +'</span> <span class="timeRef clr-2">minutes</span> </div> </li> <li> <div class="box"> <span class="seconds">'+ event.strftime('%S') +'</span> <span class="timeRef clr-3">seconds</span> </div> </li>');
	   		});
		});
	};
}



//Sortable Masonary with Filters
function sortableMasonry() {
    if($('.sortable-masonry').length){

        var winDow = $(window);
        // Needed variables
        var $container=$('.sortable-masonry .items-container');
        var $filter=$('.filter-btns');

        $container.isotope({
            filter:'*',
             masonry: {
                columnWidth : '.masonry-item'
             },
            animationOptions:{
                duration:500,
                easing:'linear'
            }
        });


        // Isotope Filter 
        $filter.find('li').on('click', function(){
            var selector = $(this).attr('data-filter');

            try {
                $container.isotope({ 
                    filter	: selector,
                    animationOptions: {
                        duration: 500,
                        easing	: 'linear',
                        queue	: false
                    }
                });
            } catch(err) {

            }
            return false;
        });


        winDow.on('resize', function(){
            var selector = $filter.find('li.active').attr('data-filter');

            $container.isotope({ 
                filter	: selector,
                animationOptions: {
                    duration: 500,
                    easing	: 'linear',
                    queue	: false
                }
            });
        });


        var filterItemA	= $('.filter-btns li');

        filterItemA.on('click', function(){
            var $this = $(this);
            if ( !$this.hasClass('active')) {
                filterItemA.removeClass('active');
                $this.addClass('active');
            }
        });
    }
}



//Masonary
function enableMasonry() {
    if($('.masonry-items-container').length){

        var winDow = $(window);
        // Needed variables
        var $container=$('.masonry-items-container');

        $container.isotope({
            itemSelector: '.masonry-item',
             masonry: {
                columnWidth : '.masonry-item.col-lg-4'
             },
            animationOptions:{
                duration:500,
                easing:'linear'
            }
        });

        winDow.bind('resize', function(){

            $container.isotope({ 
                itemSelector: '.masonry-item',
                animationOptions: {
                    duration: 500,
                    easing	: 'linear',
                    queue	: false
                }
            });
        });
    }
}
enableMasonry();
	
	


//=== Event Carousel ===
function eventCarousel () {
    if ($('.event-carousel').length) {
        $('.event-carousel').owlCarousel({
            dots: true,
            loop: true,
            margin: 30,
            stagePadding: 0,
            nav: false,
            navText: [
                '<span class="icon-arrow"></span>',
                '<span class="icon-arrow1"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:1
                },
                1200:{
                    items:2
                }
            }
        });    		
    }
}



//=== Blog Carousel ===
function blogCarousel () {
    if ($('.blog-carousel').length) {
        $('.blog-carousel').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            nav: true,
            navText: [
                '<span class="flaticon-left-arrow"></span>',
                '<span class="flaticon-arrow-pointing-to-right"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:2
                },
                1100:{
                    items:2
                },
                1200:{
                    items:2
                }
            }
        });    		
    }
}



//=== Blog Carousel Style2 ===
function blogCarouselStyle2 () {
    if ($('.blog-carousel-style2').length) {
        $('.blog-carousel-style2').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            nav: true,
            navText: [
                '<span class="flaticon-left-arrow"></span>',
                '<span class="flaticon-arrow-pointing-to-right"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:2
                },
                1100:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
        });    		
    }
}



//=== Blog Carousel Style3 ===
function blogCarouselStyle3 () {
    if ($('.blog-carousel-style3').length) {
        $('.blog-carousel-style3').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            nav: true,
            navText: [
                '<span class="flaticon-left-arrow"></span>',
                '<span class="flaticon-arrow-pointing-to-right"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:2
                },
                1200:{
                    items:2
                }
            }
        });    		
    }
}



//=== Event Carousel Style2 ===
function eventCarouselstyle2 () {
    if ($('.event-carousel-style2').length) {
        $('.event-carousel-style2').owlCarousel({
            dots: false,
            loop: true,
            margin: 0,
            nav: true,
            navText: [
                '<span class="flaticon-left-arrow"></span>',
                '<span class="flaticon-arrow-pointing-to-right"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:1
                },
                1200:{
                    items:1
                }
            }
        });    		
    }
}



//=== Art Carousel ===
function artCarousel () {
    if ($('.art-carousel').length) {
        $('.art-carousel').owlCarousel({
            dots: false,
            loop: true,
            margin: 40,
            nav: true,
            navText: [
                '<span class="flaticon-left-arrow"></span>',
                '<span class="flaticon-arrow-pointing-to-right"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:2
                },
                1024:{
                    items:2
                },
                1100:{
                    items:3
                },
                1200:{
                    items:3
                },
                1300:{
                    items:3
                },
                1400:{
                    items:4
                }
            }
        });    		
    }
}



//=== Art Carousel Style2===
function artCarouselStyle2 () {
    if ($('.art-carousel-style2').length) {
        $('.art-carousel-style2').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            nav: true,
            navText: [
                '<span class="flaticon-left-arrow"></span>',
                '<span class="flaticon-arrow-pointing-to-right"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:2
                },
                1200:{
                    items:2
                }
            }
        });    		
    }
}



//=== Testimonial Carousel ===
function testimonialCarousel () {
    if ($('.testimonial-carousel').length) {
        $('.testimonial-carousel').owlCarousel({
            dots: false,
            loop: true,
            margin: 0,
            nav: true,
            navText: [
                '<span class="flaticon-left-arrow"></span>',
                '<span class="flaticon-arrow-pointing-to-right"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:1
                },
                1200:{
                    items:1
                }
            }
        });    		
    }
}



//=== Exhibitions Carousel ===
function exhibitionsCarousel () {
    if ($('.exhibitions-carousel').length) {
        $('.exhibitions-carousel').owlCarousel({
            dots: true,
            loop: true,
            margin: 0,
            nav: false,
            navText: [
                '<span class="icon-arrow prev"></span>',
                '<span class="icon-arrow next"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:1
                },
                1200:{
                    items:1
                }
            }
        });    		
    }
}



//=== Testimonial Style2 Carousel ===
function testimonialStyle2Carousel () {
    if ($('.testimonial-carousel-style2').length) {
        $('.testimonial-carousel-style2').owlCarousel({
            dots: true,
            loop: true,
            margin: 0,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            nav: false,
            navText: [
                '<span class="icon-arrow prev"></span>',
                '<span class="icon-arrow next"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:1
                },
                1200:{
                    items:1
                }
            }
        });    		
    }
}



//=== Exhibitions Carousel Style2 ===
function exhibitionsCarouselStyle2 () {
    if ($('.exhibitions-carousel-style2').length) {
        $('.exhibitions-carousel-style2').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            nav: true,
            navText: [
                '<span class="flaticon-left-arrow"></span>',
                '<span class="flaticon-arrow-pointing-to-right"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:2
                },
                1100:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
        });    		
    }
}



//=== Recent Post Carousel ===
function recentPostCarousel () {
    if ($('.recent-post-carousel').length) {
        $('.recent-post-carousel').owlCarousel({
            dots: false,
            loop: true,
            margin: 0,
            nav: true,
            navText: [
                '<span class="flaticon-left-arrow"></span>',
                '<span class="flaticon-arrow-pointing-to-right"></span>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                },
                1100:{
                    items:1
                },
                1200:{
                    items:1
                },
                1300:{
                    items:1
                },
                1400:{
                    items:1
                }
            }
        });    		
    }
}























































































//Single Item Carousel
if ($('.single-item-carousel').length) {
    $('.single-item-carousel').owlCarousel({
        loop:true,
        margin:0,
        nav: false,
        smartSpeed: 500,
        autoplay: 5000,
        navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            800:{
                items:1
            },
            1024:{
                items:1
            },
            1200:{
                items:1
            }
        }
    });    		
}


//History Tabs
if($('.history-info-tabs').length){
    $('.history-info-tabs .tab-btns .p-tab-btn').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('data-tab'));

        if ($(target).hasClass('actve-tab')){
            return false;
        }else{
            $('.history-info-tabs .tab-btns .p-tab-btn').removeClass('active-btn');
            $(this).addClass('active-btn');
            $('.history-info-tabs .p-tabs-content .p-tab').removeClass('active-tab');
            $(target).addClass('active-tab');
        }
    });
}
	


//Hidden Sidebar
if ($('.hidden-bar').length) {
    var hiddenBar = $('.hidden-bar');
    var hiddenBarOpener = $('.hidden-bar-opener');
    var hiddenBarCloser = $('.hidden-bar-closer');
    var navToggler = $('.nav-toggler');
    $('.hidden-bar-wrapper').mCustomScrollbar();

    //Show Sidebar
    hiddenBarOpener.on('click', function () {
        hiddenBar.toggleClass('visible-sidebar');
        navToggler.toggleClass('open');
    });

    //Hide Sidebar
    hiddenBarCloser.on('click', function () {
        hiddenBar.toggleClass('visible-sidebar');
        navToggler.toggleClass('open');
    });
} 


//Accordion Box
if($('.accordion-box').length){
    $(".accordion-box").on('click', '.acc-btn', function() {

        var outerBox = $(this).parents('.accordion-box');
        var target = $(this).parents('.accordion');

        if($(this).hasClass('active')!==true){
            $(outerBox).find('.accordion .acc-btn').removeClass('active');
        }

        if ($(this).next('.acc-content').is(':visible')){
            return false;
        }else{
            $(this).addClass('active');
            $(outerBox).children('.accordion').removeClass('active-block');
            $(outerBox).find('.accordion').children('.acc-content').slideUp(300);
            target.addClass('active-block');
            $(this).next('.acc-content').slideDown(300);	
        }
    });	
}



















// Scroll To Explore Div
if($('.scroll-to-explore').length){
    $(".scroll-to-explore").on('click', function() {
        var target = $(this).attr('data-target');
       // animate
       $('html, body').animate({
           scrollTop: $(target).offset().top
         }, 1500);

    });
}


//LightBox / Fancybox
if($('.lightbox-image').length) {
    $('.lightbox-image').fancybox({
        openEffect  : 'fade',
        closeEffect : 'fade',
        
        youtube : {
        controls : 0,
        showinfo : 0
    },
        
        helpers : {
            media : {}
        }
    });
}


if($('.paroller').length){
    $('.paroller').paroller({
          factor: 0.05,            // multiplier for scrolling speed and offset, +- values for direction control  
          factorLg: 0.05,          // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
          type: 'foreground',      // background, foreground  
          direction: 'horizontal'  // vertical, horizontal  
    });
}


// Elements Animation
if($('.wow').length){
    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       false,       // trigger animations on mobile devices (default is true)
        live:         true       // act on asynchronously loaded content (default is true)
      }
    );
    wow.init();
}


// AOS Animation
if ($("[data-aos]").length) { 
    AOS.init({
    duration: 1000,
    mirror: true
  });
}



//Contact Form Validation
if($("#contact-form").length){
    $("#contact-form").validate({
        submitHandler: function(form) {
          var form_btn = $(form).find('button[type="submit"]');
          var form_result_div = '#form-result';
          $(form_result_div).remove();
          form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
          var form_btn_old_msg = form_btn.html();
          form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
          $(form).ajaxSubmit({
            dataType:  'json',
            success: function(data) {
              if( data.status = 'true' ) {
                $(form).find('.form-control').val('');
              }
              form_btn.prop('disabled', false).html(form_btn_old_msg);
              $(form_result_div).html(data.message).fadeIn('slow');
              setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
            }
          });
        }
    });
}


// Add Comment Form Validation
if($("#add-comment-form").length){
    $("#add-comment-form").validate({
        submitHandler: function(form) {
          var form_btn = $(form).find('button[type="submit"]');
          var form_result_div = '#form-result';
          $(form_result_div).remove();
          form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
          var form_btn_old_msg = form_btn.html();
          form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
          $(form).ajaxSubmit({
            dataType:  'json',
            success: function(data) {
              if( data.status = 'true' ) {
                $(form).find('.form-control').val('');
              }
              form_btn.prop('disabled', false).html(form_btn_old_msg);
              $(form_result_div).html(data.message).fadeIn('slow');
              setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
            }
          });
        }
    });
}









// Dom Ready Function
jQuery(document).on('ready', function () {
	(function ($) {
        // add your functions
        languageSwitcher ();
        searchbox ();
        datepicker ();
        timepicker ();
        
        CounterNumberChanger ();
        singleProductTab ();
        priceFilter ();
        cartTouchSpin ();
        selectDropdown ();
        tooltip ();
        countryInfo ();
        countDownTimer ();
        
  
     
  
        eventCarousel();
        blogCarousel();
        blogCarouselStyle2();
        blogCarouselStyle3();
        eventCarouselstyle2();
        artCarousel();
        artCarouselStyle2();
        testimonialCarousel();
        exhibitionsCarousel();
        testimonialStyle2Carousel();
        exhibitionsCarouselStyle2();
        recentPostCarousel();
        
        
        
      
     
      
        
        
  
        
        
        
    
     
   
       

   
 
	})(jQuery);
});



jQuery(window).on('scroll', function(){
	(function ($) {

    headerStyle ()  
    
	})(jQuery);
});



// Instance Of Fuction while Window Load event
jQuery(window).on('load', function() {
    (function($) {
        prealoader ();
        projectMasonaryLayout ();
        sortableMasonry();
        enableMasonry();
     
        
    })(jQuery);
});



$(window).enllax();