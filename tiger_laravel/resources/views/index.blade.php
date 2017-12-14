@extends('article.common.base')
@section('content')
    <div class="mod-index-wrap">

        <!-- S 主屏背景 -->
                <div id="banner" class="J_g_resource" data-pos="home/beitou" data-rsc="2463" style="background-image: url('//livewebbs2.msstatic.com/huya_1512999954_content.jpg');">
                            <a class="left-banner clickstat third-clickstat" id="J_adLeft" data-thirdview="" data-thirdstat="" eid="click/push/beitou/left" eid_desc="点击/推荐/背投/左侧" href="http://layer.huya.com/201712activity/index" target="_blank"></a>
                                        <a class="right-banner clickstat third-clickstat" id="J_adRight" data-thirdstat="" eid="click/push/beitou/right" eid_desc="点击/推荐/背投/右侧" href="http://layer.huya.com/201712activity/index" target="_blank"></a>
                    </div>
                <!-- E 主屏背景 -->

        <!-- S 播放器模块 -->
        <div class="mod-index-main" id="js-main">
    <div class="main-hd">
        <div class="main-player">
           <div id="index_player">
            <img id="receiver" style="width:1010px;height:600px"/>
                <script type="text/javascript" charset="utf-8">
                var receiver_socket = new WebSocket("ws://127.0.0.1:8008");
                var image = document.getElementById('receiver');
                receiver_socket.onmessage = function(data)
                {
                    image.src=data.data;
                }
            </script></div>
        </div>
    </div>
     <div class="main-bd">
        <ul class="item-nav clearfix">
                    <li recommendSite="1" class="new-clickstat" report='{"eid":"click/position","position":"index/jdt/1","game_id":"2774","ayyuid":"1101272"}'>
                    <div class="item-pic">
                        <img src="//livewebbs2.msstatic.com/home_recommend_live_web_1513075266.jpg" alt="虎牙直播" onerror="this.onerror='';this.src='http://a.msstatic.com/huya/main/assets/img/default_focus.jpg'">
                        <div class="highlight"><i class="arrow"></i></div>
                    </div>
                </li>
                            <li recommendSite="2" class="new-clickstat" report='{"eid":"click/position","position":"index/jdt/2","game_id":"1964","ayyuid":"2923382"}'>
                    <div class="item-pic">
                        <img src="//livewebbs2.msstatic.com/home_recommend_live_web_1498017332.jpg" alt="虎牙直播" onerror="this.onerror='';this.src='http://a.msstatic.com/huya/main/assets/img/default_focus.jpg'">
                        <div class="highlight"><i class="arrow"></i></div>
                    </div>
                </li>
                            <li recommendSite="3" class="new-clickstat" report='{"eid":"click/position","position":"index/jdt/3","game_id":"1","ayyuid":"17363578"}'>
                    <div class="item-pic">
                        <img src="//livewebbs2.msstatic.com/home_recommend_live_web_1477039176.jpg" alt="虎牙直播" onerror="this.onerror='';this.src='http://a.msstatic.com/huya/main/assets/img/default_focus.jpg'">
                        <div class="highlight"><i class="arrow"></i></div>
                    </div>
                </li>
                            <li recommendSite="4" class="new-clickstat" report='{"eid":"click/position","position":"index/jdt/4","game_id":"1663","ayyuid":"1111011896"}'>
                    <div class="item-pic">
                        <img src="//livewebbs2.msstatic.com/home_recommend_live_web_1511775983.jpg" alt="虎牙直播" onerror="this.onerror='';this.src='http://a.msstatic.com/huya/main/assets/img/default_focus.jpg'">
                        <div class="highlight"><i class="arrow"></i></div>
                    </div>
                </li>
                            <li recommendSite="5" class="new-clickstat" report='{"eid":"click/position","position":"index/jdt/5","game_id":"2836","ayyuid":"1501374403"}'>
                    <div class="item-pic">
                        <img src="//livewebbs2.msstatic.com/home_recommend_live_web_1508312503.jpg" alt="虎牙直播" onerror="this.onerror='';this.src='http://a.msstatic.com/huya/main/assets/img/default_focus.jpg'">
                        <div class="highlight"><i class="arrow"></i></div>
                    </div>
                </li>
                            <li recommendSite="6" class="new-clickstat" report='{"eid":"click/position","position":"index/jdt/6","game_id":"2","ayyuid":"1209333813"}'>
                    <div class="item-pic">
                        <img src="//livewebbs2.msstatic.com/home_recommend_live_web_1453794772.jpg" alt="虎牙直播" onerror="this.onerror='';this.src='http://a.msstatic.com/huya/main/assets/img/default_focus.jpg'">
                        <div class="highlight"><i class="arrow"></i></div>
                    </div>
                </li>
                    </ul>
    </div>
</div>




        <!-- E 播放器模块 -->

        <!-- S 游戏分类 -->
        <div class="mod-game-wrap">
    <div class="mod-game-type clearfix">
                <div class="game-classify" >
            <h3>
                <a href="http://www.huya.com/g/100023" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/title1"}'>
                    <i style="background-image: url('//livewebbs2.msstatic.com/huya_hot_rec_theme_logo_1488335027.png')"></i>
                    网游竞技                    <span class="icon-link"></span>
                </a>
            </h3>
                        <ul class="game-classify-list clearfix">
                                <li>
                    <a href="http://www.huya.com/1901217947" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/1-1","game_id":"9","ayyuid":"1670601866"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/17124dab96a531b4ffd1f94b230311c75c06c9817656?imageview/4/0/w/136/h/76/blur/1" alt="125w魅力  3个全29T3 走走的直播"  title="125w魅力  3个全29T3 走走的直播">
                        </div>                       
                        <span class="game-type">QQ飞车</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">125w魅力  3个全29T3 走走</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/ahuameishe" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/1-2","game_id":"1219","ayyuid":"388560402"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/171239cf065bf6750fe0255c9138002d019eae36dc86?imageview/4/0/w/136/h/76/blur/1" alt="我是抠脚女王~，前方高能的直播"  title="我是抠脚女王~，前方高能的直播">
                        </div>                       
                        <span class="game-type">天涯明月刀</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">我是抠脚女王~，前方高能</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/si420" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/1-3","game_id":"393","ayyuid":"444563237"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/1712a6aef5ec5d4dc6a2d1c8035ff593227746470bd0?imageview/4/0/w/136/h/76/blur/1" alt="[斯佑天]来一波九职业竞技场挑战~的直播"  title="[斯佑天]来一波九职业竞技场挑战~的直播">
                        </div>                       
                        <span class="game-type">炉石传说</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">[斯佑天]来一波九职业竞技场挑战~</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/1890387180" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/1-4","game_id":"2174","ayyuid":"1662823558"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/171235344645c06c088590428afa42e1b0aff5d607a6?imageview/4/0/w/136/h/76/blur/1" alt="安可乐单排双号4500狂鼠 30血瓶房管的直播"  title="安可乐单排双号4500狂鼠 30血瓶房管的直播">
                        </div>                       
                        <span class="game-type">守望先锋</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">安可乐单排双号4500狂鼠 30血瓶房管</div>
                    </a>
                </li>
                   
            </ul>
                    </div>
                <div class="game-classify" >
            <h3>
                <a href="http://www.huya.com/g/100002" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/title2"}'>
                    <i style="background-image: url('//livewebbs2.msstatic.com/huya_hot_rec_theme_logo_1488335054.png')"></i>
                    单机热游                    <span class="icon-link"></span>
                </a>
            </h3>
                        <ul class="game-classify-list clearfix">
                                <li>
                    <a href="http://www.huya.com/chuhe" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/2-1","game_id":"1964","ayyuid":"294636272"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/1712e2169a71b1a89c4e4767dc90dda0d5d62af7b2b4?imageview/4/0/w/136/h/76/blur/1" alt="最精彩的游戏直播~的直播"  title="最精彩的游戏直播~的直播">
                        </div>                       
                        <span class="game-type">主机游戏</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">最精彩的游戏直播~</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/badaozongcai" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/2-2","game_id":"2793","ayyuid":"672985574"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/1712da28831f161f438a06e2c46d33f025fb98beda1a?imageview/4/0/w/136/h/76/blur/1" alt="王牌快递员小海报到的直播"  title="王牌快递员小海报到的直播">
                        </div>                       
                        <span class="game-type">绝地求生</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">王牌快递员小海报到</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/jianrenwang" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/2-3","game_id":"2683","ayyuid":"759423072"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/17126656fe57df4d7184996c52370cec5fd18802e70d?imageview/4/0/w/136/h/76/blur/1" alt="核心玩家：圣诞节奇幻之旅！！！的直播"  title="核心玩家：圣诞节奇幻之旅！！！的直播">
                        </div>                       
                        <span class="game-type">迷你世界</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">核心玩家：圣诞节奇幻之旅！！！</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/1978305752" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/2-4","game_id":"1732","ayyuid":"1730901527"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/1712ad9295ca0529774ee9af96b7da36fd147bcf06ca?imageview/4/0/w/136/h/76/blur/1" alt="梦幻大陆RPG服务器一起来玩的直播"  title="梦幻大陆RPG服务器一起来玩的直播">
                        </div>                       
                        <span class="game-type">我的世界</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">梦幻大陆RPG服务器一起来玩</div>
                    </a>
                </li>
                   
            </ul>
                    </div>
                <div class="game-classify" >
            <h3>
                <a href="http://www.huya.com/g/100022" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/title3"}'>
                    <i style="background-image: url('//livewebbs2.msstatic.com/huya_hot_rec_theme_logo_1488335035.png')"></i>
                    娱乐天地                    <span class="icon-link"></span>
                </a>
            </h3>
                        <ul class="game-classify-list clearfix">
                                <li>
                    <a href="http://www.huya.com/4359176" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/3-1","game_id":"1663","ayyuid":"1096896069"}'>
                        <div class="img-box">
                            <img class="pic" src="//huyaimg.msstatic.com/cdnimage/anchorpost/1009/60/f418558d9d2445b5043a9eda512d1a_1663_1502878081.jpg?imageview/4/0/w/136/h/76/blur/1" alt="战斗吧！！的直播"  title="战斗吧！！的直播">
                        </div>                       
                        <span class="game-type">星秀</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">战斗吧！！</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/hxmsxy" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/3-2","game_id":"2752","ayyuid":"1566935708"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/1712e2a1f3b499f13a497dbb9cb0d3d3d8e9aa0daa17?imageview/4/0/w/136/h/76/blur/1" alt="3分钟教你做最鲜美的皮皮虾、大闸蟹！的直播"  title="3分钟教你做最鲜美的皮皮虾、大闸蟹！的直播">
                        </div>                       
                        <span class="game-type">美食</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">3分钟教你做最鲜美的皮皮虾、大闸蟹！</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/90055491" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/3-3","game_id":"2633","ayyuid":"114023238"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/171205b8cf5007947fc9778b02c6a16632cc734644a7?imageview/4/0/w/136/h/76/blur/1" alt="【恐怖漫画】至死不渝的爱-伊藤润二的直播"  title="【恐怖漫画】至死不渝的爱-伊藤润二的直播">
                        </div>                       
                        <span class="game-type">二次元</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">【恐怖漫画】至死不渝的爱-伊藤润二</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/2023482443" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/3-4","game_id":"2836","ayyuid":"1770877838"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/17125e381ba262dbac51e9cbfdd2107a1b77c65b9bff?imageview/4/0/w/136/h/76/blur/1" alt="泥中美味尽入桶！的直播"  title="泥中美味尽入桶！的直播">
                        </div>                       
                        <span class="game-type">户外</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">泥中美味尽入桶！</div>
                    </a>
                </li>
                   
            </ul>
                    </div>
                <div class="game-classify" style="margin-right:0">
            <h3>
                <a href="http://www.huya.com/g/100004" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/title4"}'>
                    <i style="background-image: url('//livewebbs2.msstatic.com/huya_hot_rec_theme_logo_1488335045.png')"></i>
                    手游休闲                    <span class="icon-link"></span>
                </a>
            </h3>
                        <ul class="game-classify-list clearfix">
                                <li>
                    <a href="http://www.huya.com/haddis" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/4-1","game_id":"2336","ayyuid":"1354160941"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/1712ccd8a29ae7d56b4b49ef7dbeb586c9472b8f6f9f?imageview/4/0/w/136/h/76/blur/1" alt="李白的弟弟明世隐身冲国服第一~的直播"  title="李白的弟弟明世隐身冲国服第一~的直播">
                        </div>                       
                        <span class="game-type">王者荣耀</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">李白的弟弟明世隐身冲国服第一~</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/1905118486" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/4-2","game_id":"2413","ayyuid":"1674061413"}'>
                        <div class="img-box">
                            <img class="pic" src="//huyaimg.msstatic.com/cdnimage/anchorpost/1091/cc/740fb6dff7431fe119f16bb2b6d2ab_2413_1512736614.jpg?imageview/4/0/w/136/h/76/blur/1" alt="单人打4排 挑战极限吃鸡！的直播"  title="单人打4排 挑战极限吃鸡！的直播">
                        </div>                       
                        <span class="game-type">CF手游</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">单人打4排 挑战极限吃鸡！</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/xiaohan41172" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/4-3","game_id":"2411","ayyuid":"11840164"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/17122e1d14e2236b0f0338fc5c3a3f6b61b37ed00c23?imageview/4/0/w/136/h/76/blur/1" alt="抠脚球球不抠脚了？的直播"  title="抠脚球球不抠脚了？的直播">
                        </div>                       
                        <span class="game-type">球球大作战</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">抠脚球球不抠脚了？</div>
                    </a>
                </li>
                                <li>
                    <a href="http://www.huya.com/2172815183" target="_blank" class="new-clickstat" report='{"eid":"click/position","position":"index/remen/4-4","game_id":"1671","ayyuid":"2172663312"}'>
                        <div class="img-box">
                            <img class="pic" src="//screenshot.msstatic.com/yysnapshot/1712557136492cb8e40dcf949ee1852adbcea35b1b48?imageview/4/0/w/136/h/76/blur/1" alt="世界智力运动会象棋决赛现场直播的直播"  title="世界智力运动会象棋决赛现场直播的直播">
                        </div>                       
                        <span class="game-type">中国象棋</span>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <div class="game-classify-name">世界智力运动会象棋决赛现场直播</div>
                    </a>
                </li>
                   
            </ul>
                    </div>
          
        </div>
</div>

        <!-- E 游戏分类 -->

        <div class="box-placeholder"></div>


        <script class="data-placeholder" type="text" data-fixed="true">
            <!-- S 信息模块 -->
            <div class="mod-news-section clearfix">
                <!--S 推广 -->
                <div class="index-recommend-img" id="J_recImg">
    <div class="wrap">
                            <a class="link pic-box clickstat third-clickstat pic1" id="J_thirdView_1" title="年度总决赛" href="http://layer.huya.com/201712activity/index" target="_blank" eid="click/push/indexnews/picture1" eid_desc="点击/活动/首页新闻/图片1" data-thirdstat="" data-thirdview="">
                <img src="//livewebbs2.msstatic.com/huya_1513000016_content.jpg" onerror="this.onerror=null;this.src='//a.msstatic.com/huya/main/assets/img/default/330x210.jpg';" alt="年度总决赛">
            </a>
                                <a class="link pic-box clickstat third-clickstat pic2" id="J_thirdView_2" title="星秀 | 超级巨星-- 你就是下一个superstar" href="http://blog.huya.com/news/4993" target="_blank" eid="click/push/indexnews/picture2" eid_desc="点击/活动/首页新闻/图片2" data-thirdstat="" data-thirdview="">
                <img src="//livewebbs2.msstatic.com/huya_1512355918_content.jpg" onerror="this.onerror=null;this.src='//a.msstatic.com/huya/main/assets/img/default/160x210.jpg';" alt="星秀 | 超级巨星-- 你就是下一个superstar">
            </a>
                                <a class="link pic-box clickstat third-clickstat pic3" id="J_thirdView_3" title="户外|虎牙旅行达人X计划" href="http://blog.huya.com/news/4585" target="_blank" eid="click/push/indexnews/picture3" eid_desc="点击/活动/首页新闻/图片3" data-thirdstat="" data-thirdview="">
                <img src="//livewebbs2.msstatic.com/huya_1506413723_content.jpg" onerror="this.onerror=null;this.src='//a.msstatic.com/huya/main/assets/img/default/160x100.jpg';" alt="户外|虎牙旅行达人X计划">
            </a>
                                <a class="link pic-box clickstat third-clickstat pic3" id="J_thirdView_4" title="JJ斗地主双蛋有奖招募" href="http://blog.huya.com/news/5091" target="_blank" eid="click/push/indexnews/picture4" eid_desc="点击/活动/首页新闻/图片4" data-thirdstat="" data-thirdview="">
                <img src="//livewebbs2.msstatic.com/huya_1513062803_content.jpg" onerror="this.onerror=null;this.src='//a.msstatic.com/huya/main/assets/img/default/160x100.jpg';" alt="JJ斗地主双蛋有奖招募">
            </a>
                                <a class="link pic-box clickstat third-clickstat pic3" id="J_thirdView_5" title="酷玩【手工潮物】主播招募" href="http://blog.huya.com/news/4646" target="_blank" eid="click/push/indexnews/picture5" eid_desc="点击/活动/首页新闻/图片5" data-thirdstat="" data-thirdview="">
                <img src="//livewebbs2.msstatic.com/huya_1507860287_content.jpg" onerror="this.onerror=null;this.src='//a.msstatic.com/huya/main/assets/img/default/160x100.jpg';" alt="酷玩【手工潮物】主播招募">
            </a>
                </div>
</div>
                <!--E 推广 -->

                <!--S 新闻 -->
                <div class="news-box">
        <h2 class="news-title ellipsis"><a target="_blank" class="J_g_resource clickstat" data-pos="index/news/tit" data-rsc="336" eid="click/push/indexnews/topnews" eid_desc="点击/活动/首页新闻/头条" href="http://www.huya.com/kpl" title="KPL秋季赛 23日总决赛">KPL秋季赛 23日总决赛</a></h2>
        <div class="news-main">
                <ul class="news-list">
                                                                <li class="news-item"><em class="news-type"><a class="news-type-link" target="_blank" href="http://blog.huya.com/policy">政策</a></em>
                    <a target="_blank" href="http://blog.huya.com/policy/535" class="J_g_resource news-link clickstat ellipsis" data-pos="index/news/list/0" data-rsc="535" eid="click/push/indexnews/words1" eid_desc="点击/推荐/首页新闻/文字新闻1" title="虎牙主播及公会政策须知FAQ【必读】">
                        虎牙主播及公会政策须知FAQ【必读】                    </a><span class="news-time">12/04</span></li>
                                                        <li class="news-item"><em class="news-type"><a class="news-type-link" target="_blank" href="http://blog.huya.com/news">新闻</a></em>
                    <a target="_blank" href="http://blog.huya.com/news/5105" class="J_g_resource news-link clickstat ellipsis" data-pos="index/news/list/1" data-rsc="5105" eid="click/push/indexnews/words2" eid_desc="点击/推荐/首页新闻/文字新闻2" title="谋天下，做王者！乱世王者万元奖金招募">
                        谋天下，做王者！乱世王者万元奖金招募                    </a><span class="news-time">12/12</span></li>
                                                        <li class="news-item"><em class="news-type"><a class="news-type-link" target="_blank" href="http://blog.huya.com/news">新闻</a></em>
                    <a target="_blank" href="http://blog.huya.com/news/5103" class="J_g_resource news-link clickstat ellipsis" data-pos="index/news/list/2" data-rsc="5103" eid="click/push/indexnews/words3" eid_desc="点击/推荐/首页新闻/文字新闻3" title="12.11-12.17一周赛事精彩推荐">
                        12.11-12.17一周赛事精彩推荐                    </a><span class="news-time">12/12</span></li>
                                                        <li class="news-item"><em class="news-type"><a class="news-type-link" target="_blank" href="http://blog.huya.com/news">新闻</a></em>
                    <a target="_blank" href="http://blog.huya.com/news/5101" class="J_g_resource news-link clickstat ellipsis" data-pos="index/news/list/3" data-rsc="5101" eid="click/push/indexnews/words4" eid_desc="点击/推荐/首页新闻/文字新闻4" title="CF枪王排位S7赛季冲榜开启！万元奖金悬赏虎牙枪王">
                        CF枪王排位S7赛季冲榜开启！万元奖金悬赏虎牙枪王                    </a><span class="news-time">12/12</span></li>
                                                        <li class="news-item"><em class="news-type"><a class="news-type-link" target="_blank" href="http://blog.huya.com/news">新闻</a></em>
                    <a target="_blank" href="http://blog.huya.com/news/5099" class="J_g_resource news-link clickstat ellipsis" data-pos="index/news/list/4" data-rsc="5099" eid="click/push/indexnews/words5" eid_desc="点击/推荐/首页新闻/文字新闻5" title="第三期虎牙“吃鸡百分百”娱乐赛 西瓜视频势力乱入！">
                        第三期虎牙“吃鸡百分百”娱乐赛 西瓜视频势力乱入！                    </a><span class="news-time">12/12</span></li>
                                                        <li class="news-item"><em class="news-type"><a class="news-type-link" target="_blank" href="http://blog.huya.com/news">新闻</a></em>
                    <a target="_blank" href="http://blog.huya.com/news/5097" class="J_g_resource news-link clickstat ellipsis" data-pos="index/news/list/5" data-rsc="5097" eid="click/push/indexnews/words6" eid_desc="点击/推荐/首页新闻/文字新闻6" title="枪火游侠游侠杯不限号淘汰赛火热开启">
                        枪火游侠游侠杯不限号淘汰赛火热开启                    </a><span class="news-time">12/12</span></li>
                                                        <li class="news-item"><em class="news-type"><a class="news-type-link" target="_blank" href="http://blog.huya.com/news">新闻</a></em>
                    <a target="_blank" href="http://blog.huya.com/news/5095" class="J_g_resource news-link clickstat ellipsis" data-pos="index/news/list/6" data-rsc="5095" eid="click/push/indexnews/words7" eid_desc="点击/推荐/首页新闻/文字新闻7" title="2017《GTS车神争霸赛》圆满落幕">
                        2017《GTS车神争霸赛》圆满落幕                    </a><span class="news-time">12/12</span></li>
                        </ul>
            </div>
        <div class="hotTag">
                <a class="link clickstat J_g_resource" data-pos="index/news/tag/0" data-rsc="341" target="_blank" href="http://blog.huya.com/policy/535" title="政策须知FAQ" eid="click/push/indexnews/wordtab1" eid_desc="点击/活动/首页新闻/文字标签1">
            政策须知FAQ        </a>
                <a class="link clickstat J_g_resource" data-pos="index/news/tag/1" data-rsc="324" target="_blank" href="http://blog.huya.com/product/129" title="弹幕举报上线" eid="click/push/indexnews/wordtab2" eid_desc="点击/活动/首页新闻/文字标签2">
            弹幕举报上线        </a>
                <a class="link clickstat J_g_resource" data-pos="index/news/tag/2" data-rsc="293" target="_blank" href="http://report.12377.cn:13225/toreportinputNormal.do" title="有害信息举报" eid="click/push/indexnews/wordtab3" eid_desc="点击/活动/首页新闻/文字标签3">
            有害信息举报        </a>
                <a class="link clickstat J_g_resource" data-pos="index/news/tag/3" data-rsc="315" target="_blank" href="http://blog.huya.com/policy/438" title="儿童色情信息举报" eid="click/push/indexnews/wordtab4" eid_desc="点击/活动/首页新闻/文字标签4">
            儿童色情信息举报        </a>
            </div>
    </div>
                <!-- E 新闻 -->

                <!-- S 节目预告 -->
                <div class="program-preview-box" id="js-preview-box">
    <div class="preview-hd">
        <h2 class="title"><span class="hy-column-icon hy-column-program"></span>节目预告</h2>
    </div>
    <div class="preview-bd">
        <div class="preview-wrap">
            <ul class="preview-list">
                <!--  li 有 normal isOrder isLive 三种类，liveState有三种0，1，2状态,对应未开播,正在开播，停播  -->
                                                <li class="preview-item normal  on  preview-item-first  " data-event-id="3511" data-url="http://www.huya.com/tpts2017">
                    <i class="preview-line"></i>
                    <i class="preview-circle"></i>
                    <div class="preview-main">
                        <p class="preview-text">
                            <span class="preview-time">
                                今天12:00                            </span>
                            <a class="preview-link clickstat"  >2017腾讯棋牌年度盛典</a>
                        </p>
                        <div class="preview-pic-box clearfix">
                            <a class="preview-pic-link clickstat" >
                                <img data-original="//huyaimg.msstatic.com/cdnimage/upcoming/up_15129860486125_pic.jpg" src="//a.msstatic.com/huya/main/assets/img/default/195x70.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/195x70.jpg';" alt="2017腾讯棋牌年度盛典预告">
                            </a>
                            <a class="preview-btn clickstat"  data-event-id="3511"   eid="click/program/book" eid_desc="点击/节目/预约" title="点击预订"  >
                                <span class="preview-btn-icon"></span>
                                <span class="preview-btn-text">预订</span>
                            </a>
                        </div>
                    </div>
                                        <textarea class="preview-digest-textarea">12月13日-22日,千万奖金赛事打响,名家云集齐聚三亚,顶尖棋牌赛事高手对决!</textarea>
                                    </li>
                                                <li class="preview-item normal  " data-event-id="3513" data-url="http://www.huya.com/neso2">
                    <i class="preview-line"></i>
                    <i class="preview-circle"></i>
                    <div class="preview-main">
                        <p class="preview-text">
                            <span class="preview-time">
                                15日10:30                            </span>
                            <a class="preview-link clickstat"  >NESO电子竞技公开赛</a>
                        </p>
                        <div class="preview-pic-box clearfix">
                            <a class="preview-pic-link clickstat" >
                                <img data-original="//huyaimg.msstatic.com/cdnimage/upcoming/up_15129867419853_pic.jpg" src="//a.msstatic.com/huya/main/assets/img/default/195x70.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/195x70.jpg';" alt="NESO电子竞技公开赛预告">
                            </a>
                            <a class="preview-btn clickstat"  data-event-id="3513"   eid="click/program/book" eid_desc="点击/节目/预约" title="点击预订"  >
                                <span class="preview-btn-icon"></span>
                                <span class="preview-btn-text">预订</span>
                            </a>
                        </div>
                    </div>
                                        <textarea class="preview-digest-textarea">NESO2017全国总决赛落户四川！LOL王者荣耀等多支职业战队参战！12月15日10:30，16日-17日11:00，快来观战吧~</textarea>
                                    </li>
                                                <li class="preview-item normal  " data-event-id="3521" data-url="http://www.huya.com/2172841159">
                    <i class="preview-line"></i>
                    <i class="preview-circle"></i>
                    <div class="preview-main">
                        <p class="preview-text">
                            <span class="preview-time">
                                16日13:30                            </span>
                            <a class="preview-link clickstat"  >2018《快公司》大会盛典</a>
                        </p>
                        <div class="preview-pic-box clearfix">
                            <a class="preview-pic-link clickstat" >
                                <img data-original="//huyaimg.msstatic.com/cdnimage/upcoming/up_15130803515489_pic.jpg" src="//a.msstatic.com/huya/main/assets/img/default/195x70.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/195x70.jpg';" alt="2018《快公司》大会盛典预告">
                            </a>
                            <a class="preview-btn clickstat"  data-event-id="3521"   eid="click/program/book" eid_desc="点击/节目/预约" title="点击预订"  >
                                <span class="preview-btn-icon"></span>
                                <span class="preview-btn-text">预订</span>
                            </a>
                        </div>
                    </div>
                                        <textarea class="preview-digest-textarea">12月16日13点-20点，北京五棵松AMG·LIVE，2018快公司大会，美国三大商业媒体之一《快公司FastCompany》主办，带你来一场跨越40年的思想之旅，未来不同，你，当不同。</textarea>
                                    </li>
                                                <li class="preview-item normal  " data-event-id="3510" data-url="http://www.huya.com/naruto2017">
                    <i class="preview-line"></i>
                    <i class="preview-circle"></i>
                    <div class="preview-main">
                        <p class="preview-text">
                            <span class="preview-time">
                                16日18:00                            </span>
                            <a class="preview-link clickstat"  >火影忍者年度预选赛</a>
                        </p>
                        <div class="preview-pic-box clearfix">
                            <a class="preview-pic-link clickstat" >
                                <img data-original="//huyaimg.msstatic.com/cdnimage/upcoming/up_15129855569573_pic.jpg" src="//a.msstatic.com/huya/main/assets/img/default/195x70.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/195x70.jpg';" alt="火影忍者年度预选赛预告">
                            </a>
                            <a class="preview-btn clickstat"  data-event-id="3510"   eid="click/program/book" eid_desc="点击/节目/预约" title="点击预订"  >
                                <span class="preview-btn-icon"></span>
                                <span class="preview-btn-text">预订</span>
                            </a>
                        </div>
                    </div>
                                        <textarea class="preview-digest-textarea">火影忍者手游2017无差别年度总决赛预选赛正式启动，12月16日18:00准时直播！</textarea>
                                    </li>
                                                <li class="preview-item normal  " data-event-id="3489" data-url="http://www.huya.com/kpl">
                    <i class="preview-line"></i>
                    <i class="preview-circle"></i>
                    <div class="preview-main">
                        <p class="preview-text">
                            <span class="preview-time">
                                23日18:00                            </span>
                            <a class="preview-link clickstat"  >KPL王者百万大奖堂</a>
                        </p>
                        <div class="preview-pic-box clearfix">
                            <a class="preview-pic-link clickstat" >
                                <img data-original="//huyaimg.msstatic.com/cdnimage/upcoming/up_15126358089896_pic.jpg" src="//a.msstatic.com/huya/main/assets/img/default/195x70.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/195x70.jpg';" alt="KPL王者百万大奖堂预告">
                            </a>
                            <a class="preview-btn clickstat"  data-event-id="3489"   eid="click/program/book" eid_desc="点击/节目/预约" title="点击预订"  >
                                <span class="preview-btn-icon"></span>
                                <span class="preview-btn-text">预订</span>
                            </a>
                        </div>
                    </div>
                                        <textarea class="preview-digest-textarea">主播、观众、嘉宾共同参与的答题节目，每个KPL比赛日赛前一小时与你相约，共同挑战百万大奖。</textarea>
                                    </li>
                                                <li class="preview-item normal  " data-event-id="3208" data-url="http://www.huya.com/kpl">
                    <i class="preview-line"></i>
                    <i class="preview-circle"></i>
                    <div class="preview-main">
                        <p class="preview-text">
                            <span class="preview-time">
                                23日19:00                            </span>
                            <a class="preview-link clickstat"  >王者荣耀KPL秋季赛</a>
                        </p>
                        <div class="preview-pic-box clearfix">
                            <a class="preview-pic-link clickstat" >
                                <img data-original="//huyaimg.msstatic.com/cdnimage/upcoming/up_15057162860344_pic.jpg" src="//a.msstatic.com/huya/main/assets/img/default/195x70.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/195x70.jpg';" alt="王者荣耀KPL秋季赛预告">
                            </a>
                            <a class="preview-btn clickstat"  data-event-id="3208"   eid="click/program/book" eid_desc="点击/节目/预约" title="点击预订"  >
                                <span class="preview-btn-icon"></span>
                                <span class="preview-btn-text">预订</span>
                            </a>
                        </div>
                    </div>
                                        <textarea class="preview-digest-textarea">经历休赛期的人员调整与重组、赛制改变，老牌劲旅，后起新秀，竞技豪门，他们将用怎样的状态与实力来迎接本次比赛，让我们拭目以待！</textarea>
                                    </li>
                            </ul>
        </div>
    </div>
</div>
                <!-- E 节目预告 -->
            </div>
            <!-- E 信息模块 -->

            <div class="mod-index-list mod-index-recommend clearfix">
                <!-- S 热门分类 -->
                <div class="nav-recommend">
        <div class="box recommend-box">
        <div class="box-hd">
            <h2 class="title"><span class="hy-column-icon hy-column-game"></span><a class="clickstat" eid="click/index/ModuleTitle/TopCategories" eid_desc="点击/首页/模块标题/热门分类" href="http://www.huya.com/g" target="_blank">热门分类</a></h2>
            <a class="more-info clickstat" eid="click/index/ModuleTitle/MoreCategories" eid_desc="点击/首页/模块标题/更多分类" href="http://www.huya.com/g" target="_blank">更多<i class="index-more-icon"></i></a>
            <span class="box-hd-tip">当前共有<strong>239</strong>款游戏直播</span>
        </div>
        <div class="box-bd">
            <style>.game-list-item{float:left;overflow:hidden;width:134px;margin:0 18px 20px 0;font-size:12px;vertical-align:top;letter-spacing:normal;word-spacing:normal;border:2px solid #F7F7F7;background:#FFF;-moz-box-sizing:border-box;box-sizing:border-box}.game-list-item *{-moz-box-sizing:border-box;box-sizing:border-box}.game-list-item:hover{border-color:#f80}.game-list-item .pic{display:block;width:100%;height:100%}.game-list-item .pic .pic-img{width:100%}.game-list-item .title{display:block;overflow:hidden;margin:6px 0 4px;font-size:14px;transition:color .2s ease-out;text-align:center;white-space:nowrap;text-overflow:ellipsis;-ms-text-overflow:ellipsis;word-wrap:normal;color:#555;-o-text-overflow:ellipsis}.game-list-item:hover .pic-img{opacity:.7;filter:alpha(opacity=70)}.game-list-item:hover .title{text-decoration:none;color:#f80}</style>
            <ul class="game-list clearfix">
                                                    <li class="game-list-item" gid="1">
        <a target="_blank" href="http://www.huya.com/g/lol" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/1","game_id":"1"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/1-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="英雄联盟" title="英雄联盟">
        <h3 class="title">英雄联盟</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="2793">
        <a target="_blank" href="http://www.huya.com/g/2793" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/2","game_id":"2793"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/2793-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="绝地求生" title="绝地求生">
        <h3 class="title">绝地求生</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="2413">
        <a target="_blank" href="http://www.huya.com/g/cfm" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/3","game_id":"2413"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/2413-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="CF手游" title="CF手游">
        <h3 class="title">CF手游</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="2336">
        <a target="_blank" href="http://www.huya.com/g/wzry" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/4","game_id":"2336"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/2336-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="王者荣耀" title="王者荣耀">
        <h3 class="title">王者荣耀</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="100064">
        <a target="_blank" href="http://www.huya.com/g/100064" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/5","game_id":"100064"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/100064-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="吃鸡手游" title="吃鸡手游">
        <h3 class="title">吃鸡手游</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="1663">
        <a target="_blank" href="http://www.huya.com/g/xingxiu" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/6","game_id":"1663"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/1663-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="星秀" title="星秀">
        <h3 class="title">星秀</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="100032">
        <a target="_blank" href="http://www.huya.com/g/100032" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/7","game_id":"100032"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/100032-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="主机游戏" title="主机游戏">
        <h3 class="title">主机游戏</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="4">
        <a target="_blank" href="http://www.huya.com/g/cf" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/8","game_id":"4"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/4-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="穿越火线" title="穿越火线">
        <h3 class="title">穿越火线</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="2168">
        <a target="_blank" href="http://www.huya.com/g/2168" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/9","game_id":"2168"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/2168-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="颜值" title="颜值">
        <h3 class="title">颜值</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="2">
        <a target="_blank" href="http://www.huya.com/g/dnf" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/10","game_id":"2"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/2-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="地下城与勇士" title="地下城与勇士">
        <h3 class="title">地下城与勇士</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="2633">
        <a target="_blank" href="http://www.huya.com/g/2633" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/11","game_id":"2633"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/2633-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="二次元" title="二次元">
        <h3 class="title">二次元</h3>
    </a>
</li>
                                                        <li class="game-list-item" gid="1732">
        <a target="_blank" href="http://www.huya.com/g/MC" class="pic new-clickstat" report='{"eid":"click/postion","position":"index/gameCard/12","game_id":"1732"}'>
        <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/1732-S.jpg?t=1513130400" src="//a.msstatic.com/huya/main/assets/img/default/240x360.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="我的世界" title="我的世界">
        <h3 class="title">我的世界</h3>
    </a>
</li>
                                </ul>
        </div>
    </div>
    </div>
                <!-- E 热门分类 -->

                <!-- S 明星大神模块 -->
                <div class="star-box">
    <div class="star-hd">
        <a class="star-hd-link clickstat" href="http://www.huya.com/e/zhubo" target="_blank" eid="click/home/becomeAnchor" eid_desc="点击/首页/成为主播">成为主播 <i class="index-more-icon"></i></a>
        <h2 class="title"><span class="hy-column-icon hy-column-start"></span><a target="_blank" href="http://www.huya.com/l#tag51" class="star-title-link hiido_stat clickstat" hiido_code="10005721" eid="click/home/dashen" eid_desc="点击/首页/明星大神">明星大神</a></h2>
    </div>
    <div class="star-bd">
        <div class="star-content">
            <ul class="star-list clearfix">
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/chuhe" target="_blank" eid="click/home/dashen/dashen1" eid_desc="点击/首页/大神/大神1" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_229813522_b1464780659.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="楚河的直播" title="楚河的直播">
                        </div>
                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>
                                                <div class="text">
                            <h3 class="star-name">楚河</h3>
                            <div class="star-info" title="单机全能艺术家，世界挖掘机收藏家，直播三十年。">
                                单机全能艺术家，世界挖掘机收藏家，直播三十年。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/a16789" target="_blank" eid="click/home/dashen/dashen2" eid_desc="点击/首页/大神/大神2" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1391089114_b1465291548.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="安德罗妮的直播" title="安德罗妮的直播">
                        </div>
                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>
                                                <div class="text">
                            <h3 class="star-name">安德罗妮</h3>
                            <div class="star-info" title="炉石传说一哥，神抽狗协会会长，麾下十万军师。">
                                炉石传说一哥，神抽狗协会会长，麾下十万军师。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/bugqiu" target="_blank" eid="click/home/dashen/dashen3" eid_desc="点击/首页/大神/大神3" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1313214123_b1464780733.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="仇东生的直播" title="仇东生的直播">
                        </div>
                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>
                                                <div class="text">
                            <h3 class="star-name">仇东生</h3>
                            <div class="star-info" title="BUG仇，DNF世界冠军，世界第一魔道，抗韩第一人。">
                                BUG仇，DNF世界冠军，世界第一魔道，抗韩第一人。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/qicai" target="_blank" eid="click/home/dashen/dashen4" eid_desc="点击/首页/大神/大神4" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_900586_b1474181104.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="七彩的直播" title="七彩的直播">
                        </div>
                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>
                                                <div class="text">
                            <h3 class="star-name">七彩</h3>
                            <div class="star-info" title="虎牙剑灵第一人气主播，黑风魔女世界首杀带领者。">
                                虎牙剑灵第一人气主播，黑风魔女世界首杀带领者。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/magicwin" target="_blank" eid="click/home/dashen/dashen5" eid_desc="点击/首页/大神/大神5" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1681435395_b1464780769.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="魔法之风的直播" title="魔法之风的直播">
                        </div>
                                                    <i class="live-flag"><span class="live-icon"></span>直播</i>
                                                <div class="text">
                            <h3 class="star-name">魔法之风</h3>
                            <div class="star-info" title="中国炉石选手的外战英雄，世界第八的顶尖高手。">
                                中国炉石选手的外战英雄，世界第八的顶尖高手。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/godv" target="_blank" eid="click/home/dashen/dashen6" eid_desc="点击/首页/大神/大神6" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_442654609_b1512648787.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="韦神的直播" title="韦神的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">韦神</h3>
                            <div class="star-info" title="韦神，LPL冠军；绝地求生4AM战队核心">
                                韦神，LPL冠军；绝地求生4AM战队核心                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/uzi" target="_blank" eid="click/home/dashen/dashen7" eid_desc="点击/首页/大神/大神7" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1927556408_b1484711021.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Uzi的直播" title="Uzi的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">Uzi</h3>
                            <div class="star-info" title="小狗，世界第一ADC，2016LOL全明星Solo冠军。">
                                小狗，世界第一ADC，2016LOL全明星Solo冠军。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/dongxiaosa" target="_blank" eid="click/home/dashen/dashen8" eid_desc="点击/首页/大神/大神8" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_917707_b1464780837.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="董小飒的直播" title="董小飒的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">董小飒</h3>
                            <div class="star-info" title="连续两届YSL冠军得主，年度最受欢迎男主播。">
                                连续两届YSL冠军得主，年度最受欢迎男主播。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/sgjsheng" target="_blank" eid="click/home/dashen/dashen9" eid_desc="点击/首页/大神/大神9" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_10064_b1464780675.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="贱圣的直播" title="贱圣的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">贱圣</h3>
                            <div class="star-info" title="小贱贱，主机党实力主播，著名游戏导演。">
                                小贱贱，主机党实力主播，著名游戏导演。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/miss" target="_blank" eid="click/home/dashen/dashen10" eid_desc="点击/首页/大神/大神10" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1639423385_b1464780786.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Miss大小姐的直播" title="Miss大小姐的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">Miss大小姐</h3>
                            <div class="star-info" title="中国LOL第一女解说，国服最具人气女玩家。">
                                中国LOL第一女解说，国服最具人气女玩家。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/saonan" target="_blank" eid="click/home/dashen/dashen11" eid_desc="点击/首页/大神/大神11" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_770276_b1486977345.png" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="骚男的直播" title="骚男的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">骚男</h3>
                            <div class="star-info" title="天有多高，手有多骚，英雄联盟人气主播，行走的表情包。">
                                天有多高，手有多骚，英雄联盟人气主播，行走的表情包。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/xiaoyugame" target="_blank" eid="click/home/dashen/dashen12" eid_desc="点击/首页/大神/大神12" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_932805375_b1464780578.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="小宇的直播" title="小宇的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">小宇</h3>
                            <div class="star-info" title="热游直播代言人，虎牙单机COS直播爱好者。">
                                热游直播代言人，虎牙单机COS直播爱好者。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/board" target="_blank" eid="click/home/dashen/dashen13" eid_desc="点击/首页/大神/大神13" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_79390772_b1465291599.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="萌太奇的直播" title="萌太奇的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">萌太奇</h3>
                            <div class="star-info" title="炉石传说一姐，江南小卖部老板娘，一孕傻三年。">
                                炉石传说一姐，江南小卖部老板娘，一孕傻三年。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/ktsmeb" target="_blank" eid="click/home/dashen/dashen14" eid_desc="点击/首页/大神/大神14" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013047123_b1494577569.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Smeb的直播" title="Smeb的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">Smeb</h3>
                            <div class="star-info" title="KT战队上单选手，世界第一上单">
                                KT战队上单选手，世界第一上单                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/ktpawn" target="_blank" eid="click/home/dashen/dashen15" eid_desc="点击/首页/大神/大神15" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013063494_b1494577685.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Pawn的直播" title="Pawn的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">Pawn</h3>
                            <div class="star-info" title="KT战队中单选手，世界顶级中单选手，胖爹">
                                KT战队中单选手，世界顶级中单选手，胖爹                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/ktdeft" target="_blank" eid="click/home/dashen/dashen16" eid_desc="点击/首页/大神/大神16" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013074130_b1494577911.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Deft的直播" title="Deft的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">Deft</h3>
                            <div class="star-info" title="KT战队ADC，世界顶级ADC，羊驼">
                                KT战队ADC，世界顶级ADC，羊驼                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/ktmata" target="_blank" eid="click/home/dashen/dashen17" eid_desc="点击/首页/大神/大神17" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013047662_b1494577937.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Mata的直播" title="Mata的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">Mata</h3>
                            <div class="star-info" title="KT战队辅助选手，世界顶尖辅助，英雄海">
                                KT战队辅助选手，世界顶尖辅助，英雄海                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/chenzihao" target="_blank" eid="click/home/dashen/dashen18" eid_desc="点击/首页/大神/大神18" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2177114520_b1512467393.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="陈子豪的直播" title="陈子豪的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">陈子豪</h3>
                            <div class="star-info" title="陈子豪，人称“左手狙神”，CF大神，我的世界红石专家">
                                陈子豪，人称“左手狙神”，CF大神，我的世界红石专家                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/ktscore" target="_blank" eid="click/home/dashen/dashen19" eid_desc="点击/首页/大神/大神19" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2013048177_b1494577960.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Score的直播" title="Score的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">Score</h3>
                            <div class="star-info" title="KT战队打野选手，原KTB战队AD，后转型打野">
                                KT战队打野选手，原KTB战队AD，后转型打野                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/xuanxing" target="_blank" eid="click/home/dashen/dashen20" eid_desc="点击/首页/大神/大神20" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1718236446_b1479114243.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="炫星的直播" title="炫星的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">炫星</h3>
                            <div class="star-info" title="球球第一主播，Huya619战队队员，BGF最佳人气选手。">
                                球球第一主播，Huya619战队队员，BGF最佳人气选手。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/yumiko" target="_blank" eid="click/home/dashen/dashen21" eid_desc="点击/首页/大神/大神21" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_635563237_b1464780407.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Yumiko的直播" title="Yumiko的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">Yumiko</h3>
                            <div class="star-info" title="前魔兽争霸3职业选手，WC3L世界总决赛亚军。">
                                前魔兽争霸3职业选手，WC3L世界总决赛亚军。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/echo1022" target="_blank" eid="click/home/dashen/dashen22" eid_desc="点击/首页/大神/大神22" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2106279008_b1512628938.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="回音哥的直播" title="回音哥的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">回音哥</h3>
                            <div class="star-info" title="面具歌王，中国内地流行乐男歌手,川普老司机">
                                面具歌王，中国内地流行乐男歌手,川普老司机                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/xinghen" target="_blank" eid="click/home/dashen/dashen23" eid_desc="点击/首页/大神/大神23" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_383757_b1464780390.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="星痕的直播" title="星痕的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">星痕</h3>
                            <div class="star-info" title="专业OB韩服高端局解说，语速极快。">
                                专业OB韩服高端局解说，语速极快。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/badao" target="_blank" eid="click/home/dashen/dashen24" eid_desc="点击/首页/大神/大神24" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_13955_b1464780855.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="霸道的直播" title="霸道的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">霸道</h3>
                            <div class="star-info" title="DNF知名土豪，毁区第一人，支撑直播界半壁江山。">
                                DNF知名土豪，毁区第一人，支撑直播界半壁江山。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/lijiu" target="_blank" eid="click/home/dashen/dashen25" eid_desc="点击/首页/大神/大神25" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1841420205_b1477022367.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="李九的直播" title="李九的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">李九</h3>
                            <div class="star-info" title="王者第一专业官方解说，专研战队战术，套路王。">
                                王者第一专业官方解说，专研战队战术，套路王。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/peixiaofeng" target="_blank" eid="click/home/dashen/dashen26" eid_desc="点击/首页/大神/大神26" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1773664461_b1477560199.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="裴小峰的直播" title="裴小峰的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">裴小峰</h3>
                            <div class="star-info" title="游戏达人，原创游戏解说，王者荣耀核心玩家。">
                                游戏达人，原创游戏解说，王者荣耀核心玩家。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/longdd" target="_blank" eid="click/home/dashen/dashen27" eid_desc="点击/首页/大神/大神27" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_14837713_b1464780643.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="longdd的直播" title="longdd的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">longdd</h3>
                            <div class="star-info" title="龙弟弟，DOTA职业选手，DOTA界元老之一。">
                                龙弟弟，DOTA职业选手，DOTA界元老之一。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/qingfeng" target="_blank" eid="click/home/dashen/dashen28" eid_desc="点击/首页/大神/大神28" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_1862797660_b1478661619.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="清风徐来的直播" title="清风徐来的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">清风徐来</h3>
                            <div class="star-info" title="球球粉丝眼里的老大，王祖蓝心中的大神。">
                                球球粉丝眼里的老大，王祖蓝心中的大神。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/xiongrui" target="_blank" eid="click/home/dashen/dashen29" eid_desc="点击/首页/大神/大神29" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_339085_b1464780501.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="小熊的直播" title="小熊的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">小熊</h3>
                            <div class="star-info" title="《问道》知名道行第一人，问道第六届名人争霸赛冠军。">
                                《问道》知名道行第一人，问道第六届名人争霸赛冠军。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/laosijikuangrrr" target="_blank" eid="click/home/dashen/dashen30" eid_desc="点击/首页/大神/大神30" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_30568775_b1477022428.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="狂人的直播" title="狂人的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">狂人</h3>
                            <div class="star-info" title="王者荣耀官方解说，专业老司机，职业花式翻车。">
                                王者荣耀官方解说，专业老司机，职业花式翻车。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/yidong" target="_blank" eid="click/home/dashen/dashen31" eid_desc="点击/首页/大神/大神31" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_2096611831_b1512628704.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="以冬的直播" title="以冬的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">以冬</h3>
                            <div class="star-info" title="知名二次元歌手，广播剧声优，网易认证音乐人">
                                知名二次元歌手，广播剧声优，网易认证音乐人                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/ximen" target="_blank" eid="click/home/dashen/dashen32" eid_desc="点击/首页/大神/大神32" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_398815955_b1464780462.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="西门的直播" title="西门的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">西门</h3>
                            <div class="star-info" title="电竞孔子，西门剑姬，门生遍天下。">
                                电竞孔子，西门剑姬，门生遍天下。                            </div>
                        </div>
                    </a>
                </li>
                            <li class="star-item">
                    <a  class="star-link clickstat" href="http://www.huya.com/tonghua" target="_blank" eid="click/home/dashen/dashen33" eid_desc="点击/首页/大神/大神33" >
                        <div class="pic">
                            <img data-original="//livewebbs2.msstatic.com/huya_famous_b_305131670_b1464780424.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; alert(1); this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="童话的直播" title="童话的直播">
                        </div>
                                                <div class="text">
                            <h3 class="star-name">童话</h3>
                            <div class="star-info" title="国服第一女ADC，为数不多的女王者">
                                国服第一女ADC，为数不多的女王者                            </div>
                        </div>
                    </a>
                </li>
                        </ul>
        </div>
    </div>
</div>
                <!-- E 明星大神模块 -->
            </div>

            <!-- S 游戏列表 -->
            <div class="mod-index-list">
                    <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_14919794008412_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/wzry" eid="click/index/ModuleTitle/wzry" eid_desc="点击/首页/模块标题/王者荣耀">王者荣耀</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/wzryLabel" eid_desc="点击/首页/模块标题/王者荣耀标签">
                                                    <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/guying">
                            孤影                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/chaojie">
                            小潮                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1778020527">
                            曹操                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class="" href="http://www.huya.com/haddis">
                            哈迪斯                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/housangun">
                            猴三棍                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/tingxiaojie">
                            婷小姐                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/13736172">
                            上好佳                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/laosi">
                            老四                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>1044</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/wzry" eid="click/index/ModuleTitle/wzryMore" eid_desc="点击/首页/模块标题/王者荣耀更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="2336">
        <a href="http://www.huya.com/haddis" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2336/1","game_id":"2336","ayyuid":"1354160941"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712a978abec18ce713502b497d5c505008d393b0bbe?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="哈迪斯的直播" title="哈迪斯的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/haddis" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2336/1","game_id":"2336","ayyuid":"1354160941"}' title="李白的弟弟明世隐身冲国服第一~" target="_blank">李白的弟弟明世隐身冲国服第一~</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1025/47/ebd8d06fcad9e3048cfac92e515c48_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="哈迪斯" title="哈迪斯">
            <i class="nick" title="哈迪斯">哈迪斯</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">23.1万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2336">
        <a href="http://www.huya.com/wjz520cx" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2336/2","game_id":"2336","ayyuid":"1539218884"}'>
        <img class="pic" data-original="//huyaimg.msstatic.com/cdnimage/anchorpost/1064/50/31ec45ae25460bfccc5ec977ea3f65_2336_1513078416.jpg?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="东辰-心态的直播" title="东辰-心态的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/wjz520cx" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2336/2","game_id":"2336","ayyuid":"1539218884"}' title="明世连胜上王者，输1000元" target="_blank">明世连胜上王者，输1000元</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1064/50/31ec45ae25460bfccc5ec977ea3f65_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="东辰-心态" title="东辰-心态">
            <i class="nick" title="东辰-心态">东辰-心态</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">12.4万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2336">
        <a href="http://www.huya.com/1814191475" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2336/3","game_id":"2336","ayyuid":"1602778506"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/17124a966302d4a28176dbbdf2127d12c037409a5f84?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="啊毛的直播" title="啊毛的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/1814191475" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2336/3","game_id":"2336","ayyuid":"1602778506"}' title="曾经520星老后裔 挑战100%连胜" target="_blank">曾经520星老后裔 挑战100%连胜</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1059/d6/0d0f7d1caa0c58b4485a212ce47613_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="啊毛" title="啊毛">
            <i class="nick" title="啊毛">啊毛</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">11.6万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2336">
        <a href="http://www.huya.com/1986468457" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2336/4","game_id":"2336","ayyuid":"1738051752"}'>
        <img class="pic" data-original="//huyaimg.msstatic.com/cdnimage/anchorpost/1009/c7/39391a6bdcd42ffe32f59bfe22250d_2336_1513066083.jpg?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="LD-疯行兄弟的直播" title="LD-疯行兄弟的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/1986468457" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2336/4","game_id":"2336","ayyuid":"1738051752"}' title="明世隐 自爆卡车套路冲国服" target="_blank">明世隐 自爆卡车套路冲国服</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1009/c7/39391a6bdcd42ffe32f59bfe22250d_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="LD-疯行兄弟" title="LD-疯行兄弟">
            <i class="nick" title="LD-疯行兄弟">LD-疯行兄弟</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">9.6万</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_15046861170767_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/2793" eid="click/index/ModuleTitle/2793" eid_desc="点击/首页/模块标题/绝地求生">绝地求生</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/2793Label" eid_desc="点击/首页/模块标题/绝地求生标签">
                                                    <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/godv">
                            韦神                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/xiaonaigou">
                            小跟班                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class="" href="http://www.huya.com/badaozongcai">
                            小海                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/lafeng">
                            拉风龙                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/shaoxia90327">
                            少侠                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/">
                            权威                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/quedee">
                            德子                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/haoren">
                            星魂                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/ljungta">
                            L君                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>559</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/2793" eid="click/index/ModuleTitle/2793More" eid_desc="点击/首页/模块标题/绝地求生更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="2793">
        <a href="http://www.huya.com/badaozongcai" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2793/1","game_id":"2793","ayyuid":"672985574"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712ace16a53119affef8934dffc71fc64700fdfc9df?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="Style丶小海-90327的直播" title="Style丶小海-90327的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/badaozongcai" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2793/1","game_id":"2793","ayyuid":"672985574"}' title="王牌快递员小海报到" target="_blank">王牌快递员小海报到</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1012/84/b525c936595d6595fc1faa681f081a_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Style丶小海-90327" title="Style丶小海-90327">
            <i class="nick" title="Style丶小海-90327">Style丶小海-90327</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">30.3万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2793">
        <a href="http://www.huya.com/1471622651" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2793/2","game_id":"2793","ayyuid":"1334368570"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712c004dafa0eb62d9a0f805d5453b0b183d8f6efd6?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="Style丶权威-90327的直播" title="Style丶权威-90327的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/1471622651" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2793/2","game_id":"2793","ayyuid":"1334368570"}' title="〖权喵〗没有标题，最近很糟！" target="_blank">〖权喵〗没有标题，最近很糟！</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1007/8a/19207c04b7dc8ffc1e767880a6685e_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Style丶权威-90327" title="Style丶权威-90327">
            <i class="nick" title="Style丶权威-90327">Style丶权威-90327</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">22.6万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2793">
        <a href="http://www.huya.com/1973941780" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2793/3","game_id":"2793","ayyuid":"1727878632"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712ea205240922bebf85c57a59bbff13d4a509e9117?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="先锋GJ丶忍者飞的直播" title="先锋GJ丶忍者飞的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/1973941780" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2793/3","game_id":"2793","ayyuid":"1727878632"}' title="OB解说：世界第一狙 第一人称" target="_blank">OB解说：世界第一狙 第一人称</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1022/5d/d619a68f460b2632acf385327b6448_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="先锋GJ丶忍者飞" title="先锋GJ丶忍者飞">
            <i class="nick" title="先锋GJ丶忍者飞">先锋GJ丶忍者飞</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">7.9万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2793">
        <a href="http://www.huya.com/canggou" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2793/4","game_id":"2793","ayyuid":"1836684796"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/17125dfbe81d3eefa00f6cf59eff8c04b3a6818f9a17?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="仓鼠的直播" title="仓鼠的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/canggou" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2793/4","game_id":"2793","ayyuid":"1836684796"}' title="操作5分钟，观战8小时" target="_blank">操作5分钟，观战8小时</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1009/80/147a9dec1fc5f1ba2c21cf885ed8bb_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="仓鼠" title="仓鼠">
            <i class="nick" title="仓鼠">仓鼠</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">5.8万</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_14919794285355_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/qiuqiu" eid="click/index/ModuleTitle/qiuqiu" eid_desc="点击/首页/模块标题/球球大作战">球球大作战</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/qiuqiuLabel" eid_desc="点击/首页/模块标题/球球大作战标签">
                                                    <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/qingfeng">
                            清风徐来                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/xuanxing">
                            炫星                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/xiaoshihou">
                            晓时候                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/liuxiansen">
                            刘先森                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/aqdfz">
                            疯子                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/qisui">
                            七岁                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1591113220">
                            球节奏                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/laobai">
                            老白                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/qiuqiujiaofu">
                            教父                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class="" href="http://www.huya.com/xiaohan41172">
                            韩韩                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>58</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/qiuqiu" eid="click/index/ModuleTitle/qiuqiuMore" eid_desc="点击/首页/模块标题/球球大作战更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="2411">
        <a href="http://www.huya.com/xiaohan41172" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2411/1","game_id":"2411","ayyuid":"11840164"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712f90dd9e906981befa2169f2455b016b52b674327?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="抠脚的韩韩-乐游的直播" title="抠脚的韩韩-乐游的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/xiaohan41172" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2411/1","game_id":"2411","ayyuid":"11840164"}' title="抠脚球球不抠脚了？" target="_blank">抠脚球球不抠脚了？</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1014/b9/4358e9af047aa06f2e3487a8ddcd14_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="抠脚的韩韩-乐游" title="抠脚的韩韩-乐游">
            <i class="nick" title="抠脚的韩韩-乐游">抠脚的韩韩-乐游</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">8197</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2411">
        <a href="http://www.huya.com/225404009" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2411/2","game_id":"2411","ayyuid":"247893014"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712b60829e97d21a61828110c9a767b97d9a61f6700?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="正恒丶祈梦的直播" title="正恒丶祈梦的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/225404009" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2411/2","game_id":"2411","ayyuid":"247893014"}' title="5个魔灵说我满血复活..." target="_blank">5个魔灵说我满血复活...</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1045/c7/e207d118b6ba45ff015357a491f180_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="正恒丶祈梦" title="正恒丶祈梦">
            <i class="nick" title="正恒丶祈梦">正恒丶祈梦</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">5201</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2411">
        <a href="http://www.huya.com/2056802046" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2411/3","game_id":"2411","ayyuid":"1804200340"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/17129478ebdfe8eb555464e8a5c3d0dfa146e0297a42?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="暖心剑的直播" title="暖心剑的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/2056802046" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2411/3","game_id":"2411","ayyuid":"1804200340"}' title="单排逃杀挑战25连胜" target="_blank">单排逃杀挑战25连胜</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1078/93/ed16203a054e221519e14637f439ac_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="暖心剑" title="暖心剑">
            <i class="nick" title="暖心剑">暖心剑</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">3233</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2411">
        <a href="http://www.huya.com/bpl" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/2411/4","game_id":"2411","ayyuid":"1440796597"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712cf3037e564c526a64c8971d6b05f05087fe27282?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="BPL职业联赛的直播" title="BPL职业联赛的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/bpl" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/2411/4","game_id":"2411","ayyuid":"1440796597"}' title="BPL球球职业联赛重播" target="_blank">BPL球球职业联赛重播</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1043/98/64f97f5c233bc6b6cd761444362732_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="BPL职业联赛" title="BPL职业联赛">
            <i class="nick" title="BPL职业联赛">BPL职业联赛</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">3166</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_14919795384937_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/100029" eid="click/index/ModuleTitle/100029" eid_desc="点击/首页/模块标题/综合手游">综合手游</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/100029Label" eid_desc="点击/首页/模块标题/综合手游标签">
                                                    <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/233748250">
                            A神                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/394755508">
                            浩爷                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/xiuzhishang">
                            休止桑                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/dajiangliu2016">
                            大江刘                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/love182402">
                            女神经                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1871401608">
                            久宝宝                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/huyamoxuan">
                            默轩                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/sl2016">
                            卡帕                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/jiutian2938">
                            赵九天                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>176</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/100029" eid="click/index/ModuleTitle/100029More" eid_desc="点击/首页/模块标题/综合手游更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="3215">
        <a href="http://www.huya.com/dalongxia" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100029/1","game_id":"3215","ayyuid":"615370169"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712f9ba82826e4f7ae12c9cb5aead8f08bcab71ff7a?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="大龙虾的直播" title="大龙虾的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/dalongxia" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100029/1","game_id":"3215","ayyuid":"615370169"}' title="今天把号的砖石都送出去" target="_blank">今天把号的砖石都送出去</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1004/ed/f888865afd8ea2ae31ab4c451ff1d6_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="大龙虾" title="大龙虾">
            <i class="nick" title="大龙虾">大龙虾</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">2121</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2429">
        <a href="http://www.huya.com/2182609972" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100029/2","game_id":"2429","ayyuid":"2182357374"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712644cd123c3618d7f785fdc4636a582a7bbb6c9f7?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="HeZ阿龙的直播" title="HeZ阿龙的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/2182609972" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100029/2","game_id":"2429","ayyuid":"2182357374"}' title="国服托斯砧，请赐教。" target="_blank">国服托斯砧，请赐教。</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1075/5a/a76a7f9e1aaf073071d5ffa5af1b1d_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="HeZ阿龙" title="HeZ阿龙">
            <i class="nick" title="HeZ阿龙">HeZ阿龙</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">1352</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2429">
        <a href="http://www.huya.com/2061877152" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100029/3","game_id":"2429","ayyuid":"1809266544"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712ce4804d79799e6e880c2248498c77b223176e7a6?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="虎牙火影忍者的直播" title="虎牙火影忍者的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/2061877152" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100029/3","game_id":"2429","ayyuid":"1809266544"}' title="忍考300  干上了" target="_blank">忍考300  干上了</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1032/47/80350172fff2151950f52ab6b38dce_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="虎牙火影忍者" title="虎牙火影忍者">
            <i class="nick" title="虎牙火影忍者">虎牙火影忍者</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">1096</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2760">
        <a href="http://www.huya.com/2067629594" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100029/4","game_id":"2760","ayyuid":"1815012008"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/17122d694da58b31958a097d89819b3af4eb5897916a?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="九妖的直播" title="九妖的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/2067629594" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100029/4","game_id":"2760","ayyuid":"1815012008"}' title="妖  叔 ！！ ほえ 捕え ω（^ω（" target="_blank">妖  叔 ！！ ほえ 捕え ω（^ω（</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1085/43/2d7515286dc5617706f2ae37a6b70e_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="九妖" title="九妖">
            <i class="nick" title="九妖">九妖</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">836</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_14919795829583_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/xingxiu" eid="click/index/ModuleTitle/xingxiu" eid_desc="点击/首页/模块标题/星秀">星秀</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/xingxiuLabel" eid_desc="点击/首页/模块标题/星秀标签">
                                                    <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/echo1022">
                            回音哥                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1848069776">
                            里耳                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/2059162969">
                            潘维拉                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1979160650">
                            嘉爷                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/9098916">
                            没有小熊                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1827901886">
                            迪娜                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/dashengmoshu">
                            大圣                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/1991546972">
                            宇文泡儿                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>280</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/xingxiu" eid="click/index/ModuleTitle/xingxiuMore" eid_desc="点击/首页/模块标题/星秀更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="1663">
        <a href="http://www.huya.com/4359176" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/1663/1","game_id":"1663","ayyuid":"1096896069"}'>
        <img class="pic" data-original="//huyaimg.msstatic.com/cdnimage/anchorpost/1009/60/f418558d9d2445b5043a9eda512d1a_1663_1502878081.jpg?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="正恒YJ-画心的直播" title="正恒YJ-画心的直播">
        <em class="tag tag-recommend">白金推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/4359176" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/1663/1","game_id":"1663","ayyuid":"1096896069"}' title="战斗吧！！" target="_blank">战斗吧！！</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1009/60/f418558d9d2445b5043a9eda512d1a_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="正恒YJ-画心" title="正恒YJ-画心">
            <i class="nick" title="正恒YJ-画心">正恒YJ-画心</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">2.4万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1663">
        <a href="http://www.huya.com/1748573795" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/1663/2","game_id":"1663","ayyuid":"1551982851"}'>
        <img class="pic" data-original="//huyaimg.msstatic.com/cdnimage/anchorpost/1035/a4/2ed1bd7ace2c24597a3b2a09238bec_1663_1505115453.jpg?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="RDVIKI的直播" title="RDVIKI的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/1748573795" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/1663/2","game_id":"1663","ayyuid":"1551982851"}' title="你的黑丝女神~" target="_blank">你的黑丝女神~</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1035/a4/2ed1bd7ace2c24597a3b2a09238bec_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="RDVIKI" title="RDVIKI">
            <i class="nick" title="RDVIKI">RDVIKI</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">1.7万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1663">
        <a href="http://www.huya.com/299980966" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/1663/3","game_id":"1663","ayyuid":"262304409"}'>
        <img class="pic" data-original="//huyaimg.msstatic.com/cdnimage/anchorpost/1050/64/4e48a7489d417a8634d220c868f87e_1663_1509418634.jpg?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="爱拍-二嘎子的直播" title="爱拍-二嘎子的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/299980966" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/1663/3","game_id":"1663","ayyuid":"262304409"}' title="厌倦了拉票战斗的。进来听小噶唠一会。" target="_blank">厌倦了拉票战斗的。进来听小噶唠一会。</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1050/64/4e48a7489d417a8634d220c868f87e_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="爱拍-二嘎子" title="爱拍-二嘎子">
            <i class="nick" title="爱拍-二嘎子">爱拍-二嘎子</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">1.4万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1663">
        <a href="http://www.huya.com/yuer957" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/1663/4","game_id":"1663","ayyuid":"1756359087"}'>
        <img class="pic" data-original="//huyaimg.msstatic.com/cdnimage/anchorpost/1064/6d/8cab4bb6545d4162562126d1d7ce59_1663_1499311755.jpg?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="钰儿的直播" title="钰儿的直播">
        <em class="tag tag-recommend">视频美女</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/yuer957" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/1663/4","game_id":"1663","ayyuid":"1756359087"}' title="年度只收荧光棒~" target="_blank">年度只收荧光棒~</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1064/6d/8cab4bb6545d4162562126d1d7ce59_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="钰儿" title="钰儿">
            <i class="nick" title="钰儿">钰儿</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">6499</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_14920597991780_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/100044" eid="click/index/ModuleTitle/100044" eid_desc="点击/首页/模块标题/吃喝玩乐">吃喝玩乐</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/100044Label" eid_desc="点击/首页/模块标题/吃喝玩乐标签">
                                                    <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/yidong">
                            以冬                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/daleilei">
                            户外虎子                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/edc595">
                            局长户外                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/933614816">
                            户外傻强                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/wudao90052">
                            摇头道                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/qq88888">
                            小庆户外                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/520yuwang">
                            杰森哥                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>191</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/100044" eid="click/index/ModuleTitle/100044More" eid_desc="点击/首页/模块标题/吃喝玩乐更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="2752">
        <a href="http://www.huya.com/hxmsxy" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100044/1","game_id":"2752","ayyuid":"1566935708"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/17126f89437cdbc386fa2a154b0cc3f4d0b3aac8d2d3?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="MH、烟台浩哥的直播" title="MH、烟台浩哥的直播">
        <em class="tag tag-recommend">达人推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/hxmsxy" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100044/1","game_id":"2752","ayyuid":"1566935708"}' title="大牛鞭 活帝王蟹 现杀三文鱼 象拔蚌" target="_blank">大牛鞭 活帝王蟹 现杀三文鱼 象拔蚌</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1019/59/5444311c33a96ed82a57251b007065_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="MH、烟台浩哥" title="MH、烟台浩哥">
            <i class="nick" title="MH、烟台浩哥">MH、烟台浩哥</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">9737</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2836">
        <a href="http://www.huya.com/2023482443" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100044/2","game_id":"2836","ayyuid":"1770877838"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/17126ca31758007422ffa05b61f0397a120b029d8b3c?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="野之极的直播" title="野之极的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/2023482443" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100044/2","game_id":"2836","ayyuid":"1770877838"}' title="泥中美味尽入桶！" target="_blank">泥中美味尽入桶！</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1002/cd/e00da6d9731b2175df26ce0829dc1c_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="野之极" title="野之极">
            <i class="nick" title="野之极">野之极</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">1.1万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2836">
        <a href="http://www.huya.com/81946550love" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100044/3","game_id":"2836","ayyuid":"162524144"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/171260ff631d0abaa66fd972868e133b5baaa50f0e24?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="桀楚、瑄瑄和黑猫的直播" title="桀楚、瑄瑄和黑猫的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/81946550love" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100044/3","game_id":"2836","ayyuid":"162524144"}' title="千米大网怼大鱼！！！" target="_blank">千米大网怼大鱼！！！</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1015/65/4dcaffafbdfbd196fb04b7952666cb_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="桀楚、瑄瑄和黑猫" title="桀楚、瑄瑄和黑猫">
            <i class="nick" title="桀楚、瑄瑄和黑猫">桀楚、瑄瑄和黑猫</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">9218</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2836">
        <a href="http://www.huya.com/kaibenchiwugui" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100044/4","game_id":"2836","ayyuid":"1269978503"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712c0cc928020325b97661a95ca83278ef226bd2a21?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="MH、乌龟寻梦的直播" title="MH、乌龟寻梦的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/kaibenchiwugui" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100044/4","game_id":"2836","ayyuid":"1269978503"}' title="小岛度假三天两夜第二天吃鸡" target="_blank">小岛度假三天两夜第二天吃鸡</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1022/64/8d11e0491c742814854cdd56b9903b_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="MH、乌龟寻梦" title="MH、乌龟寻梦">
            <i class="nick" title="MH、乌龟寻梦">MH、乌龟寻梦</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">7664</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_14919797188379_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/pcgame" eid="click/index/ModuleTitle/pcgame" eid_desc="点击/首页/模块标题/单机热游">单机热游</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/pcgameLabel" eid_desc="点击/首页/模块标题/单机热游标签">
                                                    <li>
                        <a target="_blank" class="" href="http://www.huya.com/chuhe">
                            楚河                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/xiaoyugame">
                            小宇                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/sgjsheng">
                            贱圣                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/daomeili">
                            导演                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/dasdad">
                            星辉                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/wehuashao">
                            花教授                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/pinkfish">
                            粉鱼                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/matongc">
                            马桶                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/xiatiany">
                            夏天                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>872</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/pcgame" eid="click/index/ModuleTitle/pcgameMore" eid_desc="点击/首页/模块标题/单机热游更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="2793">
        <a href="http://www.huya.com/badaozongcai" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100002/1","game_id":"2793","ayyuid":"672985574"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712ace16a53119affef8934dffc71fc64700fdfc9df?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="Style丶小海-90327的直播" title="Style丶小海-90327的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/badaozongcai" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100002/1","game_id":"2793","ayyuid":"672985574"}' title="王牌快递员小海报到" target="_blank">王牌快递员小海报到</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1012/84/b525c936595d6595fc1faa681f081a_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Style丶小海-90327" title="Style丶小海-90327">
            <i class="nick" title="Style丶小海-90327">Style丶小海-90327</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">30.3万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2793">
        <a href="http://www.huya.com/1471622651" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100002/2","game_id":"2793","ayyuid":"1334368570"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712c004dafa0eb62d9a0f805d5453b0b183d8f6efd6?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="Style丶权威-90327的直播" title="Style丶权威-90327的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/1471622651" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100002/2","game_id":"2793","ayyuid":"1334368570"}' title="〖权喵〗没有标题，最近很糟！" target="_blank">〖权喵〗没有标题，最近很糟！</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1007/8a/19207c04b7dc8ffc1e767880a6685e_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Style丶权威-90327" title="Style丶权威-90327">
            <i class="nick" title="Style丶权威-90327">Style丶权威-90327</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">22.6万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1964">
        <a href="http://www.huya.com/chuhe" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100002/3","game_id":"1964","ayyuid":"294636272"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712bf8d533e2aab2e48ea3bc0df46833955f2d96619?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="Style丶楚河-90327的直播" title="Style丶楚河-90327的直播">
        <em class="tag tag-recommend">超级明星</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/chuhe" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100002/3","game_id":"1964","ayyuid":"294636272"}' title="最精彩的游戏直播~" target="_blank">最精彩的游戏直播~</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1086/bf/fd6f69d69c0015eaface1f6024869e_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="Style丶楚河-90327" title="Style丶楚河-90327">
            <i class="nick" title="Style丶楚河-90327">Style丶楚河-90327</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">18.4万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2793">
        <a href="http://www.huya.com/1973941780" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100002/4","game_id":"2793","ayyuid":"1727878632"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712ea205240922bebf85c57a59bbff13d4a509e9117?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="先锋GJ丶忍者飞的直播" title="先锋GJ丶忍者飞的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/1973941780" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100002/4","game_id":"2793","ayyuid":"1727878632"}' title="OB解说：世界第一狙 第一人称" target="_blank">OB解说：世界第一狙 第一人称</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1022/5d/d619a68f460b2632acf385327b6448_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="先锋GJ丶忍者飞" title="先锋GJ丶忍者飞">
            <i class="nick" title="先锋GJ丶忍者飞">先锋GJ丶忍者飞</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">7.9万</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_14920597869382_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/100043" eid="click/index/ModuleTitle/100043" eid_desc="点击/首页/模块标题/暴雪专区">暴雪专区</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/100043Label" eid_desc="点击/首页/模块标题/暴雪专区标签">
                                                    <li>
                        <a target="_blank" class="" href="http://www.huya.com/a16789">
                            安德罗妮                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/board">
                            萌太奇                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1839164517">
                            小秋                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/diaodaquanxiangou">
                            吊打权限狗                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/shangdi">
                            上帝                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/guai">
                            少男乖                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/dotaqs">
                            情书                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>122</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/100043" eid="click/index/ModuleTitle/100043More" eid_desc="点击/首页/模块标题/暴雪专区更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="393">
        <a href="http://www.huya.com/a16789" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100043/1","game_id":"393","ayyuid":"1271256459"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712e9ed0fe1bcbc65aecf10e38091f8407606495f58?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="安德罗妮丶的直播" title="安德罗妮丶的直播">
        <em class="tag tag-recommend">超级明星</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/a16789" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100043/1","game_id":"393","ayyuid":"1271256459"}' title="今天上传说。" target="_blank">今天上传说。</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1047/bc/bc06fb8973906c9c1292df49a49a18_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="安德罗妮丶" title="安德罗妮丶">
            <i class="nick" title="安德罗妮丶">安德罗妮丶</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">14.2万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="393">
        <a href="http://www.huya.com/laofang" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100043/2","game_id":"393","ayyuid":"436837880"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/17126e52c95f37fd4758944d333dd53ee05e24b42333?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="炉石老方的直播" title="炉石老方的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/laofang" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100043/2","game_id":"393","ayyuid":"436837880"}' title="老方：多橙竞技场！异变黑暗之主萨！" target="_blank">老方：多橙竞技场！异变黑暗之主萨！</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1035/5d/8c97b795c2fac3a5d717dfcbf225b8_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="炉石老方" title="炉石老方">
            <i class="nick" title="炉石老方">炉石老方</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">2941</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="6">
        <a href="http://www.huya.com/jumoge" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100043/3","game_id":"6","ayyuid":"140104286"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712717e3628cde0e4a29ebaa8a30500fa7b2dc31573?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="巨蘑哥一身武艺的直播" title="巨蘑哥一身武艺的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/jumoge" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100043/3","game_id":"6","ayyuid":"140104286"}' title="蘑酱~一个真正的强者！" target="_blank">蘑酱~一个真正的强者！</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1040/04/ac20cb4b8d0c4fae2ba2f14cee1689_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="巨蘑哥一身武艺" title="巨蘑哥一身武艺">
            <i class="nick" title="巨蘑哥一身武艺">巨蘑哥一身武艺</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">5817</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="393">
        <a href="http://www.huya.com/magicwin" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100043/4","game_id":"393","ayyuid":"1499312947"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712f18e8f4a4f4225e9a0dd8cee196f64f91b31c400?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="魔法之风的直播" title="魔法之风的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/magicwin" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100043/4","game_id":"393","ayyuid":"1499312947"}' title="快攻猎，12胜来啦" target="_blank">快攻猎，12胜来啦</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1033/4d/8bb79460d9c99d536d9cde4da3daed_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="魔法之风" title="魔法之风">
            <i class="nick" title="魔法之风">魔法之风</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">1854</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_14919798272925_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/100036" eid="click/index/ModuleTitle/100036" eid_desc="点击/首页/模块标题/棋牌休闲">棋牌休闲</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/100036Label" eid_desc="点击/首页/模块标题/棋牌休闲标签">
                                                    <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/2021636528">
                            王天一                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1612248970">
                            武文慧                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class="" href="http://www.huya.com/2172815183">
                            孙浩宇                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/xiejing">
                            谢靖                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/2032236474">
                            程鸣                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1893735736">
                            勇哥                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/2735511">
                            木易                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1868436835">
                            战神                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/xiangqidashi">
                            汉堡                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>51</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/100036" eid="click/index/ModuleTitle/100036More" eid_desc="点击/首页/模块标题/棋牌休闲更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="1671">
        <a href="http://www.huya.com/2172815183" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100036/1","game_id":"1671","ayyuid":"2172663312"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/17122a9062e8fcb5b2a2c2e2691cfecbcde23f0885d4?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="孙浩宇大师的直播" title="孙浩宇大师的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/2172815183" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100036/1","game_id":"1671","ayyuid":"2172663312"}' title="世界智力运动会象棋决赛现场直播" target="_blank">世界智力运动会象棋决赛现场直播</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1054/79/78efebfde6a856a961f40e2f5cce31_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="孙浩宇大师" title="孙浩宇大师">
            <i class="nick" title="孙浩宇大师">孙浩宇大师</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">6752</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1749">
        <a href="http://www.huya.com/2053928325" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100036/2","game_id":"1749","ayyuid":"1801311772"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712cdea856d2cce7e95966b7031c87e205a55c5addc?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="大头飘的直播" title="大头飘的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/2053928325" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100036/2","game_id":"1749","ayyuid":"1801311772"}' title="为中华之崛起而斗地主" target="_blank">为中华之崛起而斗地主</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1053/9d/8021515b09e0fa77f402db3bf8b40f_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="大头飘" title="大头飘">
            <i class="nick" title="大头飘">大头飘</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">4288</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1751">
        <a href="http://www.huya.com/enze0827" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100036/3","game_id":"1751","ayyuid":"5751467"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712466591096548673832573cfe21d894a36ccdd94b?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="胖熊的直播" title="胖熊的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/enze0827" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100036/3","game_id":"1751","ayyuid":"5751467"}' title="清一色代言人 贪到死 听牌困难户" target="_blank">清一色代言人 贪到死 听牌困难户</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1059/c7/50d7f36ad615fdd985ff8fcea81668_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="胖熊" title="胖熊">
            <i class="nick" title="胖熊">胖熊</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">4099</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1751">
        <a href="http://www.huya.com/1919845198" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100036/4","game_id":"1751","ayyuid":"1685589028"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712071cfd1d3d4c41afb3ca6544eacdae1d2731200a?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="桀楚丶告白 的直播" title="桀楚丶告白 的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/1919845198" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100036/4","game_id":"1751","ayyuid":"1685589028"}' title="#棋牌盛典狂欢月# 帮追梦！！！" target="_blank">#棋牌盛典狂欢月# 帮追梦！！！</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1043/f0/d6d1ff17d73fc53163a892cc16171e_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="桀楚丶告白 " title="桀楚丶告白 ">
            <i class="nick" title="桀楚丶告白 ">桀楚丶告白 </i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">2657</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_15010638328048_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/100049" eid="click/index/ModuleTitle/100049" eid_desc="点击/首页/模块标题/狼人杀手游">狼人杀手游</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/100049Label" eid_desc="点击/首页/模块标题/狼人杀手游标签">
                                                    <li>
                        <a target="_blank" class="" href="http://www.huya.com/godlie">
                            GodLie                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/2long">
                            二龙                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/2027169706">
                            申屠                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/xiaotuimao">
                            腿毛                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/smgou">
                            神秘狗                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/yiyanqirisha">
                            王老师                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/wenshang90349">
                            十七                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class="" href="http://www.huya.com/pphome">
                            佩佩                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/1848633023">
                            西瓜                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/1840541197">
                            WM                        </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>24</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/100049" eid="click/index/ModuleTitle/100049More" eid_desc="点击/首页/模块标题/狼人杀手游更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="2989">
        <a href="http://www.huya.com/godlie" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100049/1","game_id":"2989","ayyuid":"1560182536"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712fb02ae90b36281d101278ed6fcfc1ac579c064b5?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="狼人杀GodLie的直播" title="狼人杀GodLie的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/godlie" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100049/1","game_id":"2989","ayyuid":"1560182536"}' title="GodLie第一季精彩轮播(5-8期)" target="_blank">GodLie第一季精彩轮播(5-8期)</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1080/88/74e7c20ca05a6e6fd480a9f0886398_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="狼人杀GodLie" title="狼人杀GodLie">
            <i class="nick" title="狼人杀GodLie">狼人杀GodLie</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">3.1万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2774">
        <a href="http://www.huya.com/king8888" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100049/2","game_id":"2774","ayyuid":"1101272"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712533f9583baa6140f621968d6a98f92705ec69d6f?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="King太子哥的直播" title="King太子哥的直播">
        <em class="tag tag-recommend">魅力新星</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/king8888" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100049/2","game_id":"2774","ayyuid":"1101272"}' title="12月11号虎虎生威第一天比赛视频录播" target="_blank">12月11号虎虎生威第一天比赛视频录播</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1043/3c/8a1b3e49042d11af62f60f4c29ba22_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="King太子哥" title="King太子哥">
            <i class="nick" title="King太子哥">King太子哥</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">2165</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2774">
        <a href="http://www.huya.com/pphome" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100049/3","game_id":"2774","ayyuid":"1361507375"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/171296d0370c91115e4f29f827aacbc518b375f89d64?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="腿神佩佩的直播" title="腿神佩佩的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/pphome" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100049/3","game_id":"2774","ayyuid":"1361507375"}' title="佩佩：最强女玩家 直播冲第一" target="_blank">佩佩：最强女玩家 直播冲第一</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1065/02/7e39570788ba9bd2039668352d4882_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="腿神佩佩" title="腿神佩佩">
            <i class="nick" title="腿神佩佩">腿神佩佩</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">1384</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="2785">
        <a href="http://www.huya.com/1314o" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/100049/4","game_id":"2785","ayyuid":"12934493"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/1712d6f52fb64ef03c9a3a8295bfc8ee72c669bdff6d?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="轩辕-安之骄的直播" title="轩辕-安之骄的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/1314o" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/100049/4","game_id":"2785","ayyuid":"12934493"}' title="休闲时刻看一看~" target="_blank">休闲时刻看一看~</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1059/d3/bde5f253f86c6c74bccb2abdc9b1ae_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="轩辕-安之骄" title="轩辕-安之骄">
            <i class="nick" title="轩辕-安之骄">轩辕-安之骄</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">1310</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
                <div class="live-box">
        <div class="box-hd">
            <h2 class="title">
                        <img src="//huyaimg.msstatic.com/cdnimage/gametypelogo/game_14919798448191_logo.png" alt="图标" class="hy-column-normal">
                        <a class="clickstat" target="_blank" href="http://www.huya.com/g/lol" eid="click/index/ModuleTitle/lol" eid_desc="点击/首页/模块标题/英雄联盟">英雄联盟</a>
                    </h2>
                        <ul class="more-list clickstat" eid="click/index/ModuleTitle/lolLabel" eid_desc="点击/首页/模块标题/英雄联盟标签">
                                                    <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/miss">
                            Miss大小姐                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/uzi">
                            Uzi                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/kaerlol">
                            卡尔                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/saonan">
                            骚男                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/heigou">
                            黑店百地                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/777hao">
                            七号                        </a>
                        </li>
                                                            <li>
                        <a target="_blank" class=" grey" href="http://www.huya.com/kuxiao">
                            安静苦笑                        </a>
                        </li>
                                                            <li class="no-bor">
                        <a target="_blank" class=" grey" href="http://www.huya.com/zhaoxiaochou">
                            赵小臭                         </a>
                        </li>
                                    </ul>
                        <ul class="more-info">
                <li><span>543</span>个主播正在直播</li>
                <li><a class="clickstat" target="_blank" href="http://www.huya.com/g/lol" eid="click/index/ModuleTitle/lolMore" eid_desc="点击/首页/模块标题/英雄联盟更多入口">更多<i class="index-more-icon"></i></a></li>
            </ul>
        </div>
        <div class="box-bd">
                            <ul class="index-list clearfix  ">
                                                                                                        <li class="game-live-item" gid="1">
        <a href="http://www.huya.com/baozha" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/1/1","game_id":"1","ayyuid":"17363578"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/17126511715115df07bff5ea8e830929fecd0c23e631?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="炸姐ADC的直播" title="炸姐ADC的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/baozha" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/1/1","game_id":"1","ayyuid":"17363578"}' title="恐惧流ADC 攻速流 万物皆可飓风" target="_blank">恐惧流ADC 攻速流 万物皆可飓风</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1095/83/2aa2f6905fe4382221d08b66d7cdcb_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="炸姐ADC" title="炸姐ADC">
            <i class="nick" title="炸姐ADC">炸姐ADC</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">33.1万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1">
        <a href="http://www.huya.com/allstar" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/1/2","game_id":"1","ayyuid":"1346609715"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/171262bd13008ee89e15f92506a074488e2733fc5244?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="AllStar全明星赛的直播" title="AllStar全明星赛的直播">
                <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/allstar" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/1/2","game_id":"1","ayyuid":"1346609715"}' title="[重播]全明星LPL双冠，扬我国威" target="_blank">[重播]全明星LPL双冠，扬我国威</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1042/6f/3626ef611e990cbbcefab8e1bbc561_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="AllStar全明星赛" title="AllStar全明星赛">
            <i class="nick" title="AllStar全明星赛">AllStar全明星赛</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">17.2万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1">
        <a href="http://www.huya.com/xuanlv" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/1/3","game_id":"1","ayyuid":"171423073"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/171265b4eec2b7e36efa0fae9cd99b95055bf1c30b72?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="聆听-旋律的直播" title="聆听-旋律的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
        <em class="tag tag-blue">蓝光</em>    </a>
    <a href="http://www.huya.com/xuanlv" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/1/3","game_id":"1","ayyuid":"171423073"}' title="旋律:律教授上单肉盾石头人,日炎的天下" target="_blank">旋律:律教授上单肉盾石头人,日炎的天下</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1001/87/9c235bb838b2e754559cf4840ef4fa_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="聆听-旋律" title="聆听-旋律">
            <i class="nick" title="聆听-旋律">聆听-旋律</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">8.9万</i></span>
    </span>
</li>

                                                                    <li class="game-live-item" gid="1">
        <a href="http://www.huya.com/wanmei" class="video-info new-clickstat" target="_blank" report='{"eid":"click/position","position":"index/column/1/4","game_id":"1","ayyuid":"1558213087"}'>
        <img class="pic" data-original="//screenshot.msstatic.com/yysnapshot/171267d6cb00a25fc199da466abc3c700047c576b099?imageview/4/0/w/338/h/190/blur/1" src="//a.msstatic.com/huya/main/assets/img/default/338x190.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/338x190.jpg';" alt="完美OB的直播" title="完美OB的直播">
        <em class="tag tag-recommend">大神推荐</em>        <div class="item-mask"></div>
        <i class="btn-link__hover_i"></i>
            </a>
    <a href="http://www.huya.com/wanmei" class="title new-clickstat" report='{"eid":"click/position","position":"index/column/1/4","game_id":"1","ayyuid":"1558213087"}' title="完美:iboy+水晶哥+走A怪" target="_blank">完美:iboy+水晶哥+走A怪</a>
    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1076/6b/0edac10a92f62d474bc93ca467fa9f_180_135.jpg" src="//a.msstatic.com/huya/main/assets/img/default/84x84.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/84x84.jpg';" alt="完美OB" title="完美OB">
            <i class="nick" title="完美OB">完美OB</i>
        </span>
                <span class="num"><i class="num-icon"></i><i class="js-num">8.4万</i></span>
    </span>
</li>

                                        </ul>
        </div>
    </div>
            </div>
            <!-- E 游戏列表 -->

            <!-- S 活动列表 -->
            <div class="mod-actlist">
    <div class="mod-actlist__inner">
        <div class="mod-actlist__main">
            <div class="mod-actlist__hd clearfix">
                <h3 class="title"><i></i>官方活动</h3>
                <a target="_blank" href="http://www.huya.com/e" class="more-list">更多<i class="index-more-icon"></i></a>
            </div>
            <div class="mod-actlist__bd">
                <ul class="clearfix">
                                                                                <li><a class="clickstat J_g_resource" data-pos="index/act/0" data-rsc="335" href="http://blog.huya.com/news/4564" target="_blank" title="kpl秋季赛" rel="nofollow" eid="click/home/event/event1" eid_desc="点击/首页/官方活动/官方活动1">
                        <img data-original="//huyaimg.msstatic.com/cdnimage/actprop/phpusWjW21512214821.jpg" src="//a.msstatic.com/huya/main/assets/img/default/280x100.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/280x100.jpg';" alt="kpl秋季赛"/>
                        </a></li>
                                                            <li><a class="clickstat J_g_resource" data-pos="index/act/1" data-rsc="339" href="http://blog.huya.com/news/5033" target="_blank" title="虎牙2017ALLSTAR" rel="nofollow" eid="click/home/event/event2" eid_desc="点击/首页/官方活动/官方活动2">
                        <img data-original="//huyaimg.msstatic.com/cdnimage/actprop/php70DRmB1512556974.jpg" src="//a.msstatic.com/huya/main/assets/img/default/280x100.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/280x100.jpg';" alt="虎牙2017ALLSTAR"/>
                        </a></li>
                                                            <li><a class="clickstat J_g_resource" data-pos="index/act/2" data-rsc="341" href="http://layer.huya.com/201712activity/index" target="_blank" title="最佳公会战" rel="nofollow" eid="click/home/event/event3" eid_desc="点击/首页/官方活动/官方活动3">
                        <img data-original="//huyaimg.msstatic.com/cdnimage/actprop/phpXbhuIu1512993555.jpg" src="//a.msstatic.com/huya/main/assets/img/default/280x100.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/280x100.jpg';" alt="最佳公会战"/>
                        </a></li>
                                                            <li><a class="clickstat J_g_resource" data-pos="index/act/3" data-rsc="337" href="http://blog.huya.com/news/5015" target="_blank" title="第一届天狼虎虎生威赛盛大开幕" rel="nofollow" eid="click/home/event/event4" eid_desc="点击/首页/官方活动/官方活动4">
                        <img data-original="//huyaimg.msstatic.com/cdnimage/actprop/phpE3vkEz1512468092.jpg" src="//a.msstatic.com/huya/main/assets/img/default/280x100.jpg" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/280x100.jpg';" alt="第一届天狼虎虎生威赛盛大开幕"/>
                        </a></li>
                                    </ul>
            </div>
        </div>
    </div>
</div>
            <!-- E 活动列表 -->
        </script>
    </div>

    <script src="//a.msstatic.com/huya/main/js/headerFunction_591c826.js" data-fixed="true"></script>
    <script src="//a.msstatic.com/huya/main/lib/jquery.lazyload_769f44a.js" data-fixed="true"></script>
    <script type="text/javascript" charset="utf-8" src="//a.msstatic.com/huya/main/pkg/auto_combine_d17e3_be26443.js"></script>
<script type="text/javascript" >
require.resourceMap({"res":{"h5player":{"url":"//a.msstatic.com/huya/main/modules/h5player/h5player_1a89b41.js"},"dialog":{"url":"//a.msstatic.com/huya/main/modules/dialog/dialog_0b9b88a.js"}},"pkg":{}});
</script>
<script>
        var rec4x4Data = [{"contents":[{"uid":"1670601866","yyid":"1901217947","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/17124dab96a531b4ffd1f94b230311c75c06c9817656","isBluRay":"1","gameFullName":"QQ\u98de\u8f66","liveSourceType":"0","gameHostName":"9","screenType":"0","activityId":"36310131","activityCount":"7906","privateHost":"1901217947","level":"17","nick":"\u51a0\u519b\u7ea2\u4eba\u7b2c\u4e00\u540d\u4e36\u7b14\u82af","totalCount":"4298","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1005\/b3\/27421d7d3d9aebe54eda5c5b525ccd_180_135.jpg?1497861688","gid":"9","bitRate":"3000","channel":"21420432","liveChannel":"2597580606","introduction":"125w\u9b45\u529b  3\u4e2a\u516829T3 \u8d70\u8d70","bussType":"1"},{"uid":"388560402","yyid":"302903684","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/171239cf065bf6750fe0255c9138002d019eae36dc86","isBluRay":"1","gameFullName":"\u5929\u6daf\u660e\u6708\u5200","liveSourceType":"0","gameHostName":"1219","screenType":"0","activityId":"8073089","activityCount":"197462","privateHost":"ahuameishe","level":"22","nick":"\u6b63\u6052\u4e36\u7199\u5b50","totalCount":"1165","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1026\/ac\/584b6db8945effabef1a7a5e6d629b_180_135.jpg?1492659677","gid":"1219","bitRate":"3000","channel":"99425467","liveChannel":"2343860743","introduction":"\u6211\u662f\u62a0\u811a\u5973\u738b~\uff0c\u524d\u65b9\u9ad8\u80fd","bussType":"1"},{"uid":"444563237","yyid":"363542421","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/1712a6aef5ec5d4dc6a2d1c8035ff593227746470bd0","isBluRay":"1","gameFullName":"\u7089\u77f3\u4f20\u8bf4","liveSourceType":"0","gameHostName":"393","screenType":"0","activityId":"11153135","activityCount":"28282","privateHost":"si420","level":"20","nick":"\u65af\u4f51\u5929","totalCount":"575","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1011\/e4\/d0aff09f9069caf458d4d66ff3df1e_180_135.jpg","gid":"393","bitRate":"3000","channel":"85068257","liveChannel":"2545992394","introduction":"[\u65af\u4f51\u5929]\u6765\u4e00\u6ce2\u4e5d\u804c\u4e1a\u7ade\u6280\u573a\u6311\u6218~","bussType":"1"},{"uid":"1662823558","yyid":"1890387180","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/171235344645c06c088590428afa42e1b0aff5d607a6","isBluRay":"1","gameFullName":"\u5b88\u671b\u5148\u950b","liveSourceType":"0","gameHostName":"2174","screenType":"0","activityId":"34341300","activityCount":"621","privateHost":"1890387180","level":"13","nick":"\u5b89\u53ef\u4e50","totalCount":"443","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1035\/c5\/7db933c4a8e16328967df7bdeca5e4_180_135.jpg?1501145567","gid":"2174","bitRate":"3000","channel":"64154631","liveChannel":"2636233626","introduction":"\u5b89\u53ef\u4e50\u5355\u6392\u53cc\u53f74500\u72c2\u9f20 30\u8840\u74f6\u623f\u7ba1","bussType":"1"}],"themeLogo":"http:\/\/livewebbs2.msstatic.com\/huya_hot_rec_theme_logo_1488335027.png","themeTitle":"\u7f51\u6e38\u7ade\u6280"},{"contents":[{"uid":"294636272","yyid":"229813522","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/1712e2169a71b1a89c4e4767dc90dda0d5d62af7b2b4","isBluRay":"1","gameFullName":"\u4e3b\u673a\u6e38\u620f","liveSourceType":"0","gameHostName":"1964","screenType":"0","previewUrl":"\/\/ws.streamhls.huya.com\/hqlive\/92094861-2335797845-10032175354342277120-589396000-10057-A-1513126867-1_100\/playlist.m3u8","activityId":"17618849","activityCount":"5012615","privateHost":"chuhe","level":"32","nick":"Style\u4e36\u695a\u6cb3-90327","totalCount":"186815","avatar180":"http:\/\/downhdlogo.yy.com\/hdlogo\/144144\/72\/62\/63\/0294636272\/u294636272en9EOG2O.png","gid":"1964","bitRate":"3000","channel":"92094861","liveChannel":"2335797845","introduction":"\u6700\u7cbe\u5f69\u7684\u6e38\u620f\u76f4\u64ad~","bussType":"2"},{"uid":"672985574","yyid":"627422973","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/1712da28831f161f438a06e2c46d33f025fb98beda1a","isBluRay":"1","gameFullName":"\u7edd\u5730\u6c42\u751f","liveSourceType":"0","gameHostName":"2793","screenType":"0","previewUrl":"\/\/ws.streamhls.huya.com\/huyalive\/92094861-2439387868-10477091115319164928-1346094604-10057-A-1513123335-1_100\/playlist.m3u8","activityId":"18430509","activityCount":"1750892","privateHost":"badaozongcai","level":"26","nick":"Style\u4e36\u5c0f\u6d77-90327","totalCount":"300994","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1012\/84\/b525c936595d6595fc1faa681f081a_180_135.jpg?1417076834","gid":"2793","bitRate":"4000","channel":"92094861","liveChannel":"2439387868","introduction":"\u738b\u724c\u5feb\u9012\u5458\u5c0f\u6d77\u62a5\u5230","bussType":"2"},{"uid":"759423072","yyid":"715637299","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/17126656fe57df4d7184996c52370cec5fd18802e70d","isBluRay":"0","gameFullName":"\u8ff7\u4f60\u4e16\u754c","liveSourceType":"0","gameHostName":"2683","screenType":"0","activityId":"23738343","activityCount":"34105","privateHost":"jianrenwang","level":"19","nick":"\u4e1c\u8fb0-\u4eba\u738b","totalCount":"828","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1064\/b1\/057f02d27c1fe9fc81790ca19205c3_180_135.jpg?0","gid":"2683","bitRate":"2000","channel":"62724993","liveChannel":"2656837352","introduction":"\u6838\u5fc3\u73a9\u5bb6\uff1a\u5723\u8bde\u8282\u5947\u5e7b\u4e4b\u65c5\uff01\uff01\uff01","bussType":"3"},{"uid":"1730901527","yyid":"1978305752","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/1712ad9295ca0529774ee9af96b7da36fd147bcf06ca","isBluRay":"1","gameFullName":"\u6211\u7684\u4e16\u754c","liveSourceType":"8","gameHostName":"1732","screenType":"0","activityId":"36842559","activityCount":"3467","privateHost":"1978305752","level":"11","nick":"\u674e\u767d","totalCount":"2093","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1090\/62\/50232efffadcfc784d761f8b916b00_180_135.jpg?1490590750","gid":"1732","bitRate":"3000","channel":"85121637","liveChannel":"85121637","introduction":"\u68a6\u5e7b\u5927\u9646RPG\u670d\u52a1\u5668\u4e00\u8d77\u6765\u73a9","bussType":"2"}],"themeLogo":"http:\/\/livewebbs2.msstatic.com\/huya_hot_rec_theme_logo_1488335054.png","themeTitle":"\u5355\u673a\u70ed\u6e38"},{"contents":[{"uid":"1096896069","yyid":"4359176","screenshot":"http:\/\/huyaimg.msstatic.com\/cdnimage\/anchorpost\/1009\/60\/f418558d9d2445b5043a9eda512d1a_1663_1502878081.jpg","isBluRay":"1","gameFullName":"\u661f\u79c0","liveSourceType":"0","gameHostName":"1663","screenType":"0","activityId":"24091018","activityCount":"551035","privateHost":"4359176","level":"31","nick":"\u6b63\u6052YJ-\u753b\u5fc3","totalCount":"24750","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1009\/60\/f418558d9d2445b5043a9eda512d1a_180_135.jpg?1509529150","gid":"1663","bitRate":"3000","channel":"82393037","liveChannel":"2553556633","introduction":"\u6218\u6597\u5427\uff01\uff01","bussType":"8"},{"uid":"1566935708","yyid":"1767513589","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/1712e2a1f3b499f13a497dbb9cb0d3d3d8e9aa0daa17","isBluRay":"0","gameFullName":"\u7f8e\u98df","liveSourceType":"6","gameHostName":"2752","screenType":"1","previewUrl":"\/\/ws.streamhls.huya.com\/huyalive\/41583757-41583757-178600876359811072-3133994872-10057-A-1513123265-48933_100\/playlist.m3u8","activityId":"36351931","activityCount":"169838","privateHost":"hxmsxy","level":"22","nick":"MH\u3001\u70df\u53f0\u6d69\u54e5","totalCount":"10447","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1019\/59\/5444311c33a96ed82a57251b007065_180_135.jpg?1511949190","gid":"2752","bitRate":"2000","channel":"41583757","liveChannel":"41583757","introduction":"3\u5206\u949f\u6559\u4f60\u505a\u6700\u9c9c\u7f8e\u7684\u76ae\u76ae\u867e\u3001\u5927\u95f8\u87f9\uff01","bussType":"8"},{"uid":"114023238","yyid":"90055491","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/171205b8cf5007947fc9778b02c6a16632cc734644a7","isBluRay":"0","gameFullName":"\u4e8c\u6b21\u5143","liveSourceType":"0","gameHostName":"2633","screenType":"0","activityId":"43664753","activityCount":"83","privateHost":"90055491","level":"8","nick":"\u660a\u5929-\u58f0\u97f3\u5496\u5561\u5c4b","totalCount":"218","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1084\/1e\/a3b2814edc7956e59391126f9c9ab0_180_135.jpg?1511333813","gid":"2633","bitRate":"1000","channel":"72992817","liveChannel":"2657897192","introduction":"\u3010\u6050\u6016\u6f2b\u753b\u3011\u81f3\u6b7b\u4e0d\u6e1d\u7684\u7231-\u4f0a\u85e4\u6da6\u4e8c","bussType":"8"},{"uid":"1770877838","yyid":"2023482443","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/17125e381ba262dbac51e9cbfdd2107a1b77c65b9bff","isBluRay":"0","gameFullName":"\u6237\u5916","liveSourceType":"6","gameHostName":"2836","screenType":"1","activityId":"38602797","activityCount":"151726","privateHost":"2023482443","level":"23","nick":"\u91ce\u4e4b\u6781","totalCount":"10564","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1002\/cd\/e00da6d9731b2175df26ce0829dc1c_180_135.jpg?0","gid":"2836","bitRate":"2000","channel":"84691786","liveChannel":"84691786","introduction":"\u6ce5\u4e2d\u7f8e\u5473\u5c3d\u5165\u6876\uff01","bussType":"8"}],"themeLogo":"http:\/\/livewebbs2.msstatic.com\/huya_hot_rec_theme_logo_1488335035.png","themeTitle":"\u5a31\u4e50\u5929\u5730"},{"contents":[{"uid":"1354160941","yyid":"1496115569","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/1712ccd8a29ae7d56b4b49ef7dbeb586c9472b8f6f9f","isBluRay":"1","gameFullName":"\u738b\u8005\u8363\u8000","liveSourceType":"0","gameHostName":"2336","screenType":"0","activityId":"22864341","activityCount":"4287063","privateHost":"haddis","level":"27","nick":"\u54c8\u8fea\u65af","totalCount":"236254","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1025\/47\/ebd8d06fcad9e3048cfac92e515c48_180_135.jpg?1469868941","gid":"2336","bitRate":"3000","channel":"99173389","liveChannel":"99173389","introduction":"\u674e\u767d\u7684\u5f1f\u5f1f\u660e\u4e16\u9690\u8eab\u51b2\u56fd\u670d\u7b2c\u4e00~","bussType":"3"},{"uid":"1674061413","yyid":"1905118486","screenshot":"http:\/\/huyaimg.msstatic.com\/cdnimage\/anchorpost\/1091\/cc\/740fb6dff7431fe119f16bb2b6d2ab_2413_1512736614.jpg","isBluRay":"0","gameFullName":"CF\u624b\u6e38","liveSourceType":"0","gameHostName":"2413","screenType":"0","activityId":"34903231","activityCount":"141192","privateHost":"1905118486","level":"21","nick":"LNG\u4e36Zh","totalCount":"15909","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1091\/cc\/740fb6dff7431fe119f16bb2b6d2ab_180_135.jpg?1505383344","gid":"2413","bitRate":"2000","channel":"95685753","liveChannel":"2566699915","introduction":"\u5355\u4eba\u62534\u6392 \u6311\u6218\u6781\u9650\u5403\u9e21\uff01","bussType":"3"},{"uid":"11840164","yyid":"2788853","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/17122e1d14e2236b0f0338fc5c3a3f6b61b37ed00c23","isBluRay":"1","gameFullName":"\u7403\u7403\u5927\u4f5c\u6218","liveSourceType":"0","gameHostName":"2411","screenType":"0","activityId":"19499767","activityCount":"418456","privateHost":"xiaohan41172","level":"23","nick":"\u62a0\u811a\u7684\u97e9\u97e9-\u4e50\u6e38","totalCount":"8607","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1014\/b9\/4358e9af047aa06f2e3487a8ddcd14_180_135.jpg?1494946687","gid":"2411","bitRate":"3000","channel":"13786572","liveChannel":"2636570050","introduction":"\u62a0\u811a\u7403\u7403\u4e0d\u62a0\u811a\u4e86\uff1f","bussType":"3"},{"uid":"2172663312","yyid":"2172815183","screenshot":"http:\/\/screenshot.msstatic.com\/yysnapshot\/1712557136492cb8e40dcf949ee1852adbcea35b1b48","isBluRay":"0","gameFullName":"\u4e2d\u56fd\u8c61\u68cb","liveSourceType":"0","gameHostName":"1671","screenType":"0","activityId":"42367529","activityCount":"6438","privateHost":"2172815183","level":"16","nick":"\u5b59\u6d69\u5b87\u5927\u5e08","totalCount":"7012","avatar180":"http:\/\/huyaimg.msstatic.com\/avatar\/1054\/79\/78efebfde6a856a961f40e2f5cce31_180_135.jpg?1504191200","gid":"1671","bitRate":"800","channel":"36711490","liveChannel":"2637550344","introduction":"\u4e16\u754c\u667a\u529b\u8fd0\u52a8\u4f1a\u8c61\u68cb\u51b3\u8d5b\u73b0\u573a\u76f4\u64ad","bussType":"3"}],"themeLogo":"http:\/\/livewebbs2.msstatic.com\/huya_hot_rec_theme_logo_1488335045.png","themeTitle":"\u624b\u6e38\u4f11\u95f2"}]        </script>
    <script>
        require("app/index");
    </script>
    <!--BODY_END-->
    <!-- S 页面公用功能 -->
    
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
    <script data-fixed="true">
        (function(win){
            var $win = $(win);
            var reportTimer = null;

            function getScriptCache(url,callback,prop){

                var head = document.getElementsByTagName("head")[0] || document.documentElement;
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.async = true;
                script.charset = "utf-8";
                if(prop){
                    for(var p in prop){
                        script.setAttribute(p,prop[p]);
                    }
                }

                script.src = url;
                script.onload = script.onreadystatechange = function () {
                    if (!script.readyState || /loaded|complete/.test(script.readyState)) {
                        callback && callback();
                        script.onload = script.onreadystatechange = null;
                        if (script.parentNode && !prop) {
                            script.parentNode.removeChild(script);
                        }
                    }
                };
                head.insertBefore(script, null);
            }

            function report(){
                getScriptCache('//szhuodong.duowan.com/s/rp/ya-huya.min.js',function(){
                    var oHref = parseQueryString(location.search);
                    zhReport({
                        rso: oHref['promoter'] || oHref['rso'] || oHref['from'] || "",
                        rso_desc: oHref['rso_desc'] || "",
                        eid: "pageview/home",
                        eid_desc:"pageview/首页"
                    });

                },{
                    pro : 'huya_web',
                    id : 'yaScript'
                })
            }

            $win.on('load.report',function(){
                reportTimer && clearTimeout(reportTimer);
                $win.off('.report');
                $win=null;
                report();
            });

            reportTimer = setTimeout(function(){
                $win.off('.report');
                $win=null;
                report();
            }, 3500);

        })(window);
    </script>

    <script data-fixed="true">navigator.userAgent.toLocaleLowerCase().indexOf("chrome")<0&&(window.onerror=function(){try{console.log.apply(console,arguments)}catch(e){}return TT.isProd}),!function(e){e.loadScript(["//szhuodong.duowan.com/feq/huya/yy-f2e-huya.min"])}(function(){function e(t,n){var a=n[t];if(a){t++;var o=document.createElement("script");o.type="text/javascript",o.setAttribute("async","async"),o.onload=o.onreadystatechange=function(){return o.readyState&&"complete"!==o.readyState&&"loaded"!==o.readyState?!1:(o.onload=o.onreadystatechange=null,void e(t,n))};var r=new Date;r.setSeconds(0),r.setMilliseconds(0),r=r.getTime(),o.async=!0,o.src=a+"?_="+r,document.getElementsByTagName("head")[0].appendChild(o)}}return{loadScript:function(t){t&&t.length&&t instanceof Array&&e(0,t)}}}());</script>

@endsection
