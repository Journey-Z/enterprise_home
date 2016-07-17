<div class="header dw zoom">
    <h1 class="fl logo"><a href="#" title="深圳市公众信息"><img src="{{asset("assets/images/logo.png")}}" alt="logo"></a></h1>
    <div class="fr menuBox">
        <ul class="zoom">
            <li @if($category_name == "home")class="on" @endif><a href="/">首页</a></li>
            <li @if($category_name == "about")class="on" @endif><a href="{{route('category_detail', ['category_name' => 'about'])}}">关于我们</a></li>
            <li @if($category_name == "culture_idea")class="on" @endif><a href="{{route('category_detail', ['category_name' => 'culture_idea'])}}">文化与理念</a></li>
            <li @if($category_name == "business_scope")class="on" @endif><a href="{{route('category_detail', ['category_name' => 'business_scope'])}}">经营范围</a></li>
            <li @if($category_name == "advantage")class="on" @endif><a href="{{route('category_detail', ['category_name' => 'advantage'])}}">项目优势</a></li>
            <li @if($category_name == "contact")class="on" @endif><a href="{{route('category_detail', ['category_name' => 'contact'])}}">联系我们</a></li>
        </ul>
    </div>
</div>
