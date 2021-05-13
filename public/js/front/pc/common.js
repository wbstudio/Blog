$(function(){

    //blog部分のimg
    $(".article_main img").css("height", "auto");

    //topのアコーディオン
    $('.has-sub').mouseover(function(){
        //マウスを乗せたときの処理
        $(this).find("ul.sub").stop().slideDown();
    }).mouseout(function(){
        //マウスが外れたときの処理
        $(this).find("ul.sub").stop().slideUp();
    });
    
});
