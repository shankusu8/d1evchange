<div class="ws-fix-head">
    <!--顶部二级导航-->
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
            <div class="am-fr am-cf">
                <div class="am-fl ws-nav-search">
                    <i class="ws-nav-searchIcon"></i>
                </div>
                <!-- 登录前状态 -->
                <?php if(!$userid){ ?>
                <div class="am-fl am-cf ws-nav-login">
                    <a class="am-fl ws-nav-loginA" href="http://www.d1ev.com/member/accountnew/login">登录</a>
                    <i class="am-fl ws-nav-loginI">/</i>
                    <a class="am-fl ws-nav-loginA" href="{$config_siteurl}register"> 注册</a>
                </div>
                <?php }else{ ?>
                <!-- 登录后状态 -->
				<?php $comm = redis('hget', 'newcount', 'userid_' . $userid);$comm_tx = $comm ?  $comm : '';?>
                <div class="am-fl am-cf ws-nav-login">
                    <div class="ws-nav-headmap">
                        <img onerror="this.src='<?php echo C('WEB_SITE_URLS.IMG') . '/d/file/default/no-avatar.gif'; ?>'" src="<?php echo src_www_to_img('/d/file/avatar/'. $userid . '/30x30.jpg', C('WEB_SITE_URLS.WWW'), C('WEB_SITE_URLS.IMG')).C('AVATARUPDATETIMESTAMP'); ?>" alt="" id="menu-avatar">
						<if condition="$comm_tx">
						<a class="ws-ping1-num" href="http://www.d1ev.com/member/comments/index.html">
						{$comm_tx}
						</a></if>
                    </div>
                    <div class="ws-nav-users">
                        <a href="http://www.d1ev.com/member/article/index.html" class="ws-nav-usersA">我的投稿</a>
                        <!--<a href="http://www.d1ev.com/member/home/index.html" class="ws-nav-usersA">我的消息</a>-->
                        <!--<a href="http://www.d1ev.com/member/subscribe/index.html" class="ws-nav-usersA">我的订阅</a> -->
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
</div>