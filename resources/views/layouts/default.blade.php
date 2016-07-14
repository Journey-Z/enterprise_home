<!DOCTYPE html>
<html>
<head>
    <title>{{$title}}</title>
    <meta http-equiv="Content-Type" content="关键字" charset="utf-8">
    <meta http-equiv="Content=Language" content="关键字关键字关键字">
    <meta name="keywords" content="深圳公众信息技术有限公司">
    <meta name="description" content="深圳公众信息技术有限公司">
    <link href="{{asset("assets/images/dongya.ico")}}" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
    <script type="text/javascript" src="{{asset("assets/js/jquery/jquery-3.0.0.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/self/index.js")}}"></script>

    @yield('header')

</head>
<body>

    <!-- site top bar -->
    {{--    @include('layouts.topbar')--}}
    <!-- site top bar -->
            <!-- site header -->
    @include('layouts.header')

            <!-- site main -->
    @yield('content')
            <!-- site main -->

    <!-- site footer -->
    @include('layouts.footer')
            <!-- site footer -->

@yield('scripts')

        <!-- BEGIN: Google Trusted Stores -->
<script type="text/javascript">

</script>
<!-- END: Google Trusted Stores -->

</body>
</html>

