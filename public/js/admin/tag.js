$(function(){

    $(".tag_detail img").click(function(){
        var pushedIndex = $("img").index(this);
        $( 'img').eq(pushedIndex).css("display","none");
        $( '.nametext').eq(pushedIndex).css("display","none");
        $( '.namecheck').eq(pushedIndex).css("display","none");
        $( '.replacetext').eq(pushedIndex).css("display","inline");
        $( '.replacesubmit').eq(pushedIndex).css("display","inline");

        $(document).click(function(event) {
            if(!$(event.target).closest('.replacetext,.replacesubmit,.tag_detail img').length) {
                $( 'img').css("display","inline");
                $( '.nametext').css("display","inline");
                $( '.namecheck').css("display","inline");
                $( '.replacetext').css("display","none");
                $( '.replacesubmit').css("display","none");
            }else if($(event.target).closest('.tag_detail img').length){
    
            }
        });
    })

    $(".tag_detail input[type=button]").click(function(){
        var pushedIndex = $("input.replacesubmit").index(this);
        var editName = $( '.replacetext').eq(pushedIndex).val();
        var editId = $( '.replacetext').eq(pushedIndex).attr("id");
        if(editName == ""){
            alert("tag名が空です。");
            return false;
        }
        $.ajax({
            headers: {
                // POSTのときはトークンの記述がないと"419 (unknown status)"になるので注意
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            // POSTだけではなく、GETのメソッドも呼び出せる
            type:'GET',
            // ルーティングで設定したURL
            url:'/admin/tag/edit/'+editId+'/'+editName, // 引数も渡せる
            dataType: 'json',
        }).done(function (results){
            // 成功したときのコールバック
            window.location.reload();

        }).fail(function(jqXHR, textStatus, errorThrown){
            // 失敗したときのコールバック
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        });

    })

});