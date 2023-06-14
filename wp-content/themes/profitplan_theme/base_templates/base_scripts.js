$(document).ready(function(){
    new WOW().init();

    const $header = $("body header#global_header")
    let prevScroll;
    let lastShowPos;

    $(window).on("scroll", function() {
        const scrolled = $(window).scrollTop();

        if (scrolled > 100 && scrolled > prevScroll) {
            $header.addClass("header-out");
            lastShowPos = scrolled;
        } else if (scrolled <= Math.max(lastShowPos - 250, 0)) {
            $header.removeClass("header-out");
        }
        prevScroll = scrolled;
    });
})