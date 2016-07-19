@extends("layouts.default")
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
        top:820px;
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
            height: 700px;
        }
    }
</style>

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
        <div class="txt_cen"><img src="{{asset("assets/images/titlet_text2.png")}}"></div>
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
                height: 393,
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
