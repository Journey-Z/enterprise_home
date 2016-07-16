@extends("layouts.default")
@section("content")
<div class="topimg" style="background: url(/Public/upload/banner/2015042109470168a5qy.jpg) no-repeat center center;"></div>
<div class="dw warp-box zoom">
    @include("home.menu")

    <div class="box-right fr">
        <div class="place-title zoom"><span class="fr place">您的当前位置：<a href="/">首页</a> - <a href="{{route('category_detail', ['category_name' => $category_name])}}">{{$title}}</a> - <span>{{$breadcrumb}}</span></span> <img src="/Public/home/images/icon/tb1.png"> 公司简介</div>
        <div class="content editor" style="font-size:14px;color:#666666;">
            <p><span style="font-size:16px"><strong><img alt="" src="file:///C:/Users/lenovo/Desktop/公司简介6_副本.jpg" />&nbsp; &nbsp; 深圳公众信息技术有限公司</strong>（以下简称&ldquo;公众信息&rdquo;）<strong>系深圳光启高等理工研究院核心通讯技术转化平台公司。</strong><br />
<br />
&nbsp; &nbsp; 公司成立于2011年，总部位于深圳。2013年与光启创新机构重组，植入光启科学核心通信技术。<br />
<br />
&nbsp; &nbsp; 公众信息致力于宽带中国、光网城市、智慧社区、基础设施光纤接入网层面的投资与运营，以<strong>驻地网+</strong>、<strong>互联网+</strong>、<strong>物联网+</strong>、<strong>智能生活+</strong>为梯度，打造社区&ldquo;T网&rdquo;平台高品质人居生活新生态圈。<br />
<br />
&nbsp; &nbsp; 目前，依托住房城乡建设部和工业和信息化部发布的光纤到户（FTTH）两项国家标准的相关要求，公司结合&ldquo;三网融合、共建共享、营网分离、公平接入&rdquo;的新型信息化建设与运营模式，设计了UFA（Unified Fiber-optic Access）融合光网接入FTTH公共平台项目。<br />
<br />
<br />
<img alt="" src="/Public/upload/editor/img/1430188174.jpg" style="height:350px; width:923px" /></span><br />
                <img alt="" src="file:///C:/Users/lenovo/Desktop/公司简介6_副本.jpg" /><img src="file:///C:\Users\lenovo\AppData\Roaming\Tencent\Users\972553675\QQ\WinTemp\RichOle\V{PU$KH_8HM@$UCH9N~`2T7.jpg" /></p>
        </div>
    </div>
</div>
@endsection
