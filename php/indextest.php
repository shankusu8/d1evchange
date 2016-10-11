<!doctype html>
<html class="no-js" lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<title>【第一电动网|电动汽车网】电动汽车_新能源汽车_电动汽车网</title>
<meta name="description" content="第一电动网|电动汽车网（www.d1ev.com）拥有最全的电动汽车库和最新的电动汽车资讯，是所有电动汽车爱好者的电动汽车网站。第一电动网提供电动汽车资讯、新能源电动汽车新闻、电动汽车评测、电动汽车报价、新能源电动汽车美图、新能源汽车价格以及电动汽车政策等内容。电动汽车网--最新电动汽车报价。">
<meta name="keywords" content="电动汽车,纯电动汽车,新能源汽车,电动汽车价格,第一电动汽车网">
<!-- Amaze UI CSS -->
<link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/amazeui.min.css">
<link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/animate.css">
<link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/common.css">
<link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/index.css">
<link rel="stylesheet" href="http://www.d1ev.com/2016gnev/image/sprite.css">
<!-- AFP两段式代码-公用代码 -->
<script type="text/javascript" src="http://afpmm.alicdn.com/g/mm/afp-cdn/JS/k.js"></script>
<script>
 !(function(){
	if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
		window.location.href = 'http://m.d1ev.com';
	} 
})()
</script>
</head>
<body>
<div class="ws-fix-head">
<div class="ws-nav-bg">
<div class="ws-nav am-container am-cf">
<div class="am-fl">
<ul class="am-cf ws-nav-ul">
<li class="am-fl ws-nav-li"><a href="http://www.yiduyongche.com/" target="_blank"><i class="ws-nav-yiduIcon"></i>一度用车</a> </li>
<li class="am-fl ws-nav-li"><a href="http://www.evcharge.cc/" target="_blank"><i class="ws-nav-appIcon"></i>充电桩APP</a></li>
<li class="am-fl ws-nav-li"><a href="http://www.d1ev.com/sale" target="_blank">帮买团</a></li>
<li class="am-fl ws-nav-li"><a href="http://www.d1ev.com/minicar" target="_blank">微电之家</a></li>
<li class="am-fl ws-nav-li"><a href="http://www.d1ev.com/salecar" target="_blank">车型库</a></li>
</ul>
</div>
<div class="am-fr am-cf">
<div class="am-fl ws-nav-search">
<i class="ws-nav-searchIcon"></i>
</div>
    <?php if(!$userid){ ?>
<div class="am-fl am-cf ws-nav-login">
<a class="am-fl ws-nav-loginA" href="{$config_siteurl}login">登录</a>
<i class="am-fl ws-nav-loginI">/</i>
<a class="am-fl ws-nav-loginA" href="{$config_siteurl}register"> 注册</a>
</div>
     <?php }else{ ?>
        <div class="am-fl am-cf ws-nav-login">
        <div class="ws-nav-headmap">
		<a href="http://www.d1ev.com/home/<?php echo $userid ?>" class="ws-nav-usersA">
         <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $userid . '/30x30.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="" id="menu-avatar">
		 </a>
		 <?php $comm = redis('hget', 'newcount', 'userid_' . $userid);$comm_tx = $comm ?  $comm : '';?>
		 <if condition="$comm_tx">
		<a class="ws-ping1-num">
		{$comm_tx}
		</a></if>
        </div>
        <div class="ws-nav-users">
                        <a href="http://www.d1ev.com/member/article/index.html" class="ws-nav-usersA">我的投稿</a>
                        <!-- <a href="http://www.d1ev.com/member/subscribe/index.html" class="ws-nav-usersA">我的订阅</a> -->
                        <a href="http://www.d1ev.com/member/favorite/index.html" class="ws-nav-usersA">我的收藏</a>
                        <a href="http://www.d1ev.com/member/comments/index.html" class="ws-nav-usersA">我的评论<if condition="$comm_tx"><span class="ws-ping2-num">{$comm_tx}</span></if></a>
                        <a href="http://www.d1ev.com/member/message/index.html" class="ws-nav-usersA">我的私信</a>
                        <a href="http://www.d1ev.com/logout?forward=" class="ws-nav-usersA">退出</a>
</div>
</div>
    <?php } ?>
</div>
</div>
</div>
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
</div>
</div>
</div>
<div class="blank10"></div>
<div class="ws-banner am-container">
    <div class="ads-container">
<!-- 61554517：PC－首页－顶部通栏 类型：固定 尺寸：1200x100-->
<script type="text/javascript">
_acM({aid:"mm_116234497_16532973_61554517",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
    </div>
</script>
</div>
<div class="blank10"></div>
<div class="am-container ws-content am-cf">
<div class="ws-content-left am-fl">
<div class="ws-newsflash-wrap">
<div class="ws-common-head">
<a href="http://www.d1ev.com/newsflash" target="_blank">
快讯
</a>
</div>
<div class="blank10"></div>
<div class="ws-newsflash">
<dl class="ws-newsflash-parent"> 
    <position action="position" posid="11" num="20" order="listorder DESC" cache="600">
      <volist name="data" id="vo">
        <dd class="ws-newsflash-item">
        <i class="ws-newsflash-icon"></i>
        <a class="ws-newsflash-cont" href="{$vo.data.url}" target="_blank">{$vo.data.title}</a>
        <div class="ws-newsflash-source">
        <span><time class="timeago" datetime="<?php echo date('c',$vo['data']['updatetime']); ?>" title="<?php echo date('Y-m-d H:i:s',$vo['data']['updatetime']); ?>"><?php echo date('Y-m-d H:i:s',$vo['data']['updatetime']); ?></time></span>
        </div>
        </dd>
        </volist>
    </position>
<dd>
<div class="ws-newsflash-more" data-href="http://www.d1ev.com/contents/index/newsflash">
<a href="http://www.d1ev.com/newsflash" target="_blank">浏览更多</a>
</div>
</dd>
</dl>
<div class="ws-newsflash-scroll">
<div class="ws-newsflash-scrollBg"></div>
<div class="ws-newsflash-scrollBar"></div>
</div>
</div>
</div>
<div class="blank20"></div>
<div class="ads-container">
<!-- 61544615：PC－首页－左侧顶部矩形 类型：固定 尺寸：300x200-->
<script type="text/javascript">
_acM({aid:"mm_116234497_16532973_61544615",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
</div>
<div class="blank20"></div>
<div class="ws-commend-wrap">
<div class="ws-common-head">
主编推荐
</div>
<div class="blank10"></div>
<div class="ws-commend">
    <position action="position" posid="5" num="5" order="listorder DESC" cache="600">
      <volist name="data" id="vo">
        <div class="ws-commend-item">
        <i class="ws-commend-icon"></i>
            <a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}" class="ws-commend-con">{$vo.data.title}</a>
        </div>
        </volist>
    </position>
</div>
</div>
<div class="blank40"></div>
<div class="ws-data-wrap">
<div class="ws-common-head">
<a href="http://d1ev.com/industry_data.php" target="_blank">
数据
</a>
</div>
<div class="blank20"></div>
<div class="ws-data am-cf">
<div class="ws-data-select am-cf">
 <select name="info[sheng]"  class="ipt2" id="s_province" data-am-selected="{maxHeight: 250,searchBox: 1}" placeholder="品牌">
	<option value=""></option>
</select>
<select name="info[shi]"  class="ipt2" id="s_city" data-am-selected placeholder="车型">
	<option value=""></option>
</select>

</div>
<div class="blank10"></div>
<div class="ws-data-btn">
查销量
</div>
<div class="ws-data-img">
</div>
</div>
</div>
<div class="blank40"></div>
<div class="ws-report-wrap">
<div class="ws-common-head">
<a href="http://d1ev.com/industry_eport.php" target="_blank">
报告
</a>
</div>
<div class="blank20"></div>
<div class="ws-report am-cf">
<div class="am-fl ws-report-left">
<?php if($qx_bg){?>
    <a class="a1" href="http://d1ev.com/down.php?name=<?php echo $report[0]['title']; ?>&file=<?php echo $report[0]['fj']; ?>" class="ws-report-rightH"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/old-uploadfile/hysj/'.$report[0]['ylt'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" style ="width: 100px;height: 148px;" alt=""></a>
<?php }else{?>
<a class="a2" href="javascript:;" class="ws-report-rightH"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/old-uploadfile/hysj/'.$report[0]['ylt'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" style ="width: 100px;height: 148px;" alt=""></a>
<?php }?>
</div>
<div class="am-fr ws-report-right">
<?php if($qx_bg){?>
    <a class="a1" href="http://d1ev.com/down.php?name=<?php echo $report[0]['title']; ?>&file=<?php echo $report[0]['fj']; ?>" class="ws-report-rightH"><?php echo $report[0]['title']?></a>
<?php }else{?>
<a class="a2" href="javascript:;" class="ws-report-rightH"><?php echo $report[0]['title']?></a>
<?php }?>
<div class="ws-report-rightC">
    {$report[0]['summary']|strip_tags|str_cut=###,40}
</div>
</div>
</div>
<div class="blank10"></div>
<div class="ws-report-btn">
<p>
    <?php if($qx_bg){?>
        <a class="a1" href="http://d1ev.com/down.php?name=<?php echo $report[0]['title']; ?>&file=<?php echo $report[0]['fj']; ?>" >下载报告</a>
    <?php }else{?>
        <a class="a2" href="javascript:;">下载报告</a>
    <?php }?>
</p>
</div>
</div>
<div class="blank40"></div>
<div class="ws-product-wrap">
<div class="ws-common-head"><a href="http://d1ev.com/list_products.php" target="_blank">
产品</a>
</div>
<div class="blank20"></div>
<div class="ws-product am-cf">
<div class="ws-product-select am-cf">
<select name="" id="s_province2" data-am-selected>
<option value="类别">类别</option>
</select>
<select name="" id="s_city2" data-am-selected>
<option value="细分">细分</option>
</select>
</div>
<div class="blank10"></div>
<div class="ws-product-btn">
找产品
</div>
<div class="ws-product-new">
<div class="ws-product-newH-parent am-cf">
	<div class="ws-product-newH am-fl ws-active"><span>最新产品</span></div>
	<div class="ws-product-newH am-fl"><span>最热产品</span></div>
</div>
<div class="ws-product-newC-parent">
	<div class="ws-product-newC ws-product-newC1">
		<volist name="newproducts" offset="0" length='5' id="vo">
		   <a href="http://d1ev.com/uhome-prod-{$vo.userid}-{$vo.id}"  target="_blank" class="ws-product-item">
		   <i class="ws-product-icon"></i>
			<span class="ws-product-itemC">{$vo.pname}</span>
		   </a>
		</volist>
	</div>
	<div class="ws-product-newC ws-product-newC2">
		<volist name="hotproducts" offset="0" length='5' id="vo">
		   <a href="http://d1ev.com/uhome-prod-{$vo.userid}-{$vo.id}"  target="_blank" class="ws-product-item">
		   <i class="ws-product-icon"></i>
			<span class="ws-product-itemC">{$vo.pname}</span>
		   </a>
		</volist>
	</div>
</div>
</div>
</div>
</div>
<div class="blank40"></div>
<div class="ws-company-wrap">
<div class="ws-common-head"><a href="http://d1ev.com/list_companys.php" target="_blank">
企业</a>
</div>
<div class="blank20"></div>
<div class="ws-company am-cf">
<div class="ws-company-select am-cf">
<select name="" id="s_province3" data-am-selected>
<option value="类别">类别</option>
</select>
<select name="" id="s_city3" data-am-selected>
<option value="细分">细分</option>
</select>
</div>
<div class="blank10"></div>
<div class="ws-company-btn">
找企业
</div>
<div class="ws-company-new">
<div class="ws-company-newH-parent am-cf">
	<div class="ws-company-newH am-fl ws-active"><span class="">最新企业</span></div>
	<div class="ws-company-newH am-fl"><span>最热企业</span></div>
</div>
<div class="ws-company-newC-parent">
	<div class="ws-company-newC ws-company-newC1">
		<volist name="newcompany" offset="0" length='5' id="vo">
		   <a href="http://d1ev.com/uhome-{$vo.userid}"  target="_blank" class="ws-company-item">
		   <i class="ws-company-icon"></i>
			<span class="ws-company-itemC">{$vo.company}</span>
		   </a>
		</volist>
	</div>
	<div class="ws-company-newC ws-company-newC2">
		<volist name="hotcompany" offset="0" length='5' id="vo">
		   <a href="http://d1ev.com/uhome-{$vo.userid}"  target="_blank" class="ws-company-item">
		   <i class="ws-company-icon"></i>
			<span class="ws-company-itemC">{$vo.company}</span>
		   </a>
		</volist>
	</div>
</div>
</div>
</div>
</div>
<div class="blank40"></div>
<div class="ads-container">
<!-- 61546540：PC－首页－左侧底部矩形 类型：固定 尺寸：300x150-->
<script type="text/javascript">
_acM({aid:"mm_116234497_16532973_61546540",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
</div>
</div>

<div class="ws-content-md am-fl">
<div class="ws-slide">
<div class="slidemodel">
<div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
<ul class="am-slides">
<position action="position" posid="3" num="4" order="listorder DESC" cache="3600">
    <volist name="data" id="vo"><!--焦点图-->
        <li><a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}" class="pic"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'"  src="<?php echo src_www_to_img($vo['data']['thumb2'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="{$vo.data.title}"/> <div class="ws-shadow-slide"></div><span class="slidecontent">{$vo.data.title}</span></a></li>
    </volist>
</position>
</ul>
</div>
</div>
</div>
<div class="blank20"></div>
<div class="ws-news">
<volist name="Recommendnews" key="k" id="vo">
    <?php  $vo['data']= unserialize($vo['data']); ?>
    <?php  $vo['tuji']= unserialize($vo['tuji']); ?>
    <?php if($k == 6){?>
    <?php  $fullnews[0]['data']= unserialize($fullnews[0]['data']); ?>
    <a href="<?php echo $fullnews[0]['data']['url'] ?>" target="_blank"><div class="ws-rich">
    <div class="zhixun--wraped">
    <div class="zhixun--img">
    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($fullnews[0]['data']['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $fullnews[0]['data']['title'];?>">
		<div class="ws-shadow-rich"></div>
    <div class="zhixun--content">
    <div class="tip">富资讯</div>
    <p class="zhixun--head"><?php echo $fullnews[0]['data']['title'] ?> </p>
    <p class="zhixun--author">
    <span class="zhixun--time"><time class="timeago" datetime="<?php echo date('c',$fullnews[0]['data']['updatetime']); ?>" title="<?php echo date('Y-m-d H:i:s',$fullnews[0]['data']['updatetime']); ?>"><?php echo date('Y-m-d H:i:s',$fullnews[0]['data']['updatetime']); ?></time></span>
    </p>
    </div>
    </div>
    </div>
    </div></a>
    <hr>
    <?php }if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158' || $vo['posid'] == 9){?>
    <a href="<?php echo $vo['data']['url'] ?>" target="_blank">
    <div class="pictures--wraped">
    <div class="pictures_p"><?php echo $vo['data']['title'] ?></div>
    <div class="picutres_img am-cf">
    <a href="<?php echo $vo['data']['url'] ?>" target="_blank"><div class="pictures--img first am-fl">
    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['tuji'][0]['url'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['data']['title'];?>">
    </div></a>
    <a href="<?php echo $vo['data']['url'] ?>#2" target="_blank"><div class="pictures--img am-fl">
    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['tuji'][1]['url'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['data']['title'];?>">
    </div></a>
    <a href="<?php echo $vo['data']['url'] ?>#3" target="_blank"><div class="pictures--img am-fl">
    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['tuji'][2]['url'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['data']['title'];?>">
    </div></a>
    </div>
    <div class="pictures--time"><time class="timeago" datetime="<?php echo date('c',$vo['data']['updatetime']); ?>" title="<?php echo date('Y-m-d H:i:s',$vo['data']['updatetime']); ?>"><?php echo date('Y-m-d H:i:s',$vo['data']['updatetime']); ?></time></div>
    </div>
    </a>
    <hr>
    <?php }else{ ?>
    <div class="article--wraped am-cf">
    <div href="{$vo.data.url}" target="_blank"><div class="article--img am-fl">
    <a href="{$vo.data.url}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['data']['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['data']['title'];?>"></a>
    <?php if($vo['catid']=='174'){ ?>
    <div class="ws-tip"></div>
    <?php } ?>
    <?php if($vo['data']['shuxing'] != ''){?>
    <div class="tip"><a href="http://www.d1ev.com/tag-<?php echo $vo['data']['shuxing']; ?>" target="_blank" class="new_l"><?php echo getShuxing($vo['data']['shuxing']);?></a></div>
    <?php } ?>
    </div></div>
    <div class="article--content am-fl">
    <a href="{$vo.data.url}" target="_blank"><span class="article_p">{$vo.data.title}</span></a>
    <p class="article--author">
    <?php if($vo['user_id'] > 0){ ?>
    <a href="http://www.d1ev.com/home/{$vo['user_id']}" target="_blank"><span class="article--authorpic"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['user_id'] . '/45x45.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$vo['author']}"></span>
    <span>{$vo.author}</span></a>
    <?php } ?>
    <span class="article--time"><time class="timeago" datetime="<?php echo date('c',$vo['data']['updatetime']); ?>" title="<?php echo date('Y-m-d H:i:s',$vo['data']['updatetime']); ?>"><?php echo date('Y-m-d H:i:s',$vo['data']['updatetime']); ?></time></span>
    </p>
    <div class="article--type am-cf">
    <span class="article--type--tip am-fl">
        <?php if(!empty($vo['tags'])){?>
    <i class="icon icon-icon_tips first"></i>          
        <?php $article = explode(',',$vo['tags']); ?>
            <volist name="article" id="ar">
                <a href="http://www.d1ev.com/tag-{$ar}" target="_blank">{$ar}&nbsp;&nbsp;</a>
            </volist>
        <?php }?>
    </span>
    <p class="article--type--say am-fr">
    <span><i class="icon icon-icon_good"></i> {:getZan($vo['id'])}</span>
    <span><i class="icon icon-icon_comment"></i> {:getComment($vo['id'])}</span>
    </p>
    </div>
    </div>
    </div>
    <hr>
    <?php } ?>
    <?php if($k == 12){?>
    <div class="ads-container ads-list-middle">
    <!-- 61550574：PC－首页－中间半通栏 类型：固定 尺寸：580x150-->
    <script type="text/javascript">
    _acM({aid:"mm_116234497_16532973_61550574",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
    </script>
    </div>
    <?php } ?>
</volist>
</div>
<div class="ws-newsmore">
<div class="foo-wraped">
<div class="more--wraped">
<div class="more--text">加载更多</div>
</div>
</div>
</div>
</div>
<div class="ws-content-right am-fr">
<div class="ws-near">
<div class="activity--wraped">
<div class="activity"><a href="http://www.d1ev.com/huodong" target="_blank">近期活动</a></div>
<volist name="all_huodong" id="vo" offset="0" length='2'>
<div class="activity--img">
    <a href="{$vo.url}" target="_blank">
<img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['suoluetu'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="{$vo.title}">
</a>
</div>
</volist>
<div class="acitivity--icon am-cf">
<a href="http://www.d1ev.com/tag-evcb"  target="_blank"> <span class="icon icon-icon_morning am-fl first"></span></a>
<a href="http://www.d1ev.com/tag-weekhot" target="_blank"> <span class="icon icon-icon_hot am-fl"></span></a>
<a href="http://www.d1ev.com/tag-weekcar"  target="_blank"> <span class="icon icon-icon_newcar am-fl"></span></a>
</div>
<div class="activity--name  am-cf">
<div class="am-fl first"><a href="http://www.d1ev.com/tag-evcb">EV晨报</a></div>
<div class="am-fl"><a href="http://www.d1ev.com/tag-weekhot">一周热点</a></div>
<div class="am-fl"><a href="http://www.d1ev.com/tag-weekcar">一周新车</a></div>
</div>
</div>
</div>
<div class="ws-daniu">
<div class="activity--wraped">
<div class="activity"><a href="http://www.d1ev.com/member/daniusay" target="_blank">大牛说</a><a href="http://www.d1ev.com/member/articlenew/publish.html"><i class="icon icon-icon_magzine"></i><span class="activity-textr">我要投稿</span></a></div>
<div class="activity--icon am-cf">
<div class="am-icon-btn am-text-success am-fl first"><a href="http://www.d1ev.com/home/{$shouyedaniu[0]['userid']}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $shouyedaniu[0]['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$shouyedaniu[0]['nickname']}"></a></div>
<div class="am-icon-btn am-text-danger am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[1]['userid']}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $shouyedaniu[1]['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$shouyedaniu[1]['nickname']}"></a></div>
<div class="am-icon-btn am-text-success am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[2]['userid']}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $shouyedaniu[2]['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$shouyedaniu[2]['nickname']}"></a></div>
<div class="am-icon-btn am-text-danger am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[3]['userid']}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $shouyedaniu[3]['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$shouyedaniu[3]['nickname']}"></a></div>
</div>
<div class="activity--name  am-cf">
<div class="am-fl first"><a href="http://www.d1ev.com/home/{$shouyedaniu[0]['userid']}" target="_blank">{$shouyedaniu[0]['nickname']}</a></div>
<div class="am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[1]['userid']}" target="_blank">{$shouyedaniu[1]['nickname']}</a></div>
<div class="am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[2]['userid']}" target="_blank">{$shouyedaniu[2]['nickname']}</a></div>
<div class="am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[3]['userid']}" target="_blank">{$shouyedaniu[3]['nickname']}</a></div>
</div>
<div class="activity--icon am-cf">
<div class="am-icon-btn am-text-danger am-fl first"><a href="http://www.d1ev.com/home/{$shouyedaniu[4]['userid']}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $shouyedaniu[4]['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$shouyedaniu[4]['nickname']}"></a></div>
<div class="am-icon-btn am-text-success am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[5]['userid']}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $shouyedaniu[5]['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$shouyedaniu[5]['nickname']}"></a></div>
<div class="am-icon-btn am-text-danger am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[6]['userid']}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $shouyedaniu[6]['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$shouyedaniu[6]['nickname']}"></a></div>
<div class="am-icon-btn am-text-success am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[7]['userid']}" target="_blank"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture-niu.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $shouyedaniu[7]['userid'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$shouyedaniu[7]['nickname']}"></a></div>
</div>
<div class="activity--name  am-cf">
<div class="am-fl first"><a href="http://www.d1ev.com/home/{$shouyedaniu[4]['userid']}" target="_blank">{$shouyedaniu[4]['nickname']}</a></div>
<div class="am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[5]['userid']}" target="_blank">{$shouyedaniu[5]['nickname']}</a></div>
<div class="am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[6]['userid']}" target="_blank">{$shouyedaniu[6]['nickname']}</a></div>
<div class="am-fl"><a href="http://www.d1ev.com/home/{$shouyedaniu[7]['userid']}" target="_blank">{$shouyedaniu[7]['nickname']}</a></div>
</div>
<div class="blank20"></div>
<div class="ads-container">
<!-- 61540607：PC－首页－右侧中部矩形 类型：固定 尺寸：300x200-->
<script type="text/javascript">
_acM({aid:"mm_116234497_16532973_61540607",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
</div>
<div class="blank40"></div>
</div>
</div>
<div class="ws-hotcomment">
<div class="comments--wraped">
<div class="comments">热门评论</div>
<volist name="commentWonderful" id="vo" offset="0" length='3'>
    <?php $article = unserialize($vo['article_info']); ?>
    <div class="comments--content">
    <div class="comments_text"><a href="{$article.url}#comment" target="_blank">{$vo['content']|strip_tags|str_cut=###,100}</a></div>
    <p class="comments--author">
    <span class="comments--authorpic">
		<a href="http://www.d1ev.com/home/{$vo['user_id']}" target="_blank">
			<img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['user_id'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$vo['author']}">
		</a>
		</span>
    <span><a href="http://www.d1ev.com/home/{$vo['user_id']}" target="_blank">{$vo['author']}</a></span>
    <span class="comments--time"><time class="timeago" datetime="<?php echo date('c',$vo['date']); ?>" title="<?php echo date('Y-m-d H:i:s',$vo['date']); ?>"><?php echo date('Y-m-d H:i:s',$vo['date']); ?></time></span>
    </p>
    </div>
    <div class="comments_head">来源：<a href="{$article.url}" target="_blank">{$article.title}</a></div>
</volist>
</div>
</div>
<div class="blank40"></div>
<div class="ws-hotdoc">
<div class="ws-common-head">
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
    <volist name="newsWonderful" key="k" id="vo" offset="0" length='5'>
        <div class="ws-hotdoc-tabconDiv"><span class="ws-hotdoc-tabconSpan">{$k}</span><a href="{$vo.url}" target="_blank">{$vo.title}</a></div>
    </volist>
</div>
<div class="ws-hotdoc-tabc2 ws-hotdoc-tabcon">
    <volist name="weeknewsWonderful" key="k" id="vo" offset="0" length='5'>
        <div class="ws-hotdoc-tabconDiv"><span class="ws-hotdoc-tabconSpan">{$k}</span><a href="{$vo.url}" target="_blank">{$vo.title}</a></div>
    </volist>
</div>
</div>
</div>
</div>
<div class="blank40"></div>
<div class="ws-companynew-wrap">
<div class="ws-common-head">
企业新闻
</div>
<div class="blank10"></div>
<div class="ws-companynew">
    <volist name="vip_news"  id="vo">
        <div class="ws-companynew-item">
        <i class="ws-companynew-icon"></i>
        <a href="http://d1ev.com/uhome-newsd-{$vo.userid}-{$vo.newsid}" target="_blank" class="ws-companynew-con">{$vo.title}</a>
        </div>
    </volist>
</div>
</div>
<div class="blank40"></div>
<div class="ws-tag">
<div class="ws-common-head"><a href="http://www.d1ev.com/alltags" target="_blank">
热门标签</a>
</div>
<div class="blank20"></div>
<div class="ws-tag-con am-cf">
    <volist name="tags" id="vo">
        <a class="am-fl ws-tag-a" href = "http://www.d1ev.com/tag-{$vo.tag}" target="_blank">{$vo.tag}</a>
    </volist>
</div>
</div>
<div class="blank40"></div>
<div class="ads-container">
<!-- 61564310：PC－首页－右侧底部矩形 类型：固定 尺寸：300x150-->
<script type="text/javascript">
_acM({aid:"mm_116234497_16532973_61564310",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
</div>
</div>
</div>
<div class="blank40"></div>
<div class="blank40"></div>
<div class="ws-logo am-container">
	<a href="http://d1ev.com/vip_companys.php?type=5" target="_blank"><div class="ws-logo-h">金牌供应商</div></a>
	<div class="ws-logo-con">
	<div class="ws-logo-item am-cf">
	<div class="am-fl ws-logo-itemH">整车：</div>
	<div class="am-fl am-cf ws-logo-itemC">
		<volist name="vip_company" id="vo">
			<?php if(false !== strrpos($vo['catid'],'1003')){ ?>
			<a href="http://d1ev.com/uhome-{$vo.gg_userid}" target="_blank" class="am-fl ws-logo-company">
				<img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/old-uploadfile/qytj/'.$vo['sy_pic'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="{$vo.company}" title="{$vo.company}">
			</a>
			<?php }?>
		</volist>
	</div>
	</div>
	<div class="ws-logo-item am-cf">
	<div class="am-fl ws-logo-itemH">能源系统：</div>
	<div class="am-fl am-cf ws-logo-itemC">
		<volist name="vip_company" id="vo">
			<?php if(false !== strrpos($vo['catid'],'1007')){ ?>
			<a href="http://d1ev.com/uhome-{$vo.gg_userid}" target="_blank" class="am-fl ws-logo-company">
				<img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/old-uploadfile/qytj/'.$vo['sy_pic'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="{$vo.company}" title="{$vo.company}">
			</a>
			<?php } ?>
		</volist>
	</div>
	</div>
	<div class="ws-logo-item am-cf">
	<div class="am-fl ws-logo-itemH">驱动及控制系统：</div>
	<div class="am-fl am-cf ws-logo-itemC">
		<volist name="vip_company" id="vo">
			<?php if(false !== strrpos($vo['catid'],'1004')){ ?>
			<a href="http://d1ev.com/uhome-{$vo.gg_userid}" target="_blank" class="am-fl ws-logo-company">
				<img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/old-uploadfile/qytj/'.$vo['sy_pic'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="{$vo.company}" title="{$vo.company}">
			</a>
			<?php } ?>
		</volist>
	</div>
	</div>
	<div class="ws-logo-item am-cf">
	<div class="am-fl ws-logo-itemH">配套设施：</div>
	<div class="am-fl am-cf ws-logo-itemC">
		<volist name="vip_company" id="vo">
			<?php if(false !== strrpos($vo['catid'],'1008')){ ?>
			<a href="http://d1ev.com/uhome-{$vo.gg_userid}" target="_blank" class="am-fl ws-logo-company">
				<img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/old-uploadfile/qytj/'.$vo['sy_pic'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="{$vo.company}" title="{$vo.company}">
			</a>
			<?php } ?>
		</volist>
	</div>
	</div>
	<div class="ws-logo-item am-cf">
	<div class="am-fl ws-logo-itemH">其他：</div>
	<div class="am-fl am-cf ws-logo-itemC">
		<volist name="vip_company" id="vo">
			<?php if(false !== strrpos($vo['catid'],'1009')){ ?>
			<a href="http://d1ev.com/uhome-{$vo.gg_userid}" target="_blank" class="am-fl ws-logo-company">
				<img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/old-uploadfile/qytj/'.$vo['sy_pic'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="{$vo.company}" title="{$vo.company}">
			</a>
			<?php } ?>
		</volist>
	</div>
	</div>
	</div>
	<a href="http://www.d1ev.com/contents/index/servers" target="_blank" class="ws-logo-btn">
        加入金牌供应商
    </a>
</div>
<div class="blank40"></div>
<div class="am-container ws-banner ads-container">
<!-- 61568266：PC－首页－底部通栏 类型：固定 尺寸：1200x100-->
<script type="text/javascript">
_acM({aid:"mm_116234497_16532973_61568266",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
</div>
<div class="blank40"></div>
<div class="ws-link am-container">
	<div class="am-cf">
		<a href="http://www.d1ev.com/contents/index/friendlink" class="am-fl ws-link-itemFirst">友情链接</a>
		<?php $links = getLinks(); ?>
			<volist name="links" id="vo" offset="0" length='15'>
				<a href="{$vo.url}" target="_blank" class="am-fl ws-link-item">{$vo.name}</a>
			</volist>
	</div>
	
</div>
<div class="blank40"></div>
<hr class="ws-hr">
<template file="Contents/footer_v6.php"/>
<template file="Contents/footer_search.php"/>

<!--  alert弹窗 -->
<div class="ws_alert">

</div>
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
<script src="http://www.d1ev.com/new2016/src/external/js/jquery.timeago/jquery.timeago.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/common.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/cityselect.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/index.js"></script>

<div style="display:none"><script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?c1d54a092f01be0215b4487856c2c6f6";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s);})();</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2469655'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s13.cnzz.com/stat.php%3Fid%3D2469655' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254528018'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s95.cnzz.com/stat.php%3Fid%3D1254528018' type='text/javascript'%3E%3C/script%3E"));</script></div>
</body>
</html>