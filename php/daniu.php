<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="大牛说,第一电动网" />
<meta name="keywords" content="大牛说,第一电动网" />
<title>{$userinfo['nickname']}_电动汽车大牛的自媒体平台_第一电动网 </title>
<script type="text/javascript" src="http://assets-cdn.d1ev.com/assets/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<link rel="stylesheet" href="http://www.d1ev.com/daniu/css/base.css" />
<link rel="stylesheet" href="http://www.d1ev.com/daniu/css/oxHeader.css" />
<link rel="stylesheet" href="http://www.d1ev.com/daniu/css/personal.css" />
<link type="text/css" href="http://www.d1ev.com/statics/extres/member/css/core.css" rel="stylesheet" />
<script src="http://www.d1ev.com/daniu/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
<script src="http://www.d1ev.com/daniu/js/common.js" type="text/javascript" charset="utf-8"></script>
<script>
// 获取终端的相关信息
var Terminal = {
// 辨别移动终端类型
platform : function() {
var u = navigator.userAgent, app = navigator.appVersion;
return {
// 是否为iPhone或者QQHD浏览器
iPhone : u.indexOf('iPhone') > -1,
// 是否iPad
iPad : u.indexOf('iPad') > -1,
// 是否微信
weixin : u.toLowerCase().indexOf("micromessenger") > -1,
// android终端或者uc浏览器
android : u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
// 是否WinPhone
wp : u.indexOf('Windows Phone') > -1,

};
}(),
}
// 根据不同的终端，跳转到不同的地址
if (Terminal.platform.weixin) {
location.href = 'http://www.d1ev.com/member/home/index2?uid={$userinfo.userid}';
} else if (Terminal.platform.wp) {
location.href = 'http://www.d1ev.com/member/home/index2?uid={$userinfo.userid}';
} else if (Terminal.platform.android) {
location.href = 'http://www.d1ev.com/member/home/index2?uid={$userinfo.userid}';
} else if (Terminal.platform.iPhone) {
location.href = 'http://www.d1ev.com/member/home/index2?uid={$userinfo.userid}';
} else{

}
</script>

<script>

//全局变量
var GV = {
    DIMAUB: "http://www.d1ev.com/",
    JS_ROOT: "statics/js/"
};
var _config = {};
//会员中心地址
_config['domainSite'] = GV.DIMAUB;
//网站地址
_config['domainMainSite'] = 'http://www.d1ev.com/';
//当前模块静态文件目录
_config['domainStatic'] = 'http://www.d1ev.com/statics/extres/member/';	

$config_siteurl=GV.DIMAUB;

</script>
<script src="http://www.d1ev.com/daniu/js/allCommon.js" type="text/javascript" charset="utf-8"></script>
<script src="http://www.d1ev.com/daniu/js/personal.js" type="text/javascript" charset="utf-8"></script>

<template file="Contents/head_ext.php"/>
</head>

<body>
<template file="Contents/header_v7.php"/>
<div class="main" style="padding-top:90px;">

	<div class="main-user clearfix">
		<div class="user-img fl">
                    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $uid . '/180x180.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$userinfo.nickname}">
		</div>
		<div class="user-con fl">
			<div class="h4 clearfix">
				<h4 class="fl">{$userinfo['nickname']}</h4>
				<a href="javascript:;" class="letter fl" onclick="message.send({$uid},{$myid},0);">
					发私信
				</a>
				<div class="btns">
				<a href="javascript:;" class="follow fl" onclick="addFriend({$uid})">
					<b>+</b>加关注
				</a>
				</div>
			</div>
			<p> {$userinfo['about']}</p>
		</div>
	</div>
	<div class="main2_l">
		<ul id="tab">
			<li class="tabcur"><a onclick="tab('tabcon3',this)" href="javascript:void(0)">相关文章</a></li>
			<!--<li><a onclick="tab('tabcon0',this)" href="javascript:void(0)">动态</a></li>-->
			<li><a onclick="tab('tabcon0',this)" href="javascript:void(0)" id="jump_comm">评论</a></li>
			<!--<li><a onclick="tab('tabcon2',this)" href="javascript:void(0)" id="jump_fav">收藏</a></li>-->
			<li><a onclick="tab('tabcon1',this)" href="javascript:void(0)" id="jump_friends">关注</a></li>
			<li><a onclick="tab('tabcon2',this)" href="javascript:void(0)" id="jump_fans">粉丝</a></li>
		</ul>
		<div id="tabcon">
			<div class="tabcon1 new_list" id="tabcon3" style="display: block;">
				<ul id="authorArticle">
				<volist name="authorArticle" id="vo">
					<li>
						<div class="list_lt">
                                                    <img src="<?php echo src_www_to_img($vo['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.title}">
						</div>
						<div class="list_rt">
							<h3><a href="{$vo.url}" target="_blank" class="new_tit" style="display: block;">{$vo.title}</a>
							</h3>
							<p class="news_txt">{$vo.description|str_cut=###,100}。</p>
							<div class="rt_bt">
								<div class="f_l">
									<span class="time"><i></i>{$vo.updatetime|date="Y/m/d H:i",###}</span></div>
								<div class="f_r"> <a class="pl_num" href="{$vo.url}#comment" target="_blank" title="我要评论"><i></i>{:commCount2($vo['catid'], $vo['id'])}</a> <span class="f_r_l">|</span>
									<div class="shareTo"> <span class="shareshowbtn"></span>
										<div class="share">
											<a class="bds_tsina" data-cmd="tsina" href="http://www.d1ev.com/public/share?catid={$vo.catid}&id={$vo.id}&type=tsina" target="_blank" title="分享到新浪微博"></a>
											<a class="bds_qzone" data-cmd="qzone" href="http://www.d1ev.com/public/share?catid={$vo.catid}&id={$vo.id}&type=qzon" target="_blank" title="分享到QQ空间"></a>
											<a class="bds_tqq" data-cmd="tqq" href="http://www.d1ev.com/public/share?catid={$vo.catid}&id={$vo.id}&type=tqq" target="_blank" title="分享到腾讯微博"></a>
											<a class="bds_qq" data-cmd="qq" href="http://www.d1ev.com/public/share?catid={$vo.catid}&id={$vo.id}&type=qq" target="_blank" title="分享到QQ好友"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					 </volist>   
				</ul>
				<ul id="more">
					<li><a href="javascript:;" data-uid="{$uid}" onclick="getMoreAuthorArticle(2,{$uid});" id="getMoreAuthorArticle">点击加载更多...</a></li>
				</ul>
			</div>
			
			<div class="tabcon" id="tabcon0" style="display: none;">
				<ul id="getPL"><!--评论-->
				<if condition="$index neq ''">
					<volist name="index" id="vo" style="display: none;">
					<?php 
					$article = unserialize($vo['article_info']);
					$action = unserialize($vo['action_info']);
					$modelid = getCategory($article['catid'],'modelid');
					?>
                        <li>
                            <span class="pl_time">{$vo.date|date="Y-m-d",###}<br>{$vo.date|date="H:i:s",###}</span>
                            <div class="tx_con">
                                <p class="pl_t"><?php if($vo['type']==1){ ?>发表评论：<?php }elseif($vo['type']==2){ ?>回复了 <a herf="javascript:;">{$vo.to_author}</a> 的评论：{$action['reply_content']}<?php }elseif($vo['type']==3){ ?>收藏<?php if($modelid==20){ ?>文章<?php }else{ ?>图秀<?php } ?>：<?php } ?></p>
								<?php if($vo['type']==3){ ?>
								<h3 class="sc_news_t"><a href="{$article.url}" target="_blank">{$article.title}</a></h3>
								<?php }else{ ?>
                                <p class="pl_c"><span>{$vo.content}</span></p>
                                <h3 class="news_t"><a href="{$article.url}" target="_blank">{$article.title}</a></h3>
                                <p class="pl_tm"><span></span> <a title="回复" class="ds-post-reply hf" href="javascript:void(0);" onClick="reply({$article['catid']},{$article['id']},{$action['comm_id']})"></a></p>
								<?php } ?>
                            </div>
                        </li>
						</volist><else />
						 <li>暂无评论</li>
						</if>
				</ul>
			</div>

			<div class="tabcon1" id="tabcon1" style="display: none;">
				<ul id="friends">
					<if condition="$friends neq ''">
					<volist name="friends" id="vo">
                    	<li id="id_5">
                            <div class="fans_img">
                                <a rel="nofollow author" href="http://www.d1ev.com/home/{$vo.fid}" title="{:getUserInfo($vo['fid'],'nickname')}"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['fid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt=""></a>
                            </div>
							
							<div class="fans_ms">
                                <p><a href="http://www.d1ev.com/home/{$vo.fid}">{:getUserInfo($vo['fid'],'nickname')}</a> {:getUserInfo($vo['fid'],'area')}</p>
                                  <p>{$vo.ctime|date="Y-m-d H:i:s",###} 关注了Ta</p>
                                </div>
                            <div class="fans_gz" id="friends_{$vo.fid}">
                                {:getFansStatus($myid, $vo['fid'])}
                            </div>
							
                        </li>
						</volist><else />
						<li id="id_5">暂无关注</li>
						</if>
				</ul>
				<ul id="more">
					<li><a href="javascript:;" onclick="getMoreFriends(2,{$userinfo['userid']});" id="getMoreFriends">点击加载更多...</a></li>
				</ul>
			</div>
			<div class="tabcon1" id="tabcon2" style="display: none;">
				<ul id="fans">
				<if condition="$fans neq ''">
				<volist name="fans" id="vo">
                    	<li id="id_5">
                            <div class="fans_img">
                                <a rel="nofollow author" href="http://www.d1ev.com/home/{$vo.uid}" title="{:getUserInfo($vo['uid'],'nickname')}">
                                    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['uid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="">
                                </a>
                            </div>
							
							<div class="fans_ms">
                                <p><a href="http://www.d1ev.com/home/{$vo.uid}">{:getUserInfo($vo['uid'],'nickname')}</a> {:getUserInfo($vo['uid'],'area')}</p>
                                  <p>{$vo.ctime|date="Y-m-d H:i:s",###} 关注了Ta</p>
                                </div>
                            <div class="fans_gz" id="fans_{$vo.uid}">
							{:getFansStatus($myid, $vo['uid'])}
                            </div>
							
                        </li>
                    </volist><else />
					<li id="id_5">暂无粉丝</li>
					</if>
				</ul>
				<ul id="more">
					<li><a href="javascript:;" onclick="getMoreFans(2,1392);" id="getMoreFans">点击加载更多...</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="lastNew">
	<div class="clearfix h3">
		<div class="fl left">最新发稿大牛</div>
		<a href="http://www.d1ev.com/member/daniusay/daniu.html" target="_blank" class="fr right">MORE &gt;&gt;</a>
		
	</div>
	<div class="lastNewCon">
		<ul class="clearfix">
		<?php $daniunew = xinjintgdaniu(); //echo "<pre>";var_dump($daniunew);?>
			<foreach name="daniunew" item="vo" key="k">
			<if condition="$k lt '10'">
			<li class="fl">
				<a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank">
					<div class="imgBg">
                                            <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="">
					</div>
					<p class="imgCon">{:getUserInfo($vo['zuozhe'], 'nickname')}</p>
				</a>
				
			</li></if>
			</foreach>
		</ul>
	</div>
</div>
		


<div class="login_bg"></div>
<div class="login_main">
	<form>
		<h2>登录<i>X</i></h2>
		<div class="item"><i class="nm_ico"></i><input type="text" name="loginName" id="loginName" class="input1" maxlength="70" value="" placeholder="用户名/手机号"></div>
		<div class="item"><i class="ps_ico"></i><input type="password" name="password" id="password" class="input1" maxlength="30" placeholder="密码"></div>
		<div class="item2">
			<a href="http://www.d1ev.com/member/index/lostpassword.html" target="_blank" class="wjmm">忘记密码?</a>
			<label><input id="setCookieTime" class="check_box" type="checkbox" name="cookieTime"> 记住我</label>
		</div>
		<div class="item2">
			<input class="btn jb3" type="button" id="pl_login" value="登 录">
		</div>
		<div class="reg">还没有帐号？<a href="http://www.d1ev.com/register?forward=http://www.d1ev.com/">注册</a></div>
		<div class="qq">
			<a href="http://www.d1ev.com/member/connectqq/index.html?forward=http://www.d1ev.com/" class="qq_login jb3"><i class="qq_ico"></i>新浪微博账号登录</a>
			<a href="http://www.d1ev.com/member/connectsina/index.html?forward=http://www.d1ev.com/" class="sina_login jb3"><i class="sina_ico"></i>腾讯QQ账号登录</a>
		</div>
	</form>
</div>



<script type="text/javascript" src="http://www.d1ev.com/statics/extres/member/js/common.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/extres/member/js/jquery.artDialog.min.js"></script>	

<template file="Contents/footer_v7.php"/>
<template file="Contents/footer_ext.php"/>
</body>
</html>