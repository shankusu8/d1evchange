<!doctype html>
<html class="no-js" lang="zh-CH">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{$description}">
    <meta name="keywords" content="{$keywords}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>第一电动网|全部标签详细</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- Amaze UI CSS -->
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/amazeui.min.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/animate.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/common.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/tags.css">
    <link rel="stylesheet" href="http://www.d1ev.com/2016gnev/image/sprite.css">
</head>
<body>

<!--首页导航-->
<template file="Contents/header_v6.php"/>
<!--中间主要内容-->
<div class="ws-content am-cf am-container">
    <div class="am-fl ws-left">
        <div class="ws-left-head">
            <a href="http://www.d1ev.com/alltags" class="ws-head1">全部标签页 </a>
            <span class="ws-head2"> &gt;</span>
            <span class="ws-head3">{$tag}</span>
            <span class="ws-head4">相关文章</span>
        </div>

        <div class="ws-news">

            <!-- 内容 -->
            <volist name="data" id="vo">
            <div class="article--wraped am-cf">
                <div class="article--img am-fl">
                    <a href="{$vo.url}" target="_blank"><img src="{$vo.thumb}" alt="{$vo.title}">
                    <?php if($vo['catid']==174) echo "<div class='ws-tip'></div>";?></a>
                    <?php if ($vo['shuxing']) echo "<div class='tip'>".getShuxing($vo['shuxing'])."</div>"; ?>
                </div>

                <div class="article--content am-fl">
                    <a href="{$vo.url}" target="_blank"><span class="article_p">{$vo.title}</span></a>
                    <p class="article--author">
                        <?php if($vo['zuozhe']) echo 
                        "<a href='".$Config['siteurl']."home/".$vo['zuozhe']."' target='_blank'><span class='article--authorpic'><img src='".src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/30x30.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'))."' alt='person'></span></a>
                        <a href='".$Config['siteurl']."home/".$vo['zuozhe']."' target='_blank'><span>".$vo['author']."</span></a>"; ?>
                        <span class="article--time"><time class="timeago" title="<?php echo date('Y-m-d H:i:s',$vo['updatetime']); ?>" datetime=<?php echo '"'.date(DATE_ISO8601,$vo['updatetime']).'"'; ?>></time></span>
                    </p>
                    <div class="article--type am-cf">
        <span class="article--type--tip am-fl">
          <i class="icon icon-icon_tips first"></i><?php 
          $tags = array();
          $tags=explode(",",$vo['tags']);
          $_key = array();
          foreach ($tags as $k) { $_key[] = '<a href="' . $Config['siteurl'] . 'tag-' . urlencode($k) . '" target="_blank">' . $k . '</a>'; }
          echo join("，", $_key);
?>
        </span>
                        <p class="article--type--say am-fr">
                            <span><i class="icon icon-icon_good"></i> <?php if(!$vo['zan']) echo 0; else echo $vo['zan']; ?></span>
                            <span><i class="icon icon-icon_comment"></i> {:commcount2($vo['catid'],$vo['id'])}</span>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            </volist>
            <ul class="am-pagination ws-pagination">
                 {$pages}
            </ul>
        </div>
    </div>
    <div class="am-fr ws-right">
        <!-- 热门标签 -->
        <div class="ws-tag" data-am-sticky="{top:82}">
            <div class="ws-common-head"><!-- 区块名样式一致 -->
                热门标签
            </div>
            <div class="blank20"></div>
            <div class="ws-tag-con am-cf">
                <volist name="hottag" id="vo">
                    <a class="am-fl ws-tag-a" href = "http://www.d1ev.com/tag-{$vo.tag}" target="_blank">{$vo.tag}</a>
                </volist>
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
<script src="http://www.d1ev.com/new2016/src/external/js/headroom.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/common.js"></script>
<script src="http://www.d1ev.com/new2016/src/external/js/jquery.timeago/jquery.timeago.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/tags.js"></script>



<!--统计代码-->
<div style="display:none"><script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?c1d54a092f01be0215b4487856c2c6f6";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s);})();</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2469655'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s13.cnzz.com/stat.php%3Fid%3D2469655' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254528018'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s95.cnzz.com/stat.php%3Fid%3D1254528018' type='text/javascript'%3E%3C/script%3E"));</script></div>

</body>
</html>