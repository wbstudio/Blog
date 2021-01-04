
$(function(){

    /************************************
     * auther-select
     * ---------------------------
     * useParameter
     * ・select.auther
     * ・select.auther_category
     * ・.auther_{auther}-auther_category-option
     * ---------------------------
     ************************************/
    //初期表示
    var autherHidden = $("input[name=autherhidden]").val();
    $("select.auther").val(autherHidden);
    if(autherHidden != undefined && autherHidden != ""){
        $("select.auther_category").prop("disabled", false);
        var authercategory = $("select.auther_category option");
        $(authercategory).each(function(index, element){
            if($(this).attr("class") == "auther_"+autherHidden){
                $(this).css("display","block");
            }else{
                $(this).css("display","none");
            }
        })
        var authercategoryHidden = $("input[name=authercategoryhidden]").val();
        setTimeout(function(){
            $("select.auther_category option.auther_"+autherHidden+"[value="+authercategoryHidden+"]").prop('selected', true);
        },100);
    }
    //change_event
    $("select.auther").change(function() {
        var auther = $(this).val();
        $("select.auther_category").val("");

        if(auther != ""){
            $("select.auther_category").prop("disabled", false);
            var autherCategory = $("select.auther_category option");
            $(autherCategory).each(function(index, element){
                if($(this).attr("class") == "auther_"+auther){
                    $(this).css("display","block");
                }else{
                    $(this).css("display","none");
                }
            })
        }else{
            $("select.auther_category").prop("disabled", true);
        }
    });


});