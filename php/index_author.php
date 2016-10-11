<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1130,maximum-scale=1.0"/>
<title>{$userinfo['nickname']}的主页 - 第一电动网</title>
<script type="text/javascript" src="http://assets-cdn.d1ev.com/assets/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<link href="http://www.d1ev.com/statics/2015d1ev/css/top.css" rel="stylesheet" type="text/css">
<link href="http://www.d1ev.com/statics/css/user3.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="http://www.d1ev.com/statics/extres/member/css/core.css" rel="stylesheet" />
<script type="text/javascript">
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
</script>
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
location.href = 'http://www.d1ev.com/member/home/index2.html?uid='+{$userinfo['userid']};
} else if (Terminal.platform.wp) {
location.href = 'http://www.d1ev.com/member/home/index2.html?uid='+{$userinfo['userid']};
} else if (Terminal.platform.android) {
location.href = 'http://www.d1ev.com/member/home/index2.html?uid='+{$userinfo['userid']};
} else if (Terminal.platform.iPhone) {
location.href = 'http://www.d1ev.com/member/home/index2.html?uid='+{$userinfo['userid']};
} else{

}
</script>

<template file="Contents/head_ext.php"/>
</head>
<body>
<template file="Contents/header_v7.php"/>

<!--内容区-->
<div class="main" style="padding-top:20px;">
 
    <div class="m_l">
		<!--面包屑-->
		<div class="main_l">
        	<div class="user_img"><a href="{$homeurl}" title="会员头像"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $uid . '/180x180.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt=""></a></div>
        	<div class="user_ms">
            	<div class="user_cn">
                	<div class="u_name">{$userinfo['nickname']}<span class="type"><?php echo getMemberGroup($userinfo['groupid'],'icon');?></span><div class="zan"><a href="javascript:void(0)" class="zan_cuser" data-toupiaouid="{$userinfo['userid']}">给他投票+<span id="toupiaonum">{$userinfo['heat']}</span></a></div></div>
                    <p>{$userinfo['about']}</p>
                    <div class="u_btns">
                        <div class="u_link">
                            <ul>
                                <li><a href="{$homeurl}">{$authorArticleCount}<br />文章</a></li>
                                <li><a href="?type=comm">{$comm|default=0}<br />评论</a></li>
                                <li><a href="?type=fans">{$fansCount|default=0}<br />粉丝</a></li>
                            </ul>
                        </div>
                        <div class="btns btns_inline">{:getFansStatus2($myid, $uid)}</div>
                        <a href="javascript:;" title="发私信" class="ms" onClick="message.send({$uid},{$myid},0);"><i></i>发私信</a>
                    </div>
                    
				</div>
                
            </div>
            <div class="blank10"></div>
            
			
		</div>
        <div class="blank20"></div>
    	<div class="main2_l">
            <ul id="tab">
            	<li class="tabcur"><a onClick="tab('tabcon5',this)" href="javascript:void(0)">相关文章</a></li>		
                <li><a onClick="tab('tabcon0',this)" href="javascript:void(0)">动态</a></li>
                <li><a onClick="tab('tabcon1',this)" href="javascript:void(0)" id="jump_comm">评论</a></li>
                <li><a onClick="tab('tabcon2',this)" href="javascript:void(0)" id="jump_fav">收藏</a></li>
                <li><a onClick="tab('tabcon3',this)" href="javascript:void(0)" id="jump_friends">关注</a></li>
                <li><a onClick="tab('tabcon4',this)" href="javascript:void(0)" id="jump_fans">粉丝</a></li>

            </ul>
        	<div id="tabcon">
				<div class="tabcon1 new_list" id="tabcon5" style="display: block;">
					<ul id="authorArticle">
                    <volist name="authorArticle" id="vo">
                        <li>
                            <div class="list_lt"><a href="{$vo.url}" title="{$vo.title}" target="_blank"><img src="{$vo.thumb}" alt="{$vo.title}"></a></div>
                            <div class="list_rt">
                            <h3><a href="{$vo.url}" target="_blank" class="new_tit" style="display: block;">{$vo.title}</a>
                            </h3>
                            <p class="news_txt">{$vo.description|str_cut=###,100}</p>
                            <div class="rt_bt">
                                <div class="f_l">
                                    <span class="time"><i></i>{$vo.updatetime|date="Y/m/d H:i",###}</span></div>
                                    <div class="f_r"> <a class="pl_num" href="{$vo.url}#comment" target="_blank" title="我要评论"><i></i>{:commCount2($vo['catid'], $vo['id'])}</a> <span class="f_r_l">|</span>
                                        <div class="shareTo"> <span class="shareshowbtn"></span>
                                            <div class="share">
                                            <a class="bds_tsina" data-cmd="tsina" href="{$config_siteurl}public/share?catid={$vo.catid}&id={$vo.id}&type=tsina" target="_blank" title="分享到新浪微博"></a>
                                            <a class="bds_qzone" data-cmd="qzone" href="{$config_siteurl}public/share?catid={$vo.catid}&id={$vo.id}&type=qzone" target="_blank" title="分享到QQ空间"></a>
                                            <a class="bds_tqq" data-cmd="tqq" href="{$config_siteurl}public/share?catid={$vo.catid}&id={$vo.id}&type=tqq" target="_blank" title="分享到腾讯微博"></a>
                                            <a class="bds_qq" data-cmd="qq" href="{$config_siteurl}public/share?catid={$vo.catid}&id={$vo.id}&type=qq" target="_blank" title="分享到QQ好友"></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</li>
                        </volist>   
					</ul>
					<ul id="more">
                        <li><a href="javascript:;" onClick="getMoreAuthorArticle(2,{$uid});" id="getMoreAuthorArticle">点击加载更多...</a></li>
					</ul>
				</div>
                <div class="tabcon" id="tabcon0">
                    <ul id="notify">
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
						</volist>
                    </ul>
					<ul id="more">
						<li><a href="javascript:;" onClick="getMoreNotify(2,{$uid});" id="getMoreNotify">点击加载更多...</a></li>
					</ul>
                </div>
                <div class="tabcon" id="tabcon1" style="display: none;">
                    <ul id="getPL">
					<volist name="comment" id="vo">
					<?php 
					$article = unserialize($vo['article_info']);
					$action = unserialize($vo['action_info']);
					?>
                        <li>
                            <span class="pl_time">{$vo.date|date="Y-m-d",###}<br>{$vo.date|date="H:i:s",###}</span>
                            <div class="tx_con">
                                <p class="pl_t"><?php if($vo['type']==1){ ?>发表评论：<?php }elseif($vo['type']==2){ ?>回复了 <a herf="javascript:;">{$vo.to_author}</a> 的评论：{$action['reply_content']}<?php } ?></p>
								
                                <p class="pl_c"><span>{$vo.content}</span></p>
                                <h3 class="news_t"><a href="{$article.url}" target="_blank">{$article.title}</a></h3>
                                <p class="pl_tm"><span></span> <a title="回复" class="ds-post-reply hf" href="javascript:void(0);" onClick="reply({$article['catid']},{$article['id']},{$action['comm_id']})"></a></p>
								
                            </div>
                        </li>
						</volist>
                        
                    </ul>
                </div>
				<div class="tabcon" id="tabcon2" style="display: none;">
                	<ul>
                    	<volist name="favicate" id="vo">
                        <li>
                            <span class="pl_time">{$vo.datetime|date="Y-m-d",###}<br>{$vo.datetime|date="H:i:s",###}</span>
                            <div class="tx_con">
                                <p class="pl_t">收藏<?php if($vo['modelid']==20){ ?>文章<?php }else{ ?>图秀<?php } ?>：</p>


								<h3 class="sc_news_t"><a href="{$vo.url}" target="_blank">{$vo.title}</a></h3>
                            </div>
                        </li>
						</volist>
                    
                    
                    </ul>
				</div>
                <div class="tabcon1" id="tabcon3" style="display: none;">
                	<ul id="friends">
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
						</volist>
                    </ul>
                    <ul id="more">
						<li><a href="javascript:;" onClick="getMoreFriends(2,{$uid});" id="getMoreFriends">点击加载更多...</a></li>
					</ul>
				</div>
                <div class="tabcon1" id="tabcon4" style="display: none;">
                	<ul id="fans">
                    	<volist name="fans" id="vo">
                    	<li id="id_5">
                            <div class="fans_img">
                                <a rel="nofollow author" href="http://www.d1ev.com/home/{$vo.uid}" title="{:getUserInfo($vo['uid'],'nickname')}"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['uid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt=""></a>
                            </div>
							
							<div class="fans_ms">
                                <p><a href="http://www.d1ev.com/home/{$vo.uid}">{:getUserInfo($vo['uid'],'nickname')}</a> {:getUserInfo($vo['uid'],'area')}</p>
                                  <p>{$vo.ctime|date="Y-m-d H:i:s",###} 关注了Ta</p>
                                </div>
                            <div class="fans_gz" id="fans_{$vo.uid}">
							{:getFansStatus($myid, $vo['uid'])}
                            </div>
							
                        </li>
                    </volist>
                    </ul>
                     <ul id="more">
						<li><a href="javascript:;" onClick="getMoreFans(2,{$uid});" id="getMoreFans">点击加载更多...</a></li>
					</ul>
				</div>
            </div>
        	
        </div>
    </div>
	<div class="m_r">
    <!--
    	<h2><span>认证车型</span></h2>
        <div class="rzcx"><a href="#" class="car_pic" title="####"><img src="http://www.d1ev.com/d/file/contents/2014/09/thumb_54276ee0e85ae.jpg" alt="#####"><h4 class="enter">北汽E150</h4></a></div>
        <div class="blank10"></div>-->
        <h2><span>其他用户</span></h2>
        <div class="qtcz">
        	<ul>
            <volist name="ohtherUser" id="vo">
            	<li>
                	<div class="l_img"><a href="http://www.d1ev.com/home/{$vo.userid}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt=""></a></div>
                    <div class="r_cn">
                        <h4><a href="http://www.d1ev.com/home/{$vo.userid}" target="_blank" class="c_nm">{$vo.nickname}</a><span class="type"><?php echo getMemberGroup($userinfo['groupid'],'icon');?></span></h4>
                        <p class="c_txt">{$vo.about}</p>
                    </div>
                </li>
                </volist>
            </ul>
        </div>
    </div>
</div>
<div class="blank20"></div>

<!--footer部分-->
<template file="Contents/footer_v7.php"/>
<!--搜索弹窗-->
<template file="Contents/footer_search.php"/>
<script type="text/javascript">
$(function(e) {
    $(".zan_cuser").click(function(){
		//var zan_nm = Number($(this).find("span").text())+1;
		var toupiaouid = $(this).data("toupiaouid");
		$.ajax({
            url: _config['domainSite'] + 'index.php?m=Public&a=userVote&userid='+toupiaouid,
            dataType: 'jsonp',
			jsonp:'callback',
            success: function (data) {
				if(data.status=='nologin'){
					$(".login_bg").show();$(".login_main").show();
				}else if(data.status=='more'){
					$.tipMessage('投票频繁，明天再来吧', 2, 1500);
				}else{
					$("#toupiaonum").html(parseInt($("#toupiaonum").text()) + 1);
				}
				//$.tipMessage('投票', 3, 1500);
            }
        });
	});
});

function reply(catid,id,commid){
  $.ajax({
	  
            url: _config['domainSite'] + 'index.php?m=Public&a=getComment&catid='+catid+'&id='+id+"&commid="+commid,
            dataType: "html",
            success: function (data) {
                $.dialog({
                    id: 'reply',
                    title: '评论回复',
                    content: data,
                    lock: true
                });
            }
        });
}

function showhidediv(id){
		var sbtitle=document.getElementById(id);
		if(sbtitle){
		   if(sbtitle.style.display=='block'){
		   sbtitle.style.display='none';
		   }else{
		   sbtitle.style.display='block';
		   }
		}
	}
function tab(showContent,selfObj){
	var tag = document.getElementById("tab").getElementsByTagName("li");
	var taglength = tag.length;
	for(i=0; i<taglength; i++){
		tag[i].className = "";
	}
	selfObj.parentNode.className = "tabcur";
	for(i=0; j=document.getElementById("tabcon"+i); i++){
		j.style.display = "none";
	}
	document.getElementById(showContent).style.display = "block";
}

</script>
<script type="text/javascript" language="javascript">
function getUrlParam(name){
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if (r!=null) return unescape(r[2]); return null;
}

jQuery(function() {
	var type = getUrlParam('type');
	if(type){
		$('#jump_'+type).click();
	}
	
})
</script>
<script type="text/javascript" src="http://www.d1ev.com/statics/extres/member/js/common.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/extres/member/js/jquery.artDialog.min.js"></script>
<script type="text/javascript" language="javascript">
//添加关注
function addFriend(fid){
    $.ajax({
        type: 'GET',
        url: "{$config_siteurl}member/public/addFriend",
        data:{'fid':fid},
        dataType: 'html',
        cache: false,
        success: function(data){
            var data = $.parseJSON(data);
            if(data['status'] == 0){
                //$.tipMessage(data['info'], 2, 1500);
				$(".login_bg").show();$(".login_main").show();

            }else{
                $('#friends_'+fid).html('<span class="gz_end">已关注，<a href="javascript:void(0);" onClick="delFriend('+fid+')">取消</a></span>');
				$('#fans_'+fid).html('<span class="gz_end">已关注，<a href="javascript:void(0);" onClick="delFriend('+fid+')">取消</a></span>');
                $.tipMessage(data['info'], 3, 1500);
            }
        }
    });
}
//删除关注
function delFriend(fid){
    $.ajax({
        type: 'GET',
        url: "{$config_siteurl}member/public/delFriend",
        data:{'fid':fid},
        dataType: 'html',
        cache: false,
        success: function(data){
            var data = $.parseJSON(data);
            if(data['status'] == 0){
                $.tipMessage(data['info'], 2, 1500);
            }else{
                $('#friends_'+fid).html('<a href="javascript:void(0);" class="gz" onClick="addFriend('+fid+')"><b>+</b>加关注</a>');
				$('#fans_'+fid).html('<a href="javascript:void(0);" class="gz" onClick="addFriend('+fid+')"><b>+</b>加关注</a>');
                $.tipMessage(data['info'], 3, 1500);
            }
        }
  });
}

//添加关注
function addFriend2(fid){
    $.ajax({
        type: 'GET',
        url: "{$config_siteurl}member/public/addFriend",
        data:{'fid':fid},
        dataType: 'html',
        cache: false,
        success: function(data){
            var data = $.parseJSON(data);
            if(data['status'] == 0){
				//$.tipMessage(data['info'], 2, 1500);
				$(".login_bg").show();$(".login_main").show();

            }else{
                $('.btns').html('<span class="gz_end">已关注，<a href="javascript:void(0);" onClick="delFriend2('+fid+')">取消</a></span>');
				$.tipMessage(data['info'], 3, 1500);
            }
        }
    });
}
//删除关注
function delFriend2(fid){
    $.ajax({
        type: 'GET',
        url: "{$config_siteurl}member/public/delFriend",
        data:{'fid':fid},
        dataType: 'html',
        cache: false,
        success: function(data){
            var data = $.parseJSON(data);
            if(data['status'] == 0){
                $.tipMessage(data['info'], 2, 1500);
            }else{
                $('.btns').html('<a href="javascript:void(0);" class="gz" onClick="addFriend2('+fid+')"><b>+</b>加关注</a>');
                $.tipMessage(data['info'], 3, 1500);
            }
        }
  });
}
function getMoreNotify(p,uid){
	var next = Number(p)+1;
	$.ajax({
			type: 'GET',
			url: 'http://www.d1ev.com/member/home/getMoreNotify?p='+p+'&uid='+uid,
			dataType: 'json',
			cache: false,
			beforeSend: function(){
				$("#getMoreNotify").html("正在载入...");
			},
			success: function(json){
				if(json){
					var li = '';
					$.each(json,function(index,array){

						if(array['to_uid']==0){
							homeurl = '<a href="javascript:;">';
						}else{
							homeurl = '<a href="http://www.d1ev.com/home/'+array['to_uid']+'" target="_blank">';
						}

						if(array['type']==1){
							type = '发表评论：';
							contents = '<p class="pl_c"><span>'+array['content']+'</span></p><h3 class="news_t"><a href="'+array['url']+'" target="_blank">'+array['title']+'</a></h3><p class="pl_tm"><span></span> <a title="回复" class="ds-post-reply hf" href="javascript:void(0);" onclick="reply('+array['catid']+','+array['article_id']+','+array['id']+');"></a></p>';
						}else if(array['type']==2){
							type = '回复了 '+homeurl+array['to_author']+'</a> 的评论：'+array['parent_content'];
							contents = '<p class="pl_c"><span>'+array['content']+'</span></p><h3 class="news_t"><a href="'+array['url']+'" target="_blank">'+array['title']+'</a></h3><p class="pl_tm"><span></span> <a title="回复" class="ds-post-reply hf" href="javascript:void(0);" onclick="reply('+array['catid']+','+array['article_id']+','+array['id']+');"></a></p>';
						}else{
							if(array['modelid']==20){
								type = '收藏文章：';
							}else{
								type = '收藏图秀：';
							}
							contents = '<h3 class="sc_news_t"><a href="'+array['url']+'" target="_blank">'+array['title']+'</a></h3>';
						}

						li = li + '<li><span class="pl_time">'+array['ctime']+'<br>'+array['ctime2']+'</span><div class="tx_con"><p class="pl_t">'+type+contents+'</div></li>';

					});
					setTimeout(function(){
						$('#notify').append(li);
					},1500);
					$("#getMoreNotify").html("点击加载更多...");
					$("#getMoreNotify").attr("onclick",'getMoreNotify('+next+',{$uid});');
				}else{
					$("#getMoreNotify").html("没有更多了");
					$("#getMoreNotify").attr("onclick",'');
				}
			}
		})
}

function getMoreAuthorArticle(p,uid){
	var next = Number(p)+1;
	$.ajax({
			type: 'GET',
			url: 'http://www.d1ev.com/member/home/getMoreAuthorArticle?p='+p+'&uid='+uid,
			dataType: 'json',
			cache: false,
			beforeSend: function(){
				$("#getMoreAuthorArticle").html("正在载入...");
			},
			success: function(json){
				if(json){
					var li = '';
					$.each(json,function(index,array){

						li = li + '<li>\
                            <div class="list_lt"><a href="'+array['url']+'" title="'+array['title']+'" target="_blank"><img src="'+array['thumb']+'" alt="'+array['title']+'"></a></div>\
                            <div class="list_rt">\
                            <h3><a href="'+array['url']+'" target="_blank" class="new_tit" style="display: block;">'+array['title']+'</a>\
                            </h3>\
                            <p class="news_txt">'+array['jj']+'</p>\
                            <div class="rt_bt">\
                                <div class="f_l">\
                                    <span class="time"><i></i>'+array['sj']+'</span></div>\
                                    <div class="f_r"> <a class="pl_num" href="'+array['url']+'#comment" target="_blank" title="我要评论"><i></i>'+array['comm']+'</a> <span class="f_r_l">|</span>\
                                        <div class="shareTo"> <span class="shareshowbtn"></span>\
                                            <div class="share">\
                                            <a class="bds_tsina" data-cmd="tsina" href="http://www.d1ev.com/public/share?catid='+array['catid']+'&id='+array['id']+'&type=tsina" target="_blank" title="分享到新浪微博"></a>\
                                            <a class="bds_qzone" data-cmd="qzone" href="http://www.d1ev.com/public/share?catid='+array['catid']+'&id='+array['id']+'&type=qzone" target="_blank" title="分享到QQ空间"></a>\
                                            <a class="bds_tqq" data-cmd="tqq" href="http://www.d1ev.com/public/share?catid='+array['catid']+'&id='+array['id']+'&type=tqq" target="_blank" title="分享到腾讯微博"></a>\
                                            <a class="bds_qq" data-cmd="qq" href="http://www.d1ev.com/public/share?catid='+array['catid']+'&id='+array['id']+'&type=qq" target="_blank" title="分享到QQ好友"></a>\
                                        </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
						</li>';

					});
					setTimeout(function(){
						$('#authorArticle').append(li);
					},1500);
					$("#getMoreAuthorArticle").html("点击加载更多...");
					$("#getMoreAuthorArticle").attr("onclick",'getMoreAuthorArticle('+next+',{$uid});');
				}else{
					$("#getMoreAuthorArticle").html("没有更多了");
					$("#getMoreAuthorArticle").attr("onclick",'');
				}
			}
		})
}

function getMoreFriends(p,uid){
	var next = Number(p)+1;
	$.ajax({
			type: 'GET',
			url: 'http://www.d1ev.com/member/home/getMoreFriends?p='+p+'&uid='+uid,
			dataType: 'json',
			cache: false,
			beforeSend: function(){
				$("#getMoreFriends").html("正在载入...");
			},
			success: function(json){
				if(json){
					var li = '';
					$.each(json,function(index,array){

						li = li + '<li id="id_5"><div class="fans_img"><a rel="nofollow author" href="http://www.d1ev.com/home/'+array['fid']+'" title="'+array['nickname']+'"><img onerror="this.src=\'<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>\'" src="<?php echo src_www_to_img('/d/file/avatar/', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>'+array['fid']+'/90x90.jpg<?php echo C('AVATARUPDATETIMESTAMP'); ?>" alt="'+array['nickname']+'"></a></div><div class="fans_ms"><p><a href="http://www.d1ev.com/home/'+array['fid']+'">'+array['nickname']+'</a> '+array['area']+'</p><p>'+array['ctime']+' 关注了Ta</p></div><div class="fans_gz" id="friends_'+array['fid']+'">'+array['friendsstatus']+'</div></li>';

					});
					setTimeout(function(){
						$('#friends').append(li);
					},1500);
					$("#getMoreFriends").html("点击加载更多...");
					$("#getMoreFriends").attr("onclick",'getMoreFriends('+next+',{$uid});');
				}else{
					$("#getMoreFriends").html("没有更多了");
					$("#getMoreFriends").attr("onclick",'');
				}
			}
		})
}

function getMoreFans(p,uid){
	var next = Number(p)+1;
	$.ajax({
			type: 'GET',
			url: 'http://www.d1ev.com/member/home/getMoreFans?p='+p+'&uid='+uid,
			dataType: 'json',
			cache: false,
			beforeSend: function(){
				$("#getMoreFans").html("正在载入...");
			},
			success: function(json){
				if(json){
					var li = '';
					$.each(json,function(index,array){

						li = li + '<li id="id_5"><div class="fans_img"><a rel="nofollow author" href="http://www.d1ev.com/home/'+array['uid']+'" title="'+array['nickname']+'"><img onerror="this.src=\'<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>\'" src="<?php echo src_www_to_img('/d/file/avatar/', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>'+array['uid']+'/90x90.jpg<?php echo C('AVATARUPDATETIMESTAMP'); ?>" alt="'+array['nickname']+'"></a></div><div class="fans_ms"><p><a href="http://www.d1ev.com/home/'+array['uid']+'">'+array['nickname']+'</a> '+array['area']+'</p><p>'+array['ctime']+' 关注了Ta</p></div><div class="fans_gz" id="fans_'+array['uid']+'">'+array['fansstatus']+'</div></li>';

					});
					setTimeout(function(){
						$('#fans').append(li);
					},1500);
					$("#getMoreFans").html("点击加载更多...");
					$("#getMoreFans").attr("onclick",'getMoreFans('+next+',{$uid});');
				}else{
					$("#getMoreFans").html("没有更多了");
					$("#getMoreFans").attr("onclick",'');
				}
			}
		})
}

function changeUser(p){
	var next = Number(p)+1;
	$.ajax({
			type: 'GET',
			url: 'http://www.d1ev.com/member/home/changeUser?p='+p,
			dataType: 'json',
			cache: false,
			beforeSend: function(){
				$("#changeUser").html("正在载入...");
			},
			success: function(json){
				if(json){
					var li = '';
					$.each(json,function(index,array){

						li = li + '<li><a href="http://www.d1ev.com/home/'+array['userid']+'" target="_blank"><img onerror="this.src=\'<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>\'" src="<?php echo src_www_to_img('/d/file/avatar/', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>'+array['userid']+'/90x90.jpg<?php echo C('AVATARUPDATETIMESTAMP'); ?>" ></a><br /><a href="http://www.d1ev.com/home/'+array['userid']+'" target="_blank">'+array['nickname']+'</a></li>';

					});
					setTimeout(function(){
						$('#changeUser').html(li);
					},1500);
					$("#huanyihuan").attr("onclick",'changeUser('+next+');');
				}else{
					$.tipMessage("没有更多了！", 2, 1500);
					$("#huanyihuan").attr("onclick",'nomore();');
				}
			}
		})
}

function nomore(){
	$.tipMessage("没有更多了！", 2, 1500);
}
</script>
<script type="text/javascript" src="http://www.d1ev.com/statics/2015d1ev/js/top.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/js/jquery.form.js"></script>
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
<script>
$(document).ready(function() {
	$(".login_main h2 i").click(function(){
		$(".login_bg").hide();
		$(".login_main").hide();
	});
	$('#pl_login').on("click",function(){ 
	if($('#loginName').val() == ''){ 
		alert('请填写用户名'); 
		$(this).focus(); 
		   return false; 
	} 
	if($('#password').val() == ''){ 
		alert('请填写密码'); 
		$(this).focus(); 
		   return false; 
	} 
	$.ajax({ 
	  type: 'POST', 
	  url: " http://www.d1ev.com/member/public/doLogin.html", 
	  data:{'loginName':$('#loginName').val(), 'password':$('#password').val()}, 
	  dataType: 'jsonp', 
	  jsonp:'callback',  
	  cache: false, 
	  success: function(json){ 
	  if(json['error'] == 20023){ 
		 alert('用户名或者密码错误');
	  }else if(json['error'] == 10000){
		 $(".login_bg").hide();
		 $(".login_main").hide(); 
		 location.reload() 
	  } 
	  } 
	}) 
  });
});
</script>

<template file="Contents/footer_ext.php"/>
</body>
</html>
