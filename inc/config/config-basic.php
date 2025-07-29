<?php
	//基础配置
	$setBasics = array(
	  array(
	      'id'    => 'set-logo', 
	      'type'  => 'media', 
	      'title' => 'LOGO', 
	      'before'=> '图标大小建议尺寸：240*60像素',
	      'library' => 'image',
      ),
      array(
	      'id'    => 'set-ico', 
	      'type'  => 'media',
	      'title' => 'ICO图标',
	      'before'=> '图标大小建议尺寸：32*32像素',
	      'library' => 'image',
      ),
    //   array(
	//       'id'     => 'set-pageWidth',
	//       'type'   => 'dimensions',
	//       'title'  => '页面宽度',
	//       'before' => '电脑端页面自定义内容宽度，手机端不支持',
	//       'height' => false,
	//       'units'  => array( 'px' ),
	//       'default'     => array(
	//         'width'     => '1280'
	//       ),
	//   ),
	  array(
	      'id'     => 'set-pageRadius',
	      'type'   => 'number',
	      'title'  => '页面圆角',
	      'before' => '功能模块圆角值，建议范围：0-30',
	      'units'  => 'px',
	      'default' => 0,
	  ),
	//   array(
	//       'id'     => 'set-pagePadding',
	//       'type'   => 'switcher',
	//       'title'  => '页面填充',
	//       'before' => '默认关闭，填充为0；开启后填充为2em',
	//       'text_on'    => '开启',
  	// 	  'text_off'   => '关闭',
	//   ),
    //   array(
	//       'id'    => 'set-pageBorder',
	//       'type'  => 'border',
	//       'title' => '页面边框',
	//       'before' => '模块边框是否开启',
	//       'all'   => true,
	//   ),
	  array( 
	      'id'    => 'set-welcomeFlag', 
	      'type'  => 'switcher', 
	      'title' => '站点公告', 
	      'before' => '公告是否显示',
	      'text_on'    => '显示',
  		  'text_off'   => '隐藏',
        ),
	  array(
	      'id'    => 'set-welcomeTip',
	      'type'  => 'textarea',
	      'title' => '站点公告',
	      'before' => '站点公告，默认显示以下内容：',
	      'default' =>  "欢迎使用QUIPlus主题，请使用正版：course.51qux.com",
	      'dependency' => array( 'set-welcomeFlag', '==', '1' ),
      ),
      array(
	      'id'    => 'set-icp',
	      'type'  => 'text',
	      'title' => 'ICP备案',
	      'before' => '例如：“豫备案号：1104**1号”',
      ),
       array(
	      'id'    => 'set-gongan',
	      'type'  => 'text',
	      'title' => '公安备案',
	      'before' => '例如：“豫公网安备 1104**1号”',
      ),
    );
		

?>