
// easeScroll js...............................................................................
 
 
/*jQuery(document).ready(function($) {
	
	$("html").easeScroll();
	
});*/

// easeScroll js End.......................................................................................

// Scroll top js..........................................................................................
 


jQuery(document).ready(function($) {
 
    $(document).on( 'scroll', function(){
 
    	if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}



// Scroll top js End......................................................................................


//-owl Slider...............................................................................

jQuery(document).ready(function($) {
    
	$('#banner .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
  	autoplay:true,
    autoplayTimeout:3000,
    animateIn: 'fadeIn', // add this
    animateOut: 'fadeOut', // and this
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
	





  $('#customer .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout: 2000,
    center:true,
    responsive:{
        0:{
            items:1
        },
        900:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
	
});

//-owl Slider End .....................................................................................


//-wow animation End ..............................................................................................

jQuery(document).ready(function($) {
	 
	 wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true,        // default
                    }
                    );
                    wow.init();
					
});
	  








