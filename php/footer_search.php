<div class="ws-searchboxBg am-animation-fade">
    <div class="ws-searchbox">
        <i class="ws-searchbox-close am-close">
            &times;
        </i>
        <div class="ws-searchbox am-animation-scale-up">
            <div class="ws-nav-searchbox-inp">
                <form class="search-all-form" action="http://www.d1ev.com/search.html" method="get">
                    <input class="ws-input search-all-form-q" name="q" type="text" placeholder="请输入关键字">
                    <i class="ws-nav-searchbox-inpIcon search-all-form-submit"></i>
                </form>
            </div>
            <div class="ws-searchbox-history">
                <div class="ws-searchbox-historyH am-cf">
                    <div class="am-fl ws-searchbox-historyH1">我的历史记录</div>
                    <div class="am-fr ws-searchbox-historyH2"><i></i>清空历史记录</div>
                </div>
                <?php $shistory = HistoricalSearch(); //搜索历史记录?>
                <div class="ws-searchbox-historyC am-cf">
                    <volist name="shistory" offset="0" length='12' id="vo">
                        <a class="ws-searchbox-item am-fl" href = "http://www.d1ev.com/search.html?q={$vo}" target="_blank">{$vo}</a>
                    </volist>
                </div>
            </div>
            <div class="ws-searchbox-hot">
                <div class="ws-searchbox-hoth">
                    热搜词
                </div>
                <?php $hot_search = explode(",", $Config['hot_search_keywords']); //热搜词?>
                <div class="ws-searchbox-hotc am-cf">
                    <volist name="hot_search" id="vo">
                        <a class="ws-searchbox-list am-fl" href = "http://www.d1ev.com/search.html?q={$vo}" target="_blank">{$vo}</a>
                    </volist>
                </div>
            </div>
        </div>
    </div>
</div>
