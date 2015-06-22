<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>jankz网络共享平台</title>
  <meta name="keywords" content="吉贞网络共享,吉贞,jankz平台,jank,bootstrap,免费,响应式,资源分享,网络平台,框架">
  <meta name="description" content="吉贞网络平台,致力打造免费开源的资源共享平台,集合各种资源与技术,UI,semantic,pintuer,bootstrap,thinkphp">
  <link rel="stylesheet" href="/jankz/Public/Common/pintuer/pintuer.css">
  <link rel="stylesheet" href="/jankz/Public/Home/css/main.css">
  
  <script src="/jankz/Public/Common/pintuer/jquery.js"></script>
  <script src="/jankz/Public/Common/pintuer/pintuer.js"></script>
  <script src="/jankz/Public/Common/pintuer/holder.js"></script>
  <script src="/jankz/Public/Common/pintuer/respond.js"></script>
  <script src="/jankz/Public/Common/laypage/laypage.js"></script>
  <!--   
-->
<link type="image/x-icon" href="/jankz/Public/Home/images/favicon1.ico" rel="shortcut icon" />
<link href="/jankz/Public/Home/images/favicon.png" rel="bookmark icon" />
</head>

<body>
<!--顶部-->





     <div class="layout toper">
    <div class="container height-large">
      <span class="float-right">

        <div id="unlog">
          <a class="text-gray" href="<?php echo U('Home/User/login');?>">登陆 |</a>
        <a class="text-gray" href="<?php echo U('Home/User/register');?>">注册</a>
        </div>
       <div id="loged"><?php echo $_SESSION['username']; ?> 已登陆 <a class="text-gray" href="<?php echo U('Home/User/logout');?>">注销</a></div>
      </span>
      欢迎加入jank
      <!-- <img src="/jankz/Public/Home/images/logo.png" alt="" class="img-responsive hidden-m hidden-b"> -->
      <a href="<?php echo U('Home/Index/index');?>">网络平台</a>
    </div>
  <div class="hidden" id="cli"><?php echo $_SESSION['username'];?></div>
  </div>
<script>
  // $("#loged").hide();
</script>
<script type="text/javascript">
   if($("#cli").html()){
    $("#unlog").hide();
  }else{
    $("#loged").hide();
  }
</script>


<div class="demo-nav padding-big-top padding-big-bottom fixed" id="nav">
  <div class="container padding-top padding-bottom">
    <div class="line">
      <div class="xl12 xs3 xm3 xb2">
        <button class="button icon-navicon float-right" data-target="#header-demo"></button>
        <a target="_blank" href="<?php echo U('Index/index');?>">
          <div class="xl4 xs12 xm12">
            <img src="/jankz/Public/Home/images/logo.png" alt=""  class="img-responsive" />
          </div>
        </a>
      </div>
      <div class=" xl12 xs9 xm9 xb10 nav-navicon" id="header-demo">

        <div class="xs8 xm6 xb6 padding-small">
          <ul class="nav nav-menu nav-inline nav-pills nav-big">
            <li>
              <a href="<?php echo U('Home/Index/index');?>">首页</a>
            </li>
            <li>
              <a href="<?php echo U('Home/Index/fream');?>">框架</a>
            </li>
            <li>
              <a href="<?php echo U('Home/Index/zuopin');?>">作品</a>
            </li>
            <li>
              <a href="<?php echo U('Home/Index/qianyan');?>">前沿</a>
            </li>
            <li>
              <a href="<?php echo U('Home/Index/more');?>">
                更多
                <span class="arrow"></span>
              </a>
              <ul class="dropdown">
                <li>
                  <a href="<?php echo U('Home/Index/about');?>">关于我们</a>
                </li>
                <li>
                  <a href="<?php echo U('Home/Index/test');?>">吉贞公益</a>
                </li>
                <li>
                  <a href="http://localhost/wordpress/">吉贞轻说</a>
                </li>
                <li>
                  <a href="">吉贞论坛</a>
                </li>
                <li>
                  <a href="http://jankzshare.sinaapp.com/index.php?s=/home/user/login.html">微信平台</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="xs4 xm3 xb4">
          <form>
            <div class="input-group padding-little-top">
              <input type="text" class="input border-gray" name="keywords" size="30" placeholder="关键词" />
              <span class="addbtn">
                <button type="button" class="button bg-gray icon-search"></button>
              </span>
            </div>
          </form>
        </div>
        <div class="hidden-l hidden-s xm3 xb2">
          <div class="text-gray text-big icon-qq height-large text-right">QQ 979890264</div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="banner hidden-l" data-style="border-white">
  <div class="carousel">

    <div class="item">

      <img src="/jankz/Public/Home/images/1.jpg" width="100%" class="img-responsive" />
    </div>
    <div class="item">

      <img src="/jankz/Public/Home/images/2.jpg" width="100%" class="img-responsive"/>
    </div>
    <div class="item">

      <img src="/jankz/Public/Home/images/3.jpg" alt="" width="100%" class="img-responsive"/>
    </div>
  </div>
</div>
<br />

<div class="keypoint bg-white">
  <div class="container">
    <div class="line text-center">
      <div class="xm1 hidden-l"></div>
      <div class="xl12 xm3 text-center">
        <a href="<?php echo U('Fream/qianduan');?>">
          <img src="/jankz/Public/Home/images/index/k-qianduan.jpg" alt="" class="radius img-responsive"></a>
      </div>
      <div class="xl12 xm8">
          <div class="margin-large-top">
              <div class="xm3 hidden-l"></div>
            <dix class="xl12 xm7">
              <h1 class="margin-large-top">快捷高效的框架</h1>
              <p>让每一个人变成优秀的前端工程师变得可能 让web开发更迅速、简单。</p>
              <a href="<?php echo U('Fream/qianduan');?>" class="button bg-main button-big margin-large-top">查看更多</a>
            </dix>
            <div class="xm2 hidden-l"></div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="keypoint bg">
  <div class="container">
    <div class="line text-center">
     <div class="xl12 xm8">
          <div class="margin-large-top">
          <div class="xm2 hidden-l"></div>
            <dix class="xl12 xm6">
              <h1 class="margin-large-top">了不起的框架</h1>
              <p>轻松写出优雅的代码，简单易于学习</p>
              <a href="<?php echo U('Fream/php');?>" class="button bg-main button-big margin-large-top">查看更多</a>
            </dix>
            <div class="xm4 hidden-l"></div>
          </div>
     </div>
      <div class="xl12 xm3">
        <a href="<?php echo U('Fream/php');?>">
          <img src="/jankz/Public/Home/images/index/k-houduan.jpg" alt="" class="radius img-responsive"></a>
      </div>
     <div class="xm1 hidden-l"></div>
    </div>
  </div>
</div>
<div class="keypoint bg-white">
  <h1 class="text-center margin-bottom-big"></h1>
  <p class="text-center"></p>
  <p class="text-center"></p>
  <p class="text-center">
  </p>
  <div class="container">
    <div class="line-big text-center">
      <div class="xl6 xm3">
        <a href="<?php echo U('Qianyan/share');?>">
          <img src="/jankz/Public/Home/images/index/kaiyuan.jpg" width="100%" class="img-responsive radius-circle" />
        </a>
        <h1>开源</h1>
        <small>开源不止需要勇气，更是一种精神</small>
        <p class="margin-top">提供最新最快的开源信息</p>
      </div>
      <div class="xl6 xm3">
        <a href="<?php echo U('qianyan');?>">
         <img src="/jankz/Public/Home/images/index/news.jpg" width="100%" class="img-responsive radius-circle" />
        </a>
        <h1>资讯</h1>
        <small>掌握一手资料，站在资讯前沿</small>
        <p class="margin-top">提供最新最框架信息</p>
      </div>
      <div class="xl6 xm3">
        <a href="<?php echo U('Qianyan/linux');?>">
         <img src="/jankz/Public/Home/images/index/linux.jpg" width="100%" class="img-responsive radius-circle" />
        </a>
        <h1>Linux</h1>
        <small>了不起的Linux,时刻关注</small>
        <p class="margin-top">追踪linux动态</p>
      </div>
      <div class="xl6 xm3">
        <a>
          <img src="/jankz/Public/Home/images/index/free.jpg" width="100%" class="img-responsive radius-circle" />
        </a>
        <h1>免费</h1>
        <small>都这年代了，免费吧</small>
        <p class="margin-top">我们承诺永不收费</p>
      </div>
    </div>
    <br />
  </div>
  <div class="text-center">
    <button class="button bg-main button-big">我们提供</button>
  </div>
</div>















<!--底部-->

  <br />
  <br />
  <div class="container-layout bg-gray bg-inverse padding-big-top padding-big-bottom">
    <div class="container">
      <div class="table-responsive padding hidden-l">
        <ul class="nav nav-sitemap">
          <li>
            <a href="#">吉贞公益</a>
            <ul>
              <li>
                <a href="#">新闻公告</a>
              </li>
              <li>
                <a href="#">公益资讯</a>
              </li>
              <li>
                <a href="#">公益报道</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">吉贞系列</a>
            <ul>
              <li>
                <a href="#">吉贞文学</a>
              </li>
              <li>
                <a href="#">产品音乐</a>
              </li>
              <li>
                <a href="#">产品轻说</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">吉贞论坛</a>
            <ul>
              <li>
                <a href="#">科技前沿</a>
              </li>
              <li>
                <a href="#">技术交流</a>
              </li>
              <li>
                <a href="#">酷炫时尚</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">留言反馈</a>
          </li>
          <li>
            <a href="#">联系方式</a>
          </li>
        </ul>
      </div>
      <div class="text-center">版权所有 © jankz.com All Rights Reserved，粤ICP备：15049392</div>
    </div>
  </div>

</body>
</html>