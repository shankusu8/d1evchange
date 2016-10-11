<!doctype html>
<html class="no-js" lang="zh-CH">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="热门标签根据新能源|微型|纯电|插电混动汽车相关文章整理出同类的主题,包括政策热点关注和搜索,补贴价格,评测导购等关键词,更加方便车友们订阅和浏览.">
    <meta name="keywords" content="电动汽车标签,新能源汽车主题">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>【热门标签】新能源电动汽车话题_主题集锦-第一电动网</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- Amaze UI CSS -->
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/amazeui.min.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/animate.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/common.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/label.css">
    <link rel="stylesheet" href="http://www.d1ev.com/2016gnev/image/sprite.css">
</head>
<body>

<!--导航-->
<template file="Contents/header_v6.php"/>
<div class="blank20"></div>
<!--中间内容-->
<div class="ws-content am-container">
    <div class="ws-common-head"><!-- 区块名样式一致 -->
        热门标签
    </div>
    <div class="blank30"></div>
    <div class="ws-label am-cf"><?php $hottags=getHottag();?>
		<volist name="hottags" id="vo">
    <a href="http://www.d1ev.com/tag-{$vo.tag}" class="am-fl">{$vo.tag}</a>
    </volist>
    </div>
    <div class="blank40"></div>
    <div class="ws-word">
        <div class="ws-word-head">
		<?php $letter_all = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');?>
            <ul class="am-cf">
			<?php foreach($letter_all as $v){
				if(in_array($v, $letter_tag)){ ?>
					<li class="ws-selected am-fl">{$v}</li>
				<?php     }else{ ?>
					<li class="am-fl">{$v}</li>
				<?php }
				}?>
              
            </ul>
        </div>
        <!-- ws-word-list-A 注意最后一个字母，按照顺序排列 -->
        
        <?php foreach($letter_all as $m){
			if(in_array($m, $letter_tag)){ ?>
				<div class="ws-word-list ws-word-list-{$m} am-cf">
				<h5>{$m}</h5>
				<div class="ws-word-child am-cf">
				<?php foreach($tagall as $k=>$v){
					if($v['letter']==$m){ ?>
						<a href="http://www.d1ev.com/tag-{$v.tag}" class="am-fl">{$v.tag}</a>
				<?php	}
				}?>
				</div>
				</div>
		<?php	}
		}?>    
        
        

    </div>

</div>
<hr class="ws-hr">
<!--footer部分-->
<template file="Contents/footer_v6.php"/>
<!--搜索弹窗-->
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
<script src="http://www.d1ev.com/new2016/src/public/js/label.js"></script>
<script src="http://www.d1ev.com/new2016/src/external/js/headroom.js"></script>


<!--统计代码-->
<div style="display:none"><script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?c1d54a092f01be0215b4487856c2c6f6";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s);})();</script><script type="text/javascript">var _paq=_paq||[];_paq.push(['trackPageView']);_paq.push(['enableLinkTracking']);(function(){var u="//analytics.d1ev.cn/";_paq.push(['setTrackerUrl',u+'piwik.php']);_paq.push(['setSiteId',1]);var d=document,g=d.createElement('script'),s=d.getElementsByTagName('script')[0];g.type='text/javascript';g.async=true;g.defer=true;g.src=u+'piwik.js';s.parentNode.insertBefore(g,s);})();</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2469655'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s13.cnzz.com/stat.php%3Fid%3D2469655' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254528018'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s95.cnzz.com/stat.php%3Fid%3D1254528018' type='text/javascript'%3E%3C/script%3E"));</script></div>

</body>
</html>