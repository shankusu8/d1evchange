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
    //快讯

    var $bar=$('.ws-newsflash-scrollBar');
    var $doc = $(document);

    $('.ws-newsflash').hover(function () {
        $('.ws-newsflash-scroll').css('visibility','visible');
    },function () {
        $('.ws-newsflash-scroll').css('visibility','hidden');
    });


    $bar.on('mousedown',function (ev) {

        var oEv=ev || event;
        var disY =oEv.clientY - this.offsetTop;
        console.log('disY:'+disY);
        $doc.on('mousemove',function (ev) {
            var oEv=ev || event;
            var newTop = oEv.clientY - disY;
            //console.log('newTop:'+newTop);

            if(newTop<=0){
                newTop=0;
            }
            if(newTop>=$('.ws-newsflash-scrollBg').height()-$bar.height()){
                newTop=$('.ws-newsflash-scrollBg').height()-$bar.height();
            }

            //var scale = t/(oDiv2.offsetHeight-oBar.offsetHeight);
            //oCont.style.top=-scale*(oCont.offsetHeight-oDiv1.offsetHeight)+'px';

            var scale = newTop/($('.ws-newsflash-scrollBg').height()-$bar.height());
            $('.ws-newsflash-parent').css('top',scale*($('.ws-newsflash').height()-$('.ws-newsflash-parent').height()));
            $bar.css('top',newTop)
        });

        $doc.on('mouseup',function () {
            $doc.off();
        });
        return false;
    });

    function setTop(t){
        if(t<0){
            t=0;
        }else if(t>$('.ws-newsflash-scrollBg').height()-$bar.height()){
            t=$('.ws-newsflash-scrollBg').height()-$bar.height();
        }

        $bar.css('top',t)
        var scale = t/($('.ws-newsflash-scrollBg').height()-$bar.height());
        $('.ws-newsflash-parent').css('top',scale*($('.ws-newsflash').height()-$('.ws-newsflash-parent').height()));

    }
    ws.addWheel($('.ws-newsflash')[0],function(bOk){
        var t = $('.ws-newsflash-scrollBar')[0].offsetTop;
        if(bOk){
            t+=10;
        }else{
            t-=10;
        }
        setTop(t);
    });
/*
    function addWheel(obj,fn){
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
    */
});
$(function () {
    //热文榜
    $('.ws-hotdoc-tabhDiv').click(function () {
        $('.ws-hotdoc-tabhDiv').removeClass('ws-active').eq($(this).index()).addClass('ws-active');
        $('.ws-hotdoc-tabc .ws-hotdoc-tabcon').hide().eq($(this).index()).show();

    });
});

/*

$(function () {
    //首页导航部分

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
$(function () {
    //收索
    $('.ws-nav-searchIcon').click(function () {
        $('.ws-searchboxBg').show();

    });
    $('.ws-searchbox-close').click(function () {
        $('.ws-searchboxBg').hide();
    });

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



});*/
