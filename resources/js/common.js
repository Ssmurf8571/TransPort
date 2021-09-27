$(window).on('load', function() {
/*------------------
Background Set
--------------------*/
$('.set-bg').each(function() {
    var bg = $(this).data('src');
    $(this).css('background-image', 'linear-gradient(0deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3)), url(' + bg + ')');
});
});


/*------------------
    Hero Slider
--------------------*/
$('.hero-slider').owlCarousel({
    loop: true,
    dots: false,
    mouseDrag: false,
    touchDrag: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items: 1,
    autoplay: true
});


/*------------------
Function Animated Numbers
--------------------*/
$(document).ready(function () {

    var show = true;
    var countbox = ".about-us";
    $(window).on("scroll load resize", function () {
        if (!show) return false;
        var w_top = $(window).scrollTop();
        var e_top = $(countbox).offset().top;
        var w_height = $(window).height();
        var d_height = $(document).height();
        var e_height = $(countbox).outerHeight();
        if (w_top + 1000 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
            $('.numerate').css('opacity', '1');
            $('.numerate').spincrement({
                thousandSeparator: "",
                duration: 17000
            });

            show = false;
        }
    });

});