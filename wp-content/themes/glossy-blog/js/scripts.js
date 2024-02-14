jQuery( function($) {

    //Tab to top
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1){  
            jQuery('.scroll-to-top').addClass("show");
        }
        else{
            jQuery('.scroll-to-top').removeClass("show");
        }
    });

    jQuery(".scroll-to-top").on("click", function() {
        jQuery("html, body").animate({ scrollTop: 0 }, 300);
        return false;
    });
    
    jQuery(window).scroll(function (event) {
        if (jQuery(window).scrollTop() > 500) {
            jQuery('.scroll-to-top').show();
        }
        else {
            jQuery('.scroll-to-top').hide();
        };
    });
    //Tab to top 


    jQuery('#nav-icon3').click(function(){
		jQuery(this).toggleClass('open');
	});

    
    $('.blog-grid-view').masonry({
        // options
        itemSelector: '.type-post',
        // columnWidth: 300
      });


} );