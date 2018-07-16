<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="/resources/views/css/common.css">
        <link rel="stylesheet" href="/resources/views/css/search.css">
        <title>美食查詢-台北市-</title>
        <script language="JavaScript">
            function selectarea($a) {
                var v = document.getElementById($a);
                if(v.className == 'm-list is-active')
                    v.className='m-list';
                else
                    v.className = 'm-list is-active';
            }
            function selectfood($f){
                var v = document.getElementById($f);
                if(v.className == 'm-list is-active')
                    v.className='m-list';
                else
                    v.className = 'm-list is-active';
            }
            function shoplike($s) {
                var result = ''.concat('shop',$s);
                document.cookie=" = 1";
                var date=new Date();
                var expireDays=365;
                date.setTime(date.getTime()+expireDays*24*3600*1000);
                document.cookie="$a=828;expire="+date.toGMTString();
                $a = document.cookie;


            }

        </script>
    </head>
    <body>
        <header>
            <h1><span>台北市/信義區/日式料理/居酒屋 美食查詢</span></h1>
            <div class="headerLogo">
                <a href=""><img src="public/img/logo.png" alt="LOGO"></a>
            </div>
        </header>
        <div class="f-breadCrumbs u-container">
            <ul>
                <li><a href="">首頁</a></li>
                <li>></li>
                <li><a href="">台北市</a></li>
                <li>></li>
                <li><span>查詢結果</span></li>
            </ul>
        </div>
        <div class="f-mainContents u-container">
            <div class="mainWrap">
                <h2>台北市/信義區/日式料理/居酒屋 查詢結果</h2>
                <div class="m-pager">
                    {{$shop_mains->links()}}
                </div>
                @foreach($shop_mains as $shop_main)
                <div class="m-shopList">
                    <ul>
                        <li class="shopData">
                            <div class="shopHead">
                                <a href="">{{$shop_main->shop_name}}</a>
                            </div>
                            <div class="shopDetail">
                                <div class="photo">
                                    @foreach($shop_photos as $shop_photo)
                                        @if($shop_photo->shop_table_id == $shop_main->id)
                                            <img src="public/img/shop/{{$shop_photo->photo_num}}.png" alt="">
                                        @endif
                                    @endforeach
                                </div>
                                <div class="info">
                                    <div class="shopTitle">
                                        <p>{{$shop_main->main_title}}</p>
                                    </div>
                                    <table>
                                        <tr>
                                            <th>分類</th>
                                            @foreach($foods as $food)
                                                @if($food->id == $shop_main->main_food)
                                                    <td>{{$food->food_name}}</td>
                                                @endif
                                            @endforeach
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
                                            <td>{{$shop_main->open_time}}</td>
                                        </tr>
                                        <tr>
                                            <th>地址</th>
                                            <td>{{$shop_main->address}}</td>
                                        </tr>
                                    </table>
                                    <div class="linkBtn">
                                        <button class="like u-hoverOpacity" onclick="shoplike({{$shop_main->id}})">LIKE</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                @endforeach
                <div class="m-pager">
                    {{$shop_mains->links()}}
                </div>
            </div>
            <div class="rightWrap">
                <form action="{{ route('search') }}" method="POST" role="form">
                    {{ csrf_field() }}
                <div class="r-searchMenu">
                    <p class="searchTitle"><span>查詢</span></p>
                    <div class="searchArea">
                        <p class="typeTitle">地點</p>
                        <ul class="main">
                            @foreach($areas as $area)
                                <li id="area{{$area->id}}" class="m-list" onclick="selectarea('area{{$area->id}}')">
                                    <p class="mainList"><span>{{$area->area_name}}</span></p>
                                    <ul class="sub">
                                        @foreach($area_subs as $area_sub)
                                            @if($area->id == $area_sub->master_id)
                                            <li>
                                                <input type="checkbox" name="area[]" value="{{$area_sub->id}}" id="{{$area_sub->master_id}}a{{$area_sub->order}}">
                                                <label for = "{{$area_sub->master_id}}a{{$area_sub->order}}">{{$area_sub->area_name}}</label>
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="searchFood">
                        <p class="typeTitle">分類</p>
                        <ul class="main">
                            @foreach($foods as $food)
                                <li id="food{{$food->id}}" class="m-list" onclick="selectfood('food{{$food->id}}')">
                                    <p class="mainList"><span>{{$food->food_name}}</span></p>
                                    <ul class="sub">
                                        @foreach($food_subs as $food_sub)
                                            @if($food->id == $food_sub->master_id)
                                                <li>
                                                    <input type="checkbox" name="food[]" value="{{$food_sub->id}}" id="{{$food_sub->master_id}}f{{$food_sub->order}}">
                                                    <label for = "{{$food_sub->master_id}}f{{$food_sub->order}}">{{$food_sub->food_name}}</label>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="btnArea">
                        <button type="submit" class="searchBtn">查詢</button>
                        <button class="rankingBtn">排行榜</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <footer class="f-footer">
            <div class="footerLogo">
                <a href="">
                    <img src="public/img/logo.png" alt="LOGO">
                </a>
            </div>
        </footer>
    </body>
</html>