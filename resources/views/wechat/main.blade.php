<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>@yield('title')</title>
<link rel="stylesheet" type="text/css" href="/wx/Assets/css/reset.css">
<script type="text/javascript" src="/wx/Assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/wx/Assets/js/js_z.js"></script>
<script type="text/javascript" src="/wx/Assets/js/banner.js"></script>
<script type="text/javascript" src="/wx/Assets/js/index.js"></script>
<link rel="stylesheet" type="text/css" href="/wx/Assets/css/thems.css">
<link rel="stylesheet" type="text/css" href="/wx/Assets/css/responsive.css">
<script language="javascript">
$(function(){
    $('#owl-demo').owlCarousel({
        items: 1,
        navigation: true,
        navigationText: ["上一个","下一个"],
        autoPlay: true,
        stopOnHover: true
    }).hover(function(){
        $('.owl-buttons').show();
    }, function(){
        $('.owl-buttons').hide();
    });
});
</script>
<!--[if lte IE 8]>
    <style type="text/css">
        html,body{width:100%; height:100%; overflow:scroll}
        .section-btn{display:none;}
    </style>
    <![endif]-->
<style type="text/css">
body{ overflow:hidden;}
</style>
</head>

<body>
<div class="section-wrap put-section-0">
    @yield('content')
</div>
<div class="header">
    <div class="head clearfix">
        <div class="logo"><img src="/wx/Assets/images/logo.png" alt=""></div>
        <div class="nav">
            <div class="nav_ico">&nbsp;</div>
            <ul class="section-btn">
              <li class="on">首页</li>
              <li class="">关于乾源通</li>
              <li class="">我们的业务</li>
              <li class="">新闻中心</li>
              <li class="">加入乾源通</li>
            </ul>
        </div>
        <div class="h_tel"><a href="tel:15623926392"><img src="/wx/Assets/images/tel.png" alt=""></a></div>
    </div>
</div>
<div class="arrow">&nbsp;</div>
@yield('js')

</body></html>