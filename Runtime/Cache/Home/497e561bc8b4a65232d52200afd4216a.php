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
            <div class="xl4 xs12 xm12"><img src="/jankz/Public/Home/images/logo.png" alt=""  class="img-responsive" /></div>
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






	<div class="container">
		<div class="line-big">
			<div class="xm3 hidden-l">
				<h2 class="bg-main text-white padding">快捷资讯</h2>
				<div class="padding-big bg">
					<ul class="list-media list-underline">
						<li>
							<div class="media media-x">

								<a class="float-left" href="<?php echo U('qianyan/fream');?>">
									<img src="/jankz/Public/Home/images/index/th-pintuer.jpg" class="radius" alt="..."></a>
								<div class="media-body"> <strong>前端框架</strong>
									<!-- 拼图是优秀的响应式前端CSS开源框架，让前端开发像游戏般快乐、简单、灵活、便捷。 -->
									<small>让前端开发像游戏般快乐</small>
									<a class="button button-little border-red swing-hover margin-top" href="<?php echo U('qianyan/fream');?>">快捷入口</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media media-x">

								<a class="float-left" href="<?php echo U('qianyan/phpfream');?>">
									<img src="/jankz/Public/Home/images/qianyan/cbl/php.jpg" class="radius" alt="..."></a>
								<div class="media-body"> <strong>PHP框架</strong>
									<!-- Bootstrap是目前最受欢迎的前端框架。它简洁灵活，使得 Web 开发更加快捷。 -->
									<small>高效快捷，代码优雅</small>
									<a class="button button-little border-yellow swing-hover margin-top" href="<?php echo U('qianyan/phpfream');?>">快捷入口</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media media-x">

								<a class="float-left" href="<?php echo U('qianyan/linux');?>">
									<img src="/jankz/Public/Home/images/qianyan/cbl/linux.jpg" class="radius" alt="..."></a>
								<div class="media-body">
									<strong>Linux</strong>
									<!-- 作为一个开发框架，通过HTML语言帮助创建令人赏心悦目、响应式的布局。 -->
									<small>LAMP 不二选择</small>
									<a class="button button-little border-red swing-hover margin-top" href="<?php echo U('qianyan/linux');?>">快捷入口</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media media-x">

								<a class="float-left" href="<?php echo U('qianyan/tools');?>">
									<img src="/jankz/Public/Home/images/qianyan/cbl/sublime.jpg" class="radius" alt="..."></a>
								<div class="media-body">
									<strong>开发工具</strong>
									<!-- 架起设计与后端的桥梁 ，轻量级前端框架，简单免费，兼容性好，服务中国网站。 -->
									<small>开发者的帮手，事半功倍</small>
									<a class="button button-little border-black swing-hover margin-top" href="<?php echo U('qianyan/tools');?>">快捷入口</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media media-x">

								<a class="float-left" href="<?php echo U('qianyan/share');?>">
									<img src="/jankz/Public/Home/images/qianyan/cbl/share.jpg" class="radius" alt="..."></a>
								<div class="media-body">
									<strong>技术分享</strong>
									<!-- 一款轻量级、模块化的前端框架,可快速构建强大的web前端界面 -->
									<small>交流分享，快速提升技术</small>
									<a class="button button-little border-blue swing-hover margin-top" href="<?php echo U('qianyan/share');?>">快捷入口</a>
								</div>
							</div>
						</li>
						<li>
							<div class="media media-x">

								<a class="float-left" href="<?php echo U('qianyan/moremuch');?>">
									<img src="/jankz/Public/Home/images/qianyan/cbl/wx.jpg" class="radius" alt="..."></a>
								<div class="media-body">
									<strong>包罗万象</strong>
									<!-- Amaze UI 汲取了很多优秀的社区资源，是中国首个开源 HTML5 跨屏前端框架 -->
									<small>开发者的帮手，事半功倍</small>
									<a class="button button-little border-green swing-hover margin-top" href="<?php echo U('qianyan/moremuch');?>">快捷入口</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<br />
			</div>
			<div class="xl12 xm9">
				<div class="panel">
					<div class="panel-head">
					 <strong>新闻动态</strong>
					</div>
					<div class="panel-body">
						<h1 class="text-center margin"><?php echo ($qianyan["title"]); ?></h1>
						<p class="text-center">日期：<?php echo (date('Y-m-d,h:m',$qianyan["creattime"])); ?>/阅读：<?php echo ($qianyan["readtime"]); ?>次</p>
						<div>
							<?php echo (stripslashes(htmlspecialchars_decode($qianyan["content"]))); ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<br />
	<br />
	<script type="text/javascript">
	$(document).ready(function(){
		$("img").css("width","100%");
		$("img").addClass('img-responsive');
	});
	</script>








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