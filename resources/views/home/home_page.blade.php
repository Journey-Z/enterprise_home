@extends("layouts.default")
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/main.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/homepage.css")}}">
@section('content')
        <!-- SlidesJS Optional: If you'd like to use this design -->
<style>
    #slides {
        display: none
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
        background-image: url(img/btns-next-prev.png);
        background-repeat: no-repeat;
        display:block;
        width:12px;
        height:18px;
        overflow: hidden;
        text-indent: -9999px;
        float: left;
        margin-right:5px;
    }

    a.slidesjs-next {
        margin-right:10px;
        background-position: -12px 0;
    }

    a:hover.slidesjs-next {
        background-position: -12px -18px;
    }

    a.slidesjs-previous {
        background-position: 0 0;
    }

    a:hover.slidesjs-previous {
        background-position: 0 -18px;
    }

    a.slidesjs-play {
        width:15px;
        background-position: -25px 0;
    }

    a:hover.slidesjs-play {
        background-position: -25px -18px;
    }

    a.slidesjs-stop {
        width:18px;
        background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
        background-position: -41px -18px;
    }

    #slides .slidesjs-navigation {
        margin-top:3px;
    }

    #slides .slidesjs-previous {
        margin-right: 5px;
        float: left;
    }

    #slides .slidesjs-next {
        margin-right: 5px;
        float: left;
    }

    .slidesjs-pagination {
        margin: 6px 0 0;
        float: right;
        list-style: none;
        position:absolute;
        right:930px;
        top:750px;
    }

    .slidesjs-pagination li {
        float: left;
        margin: 0 1px;
    }

    .slidesjs-pagination li a {
        display: block;
        width: 13px;
        height: 0;
        padding-top: 13px;
        background-image: url("{{asset("assets/images/pagination.png")}}");
        background-position: 0 0;
        float: left;
        overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
        background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
        background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
        color: #333
    }

    #slides a:hover,
    #slides a:active {
        color: #9e2020
    }

    .navbar {
        overflow: hidden
    }
</style>
<!-- End SlidesJS Optional-->

<!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
<style>
    #slides {
        display: none
    }

    .container {
        margin: 0 auto
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
        body {
            padding-left: 20px;
            padding-right: 20px;
        }
        .container {
            width: auto;
            height: 200px;
        }
    }

    /* For smartphones */
    @media (max-width: 480px) {
        .container {
            width: auto;
            height: 200px;
        }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
        .container {
            width: 724px;
            height: 200px;
        }
    }

    /* For larger displays */
    @media (min-width: 1200px) {
        .container {
            width: auto;
            height: auto;
        }
    }
</style>
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/main.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("assets/css/homepage.css")}}">
<!-- SlidesJS Required: Start Slides -->
<!-- The container is used to define the width of the slideshow -->
<div class="container">
    <div id="slides">
        <img src="{{asset("assets/images/bighome1.jpg")}}" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
        <img src="{{asset("assets/images/bighome2.jpg")}}" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
        <img src="{{asset("assets/images/bighome3.jpg")}}" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/">
        <img src="{{asset("assets/images/bighome4.jpg")}}" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/">
        <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
        <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
    </div>
</div>
    <!--banner start-->

<!--banner end-->


<!--content start-->
<div class="divMain">
    <div class="divContentW" style="background-color:white;">
        <div class="divContent_show">
            <div class="divContentW_left">
                <img src="{{asset("assets/images/home_content/home0002.jpg")}}" />
            </div>
            <div class="divContentW_right1">
                <span class="divContentW_right1_h1">亿车<span style="font-size: 14px;top: -8px;position: relative;margin: 0px 8px;">●</span><a class="a1" href='#' style="color:#ea5413;">泊云</a></span><br />
                <span class="divContentW_right1_h2"><a class="a2" href='#' style="color:#00B5FF;">泊云</a>的定义</span><br />
                <span class="divContentW_right1_h3">泊云，是亿车科技潜心研发，面向城市停车运维管理和车主服务推出的整体信息化集成解决方案</span>
                <br /><br />
                <span class="divContentW_right1_h2"><a class="a2" href='#' style="color:#00B5FF;">泊云</a>的应用领域</span><br />
                <span class="divContentW_right1_h3"><span>城市路边停车</span><span>智慧停车场</span><span>车联网增值服务</span></span>
            </div>
        </div>
    </div>
    <div class="divContentB">
        <div class="divContent_show">
            <div class="divContentB_left">
                <img src="{{asset("assets/images/home_content/home0003.jpg")}}" />
            </div>
            <div class="divContentB_right1">
                <span class="divContentB_right1_h1">智慧路边停车</span><br />
                <span class="divContentB_right1_h2">解决哪些问题</span>
                <ul >
                    <li >●  路内车辆乱停乱放，泊位周转率低</li>
                    <li >●  人均管理车位数少，人力成本较高</li>
                    <li >●  人工模式存在乱收费，无证收费现象</li>
                    <li >●  计时计费不准确</li>
                    <li >●  缺乏有效监督，费用流失严重，人员无法有效管理</li>
                    <li >●  信息化和智能化管理水平不高，无法建立科学、规范、实时、高效的停车信息系统</li>
                </ul>
                {{--<a id="a1more" href="LoadSide.html" class="ortherlink">--}}
                    {{--<div class="divContent_link">了解更多--}}
                        {{--<div class="divContent_link_i">></div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            </div>
        </div>
    </div>
    <div class="divContentW"  style="background-color:white;">
        <div class="divContent_show">
            <div class="divContentW_left">
                <img src="{{asset("assets/images/home_content/home0004.jpg")}}" />
            </div>
            <div class="divContentW_right2">
                <span class="divContentW_right2_h1">智慧停车场</span><br />
                <ul >
                    <li >●  快速通行：无需刷卡/取票，1秒超速识别入场，杜绝闸口阻塞</li>
                    <li >●  精准引导：为车主提供实时泊位数据、入场引导及场内泊位引导，提升整体服务质量</li>
                    <li >●  缴费方便：多渠道充值缴费方式，包含手机APP、自助缴费机、手持PDA及中央收费站等</li>
                    <li >●  节约成本：避免传统刷卡/取票系统产生的卡片及票据介质损耗，降低后期运营成本</li>
                    <li >●  增加营收：通过泊云数据平台进行数据联网及商业挖掘，帮助停车场导流，实现车后服务和本地化服务接入，增加停车场收入</li>
                    <li >●  智能管理：完全自动计费、扣费，高效省心，管理轻松</li>
                </ul>
                {{--<a id="a2more" href="newParking.html" class="ortherlink">--}}
                    {{--<div class="divContent_link" style="background-color:#ff6a00;color:#fff;">了解更多--}}
                        {{--<div class="divContent_link_i" style="background-color:#fff;color:#ff6a00;">></div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            </div>
        </div>
    </div>

    <div class="divContentB">
        <div class="divContent_show">
            <div class="divContentB_left">
                <img src="{{asset("assets/images/home_content/home0005.jpg")}}" />
            </div>
            <div class="divContentB_right2">
                <span class="divContentB_right2_h1">车联网增值服务</span><br />
                <span class="divContentB_right2_h2">通过泊云大数据平台进行大数据分析，实现精准营销，开拓车后服务市场及本地化生活服务市场，包括洗车、维修、代驾、保养及购物、餐饮、娱乐等停车场周边服务接入</span><br />
                {{--<a id="a3more" href="newParking.html?type=2" class="ortherlink">--}}
                    {{--<div class="divContent_link">了解更多--}}
                        {{--<div class="divContent_link_i">></div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            </div>
        </div>
    </div>
</div>

<div class="entry-box">
    <div class="dw">
        <div class="txt_cen"><img src="{{asset("assets/images/titlet_text1.png")}}"></div>
        <ul class="entry-list zoom">
            <li>
                <a href="#">
                    <div class="datetime"><span class="day">25</span><span class="year">2014-12</span></div>
                    <h1> 工业和信息化部关于向民间资本开放宽带...</h1>
                    <h2>

                        工信部通〔2014〕577号





                        为贯彻落实党的十八大和十八届三中、四中全会精神，按照国务院《关于印发“宽带中国”战略及...</h2>
                </a>
            </li><li>
                <a href="#">
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
    <script type="text/javascript" src="{{asset("assets/js/super_slide/jquery.slides.min.js")}}"></script>
    <script type="text/javascript">
        $(function() {
            $('#slides').slidesjs({
                width: 700,
                height: 235,
                play: {
                    active: true,
                    auto: true,
                    interval: 8000,
                    swap: true,
                    pauseOnHover: true,
                    restartDelay: 2500
                }
            });
        });
    </script>
@endsection
