jQuery.noConflict();

jQuery(window).load(function(){

	// Hide & FadeIn elements on page load
	var $fadingelements = jQuery('.home .af-layout .entry-image, .home #content .entry-image-container, #content .entry-video-container, #content .entry-gallery-container');
	//following code has been commented out to disable transition
    $fadingelements.hide().fadeIn(500);
});

jQuery(document).ready(function(){

	// Add Superfish Drop Downs to the menu area
    jQuery("#access .menu-header .menu, #access .menu ul").superfish({ 
        delay:       400,                               // delay on mouseout 
        animation:   {opacity:'show',height:'show'},    // fade-in and slide-down animation 
        speed:       'fast',                            // faster animation speed 
		easing: 	 'easeInOutQuint',					// easing
        autoArrows:  false,                             // disable generation of arrow mark-up 
        dropShadows: false                              // disable drop shadows 
    }); 
    //preloadImage();

});

//preloading images - to fix images not showing before on hover on homepage
preloadImage = function () {
    jQuery('img').each(function() {
        jQuery(this).clone().wrap('<div class="imgPreLoad hide" />').appendTo('body');
    });
}