<?php
return array(
	//'配置项'=>'配置值'
	/* 数据库设置 */
	'DB_TYPE' => 'mysqli', // 数据库类型
	'DB_HOST' => 'localhost', // 服务器地址
	'DB_NAME' => 'jankz', // 数据库名
	'DB_USER' => 'root', // 用户名

	// 'DB_TYPE' => 'mysql', // 数据库类型
	// 'DB_HOST' => 'qdm163769407.my3w.com', // 服务器地址
	// 'DB_NAME' => 'qdm163769407_db', // 数据库名
	// 'DB_USER' => 'qdm163769407', // 用户名
	'DB_PWD' => 'apks2000', // 密码
	'DB_PORT' => '3306', // 端口
	'DB_PREFIX' => 'think_', // 数据库表前缀
	'DB_PARAMS' => array(), // 数据库连接参数
	'DB_DEBUG' => FALSE, // 数据库调试模式 开启后可以记录SQL日志
	'DB_FIELDS_CACHE' => true, // 启用字段缓存
	'DB_CHARSET' => 'utf8', // 数据库编码默认采用utf8

	//session 设置
	'SESSION_TYPE' => 'Db',
	'SESSION_EXPIRE' => 30 * 60, //设置60秒过期
	//URL模式设置 重写模式
	'URL_MODEL' => 1,
	//auth 认证设置
	'AUTH_ON' => true, // 认证开关
	'AUTH_TYPE' => 1,
	'ADMIN_AUTH_KEY' => '1', //管理员组ID
	'USER_AUTH_KEY' => 'uid', /*用户唯一标识*/// 认证方式，1为实时认证；2为登录认证。
	'AUTH_GROUP' => 'think_auth_group', // 用户组数据表名
	'AUTH_GROUP_ACCESS' => 'think_auth_group_access', // 用户-用户组关系表
	'AUTH_RULE' => 'think_auth_rule', // 权限规则表
	'AUTH_USER' => 'think_user', // 用户信息表

	//开启错误显示
	'SHOW_PAGE_TRACE' => true,
);