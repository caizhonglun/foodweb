<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="/resources/views/css/common.css">
        <link rel="stylesheet" href="/resources/views/css/ranking.css">
        <title>美食排行榜-台北市-</title>
    </head>
    <body>
        <header>
            <h1><span>台北市/信義區/日式料理/居酒屋 美食排行榜</span></h1>
            <div class="headerLogo">
                <a href=""><img src="{{ URL::asset('public/img/logo.png') }}" alt="LOGO"></a>
            </div>
        </header>
        <div class="f-breadCrumbs u-container">
            <ul>
                <li><a href="">首頁</a></li>
                <li>></li>
                <li><a href="">台北市 排行榜</a></li>
                <li>></li>
                <li><span>美食排行榜</span></li>
            </ul>
        </div>
        <div class="f-mainContents u-container">
            <div class="mainWrap">
                <h2>台北市/信義區/日式料理/居酒屋 排行榜</h2>
                <div class="m-pager">
                    <ul>
                        <li><span>1</span></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">＞</a></li>
                    </ul>
                    {{ $area_subs->links() }}
                </div>
                <div class="m-shopList">
                    <ul>
                        <li class="shopData">
                            <div class="shopHead">
                                <a href="">
                                    <span class="rankNum">1</span>
                                    TEST1日式小小居酒屋
                                    @foreach($area_subs as $area_sub)
                                        {{$area_sub->shop_name}}{{$area_sub->address}}
                                        @endforeach
                                </a>
                            </div>
                            <div class="shopDetail">
                                <div class="photo">
                                    <img src="{{ URL::asset('public/img/shop/18.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="shopTitle">
                                        <p>好吃！好喝！好便宜！來TEST1日式小小居酒屋吧！</p>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>分類</th>
                                            <td>日式料理</td>
                                        </tr>
                                        <tr>
                                            <th>標籤</th>
                                            <td>
                                                <ul class="foodTags">
                                                    <li>居酒屋</li>
                                                    <li>綜合日式料理</li>
                                                    <li>生魚片、壽司</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>營業時間</th>
                                            <td>17:00 ～ 4:00</td>
                                        </tr>
                                        <tr>
                                            <th>地址</th>
                                            <td>台北市信義區〇〇路〇〇巷〇〇號〇〇樓</td>
                                        </tr>
                                    </table>
                                    <div class="linkBtn">
                                        <button class="like is-active u-hoverOpacity">LIKE</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="shopData">
                            <div class="shopHead">
                                <a href="">
                                    <span class="rankNum">2</span>
                                    TEST2日式小小居酒屋
                                </a>
                            </div>
                            <div class="shopDetail">
                                <div class="photo">
                                    <img src="{{ URL::asset('public/img/shop/15.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="shopTitle">
                                        <p>好吃！好喝！好便宜！來TEST2日式小小居酒屋吧！</p>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>分類</th>
                                            <td>日式料理</td>
                                        </tr>
                                        <tr>
                                            <th>標籤</th>
                                            <td>
                                                <ul class="foodTags">
                                                    <li>居酒屋</li>
                                                    <li>生魚片、壽司</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>營業時間</th>
                                            <td>24小時</td>
                                        </tr>
                                        <tr>
                                            <th>地址</th>
                                            <td>台北市信義區〇〇路〇〇巷〇〇號〇〇樓</td>
                                        </tr>
                                    </table>
                                    <div class="linkBtn">
                                        <button class="like u-hoverOpacity">LIKE</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="shopData">
                            <div class="shopHead">
                                <a href="">
                                    <span class="rankNum">3</span>
                                    TEST3日式小小居酒屋
                                </a>
                            </div>
                            <div class="shopDetail">
                                <div class="photo">
                                    <img src="{{ URL::asset('public/img/shop/14.png') }}" alt="">
                                </div>
                                <div class="info">
                                    <div class="shopTitle">
                                        <p>好吃！好喝！好便宜！來TEST3日式小小居酒屋吧！</p>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>分類</th>
                                            <td>日式料理</td>
                                        </tr>
                                        <tr>
                                            <th>標籤</th>
                                            <td>
                                                <ul class="foodTags">
                                                    <li>居酒屋</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>營業時間</th>
                                            <td>每天到三點，每週日休</td>
                                        </tr>
                                        <tr>
                                            <th>地址</th>
                                            <td>台北市信義區〇〇路〇〇巷〇〇號〇〇樓</td>
                                        </tr>
                                    </table>
                                    <div class="linkBtn">
                                        <button class="like u-hoverOpacity">LIKE</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="m-pager">
                    <ul>
                        <li><span>1</span></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">＞</a></li>
                    </ul>
                </div>
            </div>
            <div class="rightWrap">
                <div class="r-searchMenu">
                    <p class="searchTitle"><span>查詢</span></p>
                    <div class="searchArea">
                        <p class="typeTitle">地點</p>
                        <ul class="main">
                            <li class="m-list is-active">
                                <p class="mainList"><span>台北市</span></p>
                                <ul class="sub">
                                    <li>
                                        <input type="checkbox" id="s-area0">
                                        <label for="s-area0">全台北市</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="s-area1" checked>
                                        <label for="s-area1">信義區</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="s-area2">
                                        <label for="s-area2">士林區</label>
                                    </li>
                                </ul>
                            </li>
                            <li class="m-list">
                                <p class="mainList"><span>新北市</span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="searchFood">
                        <p class="typeTitle">分類</p>
                        <ul class="main">
                            <li class="m-list">
                                <p class="mainList"><span>中式料理</span></p>
                            </li>
                            <li class="m-list is-active">
                                <p class="mainList"><span>日式料理</span></p>
                                <ul class="sub">
                                    <li>
                                        <input type="checkbox" id="s-genre0">
                                        <label for="s-genre0">全日式料理</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="s-genre1" checked>
                                        <label for="s-genre1">居酒屋</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="btnArea">
                        <button class="searchBtn">查詢</button>
                        <button class="rankingBtn">排行榜</button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="f-footer">
            <div class="footerLogo">
                <a href="">
                    <img src="{{ URL::asset('public/img/logo.png') }}" alt="LOGO">
                </a>
            </div>
        </footer>
    </body>
</html>