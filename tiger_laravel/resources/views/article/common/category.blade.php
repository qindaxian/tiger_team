
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie6" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 7]>         <html class="ie7" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 8]>         <html class="ie8" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 9]>         <html class="ie9" lang="zh-cmn-Hans"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="zh-cmn-Hans"><!--<![endif]-->
<head>
    <meta charset="utf-8">
<title>游戏直播_网络游戏直播_虎牙直播</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="热门游戏直播,高清游戏直播,游戏直播,网络游戏直播,手游直播,单机游戏直播,lol直播,dota2直播,虎牙直播"/>
<meta name="Description" content="虎牙为你提供高清游戏直播，包括LOL直播、dnf游戏直播、dota直播，24小时不间断直播更新，非一般游戏视觉与听觉体验尽在虎牙直播。"/>

<link rel='canonical' href='http://www.huya.com/g' />
    <link type="text/css" rel="stylesheet" href="//a.msstatic.com/huya/main/pkg/pages_modules_77854de.css">
<link type="text/css" rel="stylesheet" href="//a.msstatic.com/huya/main/pkg/auto_combine_82253_5cbd120.css">
<!--HEAD_END-->
    <script data-fixed="true">!function(n){n.loadScript(["//szhuodong.duowan.com/feq/huya/yy-f2e-header-huya.min"])}(function(){function n(n){var e=t(n);document.write(e)}function t(n){for(var t,r="",c=0;t=n[c];c++)r+=e(t);return r}function e(n){var t=[unescape("%3Cscript%20type%3D%22text/javascript%22%20src%3D%22"),"",unescape("%22%3E%3C/script%3E")],e=new Date;return e.setSeconds(0),e.setMilliseconds(0),e=e.getTime(),n+="?t_="+e,t[1]=n,t.join("")}return{loadScript:function(t){t&&t.length&&t instanceof Array&&n(t)}}}());</script>
    <script data-fixed="true">
        var APP_URL = "http://www.huya.com/";
    </script>
</head>
<body>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

        <script data-fixed="true">var w=document.body.clientWidth;1480>w&&(document.body.className+=" w-1000");</script>
        <!-- S 通用头部 -->
   <div class="duya-header" id="duya-header">
    <div class="duya-header-wrap clearfix">
        <div class="duya-header-bd clearfix">
            <h1 id="duya-header-logo" title="虎牙直播-虎牙TV-中国领先的互动直播平台">
                <a href="http://www.huya.com/" class="clickstat" eid="click/navi/logo" eid_desc="点击/导航/logo"><img src="//a.msstatic.com/huya/main/img/logo.png" alt="虎牙直播" width="120" height="36"></a>
            </h1>
            <div class="duya-header-nav">
                <span class="hy-nav-link"><a href="{{ url('huya/index') }}" class="hy-nav-title clickstat" eid="click/navi/home" eid_desc="点击/导航/首页">首页</a></span>
                <span class="hy-nav-link"><a href="{{ url('huya/live') }}" class="hy-nav-title hiido_stat clickstat"  hiido_code="10004221" eid="click/navi/zhibo" eid_desc="点击/导航/直播">直播</a></span>
                <div class="hy-nav-expand">
                    <div class="hy-nav-title nav-main on" id="nav-main"><a class="clickstat" eid="click/navi/classification" eid_desc="点击/导航/分类" href="{{ url('huya/category') }}">分类</a><i class="icon-arrow"></i></div>
                    <div class="nav-expand-list nav-expand-game">
                        <i class="arrow"></i>
                    </div>
                </div>
                <!-- <span class="hy-nav-link"><a href="http://v.huya.com" class="hy-nav-title hiido_stat clickstat" hiido_code="10004227" target="_blank" eid="click/navi/video" eid_desc="点击/导航/视频">视频</a></span> -->
            </div>
            <div class="duya-header-search clearfix" id="J_duyaHdSearch" >
                <form method="get" id="searchForm_id" name="navSearchForm" action="http://www.huya.com/search.php" target="_blank">
                    <input type="text" name="hsk" value="主播、频道、游戏" autocomplete="off">
                    <button type="submit" class="btn-search clickstat" eid="click/search/searchbutton" eid_desc="点击/搜索/搜索按钮"></button>
                </form>
            </div>
            <div class="duya-header-gg clickstat" id="J_duyaHdGg" eid="click/push/navipic" eid_desc="点击/推荐/顶部导航图片"></div>
            <div class="duya-header-right" id="J_duyaHeaderRight"></div>


            <!-- 登录 -->
            <div id="login_div">
                <div class="hy-nav-right un-login" style="display: block;">
                    <div class="hy-nav-title">
                        <i class="hy-nav-icon hy-nav-login-icon"></i>
                        <div class="un-login-btn">
                            <a class="clickstat" id="nav_login" href="#" eid="click/navi/sign" eid_desc="点击/导航/登录">登录</a>
                            <i>|</i>
                            <a class="clickstat" id="nav-regiest" href="#" eid="click/navi/login" eid_desc="点击/导航/注册">注册</a>
                        </div>
                    </div>
                </div>
            </div>
<script>
$(function(){
    $("#nav_login").click(function(){
        var h = parseInt($(window).height());
        var w = parseInt($(window).width());
$("<div id='cover'></div>").css({
            "width":"100%",
            "height":"6200px",
            "background-color":"black",
            "position":"absolute",
            "top":0,
            "left":0,
            "opacity":0.6,
            "z-index":5
        }).appendTo("body");

        $("#login").css({
            "width":"300px",
            "height":"200px",
            "background-image":"url(http://desk.fd.zol-img.com.cn/t_s1024x768c5/g5/M00/09/0A/ChMkJlhRE7GIJQZZAAsqIOikv-8AAYjWwHiVDUACyo4120.jpg)",
            "background-size":"300px 200px",
            "background-repeat": "no-repeat",
            "left":(w-300)/2,
            "top":150,
            "z-index":5
        }).show();
    })

    $(".close").click(function(){
        $("#cover").remove();
        $("#login").hide();
    });
})
</script>
<div id="login" style="display: none;">
<h3>&nbsp&nbsp&nbsp&nbsp登录页面<span class="close">关闭</span></h3>
<form action="/login" method="post" name="register">
    <p><input type="text" name="name" placeholder="请输入用户名"/></p>
    <p><input type="text" name="pwd" placeholder="请输入密码"/></p>
    <p><input type="submit" value="登录" style="width: 50px;"><p>
         <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
</div>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    #login{
        display: none;
        border:1px solid #ccc;
        position: absolute;
        background: #fff;
        text-align: center;
    }
    #login p{
        margin-top:5px;
    }
    #login form{
        margin-top: 10%;
    }
    #login h3 {
        height:40px;
        line-height: 40px;
        font-size: 20px;
    }
    #login h3 span{
        float: right;
        cursor: pointer;
        font-size: 12px;
        line-height: 10px;
    }
    #login input{
        width: 70%;
        height: 25px;
        border-radius: 5px;
        border: 2px solid black;
    }
</style>
            <!-- 登录 -->


        </div>
    </div>
</div>
<script data-fixed="true">
var UDB_SDK_SWTICH = true;
</script>

    <!-- E 通用头部 -->
@yield('content')
    <div class="mod-sidebar">
    <div class="sidebar-hide">
        <ul class="sidebar-icon-list">
            <li class="sidebar-icon-item">
                <a class="sidebar-icon-link clickstat js-sub" href="http://i.huya.com/index.php?m=Subscribe" title="订阅" target="_blank" eid="click/navi/zuoce/sub" eid_desc="点击/导航/左侧导航/我的订阅">
                    <i class="sidebar-icon-sub"></i>
                    <span class="sidebar-title">订阅</span>
                </a>
            </li>
            <li class="sidebar-icon-item">
                <a class="sidebar-icon-link clickstat" href="http://www.huya.com/l" title="直播" eid="click/navi/zuoce/live" eid_desc="点击/导航/左侧导航/全部直播">
                    <i class="sidebar-icon-live"></i>
                    <span class="sidebar-title">直播</span>
                </a>
            </li>
            <li class="sidebar-icon-item">
                <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g" title="分类" eid="click/navi/zuoce/gametype" eid_desc="点击/导航/左侧导航/全部游戏">
                    <i class="sidebar-icon-type"></i>
                    <span class="sidebar-title">分类</span>
                </a>
            </li>
                        <li class="sidebar-icon-item ">
                <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100023" title="网游" eid="click/navi/zuoce/classify1" eid_desc="点击/导航/左侧导航/classify1">
                    <i style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpz3aAZJ1488336152.png');"></i>
                    <span class="sidebar-title">网游</span>
                </a>
            </li>
                        <li class="sidebar-icon-item ">
                <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100002" title="单机" eid="click/navi/zuoce/classify2" eid_desc="点击/导航/左侧导航/classify2">
                    <i style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpuKzEv31488336851.png');"></i>
                    <span class="sidebar-title">单机</span>
                </a>
            </li>
                        <li class="sidebar-icon-item ">
                <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100022" title="娱乐" eid="click/navi/zuoce/classify3" eid_desc="点击/导航/左侧导航/classify3">
                    <i style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpNhPhI81488336174.png');"></i>
                    <span class="sidebar-title">娱乐</span>
                </a>
            </li>
                        <li class="sidebar-icon-item ">
                <a class="sidebar-icon-link clickstat" href="http://www.huya.com/g/100004" title="手游" eid="click/navi/zuoce/classify4" eid_desc="点击/导航/左侧导航/classify4">
                    <i style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpJAXeoz1488336183.png');"></i>
                    <span class="sidebar-title">手游</span>
                </a>
            </li>
                    </ul>
        <span id="sidebar-show-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/open"  eid_desc="点击/导航/左侧导航/展开"></span>
        <a target="_blank" class="sidebar-icon-author" href="http://www.huya.com/e/zhubo">
            <i></i>
            <span>开直播</span>
        </a>
        <a href="http://jb.ccm.gov.cn/" target="_blank" style=" position: absolute;bottom: 70px;width: 100%;text-align: center;" class="gov-jb sq-gov-jb">举报</a>
    </div>
    <div class="sidebar-show">
        <div id="sidebar-scroll">
            <div class="sidebar-show-nav">
                <a href="http://i.huya.com/index.php?m=Subscribe" class="clickstat sidebar-show-line js-sub" target="_blank" eid="click/navi/zuoce/sub" eid_desc="点击/导航/左侧导航/我的订阅"><i class="sidebar-icon-sub"></i>我的订阅<span class="subscribe-text"> (请登录)</span></a>
                <a href="http://www.huya.com/l" class="clickstat sidebar-show-line" eid="click/navi/zuoce/live" eid_desc="点击/导航/左侧导航/全部直播"><i class="sidebar-icon-live"></i> 全部直播</a>
                <a href="http://www.huya.com/g" class="clickstat sidebar-show-line" eid="click/navi/zuoce/gametype" eid_desc="点击/导航/左侧导航/全部游戏"><i class="sidebar-icon-type"></i>全部分类</a>
            </div>

            <div class="sidebar-recom">
                <div class="m sidebar-show-line">
                    <a class="m-title clickstat" href="http://www.huya.com/g/100023" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1">
                        <i class="m-title-type" style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpz3aAZJ1488336152.png');"></i>
                        <span class="m-title-span">网游竞技</span>
                    </a>
                    <div class="m-bd">
                        <div class="recomend-list clearfix">

                            <a class="recomend-item clickstat" eid="click/navi/zuoce/remen1" eid_desc="点击/导航/左侧导航/热门1" href="http://www.huya.com/g/lol" title="英雄联盟">英雄联盟</a>
                                                </div>
                    </div>
                </div>
                <div class="m sidebar-show-line">
                    <a class="m-title clickstat" href="http://www.huya.com/g/100002" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2">
                        <i class="m-title-type" style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpuKzEv31488336851.png');"></i>
                        <span class="m-title-span">单机热游</span>
                    </a>
                    <div class="m-bd">
                        <div class="recomend-list clearfix">

                            <a class="recomend-item clickstat" eid="click/navi/zuoce/remen2" eid_desc="点击/导航/左侧导航/热门2" href="http://www.huya.com/g_pc" title="全部">全部</a>
                                                </div>
                    </div>
                </div>
                                                                <div class="m sidebar-show-line">
                    <a class="m-title clickstat" href="http://www.huya.com/g/100022" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3">
                        <i class="m-title-type" style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpNhPhI81488336174.png');"></i>
                        <span class="m-title-span">娱乐天地</span>
                    </a>
                    <div class="m-bd">
                        <div class="recomend-list clearfix">

                            <a class="recomend-item clickstat" eid="click/navi/zuoce/remen3" eid_desc="点击/导航/左侧导航/热门3" href="http://www.huya.com/g/1663" title="星秀">星秀</a>
                                                </div>
                    </div>
                </div>
                                                                <div class="m sidebar-show-line">
                    <a class="m-title clickstat" href="http://www.huya.com/g/100004" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4">
                        <i class="m-title-type" style="background-image: url('//huyaimg.msstatic.com/cdnimage/sidebarNavGroup/phpJAXeoz1488336183.png');"></i>
                        <span class="m-title-span">手游休闲</span>
                    </a>
                    <div class="m-bd">
                        <div class="recomend-list clearfix">

                            <a class="recomend-item clickstat" eid="click/navi/zuoce/remen4" eid_desc="点击/导航/左侧导航/热门4" href="http://www.huya.com/g/2336" title="王者荣耀">王者荣耀</a>
                                                </div>
                    </div>
                </div>
                                            </div>
            <div class="sidebar-banner" style="display:none">
                <a target="_blank" class="sidebar-banner-link clickstat third-clickstat" id="sidebarBanner" eid="click/push/leftnaviad" eid_desc="点击/推荐/左侧导航推荐图">
                </a>
            </div>
        </div>
        <div class="sidebar-tool">
            <a target="_blank" class="download clickstat" eid="click/navi/zuoce/xiazai" eid_desc="点击/导航/左侧导航/客户端下载" href="http://www.huya.com/download/" title="下载客户端"></a>
            <a target="_blank" class="toAnchor clickstat" eid="click/navi/zuoce/zhubo" eid_desc="点击/导航/左侧导航/我要做主播" href="http://www.huya.com//e/zhubo" title="我要直播"></a>
        </div>
        <a target="_blank" class="gov-jb clickstat" eid="click/navi/zuoce/jubao" eid_desc="点击/导航/左侧导航/举报" href="http://jb.ccm.gov.cn/" style="position: absolute;left: 14px;bottom: 80px; left: 80px; bottom: 55px; color: #666;">12318举报</a>
        <span id="sidebar-hide-btn" class="arrow-btn clickstat" eid="click/navi/zuoce/close"  eid_desc="点击/导航/左侧导航/收起"></span>
    </div>


</div>

    <script src="//a.msstatic.com/huya/main/lib/jq_ud_mod_4de7709.js" data-fixed="true"></script>
    <script src="//hd.huya.com/huya_err_monitor/huyahiidoweb_err_monitor-min.js" id="huyahiido_err_monitor" act="webhuyaerror" pageview="gamelist" data-fixed="true"></script>
    <script src="//a.msstatic.com/huya/main/js/headerFunction_76cd38a.js" data-fixed="true"></script>
    <script type="text/javascript" charset="utf-8" src="//a.msstatic.com/huya/main/pkg/auto_combine_c4419_7a3c469.js"></script>
<script>
        require("app/game-list");
    </script>
    <!--BODY_END-->
    <!-- S 页面公用功能 -->
    <script type="text/javascript" src="//a.msstatic.com/huya/main/widget/sidebar/sidebarFunction_c28b9f0.js" data-fixed="true"></script>

<!-- S 后台推送消息 -->
    <!--[if lte IE 7]>
    <script  type='text/javascript' src='//www.huya.com/base/js/push/json3.min.js'></script>
    <![endif]-->
    <!--[if lte IE 9]>
    <script type='text/javascript' src='//www.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>
    <![endif]-->
    <script data-fixed="true">
        var PUSH_PROXY_URL="//channelproxy.huya.com/";
        var WEB_PUSH_URL="webpush.huya.com";
        var PUSH_ENABLE=true;//推送开关
        var WEB_PUSH_TLS_ENABLE=true;//是否使用TLS
        var matchNoticeData=[];//赛事直播间预告数据
    </script>
    <script type='text/javascript' src='//www.huya.com/base/js/push/push-min.js?t=20170818'></script>
    <script type='text/javascript' src='//www.huya.com/base/js/push/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->    <!-- E 页面公用功能 -->
    <script type="text/javascript" src="//szhuodong.duowan.com/s/rp/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
    <script type="text/javascript" data-fixed="true">
        (function(win){
            var $win = $(win);
            var reportTimer = null;

            function report(){
                var oHref = parseQueryString(location.search);
                zhReport({
                    rso: oHref['promoter'] || oHref['rso'] || oHref['from'] || "",
                    rso_desc: oHref['rso_desc'] || "",
                    eid: "pageview/list",
                    eid_desc:"pageview/游戏列表"
                });
            }

            $win.on('load.report',function(){
                reportTimer && clearTimeout(reportTimer);
                report();
            });

            reportTimer = setTimeout(function(){
                $win.off('.report');
                report();
            }, 3500);

        })(window); 
    </script>
    <!-- S 通用底部 -->
    <script data-fixed="true">
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?51700b6c722f5bb4cf39906a596ea41f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <!-- E 通用底部 -->
    <script data-fixed="true">navigator.userAgent.toLocaleLowerCase().indexOf("chrome")<0&&(window.onerror=function(){try{console.log.apply(console,arguments)}catch(e){}return TT.isProd}),!function(e){e.loadScript(["//szhuodong.duowan.com/feq/huya/yy-f2e-huya.min"])}(function(){function e(t,n){var a=n[t];if(a){t++;var o=document.createElement("script");o.type="text/javascript",o.setAttribute("async","async"),o.onload=o.onreadystatechange=function(){return o.readyState&&"complete"!==o.readyState&&"loaded"!==o.readyState?!1:(o.onload=o.onreadystatechange=null,void e(t,n))};var r=new Date;r.setSeconds(0),r.setMilliseconds(0),r=r.getTime(),o.async=!0,o.src=a+"?_="+r,document.getElementsByTagName("head")[0].appendChild(o)}}return{loadScript:function(t){t&&t.length&&t instanceof Array&&e(0,t)}}}());</script>
</body>
</html>