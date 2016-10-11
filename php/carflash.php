<!doctype html>
<html class="no-js" lang="zh-CH">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>第一电动网|车讯</title>

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
<div class="ws-fix-head">
    <!--顶部二级导航-->
    <div class="ws-head-bg">
        <div class="ws-head am-cf am-container">
            <h1 class="am-fl ws-head-icon">
                第一电动网
            </h1>
            <div class="am-fl ws-head-nav am-cf">
                <div class="am-fl ws-head-col">
                    <div class="ws-head-colName">资讯<i class="ws-head-colIcon"></i></div>
                    <div class="ws-head-colList am-cf">
                        <a href="javascript:;" class="ws-head-colListItem am-fl">
                            快电动讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem am-fl">
                            快栏目讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem am-fl">
                            快电动讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem am-fl">
                            快栏目讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem am-fl">
                            快电动讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem am-fl">
                            快栏目讯
                        </a>
                    </div>
                </div>
                <div class="am-fl ws-head-col">
                    <div class="ws-head-colName">栏目<i class="ws-head-colIcon"></i></div>
                    <div class="ws-head-colList ws-head-colList2">
                        <a href="javascript:;" class="ws-head-colListItem2">
                            快电动讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem2">
                            快栏目讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem2">
                            快电动讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem2">
                            快栏目讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem2">
                            快电动讯
                        </a>
                        <a href="javascript:;" class="ws-head-colListItem2">
                            快栏目讯
                        </a>
                    </div>
                </div>
                <div class="am-fl ws-head-col">
                    <div class="ws-head-colName">大牛说</div>
                </div>
                <div class="am-fl ws-head-col">
                    <div class="ws-head-colName">数据</div>
                </div>
                <div class="am-fl ws-head-col">
                    <div class="ws-head-colName">报告</div>
                </div>
                <div class="am-fl ws-head-col">
                    <div class="ws-head-colName">活动</div>
                </div>
                <div class="am-fl ws-head-col">
                    <div class="ws-head-colName ws-head-colNameLast"><i class="ws-head-colGold"></i>金牌供应商</div>
                </div>
            </div>
            <div class="am-fr am-cf">
                <div class="am-fl ws-nav-search">
                    <i class="ws-nav-searchIcon"></i>
                </div>
                <!-- 登录前状态 -->
                <div class="am-fl am-cf ws-nav-login">
                    <a class="am-fl ws-nav-loginA" href="">登录</a>
                    <i class="am-fl ws-nav-loginI">/</i>
                    <a class="am-fl ws-nav-loginA" href=""> 注册</a>
                </div>
                <!-- 登录后状态 -->
                <div class="am-fl am-cf ws-nav-login">
                    <div class="ws-nav-headmap">
                        <img src="src/public/images/manphoto.jpg" alt=""/>
                    </div>
                    <div class="ws-nav-users">
                        <a href="javascript:;" class="ws-nav-usersA">我的投稿</a>
                        <a href="javascript:;" class="ws-nav-usersA">我的订阅</a>
                        <a href="javascript:;" class="ws-nav-usersA">我的收藏</a>
                        <a href="javascript:;" class="ws-nav-usersA">我的评论</a>
                        <a href="javascript:;" class="ws-nav-usersA">我的私信</a>
                        <a href="javascript:;" class="ws-nav-usersA">退出</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

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
                    <div class="tip">{$vo.shuxing|getShuxing}</div>
                </div>

                <div class="article--content am-fl">
                    <a href="{$vo.url}" target="_blank"><span class="article_p">{$vo.title}</span></a>
                    <p class="article--author">
                        <?php if($vo['zuozhe']) echo 
                        "<a href='".$Config['siteurl']."home/".$vo['zuozhe']."' target='_blank'><span class='article--authorpic'><img src='".src_www_to_img('/d/file/avatar/'. $vo['zuozhe'] . '/30x30.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'))."' alt='person'></span></a>
                        <a href='".$Config['siteurl']."home/".$vo['zuozhe']."' target='_blank'><span>".$vo['author']."</span></a>"; ?>
                        <span class="article--time"><time class="timeago" datetime=<?php echo '"'.date(DATE_ISO8601,$vo['updatetime']).'"'; ?>></time></span>
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



<hr class="ws-hr">
<!--footer部分-->
<div class="ws-foot-bg">
    <div class="ws-foot am-container">
        <div class="am-cf ws-foot-list">
            <a href="javascript:;" class="am-fl ws-foot-item">关于我们</a>
            <a href="javascript:;" class="am-fl ws-foot-item">联系方式</a>
            <a href="javascript:;" class="am-fl ws-foot-item">诚聘精英</a>
            <a href="javascript:;" class="am-fl ws-foot-item">广告与服务</a>
            <a href="javascript:;" class="am-fl ws-foot-item">合作伙伴</a>
            <a href="javascript:;" class="am-fl ws-foot-item">网站地图</a>
            <a href="javascript:;" class="am-fl ws-foot-item">意见反馈</a>
            <a href="javascript:;" class="am-fl ws-foot-item">手机版</a>
            <a href="javascript:;" class="am-fl ws-foot-itemLast">进入旧版</a>
        </div>
        <div class="ws-foot-copyright">
            Copyright © 2010-2016 <a href="javascript:;" class="ws-foot-copyrightA">第一电动网</a>   京ICP备14024261号     　京ICP证160753号　京公网安备110105011343
        </div>

    </div>
</div>
<!--收索弹窗-->
<div class="ws-searchboxBg am-animation-fade">
    <div class="ws-searchbox">
        <i class="ws-searchbox-close am-close">
            &times;
        </i>
        <div class="ws-searchbox am-animation-scale-up">
            <div class="ws-nav-searchbox-inp">
                <input class="ws-input" type="text" placeholder="请输入关键字">
                <i class="ws-nav-searchbox-inpIcon"></i>
            </div>
            <div class="ws-searchbox-history">
                <div class="ws-searchbox-historyH am-cf">
                    <div class="am-fl ws-searchbox-historyH1">我的历史记录</div>
                    <div class="am-fr ws-searchbox-historyH2"><i></i>清空历史记录</div>
                </div>
                <div class="ws-searchbox-historyC am-cf">
                    <a class="ws-searchbox-item am-fl">大数据</a>
                    <a class="ws-searchbox-item am-fl">大数据</a>
                    <a class="ws-searchbox-item am-fl">大数据</a>
                    <a class="ws-searchbox-item am-fl">大数据</a>
                    <a class="ws-searchbox-item am-fl">大数据</a>
                    <a class="ws-searchbox-item am-fl">大数据</a>
                    <a class="ws-searchbox-item am-fl">大数据</a>
                    <a class="ws-searchbox-item am-fl">大数据</a>
                    <a class="ws-searchbox-item am-fl">大数据</a>
                    <a class="ws-searchbox-item am-fl">大数据</a>
                </div>
            </div>
            <div class="ws-searchbox-hot">
                <div class="ws-searchbox-hoth">
                    热搜词
                </div>
                <div class="ws-searchbox-hotc am-cf">
                    <a class="ws-searchbox-list am-fl">大数据</a>
                    <a class="ws-searchbox-list am-fl">大数据</a>
                    <a class="ws-searchbox-list am-fl">大数据</a>
                    <a class="ws-searchbox-list am-fl">大数据</a>
                    <a class="ws-searchbox-list am-fl">大数据</a>
                    <a class="ws-searchbox-list am-fl">大数据</a>
                </div>

            </div>
        </div>
    </div>
</div>

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