<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=1130,maximum-scale=1.0"/>
<title>电动汽车新闻_电动汽车资讯 - 第一电动网</title>
<meta name="description" content="第一电动网为您提供电动汽车新闻,电动汽车资讯等最新资讯。"/>
<meta name="keywords" content="电动汽车新闻,电动汽车资讯,第一电动网" />
<script type="text/javascript" src="http://assets-cdn.d1ev.com/assets/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="{$config_siteurl}statics/js/jquery.superslide.2.1.1.js" type="text/javascript"></script>
<link href="{$config_siteurl}statics/2015d1ev/css/top.css" rel="stylesheet" type="text/css">
<link href="{$config_siteurl}statics/2015d1ev/css/content.css" rel="stylesheet" type="text/css">
<!-- AFP两段式代码-公用代码 -->
<script type="text/javascript" src="http://afpmm.alicdn.com/g/mm/afp-cdn/JS/k.js"></script>

<template file="Contents/head_ext.php"/>
</head>
<body>
<!--header-->
<header>
<template file="Contents/top.php"/> 
    <div class="top3">
    	<nav class="wrap">
            <ul class="nav_l">
            <?php $pid = 92;?>
<template file="Contents/nav.php"/> 
            </ul>
            <!--
            <ul class="nav_r">
                <li><a href="http://d1ev.com/companys-category/"><i class="cg_ico enter"></i>企业平台</a></li>
                <li><a href="{$config_siteurl}open/"><i class="open_ico enter"></i>公开课</a></li>
            </ul>
            -->
            <template file="Contents/nav_right.php"/> 
        </nav> 
    </div>
</header>
<div class="blank30"></div>

<!--内容区-->
<article class="wrap">
	<section class="con_l">
        <!--焦点图-->
    	<div class="pic1">
            <ul class="pic_con">
                <position action="position" posid="1" num="5" order="listorder DESC" cache="3600">
              <volist name="data" id="vo">
                <li> <a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}"> <img src="<?php echo src_www_to_img($vo['data']['thumb2'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" />
                  <p></p>
                  <h3>{$vo.data.title}</h3>
                  </a> </li>
              </volist>
            </position>
            </ul>
            <a class="prev" href="javascript:void(0)"></a>
            <a class="next" href="javascript:void(0)"></a>
            <div class="num">
                <ul></ul>
            </div>
		</div>
        
        <div class="blank30"></div>

        <div class="menu">
        	<ul>
            	<li class="m_cur">最新</li>
            	<li>行业</li>
            	<li>企业</li>
                <li>专栏</li>
                <!--
                <li><a href="#">滚动</a></li>
                -->
            </ul>
        </div>
        <div class="blank0"></div>
        <div class="new_list">
        	<div class="list_con" style="display:block;">
                <ul>
      <position action="position" posid="17" num="15" order="listorder DESC" cache="3600">
        <volist name="data" id="vo">
		<?php $time=time();?>
		<if condition="$vo['data']['updatetime'] lt $time">
                    <li>
                        <div class="list_lt"><a href="{$vo.data.url}" title="{$vo.data.title}" target="_blank"><img src="<?php echo src_www_to_img($vo['data']['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.data.title}"></a></div>
                        <div class="list_rt">
                            <h3><a href="{$vo.data.url}" target="_blank" class="new_tit">{$vo.data.title}</a>
                            <?php 
							/* if(array_key_exists('shuxing',$vo['data']) && !empty($vo['data']['shuxing'])){ */
							if($vo['data']['shuxing'] && $vo['data']['shuxing']!='shiping'){ ?>
                          <a href="" target="_blank" class="new_l">{$vo.data.shuxing|getShuxing}</a> 
                          <?php }?>
						  
							<?php if($vo['catid']=='174'){ ?> 
						  <a href="http://www.d1ev.com/video" target="_blank" class="new_l">视频</a> <?php }?> 
						  
						  <?php  if($vo['catid']=='190'||$vo['catid']=='191'||$vo['catid']=='186'||$vo['catid']=='188'||$vo['catid']=='189'||$vo['catid']=='198'||$vo['catid']=='187'){ ?> 
						  <a href="http://www.d1ev.com/special" target="_blank" class="new_l">专题</a> <?php }?>
							<?php if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158'){  ?>
							 <a href="http://photo.d1ev.com/" target="_blank" class="new_l">图片</a>
						<?php  }?>
                            </h3>
                            <p class="news_txt">{$vo.data.description|strip_tags|str_cut=###,60}</p>
                            <div class="rt_bt">
                                <div class="f_l">
                                <?php if($vo['data']['zuozhe']){ ?>
                            <a href="{$config_siteurl}home/{$vo.data.zuozhe}" target="_blank" class="author"><i></i>{$vo.data.zuozhe|getUserInfo=###,'nickname'}</a>
                            <?php }else{ ?>
                            <?php if($vo['data']['author']){ ?>
                            <?php
                            $_tags = explode(' ', $vo['data']['author']);
                            $_key=array();
                            foreach($_tags as $v){
                             $_key[]='<a href="'.$Config['siteurl'].'author-'.urlencode($v).'" target="_blank" class="author"><i></i>'.$v.'</a>';
                           }
                           echo join(" ",$_key);
                           ?>
                           <?php } ?>
                           <?php } ?>
                                <span class="time"><i></i>{$vo.data.updatetime|date="Y/m/d H:i",###}</span></div>
                                <div class="f_r">
								<?php if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158'){  ?>
							  
						<?php  }else{ ?>
							<a class="pl_num" href="{$vo.data.url}#comment" target="_blank" title="我要评论"><i></i>{:commcount2($vo['catid'],$vo['id'])}</a> <span class="f_r_l">|</span>
						<?php } ?>
                                    <div class="shareTo"> <span class="shareshowbtn"></span>
                              <div class="share"> 
							  <a class="bds_tsina" data-cmd="tsina" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到新浪微博"></a> 
											  <a class="bds_qzone" data-cmd="qzone" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'qzone')" title="分享到QQ空间"></a> 
											  <a class="bds_tqq" data-cmd="tqq" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'tqq')" title="分享到腾讯微博"></a> 
											  <a class="bds_qq" data-cmd="qq" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'qq')" title="分享到QQ好友"></a>
							</div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </li></if>
                    </volist>
      </position>
                   
                    
                </ul>
                
                <div class="ck_more"><a href="{$config_siteurl}rolling-news" target="_blank">更多内容..</a></div>
             </div>
             <div class="list_con">
                <ul>
      <content action="lists" catid="199" order="updatetime DESC" num="10" thumb="1" cache="600">
        <volist name="data" id="vo">
                    <li>
                        <div class="list_lt"><a href="{$vo.url}" title="{$vo.title}" target="_blank"><img src="<?php echo src_www_to_img($vo['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.title}"></a></div>
                        <div class="list_rt">
                            <h3><a href="{$vo.url}" target="_blank" class="new_tit">{$vo.title}</a>
                            <?php if($vo['shuxing']){ ?>
                            <a href="{$config_siteurl}tag-{$vo.shuxing}" target="_blank" class="new_l">{$vo.shuxing|getShuxing}</a>
                            <?php } ?>
							<?php if($vo['catid']=='174'){ ?> 
						  <a href="http://www.d1ev.com/video" target="_blank" class="new_l">视频</a> <?php }?>
						  <?php  if($vo['catid']=='190'||$vo['catid']=='191'||$vo['catid']=='186'||$vo['catid']=='188'||$vo['catid']=='189'||$vo['catid']=='198'||$vo['catid']=='187'){ ?> 
						  <a href="http://www.d1ev.com/special" target="_blank" class="new_l">专题</a> <?php }?>
						  <?php if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158'){  ?>
							 <a href="http://photo.d1ev.com/" target="_blank" class="new_l">图片</a>
						<?php  }?>
                            </h3>
                            <p class="news_txt">{$vo.description|strip_tags|str_cut=###,60}</p>
                            <div class="rt_bt">
                                <div class="f_l">
                                <?php if($vo['zuozhe']){ ?>
                                <a href="{$config_siteurl}home/{$vo.zuozhe}" target="_blank" class="author"><i></i>{$vo.zuozhe|getUserInfo=###,'nickname'}</a>
                                <?php }else{ ?>
									<?php if($vo['author'] && $vo['author']!='综合报道' && false === strpos($vo['author'], ' ')){ ?>
                                    <a href="{$config_siteurl}author-{$vo.author}" target="_blank" class="author"><i></i>{$vo.author}</a>
                                    <?php } ?>
                                <?php } ?>
                                <span class="time"><i></i>{$vo.updatetime|date="Y/m/d H:i",###}</span></div>
                                <div class="f_r">
								<?php if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158'){  ?>
							  
						<?php  }else{ ?>
							<a class="pl_num" href="{$vo.data.url}#comment" target="_blank" title="我要评论"><i></i>{:commcount2($vo['catid'],$vo['id'])}</a> <span class="f_r_l">|</span>
						<?php } ?>
                                    <div class="shareTo">
                                        <span class="shareshowbtn"></span>
                                        <div class="share">
                                            <a class="bds_tsina" data-cmd="tsina" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到新浪微博"></a> 
											  <a class="bds_qzone" data-cmd="qzone" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'qzone')" title="分享到QQ空间"></a> 
											  <a class="bds_tqq" data-cmd="tqq" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'tqq')" title="分享到腾讯微博"></a> 
											  <a class="bds_qq" data-cmd="qq" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'qq')" title="分享到QQ好友"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </volist>
      </content>
                    
                </ul>
                
                <div class="ck_more"><a href="{$config_siteurl}industry" target="_blank">更多内容..</a></div>
             </div>
             <div class="list_con">
                <ul> <!--企业-->
                    <content action="lists" catid="93" order="updatetime DESC" num="10" thumb="1" cache="600">
        <volist name="data" id="vo">
                    <li>
                        <div class="list_lt"><a href="{$vo.url}" title="{$vo.title}" target="_blank"><img src="<?php echo src_www_to_img($vo['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.title}"></a></div>
                        <div class="list_rt">
                            <h3><a href="{$vo.url}" target="_blank" class="new_tit">{$vo.title}</a>
                            <?php if($vo['shuxing']){ ?>
                            <a href="" target="_blank" class="new_l">{$vo.shuxing|getShuxing}</a>
                            <?php } ?>
							<?php if($vo['catid']=='174'){ ?> 
						  <a href="http://www.d1ev.com/video" target="_blank" class="new_l">视频</a> <?php }?> 
						  <?php  if($vo['catid']=='190'||$vo['catid']=='191'||$vo['catid']=='186'||$vo['catid']=='188'||$vo['catid']=='189'||$vo['catid']=='198'||$vo['catid']=='187'){ ?> 
						  <a href="http://www.d1ev.com/special" target="_blank" class="new_l">专题</a> <?php }?>
						  <?php if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158'){  ?>
							 <a href="http://photo.d1ev.com/" target="_blank" class="new_l">图片</a>
						<?php  }?>
                            </h3>
                            <p class="news_txt">{$vo.description|strip_tags|str_cut=###,60}</p>
                            <div class="rt_bt">
                                <div class="f_l">
                                <?php if($vo['zuozhe']){ ?>
                                <a href="{$config_siteurl}home/{$vo.zuozhe}" target="_blank" class="author"><i></i>{$vo.zuozhe|getUserInfo=###,'nickname'}</a>
                                <?php }else{ ?>
									<?php if($vo['author'] && $vo['author']!='综合报道' && false === strpos($vo['author'], ' ')){ ?>
                                    <a href="{$config_siteurl}author-{$vo.author}" target="_blank" class="author"><i></i>{$vo.author}</a>
                                    <?php } ?>
                                <?php } ?>
                                <span class="time"><i></i>{$vo.updatetime|date="Y/m/d H:i",###}</span></div>
                                <div class="f_r">
                                    <?php if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158'){  ?>
							  
						<?php  }else{ ?>
							<a class="pl_num" href="{$vo.data.url}#comment" target="_blank" title="我要评论"><i></i>{:commcount2($vo['catid'],$vo['id'])}</a> <span class="f_r_l">|</span>
						<?php } ?>
                                    <div class="shareTo">
                                        <span class="shareshowbtn"></span>
                                        <div class="share">
                                            <a class="bds_tsina" data-cmd="tsina" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到新浪微博"></a> 
											  <a class="bds_qzone" data-cmd="qzone" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'qzone')" title="分享到QQ空间"></a> 
											  <a class="bds_tqq" data-cmd="tqq" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'tqq')" title="分享到腾讯微博"></a> 
											  <a class="bds_qq" data-cmd="qq" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'qq')" title="分享到QQ好友"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </volist>
      </content>
                    
                </ul>
                
                <div class="ck_more"><a href="{$config_siteurl}company" target="_blank">更多内容..</a></div>
             </div>
             <div class="list_con">
                <ul>
                    <content action="lists" catid="99" order="updatetime DESC" num="10" thumb="1" cache=""><!--zhuan lan-->
        <volist name="data" id="vo">
                    <li>
                        <div class="list_lt"><a href="{$vo.url}" title="{$vo.title}" target="_blank"><img src="<?php echo src_www_to_img($vo['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.title}"></a></div>
                        <div class="list_rt">
                            <h3><a href="{$vo.url}" target="_blank" class="new_tit">{$vo.title}</a>
                            <?php if($vo['shuxing']){ ?>
                            <a href="{$config_siteurl}tag-{$vo.shuxing}" target="_blank" class="new_l">{$vo.shuxing|getShuxing}</a>
                            <?php } ?>
							<?php if($vo['catid']=='174'){ ?> 
						  <a href="http://www.d1ev.com/video" target="_blank" class="new_l">视频</a> <?php }?> 
						  <?php  if($vo['catid']=='190'||$vo['catid']=='191'||$vo['catid']=='186'||$vo['catid']=='188'||$vo['catid']=='189'||$vo['catid']=='198'||$vo['catid']=='187'){ ?> 
						  <a href="http://www.d1ev.com/special" target="_blank" class="new_l">专题</a> <?php }?>
						  <?php if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158'){  ?>
							 <a href="http://photo.d1ev.com/" target="_blank" class="new_l">图片</a>
						<?php  }?>
                            </h3>
                            <p class="news_txt">{$vo.description|strip_tags|str_cut=###,60}</p>
                            <div class="rt_bt">
                                <div class="f_l">
                                <?php if($vo['zuozhe']){ ?>
                                <a href="{$config_siteurl}home/{$vo.zuozhe}" target="_blank" class="author"><i></i>{$vo.zuozhe|getUserInfo=###,'nickname'}</a>
                                <?php }else{ ?>
									<?php if($vo['author'] && $vo['author']!='综合报道' && false === strpos($vo['author'], ' ')){ ?>
                                    <a href="{$config_siteurl}author-{$vo.author}" target="_blank" class="author"><i></i>{$vo.author}</a>
                                    <?php } ?>
                                <?php } ?>
                                <span class="time"><i></i>{$vo.updatetime|date="Y/m/d H:i",###}</span></div>
                                <div class="f_r">
                                    <?php if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158'){  ?>
							  
						<?php  }else{ ?>
							<a class="pl_num" href="{$vo.data.url}#comment" target="_blank" title="我要评论"><i></i>{:commcount2($vo['catid'],$vo['id'])}</a> <span class="f_r_l">|</span>
						<?php } ?>
                                    <div class="shareTo">
                                        <span class="shareshowbtn"></span>
                                        <div class="share">
                                            <a class="bds_tsina" data-cmd="tsina" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'tsina')" title="分享到新浪微博"></a> 
											  <a class="bds_qzone" data-cmd="qzone" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'qzone')" title="分享到QQ空间"></a> 
											  <a class="bds_tqq" data-cmd="tqq" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'tqq')" title="分享到腾讯微博"></a> 
											  <a class="bds_qq" data-cmd="qq" href="javascript:;" onClick="shareInfo({$vo.catid},{$vo.id},'qq')" title="分享到QQ好友"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </volist>
      </content>
                    
                </ul>
                
                <div class="ck_more"><a href="{$config_siteurl}column" target="_blank">更多内容..</a></div>
             </div>
      </div>
        
        
	</section>
	<aside class="con_r">
    	<!--编辑推荐-->
		<h2><span>编辑推荐</span></h2>
      <div class="news_m">
      <position action="position" posid="5" num="7" order="listorder DESC" cache="600">
          <volist name="data" id="vo">
          <?php if($i == 1){ ?>
        	<h4><a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}">{$vo.data.title}</a></h4>
			<div class="bjtj">
            	<a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}"><img src="{$vo.data.thumb}" alt="{$vo.data.title}"></a>
                <span>{$vo.data.description|strip_tags|str_cut=###,60}<a href="{$vo.data.url}" target="_blank" class="yellow">[详情]</a></span>
            </div>
            <?php } ?>
			</volist>
            
            <ul>
				<volist name="data" id="vo">
                <?php if($i > 1){ ?>
					<li><a href="{$vo.data.url}" title="{$vo.data.title}" target="_blank">{$vo.data.title}</a></li>
                    <?php } ?>
				</volist>
			</ul>
            </position>
      </div>
    	<div class="blank20"></div>
        <div class="tjlm">
        	<h2><span>推荐栏目</span></h2>
        	<ul>
            	<li><a href="http://www.d1ev.com/tag-zhengce" target="_blank" title="政策" class="tag-zhengce">政策</a></li>
            	<li><a href="http://www.d1ev.com/tag-shuju" target="_blank" title="数据" class="tag-shuju">数据</a></li>
            	<li><a href="http://www.d1ev.com/tag-jishu" target="_blank" title="技术" class="tag-jishu">技术</a></li>
            	<li><a href="http://www.d1ev.com/tag-biaozhun" target="_blank" title="标准" class="tag-biaozhun">标准</a></li>
            	<li><a href="http://www.d1ev.com/tag-renwu" target="_blank" title="人物" class="tag-renwu">人物</a></li>
            	<li><a href="http://www.d1ev.com/tag-tushuo" target="_blank" title="图说" class="tag-tushuo">图说</a></li>
            	<li><a href="http://www.d1ev.com/tag-lieguozhi" target="_blank" title="电车列国志" class="tag-lieguozhi">电车列国志</a></li>
            	<li><a href="http://www.d1ev.com/tag-jishi" target="_blank" title="EV纪事" class="tag-jishi">EV纪事</a></li>
            
            </ul>
        </div>
		<div class="blank10"></div>
                <div class="gg">
<!-- 57718798：ID4 新闻－右侧－顶部 类型：固定 尺寸：345x260-->
<script type="text/javascript">
_acM({aid:"mm_116234497_14636802_57718798",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
                </div>
    	<div class="blank10"></div>
        <!--热点专题-->
        <h2><span>热点专题</span><a href="{$config_siteurl}special/" target="_blank" class="more">MORE &gt;&gt;</a></h2>
        <div class="rdzt">
        	<ul>
			 
            <position action="position" posid="14" num="4" order="listorder DESC" cache="600">
				<?php 
				
				foreach($zhunti as $i=>$m){  
					  $result[$i]['title'] = $m['title'];
					  $result[$i]['mp_title'] = $m['mp_title'];
					  $result[$i]['url'] = $m['url'];
					  $result[$i]['thumb'] = $m['thumb'];
				}//var_dump($result);
				//echo $zhunti[0]['m_title'];
				?>
                   
				   <volist name="result" id="vo">
					<li> <a href="<?php echo $vo['url'];?>" target="_blank" title="{$vo.title}"><img src="<?php echo src_www_to_img($vo['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')); ?>" alt="{$vo.title}"></a>
                      <h4><a href="{$vo.url}" target="_blank" title="{$vo.title}"><?php echo $vo['mp_title'];?></a></h4>
                    </li>
					</volist> 
				</position>
            </ul>
        </div>
    	<div class="blank10"></div>
		<!--人物访谈-->
        <h2><span>人物访谈</span><a href="{$config_siteurl}tag-renwu" target="_blank" class="more">MORE &gt;&gt;</a></h2>
    	<div class="rwft">
	 <position action="position" posid="4" num="1" order="listorder DESC" cache="3600">
        <volist name="data" id="vo">
		
        	<h4><a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}">{$vo.data.title}</a></h4>
            <div class="rwft_con">
            	<a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}"><img src="{$vo.data.thumb}" alt="{$vo.data.title}"></a>
                <span>{$vo.data.description|strip_tags|str_cut=###,60}...<a href="{$vo.data.url}" target="_blank" class="yellow">[详情]</a></span>
            </div>
		</volist>
     </position>	
			
        </div>

    	<div class="blank10"></div>
        <div class="blank10"></div>
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
        <div class="blank20"></div>
        <div class="gg">
<!-- 57720853：ID5 新闻－右侧－底部 类型：固定 尺寸：345x150-->
<script type="text/javascript">
_acM({aid:"mm_116234497_14636802_57720853",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
        </div>
    	
	</aside>
    
    <!--底部广告-->
    <div class="blank20"></div>
    <div class="bt_gg">
<!-- 57710999：ID6 新闻－底部－通栏 类型：固定 尺寸：1110x90-->
<script type="text/javascript">
_acM({aid:"mm_116234497_14636802_57710999",format:1,mode:1,gid:1,serverbaseurl:"afpeng.alimama.com/"});
</script>
    </div>
</article>


<script type="text/javascript">
function shareInfo(catid,id,type){
  var share_url = 'http://www.d1ev.com/public/share?catid='+catid+'&id='+id+'&type='+type;
  window.open(share_url);
}
$(document).ready(function() {
	/*鼠标移过，左右按钮显示*/
	$(".pic1").hover(function(){
		$(this).find(".prev,.next").fadeTo("show",0.3);
	},function(){
		$(this).find(".prev,.next").hide();
	});
	/*鼠标移过某个按钮 高亮显示*/
	$(".prev,.next").hover(function(){
		$(this).fadeTo("show",0.7);
	},function(){
		$(this).fadeTo("show",0.3);
	});
	/*焦点图*/
	$(".pic1").slide({ titCell:".num ul" , effect:"fold", mainCell:".pic_con" , autoPlay:true, delayTime:500 , autoPage:true,interTime:5000});
	
	/*分类切换*/
	$(".menu li").click(function(){
		$(this).addClass("m_cur").siblings().removeClass("m_cur");
		$('.new_list .list_con:eq('+$(this).index()+')').show().siblings().hide();
		$(".new_tit").each(function(){
		var t_wd = $(this).height();
		if (t_wd < 30 ){
			$(this).css("display","block");	
		}else {
			$(this).css("display","inline");	
			$(this).siblings(".new_l").css("margin-left","10px")	
		};
	});
	});
	
	//排行切换
	$('.rk_tit li').click(function(){
		$(this).addClass('rkt_cur').siblings().removeClass('rkt_cur');
		$(this).parent().parent().siblings(".rk_c").find('.rk_con:eq('+$(this).index()+')').show().siblings().hide();		
	});
	//选车车型类别切换
	$(".car_type li").mouseover(function(){
		$(this).addClass('car_cur').siblings().removeClass('car_cur');
		$(this).parent().parent().siblings(".car_list").find('ul:eq('+$(this).index()+')').show().siblings().hide();	
	});
	
});
</script>

<div class="blank30"></div>
<!--footer-->
<template file="Contents/bottom.php"/>

<template file="Contents/footer_ext.php"/>
</body>
</html>
