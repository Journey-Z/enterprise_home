<div class="box-left fl">
    <img src="/Public/home/images/icon/abtitle.png" class="current">
    <ul>
        @foreach($menu['header'] as $key => $value)
            <li @if($key == $on_subcategory)class="on"@endif><a href="{{route('category_detail', ['category_name' => 'about','on_subcategory' => $menu['menu'][$key]])}}">{{$value}}</a></li>
        @endforeach
    </ul>
</div>

