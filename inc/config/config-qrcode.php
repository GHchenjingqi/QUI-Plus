<?php
	//基础配置
	$setQRcode = array(
		array(
		      'id'    => 'set-phone',
		      'type'  => 'text',
		      'title' => '联系电话',
		      'before' => '悬浮按钮鼠标经过后显示',
	    ),
	    array(
		      'id'    => 'set-QQ',
		      'type'  => 'text',
		      'title' => '站长QQ',
		      'before' => '悬浮按钮鼠标经过后显示',
	    ),
        array(
	      'id'     => 'set-QQCode',
	      'type'   => 'repeater',
	      'title'  => 'QQ二维码',
	      'fields' => array(
	       	array(
		      'id'    => 'set-key',
		      'type'  => 'text',
		      'title' => '二维码标题',
		      'before' => '描述二维码用途',
	      	),
	        array(
		      'id'    => 'set-ercodeimg', 
		      'type'  => 'media', 
		      'title' => '二维码图片', 
		      'before'=> '图标大小建议尺寸：240*240像素',
		      'library' => 'image',
	      	),
	      ),
	      'max' => 1,
	      'min' => 0,
	    ),
	    array(
	      'id'     => 'set-WXCode',
	      'type'   => 'repeater',
	      'title'  => '微信二维码',
	      'fields' => array(
	       	array(
		      'id'    => 'set-key',
		      'type'  => 'text',
		      'title' => '二维码标题',
		      'before' => '描述二维码用途',
	      	),
	        array(
		      'id'    => 'set-ercodeimg', 
		      'type'  => 'media', 
		      'title' => '二维码图片', 
		      'before'=> '图标大小建议尺寸：240*240像素',
		      'library' => 'image',
	      	),
	      ),
	      'max' => 1,
	      'min' => 0,
	    ),
    );
		

?>