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
    <script type="text/javascript">
laypage({
    cont: 'page1',
    pages:$("#pages").val(), //可以叫服务端把总页数放在某一个隐藏域，再获取。假设我们获取到的是18
    skip: true, //是否开启跳页
    skin: '#AF0000',
    curr: function(){ //通过url获取当前页，也可以同上（pages）方式获取
        var page = location.search.match(/page=(\d+)/);
        return page ? page[1] : 1;
    }(),
    jump: function(e, first){ //触发分页后的回调
        if(!first){ //一定要加此判断，否则初始时会无限刷新
            location.href = '?page='+e.curr;
        }
    }
});
    </script>
  
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



  <!-- 内容 -->
  <div class="container">
    <div class="line-middle list">
      <h3 class="padding icon-caret-right text-red"> 前端精选</h3>
      <!-- 前端框架循环开始 -->
      <?php if(is_array($qianduan)): foreach($qianduan as $key=>$qd): ?><div class="xl12 xs6 xm3 xb3 margin-bottom">
          <div class="media">
            <a class="img clearfix" href="<?php echo ($qd["link"]); ?>" target="_blank">
              <img src="<?php echo ($qd["image"]); ?>" class="img-responsive padding-small bg border radius-big" alt="" />
            </a>
            <div class="media-body padding-top border-bottom border-dotted"> <strong class="text-center"><?php echo ($qd["name"]); ?></strong>
              <a href="<?php echo ($qd["link"]); ?>" target="_blank" class="button button-little bg-main margin-small">访问</a>
            </div>
          </div>
        </div><?php endforeach; endif; ?>
      <!-- 循环结束 -->
      <br />
      <input type="text" class="hidden" value="<?php echo ($pag); ?>" id="pages">
<div id="page1"></div>
    </div>
  </div>










    <script type="text/javascript">
laypage({
    cont: 'page1',
    pages:$("#pages").val(), //可以叫服务端把总页数放在某一个隐藏域，再获取。假设我们获取到的是18
    skip: true, //是否开启跳页
    skin: '#AF0000',
    curr: function(){ //通过url获取当前页，也可以同上（pages）方式获取
        var page = location.search.match(/page=(\d+)/);
        return page ? page[1] : 1;
    }(),
    jump: function(e, first){ //触发分页后的回调
        if(!first){ //一定要加此判断，否则初始时会无限刷新
            location.href = '?page='+e.curr;
        }
    }
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