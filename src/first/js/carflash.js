/**
 * Created by admin on 2016/9/12.
 */
/*
$(function () {
    //找车
    scroll($('.ws-commend-list').eq(0),0);
    function scroll(ele,i) {
        var $bar=ele.find('.ws-newsflash-scrollBar');
        //var $list=ele.find('.ws-commend-list');
        var $wrap=ele.find('.ws-commend-list-wrap');
        var $scrollBg=ele.find('.ws-newsflash-scrollBg');
        var $doc = $(document);

        if(ele.height()>ele.find('.ws-commend-list-wrap').height()){
            //$('.ws-newsflash').css('height',$('.ws-newsflash-parent').height()-10);
            //return false;
            console.log('1--'+i+'--'+ele);

            $('.ws-commend-list').hover(function () {
                $('.ws-newsflash-scroll').css('visibility','hidden');
            },function () {
                $('.ws-newsflash-scroll').css('visibility','hidden');
            });

        }else {
            //var strScalle = $('.ws-commend-list').find('.ws-commend-list-wrap').height()/$('.ws-commend-list').height();
            //$scrollBg/$bar
            //$bar=$scrollBg/strScalle;
            //console.log('2--'+i+'--'+ele);
            $('.ws-commend-list').hover(function () {
                $('.ws-newsflash-scroll').css('visibility','visible');
            },function () {
                $('.ws-newsflash-scroll').css('visibility','hidden');
            });



            $bar.on('mousedown',function (ev) {

                var oEv=ev || event;
                var disY =oEv.clientY - this.offsetTop;
                //console.log('disY:'+disY);
                $doc.on('mousemove',function (ev) {
                    var oEv=ev || event;
                    var newTop = oEv.clientY - disY;
                    //console.log('newTop:'+newTop);

                    if(newTop<=0){
                        newTop=0;
                    }
                    if(newTop>=$scrollBg.height()-$bar.height()){
                        newTop=$scrollBg.height()-$bar.height();
                    }

                    var scale = newTop/($scrollBg.height()-$bar.height());
                    $wrap.css('top',scale*(ele.height()-$wrap.height()));
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
                }else if(t>$scrollBg.height()-$bar.height()){
                    t=$scrollBg.height()-$bar.height();
                }

                $bar.css('top',t)
                var scale = t/($scrollBg.height()-$bar.height());
                $wrap.css('top',scale*(ele.height()-$wrap.height()));

            }
            ws.addWheel(ele[0],function(bOk){
                var t = $bar[0].offsetTop;
                if(bOk){
                    t+=10;
                }else{
                    t-=10;
                }
                setTop(t);
            });
        }
    }


    $('.ws-commend dl dd').click(function () {
        $('.ws-commend dl dd').removeClass('active').eq($(this).index()).addClass('active');
        $('.ws-commend-list').hide().eq($(this).index()).show();

        scroll($('.ws-commend-list').eq($('.ws-commend dl dd').index($(this))),$('.ws-commend dl dd').index($(this)));

    });

});
*/

$(function(){
    //快讯优化
    var $commend=$('.ws-commend-list');
    wsScroll($commend.eq(0),$commend.eq(0).find('.ws-commend-list-wrap'),$commend.eq(0).find('.ws-newsflash-scroll'),$commend.eq(0).find('.ws-newsflash-scrollBar'));

    $('.ws-commend dl dd').click(function () {
        $('.ws-commend dl dd').removeClass('active').eq($(this).index()).addClass('active');
        $('.ws-commend-list').hide().eq($(this).index()).show();

        //scroll($('.ws-commend-list').eq($('.ws-commend dl dd').index($(this))),$('.ws-commend dl dd').index($(this)));
        wsScroll($commend.eq($('.ws-commend dl dd').index($(this))),$commend.eq($('.ws-commend dl dd').index($(this))).find('.ws-commend-list-wrap'),$commend.eq($('.ws-commend dl dd').index($(this))).find('.ws-newsflash-scroll'),$commend.eq($('.ws-commend dl dd').index($(this))).find('.ws-newsflash-scrollBar'));

    });

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
    //我要询价
    $('.ws-lastform-tabname div').click(function () {
        $('.ws-lastform-tabname div').removeClass('ws-active').eq($(this).index()).addClass('ws-active');
        $('.ws-lastform-item').hide().eq($(this).index()).show();
    });
});


$(function () {
    $.ajax({
        type:'post',
        url:'http://www.d1ev.com/Public/getBrand?format=json',
        success:function (data) {
            var str='';
            $.each(data.brands,function (i,value) {

                str+='<option value="'+value.cid+'">'+data.brands[i].catname+'</option>'
            });
            $('#s_province').append(str);
        }
    });


    $('#s_province').on('change',function () {
        //console.log($(this).val());
        $.ajax({
            type:'post',
            url:'http://www.d1ev.com/Public/getCartype?catid='+$(this).val()+'&format=json',
            success:function (data) {
                var str='';
                $('#s_city').html('');
                $.each(data,function (i,value) {
                    //console.log(value);
                    str+='<option value="'+value.autoid+'">'+value.displayname+'</option>'
                });
                $('#s_city').append(str);
            }
        });


    });


    $('.ws-find-btn').click(function () {
        if($.isNumeric($('#s_city').val())){
            window.location.href='http://www.d1ev.com/automodels-'+$('#s_city').val()+'.html';
        }else{
            ws.ws_alert($('.ws_alert'),'请先选择品牌和车型');
        }
    });

});


$(function () {
    //我要询价

    $('.ws-submit1').click(function () {
        var $s_city3 = $('#s_city3');
        var $s_city4 = $('#s_city4');

        var $name1 = $('.ws-group-inp-name1');
        var $tel1 = $('.ws-group-inp-tel1');

        if(!$s_city3.val()){
            //alert('品牌');

            $('.ws-group-lastform-item1 button').css('border-color','red');
            return false;

        }else{
            $('.ws-group-lastform-item1 button').css('border-color','');
        }

        if (!$name1.val()){
            //alert('名字');
            $('.ws-group-inp-name1').css('border-color','red');
            return false;

        }else{
            $('.ws-group-inp-name1').css('border-color','');
        }


        if (!/^1[1-9]\d{9}$/.test($tel1.val())){
            //alert('手机');
            $('.ws-group-inp-tel1').css('border-color','red');
            return false;
        }else{
            $('.ws-group-inp-tel1').css('border-color','');
        }

        if(!$s_city4.val()){
            //alert('省市');
            $('.ws-group-lastform-item2 button').css('border-color','red');
            return false;

        }else{
            $('.ws-group-lastform-item2 button').css('border-color','');
        }
        
        $.ajax({
            url:'http://www.d1ev.com/formguide/index/post2.html',
            type:'post',
            data:{
                'info[sheng]': $('#s_province3').val(),
                'info[shi]':$s_city3.val(),
                'info[realname]':$name1.val(),
                'info[tel]':$tel1.val(),
                sheng2: $('#s_province4').val(),
                shi2:$s_city4.val(),
                formid:28,
                'info[signuptype]':'我要询价',
                'info[signupid]':47

            },
            success:function (data) {
                //console.log(data);

                console.log(data.status);
                var data=jQuery.parseJSON(data);
                if(data.status==1){
                    alert('提交成功');
                }else{
                    alert('提交失败');
                }
            }
        });
        
    });
    //预约试驾
    $('.ws-submit2').click(function () {
        var $s_city5 = $('#s_city5');
        var $s_city6 = $('#s_city6');

        var $name2 = $('.ws-group-inp-name2');
        var $tel2 = $('.ws-group-inp-tel2');

        if(!$s_city5.val()){
            //alert('品牌');

            $('.ws-group-lastform-item3 button').css('border-color','red');
            return false;

        }else{
            $('.ws-group-lastform-item3 button').css('border-color','');
        }

        if (!$name2.val()){
            //alert('名字');
            $('.ws-group-inp-name2').css('border-color','red');
            return false;

        }else{
            $('.ws-group-inp-name2').css('border-color','');
        }

        if (!/^1[1-9]\d{9}$/.test($tel2.val())){
            //alert('名字');
            $('.ws-group-inp-tel2').css('border-color','red');
            return false;

        }else{
            $('.ws-group-inp-tel2').css('border-color','');
        }

        if(!$s_city6.val()){
            $('.ws-group-lastform-item4 button').css('border-color','red');
            return false;

        }else{
            $('.ws-group-lastform-item4 button').css('border-color','');
        }

        $.ajax({
            url:'http://www.d1ev.com/formguide/index/post2.html',
            type:'post',
            data:{
                'info[sheng]': $('#s_province5').val(),
                'info[shi]':$s_city5.val(),
                'info[realname]':$name2.val(),
                'info[tel]':$tel2.val(),
                sheng2: $('#s_province6').val(),
                shi2:$s_city6.val(),
                formid:28,
                'info[signuptype]':'预约试驾',
                'info[signupid]':6

            },
            success:function (data) {
                console.log(data.status);
                var data=jQuery.parseJSON(data);
                if(data.status==1){
                    alert('提交成功');
                }else{
                    alert('提交失败');
                }
            }
        });

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
        minute: "1分钟",//
        minutes: "%d分钟",
        hour: "1小时",//
        hours: "%d小时",
        day: "1天",//
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