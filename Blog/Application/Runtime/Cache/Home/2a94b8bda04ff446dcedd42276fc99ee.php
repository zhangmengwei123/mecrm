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
    
<div id="mainbody">
  <div class="info">
    <figure> <img src="/Blog/Public/index/images/art.jpg"  alt="Panama Hat">
      <figcaption><strong>渡人如渡己，渡已，亦是渡</strong> 当我们被误解时，会花很多时间去辩白。 但没有用，没人愿意听，大家习惯按自己的所闻、理解做出判别，每个人其实都很固执。与其努力且痛苦的试图扭转别人的评判，不如默默承受，给大家多一点时间和空间去了解。而我们省下辩解的功夫，去实现自身更久远的人生价值。其实，渡人如渡己，渡已，亦是渡人。</figcaption>
    </figure>
      <div class="card">
          <?php if($_SESSION['arr']['id']!= ''): ?><h1>我的名片</h1>
              <p>用户名：<?php echo ($_SESSION['arr']['username']); ?> | <a href="<?php echo U('User/session_del');?>" style="color:blue;">退出</a></p>
              <p>职业：<?php echo ($_SESSION['arr']['content']); ?></p>
              <p>电话：<?php echo ($_SESSION['arr']['tel']); ?></p>
              <ul class="linkmore">
                  <li><a href="/" class="talk" title="给我留言"></a></li>
                  <li><a href="/" class="address" title="联系地址"></a></li>
                  <li><a href="/" class="email" title="给我写信"></a></li>
                  <li><a href="/" class="photos" title="生活照片"></a></li>
                  <li><a href="/" class="heart" title="关注我"></a></li>
              </ul>
              <?php else: ?>
              <div style="margin-top:30%; margin-left:50px;">
                  <span>请先登录，<a href="<?php echo U('User/login');?>" style="color:blue;">登录</a></span>
              </div><?php endif; ?>
      </div>
  </div>
  <!--info end-->
  <div class="blank"></div>
  <div class="blogs">
    <ul class="bloglist">
      <li>
        <div class="arrow_box">
          <div class="ti"></div>
          <!--三角形-->
          <div class="ci"></div>
          <!--圆形-->
          <h2 class="title"><a href="<?php echo U('Blog/blog_detail');?>" target="_blank">我希望我的爱情是这样的</a></h2>
          <ul class="textinfo">
            <a href="/"><img src="/Blog/Public/index/images/s1.jpg"></a>
            <p> 我希望我的爱情是这样的，相濡以沫，举案齐眉，平淡如水。我在岁月中找到他，依靠他，将一生交付给他。做他的妻子，他孩子的母亲，为他做饭，洗衣服，缝一颗掉了的纽扣。然后，我们一起在时光中变老。</p>
          </ul>
          <ul class="details">
            <li class="likes"><a href="#">10</a></li>
            <li class="comments"><a href="#">34</a></li>
            <li class="icon-time"><a href="#">2013-8-7</a></li>
          </ul>
        </div>
        <!--arrow_box end--> 
      </li>
      <li>
        <div class="arrow_box">
          <div class="ti"></div>
          <!--三角形-->
          <div class="ci"></div>
          <!--圆形-->
          <h2 class="title"><a href="/" target="_blank">谁更心软，谁就先长大</a></h2>
          <ul class="textinfo">
            <a href="/"><img src="/Blog/Public/index/images/s2.jpg"></a>
            <p> 男人都是孩子，需要用一生时间来长大。女人都想当孩子，却最擅长的角色是妈妈。恋爱一开始，是两个孩子之间的游戏，到后来，成了大人和孩子之间的游戏。恋爱这回事，总要有一个人先长大，对另一半多些包容和宠溺。而通常来看：谁更心软，谁就先长大...</p>
          </ul>
          <ul class="details">
            <li class="likes"><a href="#">102</a></li>
            <li class="comments"><a href="#">58</a></li>
            <li class="icon-time"><a href="#">2013-8-7</a></li>
          </ul>
        </div>
        <!--arrow_box end--> 
      </li>



    </ul>
    <!--bloglist end-->
    <aside>
      <div class="tuijian">
        <h2>推荐文章</h2>
        <ol>
          <li><span><strong>1</strong></span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
          <li><span><strong>2</strong></span><a href="/">励志人生-要做一个潇洒的女人</a></li>
          <li><span><strong>3</strong></span><a href="/">女孩都有浪漫的小情怀――浪漫的求婚词</a></li>
          <li><span><strong>4</strong></span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
          <li><span><strong>5</strong></span><a href="/">女生清新个人博客网站模板</a></li>
          <li><span><strong>6</strong></span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
          <li><span><strong>7</strong></span><a href="/">Column 三栏布局 个人网站模板</a></li>
          <li><span><strong>8</strong></span><a href="/">时间煮雨-个人网站模板</a></li>
          <li><span><strong>9</strong></span><a href="/">花气袭人是酒香―个人网站模板</a></li>
        </ol>
      </div>
      <div class="clicks">
        <h2>热门点击</h2>
        <ol>
          <li><span><a href="/">慢生活</a></span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
          <li><span><a href="/">爱情美文</a></span><a href="/">励志人生-要做一个潇洒的女人</a></li>
          <li><span><a href="/">慢生活</a></span><a href="/">女孩都有浪漫的小情怀――浪漫的求婚词</a></li>
          <li><span><a href="/">博客模板</a></span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
          <li><span><a href="/">女生个人博客</a></span><a href="/">女生清新个人博客网站模板</a></li>
          <li><span><a href="/">Wedding</a></span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
          <li><span><a href="/">三栏布局</a></span><a href="/">Column 三栏布局 个人网站模板</a></li>
          <li><span><a href="/">个人网站模板</a></span><a href="/">时间煮雨-个人网站模板</a></li>
          <li><span><a href="/">古典风格</a></span><a href="/">花气袭人是酒香―个人网站模板</a></li>
        </ol>
      </div>

    </aside>
  </div>
  <!--blogs end--> 
</div>
<!--mainbody end-->


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