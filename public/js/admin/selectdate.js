$(function() {
    // 現在日時
    var current = new Date();
    var currentYear = current.getFullYear();
    var currentMonth = current.getMonth() + 1;
    var currentDate = current.getDate();
    var currentHours = current.getHours();
    var currentMinute = current.getMinutes();
    var endActiveFlag = $("input[name=endstatus]").prop("checked");
  
    // デフォルト
    var editReleaseFlag = $("input[name=hiddenrelease]").val();
    var editEndFlag = $("input[name=hiddenend]").val();
    var editReleaseDate = $("input[name=hiddenreleaseDate]").val();
    var editEndDate = $("input[name=hiddenendDate]").val();

    if(editReleaseFlag != 1){
        $('select[name=release_year] option[value=' + currentYear + ']').prop('selected', true);
        $('select[name=release_month] option[value=' + currentMonth + ']').prop('selected', true);
        $('select[name=release_hour] option[value=' + currentHours + ']').prop('selected', true);
        $('select[name=release_minute] option[value=' + currentMinute + ']').prop('selected', true);
        setReleaseDay();
        $('select[name=release_day] option[value=' + currentDate + ']').prop('selected', true);
    }else{
        setEditDate(editReleaseDate,"release");
    }

    if(editEndFlag != 1){
        $('select[name=end_year] option[value=' + currentYear + ']').prop('selected', true);
        $('select[name=end_month] option[value=' + currentMonth + ']').prop('selected', true);
        $('select[name=end_hour] option[value=' + currentHours + ']').prop('selected', true);
        $('select[name=end_minute] option[value=' + currentMinute + ']').prop('selected', true);
        setEndDay();
        $('select[name=end_day] option[value=' + currentDate + ']').prop('selected', true);
        if(!endActiveFlag){
            $('select[name=end_year]').prop('disabled', true);
            $('select[name=end_month]').prop('disabled', true);
            $('select[name=end_day]').prop('disabled', true);
            $('select[name=end_hour]').prop('disabled', true);
            $('select[name=end_minute]').prop('disabled', true);
        }
    }else{
        setEditDate(editEndDate,"end");
    }

    // 年/月 選択
    $('select[name=release_year], select[name=release_month]').change(function() {
        setReleaseDay();
    });
    $('select[name=end_year], select[name=end_month]').change(function() {
        setEndDay();
    });
    $("input[name=endstatus]").change(function() {
        if($(this).prop("checked") == true){
            $('select[name=end_year]').prop('disabled', false);
            $('select[name=end_month]').prop('disabled', false);
            $('select[name=end_day]').prop('disabled', false);
            $('select[name=end_hour]').prop('disabled', false);
            $('select[name=end_minute]').prop('disabled', false);
        }else{
            $('select[name=end_year]').prop('disabled', true);
            $('select[name=end_month]').prop('disabled', true);
            $('select[name=end_day]').prop('disabled', true);
            $('select[name=end_hour]').prop('disabled', true);
            $('select[name=end_minute]').prop('disabled', true);
        };
    });
      
    /**
     * 日プルダウンの制御
     */
    function setReleaseDay()
    {
      yearVal = $('select[name=release_year]').val();
      monthVal = $('select[name=release_month]').val();
  
      // 指定月の末日
      var t = 31;
      // 2月
      if (monthVal == 2) {
        //　4で割りきれる且つ100で割りきれない年、または400で割り切れる年は閏年
        if (Math.floor(yearVal%4) == 0 && Math.floor(yearVal%100) != 0 || Math.floor(yearVal%400) == 0) {
          t = 29;
        }  else {
          t = 28;
        }
        // 4,6,9,11月
      } else if (monthVal == 4 || monthVal == 6 || monthVal == 9 || monthVal == 11) {
        t = 30;
      }
  
      // 初期化
      $('select[name=release_day] option').remove();
      for (var i = 1; i <= t; i++){
        $('select[name=release_day]').append('<option value="' + i + '">' + i + '</option>');
      }
    }
    /**
     * 日プルダウンの制御
     */
    function setEndDay()
    {
      yearVal = $('select[name=end_year]').val();
      monthVal = $('select[name=end_month]').val();
  
      // 指定月の末日
      var t = 31;
      // 2月
      if (monthVal == 2) {
        //　4で割りきれる且つ100で割りきれない年、または400で割り切れる年は閏年
        if (Math.floor(yearVal%4) == 0 && Math.floor(yearVal%100) != 0 || Math.floor(yearVal%400) == 0) {
          t = 29;
        }  else {
          t = 28;
        }
        // 4,6,9,11月
      } else if (monthVal == 4 || monthVal == 6 || monthVal == 9 || monthVal == 11) {
        t = 30;
      }
  
      // 初期化
      $('select[name=end_day] option').remove();
      for (var i = 1; i <= t; i++){
        $('select[name=end_day]').append('<option value="' + i + '">' + i + '</option>');
      }
    }

    function setEditDate(Date,place)
    {
        var separateDate = Date.split(' ');
        var SepDate = separateDate[0].split('-');
        var SepTime = separateDate[1].split(':');
        $('select[name='+place+'_year] option[value=' + Number(SepDate[0]) + ']').prop('selected', true);
        $('select[name='+place+'_month] option[value=' + Number(SepDate[1]) + ']').prop('selected', true);
        $('select[name='+place+'_hour] option[value=' + Number(SepTime[0]) + ']').prop('selected', true);
        $('select[name='+place+'_minute] option[value=' + Number(SepTime[1]) + ']').prop('selected', true);
        if(place == "release"){
            setReleaseDay();
        }else if(place == "end"){
            setEndDay();
        }
        $('select[name='+place+'_day] option[value=' + Number(SepDate[2]) + ']').prop('selected', true);
        
    }

});