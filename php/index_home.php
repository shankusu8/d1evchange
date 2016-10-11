<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1130,maximum-scale=1.0"/>
<title>{$userinfo['nickname']}的主页 - 第一电动网</title>
<script type="text/javascript" src="http://assets-cdn.d1ev.com/assets/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link href="http://www.d1ev.com/statics/2015d1ev/css/top.css" rel="stylesheet" type="text/css">
<link href="http://www.d1ev.com/statics/css/user3.css" rel="stylesheet" type="text/css" />
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

<template file="Contents/head_ext.php"/>
</head>
<body>
<template file="Contents/header_v7.php"/>

<!--内容区-->
<script type="text/javascript">
var timeout    = 500;
var closetimer = 0;
var ddmenuitem = 0;
// open hidden layer
function mopen(id){
	// cancel close timer
	mcancelclosetime();
	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';
}
// close showed layer
function mclose(){
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}
// go close timer
function mclosetime(){
	closetimer = window.setTimeout(mclose, timeout);
}
// cancel close timer
function mcancelclosetime(){
	if(closetimer){
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}
// close layer when click-out
document.onclick = mclose; 

</script>
<div class="main" style="padding-top:20px;">
<!--内容区左-->
	<div class="m_l">
		
		<div class="main_l">
        	<div class="user_img"><a href="{$homeurl}" title="会员头像"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $uid . '/180x180.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt=""></a></div>
        	<div class="user_ms">
            	<div class="user_name">
				<?php if($userinfo['sex'] == 1){ ?>
				<i class="i_1"></i>
				<?php }if($userinfo['sex'] == 2){ ?>
				<i class="i_2"></i>
				<?php } ?>
				<span>{$userinfo['nickname']}</span>
				
				</div>
                <div class="u_btns">
				<?php if($myid != $uid){ ?>
				<div class="btns btns_inline" style="float:left; margin-top:0;">
				{:getFansStatus2($myid, $uid)}
				</div>
                <a href="javascript:;" title="发私信" class="ms" onClick="message.send({$uid},{$myid},0);" style="float:left; margin-top:0;"><i></i>发私信</a>
				<?php } ?>
                </div>
            	<p class="user_web">个人主页：<a href="{$homeurl}">{$homeurl}</a></p>
                
            </div>
		</div>
        <div class="blank20"></div>
    	<div class="main2_l">
            <ul id="tab">		
                <li class="tabcur"><a onClick="tab('tabcon0',this)" href="javascript:void(0)">动态</a></li>
                <li><a onClick="tab('tabcon1',this)" href="javascript:void(0)" id="jump_comm">评论</a></li>
                <li><a onClick="tab('tabcon2',this)" href="javascript:void(0)" id="jump_fav">收藏</a></li>
                <li><a onClick="tab('tabcon3',this)" href="javascript:void(0)" id="jump_friends">关注</a></li>
                <li><a onClick="tab('tabcon4',this)" href="javascript:void(0)" id="jump_fans">粉丝</a></li>

            </ul>
        	<div id="tabcon">
                <div class="tabcon" id="tabcon0" style="display: block;">
                    <ul id="notify">
					<volist name="index" id="vo">
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
    	<div class="main_r">
        	<h3><!--第一电动网第<span></span>位用户--><span>{$userinfo.regdate|date="Y-m-d",###}</span>加入第一电动网</h3>
            <a class="gzl"  href="?type=friends">{$friendsCount|default=0}<br />关注</a>
            <a class="gzz"  href="?type=fans">{$fansCount|default=0}<br />粉丝</a>
          <a class="pl" onMouseOut="mclosetime()" onMouseOver="mopen('pl')" href="?type=comm">{$comm|default=0}<br />评论</a>
          <a class="hy" onMouseOut="mclosetime()" onMouseOver="mopen('hy')">{$comm+$fav+$fav_tupian|default=0}<br />活跃</a>
            <div id="pl" onMouseOver="mcancelclosetime()" onMouseOut="mclosetime()">
            	<i></i>
            	<p>评论：<a href="javascript:;">{$comm-$reply|default=0}</a>次</p>
            	<p>回复：<a href="javascript:;">{$reply|default=0}</a>次</p>
            </div>
            <div id="hy" onMouseOver="mcancelclosetime()" onMouseOut="mclosetime()">
            	<i></i>
           	  <p>评论：<a href="javascript:;">{$comm-$reply|default=0}</a>次</p>
            	<p>回复：<a href="javascript:;">{$reply|default=0}</a>次</p>
            	<p>收藏：<a href="javascript:;">{$fav+$fav_tupian|default=0}</a>次</p>
            </div>
        </div>
		<div class="blank20"></div>
        <div class="main2_r">
            <h2><span>文章排行</span><a href="{$config_siteurl}rank" target="_blank" class="more">MORE &gt;&gt;</a></h2>
            <div class="n_list enter">         
                <ul class="tagContent selectTag" id="tagContent1">
                    <get sql="SELECT * FROM tp_news WHERE status=99 AND catid in(93,94,99) ORDER BY dayviews DESC" cache="600" num="10">
                        <volist name="data" id="vo">
                            <li><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title}</a></li>
                        </volist>
                    </get>
                </ul>
            </div>
		</div>
		<div class="blank20"></div>
		<h2><span>推荐用户</span><a class="f5" href="javascript:;" onClick="changeUser(2);" id="huanyihuan">换一换</a></h2>
        <div class="lk_con">
            <ul id="changeUser">
                <volist name="love" id="vo">
                <li>
                    <a href="http://www.d1ev.com/home/{$vo.userid}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt=""></a><br />
                    <a href="http://www.d1ev.com/home/{$vo.userid}" target="_blank">{$vo.nickname|str_cut=###,4}</a>
                </li>
                </volist>             
            </ul>
        
        </div>

    </div>
</div>
<div class="blank20"></div>

<script type="text/javascript">
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
<link type="text/css" href="http://www.d1ev.com/statics/extres/member/css/core.css" rel="stylesheet" />
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
                $.tipMessage(data['info'], 2, 2000);
            }else{
                $('#friends_'+fid).html('<span class="gz_end">已关注，<a href="javascript:void(0);" onClick="delFriend('+fid+')">取消</a></span>');
				$('#fans_'+fid).html('<span class="gz_end">已关注，<a href="javascript:void(0);" onClick="delFriend('+fid+')">取消</a></span>');
                $.tipMessage(data['info'], 3, 2000);
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
                $.tipMessage(data['info'], 2, 2000);
            }else{
                $('#friends_'+fid).html('<a href="javascript:void(0);" class="gz" onClick="addFriend('+fid+')"><b>+</b>加关注</a>');
				$('#fans_'+fid).html('<a href="javascript:void(0);" class="gz" onClick="addFriend('+fid+')"><b>+</b>加关注</a>');
                $.tipMessage(data['info'], 3, 2000);
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
				$.tipMessage(data['info'], 2, 2000);
            }else{
                $('.btns').html('<span class="gz_end">已关注，<a href="javascript:void(0);" onClick="delFriend2('+fid+')">取消</a></span>');
				$.tipMessage(data['info'], 3, 2000);
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
                $.tipMessage(data['info'], 2, 2000);
            }else{
                $('.btns').html('<a href="javascript:void(0);" class="gz" onClick="addFriend2('+fid+')"><b>+</b>加关注</a>');
                $.tipMessage(data['info'], 3, 2000);
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
					},2000);
					$("#getMoreNotify").html("点击加载更多...");
					$("#getMoreNotify").attr("onclick",'getMoreNotify('+next+',{$uid});');
				}else{
					$("#getMoreNotify").html("没有更多了");
					$("#getMoreNotify").attr("onclick",'');
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
					},2000);
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
					},2000);
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
					},2000);
					$("#huanyihuan").attr("onclick",'changeUser('+next+');');
				}else{
					$.tipMessage("没有更多了！", 2, 2000);
					$("#huanyihuan").attr("onclick",'nomore();');
				}
			}
		})
}

function nomore(){
	$.tipMessage("没有更多了！", 2, 2000);
}
</script>
<!--footer部分-->
<template file="Contents/footer_v7.php"/>

<!-- alert 弹窗 -->
</body>
</html>