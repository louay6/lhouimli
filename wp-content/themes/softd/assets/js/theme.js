(function($) {
    'use strict';

    $('.hamburger').on('click', function() {
        $(this).toggleClass('is-active');
        $(this).next().toggleClass('nav-show')
    });	
	    /*--
    	Mobile Menu
    ------------------------*/
    $('.mobile-menu nav').meanmenu({
        meanScreenWidth: "990",
        meanMenuContainer: ".mobile-menu",
        onePage: true,
    });
    /*---------------------
    marquee active js 
    --------------------- */	
	$("marquee").hover(function(){
		this.stop();	
		},
		function(){
			this.start();
		}
	);
    // top quearys menu 
    var emsmenu = $(".em-quearys-menu i.t-quearys");
    var emscmenu = $(".em-quearys-menu i.t-close");
    var emsinner = $(".em-quearys-inner");
    emsmenu.on('click', function() {
        emsinner.addClass('em-s-open');
        $(this).addClass('em-s-hiddens');
        emscmenu.removeClass('em-s-hidden');
    });
    emscmenu.on('click', function() {
        emsinner.removeClass('em-s-open');
        $(this).addClass('em-s-hidden');
        emsmenu.removeClass('em-s-hidden');
    });
	
// classic Button
	$(".btn_w").addClass('a_active');
	
    var emsmenu1 = $(".btn_c");
    var emscmenu2 = $(".tx_op");
    var emsinner2 = $(".tx_cl");
    emsmenu1.on('click', function() {
        emsinner2.addClass('btn_block');
        emscmenu2.addClass('btn_none');
        $(".btn_w").removeClass('a_active');		
        $(".btn_c").addClass('a_active');		
        $(this).addClass('a_active');		
    });
	
    var emsmenu1 = $(".btn_w");
    var emscmenu2 = $(".tx_op");
    var emsinner2 = $(".tx_cl");
    emsmenu1.on('click', function() {
		emscmenu2.removeClass('btn_none');
		emsinner2.removeClass('btn_block');
		$(".btn_c").removeClass('a_active');
		$(".btn_w").addClass('a_active');
		$(this).addClass('a_active');
    });	

  // right sitebar quearys menu 
    var rightma = $(".right_sideber_menu i.openclass");
    var rightmi = $(".right_sideber_menu i.closeclass");
    var rightmir = $(".right_sideber_menu_inner");
    rightma.on('click', function() {
        rightmir.addClass('tx-s-open');
    });
    rightmi.on('click', function() {
        rightmir.removeClass('tx-s-open');

    });	
	
	// 6.HOME 2 HERO CAROUSEL
    $('.em-slick-slider-new').slick({
        dots: true,
        speed: 300,
        arrows: true,
        autoplay: true,
        fade: true,
        autoplaySpeed: 6000,
        responsive: [{
            breakpoint: 769,
            settings: {
                arrows: false,
            }
        }]
    });
	
/* witr_footer_carousel */
		$('.witr_footer_carousel').slick({
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3000,
			speed: 1000,					
			slidesToScroll: 1,
			arrows: false,
			dots: true,

		});

	if ($('.headrooma').length != 0) {
        // grab an element
        var myElement = document.querySelector(".headrooma");
        // construct an instance of Headroom, passing the element
        var headroom = new Headroom(myElement);
        // initialise
        headroom.init();
    }
	
    /*---------------------
    WOW active js 
    --------------------- */
    new WOW().init();
    /*--------------------------
     scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    // Venubox

    $('.venobox').venobox({

        numeratio: true,

        infinigall: true

    });
		
	    /*--
    	One Page Nav
    ----------------------------------- */
     var top_offset = $('.one_page').height() +0;
    $('.one_page .softd_menu .nav_scroll').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 1000,
         scrollOffset: top_offset,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
    });

    $(".nav_scroll > li:first-child").addClass("current");
    /* sticky nav 1 */
    $('.one_page').scrollToFixed({
        preFixed: function() {
            $(this).find('.scroll_fixed').addClass('prefix');
        },
        postFixed: function() {
            $(this).find('.scroll_fixed').addClass('postfix').removeClass('prefix');
        }
    });	
		
	/* sticky nav 2 */
    var headers1 = $('.trp_nav_area');
    $(window).on('scroll', function() {

        if ($(window).scrollTop() > 200) {
            headers1.addClass('hbg2');
        } else {
            headers1.removeClass('hbg2');
        }		

    });		
	
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});	

    /*--------------------------
    	blog messonary
    ---------------------------- */
    $('.bgimgload').imagesLoaded(function() {
        if ($.fn.isotope) {
            var $blogmassonary = $('.blog-messonary');
            $blogmassonary.isotope({
                itemSelector: '.grid-item',
                filter: '*',
                resizesContainer: true,
                layoutMode: 'masonry',
                transitionDuration: '0.8s'
            });

        };
    });

    /*--------------------------
    	single gallery
    ---------------------------- */
    $('.single_gallery').owlCarousel({
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1920: {
                items: 1
            }
        }
    })
    /*--------------------------
    	portfolio gallery post
    ---------------------------- */
    $('.portfolio_gallery_post').owlCarousel({
        nav: true,
		dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1920: {
                items: 1
            }
        }
    })
    /*--------------------
    	woo active 
    -----------------------------------*/

    $('.wp_related').owlCarousel({
        loop: false,
        autoplay: false,
        autoplayTimeout: 10000,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1300: {
                items: 3
            }
        }
    })
	    $('.witr_cross_car').owlCarousel({
        loop: false,
        autoplay: false,
        autoplayTimeout: 10000,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1000: {
                items: 1
            },
            1920: {
                items: 2
            }
        }
    })
    $('.recent-reviews').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 3000,
        dots: true,
        nav: false,
        navText: ["<i class='fa fa-long-arrow-left''></i>", "<i class='fa fa-long-arrow-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1 
            },
            1000: {
                items: 1
            },
            1920: {
                items: 1
            }
        }
    })

	
	// Mouse Direction Hover Iffect
	$('.single_protfolio').directionalHover();

	$('.single_protfolio').directionalHover({
		// CSS class for the overlay
		overlay: "em_port_content",
		// Linear or swing
		easing: "swing",
		speed: 50
	});	
		
	/* Bootstrap Accordion  */
	$('.faq-part .card').each(function () {
		var $this = $(this);
		$this.on('click', function (e) {
			var has = $this.hasClass('active');
			$('.faq-part .card').removeClass('active show');
			if (has) {
				$this.removeClass('active show');
			} else {
				$this.addClass('active show');
			}
		});
	});
	/* Nice select  */
	$('select.orderby').niceSelect();
    if ($('.service_slider').length > 0) {
        $('.service_slider').slick({
            autoplay: false,
            autoplaySpeed: 2000,
            speed: 300,
            slidesToShow: 5,
            dots: true,
            arrows: false,
        });
    }


	

})(jQuery);