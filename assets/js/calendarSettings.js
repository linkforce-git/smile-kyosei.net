$(function(){
    /* ********************************************
    //   カレンダー設定（jquery-ui用）
    /* ******************************************** */

    // 祝日の取得
    let nationalHolidayTimeSet = new Set();
    $.get('https://holidays-jp.github.io/api/v1/date.json', function(dateJson){
        let holidaySet = Object.keys(dateJson);
        holidaySet.forEach(holiday => {
            let ymd = holiday.split('-');
            nationalHolidayTimeSet.add(new Date(ymd[0], ymd[1]-1, ymd[2]).getTime());
        });
        // カレンダー1つ目
        $("#date1").datepicker(createCalendarOption('time1')).blur();
        // カレンダー2つ目
        $("#date2").datepicker(createCalendarOption('time2')).blur();
    });
    // 祝日の判定（祝日ならtrueを返す）
    function isNationalHolidays(date) {
        if (nationalHolidayTimeSet.has(date.getTime())) return true;
        return false;
    }

    // 臨時休診日の設定
    let businessHolidayTimeSet = new Set();
    let businessHolidaySet = new Set([
        '2025-08-12',
        '2025-08-15',
        '2025-08-31',
    ]);
    businessHolidaySet.forEach(holiday => {
        let ymd = holiday.split('-');
        businessHolidayTimeSet.add(new Date(ymd[0], ymd[1]-1, ymd[2]).getTime());
    });
    // 臨時診療日の設定
    let workdayTimeSet = new Set();
    let workdaySet = new Set([
        '2023-08-17',
    ]);
    workdaySet.forEach(workday => {
        let ymd = workday.split('-');
        workdayTimeSet.add(new Date(ymd[0], ymd[1]-1, ymd[2]).getTime());
    });
    // 休診日の判定（休診日ならtrueを返す）
    function isBusinessHoliday(date) {
        // 例外的に“診療日”として予約可能にする日（本来は休診日）
        if (workdayTimeSet.has(date.getTime())) return false;
        // 個別設定した臨時休診日
        if (businessHolidayTimeSet.has(date.getTime())) return true;
        // 水,木曜日
        if (date.getDay() === 3 || date.getDay() === 4) return true;
        // 年末年始
        if ((date.getMonth() === 11 && date.getDate() >= 30) || (date.getMonth() === 0 && date.getDate() <= 4)) return true;

        return false;
    }

    let tmpDate = new Date();
    let today = new Date(tmpDate.getFullYear(), tmpDate.getMonth(), tmpDate.getDate());
    let workMinDate = 2; //中1営業日（基本は2日後以降が選択可能）
    // 2日後までに休診日があったらその分選択可能な日付を後ろにずらす（営業日換算にする）
    for (let i = 1; i <= workMinDate; i++) {
        tmpDate.setTime(today.getTime()); //今日の日付をセット
        tmpDate.setDate(tmpDate.getDate() + i); //i日後
        if (isBusinessHoliday(tmpDate)) {
            workMinDate++;
        }
    }

    // カレンダーオプション
    function createCalendarOption(calenderID) {
        let option = {
            dateFormat: "yy年mm月dd日（D）",
            closeText: "閉じる",
            prevText: "&#x3C;前",
            nextText: "次&#x3E;",
            currentText: "今日",
            monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
            monthNamesShort: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
            dayNames: ["日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日"],
            dayNamesShort: ["日", "月", "火", "水", "木", "金", "土"],
            dayNamesMin: ["日", "月", "火", "水", "木", "金", "土"],
            weekHeader: "週",
            isRTL: false,
            showMonthAfterYear: true,
            yearSuffix: "年",
            //firstDay: 1, // 週の初めは月曜
            //showButtonPanel: true, // "今日"ボタン, "閉じる"ボタンを表示する
            minDate: workMinDate, // 指定した日数後から選択可能
            //maxDate: workMinDate+60, // そこから60日後まで選択可能
            beforeShow: function() {
                setTimeout(function(){
                    $('.ui-datepicker').css('z-index', 1000);
                }, 0);
            },
            beforeShowDay: function(date) {
                return [!isBusinessHoliday(date)];
            },
            onSelect: function (dateText, inst) {
                var date = $(this).datepicker('getDate'); // 選択年月日
                var dayOfWeek = date.getDay();  // 曜日

                // 時刻リセット
                $('.'+calenderID).fadeOut(0);
                $('.'+calenderID + ' input').prop('disabled', false);
                $('.'+calenderID + ' input').prop('checked', false);
                $(this).parent().next().addClass('active'); // activeへ変更

                // class名で制御。曜日別に以下のclass指定がある場合は表示する
                // .type1：通常営業時間（月、火、金、土）
                // .type2：変則営業時間（該当なし）
                // .type3：半日営業時間（日、祝）
                if (dayOfWeek === 0 || isNationalHolidays(date)) {
                    // 日曜、祝日
                    $('.'+calenderID + '.type3').fadeIn(0);
                } else {
                    // 平日
                    $('.'+calenderID + '.type1').fadeIn(0);
                }
            }
        };
        return option;
    }
});
