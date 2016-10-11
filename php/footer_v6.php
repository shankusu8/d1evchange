<!--右侧固定 意见反馈-->
<div class="ws-fixed">
	<div class="ws-fixed-read" >
        纯净阅读
    </div>
    <div class="ws-fixed-btn" data-am-modal="{target: '#doc-modal-12', closeViaDimmer: 0, width: 800, height: 404}">
        意见反馈
    </div>
    <div class="ws-fixed-scroll" data-am-smooth-scroll id="amz-go-top">
        <i class=""></i>
    </div>
</div>
<div class="ws-modal">
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-12">
        <div class="am-modal-dialog">
            <form action="http://www.d1ev.com/member/daniusay/add_liuyan" class="am-form"  id="doc-vld-msg" method="post">
                <div class="am-alert" data-am-alert>
                    <p>反馈和建议</p>
                </div>
                <div class="dialog--content">
                    <textarea name="introduce" id="tijiaocontent" cols="30" rows="10" style="resize:none;width:700px;height:150px;" placeholder="第一电动网欢迎您吐槽"></textarea>
                    <div class="am-form-group">
                        <input type="text" name="lianxi" id="yourcall" class="js-pattern-mobile" placeholder="请留下您的联系方式，方便我们与您联系，针对问题详细沟通" />
                    </div>
                    <div class="tijiao am-cf">
                        <span class="am-fl tip"></span>
                        <a href="http://www.d1ev.com/member/daniusay/add_liuyan"><button id="tijiao" class="am-fr tijiao--button">提 交</button></a>
                        <a href="javascript:;"><span class="am-fr tijiao--cancel" data-am-modal-close>取消</span></a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!--尾部-->
<div class="ws-foot-bg">
    <div class="ws-foot am-container">
        <div class="am-cf ws-foot-list">
            <a href="http://www.d1ev.com/contents/index/aboutus" class="am-fl ws-foot-item">关于我们</a>
            <a href="http://www.d1ev.com/contents/index/callus" class="am-fl ws-foot-item">联系我们</a>
            <a href="http://www.d1ev.com/contents/index/jionus" class="am-fl ws-foot-item">加入我们</a>
            <a href="http://www.d1ev.com/contents/index/agreement" class="am-fl ws-foot-item">用户协议</a>
            <a href="http://www.d1ev.com/contents/index/friendlink" class="am-fl ws-foot-item">友情链接</a>
            <a href="http://www.d1ev.com/contents/index/servers" class="am-fl ws-foot-itemLast">广告与服务</a>
        </div>
        <div class="ws-foot-copyright">
            Copyright © 2010-2016 <a href="http://www.d1ev.com/" class="ws-foot-copyrightA">第一电动网</a>   京ICP备14024261号     　京ICP证160753号　京公网安备110105011343
        </div>
    </div>
</div>
<script>
setTimeout(function(){
	$(function(){
		$(document).scroll(function(){
			var top = $(document).scrollTop();
			if(top < 300){
				$('.ws-fixed-scroll').hide();
			}else{
				$('.ws-fixed-scroll').show();
			}
		});
	});
},1000);

</script>
