<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>注册</title>
    <!-- CSS -->
    <link rel="stylesheet"href="/Blog/Public/Login/assets/css/reset.css">
    <link rel="stylesheet" href="/Blog/Public/Login/assets/css/supersized.css">
    <link rel="stylesheet" href="/Blog/Public/Login/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Blog/Public/Login/css/styles.css">
    <!-- <style type="text/css">
    body,td,th { font-family: "Source Sans Pro", sans-serif; }
    /* body { background-color: #2B2B2B; } */
    </style> -->
</head>
<body>
<div class="page-container">
    <div class="wrapper" style="height: 1000px;">
        <div class="container" style="height: 10000px">
            <strong><span style="font-weight: bold;font-size: 25px;">注  册</span></strong>
            <form class="form" action="<?php echo U('User/user_add_do');?>" method="post">
                <input type="text" name="username" placeholder="创建用户名">
                <input type="password" name="pwd"  placeholder="输入密码">
                <input type="password" name="psd"  placeholder="确认密码">
                <input type="text" name="content"  placeholder="职业">
                <input type="text" name="tel"  placeholder="电话">
                <button type="submit" id="login-button">注册</button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="/Blog/Public/Login/js/jquery-2.1.1.min.js"></script>
<!-- Javascript -->
<script src="/Blog/Public/Login/assets/js/jquery-1.8.2.min.js"></script>

<script src="/Blog/Public/Login/assets/js/supersized.3.2.7.min.js"></script>

<script src="/Blog/Public/Login/assets/js/supersized-init.js"></script>
<script src="/Blog/Public/Login/assets/js/scripts.js"></script>
</body>
</html>