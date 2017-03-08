<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
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
@yield('content')
</body>
</html>
