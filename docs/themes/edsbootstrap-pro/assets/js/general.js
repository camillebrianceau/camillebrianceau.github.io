jQuery(function($) {

    'use strict';

    /*-----------------------------------------------------------------
     * Variables
     *-----------------------------------------------------------------*/

    var $body_html = jQuery('body, html'),
        $html = jQuery('html'),
        $body = jQuery('body'),

        $navigation = jQuery('#navigation'),
        navigation_height = $navigation.height() - 20,

        $scroll_to_top = jQuery('#scroll-to-top'),

        $preloader = jQuery('#preloader'),
        $loader = $preloader.find('.loader');

    if (navigation_height <= 0) navigation_height = 60;

    /*-----------------------------------------------------------------
     * Is mobile
     *-----------------------------------------------------------------*/

    var ua_test = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i,
        is_mobile = ua_test.test(navigator.userAgent);

    $html.addClass(is_mobile ? 'mobile' : 'no-mobile');
	/*-----------------------------------------------------------------
     * ScrollSpy
     *-----------------------------------------------------------------*/

   /* $body.scrollspy({
        offset:  51,
        target: '#navigation'
    });*/

    /*-----------------------------------------------------------------
     * Affixed Navbar
     *-----------------------------------------------------------------*/
	if( jQuery('.affix').length){
		jQuery('.affix').affix({
			offset: {
				top: navigation_height
			}
		});
	}

    /*-----------------------------------------------------------------
     * Dropdown By Click on Mobile
     *-----------------------------------------------------------------*/

    if (is_mobile) {
       jQuery('.dropdown-toggle').each(function() {
           jQuery(this).attr('data-toggle', 'dropdown');
        });
    }

    /*-----------------------------------------------------------------
     * Scroll To Top
     *-----------------------------------------------------------------*/

   jQuery(window).scroll(function () {

        var $scroll_top = jQuery(this).scrollTop();

        if ($scroll_top > navigation_height) {
            $scroll_to_top.addClass('in');
        } else {
            $scroll_to_top.removeClass('in');
        }
    });

    $scroll_to_top.click(function() {
        $.scrollWindow(0);
    });
	$.scrollWindow = function(offset) {
        $body_html.animate({
            scrollTop: offset
        }, 1500);
    };
 	/*-----------------------------------------------------------------
     * Smooth Scrolling
     *-----------------------------------------------------------------*/
	jQuery('.nav.navbar-nav.navbar-right a').click(function(e) {
		
		$('.navbar-collapse.collapse').removeClass('in');
		
	});
	
	jQuery('li.smooth-scroll a').click(function(e) {
			if( ! jQuery(this).hasClass('inside-page-link') ){
				e.preventDefault();
			}
			
			jQuery('#main-menu li').removeClass('active');
			var $this = jQuery(this),
				target = $this.attr('href');
			if(target.match(/#/g)){	
				var res = target.split("#");
				target = '#'+res[1];
			}
			// Don't return false!
			if (target == '#') return;
			var offset = $(target).offset().top - (navigation_height+30);
			$.scrollWindow(offset);
			$('.navbar-collapse').removeClass('in');
			
		});
	
		$.scrollWindow = function(offset) {
			$body_html.animate({
				scrollTop: offset
			}, 500);
		};
	if(jQuery('.scrollwatcher').length){
		jQuery('.scrollwatcher').hover(function(e) {
            e.preventDefault();
			var id = jQuery(this).attr('id');
			if( id != "" && jQuery('a[href="#'+ id +'"]').length && !jQuery('a[href="#'+ id +'"]').parent('li').hasClass('active')){
				jQuery('#main-menu li').removeClass('active');
				jQuery('a[href="#'+ id +'"]').parent('li').addClass('active');
			}
			
        });
		
		/*jQuery(window).scroll(function() {
		   var hT = jQuery('.scrollwatcher').offset().top,
			   hH = jQuery('.scrollwatcher').outerHeight(),
			   wH = jQuery(window).height(),
			   wS = $(this).scrollTop();
		   if (wS > (hT+hH-wH)){
			   alert('you have scrolled to the h1!');
		   }
		});*/
		
		
	}
	if(jQuery('#navigation .ddl-switch').length){
	
		jQuery('#navigation .ddl-switch').click(function(e) {
			e.preventDefault();
			$(this).parent('li').find('.dropdown-menu').toggle();
		});
	
	}
	/*-----------------------------------------------------------------
     * Carousels
     *-----------------------------------------------------------------*/

		// Home Page Slider
		if(jQuery(".slider").length){
			jQuery(".slider").owlCarousel({
				autoPlay              : true,
				singleItem            : true,
				responsive            : true,
				autoHeight            : true,
		
				mouseDrag             : true,
				touchDrag             : true,
		
				responsiveRefreshRate : 0,
				transitionStyle       : 'fadeUp',
				navigation        : true,
				navigationText    : [
				'<i class="fa fa-angle-left"></i>',
				'<i class="fa fa-angle-right"></i>'
				]
			});
		}
			 // Init carousel
		if(jQuery("#projects-list").length){	 
			 // Set Thumbs for Images
			var setThumbs = function() {
				$.each(this.owl.userItems, function(i) {
					jQuery('.owl-controls .owl-page').eq(i).css({
						'background': 'url(' + $(this).find('img').attr('src') + ')',
						'background-size': 'cover'
					})
				});
			};
			jQuery("#projects-list").owlCarousel({
				pagination        : true,
				navigation        : true,
				responsive        : true,
				singleItem        : true,
				autoPlay          : false,
		
				paginationSpeed   : 400,
				slideSpeed        : 300,
		
				itemsDesktop 	  : [1199, 3],
				itemsDesktopSmall : [991,2],
				itemsMobile 	  : [590,1],
				transitionStyle   : 'fadeUp',
		
				afterInit         : setThumbs,
				afterUpdate       : setThumbs,
		
				navigationText    : [
					'<i class="fa fa-angle-left"></i>',
					'<i class="fa fa-angle-right"></i>'
				]
			});
		}
		
if(jQuery("#relatedposts").length){			
		// Recent Projects
    jQuery("#relatedposts").owlCarousel({
        pagination        : false,
        navigation        : true,
        responsive        : true,
        autoPlay          : false,

        paginationSpeed   : 400,
        slideSpeed        : 300,

        items             : 4,
        itemsDesktop 	  : [1199, 4],
        itemsDesktopSmall : [991,2],
        itemsMobile 	  : [590,1],
        navigationText    : [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ]
    });
}
	
		// Home Page Testimonials Carousel
	if( jQuery("#testimonial-slider").length){
		jQuery("#testimonial-slider").owlCarousel({
			items:1,
			itemsDesktop:[1000,1],
			itemsDesktopSmall:[980,1],
			itemsTablet:[767,1],
			pagination:false,
			navigation:true,
			navigationText:["",""],
			slideSpeed:1000,
			autoPlay:true
		});
	}
	if( jQuery(".postGallery").length){
		 // Home Page Slider
		jQuery(".postGallery").owlCarousel({
			singleItem            : true,
			responsive            : true,
			autoHeight            : false,
			mouseDrag             : false,
			touchDrag             : false,
			responsiveRefreshRate : 0,
			transitionStyle       : 'fadeUp',
			pagination        : false,
			navigation        : true,
			navigationText    : [
					'<i class="fa fa-angle-left"></i>',
					'<i class="fa fa-angle-right"></i>'
				]

		});
	}
	
	
   /*-----------------------------------------------------------------
     * Magnific
     *-----------------------------------------------------------------*/

    jQuery('.image-popup').magnificPopup({
        closeBtnInside : true,
        type           : 'image',
        mainClass      : 'mfp-with-zoom'
    });

   /*-----------------------------------------------------------------
     * Background Parallax
     *-----------------------------------------------------------------*/

    $.stellar({
        responsive: true,
        horizontalOffset: 0,
        verticalOffset: 0,
        horizontalScrolling: false,
        hideDistantElements: false
    });

	/*-----------------------------------------------------------------
	* Project Fillter 
	*-----------------------------------------------------------------*/
	if(jQuery('#filter').length){
		jQuery('#filter a').click(function(e) {
            e.preventDefault();
			jQuery('#filter a').removeClass('active');
			var id=jQuery(this).data('filter');
			jQuery('#filtercontainer .item').addClass('edshide').removeClass('edsactive');
			jQuery('#filtercontainer .item'+id).addClass('edsactive').removeClass('edshide');
			jQuery(this).addClass('active');
        });
	}


    /*-----------------------------------------------------------------
     * Finish loading
     *-----------------------------------------------------------------*/

    jQuery(window).load(function() {
		
        /* Remove preloader */

        $loader.delay(1500).fadeOut();
        $preloader.delay(500).fadeOut('slow');

        $body.addClass('loaded');

    });

});