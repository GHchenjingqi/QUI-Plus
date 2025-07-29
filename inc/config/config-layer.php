<?php
	//布局配置
	$setLayer = array(
	    array( 
	      'id'    => 'set-topImgFlag', 
	      'type'  => 'switcher', 
	      'title' => '顶部图片', 
	      'before' => '页面顶部会出现顶部图片模块',
	      'dependency' => array( 'set-themeStyle', '!=', '2' ,'all'),
      	),
      	array(
	      'id'     => 'set-topImg',
	      'type'   => 'repeater',
	      'title'  => '顶部图片',
	      'fields' => array(
	      	array(
		      'id'    => 'set-topImg', 
		      'type'  => 'media', 
		      'title' => '图片', 
		      'before'=> '图标大小建议尺寸：1920*120像素'
	      	)
	      ),
	      'max' => 5,
	      'min' => 0,
	    //   'dependency' => array( 'set-topImgFlag', '==', '1' ),
	    ),
	    
      	array( 
	      'id'    => 'set-indexSelected', 
	      'type'  => 'switcher', 
	      'title' => '首页-精选推荐', 
	      'before' => '精选内容模块，请给精选内容设置特色图片',
	    //   'dependency' => array( 'set-themeStyle', '!=', '2' ,'all'),
      	),
	    array( 
	      'id'    => 'set-indexTopic', 
	      'type'  => 'switcher', 
	      'title' => '首页-显示专题推荐', 
	      'before' => '开启后，首页将显示专题推荐列表,记得先创建专题分类及专题哦！',
	    //   'dependency' => array( 'set-themeStyle', '!=', '2' ,'all'),
      	),
      	 array(
	      'id'    => 'set-indexTopicNum', 
	      'type'  => 'text',
	      'title' => '专题数量', 
	      'before'=> '电脑端一行最多显示6条，最少1条（移动端默认）',
	      'default'     => '4',
	      'dependency' => array( 'set-indexTopic', '==', '1' ),
	      'max' => 8,
	      'min' => 2,
      ),
	    array( 
	      'id'    => 'set-indexTop', 
	      'type'  => 'switcher', 
	      'title' => '首页-置顶推荐', 
	    //   'dependency' => array( 'set-themeStyle', '!=', '2' ,'all'),
      	),
      	array( 
	      'id'    => 'set-indexHot', 
	      'type'  => 'switcher', 
	      'title' => '首页—热门文章', 
	    //   'dependency' => array( 'set-themeStyle', '!=', '2' ,'all'),
      	),
      	array( 
	      'id'    => 'set-hideLogin', 
	      'type'  => 'switcher', 
	      'title' => '注册登录', 
	      'before' => '注册登录入口是否显示',
	      'text_on'    => '显示',
  		  'text_off'   => '隐藏',
      	),
      	array( 
	      'id'    => 'set-slide', 
	      'type'  => 'switcher', 
	      'title' => '侧栏工具', 
	      'before' => '请先开启特色功能-经典小工具',
      	),
      	array( 
	      'id'    => 'set-webLink', 
	      'type'  => 'switcher', 
	      'title' => '友情链接', 
	      'before' => '友情链接模块是否显示',
	      'text_on'    => '显示',
  		  'text_off'   => '隐藏',
      	),
    );
		

?>