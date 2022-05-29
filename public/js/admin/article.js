
$(function(){

    ajustCategorySelect()

    $("select.auther").change(function() {
        ajustCategorySelect()
    })
});

function ajustCategorySelect(){
    var auther = $('select.auther').val();
    var autherCategory = $('select.auther option:selected').data('category');
    var autherCategoryArray = [];
    if (String(autherCategory).indexOf("|") !== -1) {
        autherCategoryArray = autherCategory.split('|');
    } else {
        autherCategoryArray.push(String(autherCategory));
    }

    if(auther != "" && autherCategory != ''){
        $("select.category").prop("disabled", false);
        var category = $("select.category option");

        for (var i=0; i<$(category).length; i++) {
            if (autherCategoryArray.includes($(category).eq(i).val())) {
                $(category).eq(i).css("display","block");
            } else {
                $(category).eq(i).css("display","none");
            }
        }
    }else{
        $("select.category").prop("disabled", true);
    }
}