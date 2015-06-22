<?php
// 检测PHP环境
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
	die('require PHP > 5.3.0 !');
}

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', True);
// 定义编译目录
define('RUNTIME_PATH', './Runtime/');
//定义公共函数目录
define('COMMON_PATH', './Common/');
// 定义应用目录
define('APP_PATH', './Apps/');
//定义网站根目录
define('SITE_URL', "http://localhost/jankz/");
//定义网站上传附件目录
define('FILE_UPLOADS', SITE_URL . 'Uploads/');
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
