
function tab(showContent,selfObj){
	var tag = document.getElementById("tab").getElementsByTagName("li");
	var taglength = tag.length;
	for(i=0; i<taglength; i++){
		tag[i].className = "";
	}
	selfObj.parentNode.className = "tabcur";
	for(i=0; j=document.getElementById("tabcon"+i); i++){
		j.style.display = "none";
	}
	document.getElementById(showContent).style.display = "block";
}


//添加关注
function addFriend(fid){
    $.ajax({
        type: 'GET',
        url: "http://www.d1ev.com/member/public/addFriend",
        data:{'fid':fid},
        dataType: 'html',
        cache: false,
        success: function(data){
            var data = $.parseJSON(data);
            if(data['status'] == 0){
                //$.thinkbox.error(data.info,{'delayClose':1500});
				if(data['info'] == '您还未登录！'){
					//libs.login(window.location.href);
			$(".login_bg").show();
			$(".login_main").show();
				}else{
					$.tipMessage(data['info'], 2, 2000);
				}
            }else{
                $('#friends_'+fid).html('<span class="gz_end">已关注，<a href="javascript:void(0);" onClick="delFriend('+fid+')">取消</a></span>');
                //$.thinkbox.success(data.info,{'delayClose':1500});
				$.tipMessage(data['info'], 3, 2000);
            }
        }
    });
}
//删除关注
function delFriend(fid){
    $.ajax({
        type: 'GET',
        url: "http://www.d1ev.com/member/public/delFriend",
        data:{'fid':fid},
        dataType: 'html',
        cache: false,
        success: function(data){
            var data = $.parseJSON(data);
            if(data['status'] == 0){
                $.tipMessage(data['info'], 2, 1500);
            }else{
                $('#friends_'+fid).html('<a href="javascript:void(0);" class="gz" onClick="addFriend('+fid+')"><b>+</b>加关注</a>');
				$('#fans_'+fid).html('<a href="javascript:void(0);" class="gz" onClick="addFriend('+fid+')"><b>+</b>加关注</a>');
                $.tipMessage(data['info'], 3, 1500);
            }
        }
  });
}

//添加关注
function addFriend2(fid){
    $.ajax({
        type: 'GET',
        url: "http://www.d1ev.com/member/public/addFriend",
        data:{'fid':fid},
        dataType: 'html',
        cache: false,
        success: function(data){
            var data = $.parseJSON(data);
            if(data['status'] == 0){
				//$.tipMessage(data['info'], 2, 1500);
				$(".login_bg").show();$(".login_main").show();

            }else{
                $('.btns').html('<span class="gz_end">已关注，<a href="javascript:void(0);" onClick="delFriend2('+fid+')">取消</a></span>');
				$.tipMessage(data['info'], 3, 1500);
            }
        }
    });
}
//删除关注
function delFriend2(fid){
    $.ajax({
        type: 'GET',
        url: "http://www.d1ev.com/member/public/delFriend",
        data:{'fid':fid},
        dataType: 'html',
        cache: false,
        success: function(data){
            var data = $.parseJSON(data);
            if(data['status'] == 0){
                $.tipMessage(data['info'], 2, 1500);
            }else{
                $('.btns').html('<a href="javascript:void(0);" class="gz" onClick="addFriend2('+fid+')"><b>+</b>加关注</a>');
                $.tipMessage(data['info'], 3, 1500);
            }
        }
  });
}

function getMoreAuthorArticle(p,uid){
	var next = Number(p)+1;
	$.ajax({
			type: 'GET',
			url: 'http://www.d1ev.com/member/home/getMoreAuthorArticle?p='+p+'&uid='+uid,
			dataType: 'json',
			cache: false,
			beforeSend: function(){
				$("#getMoreAuthorArticle").html("正在载入...");
			},
			success: function(json){
				if(json){
					var li = '';
					$.each(json,function(index,array){

						li = li + '<li>\
                            <div class="list_lt"><a href="'+array['url']+'" title="'+array['title']+'" target="_blank"><img src="'+array['thumb']+'" alt="'+array['title']+'"></a></div>\
                            <div class="list_rt">\
                            <h3><a href="'+array['url']+'" target="_blank" class="new_tit" style="display: block;">'+array['title']+'</a>\
                            </h3>\
                            <p class="news_txt">'+array['jj']+'</p>\
                            <div class="rt_bt">\
                                <div class="f_l">\
                                    <span class="time"><i></i>'+array['sj']+'</span></div>\
                                    <div class="f_r"> <a class="pl_num" href="'+array['url']+'#comment" target="_blank" title="我要评论"><i></i>'+array['comm']+'</a> <span class="f_r_l">|</span>\
                                        <div class="shareTo"> <span class="shareshowbtn"></span>\
                                            <div class="share">\
                                            <a class="bds_tsina" data-cmd="tsina" href="http://www.d1ev.com/public/share?catid='+array['catid']+'&id='+array['id']+'&type=tsina" target="_blank" title="分享到新浪微博"></a>\
                                            <a class="bds_qzone" data-cmd="qzone" href="http://www.d1ev.com/public/share?catid='+array['catid']+'&id='+array['id']+'&type=qzone" target="_blank" title="分享到QQ空间"></a>\
                                            <a class="bds_tqq" data-cmd="tqq" href="http://www.d1ev.com/public/share?catid='+array['catid']+'&id='+array['id']+'&type=tqq" target="_blank" title="分享到腾讯微博"></a>\
                                            <a class="bds_qq" data-cmd="qq" href="http://www.d1ev.com/public/share?catid='+array['catid']+'&id='+array['id']+'&type=qq" target="_blank" title="分享到QQ好友"></a>\
                                        </div>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
						</li>';

					});
					setTimeout(function(){
						$('#authorArticle').append(li);
					},1500);
					$("#getMoreAuthorArticle").html("点击加载更多...");
					$("#getMoreAuthorArticle").attr("onclick",'getMoreAuthorArticle('+next+','+$("#getMoreAuthorArticle").attr("data-uid")+');');
				}else{
					$("#getMoreAuthorArticle").html("没有更多了");
					$("#getMoreAuthorArticle").attr("onclick",'');
				}
			}
		})
}


function getMoreFriends(p,uid){
	var next = Number(p)+1;
	$.ajax({
			type: 'GET',
			url: 'http://www.d1ev.com/member/home/getMoreFriends?p='+p+'&uid='+uid,
			dataType: 'json',
			cache: false,
			beforeSend: function(){
				$("#getMoreFriends").html("正在载入...");
			},
			success: function(json){
				if(json){
					var li = '';
					$.each(json,function(index,array){

						li = li + '<li id="id_5"><div class="fans_img"><a rel="nofollow author" href="http://www.d1ev.com/home/'+array['fid']+'" title="'+array['nickname']+'"><img src="http://www.d1ev.com/api.php?m=avatar&uid='+array['fid']+'" alt="'+array['nickname']+'"></a></div><div class="fans_ms"><p><a href="http://www.d1ev.com/home/'+array['fid']+'">'+array['nickname']+'</a> '+array['area']+'</p><p>'+array['ctime']+' 关注了Ta</p></div><div class="fans_gz" id="friends_'+array['fid']+'">'+array['friendsstatus']+'</div></li>';

					});
					setTimeout(function(){
						$('#friends').append(li);
					},1500);
					$("#getMoreFriends").html("点击加载更多...");
					$("#getMoreFriends").attr("onclick",'getMoreFriends('+next+',{$uid});');
				}else{
					$("#getMoreFriends").html("没有更多了");
					$("#getMoreFriends").attr("onclick",'');
				}
			}
		})
}

function getMoreFans(p,uid){
	var next = Number(p)+1;
	$.ajax({
			type: 'GET',
			url: 'http://www.d1ev.com/member/home/getMoreFans?p='+p+'&uid='+uid,
			dataType: 'json',
			cache: false,
			beforeSend: function(){
				$("#getMoreFans").html("正在载入...");
			},
			success: function(json){
				if(json){
					var li = '';
					$.each(json,function(index,array){

						li = li + '<li id="id_5"><div class="fans_img"><a rel="nofollow author" href="http://www.d1ev.com/home/'+array['uid']+'" title="'+array['nickname']+'"><img src="http://www.d1ev.com/api.php?m=avatar&uid='+array['uid']+'" alt="'+array['nickname']+'"></a></div><div class="fans_ms"><p><a href="http://www.d1ev.com/home/'+array['uid']+'">'+array['nickname']+'</a> '+array['area']+'</p><p>'+array['ctime']+' 关注了Ta</p></div><div class="fans_gz" id="fans_'+array['uid']+'">'+array['fansstatus']+'</div></li>';

					});
					setTimeout(function(){
						$('#fans').append(li);
					},1500);
					$("#getMoreFans").html("点击加载更多...");
					$("#getMoreFans").attr("onclick",'getMoreFans('+next+',{$uid});');
				}else{
					$("#getMoreFans").html("没有更多了");
					$("#getMoreFans").attr("onclick",'');
				}
			}
		})
}

$(document).ready(function() {
	$(".login_main h2 i").click(function(){
		$(".login_bg").hide();
		$(".login_main").hide();
	});
	$('#pl_login').on("click",function(){ 
	if($('#loginName').val() == ''){ 
		alert('请填写用户名'); 
		$(this).focus(); 
		   return false; 
	} 
	if($('#password').val() == ''){ 
		alert('请填写密码'); 
		$(this).focus(); 
		   return false; 
	} 
	$.ajax({ 
	  type: 'POST', 
	  url: "http://www.d1ev.com/member/public/doLogin.html", 
	  data:{'loginName':$('#loginName').val(), 'password':$('#password').val()}, 
	  dataType: 'jsonp', 
	  jsonp:'callback',  
	  cache: false, 
	  success: function(json){ 
	  if(json['error'] == 20023){ 
		 alert('用户名或者密码错误');
	  }else if(json['error'] == 10000){
		 $(".login_bg").hide();
		 $(".login_main").hide(); 
		 location.reload() 
	  } 
	  } 
	}) 
  });
});

$(function(){
	
	$('.main').css('padding-top','0');
	console.log($('.main').css('padding-top'));
});