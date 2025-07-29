<?php
	//文章设置
	$setArtcile = array(
		  array(
	      	  'id'    => 'set-titleFix',
	      	  'type'    => 'switcher',
	      	  'title'   => '悬浮标题',
	      	  'text_on'  => '显示',
	          'text_off' => '隐藏',
	      ),
	      array(
	          'id'    => 'set-articleClass',
	          'type'    => 'switcher',
	          'title'   => '分类标签',
	          'text_on'  => '显示',
	          'text_off' => '隐藏',
	      ),
	      array(
	          'id'    => 'set-articleAlign',
	          'type'  => 'select', 
		      'title' => '图片对齐', 
		      'options'   =>   array(
		        '1'     => '居左对齐',
		        '2'     => '居中对齐',
		      ),
		      'default'     => '1',
	      ),
	      array(
	          'id'    => 'set-articleWidthFlag',
	          'type'    => 'switcher',
	          'title'   => '图片宽度',
	          'text_on'  => '开启',
	          'text_off' => '关闭',
	      ),
	      array(
		      'id'    => 'set-articleWidth',
		      'type'    => 'slider',
		      'title'   => '图片宽度自定义',
		      'unit'    => '%',
		      'min'      => '50',
     		  'max'      => '100',
		      'default' => '75',
		      'dependency' => array( 'set-articleWidthFlag', '==', '1' ),
		  ),
	      array(
	          'id'    => 'set-articleRelate',
	          'type'    => 'switcher',
	          'title'   => '猜你喜欢',
	          'text_on'  => '显示',
	          'text_off' => '隐藏',
	      ),
	      array(
	          'id'    => 'set-articleComment',
	          'type'    => 'switcher',
	          'title'   => '评论开启',
	          'before'  => '请先开启WordPress后台-设置-讨论，再开启此项',
	          'text_on'  => '显示',
	          'text_off' => '隐藏',
	      ),
    );
?>