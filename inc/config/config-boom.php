<?php
	//布局配置
	$setBoom = array(
      	array( 
	      'id'    => 'set-boomFlag', 
	      'type'  => 'switcher', 
	      'title' => '弹窗状态', 
	      'before' => '开启后，页面显示弹窗',
	      'text_on'    => '开启',
  		  'text_off'   => '关闭',
      	),
      	array(
	      'id'      => 'set-boomStyle',
	      'type'    => 'radio',
	      'title'   => '弹窗色调',
	      'before'  => '默认背景色调为黑色透明',
	      'options' => array(
	        '1'     => '黑透',
	        '2'     => '白透',
	      ),
	      'default' => '1',
	      'dependency' => array( 'set-boomFlag', '==', '1' ),
	    ),
      	array(
	      'id'      => 'set-boomStatus',
	      'type'    => 'radio',
	      'title'   => '弹窗类型',
	      'before'  => '默认图片弹窗，可切换至文字弹框',
	      'options' => array(
	        '1'     => '纯图弹窗',
	        '2'     => '文字弹窗',
	        '3'     => '图文弹窗',
	      ),
	      'default' => '1',
	      'dependency' => array( 'set-boomFlag', '==', '1' ),
	    ),
      	array(
	      'id'       => 'set-boomSize',
	      'type'     => 'dimensions',
	      'title'    => '弹窗宽高',
	      'before'   => '仅允许定义电脑端弹窗尺寸大小，默认尺寸600*400，内容溢出将会出现竖向滚动',
	      'units' => array( 'px' ),
	      'default'  => array(
	        'width'  => '600',
	        'height' => '400',
	        'unit'   => 'px',
	      ),
	      'dependency' => array( 'set-boomFlag', '==', '1' ),
	    ),
	    array( 
	      'id'    => 'set-BoomImg', 
	      'type'  => 'media', 
	      'title' => '弹窗主图', 
	      'before' => '建议主图宽高同弹窗宽高一致，保证图片不拉伸变形',
	      'dependency' => array(
		    array( 'set-boomFlag', '==', 'true' ),
		    array( 'set-boomStatus',   '==', '1' ),
		  ),
      	),
      	array( 
	      'id'    => 'set-BoomImg2', 
	      'type'  => 'media', 
	      'title' => '弹窗横图', 
	      'before' => '建议横图高度占弹框高度 1/3，默认高度200px',
	      'dependency' => array(
		    array( 'set-boomFlag', '==', 'true' ),
		    array( 'set-boomStatus',   '==', '3' ),
		  ),
      	),
      	array(
	      'id'    => 'set-BoomTextTitle',
	      'type'  => 'text',
	      'title' => '弹窗文案标题',
	      'before' => '建议字符长度在2~10之间',
	       'dependency' => array(
		    array( 'set-boomFlag', '==', 'true' ),
		    array( 'set-boomStatus', '==', '2' ),
		  ),
		  'default' => '欢迎来到QUIPlus 小站！',
     	 ),
      	array(
	      'id'    => 'set-BoomText',
	      'type'  => 'text',
	      'title' => '弹窗文案',
	      'before' => '建议字符长度在2~30之间',
	       'dependency' => array(
		    array( 'set-boomFlag', '==', 'true' ),
		    array( 'set-boomStatus', '!=', '1' ),
		  ),
		  'default' => '在这里你可以设置弹窗显示的内容，或者想要告诉用户的东西，emo~',
     	 ),
      	array( 
	      'id'    => 'set-BoomLink', 
	      'type'  => 'link', 
	      'title' => '弹窗跳转', 
	      'dependency' => array( 'set-boomFlag', '==', '1' ),
      	),
      	array(
	      'id'      => 'set-BoomDate',
	      'type'    => 'date',
	      'title'   => '弹窗期限',
	      'before'  => '特定时间段显示该弹框，过期不显示，不设置永久显示',
	      'from_to' => true,
	      'dependency' => array( 'set-boomFlag', '==', '1' ),
	    ),

    );
		

?>