<?php
	//基础配置
	$setLists = array(
	  array(
	      'id'    => 'set-card', 
	      'type'  => 'select', 
	      'title' => '列表布局', 
	      'options'   =>   array(
	      	'0'     => '默认列表',
	        '1'     => '卡片布局',
	      ),
	      'default'     => '0',
      ),
      array(
	      'id'    => 'set-card-default', 
	      'type'  => 'media', 
	      'title' => '卡片默认封面', 
	      'before'=> '文章内容无图时显示，图片比例4:3',
	      'library' => 'image',
	      'dependency' => array( 'set-card', '==', '1' ),
      ),
      array(
	      'id'    => 'set-cardNum', 
	      'type'  => 'text',
	      'title' => '单行卡片数量', 
	      'before'=> '电脑端一行最多显示6条，最少1条（移动端默认）',
	      'default'     => '4',
	      'dependency' => array( 'set-card', '==', '1' ),
	      'max' => 6,
	      'min' => 1,
      ),
      array(
	      'id'     => 'set-lineHeight',
	      'type'   => 'dimensions',
	      'title'  => '行间距',
	      'before' => '行间隔建议在10~30px左右，默认为0',
	      'width' => false,
	      'units'  => array( 'px' ),
	      'default'     => array(
	        'height'     => '0'
	      ),
	      'dependency' => array( 'set-card', '==', '0' ),
	  ),
	//    array(
	//       'id'     => 'set-lineCardHeight',
	//       'type'   => 'dimensions',
	//       'title'  => '卡间距',
	//       'before' => '行间隔建议在10~30px左右，默认为20px',
	//       'width' => false,
	//       'units'  => array( 'px' ),
	//       'default'     => array(
	//         'height'     => '20'
	//       ),
	//      'dependency' => array( 'set-card', '==', '1' ), 
	//   ),
	  array(
	      'id'    => 'set-titleHidden', 
	      'type'  => 'select', 
	      'title' => '标题行数', 
	      'before'=> '标题最多显示行数，默认显示2行',
	      'options'   =>   array(
	        '1'     => '显示一行',
	        '2'     => '显示两行',
	        '3'     => '显示三行',
	      ),
	      'default'     => '2',
      ),
      array(
	      'id'    => 'set-desSwitcher', 
	      'type'  => 'switcher', 
	      'title' => '描述', 
	      'text_on'  => '显示',
      	  'text_off' => '隐藏',
      ),
      array(
	      'id'    => 'set-desHidden', 
	      'type'  => 'select', 
	      'title' => '描述行数', 
	      'before'=> '描述最多显示行数，默认显示2行',
	      'options'   =>   array(
	        '1'     => '显示一行',
	        '2'     => '显示两行',
	        '3'     => '显示三行',
	      ),
	      'default'     => '2',
	      'dependency' => array( 'set-desSwitcher', '==', '1' ),
      ),
      array(
	      'id'    => 'set-imageHidden', 
	      'type'  => 'switcher', 
	      'title' => '封面',
	      'before'=> '开启之后，无图将显示默认图片',
	      'text_on'  => '显示',
      	  'text_off' => '隐藏',
      	  'dependency' => array( 'set-card', '==', '0' ),
      ),
      array(
	      'id'    => 'set-imageShowNumber', 
	      'type'  => 'select', 
	      'title' => '封面张数',
	      'options'   =>   array(
	        '1'     => '显示一张',
	        '2'     => '自动获取',
	      ),
	      'default'     => '2',
	      'dependency' => array( 'set-imageHidden', '==', '1' ),
      ),
      array(
	      'id'    => 'set-list-default-img', 
	      'type'  => 'media', 
	      'title' => '默认封面', 
	      'before'=> '文章内容无图时显示，图片比例4:3',
	      'library' => 'image',
	      'dependency' => array( 'set-imageShowNumber', '==', '1' ),
      ),
      array( 
	      'id'    => 'set-authorHidden', 
	      'type'    => 'switcher', 
	      'title'   => '发布者',
	      'text_on'  => '显示',
      	  'text_off' => '隐藏',
      ),
      array(
	      'id'    => 'set-viewHidden', 
	      'type'  => 'switcher',
	      'title' => '阅读数',
	      'text_on'  => '显示',
      	  'text_off' => '隐藏',
      ),
	  array( 
	      'id'    => 'set-comHidden', 
	      'type'  => 'switcher', 
	      'title' => '评论数',
	      'text_on'  => '显示',
      	  'text_off' => '隐藏',
      ),
      array(
	      'id'    => 'set-timeHidden', 
	      'type'    => 'switcher', 
	      'title'   => '日期',
	      'text_on'  => '显示',
      	  'text_off' => '隐藏',
      ),
      array(
	      'id'     => 'set-timeFormat',
	      'type'   => 'radio',
	      'title'  => '日期格式',
	      'inline'  => true,
	      'options' => array(
	        '1'    => '一天前',
	        '2'   => '2020-12-21',
	        '3'   => '2020-12-21 12:55',
	        '4'   => '2020年12月21日',
	        '5'   => '2020年12月21日12时55分',
	      ),
	      'default' => '2',
	      'dependency' => array( 'set-timeHidden', '==', '1' ),
	  ),
      array( 
	      'id'    => 'set-classHidden', 
	      'type'    => 'switcher', 
	      'title'   => '分类',
	      'text_on'  => '显示',
      	  'text_off' => '隐藏',
      ),
      array( 
	      'id'    => 'set-tagHidden', 
	      'type'    => 'switcher', 
	      'title'   => 'TAG',
	      'text_on'  => '显示',
      	  'text_off' => '隐藏',
      ),
     
    );
		

?>