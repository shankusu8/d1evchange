<!doctype html>
<html class="no-js" lang="zh-CH">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="车讯栏目提供新能源电动汽车车型的专业报道,为您评测每款电动汽车车型怎么样,还有视频和文章,内饰外饰高清图片,参数配置,补贴后价格等内容.">
    <meta name="keywords" content="车型新闻,车型报道,车型解读">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>【车讯】最新的新能源电动汽车车型资讯-第一电动网</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- Amaze UI CSS -->
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/amazeui.min.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/external/css/animate.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/common.css">
    <link rel="stylesheet" href="http://www.d1ev.com/new2016/src/public/css/carflash.css">
    <link rel="stylesheet" href="http://www.d1ev.com/2016gnev/image/sprite.css">
</head>
<body>

<!--导航-->
<template file="Contents/header_v6.php"/>

<!--车讯banner图-->
<div class="ws-banner">
    <h2>车讯</h2>
</div>
<div class="blank40"></div>
<!--中间内容-->
<div class="ws-content am-cf am-container">
    <div class="am-fl ws-left">

        <div class="ws-news">
            <!-- 内容 -->
            <volist name="data" id="vo">
            <div class="article--wraped am-cf">
                <div class="article--img am-fl">
                    <a href="{$vo.url}" target="_blank"><img src="{$vo.thumb}" alt="{$vo.title}"></a>
                    <a href="http://www.d1ev.com/tag-{$vo.shuxing}" target="_blank"><div class="tip">{$vo.shuxing|getShuxing}</div></a>
                </div>

                <div class="article--content am-fl">
                    <a href="{$vo.url}" target="_blank"><span class="article_p">{$vo.title}</span></a>
                    <p class="article--author">
                        <?php if($vo['zuozhe']) echo 
                        "<a href='".$Config['siteurl']."home/".$vo['zuozhe']."' target='_blank'><span class='article--authorpic'><img src='".src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/30x30.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'))."' alt='person'></span></a>
                        <a href='".$Config['siteurl']."home/".$vo['zuozhe']."' target='_blank'><span>".getUserInfo($vo['zuozhe'],'nickname')."</span></a>"; ?>
                        <span class="article--time"><time class="timeago" title="<?php echo date('Y-m-d H:i:s',$vo['updatetime']); ?>"  onload="ws.time2ret(<?php echo ''.$vo['updatetime'].'';?>,this)" date-time2=<?php echo '"'.$vo['updatetime'].'"';?> datetime=<?php echo '"'.date(DATE_ISO8601,$vo['updatetime']).'"'; ?>></time>
						
						</span>
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
        <!--找车-->
        <div class="ws-find-wrap">
            <div class="ws-common-head"><!-- 区块名样式一致 -->
                找车
            </div>
            <div class="blank20"></div>
            <div class="ws-find am-cf">
                <div class="ws-find-select am-cf">
                    <select name="info[sheng]"  class="ipt2" id="s_province" data-am-selected="{maxHeight: 250,searchBox: 1}" placeholder="品牌">
						<option value=""></option>
                    </select>
                    <select name="info[shi]"  class="ipt2" id="s_city" data-am-selected placeholder="车型">
						<option value=""></option>
                    </select>
                </div>
                <div class="blank10"></div>
                <div class="ws-find-btn">
                    快速找车
                </div>
                <div class="blank40"></div>
                <div class="am-cf ws-commend">
                    <div class="am-fl">
                       <dl>
                           <dd class="active">推荐车讯</dd>
                           <dd>3万以下</dd>
                           <dd>3-10万</dd>
                           <dd>10-15万</dd>
                           <dd>15-30万</dd>
                           <dd>30万以上</dd>

                       </dl>
                    </div>

                    <div class="am-fr ws-commend-tab">
                        <div class="ws-commend-list ws-commend-list1">
                            <div class="ws-commend-list-wrap">
                                <ol>
                                    <volist name="recommend" id="vo" offset="0" length="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-listPhotoBg">
                                            <a href="{$vo.url}" target="_blank"><img src="{$vo.thumb}" alt=""></a>
                                        </div>
                                        <div class="am-fl ws-commend-listCon">
                                            <a href="{$vo.url}" target="_blank"><h5 class="ws-commend-listCon-h5">{$vo.title}</h5></a>
                                            <div class="ws-commend-listCon-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                            <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><div class='ws-commend-listCon-sale'>特卖</div></a>"; ?>
                                        </div>
                                    </li>                               
                                    </volist>
                                </ol>
                                <ul>
                                    <volist name="recommend" id="vo" offset="3">
                                    <li class="am-cf">
                                        <a href="javascript:;"><div class="am-fl ws-commend-ul-carName"><a href="{$vo.url}" target="_blank"><span>{$vo.title}</span></a> <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><i>特卖</i></a>";?></div></a>
                                        <div class="am-fr ws-commend-ul-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                    </li>
                                    </volist>
                                </ul>
                            </div>
                            <div class="ws-newsflash-scroll">
                                <div class="ws-newsflash-scrollBg"></div>
                                <div class="ws-newsflash-scrollBar"></div>
                            </div>

                        </div>
                        <div class="ws-commend-list">
                            <div class="ws-commend-list-wrap">
                                <ol>
                                    <volist name="less_than_three" id="vo" offset="0" length="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-listPhotoBg">
                                            <a href="{$vo.url}" target="_blank"><img src="{$vo.thumb}" alt=""></a>
                                        </div>
                                        <div class="am-fl ws-commend-listCon">
                                            <a href="{$vo.url}" target="_blank"><h5 class="ws-commend-listCon-h5">{$vo.title}</h5></a>
                                            <div class="ws-commend-listCon-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                            <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><div class='ws-commend-listCon-sale'>特卖</div></a>"; ?>
                                        </div>
                                    </li>                               
                                    </volist>
                                </ol>
                                <ul>
                                    <volist name="less_than_three" id="vo" offset="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-ul-carName"><a href="{$vo.url}" target="_blank"><span>{$vo.title}</span></a> <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><i>特卖</i></a>";?></div>
                                        <div class="am-fr ws-commend-ul-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                    </li>
                                    </volist>
                                </ul>
                            </div>
                            <div class="ws-newsflash-scroll">
                                <div class="ws-newsflash-scrollBg"></div>
                                <div class="ws-newsflash-scrollBar"></div>
                            </div>
                        </div>
                        <div class="ws-commend-list">
                            <div class="ws-commend-list-wrap">
                                <ol>
                                    <volist name="three_to_ten" id="vo" offset="0" length="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-listPhotoBg">
                                            <a href="{$vo.url}" target="_blank"><img src="{$vo.thumb}" alt=""></a>
                                        </div>
                                        <div class="am-fl ws-commend-listCon">
                                            <a href="{$vo.url}" target="_blank"><h5 class="ws-commend-listCon-h5">{$vo.title}</h5></a>
                                            <div class="ws-commend-listCon-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                            <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><div class='ws-commend-listCon-sale'>特卖</div></a>"; ?>
                                        </div>
                                    </li>                               
                                    </volist>
                                </ol>
                                <ul>
                                    <volist name="three_to_ten" id="vo" offset="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-ul-carName"><a href="{$vo.url}" target="_blank"><span>{$vo.title}</span></a> <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><i>特卖</i></a>";?></div>
                                        <div class="am-fr ws-commend-ul-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                    </li>
                                    </volist>
                                </ul>
                            </div>
                            <div class="ws-newsflash-scroll">
                                <div class="ws-newsflash-scrollBg"></div>
                                <div class="ws-newsflash-scrollBar"></div>
                            </div>
                        </div>
                        <div class="ws-commend-list">
                            <div class="ws-commend-list-wrap">
                                <ol>
                                    <volist name="ten_to_fifteen" id="vo" offset="0" length="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-listPhotoBg">
                                            <a href="{$vo.url}" target="_blank"><img src="{$vo.thumb}" alt=""></a>
                                        </div>
                                        <div class="am-fl ws-commend-listCon">
                                            <a href="{$vo.url}" target="_blank"><h5 class="ws-commend-listCon-h5">{$vo.title}</h5></a>
                                            <div class="ws-commend-listCon-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                            <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><div class='ws-commend-listCon-sale'>特卖</div></a>"; ?>
                                        </div>
                                    </li>                               
                                    </volist>
                                </ol>
                                <ul>
                                    <volist name="ten_to_fifteen" id="vo" offset="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-ul-carName"><a href="{$vo.url}" target="_blank"><span>{$vo.title}</span></a> <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><i>特卖</i></a>";?></div>
                                        <div class="am-fr ws-commend-ul-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                    </li>
                                    </volist>
                                </ul>
                            </div>
                            <div class="ws-newsflash-scroll">
                                <div class="ws-newsflash-scrollBg"></div>
                                <div class="ws-newsflash-scrollBar"></div>
                            </div>
                        </div>
                        <div class="ws-commend-list">
                            <div class="ws-commend-list-wrap">
                                <ol>
                                    <volist name="fifteen_to_thirty" id="vo" offset="0" length="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-listPhotoBg">
                                            <a href="{$vo.url}" target="_blank"><img src="{$vo.thumb}" alt=""></a>
                                        </div>
                                        <div class="am-fl ws-commend-listCon">
                                            <a href="{$vo.url}" target="_blank"><h5 class="ws-commend-listCon-h5">{$vo.title}</h5></a>
                                            <div class="ws-commend-listCon-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                            <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><div class='ws-commend-listCon-sale'>特卖</div></a>"; ?>
                                        </div>
                                    </li>                               
                                    </volist>
                                </ol>
                                <ul>
                                    <volist name="fifteen_to_thirty" id="vo" offset="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-ul-carName"><a href="{$vo.url}" target="_blank"><span>{$vo.title}</span></a> <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><i>特卖</i></a>";?></div>
                                        <div class="am-fr ws-commend-ul-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                    </li>
                                    </volist>
                                </ul>
                            </div>
                            <div class="ws-newsflash-scroll">
                                <div class="ws-newsflash-scrollBg"></div>
                                <div class="ws-newsflash-scrollBar"></div>
                            </div>
                        </div>
                        <div class="ws-commend-list">
                            <div class="ws-commend-list-wrap">
                                <ol>
                                    <volist name="more_than_thirty" id="vo" offset="0" length="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-listPhotoBg">
                                            <a href="{$vo.url}" target="_blank"><img src="{$vo.thumb}" alt=""></a>
                                        </div>
                                        <div class="am-fl ws-commend-listCon">
                                            <a href="{$vo.url}" target="_blank"><h5 class="ws-commend-listCon-h5">{$vo.title}</h5></a>
                                            <div class="ws-commend-listCon-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                            <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><div class='ws-commend-listCon-sale'>特卖</div></a>"; ?>
                                        </div>
                                    </li>                               
                                    </volist>
                                </ol>
                                <ul>
                                    <volist name="more_than_thirty" id="vo" offset="3">
                                    <li class="am-cf">
                                        <div class="am-fl ws-commend-ul-carName"><a href="{$vo.url}" target="_blank"><span>{$vo.title}</span></a> <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><i>特卖</i></a>";?></div>
                                        <div class="am-fr ws-commend-ul-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?></div>
                                    </li>
                                    </volist>
                                </ul>
                            </div>
                            <div class="ws-newsflash-scroll">
                                <div class="ws-newsflash-scrollBg"></div>
                                <div class="ws-newsflash-scrollBar"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
        <div class="blank40"></div>
        <!--关注排行-->
        <div class="ws-follow-wrap">
            <div class="ws-common-head"><!-- 区块名样式一致 -->
                关注排行
            </div>
            <div class="ws-follow">
                <div class="blank20"></div>
                <ol>
                    <volist name="rank" id="vo" key="no" offset="0" length="3">
                        <li class="am-cf">
                            <div class="am-fl ws-follow-le">{$vo.no}</div>
                            <div class="am-fl ws-follow-md">
                                <a href="{$vo.url}" target="_blank"><img src="{$vo.thumb}" alt=""/></a>
                            </div>
                            <div class="am-fl ws-follow-ri">
                                <div class="am-cf">
                                    <a href="{$vo.url}" target="_blank"><h5 class="am-fl ws-follow-ri-name">{$vo.title}</h5></a>
                                    <div class="am-fr ws-follow-ri-price"><?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?>        
                                    </div>
                                </div>
                                <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><span>特卖</span></a>"; ?>                             
                            </div>
                        </li>  

                    </volist>
                </ol>
                <ul>
                    <volist name="rank" id="vo" key="no" offset="3">
                    <li class="am-cf">
                        <div class="am-fl ws-follow-le">{$vo.no}</div>
                        <div class="am-fl ws-follow-md">
                            <a href="{$vo.url}" target="_blank"><span>{$vo.title}</span></a>
                            <?php if($vo['temai']) echo "<a href='".$vo['temai']."' target='_blank'><i>特卖</i></a>"; ?>
                        </div>
                        <div class="am-fr ws-follow-ri">
                            <?php if($vo['zuidijia']) echo $vo['zuidijia'].'万';
                                            else echo "暂无报价";?>
                        </div>
                    </li> 
                    </volist>                   
                </ul>
            </div>
        </div>
        <!--我要询价 预约试驾-->
        <div class="ws-lastform">
            <div class="am-cf ws-lastform-tabname">
                <div class="am-fl ws-div1 ws-active">我要询价</div>
                <div class="am-fl ws-div2">预约试驾</div>

            </div>
            <div class="blank20"></div>
            <div class="ws-lastform-tabcont">
                <div class="ws-lastform-item ws-lastform-item1">
                    <div class="ws-group am-cf ws-group-lastform-item1" >
                        <select id="s_province3" name="" data-am-selected placeholder="品牌">
                            
                        </select>
                        <select id="s_city3" name="" data-am-selected placeholder="车型">
                           
                        </select>
                    </div>
                    <div class="ws-group">
                        <input type="text"  placeholder="姓名" class="ws-group-inp ws-group-inp-name1">
                    </div>
                    <div class="ws-group">
                        <input type="text" placeholder="手机" class="ws-group-inp ws-group-inp-tel1">
                    </div>
                    <div class="ws-group am-cf ws-group-lastform-item2">
                        <select id="s_province4" name="" data-am-selected="{maxHeight: 250,searchBox: 1}" placeholder="请选择省">
                           
                        </select>
                        <select id="s_city4" name="" data-am-selected placeholder="请选择市">
                           
                        </select>
                    </div>

                    <div class="ws-group">
                       <div class="ws-submit1 ws-submit">我要询价</div>
                    </div>

                </div>
                <div class="ws-lastform-item">
                    <div class="ws-group am-cf ws-group-lastform-item3" >
                         <select id="s_province5" name="" data-am-selected placeholder="品牌">
                            
                        </select>
                        <select id="s_city5" name="" data-am-selected placeholder="车型">
                           
                        </select>
                    </div>
                        <div class="ws-group">
                            <input type="text" placeholder="姓名" class="ws-group-inp ws-group-inp-name2">
                        </div>
                        <div class="ws-group">
                            <input type="text" placeholder="手机" class="ws-group-inp ws-group-inp-tel2">
                        </div>
                        <div class="ws-group am-cf ws-group-lastform-item4">
                            <select id="s_province6" name="" data-am-selected="{maxHeight: 250,searchBox: 1}" placeholder="请选择省">
                           
                        </select>
                        <select id="s_city6" name="" data-am-selected placeholder="请选择市">
                           
                        </select>
                        </div>

                        <div class="ws-group">
                            <div class="ws-submit2 ws-submit">预约试驾</div>
                        </div>
                    </div>
            </div>


        </div>
    </div>

</div>

<!--  alert弹窗 -->
<div class="ws_alert"></div>

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
<script src="http://www.d1ev.com/new2016/src/external/js/jquery.timeago/jquery.timeago.js"></script>
<script src="http://www.d1ev.com/new2016/src/public/js/carflash.js"></script>
<script src="http://www.d1ev.com/new2016/src/external/js/headroom.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/new2016/src/public/js/shijia.js"></script>
<script type="text/javascript">
    _init_area3();
	_init_area4();
	_init_area5();
	_init_area6();
</script>


<!--统计代码-->
<div style="display:none"><script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?c1d54a092f01be0215b4487856c2c6f6";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s);})();</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2469655'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s13.cnzz.com/stat.php%3Fid%3D2469655' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254528018'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s95.cnzz.com/stat.php%3Fid%3D1254528018' type='text/javascript'%3E%3C/script%3E"));</script></div>

</body>
</html>