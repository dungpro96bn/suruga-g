import './bootstrap';
import './UtCookie';
import './UtWindow';

//fadein
$(window).scroll(function () {
    $('.js-fadein').each(function () {
        var ptop = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > ptop - windowHeight) {
            $(this).addClass('scroll-in');
        }
    });
});

$('.js-fadein').each(function () {
    var ptop = $(this).offset().top;
    var firstView = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (firstView > ptop - windowHeight) {
        $(this).addClass('scroll-in');
    }
});

$(function(){
    $('.scroll').click(function(event){event.preventDefault();
        var url = $(this).attr('href');
        var dest = url.split('#');var target = dest[1];
        var target_offset = $('#'+target).offset();
        var target_top = target_offset.top;
        $('html, body').animate({scrollTop:target_top}, 500, 'swing');
        return false;});
});
