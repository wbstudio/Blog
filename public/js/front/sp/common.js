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
        $(".patern_01 .swiper-container").css("height", swiperHeight + 30 +"px");
        $(".patern_01 .swiper-button-prev").css("top", swiperHeight + 16 +"px");
        $(".patern_01 .swiper-button-next").css("top", swiperHeight + 16 +"px");
    },200);

    //続きを読むbutton
    $('.hidden_area_open').readmore({
        speed: 750,
        collapsedHeight: 41,
        moreLink: '<a class="btn" href="#"><span>...[続きを読む]</span></a>',
        lessLink: '<a class="btn_close" href="#"><span>閉じる</span></a>'
    });

    //ckEditor内のimg
    $(".article_main img").css("height", "auto");

});



