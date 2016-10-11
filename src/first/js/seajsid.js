/**
 * Created by admin on 2016/9/28.
 */
// 所有模块都通过 define 来定义
define(function(require, exports, module) {

    // 通过 require 引入依赖
    var $ = require('http://www.d1ev.com/new2016/src/external/js/jquery.1.7.2.min.js');
    var headroom = require('headroom');

    console.log(222);
    
    console.log($.fn.jquery);
    $(".ws-fix-head").headroom({
        tolerance: 5,
        offset: 205,
        classes: {
            initial: "animated",
            pinned: "fadeInDown",
            unpinned: "fadeOutUp"
        }
    });

    //搜索
    $('.ws-nav-searchIcon').click(function () {
        $('.ws-searchboxBg').show();

    });
    $('.ws-searchbox-close').click(function () {
        $('.ws-searchboxBg').hide();
    });

    $('.search-all-form-q').keydown(function (e) {
        //console.log(e);
        if (e.keyCode === 13) {
            var _keywords = $('.search-all-form-q');
            if (!_keywords.val()) {
                return false;
            }
            $('.search-all-form').submit();
            //window.location.href = 'http://www.d1ev.com/search.html?q=' + _keywords.val();
        }
    });
    $('.search-all-form-submit').click(function () {
        var _keywords = $('.search-all-form-q');
        console.log(_keywords);
        if (!_keywords.val()) {
            return false;
        }
        $('.search-all-form').submit();
        //window.location.href = 'http://www.d1ev.com/search.html?q=' + _keywords.val();
    });

    $('.ws-searchbox-historyH2').click(function () {
        $.ajax({
            url: 'http://www.d1ev.com/contents/index/clearsearch',
            type: 'post',
            success: function (data) {
                console.log(data);
                if ($.trim(data) == 1) {
                    console.log('cg');
                    $('.ws-searchbox-historyC').html('');
                }
            }
        });
    });

    //登录与注册
    var timer = null;
    $(document).on('mouseover', '.ws-nav-headmap', function () {
        clearTimeout(timer);
        $('.ws-nav-users').show();
        $('.ws-nav-users').addClass('ws-nav-usersAnimate');
    });
    $(document).on('mouseout', '.ws-nav-headmap', function () {
        timer = setTimeout(function () {
            $('.ws-nav-users').hide();
            $('.ws-nav-users').removeClass('ws-nav-usersAnimate');
        }, 200);
    });
    $(document).on('mouseover', '.ws-nav-users', function () {
        clearTimeout(timer);
        //$('.ws-nav-users').show();
    });
    $(document).on('mouseout', '.ws-nav-users', function () {
        timer = setTimeout(function () {
            $('.ws-nav-users').hide();
            $('.ws-nav-users').removeClass('ws-nav-usersAnimate');
        }, 200);
    });

    // 通过 exports 对外提供接口
    //exports.doSomething = ...
    // 或者通过 module.exports 提供整个接口
    //module.exports = ...

});