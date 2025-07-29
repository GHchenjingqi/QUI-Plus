<?php
	//清理head
	require_once get_theme_file_path() .'/inc/modul/wp-remove.php';
	//引入自定义函数
    require_once get_theme_file_path() .'/inc/modul/QUI.php';
	require_once get_theme_file_path() .'/inc/modul/QUIFunction.php';
	//wp 自带框架或插件配置修改
  	add_filter('pre_site_transient_update_core',    $QUICLOSE); // 关闭核心提示
	add_filter('pre_site_transient_update_plugins', $QUICLOSE); // 关闭插件提示
	add_filter('pre_site_transient_update_themes',  $QUICLOSE); // 关闭主题提示

?>
