$(function(){
    $(window).scroll(function() {
        var scroll = $(this).scrollTop();
        var protocol = $(location).attr('protocol');
        var domain = $(location).attr('host');
        if(scroll > 0){
            $("footer li").css("background","#FFF");
            $("footer li").css("border-right","1px solid #000");
            $("footer li a").css("color","#000");
            $("footer li a .menu_logo").attr('src', protocol+'//'+domain+'/images/test/logo_black.png');
        }else{
            $("footer li").css("background","#000");
            $("footer li").css("border-right","1px solid #FFF");
            $("footer li a").css("color","#FFF");
            $("footer li a .menu_logo").attr('src', protocol+'//'+domain+'/images/test/logo_white.png');
        }
    });

    var displayHeiht = $("#header").height();
    $(window).scroll(function() {
        var scroll = $(this).scrollTop();
        if(scroll > displayHeiht){
            $("#fixed_menu").css("background","#FFF");
            console.log("aaaaaaa");
        }else{
            $("#fixed_menu").css("background","#930000");
            console.log(scroll);
        }
    });

});