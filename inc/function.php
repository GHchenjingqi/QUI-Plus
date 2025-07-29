<?php
	//定义全局变量
	$name="QUI_Theme";
	$host="127.0.0.1";
	$code_status="";
	//引入wp核心配置
	require_once get_theme_file_path() .'/inc/modul/wp-basic.php';
	//引入专题分类
	require_once get_theme_file_path() .'/inc/modul/wp-series.php';
	//引入读取文件插件
	require_once get_theme_file_path() .'/inc/inc-file.php';
	//	头像插件
	require_once get_theme_file_path() .'/plugs/author-avatars.php';
	// 后台新增分类封面
	require_once get_theme_file_path() .'/inc/modul/wp-cat.php'; 
	//引入后台框架
	require_once get_theme_file_path() .'/inc/codestar-framework/codestar-framework.php';
	require_once get_theme_file_path() .'/inc/inc-admin.php';

?>