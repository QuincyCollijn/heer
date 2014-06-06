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


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-51442599-1', 'quincycollijn.nl');
ga('send', 'pageview');


(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&appId=1438322229756322&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

