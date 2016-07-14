@extends("layouts.default")
@section('content')
    <style>

        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

        /* jssor slider arrow navigator skin 02 css */
        /*
        .jssora02l                  (normal)
        .jssora02r                  (normal)
        .jssora02l:hover            (normal mouseover)
        .jssora02r:hover            (normal mouseover)
        .jssora02l.jssora02ldn      (mousedown)
        .jssora02r.jssora02rdn      (mousedown)
        */
        .jssora02l, .jssora02r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a02.png') no-repeat;
            overflow: hidden;
        }
        .jssora02l { background-position: -3px -33px; }
        .jssora02r { background-position: -63px -33px; }
        .jssora02l:hover { background-position: -123px -33px; }
        .jssora02r:hover { background-position: -183px -33px; }
        .jssora02l.jssora02ldn { background-position: -3px -33px; }
        .jssora02r.jssora02rdn { background-position: -63px -33px; }
    </style>

    <!--banner start-->
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 200px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
        {{--<div data-p="112.50" style="display: none;">--}}
            {{--<img data-u="image" src="{{asset("assets/images/002.jpg")}}" />--}}
            {{--<div data-u="caption" data-t="0" style="position: absolute; top: 320px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">mobile ready, touch swipe</div>--}}
        {{--</div>--}}
        {{--<div data-p="112.50" style="display: none;">--}}
            {{--<img data-u="image" src="{{asset("assets/images/007.jpg")}}" />--}}
            {{--<div data-u="caption" data-t="1" data-3d="1" style="position: absolute; top: -50px; left: 125px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">time lined layer animation</div>--}}
        {{--</div>--}}
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="{{asset("assets/images/slide_1.jpg")}}" />
            <div data-u="caption" data-t="2" style="position: absolute; top: 30px; left: -380px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">finger catchable right to left</div>
        </div>
        <div data-b="0" data-p="112.50" style="display: none;">
            <img data-u="image" src="{{asset("assets/images/slide_2.jpg")}}" />
            <div data-u="caption" data-t="7" style="position: absolute; top: -50px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;">play in and play out</div>
        </div>
        <div data-p="112.50" style="display: none;">
            <img data-u="image" src="{{asset("assets/images/slide_3.jpg")}}" />
            <div data-u="caption" data-t="8" data-3d="1" style="position: absolute; top: 25px; left: 150px; width: 250px; height: 250px; background-color: rgba(40,177,255,0.6); overflow: hidden;">
                <div data-u="caption" data-t="9" style="position: absolute; top: 100px; left: 25px; width: 200px; height: 50px; font-size: 24px; line-height: 50px;">A Child Layer</div>
            </div>
        </div>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
        <div data-u="prototype" style="width:12px;height:12px;"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
</div>

<!--banner end-->


<!--content start-->
<div class="dw cover-box">
    <ul class="zoom">
        <li>
            <a href="http://test5.szfangwei.net/gongzhong/ufa/index/id/76.html">
                <img src="{{asset("assets/images/cover_box_1_front.jpg")}}" class="img1">
                <img src="{{asset("assets/images/cover_box_1_behind.jpg")}}" class="img2">
            </a>
        </li>
        <li>
            <a href="http://test5.szfangwei.net/gongzhong/ufa/index/id/77.html">
                <img src="{{asset("assets/images/cover_box_2_front.jpg")}}" class="img1">
                <img src="{{asset("assets/images/cover_box_2_behind.jpg")}}" class="img2">
            </a>
        </li>
        <li>
            <a href="http://test5.szfangwei.net/gongzhong/ufa/index/id/78.html">
                <img src="{{asset("assets/images/cover_box_3_front.jpg")}}" class="img1">
                <img src="{{asset("assets/images/cover_box_3_behind.jpg")}}" class="img2">
            </a>
        </li>
    </ul>
</div>
<div class="entry-box">
    <div class="dw">
        <div class="txt_cen"><img src="/Public/home/images/icon/titlet_text1.png"></div>
        <ul class="entry-list zoom">
            <li>
                <a href="/about/newsInfo/id/70.html">
                    <div class="datetime"><span class="day">25</span><span class="year">2014-12</span></div>
                    <h1> 工业和信息化部关于向民间资本开放宽带...</h1>
                    <h2>

                        工信部通〔2014〕577号





                        为贯彻落实党的十八大和十八届三中、四中全会精神，按照国务院《关于印发“宽带中国”战略及...</h2>
                </a>
            </li><li>
                <a href="/about/newsInfo/id/71.html">
                    <div class="datetime"><span class="day">11</span><span class="year">2015-06</span></div>
                    <h1>横岗街道启动 光网覆盖改造工程</h1>
                    <h2>横岗街道启动 光网覆盖改造工程

                        在全市试点解决城中村“黑宽带”乱拉乱接问题


                        深圳特区报讯（记者 张尉心 通讯员 蒋小平）日...</h2>
                </a>
            </li>		</ul>
    </div>
</div>
<div class="follow-box dw">
    <div class="txt_cen"><img src="{{asset("assets/images/titlet_text2.png")}}"></div>
    <div class="picScroll-left" id="picScroll-left">
        <div class="bd">
            <ul class="picList">
            </ul>
        </div>
    </div>
</div>
<!--content end-->
@endsection

@section("scripts")
    <script type="text/javascript" src="{{asset("assets/js/super_slide/jssor.slider.mini.js")}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
                [{b:0,d:600,y:-290,e:{y:27}}],
                [{b:0,d:1000,y:185},{b:1000,d:500,o:-1},{b:1500,d:500,o:1},{b:2000,d:1500,r:360},{b:3500,d:1000,rX:30},{b:4500,d:500,rX:-30},{b:5000,d:1000,rY:30},{b:6000,d:500,rY:-30},{b:6500,d:500,sX:1},{b:7000,d:500,sX:-1},{b:7500,d:500,sY:1},{b:8000,d:500,sY:-1},{b:8500,d:500,kX:30},{b:9000,d:500,kX:-30},{b:9500,d:500,kY:30},{b:10000,d:500,kY:-30},{b:10500,d:500,c:{x:87.50,t:-87.50}},{b:11000,d:500,c:{x:-87.50,t:87.50}}],
                [{b:0,d:600,x:410,e:{x:27}}],
                [{b:-1,d:1,o:-1},{b:0,d:600,o:1,e:{o:5}}],
                [{b:-1,d:1,c:{x:175.0,t:-175.0}},{b:0,d:800,c:{x:-175.0,t:175.0},e:{c:{x:7,t:7}}}],
                [{b:-1,d:1,o:-1},{b:0,d:600,x:-570,o:1,e:{x:6}}],
                [{b:-1,d:1,o:-1,r:-180},{b:0,d:800,o:1,r:180,e:{r:7}}],
                [{b:0,d:1000,y:80,e:{y:24}},{b:1000,d:1100,x:570,y:170,o:-1,r:30,sX:9,sY:9,e:{x:2,y:6,r:1,sX:5,sY:5}}],
                [{b:2000,d:600,rY:30}],
                [{b:0,d:500,x:-105},{b:500,d:500,x:230},{b:1000,d:500,y:-120},{b:1500,d:500,x:-70,y:120},{b:2600,d:500,y:-80},{b:3100,d:900,y:160,e:{y:24}}],
                [{b:0,d:1000,o:-0.4,rX:2,rY:1},{b:1000,d:1000,rY:1},{b:2000,d:1000,rX:-1},{b:3000,d:1000,rY:-1},{b:4000,d:1000,o:0.4,rX:-1,rY:-1}]
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $Idle: 2000,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions,
                    $Breaks: [
                        [{d:2000,b:1000}]
                    ]
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1200);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });

//        jQuery("#picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",autoPlay:true,delayTime:900,vis:8,scroll:1,trigger:"click"});
    </script>
@endsection
