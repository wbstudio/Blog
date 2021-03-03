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
    setTimeout(function(){
        var swiperHeight = $(".swiper-slide_inner").outerHeight(true);
        $(".patern_01 .swiper-container").css("height", swiperHeight+30+"px");
        $(".patern_01 .swiper-button-prev").css("top", swiperHeight+16+"px");
        $(".patern_01 .swiper-button-next").css("top", swiperHeight+16+"px");
    },200);

    //画面幅サイズによるCSS
    var windowSize = $(window).width();
    if(windowSize < 321){
        $(".auther_mass .auther_name").css("font-size", "18px");
        $(".modal__content ul li").css("font-size", "14px");
        $("#auther_page .auther_mass img").css("top", "45px");
    }else if(windowSize < 376){
        $("#auther_page .auther_mass img").css("top", "27px");
        $("#auther_page .auther_mass img").css("right", "-0.5%");
    }else{
        $("#auther_page .auther_mass img").css("top", "15px");
    }

});