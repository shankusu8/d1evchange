
    <style>

        .am-container{
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0 auto;
        }
        .am-cf:after, .am-cf:before {
            content: " ";
            display: table;
        }
        .am-fl {
            float: left;
        }
        .am-fr {
            float: right;
        }
        .am-cf:after {
            display: block;
            content: "";
            clear: both;

        }
        .ws-fixed *{
            padding: 0;
            margin: 0;
        }
		.ws-modal *{
			padding: 0;
            margin: 0;
		}
		.
        /*尾部*/
        .ws-foot-bg {
            position: relative;
            background: #fff;
            
            font-weight: 400;
            line-height: 1.6;
            color: #333;
            font-size: 16px;


            padding-top: 40px;
            background: #fafafa;
        }
        .ws-foot {
            width: 1200px;
            min-width: 1200px;
            padding: 0;
        }
        .ws-foot .ws-foot-list {
            width: 600px;
            margin: 0 auto;
        }
        .ws-foot .ws-foot-item {
            padding: 0 20px;
            position: relative;
            font-size: 14px;
            color: #787878;
        }
        .ws-foot .ws-foot-itemLast {
            padding: 0 20px;
            position: relative;
            font-size: 14px;
            color: #787878;
        }
        .ws-foot .ws-foot-item:after {
            content: '';
            position: absolute;
            top: 4px;
            right: 0;
            border-left: 1px solid #ceced0;
            height: 14px;
        }
        .ws-foot .ws-foot-copyright {
            text-align: center;
            font-size: 14px;
            color: #787878;
            padding: 20px 0 40px;
        }
        .ws-foot .ws-foot-copyrightA {
            color: #787878;
            padding: 0 5px;
        }
		.ws-hr{
			
			    display: block;
				padding: 0;
				border: 0;
				height: 0;
				-webkit-box-sizing: content-box;
				box-sizing: content-box;
			    border-top: 1px solid #e5e5e5;
				margin: 0;
		}
		
		/*右侧固定意见反馈*/
		.ws-fixed {
		  position: fixed;
		  bottom: 100px;
		  right: 20px;
		  color: #999;
		  width: 50px;
		  text-align: center;
		}
		.ws-fixed .ws-fixed-read {
		  display: none;
		  height: 50px;
		  margin-bottom: 10px;
		  border: 1px solid #ccc;
		  border-radius: 50px;
		  font-size: 12px;
		  padding: 6px 8px;
		  cursor: pointer;
		  background: #fff;
		}
		.ws-fixed .ws-fixed-btn {
		  height: 50px;
		  margin-bottom: 10px;
		  border: 1px solid #ccc;
		  border-radius: 50px;
		  font-size: 12px;
		  padding: 6px 8px;
		  cursor: pointer;
		  background: #fff;
		  box-sizing:border-box;
		}
		.ws-fixed .ws-fixed-scroll {
		  height: 50px;
		  line-height: 50px;
		  border: 1px solid #ccc;
		  border-radius: 50px;
		  cursor: pointer;
		  background: #fff;
		      width: 50px;
		  position: absolute;
			top: 60px;
			left: 0;
		}
		.ws-fixed .ws-fixed-scroll i {
		  width: 22px;
		  height: 22px;
		  background: url("http://www.d1ev.com/new2016/src/public/images/top.png") no-repeat;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  margin-top: -11px;
		  margin-left: -11px;
		}
		
		
		
		.ws-modal textarea,.ws-modal input {
			border:1px solid #ccc;
		}
		.ws-modal .am-modal{
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 1110;
			display: none;
			opacity: 0;
			outline: 0;
			text-align: center;
			-webkit-transform: scale(1.185);
			-ms-transform: scale(1.185);
			transform: scale(1.185);
			-webkit-transition-property: opacity,-webkit-transform;
			transition-property: opacity,-webkit-transform;
			transition-property: transform,opacity;
			transition-property: transform,opacity,-webkit-transform;
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden;
			-webkit-perspective: 1000px;
			perspective: 1000px;
		}
		.ws-modal *{
			box-sizing:border-box;
		}
		.ws-modal .am-modal:before {
			content: "\200B";
			display: inline-block;
			height: 100%;
			vertical-align: middle;
		}
		.ws-modal .am-modal.am-modal-active {
			opacity: 1;
			-webkit-transition-duration: .3s;
			transition-duration: .3s;
			-webkit-transform: scale(1);
			-ms-transform: scale(1);
			transform: scale(1);
			overflow-x: hidden;
			overflow-y: auto;
		}
		.am-dimmer {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			display: none;
			width: 100%;
			height: 100%;
			background-color: rgba(0,0,0,.6);
			z-index: 1100;
			opacity: 0;
		}
		.am-dimmer.am-active {
			opacity: 1;
		}
		.ws-modal .am-modal-dialog {
			width:800px;
			height:404px;
		  background: #fff;
		  padding: 40px 50px;
		      position: relative;
			display: inline-block;
			vertical-align: middle;
			margin-left: auto;
			margin-right: auto;
		}
		.ws-modal .am-alert {
		  background: #fff;
		  color: #333;
		  font-size: 16px;
		  padding: 0 0 25px;
		  margin: 0;
		  border: 1px solid #fff;
		}
		.ws-modal .am-modal-dialog p {
		  text-align: left;
		}
		.ws-modal .am-modal-dialog textarea {
		  font-size: 14px;
		  color: #b2b2b2;
		  padding: 10px;
		  margin-bottom: 20px;
		}
		.ws-modal .am-form-group {
		  margin: 0;
		}
		.ws-modal .am-modal-dialog #yourcall {
		  width: 100%;
		  font-size: 14px;
		  color: #b2b2b2;
		  padding: 10px;
		  margin-bottom: 15px;
		}
		.ws-modal .tijiao {
		  line-height: 1;
		}
		.ws-modal .tijiao .tip {
		  font-size: 14px;
		  color: red;
		  line-height: 48px;
		}
		.ws-modal .tijiao .am-fr {
		  font-size: 16px;
		}
		.ws-modal .tijiao--button {
		  padding: 16px 30.6px;
		  background: #f60;
		  color: #fff;
		  border: none;
		}
		.ws-modal .tijiao--cancel {
		  margin: 16px 30.6px;
		  color: #f60;
		}
		.ws-modal .dialog--content .am-field-valid {
		  border-color: #ccc!important;
		}

    </style>

<div class="blank20"></div>
<hr class="ws-hr">


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
            Copyright © 2010-2016 <a href="http://www.d1ev.com/" class="ws-foot-copyrightA">第一电动网</a> 京ICP备14024261号 　京ICP证160753号　京公网安备110105011343
        </div>
    </div>
</div>

<!--右侧固定 意见反馈-->
<div class="ws-fixed">
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
<script src="http://www.d1ev.com/new2016/src/external/js/amazeui.min.js"></script>
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
		/*
		$('.ws-fixed-scroll').click(function(){
			$('html,body').animate({scrollTop:0});
		});
		*/
		//意见反馈
		$("#tijiao").on("click", function () {
			if (!$('#tijiaocontent').val() || !$('#yourcall').val()) {
				$('.tijiao .tip').text('请输入反馈建议和联系方式后再提交');
				return false;
			} else {
				$('.tijiao .tip').text('');
			}
		});
		
	});
},1000);
</script>