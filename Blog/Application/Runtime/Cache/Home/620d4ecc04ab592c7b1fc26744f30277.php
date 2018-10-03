<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
   <!--顶部部样式-->
    <meta charset="utf-8">
<title><?php echo (C("WEB_NAME")); ?></title>
<meta name="keywords" content="黑色模板,个人网站模板,个人博客模板,博客模板,css3,html5,网站模板" />
<meta name="description" content="这是一个有关黑色时间轴的css3 html5 网站模板" />
<link href="/Blog/Public/index/css/styles.css" rel="stylesheet">
<link href="/Blog/Public/index/css/view.css" rel="stylesheet">
<link href="/Blog/Public/index/css/animation.css" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<link href="/Blog/Public/index/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="/Blog/Public/index/js/jquery.js"></script>
<script type="text/javascript" src="/Blog/Public/index/js/js.js"></script>
<!-- 返回顶部调用 end-->
<!--[if lt IE 9]>
<script src="/Blog/Public/index/js/modernizr.js"></script>
<![endif]-->

</head>
<body>
<header>

    <!--导航样式-->
    <nav id="nav">
    <ul>
        <li><a href="<?php echo U('Index/index');?>" >网站首页</a></li>
        <li><a href="/download/" target="_blank" title="个人博客模板">个人博客模板</a></li>
        <li><a href="/book/" target="_blank" title="图书推荐">图书推荐</a></li>
        <li><a href="/web/" target="_blank" title="网站建设">网站建设</a></li>
        <li><a href="/newshtml5/" target="_blank" title="HTML5 / CSS3">HTML5 / CSS3</a></li>
        <li><a href="/jstt/" target="_blank" title="技术探讨">技术探讨</a></li>
        <li><a href="/news/s/" target="_blank" title="慢生活">慢生活</a></li>
        <li><a href="/newstalk/" target="_blank" title="碎言碎语">碎言碎语</a></li>
        <li><a href="/news/jsex/" target="_blank" title="JS 实例代码演示">JS实例</a></li>
    </ul>
    <script src="/Blog/Public/index/js/silder.js"></script><!--获取当前页导航 高亮显示标题-->
</nav>

</header>

    <!--主体样式-->
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title>我的登录界面</title>
    <link href="/Blog/Public/Home/login/css/default.css" rel="stylesheet" type="text/css" />
    <!--必要样式-->
    <link href="/Blog/Public/Home/login/css/styles1.css" rel="stylesheet" type="text/css" />
    <link href="/Blog/Public/Home/login/css/demo.css" rel="stylesheet" type="text/css" />
    <link href="/Blog/Public/Home/login/css/loaders.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class='login'>

    <div class='login_title'>
        <span>欢迎登录</span>
    </div>
    <form action="<?php echo U('User/login_do');?>" method="post">
        <div class='login_fields'>
            <div class='login_fields__user'>
                <div class='icon'>
                    <img alt="" src='/Blog/Public/Home/login/img/user_icon_copy.png'>
                </div>
                <input name="username" placeholder='用户名' maxlength="16" type='text' autocomplete="off" value=""/>
                <div class='validation'>
                    <img alt="" src='/Blog/Public/Home/login/img/tick.png'>
                </div>
            </div>
            <div class='login_fields__password'>
                <div class='icon'>
                    <img alt="" src='/Blog/Public/Home/login/img/lock_icon_copy.png'>
                </div>
                <input name="pwd" placeholder='密码' maxlength="16" type='password' autocomplete="off">
                <div class='validation'>
                    <img alt="" src='/Blog/Public/Home/login/img/tick.png'>
                </div>
            </div>
            <?php if($num == 1): ?><div class='login_fields__password'>
                <div class='icon'>
                    <img alt="" src='/Blog/Public/Home/login/img/key.png'>
                </div>
                <input name="code" placeholder='验证码' maxlength="4" type='text' name="ValidateNum" autocomplete="off">
                <div class='validation' style="opacity: 1; margin-top:-5;" >
                    <img src="<?php echo U('user/verify');?>"  style="width:150px;" onclick="changeVerify()" id="verify"/>
                </div>
            </div>
                <?php else: endif; ?>
            <div class='login_fields__submit'>
                <input type='submit' value='登录'>
                <a href="<?php echo U('User/user_add');?>"><input type='button' value="注册" style="float:right;"></a>
            </div>
    </form>
</div>
<div class='success'>
</div>
<div class='disclaimer'>
    <p>欢迎登录后台管理系统  更多网站模板：<a href="http://www.sucaihuo.com/" target="_blank">素材火</a></p>
</div>
</div>
<div class='authent'>
    <div class="loader" style="height: 44px;width: 44px;margin-left: 28px;">
        <div class="loader-inner ball-clip-rotate-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <p>认证中...</p>
</div>
<div class="OverWindows"></div>
<link href="/Blog/Public/Home/login/layui/css/layui.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/Blog/Public/Home/login/js/jquery.min.js"></script>
<script type="text/javascript" src="/Blog/Public/Home/login/layui/layui.js"></script>
<script type="text/javascript" src="/Blog/Public/Home/login/js/Particleground.js"></script>
<script type="text/javascript">
    var canGetCookie = 0;//是否支持存储Cookie 0 不支持 1 支持
    var ajaxmockjax = 1;//是否启用虚拟Ajax的请求响 0 不启用  1 启用
    //默认账号密码

    var truelogin = "123456";
    var truepwd = "123456";

    function showCheck(a) {
        CodeVal = a;
        var c = document.getElementById("myCanvas");
        var ctx = c.getContext("2d");
        ctx.clearRect(0, 0, 1000, 1000);
        ctx.font = "80px 'Hiragino Sans GB'";
        ctx.fillStyle = "#E8DFE8";
        //ctx.fillText(a, 0, 100);
    }
    $(document).keypress(function (e) {
        // 回车键事件
        if (e.which == 13) {
            $('input[type="button"]').click();
        }
    });
    //粒子背景特效
    $('body').particleground({
        dotColor: '#E8DFE8',
        lineColor: '#133b88'
    });

    var open = 0;

        //非空验证


    var fullscreen = function () {
        elem = document.body;
        if (elem.webkitRequestFullScreen) {
            elem.webkitRequestFullScreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.requestFullScreen) {
            elem.requestFullscreen();
        } else {
            //浏览器不支持全屏API或已被禁用
        }
    }
    function changeVerify(){
        document.getElementById('verify').src= "<?php echo U('user/verify');?>"+'/?r='+Math.random() ;
    }
</script>

</body>
</html>


<footer>

    <!--底部样式-->
    <div class="footer-mid">
    <div class="links">
        <h2>友情链接</h2>
        <a href="/" block>杨青个人博客</a>&nbsp;&nbsp;<a href="http://www.3dst.com" block>3DST技术服务中心</a>
    </div>


</div>
<div class="footer-bottom">
    <p>Copyright <?php echo (C("WEB_COPYRIGHT")); ?> 备案号：<?php echo (C("WEB_RECORD")); ?></p>
</div>

</footer>
</body>
</html>