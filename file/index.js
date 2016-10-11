//大牛发稿排行
;$('.press_tab p').click(function(){
	$('.press_tab p').removeClass('on').eq($(this).index()).addClass('on');
	$('.press_main ul').hide().eq($(this).index()).show();
});

/*鼠标移过，左右按钮显示*/
$(".pic1").hover(function(){
	$(this).find(".prev,.next").fadeTo("show",0.3);
},function(){
	$(this).find(".prev,.next").hide();
});
/*鼠标移过某个按钮 高亮显示*/
$(".pic1 .prev,.pic1 .next").hover(function(){
	$(this).fadeTo("show",0.7);
},function(){
	$(this).fadeTo("show",0.3);
});
/*焦点图*/

$(".pic1").slide({ titCell:".num ul" , effect:"fade", mainCell:".pic_con" , autoPlay:false, delayTime:500 , autoPage:true,interTime:5000});


/* $(".show").on("click",function(event){
if(event.target.nodeName!="A"){
	window.open($(this).find("a.tit").attr("href"));
}
}); */

/*新闻最新与上升最快tab*/
$('.new_tab .tab').click(function () {
	$('.new_tab .tab').removeClass('active').eq($(this).index()).addClass('active');
	$('.main .new_list').removeClass('list_show').eq($(this).index()).addClass('list_show');
	
	if($(this).index()==1){
		//1
		$('.new_tab .tab_a').attr('href','http://www.d1ev.com/member/daniusay/article_news.html');
		
	}else if($(this).index()==0){
		$('.new_tab .tab_a').attr('href','http://www.d1ev.com/member/daniusay/article_quick.html');
	}else{
		$('.new_tab .tab_a').attr('href','http://www.d1ev.com/member/daniusay/prize.html');
	}
	
});
$(function(){
	setTimeout(function(){
		if($('.login .a1').length>0){
			$('.mainR-join').attr('href','http://www.d1ev.com/login?forward=http://www.d1ev.com/member/article/publish.html');
		}
	},1000)
});
