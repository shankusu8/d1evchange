

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
    //热文榜
    $('.ws-hotdoc-tabhDiv').click(function () {
        $('.ws-hotdoc-tabhDiv').removeClass('ws-active').eq($(this).index()).addClass('ws-active');
        $('.ws-hotdoc-tabc .ws-hotdoc-tabcon').hide().eq($(this).index()).show();

    });
});
$(function () {
    //省市联动
    //_init_area('s_province','s_city','主营行业','细分行业');
    _init_area2('s_province2','s_city2','主营行业','细分行业');
    _init_area3('s_province3','s_city3','主营行业','细分行业');


    $('.ws-product-btn').click(function () {
        if($.isNumeric($('#s_city2').val())){
            //window.location.href='http://d1ev.com/list_products.php?catType=1&id='+$('#s_city2').val()+'&city=&sort=2&key=';
            window.open('http://d1ev.com/list_products.php?catType=1&id='+$('#s_city2').val()+'&city=&sort=2&key=');
                                    //http://d1ev.com/list_products.php?catType=1&id=100907&city=&sort=2&key=
        }else
        {
            /**/
            ws.ws_alert($('.ws_alert'),'请先选择主营行业和细分行业');
            return false;
        }
    });
    $('.ws-company-btn').click(function () {
        if($.isNumeric($('#s_city3').val())){
            //window.location.href='http://d1ev.com/list_companys.php?catType=&id='+$('#s_city3').val()+'&city=&sort=&key=';
                                    //http://d1ev.com/list_companys.php?catType=&id=100805&sort=&city=&key=
            window.open('http://d1ev.com/list_companys.php?catType=&id='+$('#s_city3').val()+'&city=&sort=&key=');
        }else
        {
            /**/
            ws.ws_alert($('.ws_alert'),'请先选择主营行业和细分行业');
            return false;
        }
    });

});

$(function () {
    //查数据
    $.ajax({
        type:'post',
        url:'http://d1ev.com/car_models.php?f=clh&s=all',
        dataType:'jsonp',
        success:function (data) {
            var str='';
            //$('#s_province').html('');
            $.each(data.result,function (i,value) {

                str+='<option value="'+value+'">'+value+'</option>'
            });
            $('#s_province').append(str);

            //console.log('2'+$('#s_city').html());
        }
    });


    //console.log('3'+$('#s_city').html());
    $('#s_province').on('change',function () {
        //console.log($(this).val());
        if(!$(this).val()){
            return;
        }
        $.ajax({
            type:'post',
            url:'http://d1ev.com/car_models.php?f=clh&s=all&b='+$(this).val(),
            dataType:'jsonp',
            success:function (data) {
                var str='';
                $('#s_city').html('');
                $.each(data.result,function (i,value) {
                    //console.log(value);
                    str+='<option value="'+value+'">'+value+'</option>'
                });
                $('#s_city').append(str);
            }
        });

        console.log('change');


    });

    $('.ws-data-btn').click(function () {
        if($('#s_city').val()){
            //window.location.href='http://d1ev.com/industry_data.php?'+$('#s_province').val()+'&'+$('#s_city').val();
            window.open('http://d1ev.com/industry_data.php?bd=3&pinpai='+$('#s_province').val()+'&chexing='+$('#s_city').val());
        }else{
            ws.ws_alert($('.ws_alert'),'请先选择品牌和车型');

        }
    });




});

$(function () {
    //加载更多
    var num=1;
    $('.ws-newsmore .more--text').click(function () {

        console.log(num);
        $.ajax({
            type:'post',
            url:'http://www.d1ev.com/contents/index/loadmore',
            data:{
                page:num
            },
            success:function (data) {
                //console.log(data);
                if(data==''){
                    window.location.href='http://www.d1ev.com/newsflash';
                }

                $('.ws-news').append(data);
                num++;
                $('time.timeago').timeago();
            }
        });

    });

});
$(function () {
    $('.ws-report-btn .a2').click(function () {

        ws.ws_alert($('.ws_alert'),'只有开通行业报告服务的用户登录后才可查阅<br>请选择 “<a style="color: #f60;" href="http://www.d1ev.com/public/buyService" target="_blank" class="yellow">立即开通</a>” 或 “<a style="color: #f60" href="http://www.d1ev.com/member/accountnew/login" target="_blank" class="yellow">登录</a>”',4000);
        return false;
    });

    $('.ws-report-left .a2 img').click(function () {
        console.log(2);
        $('.ws-report-btn .a2').click();
    });
    $('.ws-report-right .a2').click(function () {
        console.log(2);
        $('.ws-report-btn .a2').click();
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

$(function () {
    //纯净阅读
    var homeBok=true;
    $('.ws-fixed-read').show();
    $('.ws-fixed-read').click(function(){
        if(homeBok){
            $('.ws-content-left ').hide();
            $('.ws-content-right ').hide();

            $('.ws-content-md ').removeClass('am-fl');
            $('.ws-content-md ').css('margin','0 auto');
            $(this).css({'color':'#f60','border':'1px solid #f60'});
            homeBok=false;
        }else{
            $('.ws-content-left ').show();
            $('.ws-content-right ').show();
            $('.ws-content-md ').addClass('am-fl');
            $(this).css({'color':'#999','border':'1px solid #ccc'});
            homeBok=true;
        }

    });
});

$(function () {
    //友情链接
    var linkh = 0;

    for(var i=0;i<$('.ws-link div a').length;i++){
        linkh+=parseInt($('.ws-link div a').eq(i).css('width'));
        //linkh+=i+':'+$('.ws-link div a').eq(i).css('width')+'; ';
    }
    //console.log(linkh);
    //$('.ws-link div').css({'width':linkh+10});
    $('.ws-link').css({'width':linkh,'min-width':linkh,'max-width':linkh+10,'margin':'0 auto'});

});

$(function () {
    //最新企业
    $('.ws-company-newH-parent span').click(function () {
        console.log($('.ws-company-newH-parent span').index($(this)));
        var num = $('.ws-company-newH-parent span').index($(this));
        $('.ws-company-newH').removeClass('ws-active').eq(num).addClass('ws-active');
        $('.ws-company-newC').hide().eq(num).show();

    });

    //最新产品
    $('.ws-product-newH-parent span').click(function () {
        console.log($('.ws-product-newH-parent span').index($(this)));
        var num = $('.ws-product-newH-parent span').index($(this));
        $('.ws-product-newH').removeClass('ws-active').eq(num).addClass('ws-active');
        $('.ws-product-newC').hide().eq(num).show();

    });
});


