<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1130,maximum-scale=1.0"/>
    <title>个人会员管理 - 第一电动网</title>
    <template file="Member/Public/global_js.php"/>
    <script type="text/javascript" src="{$model_extresdir}js/common.js"></script>
    <link href="/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://www.d1ev.com/sign/external/css/amazeui.flat.css">
    <link type="text/css" href="http://www.d1ev.com/statics/extres/member/css/core.css" rel="stylesheet" />
    <link href="http://www.d1ev.com/statics/2015d1ev/css/top.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="http://www.d1ev.com/statics/extres/member/css/user.css" rel="stylesheet" media="all" />
    <link href="http://www.d1ev.com/statics/extres/member/area/css/cityLayout.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1469600638_0967958.css">
    <style type="text/css">
        /*reset amazeui*/
        *, *:before, *:after {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }

        @media only screen and (min-width: 641px) {
            [class*="am-u-"] {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }
        }

        /*xx*/
        dl, ol, dt, dd, ul, li, form, h1, h2, h3, h4, h5, h6 {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        input, select, textarea, button {
            vertical-align: middle;
            resize: none;
        }

        .cityinput {
            background: url(images/ts-city.png);
            width: 180px;
            height: 30px;
            border: #d6d6d6 1px solid;
            margin-top: 5px;
            text-indent: 5px;
            line-height: 30px;
            text-indent: 5px;
        }

        .cityzinput {
            background: url(images/ts-zcity.png);
            width: 180px;
            height: 30px;
            border: #d6d6d6 1px solid;
            margin-top: 15px;
            text-indent: 5px;
            line-height: 30px;
            text-indent: 5px;
        }

        a, a:hover {
            text-decoration: none
        }

        img {
            border: 0
        }

        ul {
            list-style: none;
            margin: 0;
        }

        label {
            color: #6CBD45;
            font-size: 14px;
            font-weight: bold;
            padding-bottom: 0.5em;
            margin: 0;
        }

        .h3 {
            font-size: 13px;
            font-weight: bold;
        }

        #show {
            background: url(images/photo.jpg)
        }

        #meun {
            color: #fff;
            padding-left: 10px;
        }

        #meun img {
            float: left;
        }

        #submeun {
            margin-left: 70px;
            float: left;
        }

        #submeun span {
            text-align: center;
            margin-right: 10px;
            float: left;
            display: inline;
        }

        #submeun span a {
            color: #fff;
            height: 50px;
            line-height: 50px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            padding-left: 15px;
            padding-right: 15px;
            display: block;
        }

        #submeun span.cur {
            text-align: center;
            background: #82ce18;
            margin-right: 10px;
            float: left;
            display: inline;
        }

        #top {
            background-color: #000;
            margin: 0em 0 10px 0em;
            border-style: solid;
            border-width: 1px;
            border-color: #E5E5E5;
            height: 50px;
            line-height: 50px;
        }

        label.subtitle {
            font-size: 13px;
            float: right;
            color: #6CBD45;
            margin: 0 10px;
            text-align: right;
        }

        h1.title {
            height: 50px;
            font-size: 12px;
            background: url(logo.png) no-repeat;
        }

        h1.title a:link, h1.title a:visited, h1.title a:hover {
            color: #000;
            text-decoration: none;
        }

        .li_span--head {
            font-size: 16px;
            color: #000;
        }

        .li_span--content {
            font-size: 16px;
            color: #f60;
            margin-left: 18px;
        }

        .li_span--tip {
            font-size: 12px;
            color: #999;
        }

        .li_span--button {
            -webkit-user-select: none;
            font-size: 16px;
            color: #f60;
            border: 1px solid #f60;
            width: 100px;
            text-align: center;
            line-height: 40px;
            display: inline-block;
            border-radius: 0;
            padding-top: 0;
            padding-bottom: 0;
            background: #fff;
        }

        .li_span--button:hover {
            color: #e65c00;
            border-color: #e65c00;
        }

        .li_span--button:active {
            color: #cc5200;
            border-color: #cc5200;
        }

        #modifyPassword li {
            margin: 32px 0 8px;
        }

        #accountBindContent ul li {
            border-bottom: none;
            overflow: hidden;
            padding: 0;
            margin: 32px 0 8px;
        }

        #accountBindContent .iconfont {
            font-size: 40px;
            margin-right: 10px;
        }

        #accountBindContent ul li span {
            line-height: 40px;
        }

        .am-modal-bd--re {
            padding: 10px 40px 30px;
        }

        .am-modal_button {
            display: inline-block;
            width: 134px;
            float: right;
			font-size:14px;
            line-height: 48px;
            border: 1px solid #f60;
            color: #fff;
            background: #f60;;
            margin-top: 10px;
            border-radius: 4px;
            -webkit-user-select: none;
        }

        .am-modal_button--re {
            display: inline-block;
            width: 134px;
            float: right;
			font-size:14px;
            line-height: 48px;
            border: 1px solid #f60;
            color: #fff;
            background: #f60;
            border-radius: 4px;
            -webkit-user-select: none;
        }

        .am-modal_button--cancel {
            color: #f60;
            float: right;
            margin-top: 10px;
            margin-right: 50px;
            font-size: 14px;
            border: 1px solid #FFF !important;
            line-height: 48px;
            background: #fff;
            cursor: pointer;
        }

        .am-modal_button--re--cancel {
            color: #f60;
            float: right;
            margin-right: 50px;
            font-size: 14px;
            border: 1px solid #FFF !important;
            line-height: 48px;
            background: #fff;
            cursor: pointer;
        }

        .am-modal-dialog {
            background: #fff;
        }

        .am-modal-dialog input {
            box-sizing: border-box;
        }

        .am-form-right {
            position: relative;
            padding-right: 10em !important;
        }

        .imga {
            background: #d9d9d9;
            position: absolute;
            right: 1px;
            top: 1px;
            width: 133.2px;
            height: 48px;
            display: block;
            padding: 0;
            line-height: 1;
            z-index: 2;
            border-radius: 0 4px 4px 0;
        }

        .am-form p.am-text-left {
            margin-bottom: 25px;
        }

        .am-modal-dialog button.am-selected-btn {
            box-sizing: border-box;
        }

        .am-form-groupa button {
            box-sizing: border-box;
        }
    </style>

    <!--[if IE]>
    <script src="http://www.d1ev.com/statics/js/html5.js"></script>
    <![endif]-->
    <!--[if IE 6]>
    <script src="http://www.d1ev.com/statics/js/DD_belatedPNG_0.0.8a.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('.enter,.enter a,.enter a:hover');
    </script>
    <![endif]-->
</head>
<body data-ts="{$member.modifytime}" data-value="">
<template file="Contents/header_profile7.php"/>
<div class="blank30"></div>
<!--<div class="crumb wrap"><a href="http://www.d1ev.com/"><i></i>第一电动网</a> &gt; <a href="http://www.d1ev.com/member/home/index.html">用户中心</a> &gt; 个人会员管理</div>-->
<div class="blank20"></div>
<div class="user">
    <div class="user_center">
        <template file="Member/Public/homeUserMenu3.php"/>
        
        <div class="user_main">
            <div class="uMain_content">
                <div class="main_nav2">
                    <ul id="aa">
                        <if condition="$type eq 'profile'"> 
                        <li class="current" id="cprofile"> <a href="http://www.d1ev.com/member/user/profile.html"><span>基本资料</span></a> </li>
                        <else/> 
                        <li id="cprofile"> <a href="http://www.d1ev.com/member/user/profile.html"><span>基本资料</span></a> </li> 
                        </if>
                        <li id="cavatar"> <a href="javascript:;"><span>修改头像</span></a> </li>
                        <if condition="$type eq 'modify'"> 
                        <li class="current" id="cpassword"> <a href="javascript:;"><span>账户设置</span></a> </li>
                        <else/> 
                        <li id="cpassword"> <a href="javascript:;"><span>账户设置</span></a> </li>
                        </if>
                        <li id="account"> <a href="javascript:;"><span>第三方绑定</span></a> </li>
                    </ul>
                </div> 
                <div class="minHeight500 am-cf">
                    <form id="doprofile" action="http://www.d1ev.com/member/user/doprofile.html" method="post">
                    <if condition="$type eq 'profile'"> 
                    <div id="modifyProfile" class="profile">
                    <else/> 
                    <div id="modifyProfile" class="" style="display: none;"> 
                    </if>
                            <ul>
                                <li>
                                    <div class="name"><span>*</span>昵称：</div>
                                    <div class="input92cc"> <input id="rnickname" class="input" type="text" value="{$member.nickname}" name="nickname" style="width:190px;"> </div>
                                    <div id="mnickname" class="input_msg"></div>
                                </li>
                                <li>
                                    <div class="name"><span></span>真实姓名：</div>
                                    <div class="input92cc"> <input id="rxm" class="input" type="text" value="{$member.xm}" name="xm" style="width:190px;"> </div>
                                    <div id="mxm" class="input_msg"></div>
                                </li>
                                <li style="display:none">
                                    <div class="name"><span>*</span>邮箱：</div>
                                    <div class="input92cc"><input id="remail" class="  input" type="text" value="{$member.email}" name="email" style="width:190px;" disabled></div>
                                    <div class="input_msg">
                                        <a href="http://www.d1ev.com/member/user/mail.html" target="_blank"><font color="red">修改</font></a>
                                    </div>
                                </li>
                                <li><div class="name">性别：</div>
                                    <div class="input92cc">
                                        <select id="rsex" class="select_normal" name="sex" style="width:70px;">
                                            <option <?php if($member['sex']=='0'){ echo "selected='selected'";}?> value="0">未 知</option>
                                            <option <?php if($member['sex']=='1'){ echo "selected='selected'";}?>value="1">先 生</option>
                                            <option <?php if($member['sex']=='2'){ echo "selected='selected'";}?> value="2">女 士</option>
                                        </select>
                                    </div>
                                </li>
                                <li><div class="name"><span>*</span>个人介绍：</div><div class="input92cc"><textarea name="about" cols="30" rows="7" id="rselfIntroduce" class="input" style=" height:100px;width: 280px;">{$member.about}</textarea></div><div id="mselfIntroduce" class="input_msg"></div></li>
                                <li style="display:none">
                                    <div class="name"><span>*</span>手机：</div>
                                    <div class="input92cc"><input class="  input" type="text" value="{$member.tel}" style="width:190px;" disabled></div>
                                    <div class="input_msg">
                                        <a href="http://www.d1ev.com/member/user/phone.html" target="_blank"><font color="red">修改</font></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="name">个性域名：</div>
                                    <div class="input92cc"><input id="rdomain" class="  input" type="text" value="{$member.domain}" name="domain" style="width:130px;"></div>
                                    <div id="mdomain" class="input_msg"></div>
                                </li>
                                <li>
                                    <div class="name">　</div>
                                    <div>http://www.d1ev.com/home/<b id="domain" style="color:red"><if condition="$member['domain'] neq ''">{$member.domain}<else/>{$member.userid}</if></b></div>
                                </li>

                                <li>
                                    <div class="name"><span>*</span>所在地区：</div>
                                    <div class="input92cc"><input name="area" id="rarea" autocomplete="off" type="text" readonly value="{$member.area}" class="input  inputFocus proCityQueryAll proCitySelAll" style="width:190px;"></div>
                                    <div id="marea" class="input_msg"></div>
                                </li>
                                <li style="display:none">
                                    <div class="name">生日：</div>
                                    <div>
                                        <input type="text" name="info[birthday]" id="birthday" value="{$memberpersion.birthday}" size="10" class="input length_3 J_datetime  date"> </div>
                                    <div id="memail" class="input_msg"></div>
                                </li>
                                <li style="display:none">
                                    <div class="name">住址：</div>
                                    <div>
                                        <input type="text" name="info[address]" id="address" style="width:190px;" value="{$memberpersion.address}" class="input"> </div>
                                    <div id="memail" class="input_msg"></div>
                                </li>
                                <li style="display:none">
                                    <div class="name">公司：</div>
                                    <div>
                                        <input type="text" name="info[company]" id="company" style="width:190px;" value="{$memberpersion.company}" class="input"> </div>
                                    <div id="memail" class="input_msg"></div>
                                </li>
                                <li style="display:none">
                                    <div class="name">职务：</div>
                                    <div>
                                        <input type="text" name="info[job]" id="job" style="width:190px;" value="{$memberpersion.job}" class="input"> </div>
                                    <div id="memail" class="input_msg"></div>
                                </li>
                                <li style="display:none">
                                    <div class="name">专业领域：</div>
                                    <div>
                                        <input type="text" name="info[zhuanye]" id="zhuanye" style="width:190px;" value="{$memberpersion.zhuanye}" class="input"> </div>
                                    <div id="memail" class="input_msg"></div>
                                </li>
                                <li>
                                    <div class="name"></div>
                                    <div><button id="seveProfile" type="button">保存修改</button></div>
                                </li>
                            </ul>
                        </div>
                    </form>
                    <div id="modifyAvatar" class="profile" style="display: none;">
                        <div class="avatar_box">
                            <div class="myAvatarUpload">
                                <div id="myContent"></div>
                            </div>
                        </div>
                        <div class="avatar_size_list" style="display:none;">
                            <img onerror="this.src='http://img-cdn.d1ev.com/d/file/default/no-avatar.gif'" src="http://img-cdn.d1ev.com/d/file/avatar/{$member.userid}/300x300.jpg<?php echo '?_ts='.time(); ?>" alt="">
                            <img onerror="this.src='http://img-cdn.d1ev.com/d/file/default/no-avatar.gif'" src="http://img-cdn.d1ev.com/d/file/avatar/{$member.userid}/180x180.jpg<?php echo '?_ts='.time(); ?>" alt="">
                            <img onerror="this.src='http://img-cdn.d1ev.com/d/file/default/no-avatar.gif'" src="http://img-cdn.d1ev.com/d/file/avatar/{$member.userid}/90x90.jpg<?php echo '?_ts='.time(); ?>" alt="">
                            <img onerror="this.src='http://img-cdn.d1ev.com/d/file/default/no-avatar.gif'" src="http://img-cdn.d1ev.com/d/file/avatar/{$member.userid}/45x45.jpg<?php echo '?_ts='.time(); ?>" alt="">
                            <img onerror="this.src='http://img-cdn.d1ev.com/d/file/default/no-avatar.gif'" src="http://img-cdn.d1ev.com/d/file/avatar/{$member.userid}/30x30.jpg<?php echo '?_ts='.time(); ?>" alt="">
                        </div>
                    </div>
                    <if condition="$type eq 'modify'"> 
                    <div id="modifyPassword" class="profile" style="display:block;margin-top:-15px;">
                    <else/> 
                    <div id="modifyPassword" class="" style="display: none;margin-top:-15px;"> 
                    </if>
                        <ul class="am-cf" style="padding-top:0;">
                            <if condition="$member['email'] eq '' and $member['tel'] eq ''">
                                <li class="am-u-lg-12" data-style="{$member.modify}">
                                <div class="am-u-lg-9">
                                    <span class="li_span--head">安全邮箱</span>
                                    <span class="li_span--content">{$member.emailencode}</span>
                                    <br>
                                    <span class="li_span--tip">安全邮箱可以用于登录第一电动网账号，重置密码或其它安全验证</span>
                                </div>
                                <div class="am-btn am-u-lg-2 li_span--button" data-am-modal="{target: '#doc-modal-10', closeViaDimmer: 0, width: 470, height: 409}">绑定</div>
                            </li><elseif condition="$member['email'] eq ''"/>
                            <li class="am-u-lg-12" data-style="{$member.modify}">
                                <div class="am-u-lg-9">
                                    <span class="li_span--head">安全邮箱</span>
                                    <span class="li_span--content">{$member.emailencode}</span>
                                    <br>
                                    <span class="li_span--tip">安全邮箱可以用于登录第一电动网账号，重置密码或其它安全验证</span>
                                </div>
                                <div class="am-btn am-u-lg-2 li_span--button" onclick="sendstyle('mail',this)"  data-am-modal="">绑定</div>
                            </li>
                            <else/>
                            <li class="am-u-lg-12" data-style="{$member.modify}">
                                <div class="am-u-lg-9">
                                    <span class="li_span--head">安全邮箱</span>
                                    <span class="li_span--content">{$member.emailencode}</span>
                                    <br>
                                    <span class="li_span--tip">安全邮箱可以用于登录第一电动网账号，重置密码或其它安全验证</span>
                                </div>
                                <div class="am-btn am-u-lg-2 li_span--button" onclick="sendstyle('mail',this)"  data-am-modal="">修改</div>
                            </li>
                            </if>
                            <if condition="$member['tel'] eq '' and $member['email'] eq ''">
                            <li class="am-u-lg-12"  data-style="{$member.modify}">
                                <div class="am-u-lg-9">
                                    <span class="li_span--head">安全手机 </span>
                                    <span class="li_span--content">{$member.mobileencode}</span>
                                    <br>
                                    <span class="li_span--tip">手机号可以用于登录第一电动网账号，重置密码或其它安全验证</span>
                                </div>
                                <div class="am-btn am-u-lg-2 li_span--button" data-am-modal="{target: '#doc-modal-9', closeViaDimmer: 0, width: 470, height: 409}">绑定</div>
                            </li><elseif condition="$member['tel'] eq ''"/>
                            <li class="am-u-lg-12"  data-style="{$member.modify}">
                                <div class="am-u-lg-9">
                                    <span class="li_span--head">安全手机 </span>
                                    <span class="li_span--content">{$member.mobileencode}</span>
                                    <br>
                                    <span class="li_span--tip">手机号可以用于登录第一电动网账号，重置密码或其它安全验证</span>
                                </div>
                                <div class="am-btn am-u-lg-2 li_span--button" onclick="sendstyle('mobile',this)"  data-am-modal="">绑定</div>
                            </li>
                            <else/>
                            <li class="am-u-lg-12"  data-style="{$member.modify}">
                                <div class="am-u-lg-9">
                                    <span class="li_span--head">安全手机 </span>
                                    <span class="li_span--content">{$member.mobileencode}</span>
                                    <br>
                                    <span class="li_span--tip">手机号可以用于登录第一电动网账号，重置密码或其它安全验证</span>
                                </div>
                                <div class="am-btn am-u-lg-2 li_span--button" onclick="sendstyle('mobile',this)"  data-am-modal="">修改</div>
                            </li>
                            </if>
                            <if condition="$member['tel'] eq '' and $member['email'] eq ''">
                            <li class="am-u-lg-12"  data-style="{$member.modify}">
                                <div class="am-u-lg-9">
                                    <span class="li_span--head">账号密码 </span>
                                    <br>
                                    <span class="li_span--tip">用于保护账号信息和登录安全</span>
                                </div>
                                <div class="am-btn am-u-lg-2 li_span--button am-disabled" onclick="sendstyle('password',this)"  data-am-modal="">设置</div>

                            </li>
                            <else/>
                            <li class="am-u-lg-12"  data-style="{$member.modify}">
                                <div class="am-u-lg-9">
                                    <span class="li_span--head">账号密码 </span>
                                    <br>
                                    <span class="li_span--tip">用于保护账号信息和登录安全</span>
                                </div>
                                <div class="am-btn am-u-lg-2 li_span--button" onclick="sendstyle('password',this)"  data-am-modal="">修改</div>

                            </li>
                            </if>
                            <li></li>
                        </ul>
                    </div>
                    <div id="accountBindContent" style=" display:none;">
                        <ul class="am-cf">
<if condition="$member['tel'] eq '' AND $member['email'] eq ''">
    <if condition="$connect['qq'] eq ''">
        <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-qq am-text-secondary"></span><span class="li_span--head">QQ</span><span class="li_span--content"></span></div>
        <div class="am-btn am-u-lg-2 li_span--button" onclick="bindaddorno('qq',this)" data-am-modal="">绑定QQ</div>
    </li><else />
    <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-qq am-text-secondary"></span><span class="li_span--head">QQ</span><span class="li_span--content">{$connect.qq.nickname}</span></div>
        <div class="am-btn am-u-lg-2 li_span--button am-disabled" data-am-modal="">解除绑定</div>
    </li></if>
    <else />
    <if condition="$connect['qq'] eq ''">
        <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-qq am-text-secondary"></span><span class="li_span--head">QQ</span><span class="li_span--content"></span></div>
        <div class="am-btn am-u-lg-2 li_span--button" onclick="bindaddorno('qq',this)" data-am-modal="">绑定QQ</div>
    </li><else />
    <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-qq am-text-secondary"></span><span class="li_span--head">QQ</span><span class="li_span--content">{$connect.qq.nickname}</span></div>
        <div class="am-btn am-u-lg-2 li_span--button" onclick="bindaddorno('qq',this)" data-am-modal="">解除绑定</div>
    </li></if>
    </if>
<if condition="$member['tel'] eq '' AND $member['email'] eq ''">
    <if condition="$connect['weixin'] eq ''">
        <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-weixin am-text-success"></span><span class="li_span--head">微信</span><span class="li_span--content"></span></div>
        <div class="am-btn am-u-lg-2 li_span--button" onclick="bindaddorno('weixin',this)" data-am-modal="">绑定微信</div>
    </li><else />
    <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-weixin am-text-success"></span><span class="li_span--head">微信</span><span class="li_span--content">{$connect.weixin.nickname}</span></div>
        <div class="am-btn am-u-lg-2 li_span--button am-disabled" data-am-modal="">解除绑定</div>
    </li></if>
    <else />
    <if condition="$connect['weixin'] eq ''">
        <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-weixin am-text-success"></span><span class="li_span--head">微信</span><span class="li_span--content"></span></div>
        <div class="am-btn am-u-lg-2 li_span--button" onclick="bindaddorno('weixin',this)" data-am-modal="">绑定微信</div>
    </li><else />
    <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-weixin am-text-success"></span><span class="li_span--head">微信</span><span class="li_span--content">{$connect.weixin.nickname}</span></div>
        <div class="am-btn am-u-lg-2 li_span--button" onclick="bindaddorno('weixin',this)" data-am-modal="">解除绑定</div>
    </li></if>
    </if>
<if condition="$member['tel'] eq '' AND $member['email'] eq ''">
    <if condition="$connect['weibo'] eq ''">
        <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-weibo am-text-danger"></span><span class="li_span--head">微博</span><span class="li_span--content"></span></div>
        <div class="am-btn am-u-lg-2 li_span--button" onclick="bindaddorno('weibo',this)" data-am-modal="">绑定微博</div>
    </li><else />
    <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-weibo am-text-danger"></span><span class="li_span--head">微博</span><span class="li_span--content">{$connect.weibo.nickname}</span></div>
        <div class="am-btn am-btn am-u-lg-2 li_span--button am-disabled" data-am-modal="">解除绑定</div>
    </li></if>
    <else />
    <if condition="$connect['weibo'] eq ''">
        <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-weibo am-text-danger"></span><span class="li_span--head">微博</span><span class="li_span--content"></span></div>
        <div class="am-btn am-u-lg-2 li_span--button" onclick="bindaddorno('weibo',this)" data-am-modal="">绑定微博</div>
    </li><else />
    <li class="am-u-lg-12">
        <div class="am-u-lg-9"><span class="iconfont icon-weibo am-text-danger"></span><span class="li_span--head">微博</span><span class="li_span--content">{$connect.weibo.nickname}</span></div>
        <div class="am-btn am-u-lg-2 li_span--button" onclick="bindaddorno('weibo',this)" data-am-modal="">解除绑定</div>
    </li></if>
    </if>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blank20"></div>

<div class="provinceCityAll">
    <div class="tabs clearfix">
        <ul class="">
            <li><a href="javascript:" class="current" tb="hotCityAll">热门城市</a></li>
            <li><a href="javascript:" tb="provinceAll">省份</a></li>
            <li><a href="javascript:" tb="cityAll" id="cityAll">城市</a></li>
            <li><a href="javascript:" tb="countyAll" id="countyAll">区县</a></li>
        </ul>
    </div>
    <div class="con">
        <div class="hotCityAll invis">
            <div class="pre"><a></a></div>
            <div class="list">
                <ul>
                </ul>
            </div>
            <div class="next"><a class="can"></a></div>
        </div>
        <div class="provinceAll invis">
            <div class="pre"><a></a></div>
            <div class="list">
                <ul>
                </ul>
            </div>
            <div class="next"><a class="can"></a></div>
        </div>
        <div class="cityAll invis">
            <div class="pre"><a></a></div>
            <div class="list">
                <ul>
                </ul>
            </div>
            <div class="next"><a class="can"></a></div>
        </div>
        <div class="countyAll invis">
            <div class="pre"><a></a></div>
            <div class="list">
                <ul>
                </ul>
            </div>
            <div class="next"><a class="can"></a></div>
        </div>
    </div>
</div>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <div class="am-modal-bd--re">
            <p class="am-text-left" style="font-size: 18px;color:#000;">解绑</p>
            <p class="am-text-left" style="-webkit-user-select: none;font-size: 14px;color:#808080;margin-top:40px;margin-bottom:0;">解绑QQ以后你将无法使用QQ登录第一电动网,确定解绑吗?</p>
            <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
            <botton class="am-modal_button am-btn-first" onclick="externalbind('qq',this)">确定</botton><botton class="am-btn-second am-modal_button--cancel" data-am-modal-close>取消</botton>
        </div>
    </div>
</div>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <div class="am-modal-bd--re">
            <p class="am-text-left" style="font-size: 18px;color:#000;">解绑</p>
            <p class="am-text-left" style="-webkit-user-select: none;font-size: 14px;color:#808080;margin-top:40px;margin-bottom:0;">解绑微信以后你将无法使用微信登录第一电动网,确定解绑吗?</p>
            <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
            <botton class="am-modal_button am-btn-first" onclick="externalbind('weixin',this)">确定</botton><botton class="am-btn-second am-modal_button--cancel" data-am-modal-close>取消</botton>
        </div>
    </div>
</div>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-3">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <div class="am-modal-bd--re">
            <p class="am-text-left" style="font-size: 18px;color:#000;">解绑</p>
            <p class="am-text-left" style="-webkit-user-select: none;font-size: 14px;color:#808080;margin-top:40px;margin-bottom:0;">解绑微博以后你将无法使用微博登录第一电动网,确定解绑吗?</p>
            <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
            <botton class="am-modal_button am-btn-first" onclick="externalbind('weibo',this)">确定</botton><botton class="am-btn-second am-modal_button--cancel" data-am-modal-close>取消</botton>
        </div>
    </div>
</div>
<div class="am-modal am-modal-no-btn am-modal--ajax" tabindex="-1" id="doc-modal-4">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <form method="post" action="http://www.d1ev.com/member/accountnew/modifyemail" target="_self" class="am-form" id="doc-vld-msg4" novalidate="novalidate">
            <div class="am-modal-bd--re">
                <p class="am-text-left" style="font-size: 18px;color:#000;">绑定邮箱</p>
                <div class="am-form-groupa">
                    <input type="email" name="bindemail" value="" onchange="checkfalse(this)" placeholder="请输入邮箱" class="am-radius" data-validation-message="请输入正确的邮箱" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <div class="am-form-icon am-form-groupa">
                    <input type="text" name="vmmCode" onchange="checkfalse(this)" class="am-form-right am-radius" placeholder="验证码" minlength="6" required>
                    <input type="button" value="点击获取" class="am-btn imga img  btn-loading-example" data-am-loading="{loadingText: '已发送'}">
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <input id="submitmail" onclick="submitclick(this,this.id)" type="button" value="确定" class="am-modal_button--re am-btn-first"><botton class="am-btn-second am-modal_button--re--cancel" data-am-modal-close>取消</botton>
            </div>
        </form>
    </div>
</div>
<div class="am-modal am-modal-no-btn am-modal--ajax" tabindex="-1" id="doc-modal-5">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <form method="post" action="http://www.d1ev.com/member/accountnew/modifymobile" target="_self" class="am-form" id="doc-vld-msgg" novalidate="novalidate">
            <div class="am-modal-bd--re">
                <p class="am-text-left" style="font-size: 18px;color:#000;">绑定手机</p>
                <div class="am-form-groupa">
                    <input type="text" name="bindmobile" onchange="checkfalse(this)" value="" placeholder="请输入手机号" class="am-radius" minlength="11" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <div class="am-form-icon am-form-groupa">
                    <input type="text" name="vvvCode" onchange="checkfalse(this)" class="am-form-right am-radius" placeholder="验证码" minlength="4" required>
                    <input type="button" value="点击获取" class="am-btn imga img  btn-loading-example" data-am-loading="{loadingText: '已发送'}">
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <input id="submitmobile" onclick="submitclick(this,this.id)" type="button" value="确定" class="am-modal_button--re am-btn-first"><botton class="am-btn-second am-modal_button--re--cancel" data-am-modal-close>取消</botton>
            </div>
        </form>
    </div>
</div>
<div class="am-modal am-modal-no-btn am-modal--ajax" tabindex="-1" id="doc-modal-6">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <form method="post" action="http://www.d1ev.com/member/accountnew/modifypassword" target="_self" class="am-form" id="doc-vld-msgs" novalidate="novalidate">
            <div class="am-modal-bd--re">
                <p class="am-text-left" style="font-size: 18px;color:#000;">修改密码</p>
                <div class="am-form-groupa">
                    <input type="password" name="password" onchange="checkfalse(this)" id="oldpassword" value="" placeholder="密码(不少于6位)" class="am-radius" minlength="6" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <div class="am-form-groupa">
                    <input type="password" name="password" onchange="" id="password" value="" placeholder="密码(不少于6位)" class="am-radius" minlength="6" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <div class="am-form-groupa">
                    <input type="password" name="password" onchange="" id="password2" value="" placeholder="密码(不少于6位)" class="am-radius" data-equal-to="#password" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <input id="submitpassword" onclick="submitclick(this,this.id)" type="button" value="确定" class="am-modal_button--re am-btn-first"><botton class="am-btn-second am-modal_button--re--cancel" data-am-modal-close>取消</botton>
            </div>
        </form>
    </div>
</div>
<div class="am-modal am-modal-no-btn am-modal--ajax" tabindex="-1" id="doc-modal-7">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <form method="post" class="am-form" id="doc-vld-msgmail" novalidate="novalidate">
            <div class="am-modal-bd--re">
                <p class="am-text-left" style="font-size: 18px;color:#000;">验证身份</p>
                <div class="am-form-group" style="margin-bottom:30px;">
                    <select data-am-selected="{btnWidth: '100%', btnSize: 'lg'}">
                        <if condition="$member['tel'] eq ''">
                        <else/> 
                        <option data-style="a" value="{$member.tel}">使用{$member.mobileencode}验证</option>
                        </if>
                        <if condition="$member['email'] eq ''"><else />
                        <option data-style="b" value="{$member.email}" selected>使用{$member.emailencode}验证</option></if>
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <div class="am-form-icon am-form-groupa" id="doc-modal-7--re">
                    <input type="text" name="vmCode" onchange="checkfalse(this)" class="am-form-right am-radius" placeholder="验证码" minlength="4" required>
                    <input type="button" value="点击获取" class="am-btn imga img  btn-loading-example" data-am-loading="{loadingText: '已发送'}">
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <input onclick="nextone(this)" type="button" value="下一步" class="am-modal_button--re am-btn-first" data-am-modal=""><botton class="am-btn-second am-modal_button--re--cancel" data-am-modal-close>取消</botton>
            </div>
        </form>
    </div>
</div>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-8">
    <div class="am-modal-dialog">
        <iframe src="https://open.weixin.qq.com/connect/qrconnect?appid=wxb6c18a9512fe651a&scope=snsapi_login&redirect_uri=http://www.d1ev.com/member/weixin/login&state=&login_type=jssdk" frameborder="0" height="405" style="background:#ddd;"></iframe>
    </div>
</div>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-9">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <form method="post" action="http://www.d1ev.com/member/accountnew/modifymobile" target="_self" class="am-form" id="doc-vld-msgaddtel" novalidate="novalidate">
            <div class="am-modal-bd--re">
                <p class="am-text-left" style="font-size: 18px;color:#000;">绑定手机</p>
                <div class="am-form-groupa">
                    <input type="text" name="bindmobile" onchange="checkfalse(this)" value="" placeholder="请输入正确的手机号" class="am-radius" minlength="11" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <div class="am-form-password" style="margin-top:0;">
                    <input type="text" name="password_bind" id="passwordnew1" onfocus="this.type='password'" onchange="checkfalse(this)" value="" autocomplete="off" placeholder="密码(不少于6位)" class="am-radius" minlength="6" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <div class="am-form-icon am-form-groupa">
                    <input type="text" name="vvvCode" onchange="checkfalse(this)" class="am-form-right am-radius" placeholder="验证码" minlength="4" required>
                    <input type="button" value="点击获取" class="am-btn imga img  btn-loading-example" data-am-loading="{loadingText: '已发送'}">
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <input id="submitaddtel" onclick="submitclick(this,this.id)" type="button" value="确定" class="am-modal_button--re am-btn-first"><botton class="am-btn-second am-modal_button--re--cancel" data-am-modal-close>取消</botton>
            </div>
        </form>
    </div>
</div>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-10">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <form method="post" action="http://www.d1ev.com/member/accountnew/modifymobile" target="_self" class="am-form" id="doc-vld-msgaddmail" novalidate="novalidate">
            <div class="am-modal-bd--re">
                <p class="am-text-left" style="font-size: 18px;color:#000;">绑定邮箱</p>
                <div class="am-form-groupa">
                    <input type="email" name="bindemail" value="" onchange="checkfalse(this)" placeholder="请输入邮箱" class="am-radius" data-validation-message="请输入正确的邮箱" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <div class="am-form-password" style="margin-top:0;">
                    <input type="text" name="password_bind" id="password" onfocus="this.type='password'" onchange="checkfalse(this)" value="" autocomplete="off" placeholder="密码(不少于6位)" class="am-radius" minlength="6" required>
                    <div class="am-alert am-alert-dangers" style="visibility: hidden;"></div>
                </div>
                <div class="am-form-icon am-form-groupa">
                    <input type="text" name="vmmCode" onchange="checkfalse(this)" class="am-form-right am-radius" placeholder="验证码" minlength="6" required>
                    <input type="button" value="点击获取" class="am-btn imga img  btn-loading-example" data-am-loading="{loadingText: '已发送'}">
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <input id="submitaddmail" onclick="submitclick(this,this.id)" type="button" value="确定" class="am-modal_button--re am-btn-first"><botton class="am-btn-second am-modal_button--re--cancel" data-am-modal-close>取消</botton>
            </div>
        </form>
    </div>
</div>
<div class="am-modal am-modal-no-btn am-modal--ajax" tabindex="-1" id="doc-modal-11">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"></div>
        <form method="post" action="http://www.d1ev.com/member/accountnew/modifypassword" target="_self" class="am-form" id="doc-vld-msgspassword_set" novalidate="novalidate">
            <div class="am-modal-bd--re">
                <p class="am-text-left" style="font-size: 18px;color:#000;">设置密码</p>
                <div class="am-form-groupa">
                    <input type="password" name="password_set" onchange="" id="passworda" value="" placeholder="密码(不少于6位)" class="am-radius" minlength="6" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <div class="am-form-groupa">
                    <input type="password" name="password_set" onchange="" id="password2a" value="" placeholder="重复密码(不少于6位)" class="am-radius" data-equal-to="#passworda" data-validation-message="两次密码输入不一致" required>
                    <div class="am-alert am-alert-dangers am-text-left" style="visibility: hidden;"></div>
                </div>
                <input id="submitsetpassword_set" onclick="submitclick(this,this.id)" type="button" value="确定" class="am-modal_button--re am-btn-first"><botton class="am-btn-second am-modal_button--re--cancel" data-am-modal-close>取消</botton>
            </div>
        </form>
    </div>
</div>
<template file="Contents/footer_profile7.php"/>
<?php //echo "<pre>";var_dump($_SESSION);?>
<div style="display:none"><script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?c1d54a092f01be0215b4487856c2c6f6";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s);})();</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2469655'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s13.cnzz.com/stat.php%3Fid%3D2469655' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254528018'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s95.cnzz.com/stat.php%3Fid%3D1254528018' type='text/javascript'%3E%3C/script%3E"));</script></div>
<script type="text/javascript">
    //全局变量
    var GV = {
        DIMAUB: "http://www.d1ev.com/",
        JS_ROOT: "statics/js/"
    };
    var domIsReady = false,
            domReadyList = [],
            domReadyObject = [],
            $call = function (callback, obj) {
                if (typeof obj !== 'object') {
                    obj = document
                }
                if (domIsReady) {
                    callback.call(obj)
                } else {
                    domReadyList.push(callback);
                    domReadyObject.push(obj)
                }
            };
    var _config = {};
    //会员中心地址
    _config['domainSite'] = GV.DIMAUB;
    //网站地址
    _config['domainMainSite'] = 'http://www.d1ev.com/';
    //当前模块静态文件目录
    _config['domainStatic'] = 'http://www.d1ev.com/statics/extres/member/';
</script>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<script>
    $(function(){
        $('#rdomain').keyup(function(){
            $('#domain').html($(this).val());
        })
    })
</script>
<script type="text/javascript" src="http://www.d1ev.com/statics/extres/member/js/common.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/js/swfobject.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/extres/member/js/fullAvatarEditor.js"></script>

<script src="http://www.d1ev.com/statics/extres/member/area/js/public.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/2015d1ev/js/top.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/extres/member/js/jquery.artDialog.min.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/js/wind.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/js/common.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/extres/member/js/profile.js"></script>
<script type="text/javascript" src="http://www.d1ev.com/statics/js/ajaxForm.js"></script>
<script type="text/javascript">
    profile.init();
    //头像上传回调
    function fullAvatarCallback(msg) {
        switch (msg.code) {
            case 1:

                break;
            case 2:

                break;
            case 3:
                if (msg.type == 0) {

                } else if (msg.type == 1) {
                    alert("摄像头已准备就绪但用户未允许使用！");
                } else {
                    alert("摄像头被占用！");
                }
                break;
            case 4:
                alert("图像文件过大！");
                break;
            case 5:
                if (msg.type == 0) {
                    $.tipMessage("头像已经修改，刷新后可见最新头像！", 0, 3000);
                } else {
                    alert(msg.content.msg);
                }
                break;
        }
    }
</script>
{$user_avatar}
<script type="text/javascript">
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';}
        else {bp.src = 'http://push.zhanzhang.baidu.com/push.js';}
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>

<script src="http://www.d1ev.com/sign/external/js/amazeui.min.js"></script>

<script src="http://www.d1ev.com/sign/js/checkmodel.js"></script>
<script src="http://www.d1ev.com/new2016/src/external/js/headroom.js"></script>
<script>
    $(function () {
        //导航部分
		//console.log($(".ws-fix-head").html());
        $(".ws-fix-head").headroom({
            tolerance: 5,
            offset: 205,
            classes: {
                initial: "animated",
                pinned: "fadeInDown",
                unpinned: "fadeOutUp"
            }
        });
    });
    $(function () {
        //搜索
        $('.ws-nav-searchIcon').click(function () {
            $('.ws-searchboxBg').show();

        });
        $('.ws-searchbox-close').click(function () {
            $('.ws-searchboxBg').hide();
        });

        $('.search-all-form-q').keydown(function (e) {
            //console.log(e);
            if (e.keyCode === 13) {
                var _keywords = $('.search-all-form-q');
                if (!_keywords.val()) {
                    return false;
                }
                $('.search-all-form').submit();
                //window.location.href = 'http://www.d1ev.com/search.html?q=' + _keywords.val();
            }
        });
        $('.search-all-form-submit').click(function () {
            var _keywords = $('.search-all-form-q');
            console.log(_keywords);
            if (!_keywords.val()) {
                return false;
            }
            $('.search-all-form').submit();
            //window.location.href = 'http://www.d1ev.com/search.html?q=' + _keywords.val();
        });

        $('.ws-searchbox-historyH2').click(function () {
            $.ajax({
                url: 'http://www.d1ev.com/contents/index/clearsearch',
                type: 'post',
                success: function (data) {
                    console.log(data);
                    if ($.trim(data) == 1) {
                        console.log('cg');
                        $('.ws-searchbox-historyC').html('');
                    }
                }
            });
        });

        //登录与注册
        var timer = null;
        $(document).on('mouseover', '.ws-nav-headmap', function () {
            clearTimeout(timer);
            $('.ws-nav-users').show();
            $('.ws-nav-users').addClass('ws-nav-usersAnimate');
        });
        $(document).on('mouseout', '.ws-nav-headmap', function () {
            timer = setTimeout(function () {
                $('.ws-nav-users').hide();
                $('.ws-nav-users').removeClass('ws-nav-usersAnimate');
            }, 200);
        });
        $(document).on('mouseover', '.ws-nav-users', function () {
            clearTimeout(timer);
            //$('.ws-nav-users').show();
        });
        $(document).on('mouseout', '.ws-nav-users', function () {
            timer = setTimeout(function () {
                $('.ws-nav-users').hide();
                $('.ws-nav-users').removeClass('ws-nav-usersAnimate');
            }, 200);
        });

    }); 
	
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
</body>
</html>