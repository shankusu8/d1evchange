<header>
    <a href="http://m.d1ev.com" class="logo" title="第一电动网"><img class="enter" src="http://www.d1ev.com/statics/wap/m_d1ev/wap_logo.png" alt="第一电动网"></a>
    <div class="m_ico"><img src="http://www.d1ev.com/statics/wap/m_d1ev/ico1.png"></div>
	<div class="s_ico"><img src="http://www.d1ev.com/statics/wap/m_d1ev/ico2.png"></div>

    <!--弹出-->
    <div class="rt_con_bg"></div>
    <div class="more_nv">
        <volist name="shuxings" id="vo">
        <a href="http://m.d1ev.com/tag-{$vo.catdir}">{$vo.catname}</a>
        </volist>
        <p><span class="close">返回</span></p>
    </div>
	<div class="search">
	<form action="http://www.d1ev.com/search.html" method="get" name="sear">
        <input name="q" type="text" value="电亮中国" onFocus="OnFocusFun(this,'电亮中国',false)" onBlur="OnBlurFun(this,'电亮中国',false)"  class="s_txt">
		<input name="tab" type="hidden" value="news">
		<input name="from" type="hidden" value="mobile">
        <input name="search" type="submit" class="s_sb" value="搜索">
    </form>
	</div>

    <div class="rt_con">
        <div class="login"><?php if(!$userid){ ?><a href="http://www.d1ev.com/member/index/login2.html"><img src="http://www.d1ev.com/statics/images/member/nophoto.gif"></a><p><a href="http://www.d1ev.com/member/index/login2.html">登录</a> | <a href="http://www.d1ev.com/member/index/register2.html">注册</a></p><?php }else{ ?><a href="http://www.d1ev.com/member/home/index2.html"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $userid . '/30x30.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="" id="menu-avatar"></a><p><a href="http://www.d1ev.com/member/home/index2.html">欢迎，{:str_cut(getUserInfo($userid, 'nickname'),4)}</a></p><?php } ?></div>
        <div class="r_nav">
        	<ul>
               <!-- <li><a href="http://www.d1ev.com/sale?from=mobile"><i class="sale_ico"></i>帮买团</a></li>
                <li><a href="http://m.d1ev.com/minicar"><i class="wd_ico"></i>微电之家</a></li>-->
            	<li><a href="http://www.d1ev.com/app/index.html#d1ev"><i class="app_ico"></i>充电桩</a></li>
                <li><a href="http://www.yiduyongche.com/download.html#d1ev"><i class="yidu_ico"></i>一度用车</a></li>
                <li><a href="http://www.d1ev.com/addons/guest_book/add/typeid/1.html"><i class="yj_ico"></i>意见反馈</a></li>
                <!--<li><a href="http://auto.sina.cn/tuiguang/box.d.html/?wm=3268_9003 "><i class="wd_ico"></i>百宝箱</a></li> -->
            </ul>
        </div>
    </div>
</header>