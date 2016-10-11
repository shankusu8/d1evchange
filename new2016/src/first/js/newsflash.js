/**
 * Created by admin on 2016/9/12.
 */
/*


$(function () {
    //登录与注册
    var timer=null;
    $(document).on('mouseover','.ws-nav-headmap',function () {
        clearTimeout(timer);
        $('.ws-nav-users').show();
        $('.ws-nav-users').addClass('ws-nav-usersAnimate');
    });
    $(document).on('mouseout','.ws-nav-headmap',function () {
        timer=setTimeout(function () {
            $('.ws-nav-users').hide();
            $('.ws-nav-users').removeClass('ws-nav-usersAnimate');
        },600);
    });
    $(document).on('mouseover','.ws-nav-users',function () {
        clearTimeout(timer);
        //$('.ws-nav-users').show();
    });
    $(document).on('mouseout','.ws-nav-users',function () {
        timer=setTimeout(function () {
            $('.ws-nav-users').hide();
            $('.ws-nav-users').removeClass('ws-nav-usersAnimate');
        },600);
    });
});

$(function () {
    //首页导航部分
    console.log(111)
    $(".ws-fix-head").headroom({
        tolerance: 5,
        offset: 205,
        classes: {
            initial: "animated",
            pinned: "fadeInDown",
            unpinned: "fadeOutUp"
        }
    });
});

*/


$(function () {
    //热文榜
    $('.ws-hotdoc-tabhDiv').click(function () {
        $('.ws-hotdoc-tabhDiv').removeClass('ws-active').eq($(this).index()).addClass('ws-active');
        $('.ws-hotdoc-tabc .ws-hotdoc-tabcon').hide().eq($(this).index()).show();

    });
});



