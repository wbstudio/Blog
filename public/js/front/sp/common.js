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
        $(".patern_01 .swiper-container").css("height", swiperHeight + 50 +"px");
        $(".patern_01 .swiper-button-prev").css("top", swiperHeight + 36 +"px");
        $(".patern_01 .swiper-button-next").css("top", swiperHeight + 36 +"px");
    },200);

    //
    var imgWidth = $(".article_mass img").css("width");
    if(imgWidth != undefined){
        var numWidth = imgWidth.split("px");
        var numHeight = numWidth[0] * 150/190;
        $(".article_mass img").css("height",numHeight+"px");
    }
    //
    var sliderImgWidth = $(".swiper-slide_inner img").css("width");
    if(sliderImgWidth != undefined){
        var sliderNumWidth = sliderImgWidth.split("px");
        var sliderNumHeight = sliderNumWidth[0] * 150/190;
        $(".swiper-slide_inner img").css("height",sliderNumHeight+"px");
    }
    //続きを読むbutton
    $('.hidden_area_open').readmore({
        speed: 750,
        collapsedHeight: 41,
        moreLink: '<a class="btn" href="#"><span>...[続きを読む]</span></a>',
        lessLink: '<a class="btn_close" href="#"><span>閉じる</span></a>'
    });

    //ckEditor内のimg
    $(".article_main img").css("height", "auto");

    //footter+menuアコーディオン
    $(function(){

        $("h4.footer_accordion").on("click", function() {
            $(this).next().slideToggle();

            if($(this).find("img").hasClass('down')){
                $(this).find("img").removeClass('down');
                $(this).find("img").addClass('up');
            }else if($(this).find("img").hasClass('up')){
                $(this).find("img").removeClass('up');
                $(this).find("img").addClass('down');
            }
        });

        $(".modal__content .display_other").on("click", function() {
            $(this).next().slideToggle();

            if($(this).find(".go_button").hasClass('down')){
                $(this).find(".go_button").removeClass('down');
                $(this).find(".go_button").addClass('up');
            }else if($(this).find(".go_button").hasClass('up')){
                $(this).find(".go_button").removeClass('up');
                $(this).find(".go_button").addClass('down');
            }
        });

    });
});



