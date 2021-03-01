$(function(){
    //humbergerMenu
    $('.menu_icon').on('click',function(){
        $('.js-modal').fadeIn();
        return false;
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });

    //sliderHight
    var swiperHeight = $(".swiper-slide_inner").outerHeight(true);
    console.log(swiperHeight);
    $(".patern_01 .swiper-container").css("height", swiperHeight+30+"px");
    $(".patern_01 .swiper-button-prev").css("top", swiperHeight+16+"px");
    $(".patern_01 .swiper-button-next").css("top", swiperHeight+16+"px");


});