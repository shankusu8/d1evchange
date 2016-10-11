<volist name="Recommendnews" id="vo">
    <?php  $vo['data']= unserialize($vo['data']); ?>
    <?php  $vo['tuji']= unserialize($vo['tuji']); ?>
    <?php if($vo['catid']=='153'||$vo['catid']=='154'||$vo['catid']=='155'||$vo['catid']=='156'||$vo['catid']=='157'||$vo['catid']=='158' || $vo['posid'] == 9){?>
    <a href="<?php echo $vo['data']['url'] ?>" target="_blank">
    <div class="pictures--wraped">
    <div class="pictures_p"><?php echo $vo['data']['title'] ?></div>
    <div class="picutres_img am-cf">
    <a href="<?php echo $vo['data']['url'] ?>" target="_blank"><div class="pictures--img first am-fl">
    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['tuji'][1]['url'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['data']['title'];?>">
    </div></a>
    <a href="<?php echo $vo['data']['url'] ?>#2" target="_blank"><div class="pictures--img am-fl">
    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['tuji'][2]['url'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['data']['title'];?>">
    </div></a>
    <a href="<?php echo $vo['data']['url'] ?>#3" target="_blank"><div class="pictures--img am-fl">
    <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['tuji'][3]['url'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['data']['title'];?>">
    </div></a>
    </div>
    <div class="pictures--time"><time class="timeago" datetime="<?php echo date('c',$vo['data']['updatetime']); ?>" title="<?php echo date('Y-m-d H:i:s',$vo['data']['updatetime']); ?>"><?php echo date('Y-m-d H:i:s',$vo['data']['updatetime']); ?></time></div>
    </div>
    </a>
    <hr>
    <?php }else{ ?>
    <div class="article--wraped am-cf">
    <div><div class="article--img am-fl">
		<a href="{$vo.data.url}" target="_blank">
		<img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img($vo['data']['thumb'], C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG'));?>" alt="<?php echo $vo['data']['title'];?>"></a>
    <?php if($vo['catid']=='174'){ ?>
    <div class="ws-tip"></div>
    <?php } ?>
    <?php if($vo['data']['shuxing'] != ''){?>
    <div class="tip"><a href="http://www.d1ev.com/tag-<?php echo $vo['data']['shuxing']; ?>" target="_blank" class="new_l"><?php echo getShuxing($vo['data']['shuxing']);?></a></div>
    <?php } ?>
    </div></div>
    <div class="article--content am-fl">
    <a href="{$vo.data.url}" target="_blank"><span class="article_p">{$vo.data.title|strip_tags|str_cut=###,30}</span></a>
    <p class="article--author">
    <?php if($vo['user_id'] > 0){ ?>
    <a href="http://www.d1ev.com/home/{$vo['user_id']}" target="_blank"><span class="article--authorpic"><img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-picture.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $vo['user_id'] . '/90x90.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="{$vo['author']}"></span>
    <span>{$vo.data.author}</span></a>
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
    <span><i class="icon icon-icon_good"></i> {$vo.zan}</span>
    <span><i class="icon icon-icon_comment"></i> {:commcount2($vo['catid'],$vo['id'])}</span>
    </p>
    </div>
    </div>
    </div>
    <hr>
    <?php } ?>
</volist>