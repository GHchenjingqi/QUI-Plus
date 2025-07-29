<?php
	//轮播图设置
	$setBanner = array(
	   array( 
	      'id'    => 'set-bannerFlag', 
	      'type'  => 'switcher', 
	      'title' => '轮播图开关', 
	      'before' => '开启之后，设置以下参数能正常生效！',
       ),
       array(
	      'id'    => 'set-bannerStyle', 
	      'type'  => 'select', 
	      'title' => '轮播图样式', 
	      'options'   =>   array(
	        '1'     => '全屏单列',
	        '2'     => '全屏三列',
	        '3'     => '正常显示',
	      ),
	      'default'     => '1',
	      'dependency' => array( 'set-bannerFlag', '==', '1' ),
      ),
      array(
	      'id'      => 'set-bannerRadius',
	      'type'    => 'number',
	      'title'   => '图片圆角弧度',
	      'before' => '请对照UI效果设计，避免影响美观',
	      'default'     => 0,
	      'unit'    => 'px',
	      'dependency' => array(
		    array( 'set-bannerFlag', '==', 'true' ),
		    array( 'set-bannerStyle',   '!=', '1' ),
		  )
	    ),
	  array(
	      'id'       => 'set-bannerHeight',
	      'type'     => 'number',
	      'title'    => '轮播图高度',
	      'before'   => '轮播图版块整体高度: 全屏单列默认高度540px，其他情况高度默认为360px',
	      'default'     => 360,
		  'max' => 0,
	      'min' => 0,
	      'unit'    => 'px',
	      'dependency' => array( 'set-bannerFlag', '==', '1' ),
	  ),
       array(
	      'id'     => 'set-banner',
	      'type'   => 'repeater',
	      'title'  => '轮播图',
	      'fields' => array(
	        array(
		      'id'    => 'set-bannerImg', 
		      'type'  => 'media', 
		      'title' => '轮播图', 
		      'before'=> '轮播图尺寸，请以实际大小设计对应广告图',
		      'library' => 'image',
	      	),
	       	array(
	          'id'    => 'set-bannerLink',
	          'type'  => 'link',
	          'title' => 'URL',
	          'before' => '点击图片之后跳转路径',
	        ),
	      ),
	      'max' => 8,
	      'min' => 0,
	      'dependency' => array( 'set-bannerFlag', '==', '1' ),
	    ),
    );
		

?>