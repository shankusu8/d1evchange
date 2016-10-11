<!doctype html>
<html class="no-js" lang="zh-CH">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>第一电动网|快讯</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- Amaze UI CSS -->
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/amazeui.min.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/animate.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/common.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/newsflash.css">
    <link rel="stylesheet" href="http://www.d1ev.com/2016gnev/image/sprite.css">
</head>
<body>

<!--首页导航-->
<template file="Contents/header_v6.php"/>
<!--中间主要内容-->
<div class="ws-content am-cf am-container">
    <div class="am-fl ws-left">
        <div class="ws-left-head">
            <span class="ws-head1">快讯</span>
            <span class="ws-head2">滚动新闻播不停</span>
        </div>
        <div class="ws-news">
            <volist name="newsflash" id="vo">
            <!-- 内容 -->
            <?php if($todaytime>$vo['updatetime']){
                if($vo['updatetime'] + 86400 < $todaytime){
                    $todaytime = strtotime(date("Y-m-d",$vo['updatetime']));
                }else{
                    $todaytime = $todaytime-86400;
                }
                ?>
                <div class="ws-bigtime">
                   <?php echo date('Y/m/d',$todaytime) ?>
                </div>
            <?php  } ?>
            <div class="article--wraped am-cf">
                 <?php if($vo['tip']==2){?>
                    <?php  $vo['tuji']= unserialize($vo['tuji']); ?>
                    <a href="<?php echo $vo['url'] ?>" target="_blank">
                    <div class="pictures--wraped">
                    <div class="pictures_p"><?php echo $vo['title'] ?></div>
                    <div class="picutres_img am-cf">
                    <a href="<?php echo $vo['url'] ?>" target="_blank"><div class="article--img first am-fl">
                    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['tuji'][0]['url'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['title'];?>">
                    </div></a>
                    <a href="<?php echo $vo['url'] ?>#2" target="_blank"><div class="article--img am-fl">
                    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['tuji'][1]['url'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['title'];?>">
                    </div></a>
                    <a href="<?php echo $vo['url'] ?>#3" target="_blank"><div class="article--img am-fl">
                    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['tuji'][2]['url'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['title'];?>">
                    </div></a>
                    </div>
                    <div class="pictures--time"><time class="timeago" datetime="<?php echo date('c',$vo['updatetime']); ?>" title="<?php echo date('Y-m-d H:i:s',$vo['updatetime']); ?>"><?php echo date('Y-m-d H:i:s',$vo['updatetime']); ?></time></div>
                    </div>
                    </a>
                 <?php }else{?>
                <a href="<?php echo $vo['url'] ?>" target="_blank"><div class="article--img am-fl">
                    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo $vo['thumb'] ?>" alt="">
                    <?php if($vo['catid']==174){?>
                        <div class="ws-tip"></div>
                    <?php } ?>
                    <?php if($vo['tip']==1 && $vo['shuxing'] != ''){ ?><div class="tip">{$vo.shuxing|getShuxing}</div>
                    <?php } ?>
                </div></a>

                <div class="article--content am-fl">
                    <span class="article_p"><a href="<?php echo $vo['url'] ?>" target="_blank"><?php echo $vo['title'] ?></a></span>
                    <p class="article--author">
                        <?php if($vo['user_id'] > 0){ ?>
                        <a href="http://www.d1ev.com/home/<?php echo $vo['user_id'] ?>" target="_blank"><span class="article--authorpic"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['user_id'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="<?php echo $vo['author'] ?>"></span>
                        <span>{$vo.author}</span></a>
                        <?php } ?>
                        <span class="article--time"><time class="timeago" datetime="<?php echo date('c',$vo['updatetime']); ?>" title="<?php echo date('Y-m-d H:i:s',$vo['updatetime']); ?>"><?php echo date('Y-m-d H:i:s',$vo['updatetime']); ?></time></span>
                    </p>
                    <div class="article--type am-cf">
        <span class="article--type--tip am-fl">
          <?php if(!empty($vo['tags'])){?>
          <i class="icon icon-icon_tips first"></i>
          <?php $article = explode(',',$vo['tags']); ?>
                <volist name="article" id="ar">
                    <a href="http://www.d1ev.com/tag-{$ar}" target="_blank">{$ar}&nbsp;&nbsp;</a>
                </volist>
          <?php } ?>
        </span>
                        <p class="article--type--say am-fr">
                            <?php if($vo['tip']==1){ ?>
                            <span><i class="icon icon-icon_good"></i> {$vo.zan}</span>
                            <span><i class="icon icon-icon_comment"></i> {$vo.pinglun}</span>
                            <?php } ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <hr>
            </volist>
            <ul class="am-pagination ws-pagination">
                {$pages}
            </ul>
        </div>
    </div>
    <div class="am-fr ws-right">
        <!--热文榜-->
        <div class="ws-hotdoc">
            <div class="ws-common-head"><!-- 区块名样式一致 -->
                热文榜
            </div>
            <div class="blank20"></div>
            <div class="ws-hotdoc-tab">
                <div class="ws-hotdoc-tabh am-cf">
                    <div class="ws-hotdoc-tabh1 ws-hotdoc-tabhDiv am-fl ws-active">日排行</div>
                    <div class="ws-hotdoc-tabh2 ws-hotdoc-tabhDiv am-fr">周排行</div>
                </div>
                <div class="ws-hotdoc-tabc">
                    <div class="ws-hotdoc-tabc1 ws-hotdoc-tabcon">
                        <volist name="newsWonderful" key="k" id="vo">
                            <div class="ws-hotdoc-tabconDiv"><span class="ws-hotdoc-tabconSpan">{$k}</span><a href="{$vo.url}" target="_blank">{$vo.title}</a></div>
                        </volist>
                    </div>
                    <div class="ws-hotdoc-tabc2 ws-hotdoc-tabcon">
                        <volist name="weeknewsWonderful" key="k" id="vo">
                            <div class="ws-hotdoc-tabconDiv"><span class="ws-hotdoc-tabconSpan">{$k}</span><a href="{$vo.url}" target="_blank">{$vo.title}</a></div>
                        </volist>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<hr class="ws-hr">
<template file="Contents/footer_v6.php"/>
<!--收索弹窗-->
<template file="Contents/footer_search.php"/>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://www.d1ev.com/new2016/src/external/js/jquery.2.2.3.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="src/external/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->


<script src="http://www.d1ev.com/new2016/src/external/js/amazeui.min.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/common.js"></script>
<script src="http://www.d1ev.com/new2016/src/external/js/headroom.js"></script>
<script src="http://www.d1ev.com/new2016/src/external/js/jquery.timeago/jquery.timeago.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/newsflash.js"></script>



<!--统计代码-->
<div style="display:none"><script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?c1d54a092f01be0215b4487856c2c6f6";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s);})();</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2469655'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s13.cnzz.com/stat.php%3Fid%3D2469655' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254528018'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s95.cnzz.com/stat.php%3Fid%3D1254528018' type='text/javascript'%3E%3C/script%3E"));</script></div>

</body>
</html>
