<?php
	//特色配置
	$setTool = array(
		array( 
	      'id'    => 'set-copy', 
	      'type'  => 'switcher', 
	      'title' => '复制开关', 
	      'before' => '网站内容是否允许复制！',
      	),
      	array( 
	      'id'    => 'set-tools', 
	      'type'  => 'switcher', 
	      'title' => '经典小工具', 
	      'before' => '后台外观显示小工具',
      	),
      	array( 
	      'id'    => 'set-titleEffect', 
	      'type'  => 'switcher', 
	      'title' => '动态标题', 
	      'before' => '页面标题随页面隐藏切换显示不同内容',
      	),
      	array(
	      'id'    => 'set-titleEffectInText',
	      'type'  => 'text',
	      'title' => '进入页面',
	      'before' => '网页标题进入的时候将改成以下内容：',
	      'default' => '欢迎回来，EMO~',
	      'dependency' => array( 'set-titleEffect', '==', '1' ),
	    ),
	    array(
		  'id'    => 'set-titleEffectOutText',
		  'type'  => 'text',
		  'title' => '离开页面',
		  'before' => '网页标题离开的时候将改成以下内容',
		  'default' => '不要走嘛，再看看！',
		  'dependency' => array( 'set-titleEffect', '==', '1' ),
	    ),
	    array( 
	      'id'    => 'set-effect', 
	      'type'  => 'switcher', 
	      'title' => '全景交互', 
	      'before' => '开启后鼠标点击将出现交互效果',
      	),
      	array(
	      'id'      => 'set-effectStyle',
	      'type'    => 'radio',
	      'title'   => '全景特效',
	      'options' => array(
	        '1'     => '鼠标爱心',
	        '2'     => '鼠标彩球',
	        '3'     => '花瓣纷飞',
	        '4'     => '粒子背景',
	      ),
	      'default' => '1',
	      'dependency' => array( 'set-effect', '==', '1' ),
	    ),
    );
?>