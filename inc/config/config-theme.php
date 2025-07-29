<?php
	//风格切换
	$setTheme = array(
		array(
	      'id'          => 'set-theme',
	      'type'        => 'select',
	      'title'       => '切换子主题',
	      'before'	    => '切换之后，右上角“保存配置”生效',
	      'options'     =>  $ThemeFileNames,
	      'default'     => "1"
	    ),
	    // array(
	    //   'id'          => 'set-themeStyle',
	    //   'type'        => 'select',
	    //   'title'       => '快速布局',
	    //   'before'	    => '建议请勿频繁切换风格，影响收录',
	    //   'options'     =>   array(
	    //   	'1'     => '自由搭配',
	    //     '2'     => '极简文字',
	    //     '3'     => '经典图文',
	    //     '4'     => '卡片风格',
	    //     '5'     => '混排风格',
	    //   ),
	    //   'default'     => "1"
	    // ),
	    array( 
	      'id'    => 'set-dark', 
	      'type'  => 'switcher', 
	      'title' => '网站深色模式', 
	      'before'	    => '开启之后，部分之定义颜色将失效，如：背景色',
	      'text_on'    => '开启',
  		  'text_off'   => '关闭',
        ),
	    array( 
	      'id'    => 'set-mainColor', 
	      'type'    => 'color', 
	      'title'   => '网站主色调', 
	      'default' => '#0077ff',
	      'before'	=> '网站点缀色，页面更加活泼'
        ),
        array( 
	      'id'    => 'set-backgroundColor', 
	      'type'    => 'color', 
	      'title'   => '网站背景色', 
	      'default' => '#ffffff',
	      'before'	=> '网站整体背景色，默认#ffffff。背景图存在时，背景色将会失效',
	   //   'dependency' => array( 'set-themeStyle', '!=', '2' ),
        ),
        array(
	      'id'    => 'set-bgimg', 
	      'type'  => 'media',
	      'title' => '网站背景图',
	      'before'=> '图片建议尺寸：1920*1080像素',
	      'library' => 'image',
	   //   'dependency' => array( 'set-themeStyle', '==', '1' ),
        ),
      
	)  
?>