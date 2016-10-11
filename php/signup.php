<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册账号 - 第一电动网</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileColor" content="#0e90d2">

    <link rel="stylesheet" href="http://www.d1ev.com/sign/external/css/amazeui.min.css">
    <link rel="stylesheet" href="http://www.d1ev.com/sign/external/css/amazeui.flat.css">
    <link rel="stylesheet" href="http://www.d1ev.com/sign/external/css/app.css">
    <style>
        .content--fixed{
            margin-top:60px;
            margin-bottom:53px;
        }
        .am-form-right{
            padding-right:10em!important;
        }
        br{height:30px;}
        .head{
            text-align: center;
            font-weight: 500;
            color:#4c4c4c;
            font-size:24px;
            padding-top: 2.6rem;
            margin-bottom: 2.6rem;
            line-height: 1;
        }

        .imga {
            background: #d9d9d9;
            position: absolute;
            right: 1px;
            top: 1px;
            width: 133.2px;
            height: 48px;
            display: block;
            padding:0;
            line-height: 1;
            z-index: 2;
            border-radius: 0 4px 4px 0;
        }
        .img {
            line-height: 48px;
            text-align: center;
            -webkit-user-select: none;
        }
        .img:hover{
            background: #ccc;
        }
        .img:active{
            background: #bfbfbf;
        }
        .am-cf--btn input{
            margin:25.8px 0 21.8px 0;
        }

        .ui.segment {
            position: relative;
            text-align: center;
        }
        .ui.horizontal.divider:after, .ui.horizontal.divider:before {
            content: '';
            display: table-cell;
            position: relative;
            top: 50%;
            width: 50%;
            background: url(http://www.d1ev.com/sign/images/divider.png) no-repeat;
        }
        .ui.horizontal.divider {
            display: table;
            white-space: nowrap;
            height: auto;
            margin: 0 auto;
            line-height: 1;
            width:80%;
            text-align: center;
        }
        .ui.divider {
            margin: 1rem 0;
            line-height: 1;
            height: 0;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .05em;
            color: rgba(0,0,0,.85);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            font-size: 1rem;
        }
        .ui.horizontal.divider:before {
            background-position: right 4em top 50%;
        }
        .ui.horizontal.divider:after {
            background-position: left 4em top 50%;
        }
        .form--padding{
            padding:0 40px;

            position:relative;
            box-shadow: 0 0 0 1px #D4D4D5,0 2px 4px 0 rgba(34,36,38,.15),0 2px 10px 0 rgba(34,36,38,.25);
        }
        @media(max-width:320px){

            .content--fixed{
                position:static;
                margin-top:0;
            }
            .form--padding{
                padding:0;
                box-shadow:0 0 0 0;
            }
            .head{
                padding-top:0;
                margin-bottom:1rem ;
            }

            .am-cf--btn input{
                padding: 14px 0 21.8px 0;

            }

        }
        .alert--position{
            display: none;
            position: absolute;
            top: 2.5em;
            left: 0;
            text-align: center;
            line-height: 36px;
            padding: 0 40px;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="am-g content--fixed">
    <div class="ui center aligned basic segment">
        <div class="ui horizontal divider"><a href="http://www.d1ev.com/"><img src="http://www.d1ev.com/sign/images/logo.png" alt=""></a></div>
    </div>
    <br>
    <div class="am-u-lg-fix am-u-md-fix am-u-sm-centered" style="">

        <form method="post" class="am-form form--padding" id="doc-vld-msg">
            <p class="head">手机注册</p>
            <div class="am-form-groupa">
            <input type="text" id="mobile" name="mobile" value="" placeholder="请输入手机号" class="am-radius js-pattern-mobile"  data-validation-message="请输入正确的手机号" required>
            <div class="am-alert am-alert-dangers" style="visibility: hidden;"></div>
            </div>
            <div class="am-form-groupa">
            <input type="text" name="password" id="password" value="" onfocus="this.type='password'" autocomplete="off" placeholder="密码(不少于6位)" class="am-radius" minlength="6" required>
            <div class="am-alert am-alert-dangers" style="visibility: hidden;"></div>
            </div>
            <div class="am-form-icon am-form-groupa">

                <input type="text" name="rvCode" class="am-form-right am-radius" placeholder="验证码" minlength="4" required>
                <img onclick="imga(this);" class="imga" src="http://www.d1ev.com/api/checkcode?type=register&code_len=4&font_size=14&width=133&height=48" alt="">
                <div class="am-alert am-alert-dangers" style="visibility: hidden;"></div>
            </div>

            <div class="am-form-icon am-form-groupa">

                <input type="text" name="vCode" class="am-form-right am-radius" placeholder="验证码">
                <input type="button" value="点击获取" class="am-btn imga img  btn-loading-example" data-am-loading="{loadingText: '已发送'}">
                <div class="am-alert am-alert-dangers" style="visibility: hidden;"></div>
            </div>
            <input id="submit" type="button" value="立即注册" class="am-btn am-btn-first am-btn-block">
            <div class="am-cf am-cf--btn">
                <a href="http://www.d1ev.com/member/accountnew/signupmail"><input type="button" name="" value="使用邮箱注册" class="am-btn am-btn-links am-btn-sm am-fl"></a>
                <a href="http://www.d1ev.com/member/accountnew/login"><input type="button" name="" value="已有账号，去登录" class="am-btn am-btn-links am-btn-sm am-fr"></a>
            </div>
            <div class="am-alert alert--position" data-am-alert style=""><button type="button" class="am-close--re">&times;</button><p class="am-radius">账号或密码错误</p></div>

        </form>

    </div>
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://www.d1ev.com/sign/external/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="http://www.d1ev.com/sign/external/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="http://www.d1ev.com/sign/external/js/amazeui.min.js"></script>
<script src="http://www.d1ev.com/sign/js/alert.js"></script>
<!--统计代码-->
<div style="display:none"><script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?c1d54a092f01be0215b4487856c2c6f6";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s);})();</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2469655'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s13.cnzz.com/stat.php%3Fid%3D2469655' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">var cnzz_protocol=(("https:"==document.location.protocol)?" https://":" http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254528018'%3E%3C/span%3E%3Cscript src='"+cnzz_protocol+"s95.cnzz.com/stat.php%3Fid%3D1254528018' type='text/javascript'%3E%3C/script%3E"));</script></div>
</body>
</html>