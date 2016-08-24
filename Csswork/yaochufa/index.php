<!DOCTYPE html>
<html lang="zh-hans">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="【周边自驾游，就是要出发】要出发旅行网怎么样,要出发周边游旅行网是中国最专业周边自驾游、周边游玩预订网站,提供全国周边游线路的度假酒店,自助游,自由行,景点门票,温泉门票等超低折扣周边游团购。">
    <meta name="keywords" content="周边游,周边旅游,周末旅游,度假酒店,自驾游,自由行,景点门票">
    <title>要出发周边游|要出发旅行网官网精选家庭周末旅游团购,度假酒店,自驾游,自由行,景点门票</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <script>
        var w_userInfo = 0;
        var w_apiUrl = 'http://api.yaochufa.com/';
        var w_apiVersion = '3.7';
        var w_apiSystem = 'pc';
        var w_currentUrl = 'http://www.yaochufa.com';
        var w_siteUrl = 'http://www.yaochufa.com';
        var w_apiphpUrl = 'http://apiphp.yaochufa.com/';
        var w_header = 'gUTrvrB7YZhgRHvY%2FMdl%2BLJZcrV49SX5gViIYzLJ%2B%2Fyl1iFSjvIZtYLVvQV08OK3';
        var payApiUrl = 'http://payapi.yaochufa.com/';
        var w_provinceId = '23';
    </script>    <script>
        var sfCode = -1;
    </script>
</head>
<body>
    <!-- 公用头部模块 -->
    <div class="header">
        <!-- 顶部导航条 -->
        <div class="top-nav">
            <div class="wrapper clearfix">
                <div class="fl">
                    <span class="hello">您好，欢迎来到要出发!</span>
                    <span class="current">
                        <i class="icon icon-location"></i>
                        <em id="J-cur-province"></em>
                    </span>
                    <span class="change" id="J-change-province">
                        <em>更换省份</em>
                        <i class="icon icon-triangle-bottom"></i>
                    </span>
                </div>
                <div class="fr">
                    <span class="login" id="J-login-reg">[<a href="http://www.yaochufa.com/user/login?returnurl=http://www.yaochufa.com/" id="J-login">登录</a>]&nbsp;[<a href="http://www.yaochufa.com/user/register?returnurl=http://www.yaochufa.com/" id="J-reg">免费注册</a>]</span>                    <span class="viewed" id="J-open-viewd">
                        <i class="icon icon-clock"></i>
                        <em>最近浏览</em>
                        <i class="icon icon-triangle-bottom"></i>
                    </span>
                    <span class="app" id="J-wap">
                        <a href="http://www.yaochufa.com/app/" target="_blank">
                            <i class="icon icon-app"></i>
                            <em>手机APP</em>
                        </a>
                        <img src="picture/photo-app.png" alt="扫描进去手机版">
                    </span>
                </div>
                <!-- 省份列表 -->
                <table class="province-list" id="J-province-list">
                    <tr>
                        <th>华南地区</th>
                        <td>
                            <span id="GuangDong">广东</span>
                            <span id="HaiNan">海南</span>
                            <span id="FuJian">福建</span>
                            <span id="JiangXi">江西</span>
                            <span id="GuangXiZhuangZu">广西</span>
                        </td>
                    </tr>
                    <tr>
                        <th>华东地区</th>
                        <td>
                            <span id="ShangHai">上海</span>
                            <span id="ZheJiang">浙江</span>
                            <span id="JiangSu">江苏</span>
                            <span id="AnHui">安徽</span>
                            <span id="ShanDong">山东</span>
                        </td>
                    </tr>
                    <tr>
                        <th>华北地区</th>
                        <td>
                            <span id="BeiJing">北京</span>
                            <span id="TianJin">天津</span>
                            <span id="HeBei">河北</span>
                            <span id="ShanXi">山西</span>
                        </td>
                    </tr>
                    <tr>
                        <th>西南地区</th>
                        <td>
                            <span id="SiChuan">四川</span>
                            <span id="ZhongQing">重庆</span>
                            <span id="YunNan">云南</span>
                            <span id="GuiZhou">贵州</span>
                            <span id="XiCang">西藏</span>
                        </td>
                    </tr>
                    <tr>
                        <th>西北地区</th>
                        <td>
                            <span id="ShanXiSheng">陕西</span>
                            <span id="GanSu">甘肃</span>
                        </td>
                    </tr>
                    <tr>
                        <th>东北地区</th>
                        <td>
                            <span id="JiLin">吉林</span>
                            <span id="LiaoNing">辽宁</span>
                        </td>
                    </tr>
                    <tr>
                        <th>华中地区</th>
                        <td>
                            <span id="HuNan">湖南</span>
                            <span id="HuBei">湖北</span>
                            <span id="HeNan">河南</span>
                        </td>
                    </tr>
                    <tr>
                        <th>港澳台</th>
                        <td>
                            <span id="XiangGang">香港</span>
                            <span id="AoMen">澳门</span>
                        	<span id="TaiWan">台湾</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="last">*提示：根据你选择的省份，我们将为你切换至该地区的首页</td>
                    </tr>
                </table>
                <!-- 最近浏览 -->
                <ul class="viewed-list" id="J-viewed-list">
                	<li class="loading">
                        <img src="picture/loading.gif" alt="加载中...">
                    </li>
                </ul>
            </div>
        </div>
        <!-- 顶部广告条 -->
        <div class="wrapper top-banner" id="J-top-banner"></div>
        <!-- 头部Logo与搜索框 -->
        <div class="wrapper clearfix top-main">
            <!-- Logo -->
            <a href="http://www.yaochufa.com" class="logo">
                <img src="picture/logo.png" alt="要出发精选周边游">
            </a>
            <!-- 搜索框 -->
            <form class="search" id="J-search">
                <i class="icon icon-search"></i>
                <input type="text" value="目的地，酒店，景点关键字" class="search-box focus-input" id="J-search-box">
                <input type="submit" value="搜索" class="search-submit" data-site="http://www.yaochufa.com" data-search="http://s.yaochufa.com">
            </form>
            <!-- 用户订单信息 -->
            <div class="user-info" id="J-user-info">
                <div class="user-info-btn ovh">
                    <a href="http://www.yaochufa.com/usercenter/index" target="_blank" class="my-ycf"><i class="icon icon-user"></i>我的要出发</a>
                    <a href="http://www.yaochufa.com/usercenter/ordersearch" target="_blank" class="my-order"><i class="icon icon-order"></i><span>订单查询</span></a>
                </div>
                <ul class="ovh">
                    <li><a href="http://www.yaochufa.com/usercenter/orderlist?type=2" target="_blank">未付款订单<span></span></a></li>
                    <li><a href="http://www.yaochufa.com/usercenter/orderlist?type=1" target="_blank">已付款订单<span></span></a></li>
                    <li><a href="http://www.yaochufa.com/usercenter/coupons" target="_blank">我的现金券<span></span></a></li>
                </ul>
            </div>
        </div>
        <!-- 导航 -->
        <div class="wrapper menu clearfix">
            <!-- 左边导航列表 -->
            <div class="side-menu">
                <h2 class="menu-title">周边游推荐</h2>
                <div class="menu-wraper">
                    <div class="menu-mod">
                        <span><i class="icon icon-destination"></i></span>
                        <a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97" target="_blank" class="menu-mod-title">目的地：海南</a>
                        <ul>
                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%89%E4%BA%9A" target="_blank">三亚</a></li>
                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E6%B5%B7%E5%8F%A3" target="_blank">海口</a></li>
                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%87%E5%AE%81" target="_blank">万宁</a></li>
                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%BF%9D%E4%BA%AD" target="_blank">保亭</a></li>
                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E9%99%B5%E6%B0%B4" target="_blank">陵水</a></li>
                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E7%90%BC%E6%B5%B7" target="_blank">琼海</a></li>
                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%B4%E9%AB%98" target="_blank">临高</a></li>
                                                    </ul>
                    </div>
                    <div class="menu-mod">
                        <span><i class="icon icon-hot-scene"></i></span>
                        <a href="/scenic" target="_blank" class="menu-mod-title">热门景区</a>
                        <ul>
                                                        <li><a href="/scenic/info/1027" target="_blank">三亚湾</a></li>
                                                        <li><a href="/scenic/info/1035" target="_blank">亚龙湾</a></li>
                                                        <li><a href="/scenic/info/1356" target="_blank">海棠湾</a></li>
                                                        <li><a href="/scenic/info/1357" target="_blank">大东海</a></li>
                                                        <li><a href="/scenic/info/1496" target="_blank">大小洞天风景区</a></li>
                                                        <li><a href="/scenic/info/1495" target="_blank">南山寺</a></li>
                                                        <li><a href="/scenic/info/1494" target="_blank">蜈支洲岛</a></li>
                                                        <li><a href="/scenic/info/1493" target="_blank">亚龙湾热带天堂森林公园</a></li>
                                                        <li><a href="/scenic/info/1497" target="_blank">西岛</a></li>
                                                        <li><a href="/scenic/info/1688" target="_blank">海底世界</a></li>
                                                        <li><a href="/scenic/info/1689" target="_blank">玫瑰谷</a></li>
                                                    </ul>
                    </div>
                    <div class="menu-mod">
                        <span><i class="icon icon-recomm-theme"></i></span>
                        <a href="/theme" target="_blank" class="menu-mod-title">主题推荐</a>
                        <ul>
                                                        <li><a href="/theme/info/379" target="_blank">天下第一湾亚龙湾</a></li>
                                                        <li><a href="/theme/info/258" target="_blank">海南景区消暑大放价</a></li>
                                                        <li><a href="/theme/info/185" target="_blank">三亚景区门票</a></li>
                                                        <li><a href="/theme/info/54" target="_blank">玩转国内8大乐园</a></li>
                                                    </ul>
                    </div>
                    <div class="menu-mod download-app">
                        <span><i class="icon icon-download-app"></i></span>
                        <a href="/app" target="_blank">手机客户端下载</a>
                    </div>
                </div>
                <div class="menu-list">
                    <div class="menu-list-mod ml-destination">
                                                <dl>
                            <dt><span>当前省份：海南</span><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97" target="_blank">全部地区</a></dt>
                            <dd>
                                <ul>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E6%B5%B7%E5%8F%A3" target="_blank">海口</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%89%E4%BA%9A" target="_blank">三亚</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%87%E5%AE%81" target="_blank">万宁</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%BA%94%E6%8C%87%E5%B1%B1%E5%B8%82" target="_blank">五指山市</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E7%90%BC%E6%B5%B7" target="_blank">琼海</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E5%84%8B%E5%B7%9E" target="_blank">儋州</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E6%96%87%E6%98%8C" target="_blank">文昌</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%9C%E6%96%B9" target="_blank">东方</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E5%AE%9A%E5%AE%89" target="_blank">定安</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E5%B1%AF%E6%98%8C" target="_blank">屯昌</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E6%BE%84%E8%BF%88" target="_blank">澄迈</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%B4%E9%AB%98" target="_blank">临高</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E7%99%BD%E6%B2%99" target="_blank">白沙</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E6%98%8C%E6%B1%9F" target="_blank">昌江</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B9%90%E4%B8%9C" target="_blank">乐东</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E9%99%B5%E6%B0%B4" target="_blank">陵水</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%BF%9D%E4%BA%AD" target="_blank">保亭</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E7%90%BC%E4%B8%AD" target="_blank">琼中</a></li>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%89%E6%B2%99" target="_blank">三沙</a></li>
                                                                    </ul>
                            </dd>
                        </dl>
                                                <dl>
                            <dt><span>全国热门城市</span></dt>
                            <dd>
                                <ul>
                                                                        <li><a href="http://s.yaochufa.com/psc_%E5%8C%97%E4%BA%AC-city_%E5%8C%97%E4%BA%AC" target="_blank">北京</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E4%B8%8A%E6%B5%B7-city_%E4%B8%8A%E6%B5%B7" target="_blank">上海</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%89%E4%BA%9A" target="_blank">三亚</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E5%B9%BF%E4%B8%9C-city_%E5%B9%BF%E5%B7%9E" target="_blank">广州</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E4%BA%91%E5%8D%97-city_%E4%B8%BD%E6%B1%9F" target="_blank">丽江</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E5%B9%BF%E8%A5%BF-city_%E6%A1%82%E6%9E%97" target="_blank">桂林</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E7%A6%8F%E5%BB%BA-city_%E5%8E%A6%E9%97%A8" target="_blank">厦门</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E5%9B%9B%E5%B7%9D-city_%E6%88%90%E9%83%BD" target="_blank">成都</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E9%87%8D%E5%BA%86-city_%E9%87%8D%E5%BA%86" target="_blank">重庆</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E6%B1%9F%E8%8B%8F-city_%E8%8B%8F%E5%B7%9E" target="_blank">苏州</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E6%B5%99%E6%B1%9F-city_%E6%9D%AD%E5%B7%9E" target="_blank">杭州</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E5%B1%B1%E4%B8%9C-city_%E9%9D%92%E5%B2%9B" target="_blank">青岛</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E9%99%95%E8%A5%BF-city_%E8%A5%BF%E5%AE%89" target="_blank">西安</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E8%BE%BD%E5%AE%81-city_%E5%A4%A7%E8%BF%9E" target="_blank">大连</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E4%BA%91%E5%8D%97-city_%E5%A4%A7%E7%90%86" target="_blank">大理</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E9%A6%99%E6%B8%AF-city_%E9%A6%99%E6%B8%AF" target="_blank">香港</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E6%BE%B3%E9%97%A8-city_%E6%BE%B3%E9%97%A8" target="_blank">澳门</a></li>
                                                                         <li><a href="http://s.yaochufa.com/psc_%E5%8F%B0%E6%B9%BE-city_%E5%8F%B0%E5%8C%97" target="_blank">台北</a></li>
                                                                     </ul>
                            </dd>
                        </dl>
                    </div>
                    <div class="menu-list-mod ml-hot-scene">
                        <div class="thumb">
                                                                                        <a href="/scenic/info/1027" target="_blank">
                                    <img src="picture/5600d10859a49.jpg">
                                    <span>三亚湾</span>
                                </a>
                                                                                                                    <a href="/scenic/info/1035" target="_blank">
                                    <img src="picture/5539fc008a279.jpg">
                                    <span>亚龙湾</span>
                                </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                <dl class="right-list">
                            <dt>热门景区</dt>
                            <dd>
                                <ul>
                                                                                                                                                                                                                                                            <li><a href="/scenic/info/1356" target="_blank">海棠湾</a></li>
                                                                                                                                                <li><a href="/scenic/info/1357" target="_blank">大东海</a></li>
                                                                                                                                                <li><a href="/scenic/info/1496" target="_blank">大小洞天风景区</a></li>
                                                                                                                                                <li><a href="/scenic/info/1495" target="_blank">南山寺</a></li>
                                                                                                                                                <li><a href="/scenic/info/1494" target="_blank">蜈支洲岛</a></li>
                                                                                                                                                <li><a href="/scenic/info/1493" target="_blank">亚龙湾热带天堂森林公园</a></li>
                                                                                                                                                <li><a href="/scenic/info/1497" target="_blank">西岛</a></li>
                                                                                                                                                <li><a href="/scenic/info/1688" target="_blank">海底世界</a></li>
                                                                                                                                                <li><a href="/scenic/info/1689" target="_blank">玫瑰谷</a></li>
                                                                                                        </ul>
                            </dd>
                        </dl>
                                            </div>
                    <div class="menu-list-mod ml-recomm-theme">
                        <div class="thumb">
                                                                                    <a href="/theme/info/379" target="_blank">
                                <img src="picture/562490b61d742.jpg">
                                <span>天下第一湾亚龙湾</span>
                            </a>
                                                                                                                <a href="/theme/info/258" target="_blank">
                                <img src="picture/ooybafcxfpuak1q5aafuztll3d0984.jpg">
                                <span>海南景区消暑大放价</span>
                            </a>
                                                                                                                                                                                                </div>
                                                <dl class="right-list">
                            <dt>热门主题</dt>
                            <dd>
                                <ul>
                                                                                                                                                                                                                                                            <li><a href="/theme/info/185" target="_blank">三亚景区门票</a></li>
                                                                                                                                                <li><a href="/theme/info/54" target="_blank">玩转国内8大乐园</a></li>
                                                                                                        </ul>
                            </dd>
                        </dl>
                                            </div>
                </div>
            </div>
            <!-- 主导航 -->
            <div class="main-menu ovh" id="J-main-manu">
                <ul class="ovh">
                    <li class="active"><a href="http://www.yaochufa.com/">首页</a></li>
                    <li><a href="http://www.yaochufa.com/neworder">每周新品</a></li>
                    <li><a href="http://you.yaochufa.com/funny" id="you-link">好去处</a></li>
                    <li><a href="http://www.yaochufa.com/tuan">团购预约</a></li>
                    <li><a href="http://www.yaochufa.com/app">手机版下载</a></li>
                </ul>
                <span class="slider-border" id="J-slider-border"></span>
            </div>
        </div>
    </div>
    <!-- 右侧广告图 -->
    <div class="wrapper right-img" id="J-right-img"></div>
    <!-- 幻灯片 -->
    <div class="slideshow" id="J-slideshow"></div>
    <!-- 主内容 -->
    <div class="container">
        <!-- 城市周边游 -->
        <div class="section city-tour" id="J-city-tour">
            <div class="section-title">
                <h2><strong>城市周边游</strong><span>/&nbsp;&nbsp;海量周边实惠套餐</span></h2>
            </div>
            <div class="section-main border">
                <div class="sm-left">
                    <div class="tab-btn ovh">
                        <ul class="ovh">                                                                            <li  class="active" ><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%89%E4%BA%9A">三亚</a></li>
                                                                                                    <li ><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E6%B5%B7%E5%8F%A3">海口</a></li>
                                                                                                    <li ><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%87%E5%AE%81">万宁</a></li>
                                                                                                    <li ><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%BF%9D%E4%BA%AD">保亭</a></li>
                                                                                                    <li ><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E9%99%B5%E6%B0%B4">陵水</a></li>
                                                                                                    <li ><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E7%90%BC%E6%B5%B7">琼海</a></li>
                                                                                                    <li ><a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%B4%E9%AB%98">临高</a></li>
                                                                                                </ul>
                        <a href="http://s.yaochufa.com/psc_%E6%B5%B7%E5%8D%97-city_%E4%B8%89%E4%BA%9A" target="_blank" class="search-city" id="J-search-city"><span>三亚周边游</span><i class="icon-more">&gt;&gt;</i></a>
                    </div>
                    <div class="tab-main clearfix">
                                                                                                    <div class="tab-mod active">
                                                            <a class="package-mod" href="/package/16394" target="_blank" title="三亚&nbsp;|&nbsp;三亚山海天万豪酒店">
                                    <img src="picture/white_bg.png" class="lazy-load" data-original="http://cdn1.jinxidao.com/group1/M00/02/11/oYYBAFdP3_yAEyhCAAFmzZybpnI813.jpg?imageView2/1/w/296/h/166/q/100/" alt="三亚山海天万豪酒店">
                                    <strong class="title">三亚&nbsp;|&nbsp;三亚山海天万豪酒店</strong>
                                    <div class="recomm">
                                        <span><em>106</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>酒店背靠热带雨林覆盖的高山，眺望醉人海景，将摩登时尚气息与原始天然美景合二为一，豪华海景房为正面看海，角度很赞，并拥有三亚较大的儿童俱乐部。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>1898<span>起/份</span></strong>
                                            <em>门市价：11998</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>1.5折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/8757" target="_blank" title="三亚&nbsp;|&nbsp;三亚海棠湾9号酒店">
                                    <img src="picture/white_bg.png" class="lazy-load" data-original="http://cdn1.jinxidao.com/group1/M00/03/1E/oYYBAFeQmQuAZ7XWAATBL_VQKHk361.jpg?imageView2/1/w/296/h/166/q/100/" alt="三亚海棠湾9号酒店">
                                    <strong class="title">三亚&nbsp;|&nbsp;三亚海棠湾9号酒店</strong>
                                    <div class="recomm">
                                        <span><em>326</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>三亚海棠湾9号酒店是一家由凯莱酒店集团管理的典雅度假酒店，提供舒适的休憩空间，临庭可观洁白沙滩，临窗可观静谧园景，抑或远眺浩瀚中国南海海域。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>1256<span>起/份</span></strong>
                                            <em>门市价：1976</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>6.3折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/7687" target="_blank" title="三亚&nbsp;|&nbsp;三亚海棠湾万丽度假酒店">
                                    <img src="picture/white_bg.png" class="lazy-load" data-original="http://cdn1.jinxidao.com/group1/M00/00/91/oYYBAFbyOfSASc80AAE2Wn7tka4031.jpg?imageView2/1/w/296/h/166/q/100/" alt="三亚海棠湾万丽度假酒店">
                                    <strong class="title">三亚&nbsp;|&nbsp;三亚海棠湾万丽度假酒店</strong>
                                    <div class="recomm">
                                        <span><em>1486</em>人购买</span>
                                        <span><em>95%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>海棠湾万丽度假酒店秉承追求生活品味的一贯风格，将热带风情与中国宫殿式建筑融合在一起，让人从酒店精心设计的细节中感受愉悦，领略到这座城市独特的风情，发掘意外惊喜。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>580<span>起/份</span></strong>
                                            <em>门市价：888</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>6.5折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/12713" target="_blank" title="三亚&nbsp;|&nbsp;三亚半山半岛洲际度假酒店">
                                    <img src="picture/white_bg.png" class="lazy-load" data-original="http://cdn1.jinxidao.com/images/ProductList466/hl_12713_od_2_77673d4d33204d43a4a1fdb7f04c68cc.jpg?imageView2/1/w/296/h/166/q/100/" alt="三亚半山半岛洲际度假酒店">
                                    <strong class="title">三亚&nbsp;|&nbsp;三亚半山半岛洲际度假酒店</strong>
                                    <div class="recomm">
                                        <span><em>258</em>人购买</span>
                                        <span><em>96%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>环抱在群山碧海之间的三亚半山半岛洲际度假酒店，是三亚的天然热带生态绿洲。343套客房均拥有美丽的海景。别具风情的亲水景观与水上花园遍布整个酒店，轻松享受恬静假期。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>958<span>起/份</span></strong>
                                            <em>门市价：1288</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>7.4折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/11095" target="_blank" title="三亚&nbsp;|&nbsp;海南雅居乐莱佛士酒店">
                                    <img src="picture/white_bg.png" class="lazy-load" data-original="http://cdn1.jinxidao.com/group1/M00/01/6F/oYYBAFcpp7WALMxoAADMNgIAt98591.jpg?imageView2/1/w/296/h/166/q/100/" alt="海南雅居乐莱佛士酒店">
                                    <strong class="title">三亚&nbsp;|&nbsp;海南雅居乐莱佛士酒店</strong>
                                    <div class="recomm">
                                        <span><em>911</em>人购买</span>
                                        <span><em>97%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>雅居乐莱佛士酒店位于拥有“会唱歌的沙滩”之称的清水湾，客房设计灵感来源于巴厘岛和海南独特的民族风情，每间客房均设有观景落地窗及私人露台，让入住客人畅快享受南国海滨风情。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>2888<span>起/份</span></strong>
                                            <em>门市价：14000</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>2折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/21529" target="_blank" title="三亚&nbsp;|&nbsp;三亚龙兴莱曼海景度假酒店">
                                    <img src="picture/white_bg.png" class="lazy-load" data-original="http://cdn1.jinxidao.com/group1/M00/00/8C/ooYBAFbyKASAMIegAABykY7NeyM147.jpg?imageView2/1/w/296/h/166/q/100/" alt="三亚龙兴莱曼海景度假酒店">
                                    <strong class="title">三亚&nbsp;|&nbsp;三亚龙兴莱曼海景度假酒店</strong>
                                    <div class="recomm">
                                        <span><em>951</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>三亚龙兴莱曼海景度假酒店，全新庭院式生态园林度假型酒店，距天涯海角、南山寺（海上观音）约30分钟车程，出行、购物、游览观光、交通便捷。近市区览三亚湾美景，移步赏椰风海韵。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>206<span>起/份</span></strong>
                                            <em>门市价：999</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>2折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                        </div>
                                                                                                    <div class="tab-mod ">
                                                            <a class="package-mod" href="/package/22821" target="_blank" title="海口&nbsp;|&nbsp;海口观澜湖温泉">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/01/55/oYYBAFchrmGAVwgdAAIFb7_5B3c526.jpg?imageView2/1/w/296/h/166/q/100/" alt="海口观澜湖温泉">
                                    <strong class="title">海口&nbsp;|&nbsp;海口观澜湖温泉</strong>
                                    <div class="recomm">
                                        <span><em>1368</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>亚洲较大的火山岩矿温泉主题公园，有全球六大洲风格的火山岩矿温泉、设计独特的水疗中心和户外火山岩水上乐园三大板块，矿温泉迎宾大堂和水疗主楼是园区的重心和亮点。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>99<span>起/份</span></strong>
                                            <em>门市价：299</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>3.3折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/21849" target="_blank" title="海口&nbsp;|&nbsp;海口途家斯维登度假公寓（荣域海景店）">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/00/4F/oYYBAFbyFxGATYU8AABmmwNrZWI318.jpg?imageView2/1/w/296/h/166/q/100/" alt="海口途家斯维登度假公寓（荣域海景店）">
                                    <strong class="title">海口&nbsp;|&nbsp;海口途家斯维登度假公寓（荣域海景店）</strong>
                                    <div class="recomm">
                                        <span><em>353</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>公寓采用美国SWEETOME标准化酒店管理体系，小区幽雅宁静，建筑设计为西班牙式风格。温柔的海风带走一身的疲惫，在宁静的美景中净化心灵，闲适假日，踏上您的阳光海滨之旅吧。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>178<span>起/份</span></strong>
                                            <em>门市价：999</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>1.7折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/22188" target="_blank" title="海口&nbsp;|&nbsp;海口途家斯维登服务公寓（飞行公馆）">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/01/88/ooYBAFcxQU6ARhgnAAFuVgKMlO4961.jpg?imageView2/1/w/296/h/166/q/100/" alt="海口途家斯维登服务公寓（飞行公馆）">
                                    <strong class="title">海口&nbsp;|&nbsp;海口途家斯维登服务公寓（飞行公馆）</strong>
                                    <div class="recomm">
                                        <span><em>721</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>公寓毗邻海南省服务中心、海南省博物馆，其周边市政道路、广场、商业、文化、医疗、生活配套设施完备，10分钟车程可达海秀路商业圈、国贸商业圈，交通畅通，出行便利。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>258<span>起/份</span></strong>
                                            <em>门市价：819</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>3.1折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/21760" target="_blank" title="海口&nbsp;|&nbsp;海口观澜湖温泉酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/00/4F/ooYBAFbyF1qASqtoAABkyT4RjaI976.jpg?imageView2/1/w/296/h/166/q/100/" alt="海口观澜湖温泉酒店">
                                    <strong class="title">海口&nbsp;|&nbsp;海口观澜湖温泉酒店</strong>
                                    <div class="recomm">
                                        <span><em>77</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>酒店位于海口龙华区观澜湖大道，地处观澜湖度假区内，能俯瞰火山岩高尔夫球场，可便捷前往市区、美兰机场。客房充满海南风情，且均有观景阳台，可览高尔夫球场及度假区的天然景致。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>668<span>起/份</span></strong>
                                            <em>门市价：1900</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>3.5折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/14011" target="_blank" title="海口&nbsp;|&nbsp;海口万豪酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/00/7B/oYYBAFbyItKAEJg9AAB-t9nG74Y198.jpg?imageView2/1/w/296/h/166/q/100/" alt="海口万豪酒店">
                                    <strong class="title">海口&nbsp;|&nbsp;海口万豪酒店</strong>
                                    <div class="recomm">
                                        <span><em>149</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>酒店位于海口市美丽的西海岸，沿线是长达数十公里风景无限的滨海椰林大道。酒店凭海临风，所有客房均设有私人海景阳台，面朝大海，西海岸秀丽风光一览无遗。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>1018<span>起/份</span></strong>
                                            <em>门市价：2999</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>3.3折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/23641" target="_blank" title="海口&nbsp;|&nbsp;观澜湖冯小刚电影公社门票">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/01/B7/ooYBAFc6i8GALTVyAAFzxW5jV54041.jpg?imageView2/1/w/296/h/166/q/100/" alt="观澜湖冯小刚电影公社门票">
                                    <strong class="title">海口&nbsp;|&nbsp;观澜湖冯小刚电影公社门票</strong>
                                    <div class="recomm">
                                        <span><em>216</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>观澜湖冯小刚电影公社是以导演个人命名的电影主题旅游项目，景区内可感受《唐山大地震》的震撼场景，品味《非诚勿扰》里的恋爱氛围等，冯氏电影里的场景似乎触手可及。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>115<span>起/份</span></strong>
                                            <em>门市价：138</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>8.3折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                        </div>
                                                                                                    <div class="tab-mod ">
                                                            <a class="package-mod" href="/package/9066" target="_blank" title="万宁&nbsp;|&nbsp;万宁中奥戴斯温泉度假酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/03/7E/oYYBAFepm0-AEfcKAAKQZU7OhnQ124.jpg?imageView2/1/w/296/h/166/q/100/" alt="万宁中奥戴斯温泉度假酒店">
                                    <strong class="title">万宁&nbsp;|&nbsp;万宁中奥戴斯温泉度假酒店</strong>
                                    <div class="recomm">
                                        <span><em>407</em>人购买</span>
                                        <span><em>96%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>万宁中奥戴斯温泉度假酒店，位于美丽的海南石梅湾之滨，鹭栖湖畔的泰式风情酒店，独栋别墅，私家泳池、温泉，舒心享受，度过一个悠闲惬意的午后！</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>588<span>起/份</span></strong>
                                            <em>门市价：988</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>5.9折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                        </div>
                                                                                                    <div class="tab-mod ">
                                                            <a class="package-mod" href="/package/22192" target="_blank" title="保亭黎族苗族自治县&nbsp;|&nbsp;保亭戴斯温泉酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/00/73/ooYBAFbyIQGAYYotAABPjpoU7Hk626.jpg?imageView2/1/w/296/h/166/q/100/" alt="保亭戴斯温泉酒店">
                                    <strong class="title">保亭&nbsp;|&nbsp;保亭戴斯温泉酒店</strong>
                                    <div class="recomm">
                                        <span><em>508</em>人购买</span>
                                        <span><em>0%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>戴斯温泉酒店坐落于美丽的海南省南部内陆，拥有北纬18°热带雨林气候，地理位置较佳，是一家集商务、旅游、休闲、会议为一体的城市度假酒店。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>318<span>起/份</span></strong>
                                            <em>门市价：996</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>3.1折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/9892" target="_blank" title="保亭黎族苗族自治县&nbsp;|&nbsp;七仙岭君澜度假酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/images/ProductList466/hl_9892_od_2_01443837f5dd4a5db74d5e34f2f376ac.jpg?imageView2/1/w/296/h/166/q/100/" alt="七仙岭君澜度假酒店">
                                    <strong class="title">保亭&nbsp;|&nbsp;七仙岭君澜度假酒店</strong>
                                    <div class="recomm">
                                        <span><em>1213</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>七仙岭君澜度假酒店是以“热带雨林”和“野溪温泉”为主题的养生度假酒店，在中国优质天然氧吧倡导以自然之道养自然之身，传递出健康、自然、纯朴的理念，是养生型酒店。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>688<span>起/份</span></strong>
                                            <em>门市价：1688</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>4折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/19724" target="_blank" title="保亭黎族苗族自治县&nbsp;|&nbsp;保亭七仙瑶池酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/01/9D/oYYBAFcz6suAO1mQAAHzEQzMAPA521.jpg?imageView2/1/w/296/h/166/q/100/" alt="保亭七仙瑶池酒店">
                                    <strong class="title">保亭&nbsp;|&nbsp;保亭七仙瑶池酒店</strong>
                                    <div class="recomm">
                                        <span><em>395</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>保亭七仙瑶池温泉度假酒店位于七仙岭国家热带雨林温泉森林公园内，周围是连绵的群山、清澈池水，云雾飘渺像一幅立体的山水画卷。打开房门和落地窗，清新的空气扑鼻而来。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>850<span>起/份</span></strong>
                                            <em>门市价：1888</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>4.5折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/19524" target="_blank" title="保亭黎族苗族自治县&nbsp;|&nbsp;七仙岭国家森林公园门票">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/images/ProductList466/hl_19524_od_1_f2e99c2446694db0818c4d5da9fdb28d.jpg?imageView2/1/w/296/h/166/q/100/" alt="七仙岭国家森林公园门票">
                                    <strong class="title">保亭&nbsp;|&nbsp;七仙岭国家森林公园门票</strong>
                                    <div class="recomm">
                                        <span><em>49</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>公园距县城7公里，境内有独特的温泉、奇峰、田园风格、民俗风情。是海南岛目前仅存较为完好的热带雨林之一，古树参天，藤萝交织，已探明的各类珍奇植物5000多种，野生动物500多种。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>38<span>起/份</span></strong>
                                            <em>门市价：53</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>7.1折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/22773" target="_blank" title="保亭黎族苗族自治县&nbsp;|&nbsp;保亭七仙河畔度假酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/00/08/ooYBAFbvppKAIWOvAACFIaa8NGw678.jpg?imageView2/1/w/296/h/166/q/100/" alt="保亭七仙河畔度假酒店">
                                    <strong class="title">保亭&nbsp;|&nbsp;保亭七仙河畔度假酒店</strong>
                                    <div class="recomm">
                                        <span><em>55</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>七仙河畔度假酒店位于温泉南路，毗邻保亭县七仙广场和七仙河边，地理位置优良，站于酒店顶楼登高远眺，可览保亭全貌，让人心旷神怡，流连忘返，是您商务、休闲、度假旅游的上佳选择。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>288<span>起/份</span></strong>
                                            <em>门市价：338</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>8.5折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/24936" target="_blank" title="保亭黎族苗族自治县&nbsp;|&nbsp;布隆寨亲子自驾乡村两日游">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/02/EC/oYYBAFeHBDaAFXwLAAFBo_ZcmHE795.jpg?imageView2/1/w/296/h/166/q/100/" alt="布隆寨亲子自驾乡村两日游">
                                    <strong class="title">保亭&nbsp;|&nbsp;布隆寨亲子自驾乡村两日游</strong>
                                    <div class="recomm">
                                        <span><em>0</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>布隆赛乡村文化旅游区近原生态热带雨林，离呀诺达热带雨林景区仅500米，是个具有黎族风情的文化村庄。听着蛙声入眠、被鸟鸣叫醒、稻田无边际泳池等将开启您浪漫的悠闲假期！</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>688<span>起/份</span></strong>
                                            <em>门市价：1888</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>3.6折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                        </div>
                                                                                                    <div class="tab-mod ">
                                                            <a class="package-mod" href="/package/12196" target="_blank" title="陵水黎族自治县&nbsp;|&nbsp;三亚分界洲岛海钓会所">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/images/ProductList466/hl_12196_od_2_d4d330e4d2e34d97823ddae4bc6ae923.jpg?imageView2/1/w/296/h/166/q/100/" alt="三亚分界洲岛海钓会所">
                                    <strong class="title">陵水&nbsp;|&nbsp;三亚分界洲岛海钓会所</strong>
                                    <div class="recomm">
                                        <span><em>2407</em>人购买</span>
                                        <span><em>95%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>充满趣味的海岛型度假区，三亚分界洲岛海钓会所提供潜水、海钓、海底潜艇观光、游艇、鲸鲨观光、住宿、餐饮、海岛婚礼等旅行服务，被称为是“浮在南海上的美丽遗世孤岛”。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>558<span>起/份</span></strong>
                                            <em>门市价：1888</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>2.9折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/18866" target="_blank" title="陵水黎族自治县&nbsp;|&nbsp;南湾猴岛旅游区门票">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/01/D8/ooYBAFc-5zKAHJU-AAFc1T6MG4s875.jpg?imageView2/1/w/296/h/166/q/100/" alt="南湾猴岛旅游区门票">
                                    <strong class="title">陵水&nbsp;|&nbsp;南湾猴岛旅游区门票</strong>
                                    <div class="recomm">
                                        <span><em>133</em>人购买</span>
                                        <span><em>92%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>猴岛内的跨海观光索道将神秘的南湾猴岛、迷人的热带港湾、浓郁的“疍家民俗风情”、喧闹的渔港风光串成一线。乘缆车在海面上越空滑行，可俯瞰港口处千帆竞发，渔排林立的盛景。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>138<span>起/份</span></strong>
                                            <em>门市价：224</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>6.1折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/19575" target="_blank" title="陵水黎族自治县&nbsp;|&nbsp;海南清水湾假日度假酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/images/ProductList466/hl_19575_od_1_5ba21bb48ab94edd98aff1bad3f642ba.jpg?imageView2/1/w/296/h/166/q/100/" alt="海南清水湾假日度假酒店">
                                    <strong class="title">陵水&nbsp;|&nbsp;海南清水湾假日度假酒店</strong>
                                    <div class="recomm">
                                        <span><em>12</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>酒店坐落于清水湾大道，距离三亚凤凰机场56分钟车程，举步可达拥有36洞的清水湾高尔夫球会，尽享挥杆之乐。近猴岛、呀诺达热带雨林景区、海洋公园、游艇码头等景点仅需10分钟车程。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>446<span>起/份</span></strong>
                                            <em>门市价：5888</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>0.7折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/19186" target="_blank" title="陵水黎族自治县&nbsp;|&nbsp;分界洲岛旅游区门票">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/images/ProductList466/hl_19186_od_1_57398f90f481429eb5e2a642af306360.jpg?imageView2/1/w/296/h/166/q/100/" alt="分界洲岛旅游区门票">
                                    <strong class="title">陵水&nbsp;|&nbsp;分界洲岛旅游区门票</strong>
                                    <div class="recomm">
                                        <span><em>701</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>海南分界洲岛旅游区，海岛型国家5A级景区，这座被称为浮在南海上的美丽遗世孤岛，有明亮的海沙，湛蓝的大海，以及热带原始岛屿特有的地貌、海洋生物资源。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>68<span>起/份</span></strong>
                                            <em>门市价：168</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>4折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                        </div>
                                                                                                    <div class="tab-mod ">
                                                            <a class="package-mod" href="/package/19939" target="_blank" title="琼海&nbsp;|&nbsp;海南琼海道纪养生度假酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/images/ProductList466/hl_19939_od_1_6eae8d0dae6545998c6f9565aabcb6ac.jpg?imageView2/1/w/296/h/166/q/100/" alt="海南琼海道纪养生度假酒店">
                                    <strong class="title">琼海&nbsp;|&nbsp;海南琼海道纪养生度假酒店</strong>
                                    <div class="recomm">
                                        <span><em>50</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>酒店位于滨海旅游度假区鹏欣白金湾内，毗邻亚洲论坛永久会址，坐拥绵延1600米的白色沙滩和绝美海岸线。特设宽敞道德堂，让修道的朋友能在宽敞、安静的环境中静心修行，感悟道意。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>308<span>起/份</span></strong>
                                            <em>门市价：980</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>3.1折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/20031" target="_blank" title="琼海&nbsp;|&nbsp;海南博鳌国宾馆">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/02/47/oYYBAFdfnp6AKty7AAC3MrjbMgo063.jpg?imageView2/1/w/296/h/166/q/100/" alt="海南博鳌国宾馆">
                                    <strong class="title">琼海&nbsp;|&nbsp;海南博鳌国宾馆</strong>
                                    <div class="recomm">
                                        <span><em>149</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>博鳌国宾馆坐落于海南博鳌龙潭岭主峰山麓，近邻博鳌亚洲论坛永久会址，群山环绕，椰林密布，是该地区高点，宽阔的园林景观，树荫密布，仿佛置身南海丛林之中。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>498<span>起/份</span></strong>
                                            <em>门市价：1588</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>3.1折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                            <a class="package-mod" href="/package/22887" target="_blank" title="琼海&nbsp;|&nbsp;琼海官塘御泉庄温泉酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/00/08/oYYBAFbvrgKAZc4VAAGr79sq0Xs809.jpg?imageView2/1/w/296/h/166/q/100/" alt="琼海官塘御泉庄温泉酒店">
                                    <strong class="title">琼海&nbsp;|&nbsp;琼海官塘御泉庄温泉酒店</strong>
                                    <div class="recomm">
                                        <span><em>25</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>酒店位于风景如画的琼海官塘国家旅游度假区，地处黄金核心地段，距市区、高铁站仅10至15分钟车程，交通便捷，集客房、餐饮、会议活动、健康养生、休闲娱乐为一体。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>398<span>起/份</span></strong>
                                            <em>门市价：1388</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>2.8折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                        </div>
                                                                                                    <div class="tab-mod ">
                                                            <a class="package-mod" href="/package/19321" target="_blank" title="临高县&nbsp;|&nbsp;临高碧桂园金沙滩温泉度假酒店">
                                    <img src="picture/white_bg.png" class="lazy" data-original="http://cdn1.jinxidao.com/group1/M00/00/DB/ooYBAFcF2AWAQ7S-AAHEbuxfUJw942.jpg?imageView2/1/w/296/h/166/q/100/" alt="临高碧桂园金沙滩温泉度假酒店">
                                    <strong class="title">临高&nbsp;|&nbsp;临高碧桂园金沙滩温泉度假酒店</strong>
                                    <div class="recomm">
                                        <span><em>325</em>人购买</span>
                                        <span><em>100%</em>好评</span>
                                    </div>
                                    <div class="des">
                                        <p>酒店位于海口西美丽的月牙形海湾——龙波湾滨海旅游度假区，酒店集度假、会议、餐饮、娱乐、休闲于一体，“热情微笑，尽善尽美”的殷殷待客之道，尽显东方夏威夷的无限魅力。</p>
                                        <span class="price">
                                            <strong><i>&yen;</i>458<span>起/份</span></strong>
                                            <em>门市价：1288</em>                                            <span class="sale-tips"><i class="icon icon-sale"></i>3.5折</span>
                                        </span>
                                    </div>
                                    <div class="tips hide">
                                                                                                                        <!--<i class="icon icon-minus">立减</i>-->
                                    </div>
                                </a>
                                                        </div>
                                                                                            </div>
                </div>
                <div class="sm-right">
                    <h3>新品推荐<a href="/neworder" target="_blank">查看全部<i class="icon-more">&gt;&gt;</i></a></h3>
                    <ul>
                                                <li>
                            <a href="/package/25769" target="_blank" title="广州-珠海长隆海洋王国往返巴士票" alt="往返巴士带你直通长隆海洋王国！刺激为主的雨林飞翔，娱乐观赏为主的海洋奇观，亲子项目为主的缤纷世界，海豚主题的海豚湾，冰雪主题的极地探险……表演为主的横琴海一次过玩转。">
                                <img src="picture/white_bg.png" data-original="http://cdn1.jinxidao.com/group1/M00/03/BA/ooYBAFe2Z-OAZjfhAADEnNgIcNY953.jpg?imageView2/1/w/220/h/128/q/100/" class="lazy-load" alt="广州-珠海长隆海洋王国往返巴士票">
                                <span class="title">广州-珠海长隆海洋王国往返巴士票</span>
                                <p>
                                                                        <span>
                                                                                <strong><i>&yen;</i>38</strong>
                                    </span>
                                </p>
                            </a>
                        </li>
                                                <li>
                            <a href="/package/25767" target="_blank" title="广州白云机场城市飞行俱乐部" alt="广州城市飞行会成立于2015年，现拥有1:1全尺寸仿真Cessna 172R训练模拟舱2台及R22训练模拟舱1台，新奇的体验、美妙的景色、神秘的工作、刺激的过程，每次起飞都是全新的体验和挑战。">
                                <img src="picture/white_bg.png" data-original="http://cdn1.jinxidao.com/group1/M00/03/BE/oYYBAFe20HqADUU9AAG_93tmVu4838.jpg?imageView2/1/w/220/h/128/q/100/" class="lazy-load" alt="广州白云机场城市飞行俱乐部">
                                <span class="title">广州白云机场城市飞行俱乐部</span>
                                <p>
                                    <em class="sale-tips"><i class="icon icon-sale"></i>3.3折</em>                                    <span>
                                        <em>门市价&yen;588</em>                                        <strong><i>&yen;</i>198</strong>
                                    </span>
                                </p>
                            </a>
                        </li>
                                                <li>
                            <a href="/package/25731" target="_blank" title="龙归寨瀑布" alt="瀑布位于丰顺县汤坑镇中部偏南，距县城13公里，来源于海拔1285米的释迦山脉。站在瀑布下面，感受瀑布从崖顶上咆哮，伴着阵阵轰鸣之声，喷云崩雾泻下来，撞向深潭，何其壮观。">
                                <img src="picture/white_bg.png" data-original="http://cdn1.jinxidao.com/group1/M00/03/BE/ooYBAFe2yKGAP_52AAGMZ2j6DRY285.jpg?imageView2/1/w/220/h/128/q/100/" class="lazy-load" alt="龙归寨瀑布">
                                <span class="title">龙归寨瀑布</span>
                                <p>
                                    <em class="sale-tips"><i class="icon icon-sale"></i>9折</em>                                    <span>
                                        <em>门市价&yen;50</em>                                        <strong><i>&yen;</i>45</strong>
                                    </span>
                                </p>
                            </a>
                        </li>
                                            </ul>
                </div>
            </div>
        </div>
        <!-- 周边景区 -->
        <div class="section around-tour">
            <div class="section-title">
                <h2><a href="/scenicnear" target="_blank">周边景区</a><span>/&nbsp;&nbsp;享受不一样的风情</span></h2>
            </div>
            <div class="section-main border">
                <div class="sm-left">
                    <ul>
                                                <li class="big-img">
                            <a href="/scenic/info/1493" target="_blank">
                                <img src="picture/white_bg.png" data-original="http://cdn6.jinxidao.com/uploads/201508/55c1856c67f7a.jpg?imageView2/1/w/518/h/290/q/100/" class="lazy-load" alt="亚龙湾热带天堂森林公园" title="亚龙湾热带天堂森林公园">
                                <div>
                                    <p>
                                        <strong>三亚市&nbsp;亚龙湾热带天堂森林公园</strong>
                                        <em>海南省三亚市亚龙湾国家旅游度假区	</em>
                                    </p>
                                </div>
                            </a>
                        </li>
                                                                                                                                                <li>
                            <a href="/scenic/info/1496" target="_blank">
                                <img src="picture/white_bg.png" data-original="http://cdn6.jinxidao.com/uploads/201508/55c184c39500b.jpg?imageView2/1/w/186/h/140/q/100/" class="lazy-load" alt="大小洞天风景区" title="大小洞天风景区">
                                <div>
                                    <span>三亚市&nbsp;大小洞天风景区</span>
                                </div>
                            </a>
                        </li>
                                                                                                <li>
                            <a href="/scenic/info/1494" target="_blank">
                                <img src="picture/white_bg.png" data-original="http://cdn6.jinxidao.com/uploads/201508/55c189422de39.jpg?imageView2/1/w/186/h/140/q/100/" class="lazy-load" alt="蜈支洲岛" title="蜈支洲岛">
                                <div>
                                    <span>三亚市&nbsp;蜈支洲岛</span>
                                </div>
                            </a>
                        </li>
                                                                                                <li>
                            <a href="/scenic/info/1359" target="_blank">
                                <img src="picture/white_bg.png" data-original="http://cdn6.jinxidao.com/uploads/201509/56027a6460a49.jpg?imageView2/1/w/186/h/140/q/100/" class="lazy-load" alt="七仙岭国家森林公园" title="七仙岭国家森林公园">
                                <div>
                                    <span>保亭黎族苗族自治县&nbsp;七仙岭国家森林公园</span>
                                </div>
                            </a>
                        </li>
                                                                                                <li>
                            <a href="/scenic/info/1191" target="_blank">
                                <img src="picture/white_bg.png" data-original="http://cdn6.jinxidao.com/uploads/201509/560272dd1e03d.jpg?imageView2/1/w/186/h/140/q/100/" class="lazy-load" alt="分界洲岛旅游区" title="分界洲岛旅游区">
                                <div>
                                    <span>陵水黎族自治县&nbsp;分界洲岛旅游区</span>
                                </div>
                            </a>
                        </li>
                                                                                                                                                                                                                                                                                                                                                                    </ul>
                </div>
                <div class="sm-right">
                    <h3>旅游攻略<a href="http://you.yaochufa.com/" target="_blank">查看全部<i class="icon-more">&gt;&gt;</i></a></h3>
                    <ul class="color-list">
                                                                                                    <li>
                                                                    <a href="http://you.yaochufa.com/v_wx201406215" target="_blank">
                                        <strong class="color1">文昌</strong>
                                        <span>12月最美旅行地，一定不能错过！</span>
                                    </a>
                                                            </li>
                                                                                                    <li>
                                                                    <a href="http://you.yaochufa.com/v_wx200656642" target="_blank">
                                        <strong class="color2">三沙</strong>
                                        <span>竟然可以去西沙旅游了！一个肾6的价格都不到！</span>
                                    </a>
                                                            </li>
                                                                                                    <li>
                                                                    <a href="http://you.yaochufa.com/v_sanyaxidao" target="_blank">
                                        <strong class="color3">三亚</strong>
                                        <span>一半海洋，一半天堂——三亚西岛</span>
                                    </a>
                                                            </li>
                                                                                                    <li>
                                                                    <a href="http://you.yaochufa.com/v_haikouyiryou" target="_blank">
                                        <strong class="color4">海口</strong>
                                        <span>海口24小时的美好光景</span>
                                    </a>
                                                            </li>
                                                                                                    <li>
                                                                    <a href="http://you.yaochufa.com/v_wx200598468" target="_blank">
                                        <strong class="color5">微攻略</strong>
                                        <span>强烈推荐！全国198个免费景点，史上最全版！</span>
                                    </a>
                                                            </li>
                                                                                                    <li>
                                                                    <a href="http://you.yaochufa.com/v_wx200596134" target="_blank">
                                        <strong class="color6">三亚</strong>
                                        <span>亲子游不可错过的八大胜地</span>
                                    </a>
                                                            </li>
                                                                                                    <li>
                                                                    <a href="http://you.yaochufa.com/v_wx200585010" target="_blank">
                                        <strong class="color7">三亚</strong>
                                        <span>海南鲜为人知的秘境！别再去三亚看人人人啦~</span>
                                    </a>
                                                            </li>
                                                                                                    <li>
                                                                    <a href="http://you.yaochufa.com/v_hainansanyawan" target="_blank">
                                        <strong class="color8">三亚</strong>
                                        <span>逃离人潮——奔向海南三亚湾（海量美图！）</span>
                                    </a>
                                                            </li>
                                                                                            </ul>
                </div>
            </div>
        </div>
        <!-- 精品主题 -->
        <div class="section choice-tour">
            <div class="section-title">
                <h2><a href="/theme" target="_blank">精选主题</a><span>/&nbsp;&nbsp;玩转当季热门</span></h2>
            </div>
            <div class="section-main border">
                <div class="sm-left">
                    <ul>
                                                                        <li>
                            <a href="/theme/info/353" target="_blank">
                                <img src="picture/white_bg.png" data-original="http://cdn6.jinxidao.com/group1/M00/03/15/ooYBAFePHviAXdBKAAFd3hrA_EM829.jpg?imageView2/1/w/296/h/174/q/100/" class="lazy-load" alt="鼓浪屿情调酒店" title="鼓浪屿情调酒店">
                                <div>
                                    <strong>鼓浪屿情调酒店</strong>
                                                                                                        </div>
                            </a>
                        </li>
                                                                                                <li>
                            <a href="/theme/info/315" target="_blank">
                                <img src="picture/white_bg.png" data-original="http://cdn6.jinxidao.com/uploads/201509/55f7c46de6342.jpg?imageView2/1/w/296/h/174/q/100/" class="lazy-load" alt="江南七大古镇" title="江南七大古镇">
                                <div>
                                    <strong>江南七大古镇</strong>
                                                                                                        </div>
                            </a>
                        </li>
                                                                                                <li>
                            <a href="/theme/info/366" target="_blank">
                                <img src="picture/white_bg.png" data-original="http://cdn6.jinxidao.com/uploads/201510/5616291918b13.jpg?imageView2/1/w/296/h/174/q/100/" class="lazy-load" alt="大理精品客栈" title="大理精品客栈">
                                <div>
                                    <strong>大理精品客栈</strong>
                                                                                                        </div>
                            </a>
                        </li>
                                                                    </ul>
                </div>
                <div class="sm-right">
                    <div>
                        <h3>全国热门<a href="http://s.yaochufa.com" target="_blank">查看全部<i class="icon-more">&gt;&gt;</i></a></h3>
                        <a href="#" target="_blank" class="head ovh" id="J-hot-package"></a>
                                                <ul class="ovh">
                                                        <li><a href="http://s.yaochufa.com/city_三亚" target="_blank">三亚</a></li>
                                                        <li><a href="http://s.yaochufa.com/city_丽江" target="_blank">丽江</a></li>
                                                        <li><a href="http://s.yaochufa.com/city_厦门" target="_blank">厦门</a></li>
                                                        <li><a href="http://s.yaochufa.com/city_重庆" target="_blank">重庆</a></li>
                                                        <li><a href="http://s.yaochufa.com/city_苏州" target="_blank">苏州</a></li>
                                                        <li><a href="http://s.yaochufa.com/city_杭州" target="_blank">杭州</a></li>
                                                        <li><a href="http://s.yaochufa.com/city_青岛" target="_blank">青岛</a></li>
                                                        <li><a href="http://s.yaochufa.com/city_香港" target="_blank">香港</a></li>
                                                        <li><a href="http://s.yaochufa.com/city_台北" target="_blank">台北</a></li>
                                                    </ul>
                                            </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 右侧固定导航栏 -->
    <ul class="fixed-navbar">
        <li class="download-app">
            <a href="#" target="_blank">
                <i>扫二维码</i>
                <div>
                    <strong>下载要出发APP</strong>
                    <img src="picture/appcode.png">
                </div>
            </a>
        </li>
        <li class="service-tel">
            <a href="#" target="_blank">
                <i>客服电话</i>
                <div>
                    <span>24小时客服电话</span>
                    <em>400-118-1166</em>
                </div>
            </a>
        </li>
        <li class="weixin">
            <a href="#" target="_blank">
                <i>关注微信</i>
                <div>
                    <strong>关注微信公众号</strong>
                    <img src="picture/weixin_code.png">
                </div>
            </a>
        </li>
        <li class="backto-top">
            <a href="#" target="_blank">
                <i>返回顶部</i>
            </a>
        </li>
    </ul>

    <!-- 底部链接图标 -->
    <div class="footer-links">
        <div>
            <ul>
                <li><i></i><a href="http://about.yaochufa.com/service" target="_blank">品质承诺</a></li>
                <li><i class="link2"></i><a href="http://about.yaochufa.com/service" target="_blank">无房退款</a></li>
                <li><i class="link3"></i><a href="http://e.weibo.com/yaochufa?ref=http%3A%2F%2Fwww.yaochufa.com%2F" target="_blank">关注我们</a></li>
                <li><i class="link4"></i><a href="http://about.yaochufa.com/help_yuding" target="_blank">帮助中心</a></li>
                <li><i class="link5"></i><a href="/app/" target="_blank">APP下载</a></li>
            </ul>
        </div>
    </div>
    <!-- 右侧固定导航栏 -->
    <ul class="fixed-navbar">
        <li class="download-app">
            <a href="#" target="_blank">
                <i>扫二维码</i>
                <div>
                    <strong>下载要出发APP</strong>
                    <img src="picture/appcode.png">
                </div>
            </a>
        </li>
        <li class="service-tel">
            <a href="#" target="_blank">
                <i>客服电话</i>
                <div>
                    <span>24小时客服电话</span>
                    <em>400-118-1166</em>
                </div>
            </a>
        </li>
        <li class="weixin">
            <a href="#" target="_blank">
                <i>关注微信</i>
                <div>
                    <strong>关注微信公众号</strong>
                    <img src="picture/weixin_code.png">
                </div>
            </a>
        </li>
        <li class="backto-top">
            <a href="#" target="_blank">
                <i>返回顶部</i>
            </a>
        </li>
    </ul>
    <!-- 公用底部模块 -->
    <div class="footer">
        <div class="wrapper">
            <!-- 底部导航 -->
            <dl class="first">
                <dt>关于要出发</dt>
                <dd><a href="http://about.yaochufa.com/Team" target="_blank">团队介绍</a></dd>
                <dd><a href="http://job.yaochufa.com/" target="_blank">招聘信息</a></dd>
                <dd><a href="http://about.yaochufa.com/ycf_news" target="_blank">新闻动态</a></dd>
            </dl>
            <dl>
                <dt>帮助中心</dt>
                <dd><a href="http://about.yaochufa.com/help_faq" target="_blank">常见问题</a></dd>
                <dd><a href="http://about.yaochufa.com/help_jifen" target="_blank">积分规则</a></dd>
                <dd><a href="http://about.yaochufa.com/help_xianjinquan" target="_blank">现金券规则</a></dd>
                <dd><a href="http://about.yaochufa.com/help_yuding" target="_blank">预订说明</a></dd>
                <dd><a href="http://about.yaochufa.com/help_tuangou" target="_blank">团购预约</a></dd>
                <dd><a href="http://about.yaochufa.com/Pay" target="_blank">支付说明</a></dd>
            </dl>
            <dl>
                <dt>客户服务</dt>
                <dd><a href="http://about.yaochufa.com/service" target="_blank">品质承诺</a></dd>
                <dd><a href="javascript:;">客服及投诉电话</a><strong>&nbsp;400-118-1166  / 020-62312938</strong></dd>
                <dd><a href="http://www.yaochufa.com/tuan" target="_blank">自助预约</a></dd>
                <dd><a href="http://about.yaochufa.com/contact" target="_blank">联系我们</a></dd>
                <dd>广州市政务服务热线&nbsp;<strong>12345</strong></dd>
            </dl>
            <!-- 二维码 -->
            <ul class="qr-code">
                <li><a href="http://www.yaochufa.com/app/" target="_blank"><img src="picture/appcode.png" alt="APP下载"></a>APP下载</li>
                <li><img src="picture/weixin_code.png" alt="微信公众号">微信公众号</li>
            </ul>
            <!-- 友情链接 -->
                            <div class="links">
                    <strong>友情链接：</strong>
                                    <a href="http://www.movieroad.cn/" target="_blank" rel="nofollow">如影旅行网</a>
                                    <a href="http://www.uyzjj.cn" target="_blank" rel="nofollow">张家界旅游攻略</a>
                                    <a href="http://www.wuzhenba.com" target="_blank" rel="nofollow">乌镇旅游</a>
                                    <a href="http://news.canpw.com" target="_blank" rel="nofollow">航空资讯网</a>
                                    <a href="http://bbs.pcbaby.com.cn/pick-1828_postat.html" target="_blank" rel="nofollow">亲子游记</a>
                                    <a href="http://www.nmglyw.com" target="_blank" rel="nofollow">内蒙古旅游网</a>
                                    <a href="http://www.sichuanmap.com" target="_blank" rel="nofollow">四川旅游景点</a>
                                    <a href="http://www.nbccts.com" target="_blank" rel="nofollow">宁波旅行社</a>
                                    <a href="http://www.xf-td.com" target="_blank" rel="nofollow">深圳旅行社</a>
                                    <a href="http://www.banyouguoji.com" target="_blank" rel="nofollow">伴游网</a>
                                    <a href="http://www.pcpw.cn" target="_blank" rel="nofollow">深圳景点门票</a>
                                    <a href="http://www.xiayizhan.cn" target="_blank" rel="nofollow">厦门户外</a>
                                    <a href="http://www.beijingnongjiayuan.com" target="_blank" rel="nofollow">京郊自驾游 </a>
                                    <a href="http://www.maichawang.com" target="_blank" rel="nofollow">买茶网</a>
                                </div>
                        <!-- 网站认证 -->
            <div class="web-trust">
                <a href="javascript:;" rel="nofollow">
                    <img src="picture/alipay.png" alt="支付宝特约商家">
                </a>
                <a href="http://netadreg.gzaic.gov.cn/ntmm/WebSear/WebLogoPub.aspx?logo=440106106012011101200878" target="_blank" rel="nofollow">
                    <img src="picture/zhizhao.jpg" alt="要出发营业执照">
                </a>
                <a href="https://search.szfw.org/cert/l/CX20140912005110005176" target="_blank" rel="nofollow">
                    <img src="picture/chengxin.jpg" alt="诚信网站">
                </a>
                <a href="https://ss.knet.cn/verifyseal.dll?sn=e1409174401005395210ye000000" target="_blank" rel="nofollow">
                    <img src="picture/kexin.jpg" alt="可信网站省份验证">
                </a>
                <a href="http://www.anquan.org/authenticate/cert/?site=www.yaochufa.com&at=business" key="55027098c274e77b9dc448b6" logo_size="124x47" logo_type="business" rel="nofollow" class="anquan">
                	<!--<script src="js/aq_auth.js"></script>--><img src="picture/hy_124x47.png" alt="安全联盟" style="display: none">
                </a>
            </div>
            <ul class="license">
                <li><a href="http://cdn1.jinxidao.com/images/about/Telecom_ICP.jpg" target="_blank">中华人民共和国增值电信业务经营许可证 经营许可证编号：粤B2-20130613</a></li>
                <li><a href="http://cdn7.jinxidao.com/images/license.jpg" target="_blank">旅行社业务经营许可证编号：L-GD01685</a></li>
                <li><a href="http://www.miitbeian.gov.cn/" target="_blank">版权所有 &copy; 广州酷旅旅行社有限公司 2009-2016 粤ICP备11008339号</a></li>
            </ul>
        </div>
    </div>
    <!--[if IE 6]>
    <script src="js/clarity-png.js"></script>
    <script>
        DD_belatedPNG.fix('.logo img, .app img,.slideshow .prev, .slideshow .next, .around-tour .sm-left div, .choice-tour .sm-left div, .choice-tour .sm-left p, .footer-links i, .icon, .no-data img, .showmap, .price');
    </script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <script src="js/lazyload.js"></script>
    <script src="js/common.js"></script>    <script src="js/index.js"></script>
    <script type="text/javascript">
    sessionId = "";
    clientIp = "112.67.250.23";
    userId = "";
    cityCode = "";
    logUrl = "http://tj.yaochufa.com/";
    apiHeader2 = "MTQ3MTk2MTY5MSMsMy43LGpzLHBjLCM3MDI1NGRiZDRlZjdiODRlMTMwOGZhOGNlNGViM2UzZDFheXA4d3Y2";
    apiHeader2Version = "3.7";
    apiHeader2System = "pc";
    apiHeader2Lang = 'js';
</script>
<script src="js/user_analytics_pc.js"></script>
<script src="js/zhugeio_config.js"></script>
<script>
    zhuge.track('进入页面',
        {
            '行为所属页面': '官网-进入页面' ,
            '行为内容': location.href
        }
    );
</script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?84c5b2688d39b4e3c23d132b53b4e79b";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    </body>
</html>