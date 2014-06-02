$(window).load(function() {
    $('.flexslider-main').flexslider({
        directionNav: false,
        slideshowSpeed: 6000,
    });
    $('.flexslider-match').flexslider({
        animation: "slide",
        slideshow: false,
        controlNav: false,
        animationLoop: false
    });
});

jQuery('ul.nav li.dropdown').hover(function() {
    jQuery(this).closest('.dropdown-menu').stop(true, true).show();
    jQuery(this).addClass('open');
}, function() {
    jQuery(this).closest('.dropdown-menu').stop(true, true).hide();
    jQuery(this).removeClass('open');
});
