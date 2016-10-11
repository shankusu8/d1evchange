<!doctype html>
<html class="no-js" lang="zh-CH">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{$SEO['description']}">
    <meta name="keywords" content="{$gjc}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{$title}-第一电动网</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- Amaze UI CSS -->
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/amazeui.min.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/animate.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/common.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/page.css">
    <link rel="stylesheet" href="http://www.d1ev.com/2016gnev/image/sprite3.css">
</head>
<body data-url="{$config_siteurl}" data-tags="{$relationnews}" data-newid="{$id}" data-catid="{$catid}" data-title="{$title}">

<!--导航-->
<template file="Contents/header_v6.php"/>
<div class="blank10"></div>
<!--banner图-->
<div class="ws-banner am-container">
    <img src="http://www.d1ev.com/new2016/src/public/images/ws-banner.jpg" alt="">
</div>
<div class="blank40"></div>
<div class="blank30"></div>
<!--中间部分-->
<div class="ws-content am-container am-cf">
    <!--左边分享-->
    <div class="ws-left am-fl">
        <!-- 活动页面 share -->
        <div class="share--wraped bdsharebuttonbox" data-am-sticky="{top:100}">
            <div class="button--share share--border share--color1"><a href="#" class="bds_share_links bds_tsina sprite sprite-shareToSina" data-cmd="tsina" title="分享到新浪微博"></a></div>
            <div class="button--share share--border share--color2"><a href="#" class="bds_share_links bds_weixin sprite sprite-shareToWeixin" data-cmd="weixin" title="分享到微信"></a></div>
            <div class="button--share share--color3"><a href="#" class="bds_share_links bds_qzone sprite sprite-shareToQQ" data-cmd="qzone" title="分享到QQ空间"></a></div>
            <div class="icon-bottom">
                <div class="button--share button--share2 share--border share--color4"><i class="sprite sprite-comment">{:getComment($id)}</i><div class="icon-content">评论</div></div>
                <div class="button--share button--share2 share--color5"><i class="sprite sprite-collect"></i><div class="icon-content" id="theme-login">收藏</div></div>
            </div>	
        </div>
    </div>
    <!--新闻正文部分-->
    <div class="ws-md am-fl">
        <div class="ws-title">
            <h1>{$title}</h1>
            <div class="ws-title-infor am-cf">
                <div class="am-fl ws-label am-cf">
				<?php if($shuxing){ ?>
				<a href="{$config_siteurl}tag-{$shuxing}" class="am-fl" target="_blank">{$shuxing|getShuxing}</a>
				<?php } ?>
                </div>

                <div class="ws-infor am-fr">
				<if condition="$zuozhe neq ''">
                    <a href="http://www.d1ev.com/home/{$zuozhe}" class="am-fl">
                        <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $zuozhe . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="">
                    </a>
                    <a href="http://www.d1ev.com/home/{$zuozhe}" class="am-fl ws-infor-name">
                        {:getUserInfo($zuozhe, 'nickname')}
                    </a><else />
					<a href="javascript:;" class="am-fl ws-infor-name">
                        {$copyfrom}
                    </a>
                    <a href="" class="am-fl ws-infor-name">
                        {$author}
                    </a>
					</if>
                    <span class="am-fl ws-infor-time">
					 <time class="timeago" datetime="<?php echo $updatetime; ?>" title="<?php echo $updatetime; ?>"><?php echo $updatetime; ?></time>
                    </span>
                </div>
            </div>

        </div>
        <div class="blank20"></div>
        <div class="ws-newscon">
            <div id="showall233">
                <?php echo $content_ext?('<div id="player_3rd">' . $content_ext . '</div>') : ''; ?><?php echo content_www_to_img($content, C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>
            </div>
        </div>
        <!--版权声明-->
      <?php if ($shengming) { ?>
      <?php $ex = explode(",", $shengming); ?>
      <?php if (in_array(1, $ex)) { ?>
        <div class="ws-copyright">
                本文版权为第一电动网（www.d1ev.com）所有，欢迎转载但请务必注明来源。
        </div>
      <?php } ?>
      <?php if (in_array(2, $ex)) { ?>
        <div class="ws-copyright">
            <p style="text-indent:2em;">
                本文由第一电动网大牛说作者撰写，他们为本文的真实性和中立性负责，观点仅代表个人，不代表第一电动网。文中部分图片来自于网络，感谢原作者。
            </p>
            <p style="text-indent:2em;">				
                欢迎加入第一电动网大牛说作者，注册会员登录后即可在线投稿，请在会员资料留下QQ、手机、邮箱等联系方式，便于我们在第一时间与您沟通稿件，如有问题请发送邮件至 yxh@d1ev.com。
            </p>
        </div>
      <?php } ?>
      <?php if (in_array(3, $ex)) { ?>
      <div class="ws-copyright">
                以上内容转载自其他媒体，目的在于传播更多信息，转载内容并不代表第一电动网立场。
      </div>
      <?php } ?>
      <?php } ?>
        
        <!--点赞-->
        <div class="ws-like">
            <i class="am-icon-thumbs-o-up"></i>
            <span>{:getZan($id)}</span>
        </div>
        <!--专题--><?php $relationsp = getrelationSp($id); //var_dump($relationsp);?>
		<if condition="$relationsp">
		<volist name="relationsp" id="vo">
        <div class="ws-subject">
            <i class="ws-subject-icon"></i>
            <span class="ws-subject-span">专题</span>
            <a href="{$vo.url}" class="ws-subject-head">
                {$vo.title}
            </a>
        </div></volist>
		</if>
        <!--相关车型
		
		<if condition="$shi">
		<?php $relation = getrelationCar($shi);//echo "<pre>";var_dump($relation);?>
        <div class="ws-model">
            <div class="ws-model-name">相关车型</div>
            <div class="ws-model-con">

                <div class="vehicletype--wraped am-cf">
                    <div class="vehicletype--img am-fl">
                        <a href="{$relation.url}" target="_blank"><img src="{$relation.thumb}" alt=""></a>
                        <!-- <div class="tip">政策</div> -->
                    </div> <a href="{$relation.url}" target="_blank">
                    <div class="vehicletype--content am-fl">
                        <div class="vehicletype--head">
                            <span class="vehicletype_p">{$relation.title}</span>
                            <span class="vehicletype_p am-fr">厂商指导价：<span class="price">{$relation.zhidaojia}万</span></span>
                        </div>
                        <div class="border--wrapped">
                            <div class="circle" style="left:0">
                                <div class="pie_left"><div class="circle_left"></div></div>
                                <div class="pie_right"><div class="circle_right"></div></div>
                                <div class="mask"><span>{$relation.xuhang}</span><div class="unit">km</div></div>
                            </div>

                            <div class="circle2" style="left:86px">
                                <div class="pie_left"><div class="circle_left"></div></div>
                                <div class="pie_right"><div class="circle_right"></div></div>
                                <div class="mask"><span>{$relation.zuigao}</span><div class="unit">km/h</div></div>
                            </div>
                            <div class="circle3" style="left:172px">
                                <div class="pie_left"><div class="circle_left"></div></div>
                                <div class="pie_right"><div class="circle_right"></div></div>
                                <div class="mask"><span>{$relation.rongliang.rongliang}</span><div class="unit">kw/h</div></div>
                            </div>
                        </div>
                        <div class="vehicletype am-cf">
                            <div class="content am-fl">最大续航</div>
                            <div class="content am-fl">最高车速</div>
                            <div class="content am-fl">电池容量</div>
                        </div>
                        <div class="vehicletype--type">
                            <a href="{$relation.url}" target="_blank"><span class="vehicletype--type--tip">去看车</span></a>
                        </div>
                    </div></a>
                </div>
            </div>
        </div></if>-->
		<!-- 相关车型2 -->
			<if condition="$shi">
		<?php $relation = getrelationCar($shi);//echo "<pre>";var_dump($relation);?>	 
		  <div class="vehicletype--wraped am-cf">
			<div class="vehicletype--img am-fl">
				<a href="{$relation.url}" target="_blank">
					<img src="{$relation.thumb}" alt="{$relation.thumb}">
				</a>
			  <!-- <div class="tip">政策</div> -->
			</div>
			<div class="vehicletype--content am-fl">
			  <div class="vehicletype--head">
				<span class="vehicletype_p">{$relation.title}</span>
				<span class="vehicletype_p am-fr">厂商指导价：<span class="price">{$relation.zhidaojia}万</span></span>
			  </div>

			  <div class="border--wrapped">
				<div class="am-cf border--wrapper">
				  <div class="li--wrapped am-fl">
					<div class="circle" style="">
					  <div class="pie_left">
						<div class="circle_left"></div>
					  </div>
					  <div class="pie_right">
						<div class="circle_right"></div>
					  </div>
					  <div class="mask"><span>{$relation.xuhang}</span>
						<div class="unit">km</div>
					  </div>
					</div>
					<div class="content am-fl">最大续航</div>
				  </div>
				  <div class="li--wrapped am-fl">
					<div class="circle2" style="">
					  <div class="pie_left">
						<div class="circle_left"></div>
					  </div>
					  <div class="pie_right">
						<div class="circle_right"></div>
					  </div>
					  <div class="mask mask2"><span>{$relation.zuigao}</span>
						<div class="unit">km/h</div>
					  </div>
					</div>
					<div class="content am-fl">最高车速</div>
				  </div>
				  <div class="li--wrapped am-fl">
					<div class="circle3" style="">
					  <div class="pie_left">
						<div class="circle_left"></div>
					  </div>
					  <div class="pie_right">
						<div class="circle_right"></div>
					  </div>
					  <div class="mask mask3"><span>{$relation.rongliang.rongliang}</span>
						<div class="unit">kW/h</div>
					  </div>
					</div>
					<div class="content am-fl">电池容量</div>
				  </div>
				</div>
			  </div>
			  <div class="vehicletype am-cf">
			  </div>
			  <div class="vehicletype--type">
				<a href="{$relation.url}"><span class="vehicletype--type--tip">去看车</span></a>
			  </div>
			</div>
		  </div></if>
		
        <hr class="ws-md-hr">
        <!--标签已经想看更多-->
        <div class="ws-md-bottom am-cf">
            <div class="ws-tag am-cf am-fl"> 
			<volist name="tags" id="vo">
                <a href="{$vo.url}" class="am-fl">{$vo.tag}</a>
			</volist>
            </div>
           <div class="ws-more am-cf am-fr">
                <a href="javascript:;" class="am-fl ws-more-a ws-more-a1">想看更多</a>
                <a href="javascript:;" class="am-fl ws-more-a ws-more-a2">不感兴趣</a>
                <div class="ws-reason">
                    <i class="am-icon-remove"></i>
                    <div class="ws-reason1 ws-reason-c">重复、旧闻</div>
                    <div class="ws-reason2 ws-reason-c">内容质量差</div>
                    <div class="ws-reason-btn">确定</div>
                </div>
            </div>

        </div>
        <div class="blank40"></div>

        <!--评论-->
        <div class="ws-comment">
            <!--评论-->
            <div class="duoshuo" id="comment">

                <!--评论主体-->
                <div id="ds-reset" style="margin: 8px;"></div>
                <div class="mypl_con" id="mypl_con" style="display:none; ">
                    <ul id="tab1">
                        <li class="tabcur1" id="tab1_tx"><a href="javascript:void(0)">提醒</a></li>
                        <li class="" id="tab1_pl"><a href="javascript:void(0)">评论</a></li>
                    </ul>
                    <div class="tabcon1" id="tabcon10" style="display: block;">
                        <ul id="tixing">
                        </ul>
                        <ul id="more">
                            <li><a href="javascript:;" onClick="getMoreTixing(2);" id="loadingmoreTX">点击加载更多...</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

		<!--相关文章-->
        <div class="ws-about">
            <!-- pictures -->
            <div class="articles--wraped">
                <div class="articles_p">相关文章</div>
                <div class="articles_img am-cf">
				<?php $relationnews=getRelationNew($relationnews);//echo "<pre/>";var_dump($relationnews);?>
				<volist name="relationnews" id="vo">
                    <a href="{$vo.url}"><div class="articles--img first am-fl">
                        <img src="{$vo.thumb}" alt="">
						<div class="ws--about-shadow"></div>
                        <div class="slidecontent">{$vo.title}</div>
                        <!-- <div class="tip"></div> -->
                    </div></a>
					</volist>
                </div>
                <!-- pictures -->
				<?php $nest=getNestNew($id);?>
                <a href="{$nest.url}">
                    <div class="nextaritcle" data-am-scrollspy="{animation:'scale-up'}">
                        <div class="tip">下一篇</div>
                        <p class="articles--head">{$nest.title}</p>
                        <p class="articles--author">
                            <span class="articles--authorpic"><i class="sprite sprite-label"></i></span>
                            <span>{$nest.tags}</span>
                            <span class="articles--time"></span>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="ws-right am-fr">
        <!--大牛作者信息-->
		<if condition="$zuozhe neq ''">
        <div class="ws-daniu">
            <div class="wrapper">
                <!-- 作者相关  -->
                <div class="authorof--wraped">
                    <div class="author--img">
					<a href="http://www.d1ev.com/home/{$zuozhe}" target="_blank">
					
					<img class="am-circle" onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $zuozhe . '/180x180.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="" width="140" height="140"/>
					</a></div>
                    <a href="http://www.d1ev.com/home/{$zuozhe}" target="_blank"><span class="author--name">{:getUserInfo($zuozhe, 'nickname')}</span></a> <?php $user = getUserInfo($zuozhe,'groupid');?>
					<if condition="$user eq 5 or $user eq 7">
                    <span class="article--type">大牛作者</span></if>
                    <p class="author-content">{:getUserInfo($zuozhe, 'about')}</p>
                    <hr>
                    <ul class="author--article">
					<volist name="authorArticle" id="vo">
					  <a href="{$vo.url}" title="{$vo.title}" target="_blank"><li><span>{$vo.title}</span></li></a>
					</volist>
                         
                    </ul>
                    <a href="http://www.d1ev.com/home/{$zuozhe}"><div class="author--button">阅读更多文章，狠戳这里</div></a>
                </div>
            </div>
        </div></if>
        <!--快讯-->
        <div class="ws-newsflash-wrap">
		<div class="ws-common-head">
		快讯
		</div>
		<div class="blank10"></div>
		<div class="ws-newsflash">
		<dl class="ws-newsflash-parent"> 
			<volist name="newsflash" id="vo">
				<dd class="ws-newsflash-item">
				<i class="ws-newsflash-icon"></i>
				<a class="ws-newsflash-cont" href="{$vo.url}">{$vo.title}</a>
				<div class="ws-newsflash-source">
				<span><time class="timeago" datetime="<?php echo date('c',$vo['updatetime']); ?>" title="<?php echo date('Y-m-d H:i:s',$vo['updatetime']); ?>"><?php echo date('Y-m-d H:i:s',$vo['updatetime']); ?></time></span>
				<span>{$vo.copyfrom}</span>
				</div>
				</dd>
			</volist>
			<?php if(!empty($yesterdayflash)){?>
				<dt class="ws-newsflash-time">
				<?php echo date("Y/m/d",$Yesterdaytime) ?>
				</dt>
			<volist name="yesterdayflash" id="vo">
				<dd class="ws-newsflash-item">
				<i class="ws-newsflash-icon"></i>
				<a class="ws-newsflash-cont" href="{$vo.url}">{$vo.title}</a>
				<div class="ws-newsflash-source">
				<span>{$vo.updatetime|date="H:i:s",###}</span>
				<span>{$vo.copyfrom}</span>
				</div>
				</dd>
			</volist>
			<?php }?>
		<dd>
		<div class="ws-newsflash-more" data-href="http://www.d1ev.com/contents/index/newsflash">
		浏览更多
		</div>
		</dd>
		</dl>
		<div class="ws-newsflash-scroll">
		<div class="ws-newsflash-scrollBg"></div>
		<div class="ws-newsflash-scrollBar"></div>
		</div>
		</div>
		</div>
        <div class="blank40"></div>
        <!--推荐模块-->
        <div class="ws-recommend">
            <div class="recommend--wraped">
                <div class="recommend">推荐模块</div>
                <div class="recommend--icon am-cf">
                    <div class="margin--reset">
                        <div class="am-cf">
							<volist name="tuijianmodel" id="vo">
                            <div class="recommend--wrapper am-fl">
                                <a href="javascript:;" class="recommend--img">
                                    <img src="{$vo.image}" alt="">
                                </a>
                                <div class="namer">{$vo.catname}</div>
                            </div>
							</volist>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<hr class="ws-hr">

<!--footer部分-->
<template file="Contents/footer_v6.php"/>
<!--搜索弹窗-->
<template file="Contents/footer_search.php"/>
<!-- alert 弹窗 -->
<div class="ws_alert">

</div>

<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">第一电动网</div>
    <div class="am-modal-bd">
      Hello world！
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn">确定</span>
    </div>
  </div>
</div>
<!--分享代码-->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24","bdCustomStyle":"http://www.d1ev.com/new2016/src/public/css/shareto.css"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://www.d1ev.com/new2016/src/external/js/jquery.2.2.3.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="http://www.d1ev.com/new2016/src/external/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="http://www.d1ev.com/new2016/src/external/js/amazeui.min.js"></script>
<script src="http://www.d1ev.com/new2016/src/external/js/headroom.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/common.js"></script>
<script src="http://www.d1ev.com/new2016/src/external/js/jquery.timeago/jquery.timeago.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/page.js"></script>

<script>
    //评论
    var commentsQuery = {
        'catid': '{$catid}',
        'id': '{$id}',
        'title': '{$title}',
        'url': '{$url}',
        'thumb': '{$thumb}',
        'size': 20
    };
    (function () {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';
        ds.async = true;
        ds.src = 'http://www.d1ev.com/statics/js/comment/embed_ws.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
</script>
<!--统计代码-->
<div style="display:none"><script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?c1d54a092f01be0215b4487856c2c6f6";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s);})();</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2469655'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s13.cnzz.com/stat.php%3Fid%3D2469655' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254528018'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s95.cnzz.com/stat.php%3Fid%3D1254528018' type='text/javascript'%3E%3C/script%3E"));</script></div>
</body>
</html>
