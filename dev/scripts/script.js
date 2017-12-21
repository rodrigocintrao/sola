$(function(){
    var menuMobile = $('.menu-mobile-active');

    menuMobile.on('click', function(){
        $(this).toggleClass('active');
        $('.menu-mobile').toggle();
    });
});