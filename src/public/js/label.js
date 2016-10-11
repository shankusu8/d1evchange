/**
 * Created by admin on 2016/9/17.
 */


$(function () {
    //字母锚链接
    //总览锚链接
    $('.ws-word-head .ws-selected').click(function(){
        var word=$(this).html();
        //ws-word-list-A
        $('html,body').animate({scrollTop:$('.ws-word-list-'+word).offset().top});
    });

});
