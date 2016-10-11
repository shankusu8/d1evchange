
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/animate.css">
    <style>
    
		.ws-searchboxBg, .ws-searchboxBg button, .ws-searchboxBg input, .ws-searchboxBg select,.ws-searchboxBg textarea {
			text-rendering: optimizeLegibility;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			-moz-font-feature-settings: "liga","kern";
		}
        .am-container{
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0 auto;		
        }
        .am-cf:after, .am-cf:before {
            content: " ";
            display: table;
        }
        .am-fl {
            float: left;
        }
        .am-fr {
            float: right;
        }
        .am-cf:after {
            display: block;
            content: "";
            clear: both;

        }
        *{
            padding: 0;
            margin: 0;
        }
		 .blank0 {
            height: 0;
            clear: both;
        }
        .blank10 {
            height: 10px;
            clear: both;
        }
        .blank20 {
            height: 20px;
            clear: both;
        }
        .blank30 {
            height: 30px;
            clear: both;
        }
        .blank40 {
            height: 40px;
            clear: both;
        }
        .blank50 {
            height: 40px;
            clear: both;
        }
        .hblank40 {
            width: 40px;
            height: 1px;
        }
        .am-cf a {
            color: #000;
            text-decoration: none;
        }
        .am-cf a:hover {
            color: #f60!important;
        }

		.ws-fix-head *,.ws-fix-head :after,.ws-fix-head :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        /*顶部二级导航*/
        .ws-fix-head {
            position: fixed;
            z-index: 101;
            right: 0;
            left: 0;
            top: 0;

            background: #fff;
            font-weight: 400;
            line-height: 1.6;
            color: #333;
            font-size: 16px;
        }
        .ws-head-bg {
            border-bottom: 1px solid #e5e5e5;
            background: #fff;
        }
        .headroom--not-top .ws-nav-bg {
            display: none;
        }
        .headroom--top .ws-nav-bg {
            transition: 0.2s;
            display: block;
        }
        .ws-head {
            width: 1200px;
            min-width: 1200px;
            height: 80px;
            padding: 0;
            position: relative;
            /*登录与注册*/
        }
        .ws-head .ws-head-a {
            height: 100%;
        }
        .ws-head .ws-head-icon {
            background-image: url('http://www.d1ev.com/new2016/src/public/images/logo2x.png');
			background-size: contain;
            width: 133px;
            height: 35px;
            position: relative;
            top: 50%;
            margin-top: -18px;
            margin-right: 62px;
            text-indent: -999em;
        }
        .ws-head .ws-head-col {
            font-size: 16px;
            height: 80px;
            line-height: 80px;
            /* margin-right: 48px;*/
            padding: 0 24px;
            cursor: pointer;
            position: relative;
        }
		.ws-head .ws-head-col:nth-child(2) {
		  padding: 0 30px;
		}
		.ws-head .ws-head-col:nth-child(1) {
		  padding-left: 0;
		}
        .ws-head .ws-head-col a:hover {
            color: #f60;
        }
        .ws-head .ws-head-colNameLast {
            padding-left: 22px;
            display: block;
        }
        .ws-head .ws-head-colName {
            color: #333333;
            position: relative;
        }
        .ws-head .ws-head-colIcon {
            position: absolute;
            top: 38px;
            right: -18px;
            background-image: url('http://www.d1ev.com/new2016/src/public/images/sprite2.png');
            background-position: -143px -98px;
            width: 10px;
            height: 5px;
        }
        .ws-head .ws-head-colGold {
            position: absolute;
            top: 32px;
            left: -3px;
            background-image: url('http://www.d1ev.com/new2016/src/public/images/sprite2.png');
            background-position: -76px -115px;
            width: 18px;
            height: 18px;
        }
        .ws-head .ws-head-colList {
            border-top: 3px solid #f60;
            display: none;
            position: absolute;
            top: 80px;
            left: 50%;
            margin-left: -100px;
            background: #fff;
            padding: 20px 15px;
            -webkit-animation-duration: 0.2s;
            -moz-animation-duration: 0.2s;
            -ms-animation-duration: 0.2s;
            -o-animation-duration: 0.2s;
            animation-duration: 0.2s;
            -webkit-transform-origin: top center;
            -moz-transform-origin: top center;
            -ms-transform-origin: top center;
            -o-transform-origin: top center;
            transform-origin: top center;
            text-transform: uppercase;
            z-index: 3;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }
        .ws-head .ws-head-colList .ws-head-colListItem {
            width: 50%;
            text-align: center;
            border-right: 1px solid #f1f1f1;
            line-height: 40px;
            color: #333;
        }
		.ws-head .ws-head-colList:after {
			position: absolute;
			content: '';
			top: -20px;
			left: 50%;
			border: 10px solid transparent;
			border-bottom: 10px solid #f60;
			margin-left: -10px;
		}
        .ws-head .ws-head-colList .ws-head-colListItem:hover {
            color: #f60;
        }
        .ws-head .ws-head-colList .ws-head-colListItem:nth-child(even) {
            border-right: none;
        }
        .ws-head .ws-head-colList .ws-head-colListItem:last-child {
            border-bottom: none;
        }
        .ws-head .ws-head-colList .ws-head-colListItem:nth-last-child(2) {
            border-bottom: none;
        }
        .ws-head .ws-head-colList .ws-head-colListItem2 {
            display: block;
            height: 46px;
            width: 60%;
            margin: 0 auto;
            text-align: center;
            /*border-bottom: 1px solid #ccc;*/
            line-height: 46px;
            color: #333;
        }
        .ws-head .ws-head-colList .ws-head-colListItem2:last-child {
            border-bottom: none;
        }
        .ws-head .ws-head-col:hover .ws-head-colList {
            display: block;
            width: 200px;
            height: auto;
            -webkit-animation-name: zoomIn;
            animation-name: zoomIn;
			box-shadow: 0 1px 15px rgba(18, 21, 21, 0.2);
        }
        .ws-head .ws-head-col:hover .ws-head-colList2 {
            width: 160px;
            margin-left: -80px;
            padding: 0;
        }
        .ws-head .ws-nav-search {
            padding-right: 12px;
            position: relative;
        }
        .ws-head .ws-nav-searchIcon {
            display: inline-block;
            background-image: url('http://www.d1ev.com/new2016/src/public/images/sprite2.png');
            background-position: -48px -115px;
            width: 18px;
            height: 18px;
            cursor: pointer;
            position: absolute;
            top: 31px;
            right: 32px;
        }
        .ws-head .ws-nav-login {
            position: relative;
            top: 25px;
        }
        .ws-head .ws-nav-login .ws-nav-loginA {
            font-size: 14px;
            line-height: 30px;
            color: #333;
        }
        .ws-head .ws-nav-login .ws-nav-loginI {
            padding: 0 8px;
            color: #333;
            font-size: 16px;
        }
        .ws-head .ws-nav-login .ws-nav-headmap {
            width: 30px;
            height: 30px;
            cursor: pointer;
			position:relative;
        }
		.ws-head .ws-nav-login .ws-nav-headmap .ws-ping1-num{
			 padding: 0 6px;
                height: 18px;
                font-size: 12px;
                text-align: center;
                line-height: 18px;
                position: absolute;
                top: -6px;
                right: -12px;
                background: #E50012;
                border-radius: 12px;
                color: #fff;
		}
		.ws-head .ws-nav-login .ws-nav-headmap .ws-ping1-num:hover{
			color:#fff!important;
		}
        .ws-head .ws-nav-login .ws-nav-headmap img {
            width: 100%;
            height: 100%;
            border-radius: 100%;
        }
        .ws-head .ws-nav-login .ws-nav-usersAnimate {
            -webkit-animation-name: zoomIn;
            animation-name: zoomIn;
        }
        .ws-head .ws-nav-login .ws-nav-users {
            display: none;
            position: absolute;
            top: 40px;
            left: 0;
            z-index: 11;
            margin-left: -35px;
            width: 100px;
            background: #fff;
            box-shadow: 0 1px 15px rgba(18, 21, 21, 0.2);
            -webkit-animation-duration: 0.2s;
            -moz-animation-duration: 0.2s;
            -ms-animation-duration: 0.2s;
            -o-animation-duration: 0.2s;
            animation-duration: 0.2s;
            -webkit-transform-origin: top center;
            -moz-transform-origin: top center;
            -ms-transform-origin: top center;
            -o-transform-origin: top center;
            transform-origin: top center;
            text-transform: uppercase;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }
        .ws-head .ws-nav-login .ws-nav-users .ws-nav-usersA {
            display: block;
            height: 38px;
            color: #333;
            line-height: 38px;
            font-size: 16px;
            width: 100%;
            text-align: center;
			position:relative;
        }
		.ws-head .ws-nav-login .ws-nav-users .ws-nav-usersA .ws-ping2-num{
			padding: 0 6px;
                    height: 18px;
                    font-size: 12px;
                    text-align: center;
                    line-height: 18px;
                    position: absolute;
                    top: 0;
                    right: 2px;
                    background: #E50012;
                    border-radius: 12px;
                    color: #fff;
		}
        .ws-head .ws-nav-login .ws-nav-users .ws-nav-usersA:hover {
            color: #f60;
        }

        /*搜索框*/
        .am-close {
            display: inline-block;
            text-align: center;
            width: 24px;
            font-size: 20px;
            font-weight: 700;
            line-height: 24px;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .2;
            -webkit-transition: all .3s;
            transition: all .3s;
        }
        .am-close:focus, .am-close:hover {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            opacity: .5;
            outline: 0;
        }
        button, input, optgroup, select, textarea {
            color: inherit;
            font: inherit;
            margin: 0;
        }
        button, input {
            line-height: normal;
        }
        /*收索弹窗*/
        .ws-searchboxBg {
			position: relative;
            background: #fff;
            font-family: "Helvetica Neue", Helvetica, "Hiragino Sans GB", PingHei, "PingFang SC", STHeitiSC-Light, "Microsoft YaHei", 微软雅黑, Arial, sans-serif;
            font-weight: 400;
            line-height: 1.6;
            color: #333;
            font-size: 16px;
			
            display: none;
            padding-top: 108px;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 150;
            background: #fff;
            font-size: 16px;
        }
		
		.ws-searchboxBg *,.ws-searchboxBg :after,.ws-searchboxBg :before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .ws-searchboxBg .am-close {
            position: absolute;
            top: 40px;
            right: 40px;
            font-size: 40px;
            font-style: normal;
        }
        .ws-searchboxBg .ws-searchbox {
            width: 860px;
            margin: 0 auto;
        }
        .ws-searchboxBg .ws-searchbox-item {
            font-size: 16px;
            cursor: pointer;
            padding: 0 25px;
            margin-right: 23px;
            margin-bottom: 23px;
            color: #999;
        }
        .ws-searchboxBg .ws-searchbox-item:hover {
            color: #999;
        }
        .ws-searchboxBg .ws-searchbox-historyH {
            padding-bottom: 23px;
        }
        .ws-searchboxBg .ws-searchbox-historyH .ws-searchbox-historyH1 {
            font-size: 18px;
            color: #999;
            line-height: 1;
        }
        .ws-searchboxBg .ws-searchbox-historyH .ws-searchbox-historyH2 {
            font-size: 14px;
            color: #999;
            line-height: 1;
            cursor: pointer;
            position: relative;
        }
        .ws-searchboxBg .ws-searchbox-historyH .ws-searchbox-historyH2 i {
            position: absolute;
            top: 0;
            left: -20px;
            background-image: url('http://www.d1ev.com/new2016/src/public/images/sprite2.png');
            background-position: -213px -34px;
            width: 16px;
            height: 16px;
        }
        .ws-searchboxBg .ws-searchbox-hot .ws-searchbox-hoth {
            font-size: 18px;
            color: #999;
            padding-top: 35px;
            padding-bottom: 25px;
        }
        .ws-searchboxBg .ws-searchbox-hot .ws-searchbox-hotc .ws-searchbox-list {
            cursor: pointer;
            color: #f60;
            height: 30px;
            line-height: 30px;
            padding: 0 25px;
            margin-right: 23px;
            margin-bottom: 23px;
        }
        .ws-searchboxBg .ws-searchbox-hot .ws-searchbox-hotc .ws-searchbox-list:hover {
            color: #fff!important;
            background: #f60;
        }
        .ws-searchboxBg .ws-nav-searchbox-inp {
            width: 100%;
            position: relative;
            padding-bottom: 58px;
        }
        .ws-searchboxBg .ws-nav-searchbox-inp .ws-input {
            width: 100%;
            height: 50px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding-left: 18px;
            outline: none;
			padding-right:64px;
        }
        .ws-searchboxBg .ws-nav-searchbox-inp .ws-nav-searchbox-inpIcon {
            cursor: pointer;
            position: absolute;
            top: 13px;
            right: 20px;
            background-position: -213px 0px;
            width: 24px;
            height: 24px; 
            background-image: url('http://www.d1ev.com/new2016/src/public/images/sprite2.png');
        }
		.blank90{
			height:90px;
			clear:both;
		}
    </style>


<!--导航-->
<div class="ws-fix-head">
    <!--顶部二级导航-->
    <div class="ws-head-bg">
        <div class="ws-head am-cf am-container">
             <a href="http://www.d1ev.com/" class="ws-head-a am-fl "><h1 class="ws-head-icon">
               电动汽车
            </h1></a>
            <div class="am-fl ws-head-nav am-cf">
                <div class="am-fl ws-head-col">
                    <div class="ws-head-colName">资讯<i class="ws-head-colIcon"></i></div>
                    <div class="ws-head-colList am-cf">
                        <a href="http://www.d1ev.com/tag-shichang" class="ws-head-colListItem am-fl">
                            市&nbsp;&nbsp;场
                        </a>
                        <a href=" http://www.d1ev.com/tag-qiye" class="ws-head-colListItem am-fl">
                            企&nbsp;&nbsp;业
                        </a>
                        <a href="http://www.d1ev.com/tag-zhengce" class="ws-head-colListItem am-fl">
                            政&nbsp;&nbsp;策
                        </a>
                        <a href="http://www.d1ev.com/tag-jishu" class="ws-head-colListItem am-fl">
                            技&nbsp;&nbsp;术
                        </a>
                        <a href="http://www.d1ev.com/tag-ziben" class="ws-head-colListItem am-fl">
                            资&nbsp;&nbsp;本
                        </a>
                        <a href="http://www.d1ev.com/tag-renwu" class="ws-head-colListItem am-fl">
                            人&nbsp;&nbsp;物
                        </a>
                        <a href="http://www.d1ev.com/tag-guandian" class="ws-head-colListItem am-fl">
                            观&nbsp;&nbsp;点
                        </a>
                        <a href="http://www.d1ev.com/choosecar" class="ws-head-colListItem am-fl">
                            车&nbsp;&nbsp;讯
                        </a>
                    </div>
                </div>
                <div class="am-fl ws-head-col">
                    <div class="ws-head-colName">栏目<i class="ws-head-colIcon"></i></div>
                    <div class="ws-head-colList ws-head-colList2">
                        <a href="http://www.d1ev.com/tag-evcb" class="ws-head-colListItem2">
                            EV晨报
                        </a>
                        <a href="http://www.d1ev.com/tag-weekhot" class="ws-head-colListItem2">
                            一周热点
                        </a>
                        <a href="http://www.d1ev.com/tag-weekcar" class="ws-head-colListItem2">
                            一周新车
                        </a>
                    </div>
                </div>
                <div class="am-fl ws-head-col">
                    <a class="ws-head-colName" href="http://www.d1ev.com/member/daniusay">大牛说</a>
                </div>
                <div class="am-fl ws-head-col">
                    <a class="ws-head-colName" href="http://d1ev.com/industry_data.php">数据</a>
                </div>
                <div class="am-fl ws-head-col">
                    <a class="ws-head-colName" href="http://d1ev.com/industry_eport.php">报告</a>
                </div>
                <div class="am-fl ws-head-col">
                    <a class="ws-head-colName" href="http://www.d1ev.com/huodong">活动</a>
                </div>
                <div class="am-fl ws-head-col">
                    <a class="ws-head-colName ws-head-colNameLast" href="http://d1ev.com/enterprise_platform.php "><i class="ws-head-colGold"></i>金牌供应商</a>
                </div>
            </div>
            <div class="am-fr am-cf">
                <div class="am-fl ws-nav-search">
                    <i class="ws-nav-searchIcon"></i>
                </div>
                <!-- 登录前状态 -->
                <?php if(!$userid){ ?>
                <div class="am-fl am-cf ws-nav-login">
                    <a class="am-fl ws-nav-loginA" href="http://www.d1ev.com/login">登录</a>
                    <i class="am-fl ws-nav-loginI">/</i>
                    <a class="am-fl ws-nav-loginA" href="{$config_siteurl}register"> 注册</a>
                </div>
                <?php }else{ ?>
                <!-- 登录后状态 -->
                <div class="am-fl am-cf ws-nav-login">
                    <div class="ws-nav-headmap">
					<?php $comm = redis('hget', 'newcount', 'userid_' . $userid);$comm_tx = $comm ?  $comm : '';?>
                        <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $userid . '/30x30.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="" id="menu-avatar">
						<if condition="$comm_tx">
						<a class="ws-ping1-num" href="http://www.d1ev.com/member/comments/index.html">
						{$comm_tx}
						</a></if>
                    </div>
                    <div class="ws-nav-users">
                        <a href="http://www.d1ev.com/member/article/index.html" class="ws-nav-usersA">我的投稿</a>
                         <!--<a href="http://www.d1ev.com/member/home/index.html" class="ws-nav-usersA">我的消息</a>-->
                        <!--<a href="http://www.d1ev.com/member/subscribe/index.html" class="ws-nav-usersA">我的订阅</a> -->
                        <a href="http://www.d1ev.com/member/favorite/index.html" class="ws-nav-usersA">我的收藏</a>
                        <a href="http://www.d1ev.com/member/comments/index.html" class="ws-nav-usersA">我的评论
						<if condition="$comm_tx"><span class="ws-ping2-num">{$comm_tx}</span></if></a>
                        <a href="http://www.d1ev.com/member/message/index.html" class="ws-nav-usersA">我的私信</a>
                        <a href="http://www.d1ev.com/logout?forward=" class="ws-nav-usersA">退出</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!--搜索框-->
<div class="ws-searchboxBg am-animation-fade">
    <div class="ws-searchbox">
        <i class="ws-searchbox-close am-close">
            ×
        </i>
        <div class="ws-searchbox am-animation-scale-up">
            <div class="ws-nav-searchbox-inp">
                <form class="search-all-form" action="http://www.d1ev.com/search.html" method="get">
                    <input class="ws-input search-all-form-q" name="q" type="text" placeholder="请输入关键字">
                    <i class="ws-nav-searchbox-inpIcon search-all-form-submit"></i>
                </form>
            </div>
            <div class="ws-searchbox-history">
                <div class="ws-searchbox-historyH am-cf">
                    <div class="am-fl ws-searchbox-historyH1">我的历史记录</div>
                    <div class="am-fr ws-searchbox-historyH2"><i></i>清空历史记录</div>
                </div>
                <div class="ws-searchbox-historyC am-cf">
                    <a class="ws-searchbox-item am-fl" href="http://www.d1ev.com/search.html?q=奥捷斯绅雅" target="_blank">奥捷斯绅雅</a><a class="ws-searchbox-item am-fl" href="http://www.d1ev.com/search.html?q=奇瑞" target="_blank">奇瑞</a><a class="ws-searchbox-item am-fl" href="http://www.d1ev.com/search.html?q=3333" target="_blank">3333</a> </div>
            </div>
            <div class="ws-searchbox-hot">
                <div class="ws-searchbox-hoth">
                    热搜词
                </div>
                <div class="ws-searchbox-hotc am-cf">
                    <a class="ws-searchbox-list am-fl" href="http://www.d1ev.com/search.html?q=北汽" target="_blank">北汽</a><a class="ws-searchbox-list am-fl" href="http://www.d1ev.com/search.html?q=比亚迪" target="_blank">比亚迪</a><a class="ws-searchbox-list am-fl" href="http://www.d1ev.com/search.html?q=江淮" target="_blank">江淮</a><a class="ws-searchbox-list am-fl" href="http://www.d1ev.com/search.html?q=电动汽车" target="_blank">电动汽车</a><a class="ws-searchbox-list am-fl" href="http://www.d1ev.com/search.html?q=新能源汽车" target="_blank">新能源汽车</a> </div>
            </div>
        </div>
    </div>
</div>
<div class="blank90"></div>
<!--
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script> -->
<script src="http://www.d1ev.com/new2016/src/external/js/headroom.js"></script>

<script>

    $(function () {
        //导航部分
		//console.log($(".ws-fix-head").html());
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

    }); 
	
</script>
