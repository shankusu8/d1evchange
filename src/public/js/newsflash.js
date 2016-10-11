/**
 * Created by admin on 2016/9/12.
 */


$(function () {
    //热文榜
    $('.ws-hotdoc-tabhDiv').click(function () {
        $('.ws-hotdoc-tabhDiv').removeClass('ws-active').eq($(this).index()).addClass('ws-active');
        $('.ws-hotdoc-tabc .ws-hotdoc-tabcon').hide().eq($(this).index()).show();

    });
});


$(function () {
    //时间转换
    $.timeago.settings.strings = {
        prefixAgo: null,
        prefixFromNow: "从现在开始",
        suffixAgo: "前",
        suffixFromNow: null,
        seconds: "1分钟",
        minute: "1分钟",
        minutes: "%d分钟",
        hour: "1小时",
        hours: "%d小时",
        day: "1天",
        days: "%d天",
        month: "1个月",
        months: "%d月",
        year: "1年",
        years: "%d年",
        numbers: [],
        wordSeparator: ""
    };
    jQuery.timeago.settings.cutoff = 1000*60*60*24;
    $('time.timeago').timeago();
});

