<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>【大牛说】电动汽车大牛,新能源汽车专家的自媒体平台-第一电动网{$debug}</title>
<meta name="keywords" content="电动汽车自媒体,新能源汽车大牛说,电动汽车行业观察" />
<meta name="description" content="大牛说自媒体平台汇集电动汽车行业顶尖的大牛专家,对电动汽车行业现状,前景,新兴的O2O模式以及新能源汽车选购,改装,维修等领域进行专业的分析评论,犀利独家一手爆料只在第一电动网大牛说." />
<script type="text/javascript" src="http://assets-cdn.d1ev.com/assets/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://www.d1ev.com/daniu/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://www.d1ev.com/daniu/css/base.css" />
<link rel="stylesheet" href="http://www.d1ev.com/daniu/css/oxHeader.css" />
<link rel="stylesheet" href="http://www.d1ev.com/daniu/css/index.css" />
<script src="http://www.d1ev.com/daniu/js/common.js" type="text/javascript" charset="utf-8"></script>
<style>


</style>

<!-- AFP两段式代码-公用代码 -->
<script type="text/javascript" src="http://afpmm.alicdn.com/g/mm/afp-cdn/JS/k.js"></script>

<template file="Contents/head_ext.php"/>

</head>

<body>
<template file="Contents/header_v7.php"/>

<div class="blank10"></div>
<div class="main clearfix">
	<div class="mainL fl">
		<div class="pic1">
			<ul class="pic_con"><!--大牛焦点图-->
			<position action="position" posid="22" num="2" order="id DESC" cache="4800"> 
			<volist name="data" id="vo">
				<li>
					<a href="{$vo.data.url}" target="_blank" class="a1"><img src="<?php echo src_www_to_img($vo['data']['thumb2'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.data.title}"/></a>
					<div class="shadow"></div>
					<div class="show">
						<div class="h3">
							<a href="{$vo.data.url}" target="_blank">
							{$vo.data.title}
							</a>
						</div>
						<div class="news_ms">
						<if condition="$vo['data']['zuozhe'] neq ''">
							<a href="http://www.d1ev.com/home/{$vo.data.zuozhe}" target="_blank" class="author"><i></i>{$vo.data.zuozhe|getUserInfo=###,'nickname'}</a></if>
							<span class="time"><i></i>{$vo.data.updatetime|date="Y/m/d H:i",###}</span>
							<a class="pl_num" href="{$vo.data.url}#comment" target="_blank" title="我要评论"><i></i>{:commcount2($vo['catid'],$vo['id'])}</a>
						</div>
					</div>
				</li>
				</volist>
			</position>
			</ul>
			<a class="prev" href="javascript:void(0)" style="opacity: 0.3; display: none;"></a>
			<a class="next" href="javascript:void(0)" style="opacity: 0.3; display: none;"></a>
			<div class="num">
				<ul>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="new_tab clearfix">
			<div class="tab fl active">上升最快</div>
			<div class="tab fl">最新</div>
			
			<div class="tab fl">获奖文章</div>
			<a class="tab_a" href="http://www.d1ev.com/member/daniusay/article_quick.html">MORE&gt;&gt;</a>
		</div>
		

		<div class="new_list list_show">
			<ul><volist name="zuikuai" id="vo">
				<li>
					<div class="list_lt">
						<a href="{$vo.url}" title="{$vo.title}" target="_blank">
							<img class="commonImg" src="<?php echo src_www_to_img($vo['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.title}">
						</a>
					</div>
					<div class="list_rt">
						<h3>
							<a href="{$vo.url}" target="_blank" class="new_tit" style="display: block;">{$vo.title}</a> 
							
						</h3>
						<p class="news_txt">{$vo.description}</p>
						<div class="rt_bt">
							<div class="f_l"> 
								<a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank" class="author"><i></i>
								<?php $user=getUserDetail($vo['zuozhe']);$username=$user['nickname'];?>{$username}</a>
								<span class="time"><i></i>{$vo.updatetime|date="Y/m/d H:i",###}</span>
								<if condition="$vo['tags'] neq ''">
								<?php $tags=$vo['tags'];$tag=explode(',',$tags);?>
								<a href="http://www.d1ev.com/tag-{$tag.0}" target="_blank"><span class="drive">{$tag.0}</span></if>
							</div>
							<div class="f_r"> 
								<a class="pl_num" href="http://www.d1ev.com/{$vo.id}.html#comment" target="_blank" title="我要评论"><i></i>{:commcount2($vo['catid'],$vo['id'])}</a> 
								<span class="f_r_l">|</span>
								<div class="shareTo"> <span class="shareshowbtn"></span>
									<div class="share" style="display: none;"> <a class="bds_tsina" data-cmd="tsina" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到新浪微博"></a> <a class="bds_qzone" data-cmd="qzone" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到QQ空间"></a> <a class="bds_tqq" data-cmd="tqq" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到腾讯微博"></a> <a class="bds_qq" data-cmd="qq" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到QQ好友"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</li></volist>
			</ul>
			<a href="http://www.d1ev.com/member/daniusay/article_quick.html" target="_blank"><div class="new_more"> 更多内容...</div></a>
		</div>
		<div class="new_list">
			<ul><!--大牛左侧新闻-->
			<!--<position action="position" posid="23" num="10" order="listorder DESC" cache="4800">-->
                  <volist name="new" id="vo">
				<li>
					<div class="list_lt">
						<a href="{$vo.url}" title="{$vo.title}" target="_blank">
							<img class="commonImg" src="<?php echo src_www_to_img($vo['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.title}">
						</a>
					</div>
					<div class="list_rt">
						<h3>
							<a href="{$vo.url}" target="_blank" class="new_tit" style="display: block;">{$vo.title}</a> 
							
						</h3>
						<p class="news_txt">{$vo.description}</p>
						<div class="rt_bt">
							<div class="f_l"> 
								<a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank" class="author"><i></i>
								<?php $user=getUserDetail($vo['zuozhe']);$username=$user['nickname'];?>{$username}</a>
								<span class="time"><i></i>{$vo.updatetime|date="Y/m/d H:i",###}</span>
								<if condition="$vo['tags'] neq ''">
								<?php $tags=$vo['tags'];$tag=explode(',',$tags);?>
								<a href="http://www.d1ev.com/tag-{$tag.0}" target="_blank"><span class="drive">{$tag.0}</span></if>
							</div>
							<div class="f_r"> 
								<a class="pl_num" href="http://www.d1ev.com/{$vo.id}.html#comment" target="_blank" title="我要评论"><i></i>{:commcount2($vo['catid'],$vo['id'])}</a> 
								<span class="f_r_l">|</span>
								<div class="shareTo"> <span class="shareshowbtn"></span>
									<div class="share" style="display: none;"> <a class="bds_tsina" data-cmd="tsina" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到新浪微博"></a> <a class="bds_qzone" data-cmd="qzone" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到QQ空间"></a> <a class="bds_tqq" data-cmd="tqq" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到腾讯微博"></a> <a class="bds_qq" data-cmd="qq" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到QQ好友"></a> </div>
								</div>
							</div>
						</div>
					</div>
				</li>
				</volist>
               <!-- </position>-->
			</ul>
			<a href="http://www.d1ev.com/member/daniusay/article_news.html" target="_blank"><div class="new_more"> 更多内容...</div></a>
		</div>		
		<!--获奖文章-->
		<div class="new_list">
			<ul> 
			<position action="position" posid="24" num="13" order="listorder DESC" cache="3600">
                 <volist name="data" id="vo">
				<li>
					<div class="list_lt">
						<a href="{$vo.data.url}" title="{$vo.data.title}" target="_blank">
							<img class="commonImg" src="<?php echo src_www_to_img($vo['data']['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.data.title}">
						</a>
					</div>
					<div class="list_rt">
						<h3>
							<a href="{$vo.data.url}" target="_blank" class="new_tit" style="display: block;">{$vo.data.title}</a> 
							
						</h3>
						<p class="news_txt">{$vo.data.description}</p>
						<div class="rt_bt">
							<div class="f_l"> 
								<a href="http://www.d1ev.com/home/{$vo.data.zuozhe}" target="_blank" class="author"><i></i>
								<?php $user=getUserDetail($vo['data']['zuozhe']);$username=$user['nickname'];?>{$username}</a>
								<span class="time"><i></i>{$vo.data.updatetime|date="Y/m/d H:i",###}</span>
								<if condition="$vo['data']['tags'] neq ''">
								<?php $tags=$vo['data']['tags'];$tag=explode(',',$tags);?>
								<a href="http://www.d1ev.com/tag-{$tag.0}" target="_blank"><span class="drive">{$tag.0}</span></if>
							</div>
							<div class="f_r"> 
								<a class="pl_num" href="{$vo.data.url}#comment" target="_blank" title="我要评论"><i></i>{:commcount2($vo['catid'],$vo['id'])}</a> 
								<span class="f_r_l">|</span>
								<div class="shareTo"> <span class="shareshowbtn"></span>
									<div class="share" style="display: none;"> 
									<a class="bds_tsina" data-cmd="tsina" href="javascript:;" onclick="shareInfo({$vo.data.catid},{$vo.data.id},'tsina')" title="分享到新浪微博"></a> 
									<a class="bds_qzone" data-cmd="qzone" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到QQ空间"></a> 
									<a class="bds_tqq" data-cmd="tqq" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到腾讯微博"></a> 
									<a class="bds_qq" data-cmd="qq" href="javascript:;" onclick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到QQ好友"></a> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				</volist>
               </position>
			</ul>
			<a href="http://www.d1ev.com/member/daniusay/prize.html" target="_blank"><div class="new_more"> 更多内容...</div></a>
		</div>
	</div>
	<div class="mainR fr">
		<div class="mainR-join" href="http://www.d1ev.com/member/article/publish.html" >
			<a class="a1" href="http://www.d1ev.com/member/articlenew/publish.html" >
				<i></i>
				<span>投稿加入大牛</span>
			</a>
			<a class="a2" href="http://www.d1ev.com/member/daniusay/about.html"></a>
		</div>
		<!--  
		<div class="billboard mainR_div">
			<div class="clearfix h3">
				<div class="fl left">大牛榜</div>
				<a href="http://www.d1ev.com/member/daniusay/daniu.html" class="fr right" >MORE &gt;&gt;</a>
			</div>
			<div class="billboard_main">
				<ul> <?php $daniu = daniubangtotal();?>
				<volist name="daniu" id="vo"> 
					<li class="clearfix">
						<div class="billboard-left fl">
							<div><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank" >
                                                                <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="">
                                                            </a>
								<span></span>
								<p>{$vo.num}篇</p>
							</div>
						</div>
						<div class="billboard-right fl"> 
							<h3><span><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank">{:getUserInfo($vo['zuozhe'], 'nickname')}</a></span><i></i></h3>
							<?php $user=getUserDetail($vo['zuozhe']);$about=$user['about'];?>
							<p>{$about}</p>
						</div>
					</li>
					</volist>
				</ul>
			</div>
		</div>	
		-->
		<div class="mainR_div press">
			<div class="clearfix h3">
				<div class="fl left">大牛发稿排行</div>
				<div class="fr right clearfix press_tab">
					<p class="fl p1 on">周</p>
					<p class="fl p2">月</p>
					<p class="fl p3">年</p>
					<p class="fl p4">总</p>
				</div>
			</div>
			<div class="press_main billboard">
				<ul style="display: block;">
					<?php $daniubangWeek = daniubangWeek();?>
				<volist name="daniubangWeek" id="vo"> 
					<li class="clearfix">
						<div class="billboard-left fl">
							<div><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="">
								<span></span>
								<p>{$vo.num}篇</p></a>
							</div>
		
						</div>
		
						<div class="billboard-right fl">
							<h3><span><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank">{:getUserInfo($vo['zuozhe'], 'nickname')}</a></span><i></i></h3>
							<?php $user=getUserDetail($vo['zuozhe']);$about=$user['about'];?>
							<p>{$about}</p>
						</div>
					</li>
					</volist>
				</ul>
				<ul>

					<?php $daniubangMon = daniubangMon();?>
				<volist name="daniubangMon" id="vo"> 
					<li class="clearfix">
						<div class="billboard-left fl">
							<div><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="">
								<span></span>
								<p>{$vo.num}篇</p></a>
							</div>
		
						</div>
		
						<div class="billboard-right fl">
							<h3><span><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank">{:getUserInfo($vo['zuozhe'], 'nickname')}</a></span><i></i></h3>
							<?php $user=getUserDetail($vo['zuozhe']);$about=$user['about'];?>
							<p>{$about}</p>
						</div>
					</li>
					</volist>
					
				</ul>
				<ul><?php $daniu = daniubang();?>
				<volist name="daniu" id="vo"> 
					<li class="clearfix">
						<div class="billboard-left fl">
							<div><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="">
								<span></span>
								<p>{$vo.num}篇</p></a>
							</div>
		
						</div>
		
						<div class="billboard-right fl">
							<h3><span><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank">{:getUserInfo($vo['zuozhe'], 'nickname')}</a></span><i></i></h3>
							<?php $user=getUserDetail($vo['zuozhe']);$about=$user['about'];?>
							<p>{$about}</p>
						</div>
					</li>
					</volist>
				</ul>
				<ul><?php $daniutotal = daniubangtotal();;?>
				<volist name="daniutotal" id="vo"> 
					<li class="clearfix">
						<div class="billboard-left fl">
							<div><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="">
								<span></span>
								<p>{$vo.num}篇</p></a>
							</div>
		
						</div>
		
						<div class="billboard-right fl">
							<h3><span><a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank">{:getUserInfo($vo['zuozhe'], 'nickname')}</a></span><i></i></h3>
							<?php $user=getUserDetail($vo['zuozhe']);$about=$user['about'];?>
							<p>{$about}</p>
						</div>
					</li>
					</volist>
				</ul>
			</div>
		</div>
		<div class="NiuRen mainR_div">
			<div class="clearfix h3">
				<div class="fl left">新晋大牛</div>
				<a href="http://www.d1ev.com/member/daniusay/daniu.html" class="fr right" >MORE &gt;&gt;</a>
			</div>
			<div class="NiuRen_main">
				<ul class="clearfix"><?php $xinjindaniu = xinjindaniu();?>
				<volist name="xinjindaniu" id="vo">
					<li> 
						<a href="http://www.d1ev.com/home/{$vo.zuozhe}" target="_blank" >
                                                    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="">
                                                </a>
						<p>{:getUserInfo($vo['zuozhe'], 'nickname')}</p>
					</li>
					</volist>
				</ul>
			</div>
		</div>	
		<position action="position" posid="23" num="2" order="listorder DESC" cache="1800">  <?php //echo "<pre>";var_dump($data);?>
		<!--<foreach name="data" item="vo">
		<if condition="$k eq '0'">-->
		<div class="callForPapers">
			<div class="callForPapers_h3 comment_common">
				<div class="h3 clearfix">
					<div class="fl">有奖征文</div>
				</div>
			</div>
			<div class="callForPapers_main">
				<a href="<?php echo $data['0']['data']['url'];?>" target="_blank">
					<img src="<?php echo src_www_to_img($data['0']['data']['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="">
					<div class="shade">
						<p><?php echo $data['0']['data']['title'];?></p>
					</div>
				</a>
			</div>
		</div> 
		<div class="mainR_advert"> 
<!-- 57748253：ID39 大牛说－右侧矩形 类型：固定 尺寸：345x200-->
<script type="text/javascript">
_acM({aid:"mm_116234497_14636802_57748253",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
		</div> 
		 
           <!-- </position> -->
		<div class="hotDoc">
			<div class="hotDoc_h3 comment_common">
				<div class="h3 clearfix">
					<div class="fl">一周热文</div>
					<a href="http://www.d1ev.com/member/daniusay/article_hots.html" class="fr right">MORE &gt;&gt;</a>
				</div>
			</div>
			<div class="hotDoc_main">
				<ul><volist name="hotarticle" id="vo">
					<li>
						<a href="{$vo.url}">
							<img src="<?php echo src_www_to_img($vo['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="">
							<p>{$vo.title}</p>
						</a>
					</li>
					</volist>
				</ul>
				
			</div>
			
		</div>
		
		<div class="speaker mainR_div">
			<div class="clearfix h3">
				<div class="fl left">关于大牛说</div>
			 
			</div>
			<div class="speaker_main">
				<ul>
					<li><i></i><a href="http://www.d1ev.com/member/daniusay/about.html" target="_blank">什么是大牛说？</a></li>
					<li><i></i><a href="http://www.d1ev.com/member/daniusay/about.html" target="_blank">大说有什么激励政策？</a></li>
					<li><i></i><a href="http://www.d1ev.com/member/daniusay/about.html" target="_blank">如何成为大牛说作者？</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="scrollBtn">
	
</div>
<!--footer部分 收索弹框-->

<template file="Contents/footer_v7.php"/>
<!--搜索弹窗-->

<script src="http://www.d1ev.com/daniu/js/index.js" type="text/javascript" charset="utf-8"></script>

<template file="Contents/footer_ext.php"/>
</body>
</html>
