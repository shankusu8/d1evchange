/**
 * Created by admin on 2016/9/17
 */

$(function() {
    /*相关车型*/
    $('.circle').each(function(index, el) {
        var num = $(this).find('span').text() * 0.72;
//               console.log(num);
        if (num<=180) {
            $(this).find('.circle_right').css('transform', "rotate(" + num + "deg)");
        }else if(num>360) {
            $(this).find('.circle_right').css('transform', "rotate(180deg)");
            $(this).find('.circle_left').css('transform', "rotate(180deg)");
        } else {
            $(this).find('.circle_right').css('transform', "rotate(180deg)");
            $(this).find('.circle_left').css('transform', "rotate(" + (num - 180) + "deg)");
        };
    });

    $('.circle2').each(function(index, el) {
        var num = $(this).find('span').text() * 1.8;
//               console.log(num);
        if (num<=180) {
            $(this).find('.circle_right').css('transform', "rotate(" + num + "deg)");
        }else if(num>360) {
            $(this).find('.circle_right').css('transform', "rotate(180deg)");
            $(this).find('.circle_left').css('transform', "rotate(180deg)");
        } else {
            $(this).find('.circle_right').css('transform', "rotate(180deg)");
            $(this).find('.circle_left').css('transform', "rotate(" + (num - 180) + "deg)");
        };
    });

    $('.circle3').each(function(index, el) {
        var num = $(this).find('span').text() * 3.6;
        if (num<=180) {
            $(this).find('.circle_right').css('transform', "rotate(" + num + "deg)");
        }else if(num>360) {
            $(this).find('.circle_right').css('transform', "rotate(180deg)");
            $(this).find('.circle_left').css('transform', "rotate(180deg)");
        } else {
            $(this).find('.circle_right').css('transform', "rotate(180deg)");
            $(this).find('.circle_left').css('transform', "rotate(" + (num - 180) + "deg)");
        };
    });

});
/*
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

});*/

$(function(){
    //快讯优化
    wsScroll($('.ws-newsflash'),$('.ws-newsflash-parent'),$('.ws-newsflash-scroll'),$('.ws-newsflash-scrollBar'));

    function wsScroll(a,b,c,d){
        var $lheightBg = a;
        var $lheight=b;

        var $rheightBg=c;
        var $rheight=d;
        var $doc = $(document);

        var ratio = $lheightBg.height()/$lheight.height();
        console.log(ratio);
        if(ratio<1){
            flash_hover($lheightBg,$lheight,$rheightBg,$rheight);
            $rheight.css('height',ratio*$rheightBg.height());
        }else{
            $lheightBg.css('height',$lheight.height()+10);
            return false;
        }

        $rheight.on('mousedown',function (ev) {

            var oEv=ev || event;
            var disY =oEv.clientY - this.offsetTop;

            $doc.on('mousemove',function (ev) {
                var oEv=ev || event;
                var newTop = oEv.clientY - disY;


                if(newTop<=0){
                    newTop=0;
                }
                if(newTop>=$rheightBg.height()-$rheight.height()){
                    newTop=$rheightBg.height()-$rheight.height();
                }


                var scale = newTop/($rheightBg.height()-$rheight.height());
                $lheight.css('top',scale*($lheightBg.height()-$lheight.height()));
                $rheight.css('top',newTop);
            });

            $doc.on('mouseup',function () {
                $doc.off();
            });
            return false;
        });

        function setTop(t){
            if(t<0){
                t=0;
            }else if(t>$rheightBg.height()-$rheight.height()){
                t=$rheightBg.height()-$rheight.height();
            }

            $rheight.css('top',t);
            var scale = t/($rheightBg.height()-$rheight.height());
            $lheight.css('top',scale*($lheightBg.height()-$lheight.height()));

        }
        ws.addWheel($lheightBg[0],function(bOk){
            var t = $rheight[0].offsetTop;
            if(bOk){
                t+=10;
            }else{
                t-=10;
            }
            setTop(t);
        });


        function flash_hover(a,b,c,d){
            a.hover(function () {
                c.css('visibility','visible');
            },function () {
                c.css('visibility','hidden');
            });
        }
    }

});


$(function () {
    //点赞
    var numb=parseInt($(".ws-like span").html())||0;
    $(".ws-like").click(function(){

        $.post("http://www.d1ev.com/index.php?g=Contents&m=index&a=zan&type=zan", {newid:$('body').attr('data-newid'),catid:$('body').attr('data-catid'),title:$('body').attr('data-title'),tags:$('body').attr('data-tags')},
            function(data){
                console.log(data);
                //alert(data);
                var $modal=$('.ws_alert');
                if($.trim(data)==200){
                    //$modal.find('.am-modal-bd').html('成功');
                    $(".ws-like span").html(++numb);
                    //$(".ws-like").css({'color':'#f60','background':'1px solid #f60'});
					$(".ws-like").addClass('liked');
                    //$modal.find('.am-modal-bd').html('您的点赞支持是作者最大的东西');
                    ws.ws_alert($modal,'感谢支持');
                    //console.log(numb);
                }else if($.trim(data)==300) {
                    //$modal.find('.am-modal-bd').html('您已点赞过，无需再赞');
                    ws.ws_alert($modal,'您已点赞过，无需再赞');
                }else if($.trim(data)==400){
                    //$modal.find('.am-modal-bd').html('操作失败');
                    ws.ws_alert($modal,'操作失败');
                }else{
                    //$modal.find('.am-modal-bd').html('请<a href="http://www.d1ev.com/member/accountnew/login" style="color:#f60;">登录</a>后点赞');
                    ws.ws_alert($modal,'请<a href="http://www.d1ev.com/member/accountnew/login" style="color:#f60;">登录</a>后点赞');
                }
            });
    });
});

$(function () {
    //不感兴趣
    bok=false;
    $('.ws-more-a2').click(function (ev) {
		var oEv = ev||event;
        $('.ws-reason').toggle();
        oEv.stopPropagation();
		
		$('.ws-reason').click(function(ev){
			var oEv = ev||event;
			oEv.stopPropagation();
		});
		$('.am-icon-remove').click(function(){
			$('.ws-reason').hide();
		});
        $(document).click(function () {

            $('.ws-reason').hide();
            $(document).off('click');
        });
    });
    $('.ws-reason-c').click(function (ev) {
		var oEv = ev||event;
       // console.log($(this).index());
        //console.log($('.ws-reason-c').index($(this)));
        //$('.ws-reason-c').removeClass('ws-active').eq($('.ws-reason-c').index($(this))).addClass('ws-active');
        if(!$(this).hasClass('ws-active')){
            $(this).addClass('ws-active');
        }else{
            $(this).removeClass('ws-active');
        }
        oEv.stopPropagation();

    });
    $('.ws-reason-btn').click(function () {

        var sval='';
        if(!$('.ws-reason .ws-active').length){
            return;
        }

        if($('.ws-reason .ws-active').length==1){
            sval=$('.ws-reason .ws-active').text();
        }else if($('.ws-reason .ws-active').length==2){
            sval=$('.ws-reason .ws-active').eq(0).text()+','+$('.ws-reason .ws-active').eq(1).text();
        }
        //console.log(sval);
        $.post("http://www.d1ev.com/index.php?g=Member&m=favorite&a=zan", {newid:$('body').attr('data-newid'),catid:$('body').attr('data-catid'),title:$('body').attr('data-title'),tags:$('body').attr('data-tags'),cause:sval},
            function(data){
                var $modal=$('.ws_alert');
                if($.trim(data)==200){
                    //$modal.html('我们已收到您的反馈');
                    ws.ws_alert($modal,'我们已收到您的反馈');
                }else if($.trim(data)==300) {
                    //$modal.html('您的选择过频，无需多次选择');
                    ws.ws_alert($modal,'您的选择过频，无需多次选择');
                }else if($.trim(data)==400){
                    //$modal.html('操作失败');
                    ws.ws_alert($modal,'操作失败');
                }else{
                    //$modal.find('.am-modal-bd').html('失败');
                    //$modal.html('请<a href="http://www.d1ev.com/member/accountnew/login" style="color:#f60;">登录</a>后点击');
                    ws.ws_alert($modal,'请<a href="http://www.d1ev.com/member/accountnew/login" style="color:#f60;">登录</a>后点击');


                }

                //$modal.modal('toggle');
            });
    });
    
});

$(function () {
    //想看更多
    $(".ws-more-a1").click(function(){
        $.post("http://www.d1ev.com/index.php?g=Member&m=favorite&a=zan&type=more", {newid:$('body').attr('data-newid'),catid:$('body').attr('data-catid'),title:$('body').attr('data-title'),tags:$('body').attr('data-tags')},
            function(data){
                var $modal=$('.ws_alert');
                if($.trim(data)==200){
                    //$modal.html('我们已收到您的反馈');
                    ws.ws_alert($modal,'我们已收到您的反馈');
                }else if($.trim(data)==300) {
                    //$modal.html('您的选择过频，无需多次选择');
                    ws.ws_alert($modal,'您的选择过频，无需多次选择');
                }else if($.trim(data)==400){
                    //$modal.html('操作失败');
                    ws.ws_alert($modal,'操作失败');
                }else{
                    //$modal.find('.am-modal-bd').html('失败');
                    //$modal.html('请<a href="http://www.d1ev.com/member/accountnew/login" style="color:#f60;">登录</a>后提交');
                    ws.ws_alert($modal,'请<a href="http://www.d1ev.com/member/accountnew/login" style="color:#f60;">登录</a>后点击');
                }

                //$modal.modal('toggle');
            });
    });


});

$(function () {
    //收藏
    $('.share--wraped .share--color5').click(function () {
        $.get($('body').attr('data-url')+"?g=Member&m=favorite&a=add&catid="+$('body').attr('data-catid')+"&id="+$('body').attr('data-newid'), function (data) {
            console.log(data.error);
            if(data.status==0){
                //$.tipMessage(, 2, 2000);
                //alert('已经收藏过了！');

                var $modal=$('.ws_alert');
                //$modal.html('您已收藏');
                ws.ws_alert($modal,'您已收藏');
                //$modal.modal('toggle');
            }else if(data.error==2||data.error==20001){
                //$(".login_bg").show();
                //$(".login_main").show();
                //$('.wws-container').show();
                window.location.href='http://www.d1ev.com/member/accountnew/login';
            }else{
                //$.tipMessage('收藏成功！', 3, 2000);
                var $modal=$('.ws_alert');
                //$modal.html('收藏成功');
                ws.ws_alert($modal,'收藏成功');
                //$modal.modal('toggle');

                $('.share--wraped .share--color5 .icon-content').html('已收藏');
                //alert('收藏成功！');
                //$('.fx_sc .theme-js').removeClass('theme-buy2').addClass('theme-buy').find('.theme-login').text('已经收藏');
            }
        }, "json");
    });

});
/*
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
});*/

$(function () {
    //评论锚点
    $('.share--color4').click(function () {
        $('body,html').animate({scrollTop:$('#comment').offset().top});
    });
});


$(function() {
    /* 表单部分 */
    //用户名
    $('.ev-js-name').blur(function () {
        if($(this).val()==''){
            test(this,'请输入登录名');
            return false;
        }

        if ($(this).val()!=''){
            testSucc(this);
        }

    });
    //密码
    $('.ev-js-password').blur(function () {
        if($(this).val()==''){
            test(this,'请输入密码');
        }
        if($(this).val().length<6&&$(this).val()!=''){
            test(this,'密码错误');

        }
        if ($(this).val().length>6||$(this).val().length==6){
            testSucc(this);
        }

    });

    //
    $('.ev-js-name').on('focus',function () {
        $(this).removeClass('am-field-error').siblings('.am-alert').hide();

    });
    $('.ev-js-password').on('focus',function () {
        $(this).removeClass('am-field-error').siblings('.am-alert').hide();

    });

    function test(ele,field) {
        $(ele).removeClass('am-field-valid').addClass('am-field-error');

        if($(ele).next().length>0){
            $(ele).next().html(field).show();
        }else {
            $(ele).after('<div class="am-alert am-alert-danger ev-alert-danger">'+field+'</div>');
        }
    }

    function testSucc(ele) {
        $(ele).removeClass('am-field-error').addClass('am-field-valid');
        $(ele).next().hide();
    }
    //登录
    $(document).keydown(function(e){
        if(e.keyCode==13){
            $('.ev-js-btn').click();
        }
    });
    $('.ev-js-btn').click(function () {

        if($('.ev-js-name').val()=='') {
            test('.ev-js-name', '请输入登录名');
        }

        if($('.ev-js-password').val()==''){
            test('.ev-js-password','请输入密码');

        }
        if($('.ev-js-password').val().length<6&&$(this).val()!=''){
            test('.ev-js-password','密码错误');
        }

        if($('.ev-form-group .am-field-error').length>0){
            return;
        }
        $.ajax({
            type:'POST',
            url:'http://www.d1ev.com/member/Accountnew/login',
            data:{loginName:$('.ev-js-name').val(),password:$('.ev-js-password').val(),url:$('body').attr('data-url')},
            dataType:'json',
            success:function (data) {
                console.log(data);
                if(data.alert){
                    alert(data.alert);
                    window.location.href=data.url;
                }
                if(data.error==0){
                    //成功
                    $('.ev-js-name').before('<div class="ev-tip ev-radius ev-tip-success am-animation-fade">'+data.message+'</div>');
                    window.location.reload();
                    window.location.href=window.location.href+'#comment';
                    $('.ws-shadow').hide();
                    $('.ws-loginModel').hide();

                }else if(data.error==3){
                    $.ajax({
                        type:'POST',
                        url:'http://www.d1ev.com/member/Accountnew/rsendmail',
                        data:{loginName:$('.ev-js-name').val()},
                        dataType:'json',
                        success:function (data) {
                            console.log(data);
                            console.log('发生邮箱');
                        }
                    })
                }else{
                    $('.ev-js-name').before('<div class="ev-tip ev-radius am-alert-dangers am-animation-fade">账号或密码错误<div class="am-close am-close--re iconfont">&#xe60c;</div></div>');

                }
            }
        });

    });

    $(document).on('click','.am-close--re',function () {
        $('.am-close--re').parent().hide();
    });

    $('.wws-close').click(function () {
        $('.ws-shadow').hide();
        $('.ws-loginModel').hide();

    });

    //图标动画效果
    function testAnim($this,x) {
        $this
            .removeClass(x + ' animated')
            .addClass(x + ' animated')
            .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                $this.removeClass(x + ' animated')
            });
    };
    $('.ev-other-logo a').mouseover(function(e){
        e.preventDefault();
        var $this= $(this);
        testAnim($this,'zoomIn');
    });

});

$(function(){
	//在本页阅读全文
	$('.ws-pagination:last').click(function(){
		$.ajax({
			  type: 'GET',
			  url: "http://www.d1ev.com/Public/getShowAll?id="+$('body').attr('data-newid'),
			  dataType: 'jsonp',
			  jsonp:'callback', 
			  cache: false,
			  success: function(json){
				  
				  //$('#showall2238').fadeIn("slow",function(){
					//$('#showall2238').html(json['allContent']);
					//$('.page').hide();
				  //})
				  //console.log(json['allContent']);
				  $('#showall233').html(json['allContent']);
				  $('.ws-pagination').hide();
			  }
        })                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
	});
});