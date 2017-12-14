@extends('article.common.category')
@section('content')
<div class="js-responded-list narrow">
        <div class="mod-list">
            <div class="box">
                <div class="box-hd clearfix">
                    <h2 class="title">
                        全部分类                    </h2>
                    <div class="filter">
                        <dl>
                            <dd bussType="0" class=" active all" ><a class="clickstat" href="http://www.huya.com/g" eid="click/list/allgame/all"   eid_desc="点击/列表页/全部游戏/全部">全部</a></dd>
                            <dd bussType="1" class="" ><a class="clickstat" href="http://www.huya.com/g_ol" eid="click/list/allgame/online"   eid_desc="点击/列表页/全部游戏/网游竞技">网游竞技</a></dd>
                            <dd bussType="2" class="" ><a class="clickstat" href="http://www.huya.com/g_pc" eid="click/list/allgame/danji" eid_desc="点击/列表页/全部游戏/单机热游">单机热游</a></dd>
                            <dd bussType="8" class="" ><a class="clickstat" href="http://www.huya.com/g_yl" eid="click/list/allgame/yule" eid_desc="点击/列表页/全部游戏/娱乐综艺">娱乐天地</a></dd>
                            <dd bussType="3" class="" ><a class="clickstat" href="http://www.huya.com/g_sy" eid="click/list/allgame/shouyou" eid_desc="点击/列表页/全部游戏/手游休闲">手游休闲</a></dd>

                        </dl>
                    </div>
                </div>
                <div class="box-bd">
<ul class="game-list clearfix" id="js-game-list">
    <li class="game-list-item" gid="1">
            <a target="_blank" href="http://www.huya.com/g/lol" class="pic new-clickstat" report='{"eid":"click/postion","position":"gameList/gameCard/1","game_id":"1"}'>
           <img class="pic-img" data-original="//huyaimg.msstatic.com/cdnimage/game/1-S.jpg?t=1513238400" src="//huyaimg.msstatic.com/cdnimage/game/1-S.jpg?t=1513238400" onerror="this.onerror=null; this.src='//a.msstatic.com/huya/main/assets/img/default/240x360.jpg';" alt="英雄联盟" title="英雄联盟">
            <h3 class="title">英雄联盟</h3>
        </a>
    </li>
</ul>
                                    </div>
            </div>
        </div>
    </div>
@endsection