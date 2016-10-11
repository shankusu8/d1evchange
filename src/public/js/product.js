/**
 * Created by admin on 2016/9/12.
 */
var ws={
    name:'wws',
    addWheel:function (obj,fn) {
        function fnWheel(ev){
            var oEvent = ev||event;
            var bDown = true;//true  向下   false   向上
            if(oEvent.wheelDelta){
                //wheelDelta
                if(oEvent.wheelDelta>0){
                    bDown=false;
                }else{
                    bDown=true;
                }
            }else{
                //detail
                if(oEvent.detail<0){
                    bDown=false;
                }else{
                    bDown=true;
                }
            }
            fn&&fn(bDown);
            oEvent.preventDefault&&oEvent.preventDefault();
            return false;
        }
        if(window.navigator.userAgent.indexOf('Firefox')!=-1){
            //DOMMouseScroll
            obj.addEventListener('DOMMouseScroll',fnWheel,false);
        }else{
            //onmousewheel
            obj.onmousewheel=fnWheel;
        }
    }
};

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