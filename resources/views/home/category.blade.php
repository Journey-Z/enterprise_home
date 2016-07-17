@extends("layouts.default")
@section("content")
<div class="topimg" style="background: url({{asset("assets/images/background/".$background_image)}}) no-repeat center center;"></div>
<div class="dw warp-box zoom">
    @include("home.menu")

    <div class="box-right fr">
        <div class="place-title zoom"><span class="fr place">您的当前位置：<a href="/">首页</a> - <a href="{{route('category_detail', ['category_name' => $category_name])}}">{{$parent_title}}</a> - <span>{{$breadcrumb}}</span></span> <img src="{{asset("assets/images/icon/tb1.png")}}"> {{$breadcrumb}}</div>
        @include($category_name.'.'.$on_subcategory)
    </div>
</div>
@endsection
